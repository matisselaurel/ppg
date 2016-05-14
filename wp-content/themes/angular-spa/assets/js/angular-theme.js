var wpApp = new angular.module( 'wpAngularTheme', ['ui.router', 'ngResource'] );

wpApp.factory( 'Posts', function( $resource ) {
	return $resource( appInfo.api_url + 'posts/:ID', {
		ID: '@id'
	})
});
wpApp.factory( 'Pages', function( $resource ) {
	return $resource( appInfo.api_url + 'pages/:ID', {
		ID: '@id'
	})
});

wpApp.controller( 'ListCtrl', ['$scope', 'Posts', function( $scope, Posts ) {
	//console.log('ListCtrl');
	$scope.page_title = 'Blog Listing Page';

	Posts.query(function( res ) {
		$scope.posts = res;
	});

}]);

wpApp.controller( 'DetailCtrl', ['$scope', '$stateParams', 'Posts', function( $scope, $stateParams, Posts ) {
	//console.log( $stateParams );
	Posts.get( { ID: $stateParams.id}, function(res){
		$scope.post = res;
	})
}])

wpApp.controller( 'PageDetailCtrl', ['$scope', '$stateParams', 'Pages', function( $scope, $stateParams, Pages ) {
	console.log( $stateParams );
	Pages.get( { ID: $stateParams.id}, function(res){
		$scope.page = res;
	})
}])

wpApp.config( function( $stateProvider, $urlRouterProvider){
	$urlRouterProvider.otherwise('/');
	$stateProvider
		.state( 'home', {
			url: '/',
			controller: 'PageDetailCtrl',
			templateUrl: appInfo.template_directory + 'templates/page-detail.html'
		})
		.state( 'detail', {
			url: '/posts/:id',
			controller: 'DetailCtrl',
			templateUrl: appInfo.template_directory + 'templates/detail.html'
		})
		.state( 'pagedetail', {
			url: '/pages/:id',
			controller: 'PageDetailCtrl',
			templateUrl: appInfo.template_directory + 'templates/page-detail.html'
		})
	//$urlRouterProvider.html5Mode(true);
});

wpApp.filter( 'to_trusted', ['$sce', function( $sce ){
	return function( text ) {
		return $sce.trustAsHtml( text );
	}
}]);

// wpApp.directive('bindHtmlCompile', ['$compile', function ($compile) {
//   return {
//     restrict: 'A',
//     link: function (scope, element, attrs) {
//       scope.$watch(function () {
//         return scope.$eval(attrs.bindHtmlCompile);
//       }, function (value) {

//         element.html(value && value.toString());

//         var compileScope = scope;
//         if (attrs.bindHtmlScope) {
//           compileScope = scope.$eval(attrs.bindHtmlScope);
//         }
//         $compile(element.contents())(compileScope);
//       });
//     }
//   };
// }]);

wpApp.directive('slider',  ['$rootScope', function($rootScope) {
return {
    restrict: 'EA',
    // templateUrl: '/path/to/template',
    link: function(scope, iElement, attrs) {
        //attrs references any attributes on the directive element in html

        //iElement is the actual DOM element of the directive,
        //so you can bind to it with jQuery
        // $(iElement).bxSlider({
        //     mode: 'fade',
        //     captions: true
        // });

        //OR you could use that to find the element inside that needs the plugin
        // $(iElement).find('.bx-wrapper').bxSlider({
        //     mode: 'fade',
        //     captions: true
        // });
        console.log('here');
        //paramountDefault._compileAngularElement('.compile');
        //paramountDefault._testimonials();

       }
    };
}]);