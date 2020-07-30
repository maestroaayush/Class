<?php 
	
	echo 12345678;
	echo '<br>';
	echo 'Test Text';
	echo '<br>';

	echo 'Ram Said,\'This is double quote.\'. ';
	echo '<br>';

	echo ' "" ';
	echo '<br>';


	/*Variables And Constants*/

	$full_name = "Sandesh Bhattarai";

	echo $full_name;		# Sandesh Bhattarai
	echo '<br>';

	echo "$full_name";		// Sandesh Bhattarai
	echo '<br>';

	echo '$full_name';		// $full_name
	echo '<br>';

	$full_name = "Test User";


	$a = 123;
	$b = '123'; 			// 123



	$c = $a + $b;	

	echo $c; 			// 246
	echo "<br>";




	$a = 123;
	$b = '123asdfasd123415646'; // 123



	$c = $a + $b;	

	echo $c; 			// 246, notice




	echo "<br>";

	$a = 123;
	$b = 'asdfasd123'; 			// 0



	$c = $a + $b;	

	echo $c; 			// 123, warning
	echo "<br>";

	$c = 123123123;

	echo $c;
	echo "<br>";



	define("GRAVITY", 9.8);		// => Outside Class

	echo GRAVITY;
	$force = 10 * GRAVITY;


	const GRAVITY_1 = 10;


	$url = "http://google.com";


	// const SITE_URL = $url;
	define('SITE_URL', $url);





	$url = "http://facebook.com";


	echo SITE_URL;	// http://google.com
	// const   		=> Class 

	/*
		Data Types in PHP 
		

	*/