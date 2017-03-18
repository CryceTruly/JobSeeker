<?php
require 'includes/header.php';
if (isset ($_GET['jobcategory'])){
	$id=$_GET['jobcategory'];

}

?>

	<section class="section-listings">
			<div class="container">
			<h2>Latest Job Listings</h2>

			<?php 
    
$sql="SELECT type.name,jobs.title,jobs.id,jobs.city,jobs.state,jobs.created,jobs.contact_email,jobs.company_name,jobs.description FROM type LEFT JOIN jobs ON type.id=jobs.type_id WHERE category_id =".$id;
	$rs=$handler->query($sql);
	if(!$rs->rowCount()){
		echo "Sorry There are no jobs in this category at the moment";
	}else{
	while($r=$rs->fetch(PDO::FETCH_OBJ)){
	?>
			<div class="row">

	<div class="col-sm-2">
	                 <?php
	                  if($r->name=="FullTime"){         ?>
	                   <h3><span class="label label-warning">
	                 
	                 <?php echo $r->name;?>


					</span></h3>
					<?php

	                  }else if($r->name=="PartTime"){ ?>

	                  <h3><span class="label label-success">
	                 
	                 <?php echo $r->name;?>


					</span></h3>
					<?php


	                  }else if($r->name=="Freelance"){ ?>

	                  <h3><span class="label label-primary">
	                 
	                 <?php echo $r->name;?>


					</span></h3>
					<?php

	                  }else if($r->name=="Internship"){ ?>

	                  <h3><span class="label label-danger">
	                 
	                 <?php echo $r->name;?>


					</span></h3>
					<?php

	                  }

	                  
	              


	                 ?>
					
							
							</div>

							<div class="col-sm-10">
							<h3><a id="sjob" href="job.php?id=<?php echo urlencode($r->id); ?>"><?php echo $r->title;?>(<?php echo $r->city," ",$r->state;?></a>)</h3><span class="lead"><?php echo "Posted on  ",format_date($r->created);?></span><br>
	                        <p><?php
	                         echo cutText($r->description);
	                        ?></p>
	                      <a href="job.php?id=<?php echo urlencode($r->id); ?>">Read More...</a>
	<hr>
	</div>
	</div>

		<?php


	}
	}

	?>
	</div>

		</section>