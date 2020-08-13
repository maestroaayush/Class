<?php 
	session_start();
	
	if(!isset($_SESSION['success']) || empty($_SESSION['success'])){
		@header('location: login-form.php');
		exit;
	}

	echo $_SESSION['success'];
?>
<a href="logout.php">Logout</a>