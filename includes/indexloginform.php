<div class="container form">
                           <h3>Login</h3>
                      <form class="myForm" id="signIn" method="POST" action="loggin.php">
                       <?php  if(isset($_GET['msg'])){?>
                      
                                      <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <?php echo $_GET['msg'];?> </a><?php }?>
        </div>
               
                        
                        <div class="form-group">
                        <label for="username or email">Username</label>
                       <input type="text" name="username" id="username or email" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                        <label for="Password">Password</label>

                        <input type="Password" name="password" id="Password" class="form-control" required>
                        </div>

                        
                          <input type="submit" name="submit" value="Login" id="loginbtn" class="btn btn-primary">
                          <input type="hidden" id="results" value="Login" id="loginbtn" class="label label-info">

                       </form>
                       </div>