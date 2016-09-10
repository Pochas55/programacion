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
				
				moviesInfo = j.parse(ajax.responseText);
				moviesTemplate = resAJAX + resString + resObject;
				console.log(ajax, moviesInfo);

				//template string - ES6 o ES2015
				//interpolación de variable `Hola ${nombreVariable}`
				/*
				moviesTemplate += `
					<article>
						<h2>${moviesInfo.title}</h2>
						<p><b>${moviesInfo.year}</b></p>
						<p><i>${moviesInfo.genres}</i></p>
						<img src="${moviesInfo.poster}">
					</article>
				`;
				*/

				for (var i = 0; i < moviesInfo['movies'].length; i++) {
					moviesTemplate += `
						<article>
							<h2>${moviesInfo['movies'][i].title}</h2>
							<p><b>${moviesInfo['movies'][i].year}</b></p>
							<p><i>${moviesInfo['movies'][i].genres}</i></p>
							<img src="${moviesInfo['movies'][i].poster}">
						</article>
					`;
				};

			} else {
				moviesTemplate = '<h3>El servidor NO responde. Error N°' + ajax.status + ': <mark>' + ajax.statusText + '</mark></h3>';
			}

			movies.innerHTML = moviesTemplate;
		};

		ajax.send();
	};
})(document, window, JSON);