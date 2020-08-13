<?php 

	trait GeneralFunction{
		public function getName(){
			return $this->name;
		}
	} 




	class User {
		public $name = null;

		use GeneralFunction;
	}



	class Person {
		public $name = "Test Person";

		use GeneralFunction;
	}