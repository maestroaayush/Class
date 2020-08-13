<?php 
$conn = mysqli_connect("localhost", "admin", "sandesh123", "db_login");		// mysql_connect();
if(!$conn){
	$_SESSION['error'] = "Error establishing database connection.";
	header("location: ./");
	exit;	
}