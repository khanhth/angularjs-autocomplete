var fetch = angular.module('myapp', []);

fetch.controller('searchCtrl', ['$scope', '$http', function ($scope, $http) {
 
	// Fetch data
	$scope.searchUsers = function(){
		$http({
			method: 'POST',
			url: 'search.php',
			data: {
				name: $scope.name
			}
		}).then(function successCallback(response) {
			$scope.searchResult = response.data;
		});
	}

	// Set value to search box
	$scope.setValue = function(index){
		$scope.name = $scope.searchResult[index].name;
		$scope.searchResult = {};
	}
 
}]);