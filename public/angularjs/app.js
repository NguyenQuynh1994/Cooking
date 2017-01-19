var cookApp = angular.module('cookApp', ['ngRoute', 'ngCookies', 'ngResource', 'truncate']);

cookApp.constant("base_api", "/");

cookApp.config(['$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {

        $routeProvider.when("/userLogin", {
            controller : "loginCtrl",
            templateUrl  : "templates/auth/userLogin.html"
        })

        .when("/userRegister", {
            templateUrl : "templates/auth/userRegister.html"
        })

        .when("/password/reset", {
            templateUrl : "templates/auth/userEmail.html"
        })

        .when("/", {
            templateUrl : "templates/userHome.html"
        })

        .otherwise({
            redirectTo: "/"
        });
        $locationProvider.html5Mode(true);
}]);


//# sourceMappingURL=app.js.map
