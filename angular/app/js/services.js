'use strict';

/* Services */


// Demonstrate how to register services
// In this case it is a simple value service.
angular.module('CI_signup_login.services', [])
    .service('userService', function($http,$q)
    {
        this.loginUser = function()
        {
            var deferred = $q.defer();
            $http({method: 'POST', url: 'UserService/userLogin.json'}).
                success(function(data, status, headers, config) {
                    deferred.resolve(data);
                }).
                error(function(data, status, headers, config) {
                    deferred.reject();
                });

        }
    });
