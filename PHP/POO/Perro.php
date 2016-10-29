<?php
class Perro {
	/*
		Modificadores de Acceso
		Los métodos y atributos de una clase pueden tener diferentes níveles de acceso, los cuales pueden ser:
			public: Acceso desde cualquier método de la clase u objeto que lo invoque
			private: Acceso sólo desde los métodos de la clase, los objetos no los pueden invocar
			protected: Acceso sólo desde los métodos de la clase y subclases que la hereden, los objetos no los pueden invocar

			static: Pueden ser accedidos sin necesidad de instanciar un objeto y su valor es estático (no cambia)
	*/

	//ATRIBUTOS
	public $nombre;
	public $edad;
	public $raza;
	public $genero;
	public $esterilizado;
	public static $mejor_cualidad = 'Fidelidad';
	public static $mejor_amigo = 'Hombre';

	//MÉTODOS MÁGICOS
	//http://php.net/manual/es/language.oop5.magic.php

	//CONSTRUCTOR: método que se ejecuta automáticamente al inicio de instanciar la clase
	public function __construct() {

	}

	//DESTRUCTOR: método que se ejecuta automáticamente al final de instanciar la clase
	public function __destruct() {

	}

	//MÉTODOS
	public function ladrar() {

	}

	public function comer($comida) {

	}

	public function aparecer($imagen) {

	}

	public static function que_es_un_perro() {
		/*
			:: es el operador de resolución de ámbito, se puede usar con el nombre de la clase o con la palabra reservada self.
			Sirve para invocar:
				Fuera de la Clase
					Métodos Estáticos
					Atributos Estáticos
					Constantes
				Dentro de la Clase
					Métodos Estáticos o No Estáticos
					Atributos Estáticos
					Constantes
		*/
		echo '
			<p>
				El perro o perro doméstico (Canis lupus familiaris)1 2 3 o también llamado can4 es un mamífero carnívoro de la familia de los cánidos, que constituye una subespecie del lobo (Canis lupus).
			</p>
			<p>
				Un estudio publicado por la revista Nature revela que, gracias al proceso de domesticación, el organismo del perro se ha adaptado a cierta clase de alimentos, en este caso el almidón.
			</p>
			<p>
				Su tamaño o talla, su forma y pelaje es muy diverso según la raza. Posee un oído y olfato muy desarrollados, siendo este último su principal órgano sensorial.
			</p>
			<p>
				En las razas pequeñas puede alcanzar una longevidad de cerca de 20 años, con atención esmerada por parte del propietario, de otra forma su vida en promedio es alrededor de los 15 años.
			</p>
		';
	}
}
