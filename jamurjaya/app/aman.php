<?php
session_start();
$data=$_COOKIE['username'];
if(!isset($_COOKIE['username']))
{
header('location:app_login.php');
}
else{
header('location:index.php');
}

?>