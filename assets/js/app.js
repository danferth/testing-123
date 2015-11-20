var app = angular.module('app', []);

app.controller('peopleController', ['$scope', '$http', function($scope, $http){
	
	$http.get('/assets/json/people.json').then(function(res){
			$scope.people = res.data;
			
			var occupy = [];
			for(var o in $scope.people){
				occupy.push($scope.people[o].occupation);
			}
			
			occupy = occupy.sort();
			$scope.occupation = occupy.filter(function(elem, index, self){
				return index == self.indexOf(elem);
			});
			
			
		});
		
		$scope.sortType = "name.last";
		$scope.sortReverse = false;
		
	


}]);//end peopelController



