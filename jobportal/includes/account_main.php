<?php  include 'core/init.php';
if(!isset($_SESSION['id'])){
header('Location:login.php');
                         
                          }else{
                       $cUser=$_SESSION['id'];
                          }

?>


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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

<script src="js/deletejob.js"></script>
    <link rel="stylesheet" href="css/sidebar.css">
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
              <a href="account.php" class="btn btn-success navbar-brand" id="menu-toggle">My Account</a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                
                <li><a href="browsejobs.php">Browse Jobs <i class="fa fa-search"></i> </a></li>
        <li><a href="postjob.php">Post A job <i class="fa fa-pencil"></i> </a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                       <li><a href="messages.php" data-toggle="modal" data-target="#view" id="delbtn"> Recent listings<span class="badge">4</span></a></li>
                      	
                    <li><a href="logout.php">Logout</a></li>

                      </ul>
             
            </div><!--/.nav-collapse -->
          </div>
        </div>
    </header>
