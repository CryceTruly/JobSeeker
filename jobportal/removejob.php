<?php

require 'core/init.php';


 $cUser=$_SESSION['id'];
if(isset($_GET['id'])){
if(isset($_POST['fd'])){
	$id=$_GET['id'];
	$feed=htmlspecialchars(trim(strtolower($_POST['fd'])));
	$sql="INSERT INTO deletedjobs(job_id,user_id,reason,deleted) VALUES (?,?,?,NOW())";
	$q=$handler->prepare($sql);
	$q->execute(array(
$id,$cUser,$feed
	));



$sql2="DELETE FROM jobs where id='$id'";
if($run=$handler->query($sql2)){
	header('Location:account.php?msg='.urlencode("job has been successfully deleted"));
}




}}else{
	header('location:includes/errors/404.html');
}


?>