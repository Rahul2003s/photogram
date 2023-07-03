<?php

class User
{
    private $conn;
    public static function signup($user, $pass, $email, $phone)
    {
        $conn = Database::getConnection();
        $pass = password_hash($pass, PASSWORD_BCRYPT, $options = ['cost' => 9]);
        $sql = "INSERT INTO auth (username, pass, email, phone)
        VALUES ('$user', '$pass', '$email', '$phone')";

        if ($conn->query($sql) === true) {
            $result = false;
        } else {
            $result = $conn->error;
        }

        $conn->close();
        return $result;
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
