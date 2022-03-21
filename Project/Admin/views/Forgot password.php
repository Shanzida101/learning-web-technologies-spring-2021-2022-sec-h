<?php 
    require_once('header.php');
?>

<html>
  <head></head>
      <body>
          <fieldset>
            
              
              <table width="100%">
                  <tr>
                    <td>
                      <h1>FARMER'S HELP CENTER</h1>
                    </td>
                   <td align ="right">
                      
                      <a href="Login.php">Login</a>
                      <a> | </a>
                      <a href="../controller/Logout.php">Logout</a>
                    </td>
                  </tr>

                </table>
                  
        
      </fieldset>
      <fieldset>
        <form method="post" action=" Login.php">
                <legend><h2>Change Password</h2></legend>
                   <table >
                    <tr>
                       <td>Username: </td>
                       <td><input type="text" name="username" value=""></td>
                    </tr>
                    <tr>
                       <td>New Password </td>
                       <td><input type="password" name="new password" value=""></td>
                    </tr>
                    <tr>
                        <td>Confirm Password: </td>
                        <td><input type="password" name="confirm password" value=""></td>
                    </tr>
                    <tr>
                      <td><input type="submit" name="submit" value="Submit">
                      </td>
                    </tr>
                  </table>
        </fieldset>
      </body>
      </html>