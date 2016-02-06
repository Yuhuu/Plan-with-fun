
 /* global angular */

// configure our routes configure our routes
 // create the module: angular.module('module name', ['dependen module']);
    var app = angular.module('myApp', ['ngRoute']);
    // configure our routes
    app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider
        
            // route for the home page
            .when('/', {
                title: 'login',
                template : '<p>hello this is login</p><h1>Login</h1>'
                
            })

            // route for the signup page
            .when('/about_me', {
                title: 'about_me',
                templateUrl : 'views/about_me.html',
                controller  : 'aboutme_controller'
            })
            
            .when('/sign_up', {
                title: 'sign_up',
                templateUrl : 'views/sign_up.html',
                controller  : 'sign_up_controller'
            })

            // route for the logout page
            .when('/logout', {
                templateUrl : '<p>this is logout page</p>'
                
            })
            .otherwise({
                redirectTo: '/'
            });
    }]);

    // create the controller and inject Angular's $scope
   

    app.controller('aboutme_controller', function($scope) {
        $scope.message = 'Look! I am an about me page.';
    });

    app.controller('sign_up_controller', function($scope) {
        $scope.message = 'sign up now. This is just a demo.';
    });
      
