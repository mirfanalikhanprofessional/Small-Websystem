<?php 
if(isset($_POST['btn_sub'])){
	require('../config/config.php');
	$obj = new Insertp2;
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = "INSERT INTO users(`Name`,`Age`,`Phone`,`Email`,`Password`) VALUES('$name','$age','$phone','$email','$password')";
	$obj->insert($query);
}

?>