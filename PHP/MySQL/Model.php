<?php
//Clase Abstracta que nos permitirá conectarnos a MySQL
abstract class Model {
	//ATRIBUTOS
	private static $db_host = 'localhost';
	private static $db_user = 'root';
	private static $db_pass = '';
	private static $db_name = 'mexflix32';
	private static $db_charset = 'utf8';
	private $mysql;
	protected $sql;
	protected $rows = array();
	private $result;

	//MÉTODOS
	//métodos abstractos para CRUD de clases que hereden
	abstract protected function create();
	abstract protected function read();
	abstract protected function update();
	abstract protected function delete();

	//método privado para conectarse a la base de datos
	private function db_open() {
		//http://php.net/manual/es/book.mysqli.php
		$this->mysql = new mysqli(
			self::$db_host,
			self::$db_user,
			self::$db_pass,
			self::$db_name
		);

		try {
			if ( $this->mysql->connect_errno ) {
				throw new Exception(
					'<li>Error N°: <mark>' . $this->mysql->connect_errno . '</mark></li>' .
					'<li>Mensaje del Error: <mark>' . $this->mysql->connect_error . '</mark></li>'
				);
			} else {
				$this->mysql->set_charset( self::$db_charset );
			}
		} catch (Exception $e) {
			print '<h3>Error en la conexión a MySQL</h3><ul>' . $e->getMessage() . '</ul>';
			die();
		}
	}

	//método privado para desconectarse de la base de datos
	private function db_close() {
		$this->mysql->close();
	}

	//establecer un query que afecte datos (INSERT, DELETE o UPDATE)
	protected function set_query() {
		$this->db_open();
		$this->mysql->query( $this->sql );
		$this->db_close();
	}

	protected function set_trasaction() {

	}

	//obtener datos de un query (SELECT)
	protected function get_query() {
		$this->db_open();
		$this->result = $this->mysql->query( $this->sql );
		while ( $this->rows[] = $this->result->fetch_assoc() );
		$this->result->free();
		$this->db_close();
		return array_pop( $this->rows );
	}
}