<?php 
require_once (dirname(__FILE__).'/abstractDAO.php');
require_once(dirname(__FILE__).'/../model/admin.php');

/**
 * 
 * admin DAO
 * for modify the admin table
 * 
 * @author Chen
 **/

class adminDAO extends abstractDAO{
	function __construct(){
		
		try{
			parent::__construct();
		}catch (MySQLi_Sql_Exception $e){
			throw $e;
		}
	}
	
	public function getAdmins(){
		//return the whole table
		$result = $this->mysqli->query('select * from admin');
		$admins =Array();
		
		if($result->num_rows >= 1){
			while($row = $result->fetch_assoc()){
				//Create a new Category object, and add it to the array.
				$admin = new admin($row['admin_name'],$row['admin_password']);
			$admins[] = $admin;
			}
			$result->free();
			return $admins;
		}
		$result->free();
		return false;
	}
	
	//method for get single record
	public function getAdmin($name){
		$query = 'SELECT admin_name, admin_password FROM admin WHERE admin_name = ?';
		$stmt = $this->mysqli->prepare($query);
		$stmt->bind_param('s', $name);
		$stmt->execute();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result($admin_name, $admin_password);
		
		while ($stmt->fetch()) {
			$admin= new admin($admin_name, $admin_password);
		}
		
		$stmt->free_result();
		return $admin;
	}
	
	
	//function for adding the category into the database
	public function addAdmin($admin) {
		try {
			if (! $this->mysqli->connect_errno) {
				$query = 'INSERT INTO admin(admin_name,admin_password) VALUES (?,?)';
				$stmt = $this->mysqli->prepare ( $query );
				$name = $admin->getName();
				$password = $admin->getPassword();
				$stmt->bind_param ( 'ss', $name,$password);
				
				// Execute the statement
				$stmt->execute ();
				
				if ($stmt->error) {
					return $stmt->error;
				} else {
					return $admin->getName() . ' ' . $admin->getPassword() . ' added successfully!';
				}
			} else {
				return 'Could not connect to Database.';
			}
		} catch ( mysqli_sql_exception $e ) {
			throw $e->getMessage ();
		}
	}
	
	public function deleteAdmin($name) {
		if (! $this->mysqli->connect_errno) {
			$query = 'DELETE FROM admin WHERE admin_name = ?';
			$stmt = $this->mysqli->prepare ( $query );
			$stmt->bind_param ( 's', $name );
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
	
	public function editCategory($oriName,$name,$password) {
		if (! $this->mysqli->connect_errno) {
			
			$query = 'UPDATE admin SET admin_name = ?, admin_password = ? where admin_name = ?';
			$stmt = $this->mysqli->prepare ( $query );
			
			$stmt->bind_param ( 'sss', $name,$password,$oriName );
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
	
	//method for get single record
	public function checkPassword($name, $password){
		$query = 'SELECT admin_name, admin_password FROM admin WHERE admin_name = ? and admin_password = ?';
		$stmt = $this->mysqli->prepare($query);
		$stmt->bind_param('ss', $name, $password);
		$stmt->execute();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result($admin_name, $admin_password);
		
		while ($stmt->fetch()) {
			$admin= new admin($admin_name, $admin_password);
		}
		
		$stmt->free_result();
		return $admin;
	}
}







?>