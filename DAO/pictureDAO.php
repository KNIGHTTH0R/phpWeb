
<?php
require_once (dirname ( __FILE__ ) . '/abstractDAO.php');
require_once (dirname ( __FILE__ ) . '/../model/picture.php');

/**
 * picture DAO
 * for modify the picture table
 *
 * @Authur Chen
 */
class pictureDAO extends abstractDAO {
	function __construct() {
		try {
			parent::__construct ();
		} catch ( MySQLi_Sql_Exception $e ) {
			throw $e;
		}
	}
	public function getPictures() {
		// return the picture table;
		$result = $this->mysqli->query ( 'select * from picture' );
		$pictures = Array ();
		
		if ($result->num_rows >= 1) {
			while ( $row = $result->fetch_assoc () ) {
				// Create a new picture object, and add it to the array.
				$picture = new picture ( $row ['picture_url'], $row ['picture_description'], $row ['product_product_ID'], $row ['picture_original_name'], $row ['picture_saved_name'] );
				$picture->setPictureID ( $row ['picture_ID'] );
				$pictures [] = $picture;
			}
			$result->free ();
			return $pictures;
		}
		$result->free ();
		return false;
	}
	
	public function getPictureByProduct($product_ID) {
		$sql = 'SELECT picture_ID, picture_url, picture_description, product_product_ID, picture_original_name, picture_saved_name FROM picture WHERE product_product_ID = ?';
		
		if ($query = $this->mysqli->prepare ( $sql )) {
			$query->bind_param ( 'i', $product_ID );
			$query->execute ();
			/* Store the result (to get properties) */
			$query->store_result ();
			
			/* Get the number of rows */
			$num_of_rows = $query->num_rows;
			
			/* Bind the result to variables */
			$query->bind_result ( $picture_ID, $picture_url, $picture_description, $product_product_ID, $picture_original_name, $picture_saved_name );
			
			if ($num_of_rows >= 1) {
				while ( $query->fetch () ) {
					$picture = new picture ( $picture_url, $picture_description, $product_product_ID, $picture_original_name, $picture_saved_name );
					$picture->setPictureID ( $picture_ID );
					$pictures [] = $picture;
				}
				
				$query->free_result ();
				return $pictures;
			}
			$query->free_result ();
			return false;
		} else {
			// error !! don't go further
			var_dump ( $this->db->error );
		}
	}
	public function getFirstPictureByProduct($product_ID) {
		$sql = 'SELECT picture_ID, picture_url, picture_description, product_product_ID, picture_original_name, picture_saved_name FROM picture WHERE product_product_ID = ?';
		
		if ($query = $this->mysqli->prepare ( $sql )) {
			$query->bind_param ( 'i', $product_ID );
			$query->execute ();
			
			/* Store the result (to get properties) */
			$query->store_result ();
			
			/* Get the number of rows */
			$num_of_rows = $query->num_rows;
			
			/* Bind the result to variables */
			$query->bind_result ( $picture_ID, $picture_url, $picture_description, $product_product_ID, $picture_original_name, $picture_saved_name );
			
			if ($num_of_rows >= 1) {
				while ( $query->fetch () ) {
					$picture = new picture ( $picture_url, $picture_description, $product_product_ID, $picture_original_name, $picture_saved_name );
					$picture->setPictureID ( $picture_ID );
					break;
				}
				
				$query->free_result ();
				return $picture;
			}
			$query->free_result ();
			return false;
		} else {
			// error !! don't go further
			var_dump ( $this->db->error );
		}
	}
	public function getPicture($picture_ID) {
		$query = 'SELECT picture_ID, picture_url, picture_description, product_product_ID, picture_original_name, picture_saved_name FROM picture WHERE picture_ID = ?';
		$stmt = $this->mysqli->prepare ( $query );
		$stmt->bind_param ( 'i', $picture_ID );
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result ();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result ( $picture_ID, $picture_url, $picture_description, $product_product_ID, $picture_original_name, $picture_saved_name );
		
		if ($num_of_rows == 1) {
			while ( $stmt->fetch () ) {
				$picture = new picture ( $picture_url, $picture_description, $product_product_ID, $picture_original_name, $picture_saved_name );
				$picture->setPictureID ( $picture_ID );
			}
			
			$stmt->free_result ();
			return $picture;
		}
		$stmt->free_result ();
		return false;
	}
	public function addPicture($picture) {
		try {
			if (! $this->mysqli->connect_errno) {
				$query = "INSERT INTO picture(picture_url,picture_description,product_product_ID,picture_original_name,picture_saved_name) VALUES (?,?,?,?,(SELECT CONCAT(DATE_FORMAT(now(), '%Y%m%d%H%i%s'),LPAD((SELECT MAX(picture_ID) FROM picture)+1, 8, '0')) AS name FROM DUAL))";
				$stmt = $this->mysqli->prepare ( $query );
				$url = $picture->getPictureURL ();
				$des = $picture->getPictureDescription ();
				$proID = $picture->getPictureProductID ();
				$originalName = $picture->getPictureOriginalName ();
				$stmt->bind_param ( 'ssi', $url, $des, $proID, $originalName );
				
				// Execute the statement
				$stmt->execute ();
				
				if ($stmt->error) {
					return $stmt->error;
				} else {
					return $picture->getPictureID () . ' ' . $picture->getPictureDescription () . ' added successfully!';
				}
			} else {
				return 'Could not connect to Database.';
			}
		} catch ( mysqli_sql_exception $e ) {
			throw $e->getMessage ();
		}
	}
	public function deletePicture($pictureId) {
		if (! $this->mysqli->connect_errno) {
			$query = 'DELETE FROM picture WHERE picture_ID = ?';
			$stmt = $this->mysqli->prepare ( $query );
			$stmt->bind_param ( 'i', $pictureId );
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
	public function editPicture($url, $des, $proID, $id) {
		if (! $this->mysqli->connect_errno) {
			
			$query = 'UPDATE picture SET picture_url = ?, picture_description = ?, product_product_ID = ? where picture_ID = ?';
			$stmt = $this->mysqli->prepare ( $query );
			
			$stmt->bind_param ( 'ssii', $url, $des, $proID, $id );
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
	public function getCount($id) {
		$query = ('SELECT count(*) as cnt FROM picture where product_product_ID = ?');
		$stmt = $this->mysqli->prepare ( $query );
		
		$stmt->bind_param ( 'i', $id );
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result ();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result ( $cnt );
		
		if ($num_of_rows == 1) {
			while ( $stmt->fetch () ) {
				$counter = $cnt;
			}
			
			$stmt->free_result ();
			return $counter;
		}
		$stmt->free_result ();
		return false;
	}
	public function getPicturePID($product_ID) {
		$query = 'SELECT picture_ID, picture_url, picture_description, product_product_ID, picture_original_name, picture_saved_name FROM picture WHERE product_product_ID = ?';
		$stmt = $this->mysqli->prepare ( $query );
		$stmt->bind_param ( 'i', $product_ID );
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result ();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result ( $picture_ID, $picture_url, $picture_description, $product_product_ID, $picture_original_name, $picture_saved_name );
		
		if ($num_of_rows >= 1) {
			while ( $stmt->fetch () ) {
				$picture = new picture ( $picture_url, $picture_description, $product_product_ID, $picture_original_name, $picture_saved_name );
				$picture->setPictureID ( $picture_ID );
				$pictures [] = $picture;
			}
			
			$stmt->free_result ();
			return $pictures;
		}
		$stmt->free_result ();
		return false;
	}
	public function addPictureAdmin($picture) {
		try {
			if (! $this->mysqli->connect_errno) {
				$query = "INSERT INTO picture(picture_url,picture_description,product_product_ID,picture_original_name,picture_saved_name) VALUES (?,?,?,?,?)";
				$stmt = $this->mysqli->prepare ( $query );
				$url = $picture->getPictureURL ();
				$des = $picture->getPictureDescription ();
				$proID = $picture->getPictureProductID ();
				$originalName = $picture->getPictureOriginalName ();
				$savedName = $picture->getPictureSavedName ();
				$stmt->bind_param ( 'ssiss', $url, $des, $proID, $originalName, $savedName );
				
				// Execute the statement
				$stmt->execute ();
				
				if ($stmt->error) {
					return $stmt->error;
				} else {
					return $picture->getPictureID () . ' ' . $picture->getPictureDescription () . ' added successfully!';
				}
			} else {
				return 'Could not connect to Database.';
			}
		} catch ( mysqli_sql_exception $e ) {
			throw $e->getMessage ();
		}
	}
	public function deletePicturePID($id) {
		if (! $this->mysqli->connect_errno) {
			$query = 'DELETE FROM picture WHERE product_ID = ?';
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
}

?>