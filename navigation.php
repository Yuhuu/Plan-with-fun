<nav class="navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="pull-left col-sm-3" href="#"><img src="images/logo.png" alt="logo View">
        </a>
    </div>
    <div class="collapse navbar-collapse nopadding" id="myNavbar" style="background-color:lightgray;">
   
        <ul class="col-xs-12 col-md-5 nav navbar-nav navbar-left nopadding">
          <li class="col-xs-6 col-md-3" style="background-color:lavender;"><a href="#">
                  <i class="fa fa-heartbeat"></i>Oh myhome</a></li>
          <li class="col-xs-6 col-md-3" style="background-color:lavenderblush;">
              <a href="#section2"><i class="fa fa-language"></i>section2</a></li>
          <li class="col-xs-6 col-md-3" style="background-color:HoneyDew ;">
              <a href="#section3"><i class="fa fa-line-chart"></i>section3</a></li>
          <li class="col-xs-6 col-md-3" style="background-color:lightcyan;">
              <a href="#section3"><i class="fa fa-location-arrow"></i>section4</a></li>
        </ul>

        <ul class="col-sm-12 col-md-5 nav navbar-nav  navbar-right nopadding">
        <?php
        include "userProfile.php";
        ?>
      	</ul>
    </div>
  </div>
</nav>

