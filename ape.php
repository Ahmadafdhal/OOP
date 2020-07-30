<?php

class Ape extends animal{
	public $yell = "auooo";
	public function set_yell($yell){
			$this->yell = $yell;
		}
		public function get_yell(){
			return $this->yell;
		}
}

?>