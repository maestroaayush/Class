<?php 
	interface UserInterface{
		public function testInterface();
	}
	class Person{

	}

	class User extends Person implements UserInterface{
		public function testInterface(){

		}	
	}




	