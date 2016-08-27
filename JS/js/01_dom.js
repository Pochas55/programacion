//alert('Funciona');
(function () {
	'use strict';

	//Analisis del código HTML del Home de Bextlán - bextlan.com
	document.getElementsByTagName('li');
	document.getElementsByTagName('li').length;
	document.getElementsByTagName('li')[2];

	document.getElementsByClassName('menu');
	document.getElementsByClassName('menu').length;
	document.getElementsByClassName('menu')[0];

	document.getElementById('subscription');

	document.getElementsByName('email');
	document.getElementsByName('email').length;
	document.getElementsByName('email')[0];

	document.querySelectorAll('section');

	document.querySelectorAll('[href]');
	document.querySelectorAll('[href]').length;

	document.querySelectorAll('[name="email"]');
	document.querySelectorAll('[placeholder="Tu email"]');
	document.querySelectorAll('[placeholder="Tu email"]')[0];
	document.querySelectorAll('.menu');
	document.querySelectorAll('#loader');

	document.querySelector('#loader');
	//document.querySelector('#loader').length;
	//document.querySelector('#loader')[0];

	document.querySelectorAll('li');
	document.querySelector('li');
})();

(function (d) {
	'use strict';

	var lista = d.getElementById('lista'),
		li = d.createElement('li'),
		txtLi = d.createTextNode('Lista 6'),
		p1 = d.querySelector('#uno'),
		p2 = d.querySelector('#dos'),
		p3,
		container = d.querySelector('#container'),
		otroLi,
		a = d.querySelector('.link'),
		divs;

		/*
		console.log(
			lista,
			lista.parentNode,
			lista.parentElement,
			lista.childNodes,
			lista.children,
			lista.firstChild,
			lista.firstElementChild,
			lista.lastChild,
			lista.lastElementChild,
			lista.previousSibling,
			lista.previousElementSibling,
			lista.nextSibling,
			lista.nextElementSibling
		);
		*/
		
		li.appendChild(txtLi);
		lista.appendChild(li);

		p3 = p2.cloneNode(true);
		container.appendChild(p3);

		lista.removeChild(lista.firstElementChild);
		otroLi = li.cloneNode(false);
		lista.insertBefore(otroLi, lista.children[0]);
		lista.replaceChild(lista.children[0], lista.children[3]);

		lista.firstChild.nodeValue = 'Hola soy el primer nodo';
		otroLi.innerText = '<b>Lista 7</b>';
		p1.innerHTML = '<b>Hola, este es el contenido del párrafo 1</b>';

		/*
		console.log(
			container.className,
			container.classList,
			container.classList[1],
			container.classList.contains('foo'),
			container.classList.contains('fixed')
		);
		*/

		container.classList.add('otra-clase');
		container.classList.add('otra-clase-mas');
		container.classList.toggle('otra-clase-mas');
		container.classList.remove('fixed');
		
		//getters
		console.log(
			container.id,
			//container.class,
			a.href,
			a.getAttribute('target'),
			a.style,
			a.style.color,
			a.style.backgroundColor,
			d.head,
			d.body,
			d.html,
			d.documentElement,
			d.documentElement.lang
		);

		//setters
		a.href = 'http://jonmircha.com';
		a.setAttribute('target', '_self');
		d.documentElement.style.fontSize = '32px';
		a.style.padding = '1rem';
		a.style.borderRadius = '.25rem';
		a.style.backgroundColor = '#999';

		p3.setAttribute('id', 'tres');
		p3.innerText = 'Párrafo 3';

		d.querySelector('title').innerText = 'Nuevo Título del Documento HTML';
		d.body.style.backgroundColor = 'black';
		d.body.style.color = 'greenyellow';

		container.style.backgroundColor = 'skyblue';
		container.style.color = 'black';
		container.style.margin = '1rem auto';
		container.style.padding = '1rem';

		container.insertAdjacentHTML('beforebegin', '<div>Contenido agregado antes y afuera del selector</div>');
		container.insertAdjacentHTML('afterend', '<div>Contenido agregado después y afuera del selector</div>');
		
		container.insertAdjacentHTML('afterbegin','<div>Contenido agregado antes y dentro del selector</div>');
		container.insertAdjacentHTML('beforeend','<div>Contenido agregado después y dentro del selector</div>');

		divs = d.querySelectorAll('div');
		
		for (var i = 0; i < divs.length; i++) {
			divs[i].style.backgroundColor = 'rosybrown';
		};
})(document);