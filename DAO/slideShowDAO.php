
<?php
require_once (dirname(__FILE__). '/../DAO/abstractDAO.php');
require_once (dirname(__FILE__). '/../model/slideShow.php');

/**
 * product DAO
 * for modify the slideShow  table
 *
 * @Authur Chen
 */
class slideShowDAO extends abstractDAO {
	function __construct() {
		try {
			parent::__construct ();
		} catch ( MySQLi_Sql_Exception $e ) {
			throw $e;
		}
	}
	
	public function getSlideShows() {
		// return the whole slideShow table;
		$result = $this->mysqli->query ( 'select * from slideShow' );
		$slideShows = Array ();
		
		if ($result->num_rows >= 1) {
			while ( $row = $result->fetch_assoc () ) {
				// Create a new object, and add it to the array.
				 $slideShow = new slideShow ($row['slideShow_title'],$row['slideShow_descriptionA'],$row['slideShow_descriptionB'],$row['slideShow_link'],$row['URL']);
				// $slideShow = new slideShow (1,1,1,$row['product_ID']);
				 
				$slideShow->setId ( $row ['slideShow_ID'] );
				$slideShows [] = $slideShow;
			}
			$result->free ();
			return $slideShows;
		}
		$result->free ();
		return false;
	}
	
	public function getSlideShow($id) {
		$query = 'SELECT slideShow_ID, slideShow_title, slideShow_descriptionA, slideShow_descriptionB, slideShow_link, URL FROM slideShow WHERE slideShow_ID = ?';
		$stmt = $this->mysqli->prepare ( $query );
		$stmt->bind_param ( 'i', $id );
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result($slideShow_ID, $slideShow_title, $slideShow_descriptionA, $slideShow_descriptionB, $slideShow_link, $URL);
		
		if ($num_of_rows== 1) {
			while ($stmt->fetch()) {
				$slideShow= new slideShow($slideShow_title, $slideShow_descriptionA, $slideShow_descriptionB, $slideShow_link, $URL);
				$slideShow->setId($slideShow_ID);
			}
			
			$stmt->free_result();
			return $admin;
		}
		
		$stmt->free_result();
		return false;
	}
	
	public function addSlideShow($slideShow) {
		try {
			if (! $this->mysqli->connect_errno) {
				$query = 'insert into slideShow (slideShow_title,slideShow_descriptionA,slideShow_descriptionB,slideShow_link,URL)
							values(?,?,?,?,?);';
				$stmt = $this->mysqli->prepare ( $query );
				$title = $slideShow->getTitle();
				$descriptionA = $slideShow->getDescriptionA();
				$descriptionB = $slideShow->getDescriptionB();
				$URL = $slideShow ->getURL();
				$link = $slideShow->getLink();
				
				$stmt->bind_param ( 'ssssi',$title,$descriptionA,$descriptionB,$link,$URL);
				
				// Execute the statement
				$stmt->execute ();
				
				if ($stmt->error) {
					return $stmt->error;
				} else {
					return $slideShow->getId() .' added successfully!';
				}
			} else {
				return 'Could not connect to Database.';
			}
		} catch ( mysqli_sql_exception $e ) {
			throw $e->getMessage ();
		}
	}
	
	public function deleteSlideShow($id) {
		if (! $this->mysqli->connect_errno) {
			$query = 'DELETE FROM slideShow WHERE slideShow_ID = ?';
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
	
	public function editSlideShow($id,$title,$descriptionA,$descriptionB,$link,$URL) {
		if (! $this->mysqli->connect_errno) {
		
			$query = 'UPDATE slideShow SET slideShow_title = ?,slideShow_descriptionA = ?,slideShow_descriptionB = ?, slideShow_link = ?,URL = ? where slideShow_ID = ?';
			$stmt = $this->mysqli->prepare ( $query );
			$stmt->bind_param ( 'ssssii',$title,$descriptionA,$descriptionB,$link,$URL, $id );
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