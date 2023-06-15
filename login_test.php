<?php

include 'libs/load.php';

$user = "rahuls3";
$pass = "password";

$result = null;

if(isset($_GET['logout'])){
    Session::destroy();
    die("Session destroyed");
}

if (Session::get("Is_logined")) {
    $userdata= Session::get("session_user");
    echo "Welcome back, $userdata[username]";
}else{
    printf("No Session found!! trying to login..");
    $result = User::signin($user, $pass);
    if($result){
        echo "Login sucess";
        Session::set("Is_logined",true);
        Session::set("session_user", $result);
    }else{
        echo "login failed";
    }
}

?>
