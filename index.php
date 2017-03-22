		<?php
		require 'core/init.php';
		include 'includes/header.php';

		$sql="select name from categories";
		$sql2="SELECT DISTINCT city FROM jobs";
		$query=$handler->query($sql);
		$query2=$handler->query($sql2);

		

	?>

	<section class="search_section">
		<div class="container search">
			<h1 class="text-center">Finding A job just got easy</h1>
			<p class="lead text-center">An easy and convinient way to get a job search through places for your dream job <strong>for its just a few clicks away</strong></p>
			<div class="search_bar">
			
			<div class="fom">
			<form class="form-inline searchForm" role="form" method="post" action="searchjobs.php">
			<div class="form-group">
				<input type="search" type="search" name="keyword" class="form-control" placeholder="Enter Keyword">
			</div>
			

				<div class="form-group">
				
			
				<select  name="location" class="form-control">
				<?php while($r2=$query2->fetch(PDO::FETCH_OBJ)){?>
			
				<option value="<?php  echo $r2->city;?>"><?php  echo $r2->city;?></option><?php 	}?>

				</select>
				
			
			</div>
             <div class="form-group">
               

               
				<select name="category" class="form-control">
				<?php while($r=$query->fetch(PDO::FETCH_OBJ)){?>
				<option><?php  echo $r->name;?></option><?php 	}?>
				</select>
				
			
			</div>
<input type="submit" value="Search" class="btn btn-primary">


			</form>
			</div>
		  </div>
	</div>
	</section>

		<section id="listings" class="section-listings container">
			<div class="container">
			<h2>Latest Job Listings</h2>

			<?php 

	$query=$handler->query("SELECT type.name,jobs.id,jobs.Category_id,jobs.title,jobs.description,jobs.city,jobs.state,jobs.created,jobs.contact_email FROM type INNER join jobs on type.type_id=jobs.type_id ORDER BY jobs.id DESC");

	if(!$query->rowCount()){
		echo "sorry there are no jobs at the moment";
	}else{
	while($r=$query->fetch(PDO::FETCH_OBJ)){
	?>
			<div class="row">

	<div class="col-sm-2">
	                 <?php
	                  if($r->name=="FullTime"){         ?>
	                   <h3><span class="label label-primary">
	                 
	                 <?php echo $r->name;?>


					</span></h3>
					<?php

	                  }else if($r->name=="PartTime"){ ?>

	                  <h3><span class="label label-success">
	                 
	                 <?php echo $r->name;?>


					</span></h3>
					<?php


	                  }else if($r->name=="Freelance"){ ?>

	                  <h3><span class="label label-warning">
	                 
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
