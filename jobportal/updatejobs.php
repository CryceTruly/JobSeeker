<?php

require('core/init.php');

if(isset($_SESSION['username'])){
	$username= $_SESSION['username'];

$sql5="SELECT id,username FROM users where username= '$username'";
$query5=$handler->query($sql5);
if($r=$query5->fetch(PDO::FETCH_OBJ)){
	$user_id=$r->id;
}


}

if(isset($_POST['title'],$_POST['category'],$_POST['employer'],$_POST['type'],$_POST['description'],$_POST['city'],$_POST['email'])){
$title=$_POST['title'];
$category=$_POST['category'];
$employer=$_POST['employer'];
$type=$_POST['type'];
$description=$_POST['description'];
$city=$_POST['city'];
$email=$_POST['email'];


if(isset($_GET['id'])){
$myId=$_GET['id'];
}else{
	echo "not seen";
}

$sql="SELECT id as i FROM categories WHERE name='$category'";
$sql2="SELECT id as d FROM type WHERE name='$type'";
$query=$handler->query($sql);
$query2=$handler->query($sql2);
if($r=$query->fetch(PDO::FETCH_OBJ)){
	if($r2=$query2->fetch(PDO::FETCH_OBJ)){
		$category=$r->i;
		$type=$r2->d;
	}

}/*
echo $category,'<br>';
echo $type,'<br>';
echo $employer,'<br>';
echo $user_id,'<br>';
echo $title,'<br>';
echo $description,'<br>';
echo $city,'<br>';
echo $email,'<br>';
echo 'Uganda','<br>';
echo 'NOW()';
/*
$quer="UPDATE `jobs` SET `category_id` = ?, `type_id` = ?, `company_name` = ?, `title` = ?, `description` = ?, `city` = ?, `contact_email` = ?,`state` = ? WHERE `jobs`.`id` = '$myId' ";

*/


/*
 (type_id,company_name,Category_id,user_id,title,description,city,state,contact_email,created) VALUES (?,?,?,?,?,?,?,?,?,NOW())";*/
 $sql6="UPDATE `jobs` SET `category_id` = ?, `type_id` = ? ,`company_name` = ?, `title` = ?, `description` = ?, `city` = ?, `state` = ?, `contact_email` = ?, `created` =  NOW() WHERE `jobs`.`id` = ?

";
$query=$handler->prepare($sql6);
if($query->execute(array(
$category,
$type,
$employer,
$title,
$description,
$city,
'Uganda',
$email,
$myId

	)))

	{
	header("Location:account.php?msg=".urlencode("Your job has been successfully updated wishing you best of luck"));
}else{
	echo "could not update your work please try again";
}

//test fro here



}
?>
