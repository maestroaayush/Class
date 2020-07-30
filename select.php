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

	*/












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
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>