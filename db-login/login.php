<?php 
	session_start();
	require "db.php";

	
	if(isset($_POST, $_POST['email'], $_POST['password']) && !empty($_POST)){

		// form submited
		$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
		
		if(!$email){
			$_SESSION['error'] = "Invalid Email Format";
			header("location: login-form.php");
			exit;			
		}

		if(empty($_POST['password'])){
			$_SESSION['error'] = "Password could not be empty";
			header("location: login-form.php");
			exit;
		}


		/*
			8 chars
			must have 1 number
			must have a symbol
			must have a Capital Char
			must have a small Char


			^(?=.*\d)(?=.\S*[\W])(?=.*[a-z])(?=.*[A-Z])[A-Za-z\d\W]{8,}$ 
		*/

		// $bool = preg_match("^(?=.*\d)(?=.\S*[\W])(?=.*[a-z])(?=.*[A-Z])[A-Za-z\d\W]{8,}$", $_POST['password']);

		/*$len = strlen($_POST['password']);	// length of string
		if($len < 8 || $len > 15){
			$_SESSION['error'] = "Password must be of 8 to 15";
			header("location: login-form.php");
			exit;	
		}*/

		/*
			SELECT <fields> FROM <table>
				LEFT JOIN <table_1> ON <table_1.column_name_n> <operation> <table.column_name_n>
			WHERE <condition>
			GROUP BY <clause>
			ORDER BY <condition>
			LIMIT <start>, <count>
		*/
		
		$sql = "SELECT * FROM users WHERE email  = '".$email."' ";			// 1 row
		$query = mysqli_query($conn, $sql);
		
		if(!$query){
			$_SESSION['error'] = mysqli_error($conn);
			header("location: login-form.php");
			exit;
		}


		$data = mysqli_fetch_assoc($query);		// mysqli_fetch_array();, mysqli_fetch_all()
		
		if(!$data){
			$_SESSION['error'] = "User not found";
			header("location: login-form.php");
			exit;
		}

		if(password_verify($_POST['password'], $data['password'])){
			// matched
			$_SESSION['success'] = "Welcome to user profile.";
			header("location: profile.php");
			exit;
		} else {
			$_SESSION['error'] = "Password does not match.";
			header("location: login-form.php");
			exit;
		}
	} else {
		$_SESSION['error'] = "Enter your username and password";
		header("location: login-form.php");
		exit;
	}