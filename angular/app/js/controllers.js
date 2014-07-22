'use strict';

/* Controllers */

angular.module('CI_signup_login.controllers', [])
  .controller('LoginCtrl', ['$scope','LoginService', function($scope, LoginService) {
        $scope.logIn = function () {



            LoginService.loginUser($scope.email, $scope.password).then(function (user) {
                alert("HI");
            },function(error) {

            });
        };
  }]);
