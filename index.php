
<!DOCTYPE HTML>
<!--use ng-app or ng-app="myApp" and we use data-prefix for ng attributes-->
<html lang="no" data-ng-app="myApp">
<!--do not use old directive ng:, becasue of IE compatibilit use ng-app instead-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>AngularJS friendsPlan App</title>
        <!-- Bootstrap css-->
        <link rel="stylesheet" 
              href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" 
              href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css" 
              type="text/css"/>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Bootstrap Js -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
        <a id="logo_main" class="pull-left col-sm-3" href="#/"><img src="images/logo.svg" width="60px" height="70px" alt="logo View">
        </a>
    </div>
    <div class="collapse navbar-collapse nopadding" id="myNavbar" style="background-color:lightgray;">
   
        <ul class="col-xs-12 col-md-5 nav navbar-nav navbar-left nopadding">
          <li class="col-xs-6 col-md-4" style="background-color:Khaki;height:70px;"><a href="#/home">
                  <i class="fa fa-heartbeat"></i>HOME</a></li>
          <li class="col-xs-6 col-md-4" style="background-color:lightgoldenrodyellow;">
              <a href="#section2"><i class="fa fa-language"></i>LANGUAGE</a></li>
          <li class="col-xs-12 col-md-4" style="background-color:HoneyDew;">
                    <input type="text" class="form-control" 
                    placeholder="Search...">
<!--              <form class="navbar-form" role="search"> </form>-->
          </li>
        </ul>
        <div id = "myProfileNavbar">
        <?php
        require_once 'user_profile.php';
        ?>
        </div>
        
    </div>
  </div>
</nav>
    <!--  this is main content where different views will be injected -->
        <div id="main">
            <div ng-view></div>
        </div>
    <!--footer navbar--> 
    <footer class="text-left container">
      
            <div class="text-left container col-xs-12">
                <p>Friends plan Friends plan</p>
                <p>Copy right of<a href="http://gruppe18.no">Oss</a></p>
          
            </div> 
    </footer>
        <script src="js/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular-resource.min.js"></script>
        <script src="js/angular-route.min.js"></script>
        <script type='text/javascript' src='controller.js'></script>
        
       
    </body>
</html>