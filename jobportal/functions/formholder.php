<?php
	function form(){?>

	<section class="search_section">
		<div class="container search">
			<h1 class="text-center">Finding A job just got easy</h1>
			<p class="lead">An easy and convinient way to get a job search through places for your dream job <strong>for its just a few clicks away</strong></p>
			<div class="search_bar">
			
			<div class="fom">
			<form class="form-inline searchForm" role="form" method="post" action="searchjobs.php">
			<div class="form-group">
				<input type="search" name="keyword" class="form-control" placeholder="Enter Keyword">
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
	
<?php 
}
?>
<?php

function testmonialsandprocedure(){?>
<section class="theprocess">
		<div class="container">
		<h2 class="text-center">The Process How it work for you</h2>
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="block block-primary">
						<h3><i class="fa fa-question-circle"></i> Create an Account</h3>
						<p>
							We know how it feel to have the bet skills We believe you you should get what you deserve
							We know how it feel to have the bet skills We believe you you should get what you deserve
							We know how it feel to have the bet skills We believe you you should get what you deserve

						</p>
						
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="block block-secondary">
						<h3><i class="fa fa-check"></i> Create your Resume</h3>
						<p>
							Just Regiter and create a profile iof your own
							Just Regiter and create a profile iof your own
							Just Regiter and create a profile iof your own
							Just Regiter and create a profile iof your own
							Just Regiter and create a profile iof your own
							Just Regiter and create a profile iof your own
						</p>
					
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="block block-primary">
						<h3><i class="fa fa-check"></i> Get A job</h3>
						<p>
							Well,i believe with the skil set you have its more thatn posible that so soon 
											Your phone is going to ring

Well,i believe with the skil set you have its that so soon 
											

Well,i believe with the skil set you have its more thatn posible that so soon 
											Your phone is going to ring


					 </p>
					
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	
	
	<section>
		<div class="container">
			<div class="row">
				<h1 class="text-center">Success Stories</h1>
				<h4 class="text-center">What people are saying</h4>
				<div class="col-sm-4">
					<div class="block block-light block-center block-image block-border">
						<img src="img/photo.jpg" class="img-responsive">
						<h3>King Jay</h3>
						<p>
							Iam agraphics designer i got a job from this portal now i live the life i used to dream of
							Iam agraphics designer i got a job from this portal now i live the life i used to dream of
							Iam agraphics designer i got a job from this portal now i live the life i used to dream of
							
						</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="block block-center block-image block-border">
						<img src="img/bucky.jpg" class="img-responsive">
						<h3>Greg Fred</h3>
						<p>
							Iam agraphics designer i got a job from this portal now i live the life i used to dream of
							Iam agraphics designer i got a job from this portal now i live the life i used to dream of
							Iam agraphics designer i got a job from this portal now i live the life i used to dream of
							</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="block block-light block-center block-image block-border">
						<img src="img/crycebro.jpg" class="img-responsive">
						<h3>Chief Solomon</h3>
						<p>
							Iam agraphics designer i got a job from this portal now i live the life i used to dream of
							Iam agraphics designer i got a job from this portal now i live the life i used to dream of
							Iam agraphics designer i got a job from this portal now i live the life i used to dream of
							</p>
					</div>
				</div>
		
			</div>
		</div>
	</section>
	
	






<?php
}
?>