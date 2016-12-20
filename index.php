<?php 
	include('config.php');
	$count = $genObj->CountUsers($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teams</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Bootstap Stylesheet -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen">

    <link rel="stylesheet" href="assets/css/custom.css" media="screen">

</head>
<body>
	
	<?php include('header.php'); ?>
	
	<div class="main-div">
		<div class="row">
			<div class="col-lg-12">
				<table class="table table-hover ">
				  <thead>
				    <tr>
				      <th>Id</th>
				      <th>Name</th>
				      <th>Teams</th>
				    </tr>
				  </thead>
				  <tbody>
				  <?php
				   $i = 0;
				   foreach($count as $user){
				  ?>
					<tr>
				      <td><?= ++$i; ?></td>
				      <td><?= $user['first_name'].' '.$user['last_name']; ?></td>
				      <td><?= $user['teams']; ?></td>
				    </tr>
				  <?php
				   }
				  ?>
				  </tbody>
				</table> 
			</div>
		</div>
	</div>
	<?php $dbObj->closeConn(); ?>
	<!-- Javascript File -->
	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>