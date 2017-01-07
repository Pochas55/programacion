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
						</tr>
					'; 
				}

				$html .= '</table>';
				
				print($html);
			}

		}
	}

	public function __destruct() {
		unset($this);
	}
}