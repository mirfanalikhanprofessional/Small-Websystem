<?php
abstract class Connectionp1{
	abstract function connect();
}
class Connectionp2 extends Connectionp1{
	function connect(){
		$host = "localhost";
		$username = "root";
		$password = "";
		$database = "websystem";
		$con = mysqli_connect($host, $username, $password, $database);
		return $con;
	}
} 
abstract class Insertp1 extends Connectionp2{
	abstract function insert($query);
}
class Insertp2 extends Insertp1{
	function insert($query){
		$result = mysqli_query($this->connect(),$query);
		if($result > 0){
			echo 'data inserted';
			header("Location: ../../login.php");
			return true;
		}
		else{
			header("Location: ../../register.php");
			return false;
		}
	}
}
abstract class Loginp1 extends Connectionp2{
	abstract function login($query,$remember = NULL);
}
class Loginp2 extends Loginp1{
	function login($query,$remember = NULL){
		$result = mysqli_query($this->connect(),$query);
		if (mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				if ($remember == "Yes"){
						$name = $row[1];
						$email = $row[4];
						$_COOKIE['email'] = $email;
						$email = mysqli_real_escape_string($this->connect(),$email);
						$email = $_COOKIE['email'];
						$_COOKIE['name'] = $name;
						$name = mysqli_real_escape_string($this->connect(),$name);
						$name = $_COOKIE['name'];
						setcookie("email", $email, time()+24*60*60, "/");
						setcookie("name", $name, time()+24*60*60, "/");
						header("Location: ../../dashboard.php");
				}
				elseif ($remember == NULL){
						$name = $row[1];
						$email = $row[4];
						$_COOKIE['email'] = $email;
						$email = mysqli_real_escape_string($this->connect(),$email);
						$email = $_COOKIE['email'];
						$_COOKIE['name'] = $name;
						$name = mysqli_real_escape_string($this->connect(),$name);
						$name = $_COOKIE['name'];
						setcookie("email", $email, time()+2*60*60, "/");
						setcookie("name", $name, time()+2*60*60, "/");
						header("Location: ../../dashboard.php");
				}
				else {
					echo "Login failed ! please try again";
					header("Location: ../../register.php");
				}
			}
		}
		else {
				echo "Login failed ! please try again";
				header("Location: ../../register.php");
		}
	}
}
?>