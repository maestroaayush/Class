<?php 
	/*
		a. Functional
		b. Global 
		c. Local


		$name => functional

	*/
	class Person{
		/* 
			Variable or constant
			Functions
		*/
		
		function test($name){
			echo "The value of name is: ".$name;
		}


		function testPublic($a = "Default Value"){
			/*$per_obj = new Person;*/
			// $this is always self object

			$this->test($a);
		}



	}

	$obj = new Person;
	$obj->testPublic("New Value");