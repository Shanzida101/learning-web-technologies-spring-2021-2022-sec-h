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
        <td align="right">

          <a class="link" href="Login.php">Login</a>
          <a> | </a>
          <a class="link" href="Registration.php">Register</a>
        </td>
      </tr>
    </table>

  </fieldset>

  <fieldset>
    <form id="myform" method="post" action="../controller/Registrationcheck.php" class="reg-form fermer-form">
      <fieldset class="inner-fieldset">
        <legend>
          <h2>REGISTRATION</h2>
        </legend>

        <table height="400px" width="50px">
          <tr>
            <td style="width: 100px;">Name: </td>
            <td><input class="input" type="text" name="myname" value="" /> </td>
          </tr>

          <tr>
            <td style="width: 100px;">Email: </td>
            <td><input class="input" type="email" name="email" value=""> </td>
          </tr>
          <tr>
            <td style="width: 100px;">Username: </td>
            <td><input class="input" type="text" name="username" value=""></td>
          </tr>
          <tr>
            <td style="width: 100px;">Password: </td>
            <td><input class="input" type="password" name="password" value=""></td>
          </tr>
          <tr>
            <td style="width: 100px;">Confirm Password: </td>
            <td><input class="input" type=" password" name="Confirm_Password" value=""></td>
          </tr>

          <tr>
            <td colspan="2">
              <fieldset class="nopadding">
                <legend>Gender </legend>
                <input type="radio" name="gender" value=""> Male
                <input type="radio" name="gender" value=""> Female
                <input type="radio" name="gender" value=""> Othes
              </fieldset>
            </td>
          </tr>
          <tr>
            <td>
              <fieldset class="nopadding" style="width:30%">
                <legend>DATE OF BIRTH</legend>
                <table>
                  <tr>
                    <td><input class="dob" type="value"> </td>
                    <td> / </td>
                    <td><input class="dob" type="value"> </td>
                    <td> / </td>
                    <td><input class="dob" type="value"> </td>
                    <td> (dd/mm/yyyy) </td>
                  </tr>
                </table>
              </fieldset>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input type="submit" class="button" name="submit" value="Submit">
              <input type="reset" class="button" name="reset" value="Reset">
            </td>
          </tr>
        </table>
      </fieldset>
    </form>
  </fieldset>



</body>

</html>