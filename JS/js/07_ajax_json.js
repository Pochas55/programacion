(function (d, w, j) {
	'use strict';

	var ajax = new XMLHttpRequest(),
		movies = d.querySelector('#movies'),
		moviesInfo,
		moviesTemplate = '';

	w.onload = function () {
		ajax.open('GET', './js/movies.json', true);

		ajax.onload = function () {
			if (ajax.status >= 200 && ajax.status < 400) {
				var resAJAX = '<p>Información extraída del archivo JSON sin analizar <mark>' + ajax.responseText + '</mark></p>',
					resString = '<p>Información extraída del archivo JSON analizada como string <mark>' + j.stringify(ajax.responseText) + '</mark></p>',
					resObject = '<p>Información extraída del archivo JSON analizada como objeto JS <mark>' + j.parse(ajax.responseText) + '</mark></p>';
				moviesTemplate = resAJAX + resString + resObject,
				moviesInfo = j.parse(ajax.responseText);

				console.log(ajax, moviesInfo);
			} else {
				moviesTemplate = '<h3>El servidor NO responde. Error N°' + ajax.status + ': <mark>' + ajax.statusText + '</mark></h3>';
			}

			movies.innerHTML = moviesTemplate;
		};

		ajax.send();
	};
})(document, window, JSON);