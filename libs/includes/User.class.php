<?php

class User
{
    private $conn;
    public static function signup($user, $pass, $email, $phone)
    {
        $conn = Database::getConnection();

        $sql = "INSERT INTO `photogram`.`auth` (`username`,`password`,`email`,`phone`,`blocked`,`active`) VALUES('$user','$pass','$email','$phone','0','1');";
        $error = false;

        if ($conn->query($sql) === true) {
            $error = false;
        } else {
            print("ERRRRRR");
            $error = $conn->error;
        }
        return $error;
    }

    public function signin($user,$pass)
    {
        $conn = Database::getConnection();

        $sql = "SELECT pass FROM auth WHERE username = '$user';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($pass == $row['pass']) {
                $conn->close();
                return 1;
            } else {
                return -2;
            }
        } else {
            return -1;
        }
        $conn->close();
        return 0;
    }
    public function __constructer()
    {

    }
}
