<?php

	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['myemail'];
	}
?>


<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post" action="C.php" style="width:30%">
		<fieldset>
			<legend>EMAIL</legend>
		<br> <input type="text" name="myemail" value="<?php if(isset($email)){ echo $email; }?>"/>
		<hr>
		<br><input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>