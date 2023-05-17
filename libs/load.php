<?php

function load_template($name){
    include $_SERVER['DOCUMENT_ROOT']."/photogram/_templates/_$name.php";
}


function validate($username,$password)
{
    if ($username == "rahulsri073@gmail.com" and $password == "password") {
        return true;
    }else{
        return false;
    }
}