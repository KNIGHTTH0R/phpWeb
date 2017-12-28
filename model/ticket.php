<?php 

class ticket{
	
	private $id;
	private $title;
	private $adult; // price for adult
	private $enfants;
	private $child;
	private $teen;
	private $senior;
	private $mandatory;//int 0 for false,1 for true;
	private $productID;
	
	public function __construct($title,$adult,$enfants,$child,$teen,$senior,$mandatory,$productID){
		$this->title = $title;
		$this->adult = $adult;
		$this->enfants = $enfants;
		$this->child = $child;
		$this->teen = $teen;
		$this->senior = $senior;
		$this->mandatory = $mandatory;
		$this->productID = $productID;
		
	}
	
	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}
	
	public function getTitle(){
		return $this->title;
	}
	public function setTitle($title){
		$this->title = $title;
	}
	
	public function getAdult(){
		return $this->adult;
	}
	public function setAdult($adult){
		$this->adult = $adult;
	}
	
	public function getEnfants(){
		return $this->enfants;
	}
	public function setEnfants($enfants){
		$this->enfants = $enfants;
	}
	
	public function getChild(){
		return $this->child;
	}
	public function setChild($child){
		$this->child = $child;
	}
	
	public function getTeen(){
		return $this->teen;
	}
	public function setTeen($teen){
		$this->teen = $teen;
	}
	
	public function getSenior(){
		return $this->senior;
	}
	public function setSenior($senior){
		$this->senior = $senior;
	}
	
	public function getMandatory(){
		return $this->mandatory;
	}
	public function setMandatory($mandatory){
		$this->mandatory = $mandatory;
	}
	
	public function getProductId(){
		return $this->productID;
	}
	public function setProductId($id){
		$this->productID = $id;
	}
	
	
}
?>