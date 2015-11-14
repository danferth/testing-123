var app = angular.module('app', []);

app.controller('peopleController', ['$scope', '$http', function($scope, $http){
	$http.get('/assets/json/people.json')
		.then(function(res){
			$scope.people = res.data;
		});
}]);//end peopelController
