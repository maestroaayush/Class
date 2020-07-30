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
				<hr>
				<table class="table table-hover table-sm">
					<thead class="thead-dark">
						<th>S.N</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
					</thead>
					<tbody>
						<?php 
							$users = array(
								array(
									'id'	=> 1,
									'name' => "User One",
									'email' =>"userone@gmail.com",
									'phone' => "+977 9630215487",
									"address" => "Kathmandu, Nepal"
								),
								array(
									'id'	=> 2,
									'name' => "User Two",
									'email' =>"usertwo@gmail.com",
									'phone' => "+977 9874563210",
									"address" => "Bhaktapur, Nepal"
								),
								array(
									'id'	=> 3,
									'name' => "User Three",
									'email' =>"userthree@gmail.com",
									'phone' => "+977 9863524107",
									"address" => "Lalitpur, Nepal"
								)
						);
						?>
						<tr>
							<td><?php echo $users[0]['id']; ?></td>
							<td><?php echo $users[0]['name']; ?></td>
							<td><?php echo $users[0]['email']; ?></td>
							<td><?php echo $users[0]['address']; ?></td>
							<td><?php echo $users[0]['phone']; ?></td>
						</tr>
						<tr>
							<td><?php echo $users[1]['id']; ?></td>
							<td><?php echo $users[1]['name']; ?></td>
							<td><?php echo $users[1]['email']; ?></td>
							<td><?php echo $users[1]['address']; ?></td>
							<td><?php echo $users[1]['phone']; ?></td>
						</tr>
						<tr>
							<td><?php echo $users[2]['id']; ?></td>
							<td><?php echo $users[2]['name']; ?></td>
							<td><?php echo $users[2]['email']; ?></td>
							<td><?php echo $users[2]['address']; ?></td>
							<td><?php echo $users[2]['phone']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>