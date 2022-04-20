<?php
	session_start();
	require_once('../model/user_model.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		
		if($username != ""){
			if($password != ""){
				if($email !=""){

					$user = ['username'=> $username, 'password'=>$password, 'email'=>$email];
					$status = addUser($user);

					if($status){
						header('location: ../views/Login.php');
					}else{
						echo "try again...";
					}

				}else{
					echo "invalid email....";
				}
			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>