<?php
	class product{
		
		private $id;
		private $title;
		private $tourType;//0 for bus 1 for air
		private $cityOfStart;
		private $cityOfEnd;
		private $numberOfDays;
		private $description;
		private $terms;
		private $price_included;
		private $price_not_included;
		private $pdf;
		private $single;//price for single person
		private $double;//price for 2 people
		private $triple; // price for 3 people
		private $quardriple; //price for 4 people
		private $discount; //discount percentage
		private $categoryId;
		private $tax;
		
		public function __construct($title,$tourType,$cityOfStart,$cityOfEnd,$numberOfDays,
				$description,$terms,$price_included,$price_not_included,$pdf,
				$single,$double,$triple,$quardriple,$discount,$categoryId){
					$this->title = $title;
					$this->tourType =$tourType;
					$this->cityOfStart = $cityOfStart;
					$this->cityOfEnd = $cityOfEnd;
					$this->numberOfDays = $numberOfDays;
					$this->description = $description;
					$this->terms = $terms;
					$this->price_included = $price_included;
					$this->price_not_included = $price_not_included;
					$this->pdf = $pdf;
					$this->single = $single;
					$this->double = $double;
					$this->triple = $triple;
					$this->quardriple = $quardriple;
					$this->discount = $discount;
					$this->categoryId = $categoryId;
					
		}
		
		
		
		public function setTax($tax){
			$this->tax = $tax;
		}
		
		public function getTax(){
			return $this->tax;
		}
		
		public function getId(){
			return $this->id;
		}
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function setTitle($title){
			$this->title = $title;
		}
		
		public function getTitle(){
			return $this->title;
		}
		
		public function getTourType(){
			return $this->tourType;
		}
		
		public function setTourType($tourType){
			$this->tourType = $tourType;
		}
		
		public function getCityOfStart(){
			return $this->cityOfStart;
		}
		
		public function setCityOfStart($cityOfStart){
			$this->cityOfStart= $cityOfStart;
		}
		
		public function getCityOfEnd(){
			return $this->cityOfEnd;
		}
		
		public function setCityOfEnd($cityOfEnd){
			$this->cityOfEnd = $cityOfEnd;
		}
		
		public function getNumberOfDays(){
			return $this->numberOfDays;
		}
		
		public function setNumberOfDays($days){
			$this->numberOfDays = $days;
		}
		
		public function getDescription(){
			return $this->description;
		}
		
		public function setDescription($description){
			$this->description = $description;
		}
		
		public function getTerms(){
			return $this->terms;
		}
		
		public function setTerms($terms){
			$this->terms= $terms;
		}
		
		public function setPriceIncluded($price){
			$this->price_included;
		}
		
		public function getPriceIncluded(){
			return $this->price_included;
		}
		
		public function setPriceNotIncluded($price){
			$this->price_not_included = $price;
		}
		
		public function getPriceNotIncluded(){
			return $this->price_not_included;
		}
		
		public function getPdf(){
			return $this->pdf;
		}
		
		public function setPdf($pdf){
			$this->pdf = $pdf;
		}
		
		public function getSingle(){
			return $this->single;
		}
		
		public function setSingle($single){
			$this->single = $single;
		}
		
		public function getDouble(){
			return $this->double;
		}
		
		public function setDouble($double){
			$this->double = $double;
		}
		
		public function getTriple(){
			return $this->triple;
		}
		
		public function setTriple($triple){
			$this->triple = $triple;
		}
		
		public function getQuard(){
			return $this->quardriple;
		}
		
		public function setQuard($quard){
			$this->quardriple = $quard;
		}
		
		public function getDiscount(){
			return $this->discount;
		}
		
		public function setDiscount($discount){
			$this->discount = $discount;
		}
		public function getCategoryId(){
			return $this->categoryId;
		}
		
		public function setCategoryId($categoryId){
			$this->categoryId = $categoryId;
		}
		
		public function getMinPrice(){
			$temp = array($this->single,$this->double,$this->triple,$this->quardriple);
			$min = 0;
			sort($temp);
			for($i=0; $i<count($temp); $i++) {
				if ($temp[$i] == 0) {
					continue;
				} else {
					$min = $temp[$i];
					break;
				}
			}
			return $min;
		}
	}


?>