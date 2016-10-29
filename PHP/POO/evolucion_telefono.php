<?php
class Telefono {
	public $marca;
	public $modelo;
	protected $medio = 'alámbrico';
	protected $transmision = 'analógica';

	public function __construct($marca, $modelo) {
		$this->marca = $marca;
		$this->modelo = $modelo;
	}

	public function llamar() {
		echo '<p>Riiing Riiiing!!!</p>';
	}

	public function imprime_info() {
		echo '
			<ul>
				<li>' . $this->marca . '</li>
				<li>' . $this->modelo . '</li>
				<li>' . $this->medio . '</li>
				<li>' . $this->transmision . '</li>
			</ul>
		';
	}
}

//HERENCIA: Los objetos pueden heredar propiedades y métodos de otros, mediante la extensión (herencia) de clases, cuya característica representa la relación existente entre diferentes objetos. Para definir una clase como extención de otra se utiliza la palabra clave extends

class Celular extends Telefono {
	protected $medio = 'inalámbrico';
	protected $transmision = 'digital';

	public function __construct($marca, $modelo) {
		parent::__construct($marca, $modelo);
	}

	public function vibrar() {
		echo '<p>BRRR BRRR!!!</p>';
	}
}

final class SmartPhone extends Celular {
	public $datos = 'Tengo Internet';

	public function __construct($marca, $modelo) {
		parent::__construct($marca, $modelo);
	}

	//POLIMORFISMO: Es la capacidad que da a diferentes objetos, la posibilidad de contar con métodos y atributos de igual nombre, sin que los de un objeto interfieran con el de otro
	public function imprime_info() {
		echo '
			<ul>
				<li>' . $this->marca . '</li>
				<li>' . $this->modelo . '</li>
				<li>' . $this->medio . '</li>
				<li>' . $this->transmision . '</li>
				<li>' . $this->datos . '</li>
			</ul>
		';
	}
}

// class FutureSmartPhone extends SmartPhone { }

echo '<h2>Tipos de Clases en PHP</h2>';
/*
	Tipos de clases en PHP:
		Instanciables
			Ser instanciada (se pueden crear objetos) y/o se pueden heredar
		Heredadas
			Guardar relación con métodos y atributos de otra
		Finales
			Es Instanciables pero no se puede heredar
		Abstractas
			Sirven de modelo para otras, NO se pueden instanciar y DEBEN heredarse
*/
echo '<img src="http://bextlan.com/img/para-cursos/tipos-clases-php.png">';


echo '<h1>Evolución del Teléfono</h1>';


echo '<h2>Teléfono:</h2>';
$tel_casa = new Telefono('Panasonic', 'KX-TS550');
$tel_casa->llamar();
$tel_casa->imprime_info();


echo '<h2>Celular:</h2>';
$mi_cel = new Celular('Nokia', '5120');
$mi_cel->llamar();
$mi_cel->vibrar();
$mi_cel->imprime_info();


echo '<h2>SmartPhone:</h2>';
$mi_sp = new SmartPhone('Motorola', 'G4');
$mi_sp->llamar();
$mi_sp->vibrar();
$mi_sp->imprime_info();
