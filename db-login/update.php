<?php 
	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";*/
	/*

		
			INSERT INTO table SET 
				column_name = value,
				column_name_1 = value_1,
				................. ,
				column_name_n = value_n



			UPDATE table SET 
				column_name = value,
				column_name_1 = value_1,
				................. ,
				column_name_n = value_n
			WHERE condition 				// optional






	*/
	require 'db.php';
	if(isset($_POST['row_id']) && !empty($_POST['row_id'])){
		// update

		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			header('location: list.php');
			exit;
		}

		$email = $_POST['email'];

		$name = $_POST['name'];

		$role = $_POST['role'];
		$status = $_POST['status'];
		$row_id = $_POST['row_id'];
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

		$sql = "UPDATE users SET
					name = '".$name."',
					email = '".$email."',
					role = '".$role."',
					password = '".$password."',
					status = '".$status."'
				WHERE id =  ".$row_id;

		$query = mysqli_query($conn, $sql);

		header("location: list.php");
		exit;
	} else {
		header("location: list.php");
		exit;
	}