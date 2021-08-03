<?php  
if (isset($_POST['btn_sub'])) {
	require('../config/config.php');
	$obj =  new Loginp2;
	$email = $_POST['email'];
	$password = $_POST['password'];
	if($_POST['remember'] && $_POST['remember'] == 'Yes'){
		$query = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'";
		$obj->login($query,$remember);
	}
	else{
		$query = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'";
		$obj->login($query);	
	}
}
?>