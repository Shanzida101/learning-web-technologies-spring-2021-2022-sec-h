<?php

	if(isset($_REQUEST['A+'])){
		echo $_REQUEST['A+']."<br>";
	}

	if(isset($_REQUEST['A-'])){
		echo $_REQUEST['A-']."<br>";
	}

	if(isset($_REQUEST['B+'])){
		echo $_REQUEST['B+']."<br>";
	}

	if(isset($_REQUEST['B-'])){
		echo $_REQUEST['B-']."<br>";
	}
	if(isset($_REQUEST['AB+'])){
		echo $_REQUEST['AB+']."<br>";
	}
	if(isset($_REQUEST['O+'])){
		echo $_REQUEST['O+']."<br>";
	}
	if(isset($_REQUEST['O-'])){
		echo $_REQUEST['O-']."<br>";
	}

?>

<html>
    <head>
		<title></title>
	</head>
	<body>
		<form method="post" action="B.php" style="width:30%">
            <fieldset>
			<legend>BLOOD GROUP</legend>
		    <table>
                <tr>
				   <td>
						    <select name="">
							<option value="">A+</option>
							<option value="">A-</option>
							<option value="">B+</option>
							<option value="">AB+</option>
							<option value="">O+</option>
							<option value="">O-</option>
						</select>
			       </td>
			    </tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit">
						<?php if(isset($_REQUEST['A+'])){ echo $_REQUEST['A+'].'<br>'; }?>
		                <?php if(isset($_REQUEST['A-'])){ echo $_REQUEST['A-'].'<br>'; }?>
		                <?php if(isset($_REQUEST['B+'])){ echo $_REQUEST['B+'].'<br>'; }?>
		                <?php if(isset($_REQUEST['B-'])){ echo $_REQUEST['B-'].'<br>'; }?>
		                <?php if(isset($_REQUEST['B-'])){ echo $_REQUEST['O+'].'<br>'; }?>
		                <?php if(isset($_REQUEST['B-'])){ echo $_REQUEST['O-'].'<br>'; }?>
					</td>
				</tr>


		    </table>
		   
		</fieldset>
        </form>

    </body>
</html>