<?php
final class GenresModel extends Model {
	public $genre_id;
	public $genre_name;

	public function set( $data = array() ) {
		foreach ( $data as $key => $value ) {
			$$key = htmlentities($value, ENT_QUOTES);
		}

		$this->sql = "REPLACE INTO genres SET genre_id = $genre_id, genre_name = '$genre_name'";

		$this->set_query();
	}

	public function get( $id = '' ) {
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

	public function del( $id = '' ) {
		$this->sql = "DELETE FROM genres WHERE genre_id = $id";
		$this->set_query();
	}

	public function __destruct() {
		unset($this);
	}
}