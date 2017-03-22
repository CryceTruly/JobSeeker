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


	    <a href="#" data-toggle="modal" data-target="#sendmail">Mail employer</a>



 <div class="modal fade" id="sendmail">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">send message</h4>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="10" cols="15" placeholder="type  message to send"></textarea>
                        </div>
                    </form>
                </div>

                <!-- button -->
                <div class="modal-footer">
                    <button class="btn btn-primary">Send now</button>
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
            
	

