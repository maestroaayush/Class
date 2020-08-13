<?php 

	class Person {
		protected $name = "Test value";

		public function __construct(){
			echo "This is Person class. <br>";
		}

		public function testPerson(){
			$this->name = "test Name";
		}
	}



	class User extends Person{

		public function __construct(){
			// parent::__construct();
			echo "This is User class. <br>";
			Person::__construct();
		}


		public function testPerson(){
			parent::testPerson();
			return $this->name;
		}
	}

	$obj = new User();
	
	echo $obj->testPerson();
	/*

	echo "<br>";
	echo $obj->name;*/

/*
	Class A
		||
		||
		\/
	Class B
		||
		||
		\/
	Class C
		||
		||
		\/
	Class D 



	$obj = new D();

	* final 
	* abstract 
	* static 

*/


/*$date = date("Y-m-d")." +3 days";
$strtotime = strtotime($date);
$days_after = date("Y-m-d", $strtotime);


$days_after = date("Y-m-d", strtotime(date("Y-m-d")." +3 days"))*/