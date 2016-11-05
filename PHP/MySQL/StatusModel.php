<?php
require_once('./Model.php');

final class StatusModel extends Model {
	//ATRIBUTOS
	public $state_id;
	public $state_name;

	//MÉTODOS
	public function __construct() {

	}

	public function create( $data = array() ) {}

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

	public function update( $data = array() ) {}

	public function delete( $id = '' ) {}

	public function __destruct() {
		unset($this);
	}
}