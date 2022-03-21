<?php 
	session_start();
	if(!isset($_COOKIE['status'])){
		header('location: Start.php');
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
                      <a href="Home.php">Login as Farmer</a>                   
                      <a> | </a>
                      <a href="../controller/Logout.php">Logout</a>
                    </td>
                  </tr>

                </table>
      </fieldset>

      <fieldset>
        <h3><b>Welcome to Farmer's Help Center</b></h3>
        <table>
        	<tr>
              <td>
							<a href="Ask Question.php"> Ask Question </a>
							</td>
						</tr>
						<tr>
              <td>
							<a href="Attach picture.php"> Attach picture to Question </a>
							</td>
						</tr>
						<tr>
              <td>
							<a href="Advisor profile.php"> Advisor Profile list </a>
							</td>
						</tr>
						<tr>
							<td>
							<a href="Edit.php"> Edit Question</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="Add description Question.php"> Add description of Question</a>
						</td>
					</tr>
					<tr>
              <td>
							<a href="Remove.php"> Remove Question </a>
							</td>
						</tr>
				</table>
      </fieldset> 

    </fieldset>

	
	
</body>
</html>