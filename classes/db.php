<?php
require_once 'config.php';

	 $error;
	 try{
  $handler=new PDO('mysql:host=localhost;dbname=findjobs','root','');
  $handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $ex){
  echo $this->error= $ex->getMessage();
}












