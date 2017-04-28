<?php
if(isset($_POST['register'])){
	require_once 'classes/db.php';

 $fname=strip_tags(trim($_POST['firstname']));
  $sname=strip_tags(trim($_POST['lastname']));
  $email=strip_tags(trim($_POST['email']));
  $username=strip_tags(trim($_POST['username']));
  $password=strip_tags(trim($_POST['password']));
  $userType=strip_tags(trim($_POST['userType']));
 $sql="SELECT id,name FROM role WHERE name='$userType'";
$query=$handler->query($sql);
$hash=md5($password);
while($r=$query->fetch(PDO::FETCH_OBJ)){
$realusertype=$r->id;
$_SESSION['type']=$realusertype;
}
$handler->query("INSERT INTO `users` (`id`, `first_name`, `last_name`, `Role`, `email`, `username`, `password`, `joined`) VALUES (NULL, '$fname', '$sname', '$realusertype', '$email', '$username', '$hash', NOW())");
header("Location:login.php?res=".urlencode("account created successfuly login now"));


}
?>
