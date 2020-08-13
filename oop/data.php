<?php 
	class Data{

		private $name = "";
		/*
			const
		*/
		private const ROLE = "admin";			// public

		/*public function setName($_name){
			$this->name = $_name;
		}*/

		public function __construct($_name){
			$this->name = $_name;
		}

		public function getName(){
			return $this->name;
		}

		public function getRole(){
			return self::ROLE;
		}
	}

	$data = new Data("Test User");
	echo $data->getRole();

	// echo Data::ROLE;

	// $data = new Data("Test User");
	// $data->setName("Test User");

	// echo $data->getName();
