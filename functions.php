<?php 	

	/*
		a. Pre-defined function or Built in function

		b. Custom function or User defined function



		function name with arguments or no arguments

		Function body

		return statement




		function declaration
		function definition
		function call

	*/



	function debug($data, $is_debug=false){
		echo "<pre>";
		print_r($data);
		echo "</pre>";

		if($is_debug == true){
			exit;
		}
	}	



	// parameter by value
	

	function test(){
		// global
		global $a, $b;
		$a = $a + $b;

		return $a;


	}
	$a = 10;
	$b = 15;
	
	test();

	echo $a;					// 25





	// parameter by reference

	function addNumbers($x, $y, &$multiply = null){			// 123
		$multiply = $x * $y;

		// addNumbers();

		return ($x+$y);
	}

	$x = 2;
	$y = 3;

	$result = 0;			// 789

	$sum = addNumbers($x, $y, $result);
	
	echo "<br>";
	echo "<br>";
	echo $result;		// 		0


