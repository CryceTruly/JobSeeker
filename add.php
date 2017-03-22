<?php
require('core/init.php');
if(isset($_POST['title'],$_POST['category'],$_POST['employer'],$_POST['type'],$_POST['description'],$_POST['city'],$_POST['email'])){
$title=$_POST['title'];
$category=$_POST['category'];
$employer=$_POST['employer'];
$type=$_POST['type'];
$description=$_POST['description'];
$city=$_POST['city'];
$email=$_POST['email'];

$sql="SELECT id as i FROM categories WHERE name='$category'";
$sql2="SELECT id as d FROM type WHERE name='$type'";
$query=$handler->query($sql);
$query2=$handler->query($sql2);
if($r=$query->fetch(PDO::FETCH_OBJ)){
	if($r2=$query2->fetch(PDO::FETCH_OBJ)){
		$category=$r->i;
		$type=$r2->d;


$sql="INSERT INTO jobs (type_id,company_name,Category_id,title,description,city,state,contact_email,created) VALUES (?,?,?,?,?,?,?,?,NOW())";
$query=$handler->prepare($sql);
if($query->execute(array(
$type,
$employer,
$category,
$title,
$description,
$city,'Uganda',
$email
	))){
	header("Location:postjob.php?msg=".urlencode("Your job has been successfully posted wishing you best of luck"));
}else{
	echo "could not post your work please try again";
}

//test fro here


	}
	
}

}

?>