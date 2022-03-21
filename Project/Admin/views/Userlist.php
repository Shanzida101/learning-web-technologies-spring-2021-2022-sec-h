<?php 
    require_once('header.php');
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
                      <a href="Home.php">Back</a>                   
                      <a> | </a>
                      <a href="../controller/Logout.php">Logout</a>
                    </td>
                  </tr>

                </table>
      </fieldset>

      <fieldset>
        <h3><b>User List</b></h3>
        <table border="1">
    <tr>
      <td>No</td>
      <td>Name</td>
      <td>Password</td>
      <td>Email</td>
      <td>Action</td>
    </tr>
    <tr>
      <td>1</td>
      <td>Sharna</td>
      <td>1234</td>
      <td>sharna0101@gmail.com</td>
      <td>
        <a href="edit.php?id=1">Edit</a> |
        <a href="delete.php?id=1">Delete</a>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Shanzida</td>
      <td>4567</td>
      <td>shanzida@aiub.edu</td>
      <td>
        <a href="edit.php?id=2">Edit</a> |
        <a href="delete.php?id=2">Delete</a>
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td>Abid</td>
      <td>3333</td>
      <td>abid@aiub.edu</td>
      <td>
        <a href="edit.php?id=3">Edit</a> |
        <a href="delete.php?id=3">Delete</a>
      </td>
    </tr>
    <tr>
      <td>4</td>
      <td>Naja</td>
      <td>7777</td>
      <td>naja@aiub.edu</td>
      <td>
        <a href="edit.php?id=4">Edit</a> |
        <a href="delete.php?id=4">Delete</a>
      </td>
    </tr>
    <tr>
      <td>5</td>
      <td>Anik</td>
      <td>4562</td>
      <td>anik@aiub.edu</td>
      <td>
        <a href="edit.php?id=5">Edit</a> |
        <a href="delete.php?id=5">Delete</a>
      </td>
    </tr>
  </table>
      </fieldset> 

    </fieldset>

	
	
</body>
</html>