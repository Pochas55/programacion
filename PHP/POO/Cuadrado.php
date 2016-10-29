<?php
class Cuadrado extends PoligonoRegular {
	//ATRIBUTOS
	private $lado;
	public static $lados = 4;

	//MÉTODOS
	public function __construct($l) {
		$this->lado = $l;
	}

	public function perimetro() {
		return $this->lado * self::$lados;
	}

	public function area() {
		return pow($this->lado, 2);
	}
}
