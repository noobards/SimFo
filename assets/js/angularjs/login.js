simFo.app = angular.module("simFo", []);
simFo.app.controller("login", function($scope){
	$scope.data = {};
	$scope.authenticate = function(e){
		var button = $(e.target);
		simFo.makeAjax("Login/authenticate", $scope.data, $scope.successHandler, $scope.errorHandler);
	};
	
	$scope.successHandler = function(response){
		if(response.status == "OK")
		{
			window.location.href = response.redirect;
		}			
		else
		{
			simFo.alert(response.msg);
		}
	};
	
	$scope.errorHandler = function(response){
		simFo.alert(response);
	};
});