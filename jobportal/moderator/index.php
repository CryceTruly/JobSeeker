<!DOCTYPE html>
<html>
<head>
	<title>Edited jobs</title>
	<link rel="stylesheet" type="text/css" href="../css/boostrap.css">
</head>
<body>
<h2 class="text-success">Edited Job Titles</h2>
<?php
require '../classes/db.php';

$sql="SELECT * FROM edited_jobs";
$run=$handler->query($sql);
if($run->rowCount()){
	echo 'There are  ',$run->rowCount(), 'editedjobs';

	?>

<table class="table table-condensed" border="1">
	<tr>
		<th>Job id</th>	<th>previous title</th><th>New title</th><th>Edited date</th>
	</tr>
	<?php

while($r=$run->fetch(PDO::FETCH_OBJ)){
	?>

<tr>
		<td><?php  echo $r->id; ?></td><td><?php  echo $r->title; ?></td><td><?php  echo $r->previous_title; ?></td><td><?php echo $r->edited;  ?></td>
	</tr>
	<?php
}


	?>
</table>

	<?php

}else{
	echo "there hasnt been any editedjobs";

}



?>
</body>
</html>
