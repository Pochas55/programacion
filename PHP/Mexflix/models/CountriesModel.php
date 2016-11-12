<?php
require_once('./models/Model.php');

final class CountriesModel extends Model {
	public $country_id;
	public $country_name;

	public function set( $data = array() ) {
		foreach ( $data as $key => $value ) {
			$$key = htmlentities($value, ENT_QUOTES);
		}

		$this->sql = "REPLACE INTO countries SET country_id = $country_id, country_name = '$country_name'";

		$this->set_query();
	}

	public function get( $id = '' ) {
		$this->sql = ( $id != '' )
			? "SELECT * FROM countries WHERE country_id = $id"
			: "SELECT * FROM countries";

		$this->get_query();

		$data = array();

		foreach ( $this->rows as $key => $value ) {
			array_push( $data, $value );
		}

		return $data;
	}

	public function del( $id = '' ) {
		$this->sql = "DELETE FROM countries WHERE country_id = $id";
		$this->set_query();
	}

	public function __destruct() {
		unset($this);
	}
}