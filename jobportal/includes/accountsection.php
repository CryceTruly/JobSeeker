<div id="page-content-wrapper">
            <div class="container-fluid">
              


<div class="col-md-8">


<h3 class="label">My job postings</h3>

<?php  if(isset($_GET['msg'])){?>

                                        <p class="alert alert-info alert-sm">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <?php echo $_GET['msg'];?> </a>
          </p>


          <?php  } ?>
<?php
$sql="SELECT * FROM jobs WHERE user_id='$cUser'";
$query=$handler->query($sql);

if(!$query->rowCount()){

echo "<p class='text-success text-center'> you have no job postings yet</p>";
}else{
  while($r=$query->fetch(PDO::FETCH_OBJ)){?>
<p class="lead">
  <?php  echo 'Added a job  ',format_date($r->created); ?>
</p>
<h4 class="text-success"><?php  echo $r->title; ?></h4>

<p><?php  echo cutText2($r->description); ?></p>

<span><ul class="list-inline">
  <li ><a href="viewjobdetails.php?id=<?php echo $r->id;  ?>">View</a></li>

<li ><a href="editjob.php?id=<?php echo $r->id;  ?>">Edit</a></li>
<li ><a href="" data-toggle="modal" data-target="#delmodel" id="delbtn">Delete</a></li>

</ul></span>
 <div class="modal fade" id="delmodel">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Please take a minute to tell us why you are deleting the listing</h4>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    <form role="form" method="post" action="removejob.php?account=.<?php  echo $cUser;  ?>&id=<?php echo $r->id;  ?>">
                        <div class="form-group">
                           <input type="text" name="fd" class="form-control" placeholder="tell us why">
                        </div>

                    <input type="submit" class="btn btn-primary" value="Comfirm deletion">
                </div>
                  </form>

            </div>
        </div>
    </div>
<hr>

<?php
  }
}


?>

</div>


</div>


<div class="modal fade" id="view">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center text-success">Recent Listings</h4>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    <p>
                    	
<?php   
$sql="SELECT * FROM latestfour";
$query=$handler->query($sql);

if($query->rowCount()){?>
<table class="table table-condensed table-stripped">
<tr>
	<th>Job Title</th><th>City</th><th>Posted</th><th>Category</th>


	

</tr>
<?php 
while($r=$query->fetch(PDO::FETCH_OBJ)){?>
<tr>
	<td><?php  echo $r->title; ?></td><td><?php  echo $r->city; ?></td><td><?php echo format_date($r->created); ?></td><td><?php echo $r->name;  ?></td>


	

</tr>







<?php

}

?>



</table>

<?php
}else{
	echo "there are no jobs right now";
}


?>


                    </p>

            </div>

