
<!DOCTYPE HTML>
<html lang="no" ng-app="myApp" ng-controller="myCtrl">
<!--do not use old directive ng:, becasue of IE compatibilit use ng-app instead-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>AngularJS friendsPlan App</title>
        <!-- Bootstrap css-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- Angular js -->
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Bootstrap Js -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->  
    </head>
    <body>
        <!-- navigation nav -->
        <?php
        require_once 'navigation.php';
        ?>
        
        <!-- this is main content where different views will be injected -->
        <!--<div id="main"><div ng-view>-->
                <?php
               include "login.php";
                ?>
            <!--</div></div>-->
        <!-- footer navbar -->
       
    </body>
</html>