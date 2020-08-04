<?php 	
	require "connect.php";

	/*
		DROP 
			=> table delete, Databse delete
		e.g.
			DROP TABLE <table_name>;
			DROP DATABASE <db_name>

		DELETE
			=> Row/s of data from a table
		e.g. 
			DELETE FROM <table>;	=> Delete all the rows of that <table>
			DELETE FROM <table> WHERE <condition> => All the data satisfying the condition will be deleted.

			=> 1, 10 => next entry 11
			=> rowid 10 delete => 10, 11
	
	id
	--
	1,
	11

		TRUNCATE
			=> TRUNCATE <table>
			e.g. 
				TRUNCATE users;
	*/

	if(isset($_GET, $_GET['id']) && !empty($_GET)){
		// 
		$id = (int)$_GET['id'];
		if($id <= 0){
			header("location: select.php");
			exit;			
		} 
		$sql = "DELETE FROM users WHERE id =".$id;
		$query = mysqli_query($conn, $sql);

		if($query){
			// data deleted
			header("location: select.php");
			exit;
		} else {
			// data not deleted
			header("location: select.php");
			exit;
		}
	} else {
		// empty form
		header("location: select.php");
		exit;
	}