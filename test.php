<?php
include 'libs/load.php';

// signup("rahuls3", "asdf", "rahulsri073@gmail.com", "9445428114");
// print($_SERVER['DOCUMENT_ROOT']."/_templates/_$name.php");
$a=User::signup("rahuls3", "password", "rahulasri073@gmail.com", "9846542455");
print("kkkk".$a."hi");
?>