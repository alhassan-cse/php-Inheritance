<?php

class Userdata{
	private $user;
	public $userid;
	private $age;
	
	public function display($user, $userid){
		$this->user = $user;
		$this->userid = $userid;
		echo "Username name is ".$this->user." and user id is".$this->userid;
	}
}

class Admin extends Userdata{
	
	// super class methods ecuite na kore subclass methods ta excuite korbe
	public function display($user, $userid){
		$this->user = $user;
		echo 'ok'.$this->userid.'ok';
		 
		 
	}
}

 
$user="Admin";
$userid=12334;
$a = New Admin();
$a->display($user, $userid);

 
$var = empty;
echo $var;
 

?>