<?php 
	session_start();
	$user_name = "admin@gmail.com";
	$password = "admin123";

	if(isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])){
		// both set 
		
		// text@text

		$form_user = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);		// email address, false

		if(!$form_user){
			// Invalid email format
			$_SESSION['error'] = "Invalid Email address.";
			@header('location: login-form.php');
			exit;
		}

		$form_password = strip_tags($_POST['password']);		// tags contenten 
		// <p>test</p> => test


		// form's user and static user check
		if($user_name == $form_user){
			// user matched

			if($password == $form_password){
				// password also match


					// Remember Me logic
					if(isset($_POST['remember_me'])){
						setcookie("auth_user", true, time()+864000);
					}



				$_SESSION['success'] = "Welcome to user panel.";
				@header('location: profile.php');
				exit;
			} else {
				$_SESSION['error'] = "Password does not match.";
				@header('location: login-form.php');
				exit;
			}

		} else {
			$_SESSION['error'] = "Username does not match";
			@header('location: login-form.php');
			exit;
		}

	} else {
		$_SESSION['error'] = "Please Enter Username and Password";
		@header("location: login-form.php");
		exit;
	}