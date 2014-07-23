'use strict';

/* Controllers */

angular.module('CI_signup_login.controllers', [])
  .controller('LoginCtrl', ['$scope','Restangular', function($scope, Restangular) {
        $scope.login = function () {

            var userLogin = Restangular.all('UserService/userLogin');

            var userCredentials = { email: $scope.email, password : $scope.password};
            userLogin.post(userCredentials).then(function(response) {
                if(response.status == "success")
                {
                    alert("Success");
                }
                else
                {
                    alert("failed");
                }

            }, function() {
                alert("Failed");
            });
//            LoginService.loginUser($scope.email, $scope.password)
//                .then(function (user) {
//            alert("Success");
//            },function(error) {
//                alert("Failed");
//            });
        };
  }]);
