<?php
include 'core/init.php';

if (isset($_POST['keyword'], $_POST['category'],$_POST['location'])){
	$keyword=$_POST['keyword'];
	$category=$_POST['category'];
	$location=$_POST['location'];
	if(empty($location) ||empty($category)||empty($location)){
		echo "input all fields";
	}else{
		$sql="SELECT type.name as name,jobs.id,jobs.Category_id,jobs.title,jobs.description,jobs.city,jobs.state,jobs.created,jobs.contact_email FROM type INNER join jobs on type.type_id=jobs.type_id INNER JOIN categories ON jobs.Category_id=categories.id WHERE jobs.title LIKE '%$keyword%' AND (categories.name = '$category' OR jobs.city = '$location') ORDER BY jobs.id DESC"
;
           

		$query=$handler->query($sql);
		if($query->rowCount()){
			$q= $query->rowCount();
            if($q==1){?>
            	<p><span class="badge">About <?php  echo $q;?>  result found</span></p>
            <?php
            }else if($q>1){?>
<p><span class="badge">About <?php  echo $q;?>  results found</span></p>
            <?php

			} ?>
            
            



		<?php	while($r=$query->fetch(PDO::FETCH_OBJ)){?>

<div class="row">
		<div class="col-md-2"><?php
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


					</span></h3><?php

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
			


				}else{
			echo "<h4 class='text-info'>sorry no results for your search","</h4>";
		}
}
}


?>