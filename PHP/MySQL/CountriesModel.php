<?php
require_once('./Model.php');

final class CountriesModel extends Model {
	public $country_id;
	public $country_name;

	public function create( $data = array() ) {
		foreach ( $data as $key => $value ) {
			$$key = $value;
		}

		$this->sql = "INSERT INTO countries SET country_id = $country_id, country_name = '$country_name'";

		$this->set_query();
	}

	public function read( $id = '' ) {
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

	public function update( $data = array() ) {
		foreach ( $data as $key => $value ) {
			$$key = $value;
		}

		$this->sql = "UPDATE countries SET country_name = '$country_name' WHERE country_id = $country_id";

		$this->set_query();
	}

	public function delete( $id = '' ) {
		$this->sql = "DELETE FROM countries WHERE country_id = $id";
		$this->set_query();
	}

	public function __destruct() {
		unset($this);
	}
}