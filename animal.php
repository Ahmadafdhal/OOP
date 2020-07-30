<?php

	class animal{
		//properti
		public $name;
		public $legs = 2;
		public $cold_blooded = "false";
		

		//metode
		public function __construct($name){
			$this->name = $name;
		}
		public function set_name($name){
			$this->name = $name;
		}
		public function get_name(){
			return $this->name;
		}
		public function set_legs($legs){
			$this->legs = $legs;
		}
		public function get_legs(){
			return $this->legs;
		}
		public function set_cold_blooded($cold_blooded){
			$this->cold_blooded = $cold_blooded;
		}
		public function get_cold_blooded(){
			return $this->cold_blooded;
		}


		//public function get_cold_blooded(){
		//	return $this->cold_blooded;
		//}
		
	}
	




?>  