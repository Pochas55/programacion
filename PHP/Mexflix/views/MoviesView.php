<?php
final class MoviesView {
	private $model;
	private static $title = 'MOVIES';

	public function __construct() {
		$this->model = new MoviesModel();
	}

	public function get( $id = '' ) {
		$movies = $this->model->get( $id );

		if ( empty($movies) ) {
			print('<p class="u-message  u-bold  u-error">NO HAY ' . self::$title . '<p>');
		} else {
			if ( count($movies) == 1 ) {
				$html = '
				<article class="App-movie">
					<h2 class="u-message">%s</h2>
					<p>%s</p>
					<p><small>( %s )</small></p>
					<p><small>%s</small></p>
					<p><small>%s</small></p>
					<p><small>%s</small></p>
					<p><small>%s</small></p>
					<p><small>%s</small></p>
					<img src="%s">
					<p>Author: <b>%s</b></p>
					<p>Actors: <b>%s</b></p>
					<p>%s</p>
					<iframe src="%s" frameborder="0" allowfullscreen></iframe>
					<input class="u-button  u-add" type="button" value="Regresar" onclick="history.back()">
				</article>
				';

				$trailer = str_replace('watch?v=', 'embed/', $movies[0]['trailer']);

				printf(
					$html,
					$movies[0]['title'],
					$movies[0]['genres'],
					$movies[0]['imdb_id'],
					$movies[0]['state_name'],
					$movies[0]['category'],
					$movies[0]['countries'],
					$movies[0]['premiere'],
					$movies[0]['rating'],
					$movies[0]['poster'],
					$movies[0]['author'],
					$movies[0]['actors'],
					$movies[0]['plot'],
					$trailer
				);
			} else {
				$html = '
					<h2 class="u-message">GESTIÓN DE ' . self::$title . '</h2>
					<table>
						<tr>
							<th>Title</th>
							<th>Premiere</th>
							<th>Genres</th>
							<th>Countries</th>
							<th>Status</th>
							<th>Category</th>
							<th colspan="3">
								<form method="POST">
									<input type="hidden" name="r" value="add-form">
									<input class="u-button  u-add" type="submit" value="Agregar">
								</form>
							</th>
						</tr>
				';

				for ($n=0; $n < count($movies); $n++) { 
					$html .= '
						<tr>
							<td>' . $movies[$n]['title'] . '</td>
							<td>' . $movies[$n]['premiere'] . '</td>
							<td>' . $movies[$n]['genres'] . '</td>
							<td>' . $movies[$n]['countries'] . '</td>
							<td>' . $movies[$n]['state_name'] . '</td>
							<td>' . $movies[$n]['category'] . '</td>
							<td>
								<form method="POST">
									<input type="hidden" name="r" value="show-record">
									<input type="hidden" name="imdb_id" value="' . $movies[$n]['imdb_id'] . '">
									<input class="u-button  u-show" type="submit" value="Mostrar">
								</form>
							</td>
							<td>
								<form method="POST">
									<input type="hidden" name="r" value="edit-form">
									<input type="hidden" name="imdb_id" value="' . $movies[$n]['imdb_id'] . '">
									<input class="u-button  u-edit" type="submit" value="Editar">
								</form>
							</td>
							<td>
								<form method="POST">
									<input type="hidden" name="r" value="delete-form">
									<input type="hidden" name="imdb_id" value="' . $movies[$n]['imdb_id'] . '">
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
		$status_list = $this->list( new StatusModel(), 'state_id', 'state_name' );
		$genres_list = $this->list( new GenresModel(), 'genre_id', 'genre_name' );
		$countries_list = $this->list( new CountriesModel(), 'country_id', 'country_name' );

		printf('
			<h2 class="u-message">AGREGAR ' . self::$title . '</h2>
			<form method="POST">
				<input type="text" name="imdb_id" placeholder="imdb_id" required>
				<input type="text" name="title" placeholder="título" required>
				<textarea name="plot" cols="22" rows="10" placeholder="descripción"></textarea>
				<input type="text" name="author" placeholder="autor">
				<input type="text" name="actors" placeholder="actores">
				<input type="text" name="premiere" placeholder="estreno" required>
				<input type="url" name="poster" placeholder="url poster">
				<input type="url" name="trailer" placeholder="url trailer">
				<input type="number" name="rating" step=".1" placeholder="rating" required>
				<input type="radio" name="category" id="movie" value="Movie" required><label for="movie">Movie</label>
				<input type="radio" name="category" id="serie" value="Serie" required><label for="serie">Serie</label>
				<select name="status" placeholder="status" required>
					<option value="">status</option>
					%s
				</select>
				<select name="genres[]" placeholder="géneros" multiple required>
					<option value="">géneros</option>
					%s
				</select>
				<select name="countries[]" placeholder="paises" multiple required>
					<option value="">paises</option>
					%s
				</select>
				<input class="u-button  u-add" type="submit" value="Agregar">
				<input type="hidden" name="r" value="add-crud">
			</form>', 
			$status_list,
			$genres_list,
			$countries_list
		);
	}

	public function edit_form( $id = '' ) {
		$movies = $this->model->get( $id );

		if ( empty($movies) ) {
			print('<p class="u-message  u-bold  u-error">NO HAY ' . self::$title . '<p>');
		} else {
			$cat_movie = ($movies[0]['category'] == 'Movie') ? 'checked' : '';
			$cat_serie = ($movies[0]['category'] == 'Serie') ? 'checked' : '';
			$status_list = $this->simple_list_edit( new StatusModel(), 'state_id', 'state_name', $movies[0]['state_name'] );
			$genres_list = $this->multiple_list_edit( new GenresModel(), 'genre_id', 'genre_name', $movies[0]['genres'] );
			$countries_list = $this->multiple_list_edit( new CountriesModel(), 'country_id', 'country_name', $movies[0]['countries'] );


			printf('
				<h2 class="u-message">EDITAR ' . self::$title . '</h2>
				<form method="POST">
					<input type="text" placeholder="imdb_id" value="%s" disabled required>
					<input type="hidden" name="imdb_id" value="%s">
					<input type="text" name="title" placeholder="título" value="%s" required>
					<textarea name="plot" cols="22" rows="10" placeholder="descripción">%s</textarea>
					<input type="text" name="author" placeholder="autor" value="%s">
					<input type="text" name="actors" placeholder="actores" value="%s">
					<input type="text" name="premiere" placeholder="estreno" value="%s" required>
					<input type="url" name="poster" placeholder="url poster" value="%s">
					<input type="url" name="trailer" placeholder="url trailer" value="%s">
					<input type="number" name="rating" step=".1" placeholder="rating" value="%s" required>
					<input type="radio" name="category" id="movie" value="Movie" %s required><label for="movie">Movie</label>
					<input type="radio" name="category" id="serie" value="Serie" %s required><label for="serie">Serie</label>
					<select name="status" placeholder="status" required>
						<option value="">status</option>
						%s
					</select>
					<select name="genres[]" placeholder="géneros" multiple required>
						<option value="">géneros</option>
						%s
					</select>
					<select name="countries[]" placeholder="paises" multiple required>
						<option value="">paises</option>
						%s
					</select>
					<input class="u-button  u-add" type="submit" value="Editar">
					<input type="hidden" name="r" value="edit-crud">
				</form>',
				$movies[0]['imdb_id'],
				$movies[0]['imdb_id'],
				$movies[0]['title'],
				$movies[0]['plot'],
				$movies[0]['author'],
				$movies[0]['actors'],
				$movies[0]['premiere'],
				$movies[0]['poster'],
				$movies[0]['trailer'],
				$movies[0]['rating'],
				$cat_movie,
				$cat_serie,
				$status_list,
				$genres_list,
				$countries_list
			);
		}
	}

	public function del_form( $id = '' ) {
		$movies = $this->model->get( $id );

		if ( empty($movies) ) {
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
					<input type="hidden" name="imdb_id" value="%s">
					<input type="hidden" name="r" value="delete-crud">
				</form>
			';

			printf(
				$html,
				$movies[0]['title'],
				$movies[0]['imdb_id']
			);
		}
	}

	private function list( $table, $id, $name ) {
		$records = $table->get();
		$list = '';

		for ($n=0; $n < count($records); $n++) { 
			$list .= '<option value="' . $records[$n][$id] . '">' . $records[$n][$name] . '</option>';
		}

		return $list;
	}

	private function simple_list_edit( $table, $id, $name, $value ) {
		$records = $table->get();
		$list = '';

		for ($n=0; $n < count($records); $n++) {
			$selected = ( array_search($value, $records[$n]) ) ? 'selected' : '';
			$list .= '<option value="' . $records[$n][$id] . '" ' . $selected . '>' . $records[$n][$name] . '</option>';
		}

		return $list;
	}

	private function multiple_list_edit( $table, $id, $name, $value ) {
		$records = $table->get();
		$list = '';
		$values = explode(',', $value);
		//var_dump($values);
			
		for ($n=0; $n < count($records); $n++) {
			for ($i=0; $i < count($values); $i++) { 
				if ( array_search($values[$i], $records[$n]) ) {
					$selected = ' selected ';
					break;
				} else {
					$selected = '';
				}
			}
			$list .= '<option value="' . $records[$n][$id] . '"' . $selected . '>' . $records[$n][$name] . '</option>';
		}

		return $list;
	}

	public function __destruct() {
		unset($this);
	}
}