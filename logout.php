<?php
error_reporting(0);
require 'core/init.php';

if (isset ($_SESSION['username'])){
	session_destroy();
	header("location:index.php");

}else{
	echo "no one logged in";
}