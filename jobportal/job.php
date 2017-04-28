<?php
          if(isset($_GET['id'])){
		include 'includes/header.php';
error_reporting(0);
          	$id=$_GET['id'];
          	$SESSION['id']=$id;
	 $sql="SELECT title,description,city,state,created,contact_email FROM jobs WHERE id = ".$id;

		$query=$handler->query($sql);

	if(!$query->rowCount()){
		echo "there are no jobs at te moment";
	}else{
	while($r=$query->fetch(PDO::FETCH_OBJ)){?>

<section>
<div class="container">

<div class="row">
	<div class="col-md-2">
		


	</div>


	<div class="col-md-8">
	<h3><?php echo $r->title;?>,(<?php echo $r->city," ",$r->state;?>)</h3><h4><span class="text-mute"><?php echo "Posted on  ",format_date($r->created);?></span></h4>

	<p><?php echo $r->description;?></p>

<button class="btn btn-success" data-toggle="modal" data-target="#sendmail">Mail employer</button>
	   



 <div class="modal fade" id="sendmail">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-primary">send message</h3>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    <form role="form" method="post" action="sendmail.php">
                        <div class="form-group">
 <textarea name="message" id="editor1" class="form-control" placeholder="post something">
               
            </textarea>
             <script>
                CKEDITOR.replace( 'editor1' );
            </script>
            <div>
             <input type="submit" class="btn btn-primary pull-right" name="mail"> 
            </div>

                    </form>
                </div>

            </div>
        </div>
    </div>		


	</div>

	<div class="col-md-2">
		


	</div>





</div>


	


</div>
	


</section>
	<?php
	}}
	?>






	<?php include 'includes/footer.php';?>
	  </body>
	</html>

           <?php  }else{
                         echo "the page you are looking for could not be found";
             }?>
            
	

