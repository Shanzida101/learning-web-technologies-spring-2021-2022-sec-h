


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
        <form method="post" action="../controller/Logincheck.php">
           <fieldset>
                <legend><h2>LOGIN</h2></legend>
                   <table >
                    <tr>
                       <td>Username: </td>
                       <td><input type="text" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                  </table>
                  <hr>
                  <table>
                    <tr>
                       <input type="checkbox" name="" value=""> Remember me
                    </tr>
                    <tr>
                      <td><input type="submit" name="submit" value="Submit">
                      <a href="Forgot Password.php">Forgot Password?</a></td>
                    </tr>
                  </table>
           </fieldset>
         </form>
         </fieldset>
         
   </body>
</html>