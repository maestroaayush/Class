<?php 
	/*
		
		
		a. Arithematic Operators
			+, -, *, /, %

		b. Increment Or Decrement Operators
				++, --

		c. Assignment Operators
				=, +=, -=, *=, /=, %=, .=

		d. Comparision Operators
			<, >, <=, >=, !=, <>, ==, ===, !==

		e. Logical Operators
			&&, ||, !

		f. String / Concatination Operators
			.

		g. Conditional / Ternary Operators
			() ? true : false

		h. Error Suppressors
			@

		i. Spaceship Operators
				1, 0, -1 
				$first exp < $second => -1
				$first = $second => 0
				$first > $second => 1
	*/

		$a = 3; 
		$b = 2;

		$c = $a/$b;
		echo $c; 		// 1.5

		echo "<br>";
		$c = $a%$b;
		echo $c; 		// 1

		echo "<br>";


		$a = 10;
		
		$a = $a + 1; 	// 11
		

		echo $a++; 			// 11
		echo "<br>";

		echo ++$a;			// 13

		echo "<br>";
		echo "<br>";



		$a += 2;
		$a = $a + 2;

		/*$a++;
		++$a;*/

		$first = "User";
		$last = "One";

		// User One 
		echo $first;
		echo " ";
		echo $last;

		$first .= " ".$last;

		$a = 12;
		$b = '12';

		echo $a <> $b;			// true => 



		echo (($a <= 10) && ($b >= 12)); // false && true => false
		echo (($a <= 10) || ($b >= 12)); // false || true => true
		echo !(($a <= 10) || ($b >= 12)); // !(false || true) => !(true) => false



		echo ($a >= 12) ? (($a > 12) ? "A is greater than 12" : "A is equal to 12") : "A is smaller than 12";

		//  (exp) ? return true : return false;

		
		echo "<br>";
		echo "<br>";

		echo @$adsfasdf;
		echo "<br>";
		echo "<br>";


	$comp = (1 <=> 1);	
	echo $comp." <br>";
	$comp = (2 <=> 1);	
	echo $comp." <br>";
	$comp = (1 <=> 2);	
	echo $comp." <br>";
	echo "<br>";

	$comp = (1 <=> "a");	
	echo $comp." <br>";

	$comp = ("b" <=> "a");	
	echo $comp." <br>";

	$comp = ("a" <=> "b");	
	echo $comp." <br>";