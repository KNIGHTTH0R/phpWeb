<?php 
require_once (dirname(__FILE__).'/abstractDAO.php');
require_once(dirname(__FILE__).'/../model/tag.php');

/**
 * 
 * tag DAO
 * for modify the tag table
 * 
 * @author Kyle
 **/

class tagDAO extends abstractDAO{
	function __construct(){
		
		try{
			parent::__construct();
		}catch (MySQLi_Sql_Exception $e){
			throw $e;
		}
	}
	
	public function getTagPID($product_ID, $tag_div_code){
		$query = 'SELECT product_ID, tag_ID, tag_content, tag_div_code FROM tag WHERE product_ID = ? AND tag_div_code = ?';
		$stmt = $this->mysqli->prepare($query);
		$stmt->bind_param('ii', $product_ID, $tag_div_code);
		$stmt->execute();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		//$tags = '';
		/* Bind the result to variables */
		$stmt->bind_result($pID, $tag_ID, $tag_content, $code);
		
		if ($num_of_rows > 0) {
			while ($stmt->fetch()) {
				$tags = $tags.','.$tag_content;
				//$tag = new tag ($pID, $tag_content, $code);
				//$tag->setTagID($tag_ID);
				//$tags[] = $tag;
			}
			$tags = substr($tags,1);
			
			$stmt->free_result();
			return $tags;
		} else {
			$stmt->free_result();
			return false;
		}
	}
	
	// add
	public function addTag($tag) {
		try {
			if (! $this->mysqli->connect_errno) {
				$query = 'INSERT INTO tag (product_ID, tag_content, tag_div_code) VALUES (?,?,?)';
				$stmt = $this->mysqli->prepare ( $query );
				
				$product_ID = $tag->getProductID();
				$tag_content= $tag->getTagContent();
				$tag_div_code = $tag->getTagDivCode();
				
				$stmt->bind_param ( 'isi', $product_ID, trim($tag_content), $tag_div_code);
				
				// Execute the statement
				$stmt->execute ();
				
				if ($stmt->error) {
					return $stmt->error;
				} else {
					return 'Success['.$product_ID.']';
				}
			} else {
				return 'Could not connect to Database.';
			}
		} catch ( mysqli_sql_exception $e ) {
			throw $e->getMessage ();
		}
	}
	
	// delete
	public function deleteTagPID($product_ID, $tag_div_code) {
		if (! $this->mysqli->connect_errno) {
			$query = 'DELETE FROM tag WHERE product_ID = ? AND tag_div_code = ?';
			$stmt = $this->mysqli->prepare ( $query );
			$stmt->bind_param ( 'ii', $product_ID, $tag_div_code);
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
	
	public function getTop10Cities() {
		$query = "SELECT tag_content, COUNT(tag_content) cnt FROM tag WHERE tag_div_code='1' GROUP BY tag_content ORDER BY cnt DESC, tag_content LIMIT 10;";
		$stmt = $this->mysqli->prepare ( $query );
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result($tag_content, $cnt);
		
		while ($stmt->fetch()) {
			$cities[] = $tag_content;
		}
		$stmt->free_result();
		return $cities;
	}
	
	public function getTop10Routes() {
		$query = "SELECT tag_content, COUNT(tag_content) cnt FROM tag WHERE tag_div_code='2' GROUP BY tag_content ORDER BY cnt DESC, tag_content LIMIT 10;";
		$stmt = $this->mysqli->prepare ( $query );
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result($tag_content, $cnt);
		
		while ($stmt->fetch()) {
			$routes[] = $tag_content;
		}
		$stmt->free_result();
		return $routes;
	}
	
}







?>