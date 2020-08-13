<?php 
	class Person{

		/* 
			Constructors and Destructors
			Magic Function 
			Autoloading Function

			Access level 3
				a. Public
					- Anywhere from the object

				b. Private
					- only within the class

				c. Protected 	
					- Class and child
		*/

		// Constructor
		function __construct($args){
			echo "I am a Constructor in Person class. ".$args;
		}

		/*function Person(){

		}*/

		protected function test(){
			echo "<br>I am inside Person class. I am test Function.<br>";
		}

		function getTest(){
			$this->test();
		}


		/*function __destruct(){
			echo "I am Destructor in Person class. <br>";
		}*/
	
	}

	// 

	$obj = new Person("value of args");

	$obj->getTest();