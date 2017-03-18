<?php
require 'includes/header.php';

?>

<section>                <?php if(!isset($_SESSION['username'])){?>

                          <div class="container notloggedin">
                          <h5 class="text text-info">You must be registered and loggedin order to post a job</h5>
                          
                           <?php
                                     include 'includes/indexloginform.php';


                                     ?>
             
                            

                          </div>

                          <?php
                           

                          }else{
                           $username=$_SESSION['username'];
                         ?>
                                 

	                
                      <div class="container form">
                       <h3>Add Job</h3>

                       <form role="form" action="add.php">
                        <div class="form-group">
                        <label for="title">Title</label>
                       <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="employer">Employer Name</label>

                        <input type="text" name="employer" id="employer" class="form-control" >
                        </div>

                          <div class="form-group" class="form-control" name="type">
                        <label for="type">Job Type</label>

                        <select class="form-control" >
                        <option value="default">Choose Category</option>
			              	<option value="IT">IT</option>
			            	<option value="Finance">Finance</option>
                            <option value="Education">Education</option>					

                        </select>


                        </div>



                        <div class="form-group">
                        <label for="Description">Description</label>

                        <textarea class="form-control" id="Description" type="text" name="textarea"></textarea>

                        
                        </div>

                         <div class="form-group">
                        <label for="city">City</label>

                        <input type="text" name="city" id="city" class="form-control" >
                        </div>

                         <div class="form-group">
                        <label for="email">Contact Email</label>

                        <input type="email" name="email" id="email" class="form-control" >
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
