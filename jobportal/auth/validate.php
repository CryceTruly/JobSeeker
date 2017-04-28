<?php
require '../classes/db.php';
if(isset($_POST['name'])){
	$name=trim($_POST['name']);
	$query="SELECT username FROM users WHERE username='$name'";
         $result=$handler->query($query);
	if(empty($name)){
		echo "username is required <br>";
		}
		if(strlen($name)<6){
			echo "username is must be 6 chars long <br>";
	}
	
         if($result->rowCount()){
                echo "sorry that username is already taken<br>";
               }
	if(substr($name, 0,strrpos($name, ' '))){
                       echo "username should not contain a white space";
}}

?>