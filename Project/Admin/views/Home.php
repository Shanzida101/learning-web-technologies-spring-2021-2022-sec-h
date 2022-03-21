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
                      <a href="Home.php">Login as Admin</a>                   
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
							<a href="Userlist.php"> Userlist</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="Adminprofile.php"> My Profile</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="Advisor.php"> Advisor Profile</a>
						</td>
					</tr>
				</table>
      </fieldset> 

    </fieldset>

	
	
</body>
</html>