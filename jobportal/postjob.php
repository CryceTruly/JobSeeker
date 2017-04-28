<?php
require 'includes/header.php';
$sql="SELECT id,name FROM categories";
$sql2="SELECT type.name FROM type";
$query=$handler->query($sql);
$query2=$handler->query($sql2);

?>

<section>                <?php if(!isset($_SESSION['username'])){?>

                          <div class="container notloggedin">
                          <h4 class="text text-info">You must be registered and loggedin order to post a job</h4>
                          
                           <?php
                                     include 'includes/indexloginform.php';


                                     ?>
             
                            

                          </div>

                          <?php
                           

                            }else{
                             $username=$_SESSION['username'];
                           ?>
                          
                    
                       <div class="container well well-sm">
                         <h3>Add Job</h3>
                                            <?php  if(isset($_GET['msg'])){?>
                        
                                        <p class="alert alert-success alert-sm">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <?php echo $_GET['msg'];?> </a><?php }?>
          </p>

                         <form id="addjob" method="POST" action="add.php">
                          <div class="form-group">
                          <label for="title">Title</label>
                         <input type="text" required name="title" id="title" class="form-control">
                          </div>
                          <label for="category">
                            Please select category
                          </label>
                          <select required name ="category" id="category"class="form-control" >
                 <?php while($r=$query->fetch(PDO::FETCH_OBJ)){  ?>
                    <option value="<?php  echo $r->name;?>"><?php  echo $r->name;}?></option>
                          </select>
                          <div class="form-group">
                          <label for="employer">Employer Name</label>

                          <input type="text" required name="employer" id="employer" class="form-control" >
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

                          <input type="text" required name="city" id="city" class="form-control" >
                          </div>

                           <div class="form-group">
                          <label for="email">Contact Email</label>

                          <input type="email" required name="email" id="email" class="form-control" >
                          </div>
                          <div class="form-group">
                          <label for="Description">Add job description</label>

                          <textarea  name="description" required class="form-control" id="Description" type="text" name="textarea"></textarea>

                          
                          </div>


                            <input type="submit" name="submit" value="Add Job" class="btn btn-primary">

                         </form>


                       






                      </div>
                         <?php
                          } 

                       ?>

</section>


	<?php include 'includes/footer.php';?>
  </body>
</html>
