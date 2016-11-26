<?php
final class GenresView {
	private $model;
	private static $title = 'GENRES';

	public function __construct() {
		$this->model = new GenresModel();
	}

	public function get( $id = '' ) {
		$genres = $this->model->get( $id );

		if ( empty($genres) ) {
			print('<p class="u-message  u-bold  u-error">NO HAY ' . self::$title . '<p>');
		} else {
			$html = '
				<h2 class="u-message">GESTIÓN DE ' . self::$title . '</h2>
				<table>
					<tr>
						<th>Id</th>
						<th>Genres</th>
						<th colspan="2">
							<form method="POST">
								<input type="hidden" name="r" value="add-form">
								<input class="u-button  u-add" type="submit" value="Agregar">
							</form>
						</th>
					</tr>
			';

			for ($n=0; $n < count($genres); $n++) { 
				$html .= '
					<tr>
						<td>' . $genres[$n]['genre_id'] . '</td>
						<td>' . $genres[$n]['genre_name'] . '</td>
						<td>
							<form method="POST">
								<input type="hidden" name="r" value="edit-form">
								<input type="hidden" name="genre_id" value="' . $genres[$n]['genre_id'] . '">
								<input class="u-button  u-edit" type="submit" value="Editar">
							</form>
						</td>
						<td>
							<form method="POST">
								<input type="hidden" name="r" value="delete-form">
								<input type="hidden" name="genre_id" value="' . $genres[$n]['genre_id'] . '">
								<input class="u-button  u-delete" type="submit" value="Eliminar">
							</form>
						</td>
					</tr>
				'; 
			}

			$html .= '</table>';

			print($html);
		}
	}

	public function set( $data = array() ) {
		$this->model->set($data);
		print('<p class="u-message  u-bold  u-add">' . self::$title . ' SALVADO</p>');
		RouterController::app_reload();
	}

	public function del( $id = '' ) {
		$this->model->del($id);
		print('<p class="u-message  u-bold  u-delete">' . self::$title . ' ELIMINADO</p>');
		RouterController::app_reload();
	}

	public function add_form() {
		print('
			<h2 class="u-message">AGREGAR ' . self::$title . '</h2>
			<form method="POST">
				<input type="text" name="genre_name" placeholder="status" required>
				<input class="u-button  u-add" type="submit" value="Agregar">
				<input type="hidden" name="r" value="add-crud">
			</form>
		');
	}

	public function edit_form( $id = '' ) {
		$genres = $this->model->get( $id );

		if ( empty($genres) ) {
			print('<p class="u-message  u-bold  u-error">NO HAY ' . self::$title . '<p>');
		} else {
			$html = '
				<h2 class="u-message">EDITAR ' . self::$title . '</h2>
				<form method="POST">
					<input type="hidden" name="genre_id" value="%s">
					<input type="text" name="genre_name" placeholder="status" value="%s" required>
					<input  class="u-button  u-edit" type="submit" value="Editar">
					<input type="hidden" name="r" value="edit-crud">
				</form>
			';

			printf(
				$html,
				$genres[0]['genre_id'],
				$genres[0]['genre_name']
			);
		}
	}

	public function del_form( $id = '' ) {
		$genres = $this->model->get( $id );

		if ( empty($genres) ) {
			print('<p class="u-message  u-bold  u-error">NO HAY ' . self::$title . '<p>');
		} else {
			$html = '
				<h2 class="u-message">ELIMINAR ' . self::$title . '</h2>
				<form method="POST">
					<p class="u-message">
						¿Estas seguro de eliminar el ' . self::$title . ': 
						<mark class="u-message  u-bold">%s</mark>?
					</p>
					<input  class="u-button  u-delete" type="submit" value="SI">
					<input class="u-button  u-add" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="genre_id" value="%s">
					<input type="hidden" name="r" value="delete-crud">
				</form>
			';

			printf(
				$html,
				$genres[0]['genre_name'],
				$genres[0]['genre_id']
			);
		}
	}

	public function __destruct() {
		unset($this);
	}
}