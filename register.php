<?php

error_reporting(0);
	include 'includes/header.php';
ob_start();
?>

<section>
<div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-6"> 
                       <h3>Create Account</h3>
                       

                       <form role="form" method="POST" id="registerForm" action="registerr.php">
                        <div class="form-group">
                        <label for="firstname">FirstName</label>
                         <p class="help-block">only letters and numbers</p>
                       <input type="text" name="firstname" required id="firstname" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="lastname">LastName</label>
                         <p class="help-block">only letters and numbers</p>

                        <input type="text" name="lastname" required id="lastname" class="form-control" >
                        </div>

                        <div class="form-group">
                        <label for="email">Email</label>

                        <input type="email" name="email" id="email" required class="form-control" >
                        </div>

                         <div class="form-group">
                        <label for="Username">UserName</label>
                         <p class="help-block">username should not contain whitespace</p>

                        <input type="text" name="username" required id="Username" class="form-control" >
                        </div>

                         <div class="form-group">
                        <label for="Password">Password</label>
                        <p class="help-block">Atleast 8 characters</p>

                        <input type="password" required name="password" id="password" class="form-control" >
                        </div>


                          <div class="form-group">
                        <label for="password_again">Confirm Password</label>
                         <p class="help-block">Atleast 8 characters</p>

                        <input type="password" required name="password_again" id="password_again" class="form-control" >
                        </div>



                          <input type="submit" name="submit" value="Register" class="btn btn-primary">

                                         
                       </form>
                    
</div>


<div class="col-md-4">
<div class="alert  alert-sm">
<div id="errors" class="text-danger">
  

</div>
             
        </div>
  
</div>



</div>
	</div>
              
              
</section>
<?php include 'includes/footer.php';?>
  </body>
</html>
