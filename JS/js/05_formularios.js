(function (d) {
	'use strict';

	var validateInputs = d.querySelectorAll('.validate'),
		expRegName = /^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$/,
		expRegEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

	console.log(
		d.forms,
		d.forms[0],
		d.forms[1]
	);

	function validateForm(e) {
		var input = e.target;

		//alert('funciona');

		switch (input.name) {
			case 'nombre' : {
				if ( !expRegName.exec(input.value) ) {
					alert(input.title + ' no es válido');
					input.focus();
				}
				break;
			}

			case 'email' : {
				if ( !expRegEmail.exec(input.value) ) {
					alert(input.title + ' no es válido');
					input.focus();
				}
				break;
			}

			default : {
				if ( !input.value ) {
					alert(input.title + ' es requerido');
					input.focus();
				}
				break;
			}
		}//cierra el switch

		return false;
	}

	function sendForm(e) {
		var form = e.target,
			preload = form.querySelector('.preload'),
			message = form.querySelector('.message');
		
		e.preventDefault();
		//alert('enviando');

		preload.classList.remove('hidden');

		setTimeout(function () {
			preload.classList.add('hidden');
			message.classList.remove('hidden');

			setTimeout(function () {
				form.reset();
				message.classList.add('hidden');
			}, 3000);
		}, 3000);
	}

	for (var i = 0; i < d.forms.length; i++) {
		d.forms[i].onsubmit = sendForm;
	};

	for (var i = 0; i < validateInputs.length; i++) {
		validateInputs[i].onblur = validateForm;
	};
})(document);