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

<!--      <div id="main-content" ng-controller="PostCtrl" ng-init="getPosts()">
      <input class="hidden" type="checkbox" ng-model="viewEditPost" />
      <a href="#" class="submitButton" ng-click="viewEditPost=!viewEditPost"></a>
	<form class="postForm" ng-submit="newPost(this);viewEditPost=!viewEditPost">
	  <input class="inputTitle" type="text" name="title" ng-model="title" placeholder="tittel" /><br />
	  <textarea class="inputContent" name="content" ng-model="content" placeholder="innhold"></textarea><br />
	  <input class="inputPsw" type="password" name="psw" ng-model="psw" placeholder="passord" />
	  <button class="submitButton" type="submit">Legg til post</button> 
	  <button class="submitButton" ng-click="$scope.viewEditPost=false">angre</button>  
	</form>
	</div>
    
    <div ng-repeat="post in plans">
	  <input class="hidden" type="checkbox" ng-model="post.recip" />
	  <h2 ng-click="post.recip=!post.recip" ng-show="!post.recip">{{post.auth}}</h2>
	  <p ng-show="!post.recip">{{post.message}}</p>
	  <form class="postForm" ng-show="post.recip" ng-submit="updatePost(post,this);post.recip=!post.recip">
	    <input class="inputTitle" type="text" name="newPostTitle" ng-model="post.title" placeholder="tittel" /><br />
	    <textarea class="inputContent" name="newPostContent" ng-model="post.content" placeholder="innhold"></textarea><br />
	    <button class="submitButton" type="submit">Endre post</button> 
	    <button class="submitButton" ng-click="post.recip=!post.recip">Angre</button> 
	    <input class="inputPsw" placeholder="passord" type="password" name="something" ng-model="psw" />
	  </form>
    </div>-->





