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
    $username= Session::get("session_username");
    $user=new User($username);
    echo "Welcome back," . $user->getusername();
}else{
    printf("No Session found!! trying to login..");
    $username = User::signin($user, $pass);
    $user = new User($username);
    echo " h ";
    echo "hii ".$user->getusername();
    if($username){
        echo "Login sucess".$user->getusername();
        Session::set("Is_logined",true);
        Session::set("session_username", $username);
    }else{
        echo "login failed";
    }
    echo "bye";
}

?>
