<?php 
require_once (dirname(__FILE__).'/abstractDAO.php');
require_once(dirname(__FILE__).'/../model/category.php');

/**
 * 
 * category DAO
 * for modify the category table
 * 
 * @author Chen
 **/

class categoryDAO extends abstractDAO{
	function __construct(){
		
		try{
			parent::__construct();
		}catch (MySQLi_Sql_Exception $e){
			throw $e;
		}
	}
	
	public function getCategories(){
		//return the whole table
		$result = $this->mysqli->query('select * from category');
		$categorys =Array();
		
		if($result->num_rows >= 1){
			while($row = $result->fetch_assoc()){
				//Create a new Category object, and add it to the array.
				$category = new category($row['category_name']);
				$category->setId($row['category_ID']);
				$categorys[] = $category;
			}
			$result->free();
			return $categorys;
		}
		$result->free();
		return false;
	}
	
	//method for get single record
	public function getCategory($id){
		$query = 'SELECT category_ID, category_name FROM category WHERE category_ID = ?';
		$stmt = $this->mysqli->prepare($query);
		$stmt->bind_param('i', $id);
		$stmt->execute();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result($category_ID, $category_name);
		
		while ($stmt->fetch()) {
		    $category= new category($category_name);
			$category->setId($category_ID);
		}
		
		$stmt->free_result();
		return $category;
	}
	
	
	//function for adding the category into the database
	public function addCategory($category) {
		try {
			if (! $this->mysqli->connect_errno) {
				$query = 'INSERT INTO category(category_name) VALUES (?)';
				$stmt = $this->mysqli->prepare ( $query );
				$name = $category->getName();
				$stmt->bind_param ( 's', $name);
				
				// Execute the statement
				$stmt->execute ();
				
				if ($stmt->error) {
					return $stmt->error;
				} else {
					return $category->getId () . ' ' . $category->getName () . ' added successfully!';
				}
			} else {
				return 'Could not connect to Database.';
			}
		} catch ( mysqli_sql_exception $e ) {
			throw $e->getMessage ();
		}
	}
	
	public function deleteCategory($id) {
		if (! $this->mysqli->connect_errno) {
			$query = 'DELETE FROM category WHERE category_ID = ?';
			$stmt = $this->mysqli->prepare ( $query );
			$stmt->bind_param ( 'i', $id );
			$stmt->execute ();
			if ($stmt->error) {
				return false;
			} else {
				return true;
			}
		} else {
			return false;
		}
	}
	
	public function editCategory($id,$name) {
		if (! $this->mysqli->connect_errno) {
			
			$query = 'UPDATE category SET category_name = ? where category_ID = ?';
			$stmt = $this->mysqli->prepare ( $query );
			
			$stmt->bind_param ( 'si', $name,$id );
			$stmt->execute ();
			if ($stmt->error) {
				return false;
			} else {
				return $stmt->affected_rows;
			}
		} else {
			return false;
		}
	}
	
}







?>