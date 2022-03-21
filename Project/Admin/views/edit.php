<?php 

	$id =  $_GET['id'];
	$file = fopen('../model/edit.txt', 'r');
	while(!feof($file)){
		$user = fgets($file);
		$userArray = explode('|', $user);

		if(trim($userArray[0]) == $id){
			$editUser = $userArray;
			break;
		}
	}
?>

<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
	    <table width="100%">
                  <tr>
                    <td>
                      <h1>FARMER'S HELP CENTER</h1>
                    </td>
                   <td align ="right">
                      <a href="Userlist.php">Back</a>                   
                      <a> | </a>
                      <a href="../controller/Logout.php">Logout</a>
                    </td>
                  </tr>

                </table>
      </fieldset>

      <form method="POST" action="../controller/edit handler.php">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?=$userArray[1]?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$userArray[2]?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?=$userArray[3]?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>