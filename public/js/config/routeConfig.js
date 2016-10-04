/**
*	Arquivo de configuração das rotas da App
*/
party.config(function($routeProvider){
	$routeProvider.when('/',{
		templateUrl : 'view/main.html',
		controller : 'mainController'
	}).otherwise({redirectTo:'/'});

});
