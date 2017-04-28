<?php
error_reporting(0);
	 try{
  $handler=new PDO('mysql:host=localhost;dbname=jobsfinal','root','');
  $handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $ex){
  echo $ex->getMessage();
}












