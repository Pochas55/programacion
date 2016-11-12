<?php
require_once('./models/Model.php');

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

	public function set( $data = array() ) {
		foreach ( $data[0] as $key => $value ) {
			$$key = htmlentities($value, ENT_QUOTES);
		}

		$this->sql_transaction[0] = "CALL delete_movie('$id')";

		$this->sql_transaction[1] = "INSERT INTO movies (imdb_id, title, plot, author, actors, premiere, poster, trailer, rating, category, state) VALUES
			('$imdb_id', '$title', '$plot', '$author', '$actors', '$premiere', '$poster', '$trailer', $rating, '$category', $state)";


		$this->sql_transaction[2] = "INSERT INTO genres_x_movie (movie, genre) VALUES ";

		for ($n=0; $n < count($data[1]); $n++) { 
			$this->sql_transaction[2] .= "('$imdb_id', " . $data[1][$n] . "),";
		}

		$this->sql_transaction[2] = trim($this->sql_transaction[2], ',');

		$this->sql_transaction[3] = "INSERT INTO countries_x_movie (movie, country) VALUES ";

		for ($n=0; $n < count($data[2]); $n++) { 
			$this->sql_transaction[3] .= "('$imdb_id', " . $data[2][$n] . "),";
		}

		$this->sql_transaction[3] = trim($this->sql_transaction[3], ',');

		var_dump($this->sql_transaction);

		$this->set_transaction();
	}
	
	public function get( $id = '' ) {
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

	public function del( $id = '' ) {
		$this->sql = "CALL delete_movie('$id')";
		$this->set_query();
	}

	public function __destruct() {
		unset($this);
	}
}