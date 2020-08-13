<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h4 class="text-center">User List</h4>
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<table class="table table-hover table-bordered table-sm">

					<form action="bulk-delete.php" method="post">
						<thead class="thead-dark">
							<th><button class="btn btn-danger btn-sm" style="width: 50px; padding: 0px">Delete</button></th>
							<th>S.N</th>
							<th>Name</th>
							<th>Email</th>
							<th>Role</th>
							<th>Status</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php 
								require_once "db.php";

								$sql = "SELECT * FROM users ORDER BY id DESC";

								$query = mysqli_query($conn, $sql);

								if( mysqli_num_rows($query) <= 0 ){
									echo "No data in the table.";
								} else {
									/*$all_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

									foreach($all_data as $key => $row){

									}*/
									$i =1;
									while($row = mysqli_fetch_assoc($query)){
									?>
									<tr>
										<td>
											<input type="checkbox" name="del_id[]" value="<?php echo $row['id'];?>">
										</td>
										<td><?php echo $i++; ?></td>
										<td><?php echo $row['name']; ?></td>
										<td><?php echo $row['email']; ?></td>
										<td><?php echo ucfirst($row['role']); ?></td>
										<td>
											
											<span class="badge badge-<?php echo ($row['status'] == 'active') ? 'success' : 'danger'?>">
												<?php echo ucfirst($row['status']); ?>
											</span>
										</td>
										<td>
											<a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm " style="border-radius: 50%">
												E
											</a>
											
											<a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm " style="border-radius: 50%">
												D
											</a>
											
											<a href="" class="btn btn-warning btn-sm " style="border-radius: 50%">
												P
											</a>
										</td>
									</tr>
									<?php
									}
								}


							?>

						</tbody>
					</form>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>