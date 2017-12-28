<?php 

class slideShow{
	
	private $id;
	private $title;
	private $descriptionA;
	private $descriptionB;
	private $URL;
	private $link;
	
	public function __construct($title,$descriptionA,$descriptionB,$link,$URL){
		$this->title = $title;
		$this->descriptionA = $descriptionA;
	$this->descriptionB = $descriptionB;
	$this->link = $link;
	$this->URL = $URL;
	
	}
	
	public function getLink(){
		return $this->link;
	}
	
	public function setLink($link){
		$this->link = $link;
	}
	
	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id= $id;
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	public function setTitle($title){
		$this->title = $title;
	}
	public function getDescriptionA(){
		return $this->descriptionA;
	}
	public function setDescriptionA($description){
		$this->descriptionA= $description;
	}
	
	public function getDescriptionB(){
		return $this->descriptionB;
	}
	public function setDescriptionB($description){
		$this->descriptionB= $description;
	}
	
	public function getURL(){
		return $this->URL;
	}
	public function setURL($URL){
		$this->URL= $URL;
	}
	
	
}

?>