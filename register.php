<?php
	include 'includes/header.php';

?>

<section>
	
                      <div class="container form">
                       <h3>Create Account</h3>

                       <form role="form" action="reg.php">
                        <div class="form-group">
                        <label for="firstname">FirstName</label>
                       <input type="text" name="firstname" id="firstname" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="lastname">LastName</label>

                        <input type="text" name="LastName" id="lastname" class="form-control" >
                        </div>

                        <div class="form-group">
                        <label for="email">Email</label>

                        <input type="email" name="email" id="email" class="form-control" >
                        </div>

                         <div class="form-group">
                        <label for="Username">UserName</label>

                        <input type="text" name="Username" id="Username" class="form-control" >
                        </div>

                         <div class="form-group">
                        <label for="Password">Password</label>

                        <input type="password" name="password" id="password" class="form-control" >
                        </div>


                          <div class="form-group">
                        <label for="password_again">Confirm Password</label>

                        <input type="password" name="password_again" id="password_again" class="form-control" >
                        </div>

                        <div class="form-group" class="form-control" name="user">
                        <label for="user">UserType</label>

                        <select class="form-control" >
                        <option value="Jobseeker">Job seeker</option>
                        <option value="employer">Employer</option>
                        </select>


                        </div>


                          <input type="submit" name="submit" value="Register" class="btn btn-primary">


                       </form>
                       </div>

              
</section>
<?php include 'includes/footer.php';?>
  </body>
</html>
