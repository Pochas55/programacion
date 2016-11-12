<?php
require_once('./Model.php');

final class StatusModel extends Model {
	//ATRIBUTOS
	public $state_id;
	public $state_name;

	//MÉTODOS
	public function __construct() {
		//$this->db_name = 'mexflix2';
	}

	public function create( $data = array() ) {
		foreach ( $data as $key => $value ) {
			//Variables Variables
			//http://php.net/manual/es/language.variables.variable.php
			$$key = htmlentities($value, ENT_QUOTES);
		}

		$this->sql = "INSERT INTO status SET state_id = $state_id, state_name = '$state_name'";
		$this->set_query();
	}

	public function read( $id = '' ) {
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

	public function update( $data = array() ) {
		foreach ( $data as $key => $value ) {
			//Variables Variables
			//http://php.net/manual/es/language.variables.variable.php
			$$key = htmlentities($value, ENT_QUOTES);
		}

		$this->sql = "UPDATE status SET state_name = '$state_name' WHERE state_id = $state_id";
		$this->set_query();
	}

	public function delete( $id = '' ) {
		$this->sql = "DELETE FROM status WHERE state_id = $id";
		$this->set_query();
	}

	public function __destruct() {
		unset($this);
	}
}