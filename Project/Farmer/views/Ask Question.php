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
                      <a href="Home.php">Back</a>                   
                      <a> | </a>
                      <a href="../controller/Logout.php">Logout</a>
                    </td>
                  </tr>

                </table>
      </fieldset>

      <fieldset>
        <h3><b>Ask Question to the Advisor</b></h3>
         

            <form method="POST" action="../controller/Questioncheck.php" enctype="multipart/form-data">

                Question: <input type="text" name="">  
                      <input type="submit" name="submit" value="Submit">
           </form>

      </fieldset>

</body>
</html>