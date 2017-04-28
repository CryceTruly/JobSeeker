<?php
if(isset($_POST['password'],$_POST['again'])){
	 $password=trim($_POST['password']);
	 $again=trim($_POST['again']);


if(strlen($again)<8){
	echo "password should contain atleast 8 characters<br>";
    }
	if(!($password==$again)){
		echo "your passwords donot match";
	}else{
	}
}


?>