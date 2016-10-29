<?php
class Hexagono extends PoligonoRegular {
	private $lado;
	private $apotema;
	public static $lados = 6;

	public function __construct($l, $a) {
		$this->lado = $l;
		$this->apotema = $a;
	}

	public function perimetro() {
		return self::$lados * $this->lado;
	}

	public function area() {
		return ( self::perimetro() * $this->apotema ) / 2;
	}
}
