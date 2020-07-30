<?php 	
	
	for($i=1; $i <=10; $i++){
		for($j=1; $j <= $i; $j++){
			echo "*"."&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}

	// *	*	*	*	*	*	*	*	*	*
	// *	*	*	*	*	*	*	*	*
	// *	*	*	*	*	*	*	*
	// *	*	*	*	*	*	*
	// *	*	*	*	*	*
	// *	*	*	*	*
	// *	*	*	*
	// *	*	*
	// *	*
	// *


	/*
										*
									* 	*
								*	* 	*
							*	*	* 	*
						*	*	*	* 	*
					*	*	*	*	* 	*
				*	*	*	*	*	* 	*
			*	*	*	*	*	*	* 	*
		*	*	*	*	*	*	*	* 	*
	*	*	*	*	*	*	*	*	* 	*




	1  2  4  7
	3  5  8 11
	6  9 12 14
	10 13 15 16


	1
   2 3 2
  3 4 5 4 3
 4 5 6 7 6 5 4
5 6 7 8 9 8 7 6 5

	*/
		echo "<br>";
		echo "<br>";
	
	for($i=10; $i>=1; $i--){
		$rem = $i-1;
		
		for($j=1; $j <= $rem; $j++){
			echo "&nbsp;&nbsp;&nbsp;";
		}

		for($k=10; $k >= $i; $k--){
			echo "*&nbsp;&nbsp;&nbsp;&nbsp;";
		}


		echo "<br>";
	}



		echo "<br>";
		echo "<br>";

	/*for($i =1; $i <= 10; $i++){
		
		for($j = $i; $j <= 10; $j++){

			echo "*"."&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";

	}*/

	for($i = 10; $i >=1; $i--){

		for($j=1; $j <= $i; $j++){
			echo "&nbsp;&nbsp;&nbsp;"."*";
		}
		echo "<br>";
	}