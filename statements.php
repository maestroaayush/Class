<?php 
	/*
		Control Statements / Decision Making Statements
		

		a. If-else
		b. else-if
		c. Swtich Cases

		d. Loop
			a. while
			b. do-while
			c. for
			d. foreach

		break or continue
	*/


	$a = "";

	if($a){		// null, false, 0
		// body
	}/* else {
		// else body
	}*/



	if($a):
		// body
	/*else:
		// body*/
	endif;


	/*
			
		$act = "add";		// add, edit, delete, view

		add => The Act is Add.
		edit => The Act is Edit.
		delete => The Act is Delete.
		view => The Act is View.


	*/

	$act = "add";
	if($act == 'add'){
		echo "The Act is Add";
	}
	
	if($act == 'edit'){
		echo "The Act is Edit";
	}

	if($act == 'delete'){
		echo "The Act is Delete";
	}

	if($act == 'view'){
		echo "The Act is View";
	}
	

	echo "<br>";


	if($act == 'add'){
		echo "The Act is Add";
	} else {
		if($act == 'edit'){
			echo "The Act is Edit";
		} else {
			if($act == 'delete'){
				echo "The Act is Delete";
			} else {
				echo "The Act is View";
			}
		}
		
	}
	
	echo "<br>";
	

	if($act == "add"){
		echo "The Act is add";
	} else if($act == 'edit'){
		echo "The Act is edit";
	} else if($act == 'delete'){
		echo "The Act is delete";
	} else {
		echo "The Act is View";
	}


	/*
		$marks = 250;
		$total = 500;

		$percentage = ............;

		$per >= 80 => First Division with Distinction
		$per >= 60 & < 80 => First Division
		$per >= 45 & < 60 => Second Division
		$per >= 35 & < 45 => Third Division
		$per < 35 => Sorry! You are failed


	*/
	

	echo "<br>";

	$act = "add";

	switch ($act) {
		case 'add':
			echo "The Act is Add";
			break;

		case 'edit':
			echo "The Act is Edit";
			break;
		
		case 'delete':
			echo "The Act is Delete";
			break;

		default:
			echo "The Act is View.";
			break;
	}


	$marks = 250;
	$per = ($marks/500)*100;


	switch(true){
		case ($per >= 80):
			echo "First Division with Distinction";
			break;
	}


	$day = 1;

	// 1=> Sunday

	switch($day){
		case 1:
			echo "Sunday";
			break;
		case 2:
			echo "Monday";
			break;
	}