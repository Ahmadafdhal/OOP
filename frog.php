<?php  	

	class Frog extends animal{
	public $leg = "4";
	public $jump = "hop hop";

	public function set_leg($leg){
			$this->leg = $leg;
		}
		public function get_leg(){
			return $this->leg;
		}
	public function set_jump($jump){
			$this->jump = $jump;
		}
		public function get_jump(){
			return $this->jump;
		}
}

?>