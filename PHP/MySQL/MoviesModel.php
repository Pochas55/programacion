<?php
require_once('./Model.php');

final class MoviesModel extends Model {
	public $imdb_id;
	public $title;
	public $plot;
	public $author;
	public $actors;
	public $premiere;
	public $poster;
	public $trailer;
	public $rating;
	public $category;
	public $state;

	public function create( $data = array() ) {
		foreach ( $data[0] as $key => $value ) {
			$$key = htmlentities($value, ENT_QUOTES);
		}

		$this->sql_transaction[0] = "INSERT INTO movies (imdb_id, title, plot, author, actors, premiere, poster, trailer, rating, category, state) VALUES
			('$imdb_id', '$title', '$plot', '$author', '$actors', '$premiere', '$poster', '$trailer', $rating, '$category', $state)";

		$this->sql_transaction[1] = "INSERT INTO genres_x_movie (movie, genre) VALUES ";

		for ($n=0; $n < count($data[1]); $n++) { 
			$this->sql_transaction[1] .= "('$imdb_id', " . $data[1][$n] . "),";
		}

		$this->sql_transaction[1] = trim($this->sql_transaction[1], ',');

		$this->sql_transaction[2] = "INSERT INTO countries_x_movie (movie, country) VALUES ";

		for ($n=0; $n < count($data[2]); $n++) { 
			$this->sql_transaction[2] .= "('$imdb_id', " . $data[2][$n] . "),";
		}

		$this->sql_transaction[2] = trim($this->sql_transaction[2], ',');

		//var_dump($this->sql_transaction);

		$this->set_transaction();
	}

	public function read( $id = '' ) {
		$this->sql = ( $id != '' )
			? "SELECT m.imdb_id, m.title, m.plot, m.author, m.actors, m.premiere, m.poster, m.trailer, m.rating, m.category, s.state_name, (
					SELECT GROUP_CONCAT(g.genre_name)
					FROM genres AS g
					INNER JOIN genres_x_movie AS gxm
					ON g.genre_id = gxm.genre
					WHERE m.imdb_id = gxm.movie
				) AS genres, (
					SELECT GROUP_CONCAT(c.country_name)
					FROM countries AS c
					INNER JOIN countries_x_movie AS cxm
					ON c.country_id = cxm.country
					WHERE m.imdb_id = cxm.movie
				) AS countries
				FROM movies AS m
				INNER JOIN status AS s
				ON m.state = s.state_id
				WHERE m.imdb_id = '$id'"
			: "SELECT m.imdb_id, m.title, m.plot, m.author, m.actors, m.premiere, m.poster, m.trailer, m.rating, m.category, s.state_name, (
					SELECT GROUP_CONCAT(g.genre_name)
					FROM genres AS g
					INNER JOIN genres_x_movie AS gxm
					ON g.genre_id = gxm.genre
					WHERE m.imdb_id = gxm.movie
				) AS genres, (
					SELECT GROUP_CONCAT(c.country_name)
					FROM countries AS c
					INNER JOIN countries_x_movie AS cxm
					ON c.country_id = cxm.country
					WHERE m.imdb_id = cxm.movie
				) AS countries
				FROM movies AS m
				INNER JOIN status AS s
				ON m.state = s.state_id";

		$this->get_query();

		$data = array();

		foreach ( $this->rows as $key => $value ) {
			array_push( $data, $value );
		}

		return $data;
	}

	public function update( $data = array() ) {
		foreach ( $data[0] as $key => $value ) {
			$$key = htmlentities($value, ENT_QUOTES);
		}

		$this->sql_transaction[0] = "UPDATE movies SET title = '$title', plot = '$plot', author = '$author', actors = '$actors', premiere = '$premiere', poster = '$poster', trailer = '$trailer', rating = $rating, category = '$category', state = $state WHERE imdb_id = '$imdb_id'";

		$this->sql_transaction[1] = "DELETE FROM genres_x_movie WHERE movie = '$imdb_id'";

		$this->sql_transaction[2] = "INSERT INTO genres_x_movie (movie, genre) VALUES ";

		for ($n=0; $n < count($data[1]); $n++) { 
			$this->sql_transaction[2] .= "('$imdb_id', " . $data[1][$n] . "),";
		}

		$this->sql_transaction[2] = trim($this->sql_transaction[2], ',');

		$this->sql_transaction[3] = "DELETE FROM countries_x_movie WHERE movie = '$imdb_id'";

		$this->sql_transaction[4] = "INSERT INTO countries_x_movie (movie, country) VALUES ";

		for ($n=0; $n < count($data[2]); $n++) { 
			$this->sql_transaction[4] .= "('$imdb_id', " . $data[2][$n] . "),";
		}

		$this->sql_transaction[4] = trim($this->sql_transaction[4], ',');

		var_dump($this->sql_transaction);

		$this->set_transaction();
	}

	public function delete( $id = '' ) {
		$this->sql = "CALL delete_movie('$id')";
		$this->set_query();
	}

	public function __destruct() {
		unset($this);
	}
}