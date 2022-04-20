<?php
	//session_start();
	require_once('../model/user_model.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
				
		if($username != ""){
			if($password != ""){
				

					$user = ['username'=> $username, 'password'=>$password];
					$status = Admin_validate($username, $password);

					if($status){
						header('location: ../views/Home.php');
					}else{
						
						echo "try again...";
					}

			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
	
?>