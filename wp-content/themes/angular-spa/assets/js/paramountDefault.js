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

			if ($('.testimonials-slider').length) {
				this._testimonials();
			}

			if ($('.customer-service').length) {
				this._customerService();
			}

			$('.compile').bind('DOMSubtreeModified', function() {
console.log('modified');
				this._compileAngularElement($('.compile'));
			});

var s_ajaxListener = new Object();
s_ajaxListener.tempOpen = XMLHttpRequest.prototype.open;
s_ajaxListener.tempSend = XMLHttpRequest.prototype.send;
s_ajaxListener.callback = function () {
  // this.method :the ajax method used
  // this.url    :the url of the requested script (including query string, if any) (urlencoded)
  // this.data   :the data sent, if any ex: foo=bar&a=b (urlencoded)
  setTimeout(function(){
  	paramountDefault._testimonials();
  }, 500);

}

XMLHttpRequest.prototype.open = function(a,b) {
  if (!a) var a='';
  if (!b) var b='';
  s_ajaxListener.tempOpen.apply(this, arguments);
  s_ajaxListener.method = a;
  s_ajaxListener.url = b;
  if (a.toLowerCase() == 'get') {
    s_ajaxListener.data = b.split('?');
    s_ajaxListener.data = s_ajaxListener.data[1];

  }
}

XMLHttpRequest.prototype.send = function(a,b) {
  if (!a) var a='';
  if (!b) var b='';
  s_ajaxListener.tempSend.apply(this, arguments);
  if(s_ajaxListener.method.toLowerCase() == 'post')s_ajaxListener.data = a;
  s_ajaxListener.callback();
}


		},
		_compileAngularElement: function( el ) {
			var el = (typeof el == 'string') ? el : null ;
			// The new element to be added
			if (el != null ) {
				var $div = $( el );

				// The parent of the new element
				var $target = $(".compile");

				angular.element($target).injector().invoke(['$compile', function ($compile) {
					var $scope = angular.element($target).scope();
					$compile($div)($scope);
					// Finally, refresh the watch expressions in the new element
					$scope.$apply();
				}]);
			}
			console.log('called compile function');
			this._testimonials();
		},
		_testimonials: function() {


			$('.testimonials-slider').slick({
				slidesToShow: 1,
  				slidesToScroll: 1,
				arrows: false,
				autoplay: true
			});




			console.log('called paramountDefault.testimonials');
			console.log( $('.testimonials-slider') );
			console.log( $('.testimonials-slider').length );
		},
		_customerService: function () {
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