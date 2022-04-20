

<html>
  <head>
  <link rel="stylesheet" href="style.css">
</head>
      <body>
          <fieldset class="header">
              <table width="100%">
                  <tr>
                    <td>
                      <h1>FARMER'S HELP CENTER</h1>
                    </td>
                   <td align ="right">
                      
                      <a class="link" href="Login.php">Login</a>
                      <a> | </a>
                      <a class="link" href="../controller/Logout.php">Logout</a>
                    </td>
                  </tr>

                </table>
                  
        
      </fieldset>
     
        <form method="post" action=" .php"Forget passcheck.php class="fermer-form">
          <fieldset class="inner-fieldset">
                <legend><h2>Change Password</h2></legend>
                   <table >
                    <tr>
                       <td>Username: </td>
                       <td><input type="text" class="input" name="username" value=""></td>
                    </tr>
                    <tr>
                       <td>New Password </td>
                       <td><input type="password" class="input" name="new password" value=""></td>
                    </tr>
                    <tr>
                        <td>Confirm Password: </td>
                        <td><input type="password" class="input"  name="confirm password" value=""></td>
                    </tr>
                    <tr>
                      <td><input class="button" type="submit" name="submit" value="Submit">
                      </td>
                    </tr>
                  </table>
        </fieldset>
        </form>
      </body>
      </html>