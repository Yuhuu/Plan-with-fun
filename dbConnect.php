
<?php
/**
 * Database configuration 
 */
class dbConnect {

    private $conn;

    function __construct() {        
    }
    
    function connect() {
    define('DB_USERNAME', 's184519');
    define('DB_PASSWORD', null);
    define('DB_HOST', 'student.cs.hioa.no');
    define('DB_NAME', 's184519');
    // Connecting to mysql database
    $this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if ($this->conn->connect_errno){
       die('failed to connect ['.$connection->connect_error.']');
    }
    return $this->conn;
    }
}
  
?> 





