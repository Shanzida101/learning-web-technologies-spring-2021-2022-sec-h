<?php
	session_start();
require('../model/user_model.php');
    
    $Psl= $_REQUEST['delete'];
   //$patient = getPatientByPsl($Psl);

   if(isset($Psl))
   {
       $result=deleteUser($Psl);
//print_r($result);
       
       if($result)
       {
        header('location:../views/userlist.php');
       }
       else
       {
          echo "error";
       }
     
       
   }
    
//print_r($patient);


?>


