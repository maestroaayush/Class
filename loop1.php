<?php 
	/*

		echo $i++;		// 1, 2

		echo ++$i;		// 3, 3

	*/

	$i = 11;
	while($i <= 10){
		echo $i++;		// 4, 5
		echo "&nbsp;";	
	}


	echo "<br>";

	$i = 11;
	do{
		echo $i++;		// 11, 12
		echo "&nbsp;";	
	}while($i <= 10);


	echo "<br>";

	for($i=1; $i <=10; $i++){
		echo $i;
		echo "&nbsp;";
	}
