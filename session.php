<?php 
	session_start();		// Global Scope initialized
	
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	// unset some keys from session
	if(isset($_SESSION['name'])){
		unset($_SESSION['name']);
	}


	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";


	// session_destroy();	// delete every key from session, global scope is destroyed but not local scope

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";