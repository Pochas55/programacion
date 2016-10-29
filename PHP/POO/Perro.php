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
	private $pulgas;
	public static $mejor_cualidad = 'Fidelidad';
	public static $mejor_amigo = 'Hombre';

	//MÉTODOS MÁGICOS
	//http://php.net/manual/es/language.oop5.magic.php

	//CONSTRUCTOR: método que se ejecuta automáticamente al inicio de instanciar la clase
	public function __construct($n, $e, $r, $g, $es, $p) {
		echo '<p><mark>Hola soy el Constructor de la Clase</mark></p>';

		$this->nombre = $n;
		$this->edad = $e;
		$this->raza = $r;
		$this->genero = ($g) ? 'Macho' : 'Hembra';
		$this->esterilizado = ($es) ? 'Esterilizado' : 'No Esterilizado';
		$this->pulgas = ($p) ? 'Tiene pulgas' : 'Desinfectado';
	}

	//DESTRUCTOR: método que se ejecuta automáticamente al final de instanciar la clase
	public function __destruct() {
		echo '<p><mark>Adios soy el Destructor de la Clase</mark></p>';
		unset($this);
	}

	//MÉTODOS
	public function ladrar() {
		echo '<p>guau guaau !!!</p>';
	}

	public function comer($comida = 'croquetas') {
		echo '<p>' . $this->nombre . ' come ' . $comida . '</p>';
	}

	public function aparecer($imagen) {
		echo '<img src="' . $imagen . '">';
	}

	public function tiene_pulgas() {
		echo '<p>' . $this->pulgas . '</p>';
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
				El perro o perro doméstico (Canis lupus familiaris) o también llamado can es un mamífero carnívoro de la familia de los cánidos, que constituye una subespecie del lobo (Canis lupus).
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

		Perro::ladrar();
		self::ladrar();
	}
}

//Puedo acceder a estos métodos y atributos sin instanciar la clase porque son Estáticos
Perro::que_es_un_perro();
echo '<p>Mejor Cualidad de los perros: ' . Perro::$mejor_cualidad . '</p>';
echo '<p>Mejor Amigo de los perros: ' . Perro::$mejor_amigo . '</p>';

//Instanciar un objeto de mi clase
$kenai = new Perro('kEnAi', 4, 'Callejero', true, true, false);
//echo $kenai;
var_dump($kenai);
echo '<h1>' . $kenai->nombre . '</h1>';
echo '<h2>' . $kenai->raza . '</h2>';
echo '<h3>' . $kenai->edad . '</h3>';
echo '<h4>' . $kenai->genero . '</h4>';
echo '<h5>' . $kenai->esterilizado . '</h5>';
//echo '<h6>' . $kenai->pulgas . '</h6>';

$kenai->ladrar();
$kenai->comer();
$kenai->comer('tacos');
$kenai->aparecer('http://jonmircha.github.io/slides-poo-js/img/kenai.jpg');
$kenai->tiene_pulgas();
