<?php
class picture {
	private $picture_ID;
	private $picture_URL;
	private $picture_description;
	private $picture_product_ID;
	private $picture_original_name;
	private $picture_saved_name;
	
	public function __construct($picture_URL, $picture_description, $picture_product_ID, $picture_original_name, $picture_saved_name) {
		$this->setPictureURL ( $picture_URL );
		$this->setPictureDescription ( $picture_description );
		$this->setPictureProductID ( $picture_product_ID );
		$this->setOriginalName ( $picture_original_name );
		$this->setSavedName( $picture_saved_name);
	}
	
	public function setPictureID($picture_ID) {
		$this->picture_ID = $picture_ID;
	}
	public function setPictureURL($picture_URL) {
		$this->picture_URL = $picture_URL;
	}
	public function setPictureDescription($picture_description) {
		$this->picture_description = $picture_description;
	}
	public function setPictureProductID($picture_product_ID) {
		$this->picture_product_ID = $picture_product_ID;
	}
	public function setOriginalName($picture_original_name) {
		$this->picture_original_name = $picture_original_name;
	}
	public function setSavedName($picture_saved_name) {
		$this->picture_saved_name = $picture_saved_name;
	}
	
	public function getPictureID() {
		return $this->picture_ID;
	}
	public function getPictureURL() {
		return $this->picture_URL;
	}
	public function getPictureDescription() {
		return $this->picture_description;
	}
	public function getPictureProductID() {
		return $this->picture_product_ID;
	}
	public function getPictureOriginalName() {
		return $this->picture_original_name;
	}
	public function getPictureSavedName() {
		return $this->picture_saved_name;
	}
}

?>