<?php
require '../classes/db.php';
require 'connect.php';
if(filter_has_var(INPUT_POST,'submit')){	
			$password=trim($_POST['password']);
			$again=trim($_POST['again']);
			$name=trim($_POST['name']);
			$mail =trim($_POST['email']);

if(empty($name)||empty($mail)|| empty($again)){
	echo "hey silly fill out all the fields";
}else{

			$query="SELECT username FROM users WHERE username='$name'";
         $result=$handler->query($query);
         $query2="SELECT email FROM users WHERE email='$mail'";
         $result2=$handler->query($query);
	if(empty($name)){
		echo "username is required <br>";
		}
		if(strlen($name)<6){
			echo "username is must be 6 chars long <br>";
	}
	if(substr($name, 0,strrpos($name, ' '))){
            echo "username should not contain a white space<br>";
}
      if($result->rowCount()){
                echo "sorry that username is already taken<br>";
               }
	if(empty($mail)){
		echo "email is required <br>";
		}
		if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
        echo "please enter a valid email address";
      }
       if($result2->rowCount()){
                echo "sorry that username is already taken<br>";
               }
if(!($password==$again)){
		echo "your passwords donot match";
	}else{
		//sign him up

	   $hash=md5($again);
		$sql="INSERT INTO users(username,email,password,joined) VALUES(?, ?, ?, NOW())";
$q=$handler->prepare($sql);
if($query=$q->execute(array(
	$name,
	$mail,
	$hash,
))){
	header("Location:login.php?res=".urlencode("account created successfuly"));
          exit();
}


}


}




}

?>