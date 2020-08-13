<?php 
/*
- Abstract 
	- Abstract Class does not have any objects
	- If a function is declared as  abstract, you are not allowed to define it's body
	- An abstract function must be overriden

- Final 
	- A final class cannot be inherited
	- A final function cannot be overridden

- Static 
	- A static function or variable does not require object to access
	- A static function can only access static data
	- To access static variable, use class name outside the class, or self or classname inside the class


*/
abstract class Person{

	final public function testPerson(){
		//
	}

	abstract public function abstarctFunction();

}


final class User extends Person{
	/*public function testPerson(){
		
	}*/
	static public $user_name = "user";
	public function abstarctFunction(){

	}

	static public function getUser(){
		self::$user_name;
		User::$user_name;
		// $this->user_name;
	}
}




/*$obj = new User();

$obj->getUser();*/

User::getUser();
echo User::$user_name;