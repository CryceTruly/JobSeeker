<?php
require 'core/init.php';
if(isset ($_POST['password']) && isset($_POST['username'])){

$username=trim($_POST['username']);

if(!empty($_POST['password']) && !empty($username)){
	echo $hashed=md5($_POST['password']),'<br>';
	
	
$sql=$handler->query("SELECT username,password from users");


while($results=$sql->fetch(PDO::FETCH_OBJ)){
	echo '<pre>',print_r($results),'</pre>';
	$db_pass=$results->password;
    $db_user=$results->username;

    
if(($db_pass==$hashed)&&($username==$db_user)){

$_SESSION['username'] = $username;
header("Location:postjob.php");
}else{
	echo "incorect password try again with the right password";
}

}




}else{
	echo "all the values are required fill all field";
}

}else{
	echo "not set";
}




?>