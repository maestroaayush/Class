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

				<form action="insert.php" method="post" >
					
					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Full Name: </label>
						<div class="col-sm-12 col-md-9">
							<input type="text" name="full_name" placeholder="Enter Your Name" required id="" class="form-control form-control-sm" value="Sandesh Bhattarai">
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Email: </label>
						<div class="col-sm-12 col-md-9">
							<input type="email" name="email" placeholder="Enter Your Email" required id="" class="form-control form-control-sm">
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Password: </label>
						<div class="col-sm-12 col-md-9">
							<input type="password" name="password" required id="" class="form-control form-control-sm">
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Date Of Birth: </label>
						<div class="col-sm-12 col-md-9">
							<input type="datetime-local" name="date_of_birth" id="" class="form-control form-control-sm">
							
						</div>
					</div>


					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Laguage You Speak: </label>
						<div class="col-sm-12 col-md-9">
							<input type="checkbox" value="np" name="lang[]"> Nepali
							<input type="checkbox" value="en" name="lang[]"> English
							<input type="checkbox" value="hn" name="lang[]"> Hindi
							<input type="checkbox" value="ot" name="lang[]"> Other
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Gender: </label>
						<div class="col-sm-12 col-md-9">
							<input type="radio" value="male" name="gender"> Male
							<input type="radio" value="female" name="gender"> Female
							<input type="radio" value="other" name="gender"> Other
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">Place Of Birth: </label>
						<div class="col-sm-12 col-md-9">
							<select name="place_of_birth" required id="" class="form-control form-control-sm">
								<option value="" disabled>-- Select Any One --</option>
								<option value="kathmandu" selected>Kathmandu</option>
								<option value="bhaktapur">Bhaktapur</option>
								<option value="lalitpur">Lalitpur</option>
							</select>
						</div>
					</div>


					<div class="form-group row">
						<label for="" class="col-sm-12 col-md-3">About Yourself: </label>
						<div class="col-sm-12 col-md-9">
							<textarea name="about" id="" rows="4" class="form-control form-control-sm" style="resize: none"></textarea>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-12 offset-md-3 col-md-9">
							<!-- <input type="submit" class="btn btn-success">
							<input type="submit" class="btn btn-outline-success">
							
							<input type="submit" class="btn btn-primary">
							<input type="submit" class="btn btn-secondary">
							<input type="submit" class="btn btn-info">
							<input type="submit" class="btn btn-warning">
							<input type="submit" class="btn btn-danger">
							<input type="submit" class="btn btn-default">
							<input type="submit" class="btn btn-dark">
							<input type="submit" class="btn btn-light">
							<input type="submit" class="btn btn-link">
							 -->
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