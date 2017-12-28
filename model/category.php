<?php 


class category{
	
	private $id;
	private $name;//1:AE:2:AW:3:CE:4:CW:5:Asia:6:Europe:7:Cuba:8:Jamaica:9:Mexico:10:Dominican:11:CHINA
	
	public function __construct($name){
		$this->setName($name);
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function setName($name){
		$this->name = $name;
	}
	
	public function getName(){
		return $this->name;
	}
	
}


?>