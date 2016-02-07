
 /* global angular */

// configure our routes configure our routes
 // create the module: angular.module('module name', ['dependen module']);
    var app = angular.module('myApp', ['ngRoute']);
    // configure our routes
    app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider
        
            // route for the login page
             .when('/home', {
                templateUrl : 'views/home.html',
                controller  : 'home_controller'
            })
            
            .when('/admin', {
                templateUrl : 'views/admin.html'
               
            })
            
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
                redirectTo: '/home'
            });
    }]);

    // create the controller and inject Angular's $scope
   
    app.controller('home_controller', function($scope) {
        $scope.message = 'home now. This is just a demo.';
    });
    
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
                url: 'register.php',
                data: $scope.user,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            })
                    .success(function (data) {
                        if (data.errors) {
                            // Showing errors in data array
                            $scope.errorUserName = data.errors.myEmail;
                            $scope.errorPassword = data.errors.myPassword;
                            console.log("There is inserted errors");
                        } else {
                            if (!data.message) {
                            $scope.message = data.message;
                            console.log("inserted without message Successfully");
                            }
                            else {
                            console.log("inserted with message Successfully");
                            }
                        }
                    });
        };
        $scope.doCancel = function () {
            $scope.user.myEmail = '';
            $scope.user.myPassword = '';
            $scope.cancelsucceed = 'All input fields are cleared now.';
        }
    });
    
    app.controller('role_control', function($scope) {
        $scope.message = 'home now. This is just a demo.';
    });
    
    app.controller('show_user_controller', function($scope) {
  $scope.sortType     = 'name'; // set the default sort type
  $scope.sortReverse  = false;  // set the default sort order
  $scope.search_user   = '';     // set the default search/filter term
  
  // create the list of users 
  $scope.sushi = [
    { name: 'Cali Roll', email: 'Crab', phone: '212341',aboutme: 'Hello,I am not a ladyboy',created: '2016-02-04 11:37:56' },
    { name: 'Philly', email: 'Tuna', phone: '412341234',aboutme: 'Hello,I am shabby a ladyboy',created: '2015-02-04 11:37:56' },
    { name: 'TigerLiu', email: 'Eel', phone: '712341',aboutme: 'Hello,I am big a ladyboy',created: '2016-02-04 11:07:56' },
    { name: 'Rainbow', email: 'Variety', phone: '6123412',aboutme: 'Hello,I am not a ladyboy',created: '2016-01-04 10:37:56'}
  ];
});