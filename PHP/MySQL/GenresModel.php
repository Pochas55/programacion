<?php
require_once('./Model.php');

final class GenresModel extends Model {
	public $genre_id;
	public $genre_name;

	public function create( $data = array() ) {
		foreach ( $data as $key => $value ) {
			$$key = htmlentities($value, ENT_QUOTES);
		}

		$this->sql = "INSERT INTO genres SET genre_id = $genre_id, genre_name = '$genre_name'";

		$this->set_query();
	}

	public function read( $id = '' ) {
		$this->sql = ( $id != '' )
			? "SELECT * FROM genres WHERE genre_id = $id"
			: "SELECT * FROM genres";

		$this->get_query();

		$data = array();

		foreach ( $this->rows as $key => $value ) {
			array_push( $data, $value );
		}

		return $data;
	}

	public function update( $data = array() ) {
		foreach ( $data as $key => $value ) {
			$$key = htmlentities($value, ENT_QUOTES);
		}

		$this->sql = "UPDATE genres SET genre_name = '$genre_name' WHERE genre_id = $genre_id";

		$this->set_query();
	}

	public function delete( $id = '' ) {
		$this->sql = "DELETE FROM genres WHERE genre_id = $id";
		$this->set_query();
	}

	public function __destruct() {
		unset($this);
	}
}