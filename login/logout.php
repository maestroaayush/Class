<?php 
	session_start();
	session_destroy();

	if(isset($_COOKIE['auth_user'])){
		setcookie("auth_user", "", time()-60);
	}

	@header("location: login-form.php");
	exit;