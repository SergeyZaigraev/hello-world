<?php 
class GitHub{
	public $login;
	public $password;
	
	public __construct($login,$password){
		$this->login = $login;
		$this->password = $password;
	}
	public hi(){
		print $this->login;
	}
}
?>