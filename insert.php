<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.echo
 */

session_start();
$errors = array();
$data = array();

// put all the value from the input value, here we can see the value of key['myEmail']
$_POST = json_decode(file_get_contents('php://input'), true);
// checking for blank values.
if (empty($_POST['myPassword'])) {
    $errors['myPassword'] = 'Password is required.';
}
if (empty($_POST['myEmail'])) {
    $errors['myEmail'] = 'Email is required.';
}
if (!empty($errors)) {
    // put the errors array in data array
  $data['errors']  = $errors;
    } else {
  $data['message'] = 'Form data is going well';
// response back. and put the value out of json_decoded array
    $userEmail = $_POST['myEmail'];
        $pass = $_POST['myPassword'];
        include_once 'db_connect.php';
        // opening db connection
        $db = new db_connect();
        $conn = $db->connect();
        $result = mysqli_query($conn, "INSERT INTO `members` ( `name`, `email`, `phone`, `aboutme`, `password`) VALUES
( 'yuhu', '$userEmail', '1234567890','aboutme: I am yuhu, from PCA , Oslo', '$pass');");
        if (!$result) {
        console . log("<p>Your information has not been successfu</p>");
        console . log('failed to connect [' . $conn->connect_error . ']');
        die('failed to connect [' . $conn->connect_error . ']');
    } else {
        console . log("<p>Your information has been successfully added to the database.<p>");
        $_SESSION['user'] = $userEmail;
    }
    }
    // put this in json fomat again
    echo json_encode($data);
?> 


