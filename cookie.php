<?php 
	// set cookies
	// setcookie("user", "Sandesh Bhattarai", time()+60);

	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";

	// destroy cookie
	setcookie("user", "", time()-60);