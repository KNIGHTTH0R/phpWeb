<?php 


class admin{
	

	private $name;
	private $password;
	
	
	public function __construct($name,$password){
		$this->setName($name);
		$this->password = $password;
	}
	
	
	public function setName($name){
		$this->name = $name;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function getPassword(){
		return $this->password;
	}
	
	public function setPassword($password){
		$this->password = $password;
	}
	
}


?>