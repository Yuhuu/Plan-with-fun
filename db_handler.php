<?php

/* 
 * Copyright(C) 2016.  All rights reserved. 
 * 2016
 * Created by yuanxinhuang
 */
class DbHandler {
    
    private $conn;

    function __construct() {
        require_once 'dbConnect.php';
        // opening db connection
        $db = new dbConnect();
        $this->conn = $db->connect();
    }
    //  function queryMysql($query){
    //    global $conn;
    //    $result = mysqli_query($conn, $query);
    //    if(!$result) die('failed to connect ['.$conn->connect_error.']');
    //    return $result;
    // }

    function createTable($name, $query){
      $db = new dbConnect();
       global $conn;
       $result = mysqli_query($db->connect(), "create table if not exists $name($query)");
       if(!$result) die('failed to connect ['.$conn->connect_error.']');
       echo "Table '$name' created already.<br>";
    }
    
   
    function destroySession() {
        $_SESSION=array();
        
        // -259200 or not
        if(session_id() != "" || isset($_COOKIE[session_name()]))
            setcookie(session_name(),'',time()-259200, '/'); // 86400 is one day
}
    
    // avoid SQL injection
    function sanitizeString($var){
        global $conn;
        $var = strip_tags($var);
        $var = htmlentities($var);
        $var = stripslashes($var);
        return mysqli_real_escape_string($conn, $var);
  }

  // can upload picture for aktivities
  function showProfile($user)
  {
    if (file_exists("$user.jpg"))
      echo "<img src='images/$user.jpg' style='float:left;'>";

    $result = queryMysql("SELECT * FROM profiles WHERE user='$user'");

    if ($result->num_rows)
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);
      echo stripslashes($row['text']) . "<br style='clear:left;'>";
    }
  }
}
?>
