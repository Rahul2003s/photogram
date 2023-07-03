<?php

class User
{
    private $conn;
    public static function signup($user, $pass, $email, $phone)
    {
        $options = [
            'cost' => 9,
        ];
        $pass = password_hash($pass, PASSWORD_BCRYPT, $options);
        $conn = Database::getConnection();
        $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`)
        VALUES ('$user', '$pass', '$email', '$phone');";


        //PHP 7.4 -
        // if ($conn->query($sql) === true) {
        //     $error = false;
        // } else {
        //     // echo "Error: " . $sql . "<br>" . $conn->error;
        //     $error = $conn->error;
        // }

        //PHP 8.1 - all MySQLi errors are throws as Exceptions
        try {
            return $conn->query($sql);
        } catch (Exception $e) {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return false;
        }

    }

    public static function login($user,$pass)
    {
        
    }

    public static function signin($user,$pass)
    {
        $conn = Database::getConnection();

        $sql = "SELECT * FROM auth WHERE username = '$user';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($pass,$row['password'])) {
                return $row;
            } else {
                return -2;
            }
        } else {
            return -1;
        }
    }
    public function __constructer($username)
    {
        $this->conn = Database::getConnection();
        $this->conn->query();
        $this->username = $username;

        

    }

    public function __call($name,$arguments)
    {
        $property = preg_replace("/[^0-9a-zA-Z]/","",substr($name,3));
        $property = strtolower(preg_replace('/\B([A-Z])/','_$1',$property));

        if ( substr($name,0,3) == "get" ) {
            return $this->__get($property);
        }else if( substr($name,0,3) == "set" ){
            return $this->__set($property,$arguments[0]);
        }
    }

    public function __get($var)
    {
        if (!$this->conn) {
            $this->conn = Database::getConnection();
        }

        $sql = "SELECT `$var` FROM `users` WHERE `id` = `$this->id`;";
        $result = $this->conn->query($sql);
        if ($result->num_rows) {
            return $result->fetch_assoc()["var"];
        }else{
            return null;
        }
    }

    public function __set($key,$value)
    {
        if (!$this->conn) {
            $this->conn = Database::getConnection();
        }
        $sql = "UPDATE `users` SET `$key`=`$value` WHERE `id`='$this->id';";
        if ($this->conn->query($sql)) {
            return true;
        }else{
            return false;
        }
    }
}
