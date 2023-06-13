<?php

class Database{

    public static $conn=null;

    public static function getConnection()
    {
        if(Database::$conn == null) {
            $servername = "localhost";
            $username = "root";
            $password = "password";
            $dbname = "photogram";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                Database::$conn = $conn;
                return Database::$conn;
            }
        }else{
            return Database::$conn;
        }
    }
}