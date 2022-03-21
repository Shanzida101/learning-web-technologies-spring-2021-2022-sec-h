<?php 
	session_start();

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != null && $password != null){

			$file = fopen('../model/user.txt', 'r');
			$user = fread($file, filesize('../model/user.txt'));

			fclose($file);
			$abc = explode('|', $user);
				
			if(trim($abc[0]) == $username && trim($abc[1]) == $password){
				$_SESSION['status'] = 'true';
				setcookie('status', 'true', time()+3600, '/');
				
				header('location:../views/Home.php');
			}else{
				echo "invalid username/password";
			}

		}else{
			echo "null submission..";
		}
	}	
?>