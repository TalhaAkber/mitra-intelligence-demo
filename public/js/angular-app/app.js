'use strict';

var app = angular.module('mitraApp', []);

app.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});

app.controller('homeController', function ($scope, $http) {

	$scope.current;
	$scope.previous;
	$scope.selectedName = 'Hula';
	$scope.year;
	$scope.yearOptions = [];

	var onCompleteRequest = function(response){
		$scope.current = response.data.current;
		if(response.data.previous)
			$scope.previous = response.data.previous;
		else
			$scope.previous = $scope.current;
	}

	$scope.updateRecord = function(){
		$http({
		    url: '/api/get-data', 
		    method: "GET",
		    params: {year: $scope.year, name: $scope.selectedName }
		}).then(onCompleteRequest);
	}

	$scope.updateYears = function(){
		$http({
			url: '/api/get-years',
			method: 'GET',
			params: { name: $scope.selectedName }
		}).then(function(response){
			$scope.yearOptions = response.data;
			$scope.year = $scope.yearOptions[0].year;
			$scope.updateRecord();
		})
	}

	$scope.init = function(){
		$scope.updateYears();	
	}

	$scope.calculatePercent = function(current, previous){
		if(current > previous)
			return ((current - previous) / previous) * 100;
		else
			return ((previous - current) / current) * 100;
	}

});