<?php
require 'core/init.php';
if(isset ($_POST['password']) && isset($_POST['username'])){

$username=trim($_POST['username']);

if(!empty($_POST['password']) && !empty($username)){
	$hashed=md5($_POST['password']);
	
	
$sql=$handler->query("SELECT username,password from users WHERE username='$username' AND password='$hashed' LIMIT 1");
if($sql->rowCount()==1){
$_SESSION['username'] = $username;
header("Location:postjob.php");
}else{
	header("Location:login.php? msg=".urlencode('incorect username and password combination try again with the right password'));
}
}else{
	header("Location:login.php?msg =".urlencode('all the values are required fill all field')); 
}

}else{
	echo "not set";
}




?>