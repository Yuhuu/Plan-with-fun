
<!DOCTYPE HTML>
<html lang="no" ng-app="myApp">
<!--do not use old directive ng:, becasue of IE compatibilit use ng-app instead-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>AngularJS friendsPlan App</title>
        <!-- Bootstrap css-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- Angular js -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->  
    
    </head>
    <body>
        <!-- navigation nav -->
<nav class="navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="pull-left col-sm-3" href="#/"><img src="images/logo.png" alt="logo View">
        </a>
    </div>
    <div class="collapse navbar-collapse nopadding" id="myNavbar" style="background-color:lightgray;">
   
        <ul class="col-xs-12 col-md-5 nav navbar-nav navbar-left nopadding">
          <li class="col-xs-6 col-md-3" style="background-color:lavender;"><a href="#/">
                  <i class="fa fa-heartbeat"></i>Oh myhome</a></li>
          <li class="col-xs-6 col-md-3" style="background-color:lavenderblush;">
              <a href="#section2"><i class="fa fa-language"></i>section2</a></li>
          <li class="col-xs-6 col-md-3" style="background-color:HoneyDew ;">
              <a href="#section3"><i class="fa fa-line-chart"></i>section3</a></li>
          <li class="col-xs-6 col-md-3" style="background-color:lightcyan;">
              <a href="#section3"><i class="fa fa-location-arrow"></i>section4</a></li>
        </ul>

        <?php
        require_once 'user_profile.php';
        ?>
        
    </div>
  </div>
</nav>
    <!--  this is main content where different views will be injected -->
        <div id="main">
            <div ng-view></div>
        </div>
    <!--footer navbar--> 
    <footer class="text-center">
            <div class = "footer navbar-fixed-bottom">
                <p>Friends plan</p>
                <p>Copy right of<a href="http://gruppe18.no">Oss</a></p>
            </div>
    </footer>
       <script src="js/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular-resource.min.js"></script>
        <script src="js/angular-route.min.js"></script>
        <script type='text/javascript' src='script.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Bootstrap Js -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
       
    </body>
</html>