
<!DOCTYPE html>
<html>
  <head>
    <title>Setting up database</title>
  </head>
  <body>

    <h3>Setting up...</h3>

<?php // Example 26-3: setup.php
  require_once 'DbHandler.php';
   $dbhd = new DbHandler();
   $dbhd->createTable('members',
              'user VARCHAR(16),
              pass VARCHAR(16),
              INDEX(user(6))');

//  $dbhd->createTable('evens', 
//              'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//              auth VARCHAR(16),
//              recip VARCHAR(16),
//              time INT UNSIGNED,
//              description VARCHAR(4096),
//              INDEX(auth(6)),
//              INDEX(recip(6))');
//
//  $dbhd->createTable('friends',
//              'user VARCHAR(16),
//              friend VARCHAR(16),
//              INDEX(user(6)),
//              INDEX(friend(6))');
//
//  $dbhd->createTable('profiles',
//              'user VARCHAR(16),
//               text VARCHAR(4096),
//               aboutme VARCHAR(4096),
//               INDEX(user(6))');
?>

    <br>...done.
  </body>
</html>

