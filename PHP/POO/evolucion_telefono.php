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

}


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
