<?php

function load_template($name){
    include $_SERVER['DOCUMENT_ROOT']."/photogram/_templates/_$name.php";
}