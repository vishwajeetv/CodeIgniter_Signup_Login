'use strict';

/* Services */


// Demonstrate how to register services
// In this case it is a simple value service.
angular.module('CI_signup_login.services', [])
    .service('LoginService', function($http,$q)
    {
//        this.loginUser = function(email,password)
//        {
//            var deferred = $q.defer();
//            $http({method: 'POST', url: 'UserService/userLogin.json', data:{email:email,password:password}}).
//                success(function(data, status, headers, config) {
//
//                    if(data.status == "success")
//                    {
//                        deferred.resolve(data);
//                    }
//                    else
//                    {
//                        deferred.reject();
//                    }
//                    }).
//                error(function(data, status, headers, config) {
//                    deferred.reject();
//                });
//            return deferred.promise;
//        }
    });
