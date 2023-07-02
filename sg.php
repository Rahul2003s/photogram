<pre>
<?php

include 'libs/load.php';

echo "server";
print_r($_SERVER);
// echo "post";
// print_r($_POST);
// echo "get";
// print_r($_GET);



echo "SESSION";
print_r($_SESSION);

if (isset($_GET['clear'])) {
    Session::unset();
}



if(Session::isset('a')){
    printf("already exists".Session::get('a')."");
}else{
    Session::set('a',time());
    printf("new value".Session::get('a'));
}
?>
</pre>