<?php 
	session_start();
	/*
		a. Connect and select database
		b. Create Sql 
		c. Execute Sql 
			d. Fetch Data, Option
	

		mysql <= 5.8, 
		
		> 5.8, mysqli
		
		PDO => PHP Data Object, OOP

	*/

	$conn = mysqli_connect("localhost", "admin", "sandesh123", "php_800") or die("Error establishing database connection.");


	// mysqli_select_db($conn, "php_800");
	// $conn->select_db("php_800");	// ->


	/*

		CREATE Data / Row set
			=> INSERT Query

		a. Insert single row at a time
			# 1st syntax
				=> 
					INSERT INTO <table> SET 
						<column_1> = '<value_1>', 
						<column_2> = "<value_2>",
						.....
						<column_n> = <value_n>;

					e.g.
						INSERT INTO users SET 
							full_name = "Sandesh Bhattarai",
							email 	= "trainer.sandeh@broadwayinfosys.edu.np";

			#2nd Syntax
				=> 
					INSERT INTO <table>
						(<column_1>,<column_2>, .... ,<column_n>)
					VALUES 
						(<value_1>, <value_2>, ...., <value_n>) 

					e.g.
						INSERT INTO users 
							(email, full_name)
						VALUES
							("trainer.sandeh@broadwayinfosys.edu.np", "Sandesh Bhattarai");


		b. Insert Multiple row at a time
			=> 
				INSERT INTO <table>
						(<column_1>,<column_2>, .... ,<column_n>)
					VALUES 
						(<value_1>, <value_2>, ...., <value_n>),
						(<value_1_1>, <value_1_2>, ...., <value_1_n>),
						.......
						(<value_n_1>, <value_n_2>, ...., <value_n_n>)

				e.g.
						INSERT INTO users 
							(email, full_name)
						VALUES
							("trainer.sandeh@broadwayinfosys.edu.np", "Sandesh Bhattarai"),
							("sandesh.bhattarai79@gmail.com", "Bhattarai Sandesh"),
							("sandesh.zenlab@gmail.com", "Bhattarai Sandesh");



	*/


	if(isset($_POST) && !empty($_POST)){
		// 
		/*echo "<pre>";
		print_r($_POST);
		echo "</pre>";*/

		// $full_name = $_POST['full_name'];
		// $email = $_POST['email'];
		// $password = sha1($_POST['password']);
		// $date_of_birth = $_POST['date_of_birth'];
		$lang = json_encode($_POST['lang']);
		$gender = $_POST['gender'];
		$place_of_birth = $_POST['place_of_birth'];
		$about_yourself = $_POST['about'];
		$phone = 9802111635;


		// INSERT QUERY, String value
		$sql = "INSERT INTO users SET 
					
					full_name = '".$_POST['full_name']."',
					email = '".$_POST['email']."',
					password = '".sha1($_POST['password'])."',
					dob = '".$_POST['date_of_birth']."',

					lang = '".$lang."',
					role = '".$_POST['role']."',
					
					gender = '".$gender."',
					pob = '".$place_of_birth."',
					about_yourself = '".$about_yourself."' ";
		
		$query = mysqli_query($conn, $sql);
		if($query){
			// success
			/*echo "Data inserted successfully.";
			echo mysqli_insert_id($conn);*/
			header('location: select.php');
			exit;
		} else {
			echo mysqli_error($conn);
		}

	} else {	
		// Form not submitted
		$_SESSION['error'] = "Please Submit form";
		header("location: form.php");
		exit;
	}

	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";*/
