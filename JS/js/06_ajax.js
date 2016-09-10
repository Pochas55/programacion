(function (d, w) {
	'use strict';

	var READY_STATE_COMPLETE = 4,
		OK = 200,
		NOT_FOUND = 404,
		ajax = new XMLHttpRequest(),
		preload = d.querySelector('#preload'),
		country = d.querySelector('#country'),
		linksMenu = d.querySelectorAll('.menu a');

		function countryInfo() {
			preload.innerHTML = '<i class="fa fa-refresh fa-spin fa-5x"></i>';


			if ( ajax.readyState === READY_STATE_COMPLETE && ajax.status === OK ) {
				console.log(ajax);
				preload.innerHTML = null;
				country.innerHTML = ajax.response;
			} else if ( ajax.status === NOT_FOUND ) {
				preload.innerHTML = null;
				country.innerHTML = '<h3>El servidor NO responde. Error N°' + ajax.status + ': <mark>' + ajax.statusText + '</mark></h3>';
			}
		}

		function ajaxRequest(e) {
			//alert('funciona');
			e.preventDefault();

			ajax.onreadystatechange = countryInfo;
			ajax.open('GET', e.target.href, true);
			ajax.setRequestHeader('Content-Type', 'text/html');
			ajax.send();
		}

		w.onload = function () {
			for (var i = 0; i < linksMenu.length; i++) {
				linksMenu[i].onclick = ajaxRequest;
			};
		}
})(document, window);