<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>First Page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h4 class="text-center">User Information</h4>
				<hr>
				<table class="table table-sm">
					<thead class="thead-dark">
						<th>S.N.</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Action</th>
					</thead>
					<tbody>
						<tr>
							<td><?php echo 1 ?></td>
							<td><?php echo "User One"; ?></td>
							<td><?php echo "userone@gmail.com";?></td>
							<?php 
								echo "<td>+977 9601254780</td>";
								echo "<td>Kathmandu</td>";
								echo "<td>Edit/Delete/View</td>"
							?>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>