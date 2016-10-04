/**
*	Somente os controllers relacionados com o arquivo index.html ou a home da app
*/

party.controller('mainController', ['$scope', '$http', function($scope, $http){
	$scope.$on('$viewContentLoaded', function(){

		$scope.posts = [];

		$http.get('/posts').then(function(response){

			console.log(response);
			$scope.posts = response.data;

		}, function(response){
			console.warn(response);
		});

	})
}]);


