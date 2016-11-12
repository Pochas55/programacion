<?php
require_once('./Model.php');

final class StatusModel extends Model {
	public $state_id;
	public $state_name;

	public function set( $data = array() ) {
		foreach ( $data as $key => $value ) {
			$$key = htmlentities($value, ENT_QUOTES);
		}

		$this->sql = "REPLACE INTO status SET state_id = $state_id, state_name = '$state_name'";
		$this->set_query();
	}

	public function get( $id = '' ) {
		$this->sql = ( $id != '' )
			? "SELECT * FROM status WHERE state_id = $id"
			: "SELECT * FROM status";

		$this->get_query();

		$data = array();

		foreach ( $this->rows as $key => $value ) {
			array_push( $data, $value );
		}

		return $data;
	}

	public function del( $id = '' ) {
		$this->sql = "DELETE FROM status WHERE state_id = $id";
		$this->set_query();
	}

	public function __destruct() {
		unset($this);
	}
}