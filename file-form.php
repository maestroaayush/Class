<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Register</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h4 class="text-center">User Registration</h4>
				<hr>
				<?php 
					// Flash Messages
					if(isset($_SESSION['error']) && $_SESSION['error'] != null){
						echo "<p class='alert alert-danger'>".$_SESSION['error']."</p>";
						unset($_SESSION['error']);
					}
				?>
				<form action="upload.php" method="post" enctype="multipart/form-data">
					
					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Directory Name: </label>
						<div class="col-sm-12 col-md-9">
							<input type="text" name="dir_name" required class="form-control form-control-sm">
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Image Upload: </label>
						<div class="col-sm-12 col-md-9">
							<input type="file" name="image" accept="image/*" required>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-12 offset-md-3 col-md-9">
							
							<button type="reset" class="btn btn-sm btn-danger">
								Reset
							</button>

							<button type="submit" class="btn btn-sm btn-success">
								Submit
							</button>
						</div>
					</div>




				</form>
			</div>
		</div>
	</div>
</body>
</html>