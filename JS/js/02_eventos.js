//alert('funciona');

function rojo(evento) {
	document.body.style.backgroundColor = 'red';
	document.body.style.color = 'white';
	console.log(evento);
}

(function (d) {
	'use strict';

	var btnVerde = d.querySelector('#verde'),
		btnAzul = d.querySelector('#azul'),
		btnReset = d.querySelector('#resetear'),
		btns = d.querySelectorAll('button');

	function verde(e) {
		d.body.style.backgroundColor = 'green';
		d.body.style.color = 'white';
		
		console.log(e);

		e.target.textContent = 'He pulsado el botón';
		e.target.style.fontSize = '300%';
		e.target.style.backgroundColor = 'black';
		e.target.style.color = 'white';
	}

	function azul(e) {
		var el = e.target;

		d.body.style.backgroundColor = 'blue';
		d.body.style.color = 'white';
		
		console.log(e);

		el.style.fontSize = '200%';
		el.style.backgroundColor = 'skyblue';
	}

	//Manejador de eventos semántico
	btnVerde.onclick = verde;

	//Manejador de eventos múltiple
	btnAzul.addEventListener('click', azul);

	btnReset.addEventListener('click', function (e) {
		d.body.style.backgroundColor = '';
		d.body.style.color = '';

		for (var n = 0; n < btns.length; n++) {
			btns[n].style.fontSize = '';
			btns[n].style.backgroundColor = '';
			btns[n].style.color = '';
		}

		btnAzul.removeEventListener('click', azul);
	});
})(document);

(function (d, w) {
	'use strict';

	//https://www.youtube.com/watch?v=wkOwM8Tbrz0
	var fecha = new Date(),
		hora = fecha.getHours(),
		hojaCSS = d.createElement('link'),
		saludo = d.querySelector('#saludo'),
		btnIniciarReloj = d.querySelector('#iniciar-reloj'),
		btnIniciarAlarma = d.querySelector('#iniciar-alarma'),
		btnDetenerReloj = d.querySelector('#detener-reloj'),
		btnDetenerAlarma = d.querySelector('#detener-alarma'),
		fechaFormato = fecha.toLocaleTimeString(),
		reloj = d.querySelector('#reloj'),
		alarma = d.createElement('audio'),
		temporizadorReloj,
		temporizadorAlarma;

	function saludar(e) {
		/*
		alert('Se ha ejecutado la función saludar');
		console.log(e);
		*/
		/*
			No me jodas 0-5
			Buenos días 6-11
			Buenas tardes 12-18 
			Buenas noches 19-23
		*/

		/*
			Si uso < o > excluyo de la condición el valor de comparación
			Si uso <= o >= incluyo de la condición el valor de comparación
		*/
		//if (hora < 6) {
		if (hora <= 5) {
			saludo.innerHTML = '<h3>Vete a dormir!!!</h3>';
			hojaCSS.href = './css/duermete.css';
		} else if(hora >= 6 && hora <= 11) {
			saludo.innerHTML = '<h3>Buenos días!!!</h3>';
			hojaCSS.href = './css/dia.css';
		} else if(hora >= 12 && hora <= 18) {
			saludo.innerHTML = '<h3>Buenas tardes!!!</h3>';
			hojaCSS.href = './css/tarde.css';
		} else {
			saludo.innerHTML = '<h3>Buenas noches!!!</h3>';
			hojaCSS.href = './css/noche.css';
		}

		hojaCSS.rel = 'stylesheet';
		d.head.appendChild(hojaCSS);	
	}

	console.log(fecha, hora);

	w.onload = saludar;
	reloj.style.fontSize = '500%';
	alarma.src = './audio/alarma.mp3';
	//alarma.controls = true;
	//d.body.appendChild(alarma);

	btnIniciarReloj.onclick = function () {
		temporizadorReloj = setInterval(function () {
			reloj.innerHTML = new Date().toLocaleTimeString();
		}, 1000);
	};

	btnIniciarAlarma.addEventListener('click', function () {
		temporizadorAlarma = setTimeout(function () {
			alarma.play();
		}, 3000);
	});

	btnDetenerReloj.onclick = function () {
		clearInterval(temporizadorReloj);
	};

	btnDetenerAlarma.addEventListener('click', function () {
		clearTimeout(temporizadorAlarma);
	});
})(document, window);