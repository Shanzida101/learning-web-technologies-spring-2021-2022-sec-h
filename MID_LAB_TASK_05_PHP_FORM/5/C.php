<html>
    <head>
		<title></title>
	</head>
	<body>
		<form method="post" action="C.php" style="width:30%">
            <fieldset >
			<legend>Degree</legend>
            <table>
                <tr>
					<td>
						<input type="checkbox" name="" value=""> SSC
						<input type="checkbox" name="" value=""> HSC
						<input type="checkbox" name="" value=""> BSc
						<input type="checkbox" name="" value=""> MSc
					</td>
				</tr>
				<tr>
					<td>
						<?php if(isset($_REQUEST['SSC'])){echo$_REQUEST['SSC'].'<br>'; }?>
			            <?php if(isset($_REQUEST['HSC'])){ echo $_REQUEST['HSC'].'<br>'; }?>
			            <?php if(isset($_REQUEST['Bsc'])){ echo $_REQUEST['Bsc'].'<br>'; }?>
			            <?php if(isset($_REQUEST['Msc'])){ echo $_REQUEST['Msc'].'<br>'; }?>
		              <input type="submit" name="submit" value="Submit"><br><br>
					</td>
				</tr>
		    </table>
		    
		</fieldset>
		    
        </form>

    </body>
</html>