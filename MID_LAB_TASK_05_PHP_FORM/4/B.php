<?php


	if(isset($_REQUEST['g'])){
		$g = $_REQUEST['g'];
		if(empty($g))
		{
			echo 'Select someone \n';
		}
		else {
			echo $g.' Selected \n';
		}
	}
?>


<html>
<head>
	<title>Gender</title>
</head>
<body>
	<form method="post" action="B.php" style="width:30%">
		<fieldset>
		<legend>GENDER</legend>

			<input type="radio" name="g" value="male"> Male
			<input type="radio" name="g" value="female"> Female
			<input type="radio" name="g" value="other"> Other <br>
		<input type="submit" name="submit" value="Submit">
		<br><br><?php if(isset($_REQUEST['g'])){ echo "Gender : ".$g; }?>
	</form>
</body>
</html>