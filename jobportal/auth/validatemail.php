<?php
require '../classes/db.php';
if(isset($_POST['email'])){
	$mail =trim($_POST['email']);
	$query2="SELECT email FROM users WHERE email='$mail'";
         $result2=$handler->query($query2);
	if(empty($mail)){
		echo "email is required <br>";
		}
		if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
        echo "please enter a valid email address";
      }
      if($result2->rowCount()){
                echo "sorry that email is already taken<br>";
               }
}
?>
