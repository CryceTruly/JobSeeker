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
    
       <script src="ckeditor/ckeditor.js"></script>
            <script src="js/val.js"></script>

<!--<script src="https://use.fontawesome.com/d9bd231b86.js"></script>-->

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
        <a class="navbar-brand" href="index.php">Your<span class="job">Job <i class="fa fa-desktop"></i></span></a>
        <!--<h3><i class="fa fa-question-circle"></i> Create an Account</h3>-->
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">

        <li><a href="browsejobs.php">Browse Jobs <i class="fa fa-search"></i> </a></li>
        <li><a href="postjob.php">Post A job <i class="fa fa-pencil"></i> </a></li>
            </ul>
        <ul class="nav navbar-nav navbar-right">

                      <?php
                      if(isset($_SESSION['username'])&& !empty($_SESSION['username'])){?>
                       <!-- drop down menu -->
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown"><?php echo "<span class='text-bold'>Hello  </span>",
                        $_SESSION['username'];  ?>   <span class="caret"></span><i class="fa fa-user-circle" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><i class="fa fa-circle-circle-o"></i> <a href="account.php">




                            Your Account</a></li>
                        
                            <li><a href="logout.php">Log out</a></li>
                        </ul>
                    </li>

                      <?php

                      }else{

                      ?>
        <li><a href="register.php">Register <i class="fa fa-arrow-right"></i></a></li>
        <li><a  href="login.php">Login  <i class="fa fa-lock"></i></a></li>



                   <?php
               }
               ?>






        </ul>
      </div><!--/.nav-collapse -->
      </div>
    </div>
  </header>
