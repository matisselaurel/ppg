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
		},
		_cache: {
			testimonialsObj: {}
		}
	}
	var paramountDefault = {
		init: function() {
			$(document).foundation();
			$('.forward-thinking-slider').slick({
				slidesToShow: 2,
  				slidesToScroll: 1
			});


			if ($('.customer-service').length) {
				this._customerService();
			}

			this._bind();




		},
		_cache: {
			//testimonialsData: paramountDefault._trustPilotData(),
			test: 'test'
		},
		_bind: function() {
			var firstCall = true;
			$(document).ready(function() {

// $('#mobileNavHam').on('click', function(e) {
// 	console.log('clicked');
//     $(this).toggleClass('fa-times');
// });

				setTimeout(function(){
						var testimonialsData = _private._cache.testimonialsObj;
						testimonialsData = paramountDefault._trustPilotData('', false, firstCall);
						var dataString = JSON.stringify(testimonialsData);
						console.log(testimonialsData);
						$('#testimonialsData').val(dataString);

					}, 1000);

			});


			// trustpilot = {};


			// XHR listener
			// re initializes js after angular calls
			var s_ajaxListener = new Object();
			s_ajaxListener.tempOpen = XMLHttpRequest.prototype.open;
			s_ajaxListener.tempSend = XMLHttpRequest.prototype.send;
			s_ajaxListener.callback = function (firstCall) {
			  // this.method :the ajax method used
			  // this.url    :the url of the requested script (including query string, if any) (urlencoded)
			  // this.data   :the data sent, if any ex: foo=bar&a=b (urlencoded)
			  setTimeout(function(firstCall){


			  	if ($('.testimonials-slider').length) {
					// setTimeout(function(){
						var data = $('#testimonialsData').val();


						data = JSON.parse(data);
						console.log(data);
						paramountDefault._trustPilot(data, false, firstCall);
						//paramountDefault._testimonials();
					// }, 1000);
				}

			  	if ($('.customer-service').length) {
			  		paramountDefault._customerService();
			  	}

			  }, 1000);

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
		_testimonials: function(testimonialsData) {
			console.log(testimonialsData);
			//if($('.testimonials-slider').length) {
			//this._trustPilot();
			//
			//
			// INITIALIZES SLICK PLUGIN
			// REQUIQUIRES JSON DATA TO BE SET AND CONTENT APPENDED INTO 'slick-slider fdiv'
				$('.testimonials-slider').slick({
					slidesToShow: 1,
	  				slidesToScroll: 1,
					arrows: false,
					autoplay: true
				});
				console.log('testimonial')
			//}
		},
		_trustPilot: function(data, slick, firstCall) {
			console.log(firstCall);
			var content = data;
			var slick = slick;
			console.log('called');
			console.log(data);
			console.log(slick);
			if (content == 'undefined') {
				var content = data;
			}
			if (slick == 'undefined' || slick == null) {
				slick = true;
			}

			console.log(content);
			console.log(slick);
			var limit = 0;
			limit = 10;
			for (var i=0; i <= limit; i++) {
				//console.log(i);
				// console.log(content.reviews[i].text);
				// console.log(content.reviews[i].consumer.displayName);
				// console.log(content.reviews[i].stars);
				// Manipulate dom with response data then triigger this._testimonials()
				console.log(i);
				// console.log(limit);
				$('.testimonials-slider').prepend('<div><p>'+content.reviews[i].text+'</p><span class="from">'+content.reviews[i].consumer.displayName+'</span><span class="trust-pilot-logo"><img src="'+window.location.origin+'/wp-content/themes/angular-spa/images/trust-pilot-logo.png" /></span><img src="'+window.location.origin+'/wp-content/themes/angular-spa/images/trustpilot/'+content.reviews[i].stars+'-stars.png" /></div>');
				if (i == limit) {

					if(slick) {
						console.log('done with data');
						paramountDefault._testimonials();
					}
				}
			}
			if(!firstCall) {
				this._trustPilot = function () {};
			}
		},
		_trustPilotData : function (data, slick, firstCall) {
				var data = $.ajax({
					url: 'https://api.trustpilot.com/v1/business-units/561c33b50000ff00058444fb/reviews',
					dataType: 'json',
					data: {apikey: 'SVAl5Wgi4QDCQEfomKRUq1PHC1OuZVgm'},
					global: false,
					async: false
				})
				.success(function(data, slick, firstCall){
					var firstCall = false;
					paramountDefault._trustPilot(data, slick, firstCall, firstCall);
					//console.log(data);
				}).responseText;
				$('#testimonialsData').val(data);
				data = JSON.parse(data);
				//console.log('%o', data);

			return data;
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