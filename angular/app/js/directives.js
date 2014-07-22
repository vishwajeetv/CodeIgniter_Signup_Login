'use strict';

/* Directives */


angular.module('CI_signup_login.directives', []).
  directive('appVersion', ['version', function(version) {
    return function(scope, elm, attrs) {
      elm.text(version);
    };
  }]);
