<?php

	require_once('db.php');

	

	function Admin_validate($username, $password){
		$con = getConnection();
		$sql= "select * from admin where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user){
			return true;
		}else{
			return false;
		}
	}

	

	function addUser($user){
		$con = getConnection();
		$sql = "insert into admin values( '{$user['username']}','{$user['password']}','{$user['email']}' ,'')";
 
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUsers($username, $password, $email, $id){
		$con = getConnection();
		$sql = "select * from admin";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	/*function getUserById($id){
		$con = getConnection();
		$sql = "select * from admin where id={$id}";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);
		return $data;
	}*/

	/*function deleteUser($Psl){
		$con = getConnection();
		$sql= "delete from admin where ID={$Psl}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
        
        $result=mysqli_query($con, $sql);

        return $result;
    }*/

	function editUser($user){
		$con = getConnection();
		$sql = "update admin set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql = "delete from admin where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>