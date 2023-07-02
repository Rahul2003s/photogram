<?php

class User
{
    private $conn;
    public static function signup($user, $pass, $email, $phone)
    {
        $conn = Database::getConnection();

        $checkQuery = "SELECT COUNT(*) as count FROM `photogram`.`auth` WHERE `username` = '$user' or `email` = '$email' or `phone` = '$phone';";
        $result = $conn->query($checkQuery);
        
        if ($result->fetch_assoc()['count'] > 0) {
            // Username already exists
            
            return "Already taken. Please choose a different username.";
        }
        $options = [
            'cost' => 12,
        ];
        $pass_hash = password_hash($pass, PASSWORD_BCRYPT, $options);
        $sql = "INSERT INTO `photogram`.`auth` (`username`,`password`,`email`,`phone`,`blocked`,`active`) VALUES('$user','$pass_hash','$email','$phone','0','1');";
        $error = false;

        if ($conn->query($sql) === true) {
            $error = false;
        } else {
            if ($conn->errno == 1062) {
                $error = "already exists.";
            }else{
                $error = "not defined";
            }
        }
        return $error;
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
}
