<?php
class db_connect {
                
                private $conn;
                
                function __construct()
                {
                }
             
                function connect() {
                    define('DB_USERNAME', 'root');
                    define('DB_PASSWORD', null);
                    define('DB_HOST', 'localhost');
                    define('DB_NAME', 'friends_plan_demo');
                    // Connecting to mysql database
             
                $this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
                if ($this->conn->connect_errno){
                   die('failed to connect ['.$connection->connect_error.']');
                }
                return $this->conn;
                }
            }
?>