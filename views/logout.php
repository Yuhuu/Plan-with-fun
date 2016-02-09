<?php
/* 
 * Copyright(C) 2016.  All rights reserved to Bjørnholt school. 
 * https://bjornholt.osloskolen.no/
 * @author Created by Bachelor Final Project group 18 at Oslo and Akershus University College 
 * Creating interactive web pages using the Angualr framework carried out by:
 * Martin Hansen Muren Mathisen (s189116), Waqas Liaqat (s180364), 
 * Yuanxin Huang (s184519), Thanh Nguyen Chu (s169954)
 * @version 1.01.01
 */
//
// require_once 'db_handler.php';

// $db_handle = new db_handler();
// $db_handle->destroySession();
    session_start();
    error_reporting(E_ALL);
    $_SESSION=array();
    if (session_id() != "" || isset($_COOKIE[session_name()]))
    setcookie(session_name(), '', time()-2592000, '/');
    session_destroy();
    header("Location: ./home.html"); /* Redirect browser */
    exit();

?>


