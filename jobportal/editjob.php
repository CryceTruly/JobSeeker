<?php
if(isset($_GET['id'])){
	$id= $_GET['id'];

include 'includes/account_main.php';
$sql3="SELECT id,name FROM categories";
$sql2="SELECT type.name FROM type";
$query3=$handler->query($sql3);
$query2=$handler->query($sql2);
?>
<section>
	<div class="container">


	<div class="row">




	<div class="col-md-2">
		
	</div>
	<div class="col-md-8">
		<?php

$sql="SELECT * FROM jobs WHERE id='$id'";
$query=$handler->query($sql);
if($query->rowCount()){
	while($r3=$query->fetch(PDO::FETCH_OBJ)){?>

<div class="main_content">

<div>
	
<h3>Edit Job</h3>
 <form id="addjob" method="POST" action="updatejobs.php?id=<?php   echo $_GET['id'];?>">
                          <div class="form-group">
                          <label for="title">Title</label>
                         <input type="text" required name="title" id="title" class="form-control" value="<?php  echo $r3->title;  ?>">
                          </div>
                          <label for="category">
                            Please select category
                          </label>
                          <select required name ="category" id="category"class="form-control" >
                 <?php while($r4=$query3->fetch(PDO::FETCH_OBJ)){  ?>
                    <option value="<?php  echo $r4->name;?>"><?php  echo $r4->name;}?></option>
                          </select>
                          <div class="form-group">
                          <label for="employer">Employer Name</label>

                          <input type="text" required name="employer" id="employer" class="form-control" value="<?php echo $r3->company_name;   ?>">
                          </div>
                             
                            <div class="form-group" class="form-control" name="type">
                          <label for="type">Job Type</label>

                          <select required class="form-control" name="type">
                          
                        <?php while($r2=$query2->fetch(PDO::FETCH_OBJ)){  ?>
           <option value="<?php  echo $r2->name;?>"><?php  echo $r2->name;}?></option>
                      
                    
                                        

                          </select>


                          </div>
                         <div class="form-group">
                          <label for="city">City</label>

                          <input type="text" required name="city" id="city" class="form-control" value="<?php echo $r3->city;   ?>" >
                          </div>

                           <div class="form-group">
                          <label for="email">Contact Email</label>

                          <input type="email" required name="email" id="email" class="form-control" value="<?php echo $r3->contact_email;   ?>">
                          </div>
                          <div class="form-group">
                          <label for="Description">Add job description</label>

                          <textarea  name="description" required class="form-control" id="Description" type="text" name="textarea" value=""><?php echo $r3->description;   ?></textarea>

                          
                          </div>


                            <input type="submit" name="submit" value="Update  Job" class="btn btn-primary">

                         </form>


                       


</div>


</div>















<?php	}
}else{
	 header('location:includes/errors/404.html');
}



		?>












	</div>
	<div class="col-md-2">
		
	</div>
		




	</div>
		



	</div>






</section>
























<?php  }












































else{
  header('location:includes/errors/404.html');
}

?>