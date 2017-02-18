(function (d, w) {
	'use strict';

	var panel = d.querySelector('.Panel'),
		panelBtn = d.querySelector('.Panel-button'),
		hamburger = d.querySelector('.hamburger'),
		mq = w.matchMedia('(min-width: 64em)');

	function closePanel(mq) {
		if (mq.matches) {
			panel.classList.remove('is-active')
			hamburger.classList.toggle('is-active');
		}
	}

	panelBtn.onclick = function (e) {
		e.preventDefault();
		panel.classList.toggle('is-active');
		hamburger.classList.toggle('is-active');
	};

	w.onload = closePanel(mq);
	mq.addListener(closePanel);
})(document, window);