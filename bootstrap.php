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
						<p><strong>Sandesh Bhattarai</strong></p>
					</div>
				</div>

				<div class="row">
					<div class="col-3">
						<p><strong>Email: </strong></p>
					</div>
					<div class="col-9">
						<p><strong>sandesh.zenlab@gmail.com</strong></p>
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<p><strong>Address: </strong></p>
					</div>
					<div class="col-9">
						<p><strong>Kathmandu, Nepal</strong></p>
					</div>
				</div>

				<div class="row">
					<div class="col-3">
						<p><strong>Phone: </strong></p>
					</div>
					<div class="col-9">
						<p><strong>+977 9874563210</strong></p>
					</div>
				</div>
			</div>

		</div>

		<hr>

		<div class="row">
			<div class="col-12">
				<table class="table table-sm table-bordered table-hover">
					<thead class="thead-dark">
						<th>S.N</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
					</thead>
					<tbody>
						<?php 
							$user_1 = array(
								'sn' => 1,
								'name' =>"User One",
								'email' =>'userone@gmail.com',
								'address' =>"Kathmandu, Nepal",
								'phone' =>"+977 9630215487"
							);
						?>
						<tr>
							<td><?php echo $user_1['sn'] ?>.</td>
							<td><?php echo $user_1['name'] ?></td>
							<td><?php echo $user_1['email'] ?></td>
							<td><?php echo $user_1['address'] ?></td>
							<td><?php echo $user_1['phone'] ?></td>
						</tr>
						<tr>
							<td>2.</td>
							<td>User Two</td>
							<td>usertwo@gmail.com</td>
							<td>Lalipur, Nepal</td>
							<td>+977 9865412307</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<hr>
		<div class="row">
			<div class="col-12">
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum at consequatur, sunt expedita delectus sint ut voluptate suscipit perspiciatis omnis quos aperiam asperiores modi alias autem, placeat illo cupiditate, tempore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla ab autem quia totam voluptatum sint, minima quibusdam minus alias reprehenderit esse voluptates aperiam commodi sequi? Velit at minima quod inventore?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius at facere dolores minima tempore deleniti temporibus impedit corporis eveniet voluptates, officiis eos, quas non repellendus distinctio aliquam quo omnis hic.
				</p>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates cupiditate laboriosam, quis deleniti similique culpa delectus officiis iste ut. Aspernatur maiores praesentium explicabo rem excepturi, unde, dignissimos odio reprehenderit totam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut velit, sequi dignissimos eius, nemo laudantium ea eos perferendis cupiditate ducimus aut maxime! Debitis facilis ipsam consectetur, quam velit at laborum.
				</p>

			</div>
		</div>
	</div>
</body>
</html>