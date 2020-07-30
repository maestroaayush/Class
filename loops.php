<?php 
	/*
		Loop/ Iteration

			a. while
			b. do-while
			c. for 
			d. foreach

	*/

	$i = 1;

	while($i <= 10){
		echo $i++;				// 1,   2
		echo "&nbsp;&nbsp;";
	}

	echo "<br>";
	echo "<br>";
	
	$i =1;
	do{
		echo $i++;				// 1,   2
		echo "&nbsp;&nbsp;";
	} while($i <= 10);

	echo "<br>";
	echo "<br>";
	

	for($i=1; $i <= 10; $i++){
		echo $i."&nbsp;&nbsp;";
	}

/*



*
*	*
*	*	*
*	*	*	*
*	*	*	*	*
*	*	*	*	*	*
*	*	*	*	*	*	*
*	*	*	*	*	*	*	*
*	*	*	*	*	*	*	*	*
*	*	*	*	*	*	*	*	*	*

*	*	*	*	*	*	*	*	*	*
*	*	*	*	*	*	*	*	*
*	*	*	*	*	*	*	*
*	*	*	*	*	*	*
*	*	*	*	*	*
*	*	*	*	*
*	*	*	*
*	*	*
*	*
*

















*/