<?php
include_once 'includes/Session.class.php';
include_once 'includes/Database.class.php';
include_once 'includes/User.class.php';

Session::start();

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/photogram/_templates/_$name.php";
}


function validate($username, $password)
{
    if ($username == "rahulsri073@gmail.com" and $password == "password") {
        return true;
    } else {
        return false;
    }
}

function signup($user, $pass, $email, $phone)
{
    $conn = Database::getConnection();

    $sql = "INSERT INTO `photogram`.`auth` (`username`,`password`,`email`,`phone`,`blocked`,`active`) VALUES('$user','$pass','$email','$phone','0','1');";

    $error = false;

    if ($conn->query($sql) === true) {
        $error = false;
    } else {
        print("ERRRRRR");
        $error = true;
    }
    return $error;
}

function signin($user, $pass)
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
function dialogue($msg, $title = "", $botton = "ok")
{
    $a = " 
    <script type='text/javascript'> 
    swal('$msg',{title: '$title', buttons: '$botton'}); 
    </script>
    ";
    echo $a;
}
