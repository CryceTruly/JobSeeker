<?php
$password="";
$again="";
	
if(isset($_POST['password'])){
	$password=trim($_POST['password']);
	if(empty($password)){
		echo "password is required <br>";
		}
		if(strlen($password)<8){
			echo "password is must be 8 chars long <br>";
	}

	}
//check sett
	



?>