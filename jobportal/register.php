<?php
	include 'includes/header.php';
ob_start();
?>
<?php  include 'core/init.php';
if(isset($_SESSION['id'])){
header('Location:account.php');
                         
                          }

?>

<script type="text/javascript" src="js/main.js" ></script>
<section>
<div class="container">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">

  <h3>Sign Up</h3>
  <form method="post" action="registerr.php" class="regform" autocomplete="off">
    <div class="form-group">
                       
                       <input type="text" name="firstname" id="firstname" class="form-control" value="<?php if(isset($_POST['firstname'])){echo $_POST['firstname'];} ?>" placeholder="Enter FirstName">
                        <p class="help-block" id="tipsone"></p>
                        </div>
                        <div class="form-group">
                       
                       

                        <input type="text" id="lastname" name="lastname"   class="form-control" value="<?php if(isset($_POST['lastname'])){echo $_POST['lastname'];} ?>" placeholder="Enter LastName">
                        <p class="help-block" id="tiptwoo"></p>

    <div class="form-group">
    <input type="text" name="name" id="username" class="form-control" placeholder="Enter Username">
     <p class="help-block" id="tips"></p>
  </div>
  <div class="form-group">
    <input type="text" name="email" id="email" class="form-control" placeholder="Enter email">
     <p class="help-block" id="emailcheck"></p>
  </div>
     <div class="form-group">
                         <label for="UserType">UserType</label>
                        <select name="userType" class="form-control" required>
                       
                          <?php   $sql="SELECT id,name FROM role";
                         $query=$handler->query($sql);
                           while($r=$query->fetch(PDO::FETCH_OBJ)){?>

                              <option value="<?php echo $r->name;  ?>"><?php echo $r->name;  ?></option>


                         <?php  }


                            ?>


                        </select>


                         </div>

  <div class="form-group">
    <input type="password" name="password" id= "password" class="form-control" placeholder="Enter Passwowd">
    <p class="help-block" id="passs"></p>
  </div>
  <div class="form-group">
    <input type="password" name="again" id="passwordagain" class="form-control" placeholder="ComfirmPassword">
      <p class="help-block" id="return"></p>
  </div>

                  


<input type="submit" id="submit" value="submit" name="submit" class="btn btn-success">
  </form>
  <p class="help-block" id="res"></p>

</div>


</div>


<div class="col-md-1">
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
