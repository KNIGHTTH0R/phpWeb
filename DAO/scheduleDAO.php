
<?php
require_once (dirname(__FILE__).'/abstractDAO.php');
require_once (dirname(__FILE__).'/../model/schedule.php');

/**
 * schedule DAO
 * for modify the schedule table
 *
 * @Authur Chen
 */
class scheduleDAO extends abstractDAO {
	function __construct() {
		try {
			parent::__construct ();
		} catch ( MySQLi_Sql_Exception $e ) {
			throw $e;
		}
	}
	public function getScheduleA() {
		// return the whole schedule table;
		$result = $this->mysqli->query ( 'select * from schedule_t' );
		$scheduleA = Array ();
		
		if ($result->num_rows >= 1) {
			while ( $row = $result->fetch_assoc () ) {
				// Create a new product object, and add it to the array.
				$schedule = new schedule ( $row['schedule_title'],$row ['num_of_the_day'], $row ['description'], $row ['name_of_hotel'], $row ['product_ID'], $row ['meal_breakfast'], $row ['meal_lunch'], $row ['meal_dinner'] );
				
				$schedule->setId ( $row ['schedule_ID'] );
				$scheduleA [] = $schedule;
			}
			$result->free ();
			return $scheduleA;
		}
		$result->free ();
		return false;
	}
	
	// get single schedule record
	public function getSchedule($id) {
		$query = 'SELECT schedule_ID, schedule_title, num_of_the_day, description, name_of_hotel, meal_breakfast, meal_lunch, meal_dinner FROM schedule_t WHERE schedule_ID = ?';
		$stmt = $this->mysqli->prepare ( $query );
		$stmt->bind_param ( 'i', $id );
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result($schedule_ID, $schedule_title, $num_of_the_day, $description, $name_of_hotel, $meal_breakfast, $meal_lunch, $meal_dinner);
		
		if ($num_of_rows== 1) {
			while ($stmt->fetch()) {
				$schedule= new admin($schedule_title, $num_of_the_day, $description, $name_of_hotel, $product_ID, $meal_breakfast, $meal_lunch, $meal_dinner);
			}
			$stmt->free_result();
			return $schedule;
		}
		$stmt->free_result();
		return false;
	}
	
	// add
	public function addSchedule($schedule) {
		try {
			if (! $this->mysqli->connect_errno) {
				$query = 'INSERT INTO schedule_t(schedule_title,num_of_the_day,description,name_of_hotel,product_ID,
							meal_breakfast,meal_lunch,meal_dinner) VALUES (?,?,?,?,?,?,?,?)';
				$stmt = $this->mysqli->prepare ( $query );
				
				$title = $schedule->getTitle();
				$day = $schedule->getDay ();
				$description = $schedule->getDescription ();
				$hotel = $schedule->getHotel ();
				$productId = $schedule->getProductId ();
				$breakfast = $schedule->getBreakfast ();
				$lunch = $schedule->getLunch ();
				$dinner = $schedule->getDinner ();
				
				$stmt->bind_param ( 'sississs',$title, $day, $description, $hotel, $productId, $breakfast, $lunch, $dinner );
				
				// Execute the statement
				$stmt->execute ();
				
				if ($stmt->error) {
					return $stmt->error;
				} else {
					return $schedule->getId () . ' ' . $description . ' added successfully!';
				}
			} else {
				return 'Could not connect to Database.';
			}
		} catch ( mysqli_sql_exception $e ) {
			throw $e->getMessage ();
		}
	}
	
	// delete
	public function deleteSchedule($id) {
		if (! $this->mysqli->connect_errno) {
			$query = 'DELETE FROM schedule_t WHERE schedule_ID = ?';
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
	
	// edit
	public function editSchedule($id, $title,$day, $description, $hotel, $productId, $breakfast, $lunch, $dinner) {
		if (! $this->mysqli->connect_errno) {
			
			$query = 'UPDATE schedule_t SET schedule_title = ?, num_of_the_day = ?,description = ?,name_of_hotel = ?,product_ID =?,
							meal_breakfast = ?,meal_lunch = ?,meal_dinner = ?  where schedule_ID = ?';
			$stmt = $this->mysqli->prepare ( $query );
			
			$stmt->bind_param ( 'sississsi',$title, $day, $description, $hotel, $productId, $breakfast, $lunch, $dinner, $id );
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
	
	public function getSchedulePID($id) {
		$query = 'SELECT schedule_ID, schedule_title, num_of_the_day, description, name_of_hotel, product_ID, meal_breakfast, meal_lunch, meal_dinner FROM schedule_t WHERE product_ID = ?';
		$stmt = $this->mysqli->prepare ( $query );
		$stmt->bind_param ( 'i', $id );
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result($schedule_ID, $schedule_title, $num_of_the_day, $description, $name_of_hotel, $product_ID, $meal_breakfast, $meal_lunch, $meal_dinner);
		
		if ($num_of_rows >= 1) {
			while ($stmt->fetch()) {
				$schedule= new schedule($schedule_title, $num_of_the_day, $description, $name_of_hotel, $product_ID, $meal_breakfast, $meal_lunch, $meal_dinner);
				$schedule->setId($schedule_ID);
				$scheduleA[] = $schedule;
			}
			$stmt->free_result();
			return $scheduleA;
		}
		$stmt->free_result();
		return false;
	}
	
	public function deleteSchedulePID($id) {
		if (! $this->mysqli->connect_errno) {
			$query = 'DELETE FROM schedule_t WHERE product_ID = ?';
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
	
	public function getScheduleByDay($productId,$day){
		$query = 'SELECT schedule_ID, schedule_title, num_of_the_day, description, name_of_hotel, product_ID, meal_breakfast, meal_lunch, meal_dinner FROM schedule_t WHERE product_ID = ?  and num_of_the_day = ?';
		$stmt = $this->mysqli->prepare ( $query );
		$stmt->bind_param ('ii',$productId,$day);
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result($schedule_ID, $schedule_title, $num_of_the_day, $description, $name_of_hotel, $product_ID, $meal_breakfast, $meal_lunch, $meal_dinner);
		
		if ($num_of_rows== 1) {
			while ($stmt->fetch()) {
				$schedule= new schedule($schedule_title, $num_of_the_day, $description, $name_of_hotel, $product_ID, $meal_breakfast, $meal_lunch, $meal_dinner);
				$schedule->setId($product_ID);
			}
			$stmt->free_result();
			return $schedule;
		}
		$stmt->free_result();
		return false;
	}
	
	public function getCount($id){
		$query = ('SELECT count(*) as cnt FROM schedule_t where product_ID = ?');
		$stmt = $this->mysqli->prepare($query);
		$stmt->bind_param('i',$id);
		$stmt->execute();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result($cnt);
		
		if ($num_of_rows== 1) {
			while ($stmt->fetch()) {
				$counter = $cnt;
			}
			$stmt->free_result();
			return $counter;
		}
		$stmt->free_result();
		return false;
	}
}

?>