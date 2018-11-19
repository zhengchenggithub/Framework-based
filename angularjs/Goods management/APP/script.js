var myApp = angular.module('myApp', ['ngRoute', 'homeModule', 'registerModule', 'loginModule']);
myApp.config(function ($routeProvider) {
    $routeProvider
    // route for the home page
        .when('/home', {
            templateUrl : '../template/home.html',
            controller  : 'homeCtrl'
        })

        // route for the about page
        .when('/register', {
            templateUrl : '../template/register.html',
            controller  : 'registerCtrl'
        })

        // route for the contact page
        .when('/login', {
            templateUrl : '../template/login.html',
            controller  : 'loginCtrl'
        })

        .otherwise('/login');
});
myApp.controller('myCtrl', function ($scope) {

})
