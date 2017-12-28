<?php 

/**
Abstact DAO
prepare database information for future usage<br>

@Authur Chen*/
mysqli_report(MYSQLI_REPORT_STRICT);
/**throw error as exception*/

/**Start of the class*/
class abstractDAO {
	protected $mysqli;
	
	protected static $DATABASE_HOST = "ist.cucik96mtzwv.us-east-2.rds.amazonaws.com"; // hard coded database address
	
	protected static $DATABASE_USERNAME = "admin"; //name of the user name
	 
	protected static $DATABASE_DBNAME = "ist"; // name of the database
		
	protected static $DATABASE_PASSWORD = "nimda123";// password
	
	
	/**
	Default constructor
	create a instance of this DAO and initial the database conection
	@throw error if connection failed
	*/
	function __construct(){
		try{
			$this->mysqli = new mysqli(self::$DATABASE_HOST,self::$DATABASE_USERNAME,self::$DATABASE_PASSWORD,self::$DATABASE_DBNAME);
			
		}catch(MySQLi_Sql_Exception $e){
			throw $e;
		}
	}
	
	/**getter of the instance of the mysqli*/
	public function getMysqli(){
		return $this->$mysqli;
	}
}

?>