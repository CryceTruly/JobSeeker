		<?php
		require 'core/init.php';
		include 'includes/header.php';


	form();

	?>
		
		<section class="section-listings">
			<div class="container">
			<h2>Latest Job Listings</h2>

			<?php 

	$query=$handler->query("SELECT type.name,jobs.id,jobs.Category_id,jobs.title,jobs.description,jobs.city,jobs.state,jobs.created,jobs.contact_email FROM type INNER join jobs on type.type_id=jobs.type_id ORDER BY jobs.id DESC");

	if(!$query->rowCount()){
		echo "there are no jobs at te moment";
	}else{
	while($r=$query->fetch(PDO::FETCH_OBJ)){
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
	<?php   testmonialsandprocedure(); ?>
		
		
	<?php include 'includes/footer.php';?>
	  </body>
	</html>
