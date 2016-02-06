
 /* global angular */

// configure our routes configure our routes
 // create the module: angular.module('module name', ['dependen module']);
    var app = angular.module('myApp', ['ngRoute']);
    // configure our routes
    app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider
        
            // route for the login page
            .when('/login', {
                title: 'login',
                templateUrl : 'views/login.html',
                controller  : 'login_controller'
            })

            // route for the about_me page
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
                templateUrl : 'views/logout.php',
                controller  : 'logout_controller'
            })
            
             .when('/resent_password', {
                templateUrl : 'views/resent_password.html',
                controller  : 'resent_password_controller'
            })
            
            .otherwise({
                redirectTo: '/login'
            });
    }]);

    // create the controller and inject Angular's $scope
   

    app.controller('aboutme_controller', function($scope) {
        $scope.message = 'Look! I am an about me page.';
    });

    app.controller('sign_up_controller', function($scope) {
        $scope.message = 'sign up now. This is just a demo.';
    });
    
    app.controller('logout_controller', function($scope) {
        $scope.message = 'logout now. This is just a demo.';
    });
    
    app.controller('resent_password_controller', function($scope) {
        $scope.message = 'resent_password. This is just a demo.';
    });
      
    app.controller('login_controller', function($scope, $http) {
        // create a blank object to handle form data.
        $scope.user = {};
        // calling our submit function.
        $scope.doSubmit = function () {
            $http({
                method: 'POST',
                url: 'insert.php',
                data: $scope.user,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            })
                    .success(function (data) {
                        if (data.errors) {
                            // Showing errors in data array
                            $scope.errorUserName = data.errors.myEmail;
                            $scope.errorPassword = data.errors.myPassword;
                        } else {
                            $scope.message = data.message;
                            console.log("inserted Successfully");
                        }
                    });
        };
        $scope.doCancel = function () {
            $scope.user.myEmail = '';
            $scope.user.myPassword = '';
            $scope.cancelsucceed = 'All input fields are cleared now.';
        }
    });
    