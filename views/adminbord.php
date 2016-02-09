


<?php
session_start();
error_reporting(E_ALL);
if (isset($_SESSION["user"])) {
    // if logged in send to dashboard page
    echo '<h3>Welcome, administrator</h3>';
    require_once 'admin.html';
} else {

    require_once 'login.html';
}
?>
