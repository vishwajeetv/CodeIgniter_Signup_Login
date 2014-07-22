'use strict';

/* Controllers */

angular.module('CI_signup_login.controllers', [])
  .controller('LoginCtrl', ['$scope','LoginService', function($scope, LoginService) {
        $scope.login = function () {

            LoginService.loginUser($scope.email, $scope.password)
                .then(function (user) {
            alert("Success");
            },function(error) {
                alert("Failed");
            });
        };
  }]);
