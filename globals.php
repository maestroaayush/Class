<?php 
/*
	$_GET
	$_POST
	$_FILES
	$_REQUEST
*/

/* Session and Cookie 

	Session => 
		Server Side data 
		Secure 
		Size can be controlled through PHP settings, by default size is of 8MB
		Non visible to client
		Stored in server storage
		Domain Dependent
		Volatile, Exit browser, session destory
		session start is required
		can store any data type
		Session => Login process, Authentication


	Cookie 	=> 
		Client Side data
		Less secure
		A domain can have max 50 cookie
			A cookie can have 4096 bytes of data
		Visible to client
		Browser 
		Domain Dependent, Path Dependent
		Cookie stored for long time
		no need to start cookie, set
		cookie can store string, number or boolean
		Cookie => Remember previous data
					=> Tracking code 
*/
session_start();
// 

$_SESSION['user']	= array(
	'name'		=> "Sandesh Bhattarai",
	'email'		=>	"sandesh.bhattarai79@gmail.com",
	'phone'		=>	"+977 9863021458"
);


echo "<pre>";
print_r($_SERVER);
echo "</pre>";