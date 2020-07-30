<?php session_start(); 
	if(isset($_SESSION['success'])){
		@header('location: profile.php');
		exit;
	}

	if(isset($_COOKIE['auth_user']) && $_COOKIE['auth_user'] == 1){
		$_SESSION['success'] = "Welcome Back to user panel";
		@header("location: profile.php");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h4 class="text-center">Login Form</h4>
				<hr>
				<?php 
					if(isset($_SESSION['error'])){
						echo "<p class='alert alert-danger'>".$_SESSION['error']."</p>";
						unset($_SESSION['error']);
					}
				?>
				<form action="login.php" method="post" class="form">
					<div class="form-group row">
						<label for="" class="col-3">User Email: </label>
						<div class="col-9">
							<input type="email" placeholder="Enter Your email" required name="email" class="form-control form-control-sm">
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-3">Password: </label>
						<div class="col-9">
							<input type="password" required name="password" class="form-control form-control-sm">
						</div>
					</div>

					<div class="form-group row">
						<div class="offset-3 col-9">
							<input type="checkbox" name="remember_me" value="1" > Remember Me
						</div>
					</div>

					<div class="form-group row">
						<div class="offset-3 col-9">
							<button class="btn btn-success" type="submit">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>