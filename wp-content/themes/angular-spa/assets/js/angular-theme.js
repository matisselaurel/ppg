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
	console.log('ListCtrl');
	$scope.page_title = 'Blog Listing Page';

	Posts.query(function( res ) {
		$scope.posts = res;
	});

}]);

wpApp.controller( 'DetailCtrl', ['$scope', '$stateParams', 'Posts', function( $scope, $stateParams, Posts ) {
	console.log( $stateParams );
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
}])

