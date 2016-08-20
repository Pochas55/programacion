//alert('Funciona');
//comentario de una linea
/*
comentario 
multilinea
*/
//función anónima autoejecutable
(function (d, w, n) {
	'use strict';

	console.log(d);
	//alert(d);

	//1.Objeto Literal
	var perro = {
		//definición de atributos
		nombre : 'kEnAi',
		edad : 3.75,
		raza : 'Criollo',
		genero : 'Macho',
		esterilizado : true,
		//definición de métodos
		ladrar : function () {
			alert('guauu guauu!!!');
		},
		comer : function (comida) {
			//concatenación
			alert(this.nombre + ' come ' + comida);
		},
		junto : function (imagen) {
			d.write('<img src="' + imagen + '">');
		}
	};

	console.log(
		perro,
		perro.nombre,
		perro.raza,
		perro.edad,
		perro.genero,
		perro.esterilizado
	);

	perro.ladrar();
	perro.comer('croquetas');
	perro.junto('./img/kenai.jpg');

	//2.Prototipo Object
	var perro2 = new Object();
	perro2.nombre = 'Paco';
	perro2.edad = 2;
	perro2.raza = 'Cocker Spaniel';
	perro2.genero = 'Macho';
	perro2.esterilizado = false;
	perro2.ladrar = function () {
		alert('guau guau!!!');
	};
	perro2.comer = function (comida) {
		alert(this.nombre + ' come ' + comida);
	};
	perro2.junto  = function (imagen) {
		d.write('<img src="' + imagen + '">');
	};

	console.log(
		perro2,
		perro2.nombre,
		perro2.raza,
		perro2.edad,
		perro2.genero,
		perro2.esterilizado
	);

	perro2.ladrar();
	perro2.comer('tacos');
	perro2.junto('http://t1.uccdn.com/images/7/5/5/img_como_cuidar_de_un_cocker_spaniel_5557_orig.jpg');

	//3.Función constructora
	function Perro(nombre, edad, raza, genero, esterilizado) {
		//atributos
		this.nombre = nombre;
		this.edad = edad;
		this.raza = raza;
		this.genero = genero;
		this.esterilizado = esterilizado;

		//métodos
		this.ladrar = function () {
			alert('guau guau!!!');	
		};

		this.comer = function (comida) {
			alert(this.nombre + ' come ' + comida);	
		};

		this.junto = function (imagen) {
			d.write('<img src="' + imagen + '">');				
		};
	};

	var perro3 = new Perro('Lola', 8, 'Schnauzer', 'Hembra', false),
		perro31 = new Perro('Tina', 6, 'Dálmata', 'Hembra', true);

	console.log(
		perro3,
		perro3.nombre,
		perro31,
		perro31.nombre
	);

	perro3.ladrar();
	perro3.comer('pollo');
	perro3.junto('https://i.ytimg.com/vi/LgWmzMS46Y0/hqdefault.jpg');
	perro31.ladrar();
	perro31.comer('zapato');
	perro3.junto('http://www.wikipets.es/wp-content/uploads/sites/default/files/library/fotos-dalmata_4.jpg');

	//4.Clases (apartir de ES6 o ES2015)
	//class Perro - no puede haber 2 identificadores con el mismo nombre
	class Dog {
		//El constructor es un método especial que se ejecuta en el momento de instanciar la clase
		constructor(nombre, edad, raza, genero, esterilizado) {
			this.nombre = nombre;
			this.edad = edad;
			this.raza = raza;
			this.genero = genero;
			this.esterilizado = esterilizado;
		}

		ladrar() {
			alert('guau guau!!!');	
		};

		comer(comida) {
			alert(this.nombre + ' come ' + comida);	
		};

		junto(imagen) {
			d.write('<img src="' + imagen + '">');				
		};
	}

	var perro4 = new Dog('Boni', 12, 'Boxer', 'Hembra', false),
		perro41 = new Dog('Cachito', 3, 'Bull Terrier', 'Macho', true);

	console.log(
		perro4,
		perro4.nombre,
		perro41,
		perro41.nombre
	);

	perro4.ladrar();
	perro4.comer('sillón');
	perro4.junto('http://institutoperro.com/wp-content/uploads/2015/07/shutterstock_122056762-boxer.jpg');
	perro41.ladrar();
	perro41.comer('carnaza');
	perro41.junto('http://www.elmundodelperro.net/fotos/72/Perfil_Canino.jpg');
})(document, window, navigator);

/*
Esto marcaría error de sintaxis por que d no esta definido
console.log(d);
alert(d);
console.log(document);
alert(document);
*/