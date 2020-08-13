<?php 
	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";*/
	session_start();
	require "db.php";

	if(isset($_POST, $_POST['email'], $_POST['password']) && !empty($_POST)){
		// post is not empty
		$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);	// format
		if(!$email){
			$_SESSION['error'] = "Invalid email format.";
			header("location: ./");
			exit;	
		}

		if(empty($_POST['password'])){
			$_SESSION['error'] = "Password cannot be empty.";
			header("location: ./");
			exit;
		}

		// $bool = preg_match("^(?=.*\d)(?=.\S*[\W])(?=.*[a-z])(?=.*[A-Z])[A-Za-z\d\W]{8,}$", $_POST['password']);
		/*
		if(!$bool){
			$_SESSION['error'] = "Password must contain atleas a number, a special chars, a Capital letter, a small letter and must be atleast 8 chars.";
			header("location: ./");
			exit;
		}

		*/

		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


		/*
			a. connect db Server and select db
			b. Write sql to your task
			c. Execute your sql
			d. If Needed, fetch data
		

		1. 
			INSERT INTO table SET 
			column_name = 'value',
			column_name_1 = "Value_1"
		
		2. INSERT INTO table 
			(column_name, column_name_2, .... , column_name_n)
			VALUES
			(value_1, Value_2, ....... , value_n)

		3. INSERT INTO table 
			(column_name, column_name_2, .... , column_name_n)
		   VALUES
			(value_1, Value_2, ....... , value_n),
			(value_1, Value_2, ....... , value_n)


		*/
		$name = $_POST['name'];

		$role = array("admin", "user");
		$status = array("active", "inactive");

		$random = rand(0,1);

		$sql = "INSERT INTO users SET 
					name = '".$name."',
					email = '".$email."',
					password = '".$password."',
					role = '".$role[$random]."',
					status = '".$status[$random]."'
				";


		$query = mysqli_query($conn, $sql);

		if($query){
			header("location: login-form.php");
			exit;
		} else {
			$_SESSION['error'] = "Sorry! Data could not be stored at this moment.";
			header("location: ./");
			exit;
		}

	} else {
		// post is empty
		$_SESSION['error'] = "Fill the form first.";
		header("location: ./");
		exit;
	}