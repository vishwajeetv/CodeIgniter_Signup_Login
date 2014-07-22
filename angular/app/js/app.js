'use strict';


// Declare app level module which depends on filters, and services
angular.module('CI_signup_login', [
  'ngRoute',
  'CI_signup_login.filters',
  'CI_signup_login.services',
  'CI_signup_login.directives',
  'CI_signup_login.controllers',
    'ui.bootstrap'
]).
config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/', {templateUrl: 'angular/app/partials/login.html', controller: 'LoginCtrl'});
//  $routeProvider.when('/view2', {templateUrl: 'angular/app/partials/partial2.html', controller: 'MyCtrl2'});
  $routeProvider.otherwise({redirectTo: '/'});
}]);
