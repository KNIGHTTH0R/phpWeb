<?php 

class schedule{
	
	private $id;
	private $title;
	private $day;//order of the date
	private $description;
	private $hotel;//name of the hotel
	private $productId;
	private $breakfast;
	private $lunch;
	private $dinner;
	
	public function __construct($title,$day,$description,$hotel,$productId,$breakfast,$lunch,$dinner){
		$this->title = $title;
		$this->day = $day;
		$this->description =$description;
		$this->hotel = $hotel;
		$this->productId = $productId;
		$this->breakfast = $breakfast;
		$this->lunch = $lunch;
		$this->dinner = $dinner;
		
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
	
	public function getDay(){
		return $this->day;
	}
	
	public function setDay($day){
		$this->day = $day;
	}
	public function getDescription(){
		return $this->description;
	}
	
	public function setDescription($description){
		$this->description = $description;
	}
	
	public function getHotel(){
		return $this->hotel;
	}
	
	public function setHotel($hotel){
		$this->hotel = $hotel;
	}
	
	public function getProductId(){
		return $this->productId;
	}
	
	public function setProductId($pId){
		$this->productId = $pId;
	}
	
	public function getBreakfast(){
		return $this->breakfast;
	}
	
	public function setBreakfast($breakfast){
		$this->breakfast = $breakfast;
	}
	
	public function getLunch(){
		return $this->lunch;
	}
	
	public function setLunch($lunch){
		$this->lunch = $lunch;
	}
	
	public function getDinner(){
		return $this->dinner;
	}
	
	public function setDinner($dinner){
		$this->dinner = $dinner;
	}
	
	
}
?>