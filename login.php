<!--http://tutsnare.com/post-form-data-using-angularjs/-->
<div class="breadcrumbs" id="breadcrumbs" style="margin-top:10px;">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">Home</a>
        </li>
        <li class="active"><a href="#">Login</a></li>
    </ul>
</div>

<div class="container col-xs-12 col-md-10 col-md-offset-1" style="margin-top:10px;">
    <h1> Login</h1>
    <form class="form-inline" action="" name="registerForm" ng-submit="doSubmit()" 
          ng-init="user.myEmail = '';
                  user.myPassword = ''"
          vmsgs-form>

        <div class="input-group col-xs-12 col-md-5" >
            <span class="input-group-addon sharp"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input type="email"
                   name = "myEmail"
                   vmsg
                   ng-model="user.myEmail"
                   ng-minlength ="10"
                   class="form-control sharp" 
                   placeholder="Please enter your email."
                   />
        </div>
        <div class="input-group col-xs-12 col-md-6" >
            <span ng-show="registerForm.myEmail.$touched && registerForm.myEmail.$invalid">
                Email address with "@" is required, it should contain minimun 10 character
            </span>
        </div>
        <div class="input-group col-xs-12 col-md-5" style="margin-top:10px;">
            <span class="input-group-addon sharp"><i class="fa fa-key fa-fw"></i></span>
            <input type="password" 
                   name = "myPassword"
                   vmsg
                   ng-model="user.myPassword"
                   ng-minlength="4"
                   class="form-control sharp" 
                   placeholder="Please enter your password."
                   />
<!--            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">X</button>
            </span>-->
        </div>

        <div class="input-group col-xs-12 col-md-6" >
            <span ng-show="registerForm.myPassword.$touched && registerForm.myPassword.$invalid">
                Password is required, it should contain minimun 4 character.</span><br>
            <span>{{cancelsucceed}}<br></span>
        </div>

        <div class="input-group col-xs-12 col-md-5" style="margin-top:10px;">
            <span class="input-group-addon sharp">Choose your login role:</span>
            <select class="selectpicker form-control sharp" data-live-search="true"  title="Please select a User type...">
                <option value="User selected">User</option>
                <option value="Admin">Admin</option>
            </select>
        </div>

        <div class="clearfix"></div>
        <div class="input-group col-xs-6 col-xs-3 ">
    <!--    <input type="button" value="Cancel changes" />-->
            <button type="button" data-ng-click="doCancel()" class="btn btn-default sharp outline col-xs-12" style="margin-top:10px;">Clear fields</button>

            <button type="submit" class="btn btn-default sharp outline col-xs-12" style="margin-top:10px;">Login</button>
            <a href="resent_password.php">forget password? </a>
        </div>
    </form>
</div>
<script>
    // Defining angularjs application.
    var postApp = angular.module('myApp', []);
    postApp.controller('myCtrl', function ($scope, $http) {
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
</script>