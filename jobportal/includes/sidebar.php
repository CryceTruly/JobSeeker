        <style type="text/css">
      	.sidebar-nav li a{
            text-align: center;
            color:
            white;
            font-size: 15px;
            margin-bottom: 5px;


        	}

        	.sidebar-nav li a:hover{
        	font-size: 20px;

        	}


#sidebar-wrapper{background: seagreen;
    border-right: 3px solid #333;
    color: white;
}

        </style>
<?php

$sql="SELECT concat(first_name,' ',last_name) AS name from users WHERE id='$cUser'";
$query=$handler->query($sql);

if($query->rowCount()){
   if($r=$query->fetch(PDO::FETCH_OBJ)){
   
   }
}


?>


        <div id="sidebar-wrapper" class="sidebar-nav">
            <ul class="sidebar-nav">
                <li><a href="#"><img src="img/cry.png" class="img img-responsive img-rounded">


                </a><h3 class="text-center"><?php  echo $r->name; ?></h3></li>
                 <li><a href="ratings.php">My Information</a></li>
                <li><a href="editprofile.php">My Portfolio</a></li>
                <li><a href="editprofile.php">Edit Profile</a></li>
                <li><a href="change password.php">Change password</a></li>
                <li><a href="settings.html">Settings</a></li>
                <li><a href="statistics.html">Statistics</a></li>

                <li><a><button class="btn btn-success btn-rounded">Help Menu</button></a></li>

            </ul>
        </div>
