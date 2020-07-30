<?php
	$users = array(
		array(
			'name'		=>	'User One',
			'email'		=>	'userone@gmail.com',
			'phone'		=>	'+977 9874563210',
			'address'	=>	'Kathmandu'
		),
		array(
			'name'		=>	'User Two',
			'email'		=>	'usertwo@test.com',
			'phone'		=>	'+9777 9632105478',
			'address'	=>	'Lalitpur'
		),
		array(
			'name'		=>	'User Three',
			'email'		=>	'userthree@example.com',
			'phone'		=>	'+977 9636985214',
			'address'	=>	'Bhaktapur'
		),
		array(
			'name'		=>	'User Four',
			'email'		=>	'userfour@gmail.com',
			'phone'		=>	'+977 9874587452',
			'address'	=>	'Bhaktapur'
		),
		array(
			'name'		=>	'User Five',
			'email'		=>	'userfive@gmail.com',
			'phone'		=>	'+977 986563214',
			'address'	=>	'Kathmandu'
		),
		array(
			'name'		=>	'User Six',
			'email'		=>	'usersix@test.com',
			'phone'		=>	'+977 9865320147',
			'address'	=>	'Kathmandu'
		),
		array(
			'name'		=>	'User Seven',
			'email'		=>	'userseven@example.com',
			'phone'		=>	'+977 963021548',
			'address'	=>	'Gaighat'
		)
	);

	/*echo "<pre>";
	print_r($users);
	echo "</pre>";*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h4 class="text-center">User List</h4>
				<hr>
				<table class="table table-sm table-hover">
					<thead class="thead-dark">
						<th>S.N</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Address</th>
					</thead>
					<tbody>
						<?php 
							/*$count = count($users);			// No of elements in an array

							for($i =0; $i <  $count; $i++){
								
						?>
							<tr>
								<td><?php echo $i+1 ?></td>
								<td><?php echo $users[$i]['name'];?></td>
								<td><?php echo $users[$i]['email'];?></td>
								<td><?php echo $users[$i]['phone'];?></td>
								<td><?php echo $users[$i]['address'];?></td>
							</tr>

						<?php
							}
							// key => value


							*/
							
							foreach($users as $i => $user){
								/*echo "<pre>";
								print_r($abc);
								print_r($user);
								echo "<pre>";
								exit;*/
								?>
								<tr>
									<td><?php // echo $abc 
										echo $i+1;
									?></td>
									<td><?php echo $user['name'];?></td>
									<td><?php echo $user['email'];?></td>
									<td><?php echo $user['phone'];?></td>
									<td><?php echo $user['address'];?></td>
								</tr>
								<?php
							}
						?>
						
					</tbody>

				</table>
			</div>
		</div>
	</div>

</body>
</html>