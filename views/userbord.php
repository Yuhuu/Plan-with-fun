<?php
session_start();
error_reporting(E_ALL);
if (isset($_SESSION["user"])) {
    // if logged in send to dashboard page
    require_once 'myinfor.html';
    echo '<h3>Welcome, '.$_SESSION['user'].'</h3>';
}
else {
    
    require_once 'login.html';
     
   
}
?>
