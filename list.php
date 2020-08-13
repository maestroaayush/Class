<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users List</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h4 class="text-center">User List</h4>
				<a href="register.php" class="btn btn-link">Register Now</a>
				<hr>
				<table class="table table-hover table-sm">
					<thead class="thead-dark">
						<th>S.N</th>
						<th>Name</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Date of Birth</th>
						<th>Place of birth</th>
						<th>Language you speak</th>
						<th>About Yourself</th>
					</thead>
					<tbody>
						<?php 
							$file_name = "register.json";
							
							if(file_exists($file_name)){
								// content in file, maybe
								$data = file_get_contents($file_name);
								$user_info = json_decode($data, true);

								if(count($user_info)){
									// users do exists
									$user_info = array_reverse($user_info);

									foreach($user_info as $key => $user_data){
										?>
										<tr>
											<td><?php echo $key+1 ?></td>
											<td><?php echo $user_data['full_name'] ?></td>
											<td><?php echo $user_data['email'] ?></td>
											<td><?php echo $user_data['gender'] ?></td>
											<td><?php echo $user_data['date_of_birth'] ?></td>
											<td><?php echo $user_data['place_of_birth'] ?></td>
											<td><?php echo implode(", ", $user_data['lang']) ?></td>
											<td><?php echo $user_data['about'] ?></td>
										</tr>
										<?php
									}
								}  else {
									echo "File empty.";
								}
							} else {
								echo "File does not exists.";
							}

						?>	
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>