var paramountDefault = (function($) {
	'use strict';
	var _private = {
		_run: function(el, val) {

			var od = new Odometer({
				  el: el,
				  value: 0,

				  // Any option (other than auto and selector) can be passed in here
				  format: '(,ddd)',
				  theme: 'plaza',
				  duration: 3000
			});

			od.update(val);
		}
	}
	var paramountDefault = {
		init: function() {
			$(document).foundation();
			$('.forward-thinking-slider').slick({
				slidesToShow: 2,
  				slidesToScroll: 1
			});

			$('.testimonials-slider').slick({
				slidesToShow: 1,
  				slidesToScroll: 1,
				arrows: false,
				autoplay: true
			});


			var loans = document.querySelector('.loans');
			var clients = document.querySelector('.clients');
			var employees = document.querySelector('.employees');
			var states = document.querySelector('.states');



			_private._run(loans, '20');
			_private._run(clients, '2500', '');
			_private._run(employees, '450', '');
			_private._run(states, '35', '');
		}
	};

	return paramountDefault;
}(jQuery));
paramountDefault.init();