<?php 
	require_once "connect.php";

	/*
		SELECT <fields> FROM <table> AS <alias_name>
			LEFT JOIN <table1> ON <table>.<column_n> <operator> <table1>.<column_n>
		WHERE <condition>
		GROUP BY <condition>
		ORDER BY <condition>
		LIMIT <start>, <count>

		// Fields
			-> name of columns that should be fetched,
			-> comma seperated value
			-> all fields at a time => *
			-> sometimes multiple table column select, tablename.column_name,
			-> if column names for different table are same you can alias the column name
				e.g users.id, roles.id AS role_id

		// Table
			-> Name of the table from which you want data
			-> Alias As
				e.g users AS u


		// JOIN Operation 
			-> If i need to fetch data from more than one table, 
			-> LEFT JOIN 
			-> opertaion should be any relation 

		// WHERE condition
			-> table.column condition 



		// Group by
			-> group of data => single data fetch

		// ORDER BY
			-> Data sorting 
			-> ASC / DESC
		
		// LIMIT 
			-> paginate 
			-> <start> starting index, 
				0
				11
			-> <count> 
				0, 3
				0,5
				0, 10

		// 


		id => 1-100
		
		100 -0
		99 -1
		98 - 2
		97 - 3 
		96 - 4 
		95 - 5 
		94 - 6 
		93 - 7 
		92 - 8 
		91 - 9 

		90 - 10 
		89 - 11
		88 - 12
		87 - 13
		86 - 14
		85 - 15
		84 - 16
		83 - 17
		82 - 18
		81 - 19
		
		80 - 20

		100-91		=> ........ ORDER BY id DESC LIMIT 0,10
		90-81		=> ........ ORDER BY id DESC LIMIT 10,10
		80-71		=> ........ ORDER BY id DESC LIMIT 20,10

		// SQL 


	*/
		/*
			$sql = "CREATE TABLE IF NOT EXISTS table_name (
				column_defn
				FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE
			)";

		$sql_1 = "ALTER TABLE tables ADD CONSTRAINT FK_UsersInfo FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE  ";

		$query = mysqli_query($conn, $sql);
		$query = mysqli_query($conn, $sql_1);*/



?>	
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

				<a href="form.php" class="btn btn-link">Add More User</a>
				
				<hr>

				<table class="table table-hover table-sm">
					<thead class="thead-dark">
						<th>S.N</th>
						<th>Name</th>
						<th>Email</th>
						<th>Date of birth</th>
						<th>Place of Birth</th>
						<th>Language</th>
						<th>Gender</th>
						<th>Role id</th>
						<th>Role</th>
						<th>About</th>
						<th>Actions</th>
					</thead>
					<tbody>
						<?php 
							$sql = "SELECT * FROM users ORDER BY id DESC";

							$sql = "SELECT * FROM users ORDER BY id DESC LIMIT 0, 5";
							
							$today = date("Y-m-d");
							// $today_end = date("Y-m-d 23:59:59");
							
							/*$sql = "SELECT * FROM users 
									WHERE 
										created_at >= '".$today."'
										AND 
										created_at <= '".$today_end."'
									ORDER BY id DESC";*/
							$sql = "SELECT * FROM users 
									WHERE 
										DATE(created_at) = '".$today."'
									ORDER BY id DESC";

							$sql = "SELECT * FROM users WHERE role = 'user'";

							$sql = "SELECT 
										users.*, 
										roles.name AS role_name 
									FROM users
									LEFT JOIN roles ON users.role_id = roles.id 
									ORDER BY users.id DESC";


							$sql = "SELECT 
										*, 
										(SELECT roles.name FROM roles WHERE roles.id = users.role_id) AS role_name
									FROM users
									ORDER BY id DESC";

							/*echo $sql;
							exit;*/

							/*echo $sql;
							exit;*/

							// 2020-07-30 00:00:00 - 2020-07-30 23:59:59
							// 2020-07-30 - 2020-07-30


							$query = mysqli_query($conn, $sql);
							if(!$query){
								die(mysqli_error($conn));
							}
							if(mysqli_num_rows($query) > 0){
								/*mysqli_fetch_assoc();
								mysqli_fetch_all();*/
								//$data = mysqli_fetch_assoc($query);

								$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
								
								foreach($data as $key => $row){
								?>
								<tr>
									<td><?php echo $key+1 ?></td>
									<td><?php echo $row['full_name'] ?></td>
									<td><?php echo $row['email'] ?></td>
									<td><?php echo $row['dob'] ?></td>
									<td><?php echo $row['pob'] ?></td>
									<td><?php echo $row['lang'] ?></td>
									<td><?php echo $row['gender'] ?></td>
									
									<td><?php echo $row['role_name'] ?></td>
									
									<td><?php echo $row['role'] ?></td>
									<td><?php echo $row['about_yourself'] ?></td>
									<td>
										<a href="" class="btn btn-success btn-sm" style="border-radius: 50%">
											E
										</a>
										<a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm" style="border-radius: 50%">
											D
										</a>
										<a href="detail.php?id=<?php echo $row['id'] ?>" class="btn btn-warning btn-sm" style="border-radius: 50%">
											V
										</a>
									</td>
								</tr>
								<?php
								}
							} else {
								echo "No data found.";
							}


						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>