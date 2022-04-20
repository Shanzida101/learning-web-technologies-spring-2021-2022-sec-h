<?php 
	session_start();
	
?>

<html>

<head>
	<link rel="stylesheet" href="style.css">

	<title>Farmers help center</title>
</head>

<body>
	<fieldset class="header">
		<table width="100%">
			<tr>
				<td>
					<h1>FARMER'S HELP CENTER</h1>
				</td>
				<td align="right">
					<a class="link" href="Home.php">Login as Admin</a>
					<a> | </a>
					<a class="link" href="../controller/Logout.php">Logout</a>
				</td>
			</tr>

		</table>
	</fieldset>

	<fieldset class="home">
		<h3><b>Welcome to Farmer's Help Center</b></h3>
		<table>
			<tr>
				<td class="home-item">
					<a href="Userlist.php"> Userlist</a>
				</td>
			</tr>
			<tr>
				<td class="home-item">
					<a href="Adminprofile.php"> My Profile</a>
				</td>
			</tr>
			<tr>
				<td class="home-item">
					<a href="Advisor.php"> Advisor Profile</a>
				</td>
			</tr>
		</table>
	</fieldset>

	</fieldset>



</body>

</html>