<?php 

    //require('header.php');
  require('../model/user_model.php');

?>


<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">

  <title>User List</title>

</head>

<body>
  <center class="user-header">
    <a class="link" href="Home.php">Back </a> |
    <a class="link" href="../controller/Logout.php">logout </a>
  </center>
  <br>
  <table border="1" align="center" class="user-form">
    <tr class="t1">

      <th>USERNAME</th>
      <th>PASSWORD</th>
      <th>EMAIL</th>
      <th>ID</th>
      <th>ACTION</th>
    </tr>


    <?php

       
        $username= $password= $email= $id='';

       $result =getAllUsers($username, $password, $email, $id);
          while($user= mysqli_fetch_assoc($result))
            {  ?>

    <t class="t2">
      <td>
        <?=$user['Username']?>
      </td>
      <td>
        <?=$user['Password']?>
      </td>
      <td>
        <?=$user['Email']?>
      </td>
      <td>
        <?=$user['ID']?>
      </td>





      <td>
        <a class="link button" href="../views/delete.php?delete=<?=$user['ID']?>"
          style="font-size: 14px; padding: 5px;">REMOVE</a>
      </td>
      </tr>
      <?php
            }
    ?>

  </table>
</body>

</html>