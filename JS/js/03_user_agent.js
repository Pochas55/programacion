(function (d, w, n) {
	'use strict';

	var ua = n.userAgent.toLowerCase(),
		mobile = ua.match(/android|iphone|ipad|ipod|windows phone|blackberry|mobile/i),
		desktop = ua.match(/linux|mac os|windows nt/i),
		browsers = ua.match(/chrome|safari|firefox|opera|opera mini|msie|iemobile|edge/i),
		isMobile = {
			android : function () {
				return ua.match(/android/);
			},
			ios : function () {
				return ua.match(/iphone|ipad|ipod/);
			},
			windows : function () {
				return ua.match(/windows phone/);
			},
			blackberry : function () {
				return ua.match(/blackberry/);
			},
			any : function () {
				return ( this.android() || this.ios() || this.windows() || this.blackberry() );
			}
		},
		isDesktop = {
			linux : function () {
				return ua.match(/linux/);
			},
			mac : function () {
				return ua.match(/mac os/);
			},
			windows : function () {
				return ua.match(/windows nt/);
			},
			any : function () {
				return ( this.linux()  || this.mac() || this.windows() );
			}
		},
		isBrowser = {
			chrome : function () {
				return ua.match(/chrome/);
			},
			safari : function () {
				return ua.match(/safari/);
			},
			firefox : function () {
				return ua.match(/firefox/);
			},
			opera : function () {
				return ua.match(/opera|opera mini/);
			},
			ie : function () {
				return ua.match(/msie|iemobile/);
			},
			edge : function () {
				return ua.match(/edge/);
			},
			any : function () {
				return ( this.ie() || this.edge() || this.chrome() || this.safari() || this.firefox() || this.opera() );
			}
		},
		liUserAgent = d.querySelector('#user-agent'),
		liPlatform = d.querySelector('#platform'),
		liBrowser = d.querySelector('#browser'),
		container = d.querySelector('#container'),
		btnDevice = d.querySelector('#btn-device'),
		btnPlatform = d.querySelector('#btn-platform'),
		btnBrowser = d.querySelector('#btn-browser'),
		btnRedirect = d.querySelector('#btn-redirect'),
		deviceIcon,
		platformIcon,
		browserIcon,
		whereIGo;

	w.onload = function () {
		console.log(
			ua,
			mobile,
			desktop,
			browsers
		);
	};
})(document, window, navigator);