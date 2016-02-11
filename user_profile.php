
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function checkUser(){
session_start();
global $user;
//$destroySession = destroySession();
$userstr = "Guest";
//$_SESSION["user"] = "Yuanxin";
if (isset($_SESSION['user']))
  {
    $user     = $_SESSION['user'];
    $userstr  = "$user";
    return TRUE;
  }
  else return FALSE;
}

if(checkUser())
  {
    global $user;
    echo "<ul class='col-sm-12 col-md-6 nav navbar-nav navbar-right nopadding'>".
         "<li class='col-xs-12 col-md-5' style='background-color:lightgoldenrodyellow;'>".
         "<a href='#'><i class='fa fa-list'></i>Welcome, $user</a></li>".     
         "<li class='col-xs-12 col-md-2'><a href='#logout'><i class='fa fa-sign-out'></i>Logout</a></li>".
         "<li class='col-xs-12 col-md-2'><a href='#about_me'>About me</a></li>" .       
         "<li class='col-xs-12 col-md-2'><a href='#event'><i class='fa fa-comment'></i>Event</a></li></ul>";
  }
    else {        
       echo "<ul class='col-sm-12 col-md-6 nav navbar-nav navbar-right nopadding'>".
            "<li class='col-xs-12 col-md-6' style='background-color:lightgoldenrodyellow;'>".
         "<a href='#/sign_up' ><i class='fa fa-list'></i>Sign up</a></li>".
          "<li class='col-xs-12 col-md-6' style='background-color:Khaki;'>".
          "<a href='#/login'>Log in</a></li>
            </ul>";
       
//       data-ng-click="clickHandler()"
      
    }
?>
