
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
    echo "<li class='col-xs-12 col-md-5' style='background-color:lightgoldenrodyellow;'>".
         "<a href='' id ='flip' ><i class='fa fa-list'></i>Welcome, $user</a></li>".     
         "<li class='col-xs-12 col-md-2'><a href='logout.php'>Logout</a></li>".
         "<li class='col-xs-12 col-md-2'><a href=''>Home</a></li>" .       
         "<li class='col-xs-12 col-md-3'><a href=''>Messages</a></li>";
  }
    else {
        echo "<li class='col-xs-12 col-md-6' style='background-color:lightgoldenrodyellow;'>".
            "<a href='' ><i class='fa fa-list'></i>Sign up</a></li>".
          "<li class='col-xs-12 col-md-6' style='background-color:Khaki;'>".
          "<a href='#'>Log in </a></li>";
    }
?>
