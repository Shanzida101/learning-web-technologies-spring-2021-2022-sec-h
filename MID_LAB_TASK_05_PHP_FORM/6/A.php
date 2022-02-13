<?php

	if(isset($_REQUEST['A+'])){
		echo $_REQUEST['A+']."<br>";
	}else{
			echo "success";
		}

	if(isset($_REQUEST['A-'])){
		echo $_REQUEST['A-']."<br>";
	}

	if(isset($_REQUEST['B+'])){
		echo $_REQUEST['B+']."<br>";
	}

	if(isset($_REQUEST['B-'])){
		echo $_REQUEST['B-']."<br>";
	}
	if(isset($_REQUEST['AB+'])){
		echo $_REQUEST['AB+']."<br>";
	}
	if(isset($_REQUEST['O+'])){
		echo $_REQUEST['O+']."<br>";
	}
	if(isset($_REQUEST['O-'])){
		echo $_REQUEST['O-']."<br>";
	}

?>