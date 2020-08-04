<?php 
	require 'connect.php';

	$id = (int)$_GET['id'];		// 7
	if($id <= 0){
		header("location: select.php");
		exit;
	} else {
		$sql = "SELECT * FROM users WHERE id = ".$id;
		$query = mysqli_query($conn, $sql);
		if($query){
			$data = mysqli_fetch_assoc($query);
			if(!$data){
				header("location: select.php");
				exit;
			}
		} else {
			header("location: select.php");
			exit;
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bootstrap Page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-12">
				<h4 class="text-center">Personal Information</h4>
			</div>
		</div>
		<hr>


		<div class="row">
			
			<div class="col-sm-12 col-md-6">
				<img src="img/google.png" class="img img-fluid img-thumbnail">
			</div>

			<div class="col-sm-12 col-md-6">
				
				<div class="row">
					<div class="col-12">
						<h4 class="text-center">Information</h4>
					</div>
				</div>
				<hr>

				<div class="row">
					<div class="col-3">
						<p><strong>Name: </strong></p>
					</div>
					<div class="col-9">
						<p><strong><?php echo $data['full_name'] ?></strong></p>
					</div>
				</div>

				<div class="row">
					<div class="col-3">
						<p><strong>Email: </strong></p>
					</div>
					<div class="col-9">
						<p><strong><?php echo $data['email'] ?></strong></p>
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<p><strong>Date of Birth: </strong></p>
					</div>
					<div class="col-9">
						<p><strong><?php echo $data['dob'] ?></strong></p>
					</div>
				</div>

				<div class="row">
					<div class="col-3">
						<p><strong>Place Of Birth: </strong></p>
					</div>
					<div class="col-9">
						<p><strong><?php echo $data['pob'] ?></strong></p>
					</div>
				</div>

				<div class="row">
					<div class="col-3">
						<p><strong>Gender: </strong></p>
					</div>
					<div class="col-9">
						<p><strong><?php echo $data['gender'] ?></strong></p>
					</div>
				</div>
			</div>

		</div>

		<hr>
		<div class="row">
			<div class="col-12">
				<h4 class="text-left" style="text-decoration: underline;">
					About Yourself
				</h4>
			</div>
			<div class="col-12">
				<p class="text-justify">
					<?php echo $data['about_yourself'] ?>
				</p>

			</div>
		</div>
	</div>
</body>
</html>