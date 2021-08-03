<?php 
setcookie("email", $_COOKIE['email'], time()+0, "/");
setcookie("name", $_COOKIE['name'], time()+0, "/");
session_unset();
header('Location: ../../login.php');
?>