<?php 

	/*
		Delete Operation

			a. DROP 
				table, Database delete 
				Syntax: 
					DROP TABLE/DATABASE <table_name>;

			b. DELETE 
				Delete row from a table 
				=> DELETE FROM table 
					WHERE condition;

			c. TRUNCATE
				=> Reset a table
					TRUNCATE table

					id
					---


	*/

	require 'db.php';

	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	exit;
	*/

	if(isset($_POST['del_id']) && !empty($_POST['del_id'])){
		// valdel_id del_id
		$del_id = implode(",", $_POST['del_id']);		// casting, if id is not int, it will convert into integer 

		$sql = "DELETE FROM users WHERE id IN (".$del_id.")";

		/*echo $sql;
		exit;*/

		/// ............ WHERE id IN (1,2,3)

		$query = mysqli_query($conn, $sql);

		header("location: list.php");
		exit;

	} else {
		header("location: list.php");
		exit;
	}

	/*
		OOP concept in php
		Classes And Objects
		Keyword
		Access identifiers
		Member Function and Variables 
	*/