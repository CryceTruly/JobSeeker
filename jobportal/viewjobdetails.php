<?php

if(isset($_GET['id'])){
	$id= $_GET['id'];
include 'includes/account_main.php';
}?>
<section>
	<div class="container">


	<div class="row">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-8">
		<?php

$sql="SELECT * FROM jobs WHERE id='$id'";
$query=$handler->query($sql);
	while($r=$query->fetch(PDO::FETCH_OBJ)){?>

<div class="main_content">

<h3><?php  echo $r->title; ?></h3>
<p><?php  echo $r->description; ?></p>

<h4><?php  echo $r->created; ?></h4>

<span><ul class="list-inline">

<li ><a href="editjob.php?id=<?php echo $id;  ?>">Edit</a></li>
<li ><a href="removejob.php?id=<?php echo $id;  ?>">Delete</a></li>

</ul></span>

<p>
	



</div>




	</div>
	<div class="col-md-2">
		
	</div>
		




	</div>
		


	</div>




<?php } ?>


</section>
