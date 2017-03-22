<?php
	include 'includes/header.php';



?>





<section class="container"><p class="panel text-primary"><?php   if(isset($_GET['res'])){
	echo "Your account has been successfully created you can now login";
	} ?></p>
		
                      <?php
                      include 'includes/indexloginform.php';
?>


	

</section>


	
<?php include 'includes/footer.php';?>
  </body>
</html>