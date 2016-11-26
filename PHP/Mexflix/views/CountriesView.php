<?php 
final class CountriesView {
	private $model;
	private static $title = 'COUNTRIES';

	public function __construct() {
		$this->model = new CountriesModel();
	}

	public function get( $id = '' ) {
		$countries = $this->model->get( $id );

		if ( empty($countries) ) {
			print('<p class="u-message  u-bold  u-error">NO HAY ' . self::$title . '<p>');
		} else {
			$html = '
				<h2 class="u-message">GESTIÓN DE ' . self::$title . '</h2>
				<table>
					<tr>
						<th>Id</th>
						<th>Paises</th>
						<th colspan="2">
							<form method="POST">
								<input type="hidden" name="r" value="add-form">
								<input class="u-button  u-add" type="submit" value="Agregar">
							</form>
						</th>
					</tr>
			';

			for ($n=0; $n < count($countries); $n++) { 
				$html .= '
					<tr>
						<td>' . $countries[$n]['country_id'] . '</td>
						<td>' . $countries[$n]['country_name'] . '</td>
						<td>
							<form method="POST">
								<input type="hidden" name="r" value="edit-form">
								<input type="hidden" name="country_id" value="' . $countries[$n]['country_id'] . '">
								<input class="u-button  u-edit" type="submit" value="Editar">
							</form>
						</td>
						<td>
							<form method="POST">
								<input type="hidden" name="r" value="delete-form">
								<input type="hidden" name="country_id" value="' . $countries[$n]['country_id'] . '">
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
		$this->model->set( $data );
		print('<p class="u-message  u-bold  u-add">' . self::$title . ' SALVADO</p>');
		RouterController::app_reload();
	}

	public function del( $id = '' ) {
		$this->model->del( $id );
		print('<p class="u-message  u-bold  u-add">' . self::$title . ' ELIMINADO</p>');
		RouterController::app_reload();
	}

	public function add_form() {
		print('
			<h2 class="u-message">AGREGAR ' . self::$title . '</h2>
			<form method="POST">
				<input type="text" name="country_name" placeholder="country" required>
				<input class="u-button  u-add" type="submit" value="Agregar">
				<input type="hidden" name="r" value="add-crud">
			</form>
		');
	}

	public function edit_form( $id = '' ) {
		$countries = $this->model->get( $id );

		if ( empty($countries) ) {
			print('<p class="u-message  u-bold  u-error">NO HAY ' . self::$title . '<p>');
		} else {
			$html = '
				<h2 class="u-message">EDITAR ' . self::$title . '</h2>
				<form method="POST">
					<input type="hidden" name="country_id" value="%s">
					<input type="text" name="country_name" placeholder="status" value="%s" required>
					<input  class="u-button  u-edit" type="submit" value="Editar">
					<input type="hidden" name="r" value="edit-crud">
				</form>
			';

			printf(
				$html,
				$countries[0]['country_id'],
				$countries[0]['country_name']
			);
		}
	}

	public function del_form( $id = '' ) {
		$countries = $this->model->get( $id );

		if ( empty($countries) ) {
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
					<input type="hidden" name="country_id" value="%s">
					<input type="hidden" name="r" value="delete-crud">
				</form>
			';

			printf(
				$html,
				$countries[0]['country_name'],
				$countries[0]['country_id']
			);
		}
	}

	public function __destruct() {
		unset($this);
	}
}