<?php 

class tag{
	private $product_ID;
	private $tag_ID;
	private $tag_content;
	private $tag_div_code;
	
	public function __construct($product_ID,$tag_content, $tag_div_code){
		$this->setProductID($product_ID);
		$this->setTagContent($tag_content);
		$this->setTagDivCode($tag_div_code);
	}
	
	public function setProductID($product_ID){
		$this->product_ID= $product_ID;
	}
	public function getProductID(){
		return $this->product_ID;
	}
	public function setTagID($tag_ID){
		$this->tag_ID= $tag_ID;
	}
	public function getTagID(){
		return $this->tag_ID;
	}
	public function setTagContent($tag_content){
		$this->tag_content= $tag_content;
	}
	public function getTagContent(){
		return $this->tag_content;
	}
	public function setTagDivCode($tag_div_code){
		$this->tag_div_code= $tag_div_code;
	}
	public function getTagDivCode(){
		return $this->tag_div_code;
	}
}


?>