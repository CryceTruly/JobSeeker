<?php

require_once('core/init.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="content" description="find a job you love">
    <title>Job Finder  |Everywhere we work</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
      
    <!-- Custom styles for this template -->
    <link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
  </head>

  <body>
	<header class="header-main">
		<div class="navbar navbar-default" role="navigation">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="index.php">Your<span class="job">Job</span></a>
			</div>
			<div class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
				
				<li><a href="browsejobs.php">Browse Jobs</a></li>
				<li><a href="postjob.php">Post A job</a></li>
					  </ul>
			  <ul class="nav navbar-nav navbar-right">

                      <?php
                      if(isset($_SESSION['username'])&& !empty($_SESSION['username'])){?>
                       <!-- drop down menu -->
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown"><?php echo "<span class='text-bold'>Hello  </span>",$_SESSION['username'];  ?>   <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="account.php">Your profile</a></li>
                            <li><a href="stats.php">Your statistics</a></li>
                            <li><a href="settings.php">Settings</a></li>
                            <li><a href="logout.php">Log out</a></li>
                        </ul>
                    </li>

                      <?php

                      }else{

                      ?>
				<li><a href="register.php">Register</a></li>
				<li><a  href="login.php">Login</a></li>

                   

                   <?php
               }
               ?>






			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		</div>
	</header>
