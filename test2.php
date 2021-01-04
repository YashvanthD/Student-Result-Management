<?php
//session_start();
include_once 'test1.php';
echo 'This is User';
$name=$_POST['name'];
$_session['names']=$name;


?>
