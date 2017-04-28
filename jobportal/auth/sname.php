<?php

if(isset($_POST['lastname'])){
	$name=trim($_POST['lastname']);
	
if(strlen($name)==null){
	echo "You must enter a lastname <br>";
}

		if(strlen($name)<3){
			echo "lastname is too short <br>";
	}
	
        }

?>
