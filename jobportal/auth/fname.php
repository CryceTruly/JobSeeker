<?php

if(isset($_POST['firstname'])){
	$name=trim($_POST['firstname']);
	
if(strlen($name)==null){
	echo "You must enter a firstname <br>";
}

		if(strlen($name)<3){
			echo "firstname is too short <br>";
	}
	
        }

?>

