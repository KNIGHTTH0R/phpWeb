
<?php
require_once (dirname(__FILE__).'/abstractDAO.php');
require_once (dirname(__FILE__).'/../model/position.php');

/**
 * position DAO
 * for modify the position table
 *
 * @Authur Chen
 */
class positionDAO extends abstractDAO {
	function __construct() {
		try {
			parent::__construct ();
		} catch ( MySQLi_Sql_Exception $e ) {
			throw $e;
		}
	}
 	
	public function getPositions() {
		// return the whole position table;
		$result = $this->mysqli->query ( 'select * from position' );
		$postions = Array ();
		
		if ($result->num_rows >= 1) {
			while ( $row = $result->fetch_assoc () ) {
				// Create a new position object, and add it to the array.
				$position = new position ();
				$position->setValue( $row['position_AOne'],$row['position_ATwo'],$row['position_AThree'],$row['position_AFour'], $row['position_AFive'],$row['position_ASix'],$row['position_BOne'],$row['position_BTwo'],$row['position_BThree'],$row['position_BFour'],$row['position_COne'],$row['position_CTwo'],$row['position_CThree'],$row['position_CFour'],$row['position_DOne'],$row['position_DTwo'],$row['position_DThree'],$row['position_DFour'],
						$row['position_EOne'],$row['position_ETwo'],$row['position_EThree'],$row['position_EFour'],$row['position_FOne'],$row['position_FTwo'],$row['position_FThree'],$row['position_FFour'],$row['position_GOne'],$row['position_GTwo'],$row['position_GThree'],$row['position_GFour'],$row['position_HOne'],$row['position_HTwo'],$row['position_HThree'],$row['position_HFour']);
				$position->setId ( $row ['position_ID'] );
				$positions [] = $position;
				
			}
			$result->free ();
			return $positions;
		}
		$result->free ();
		return false;
	}
	
	public function getPosition($id) {
		$query = 'SELECT  position_ID, position_AOne, position_ATwo, position_AThree, position_AFour, position_AFive, position_ASix, position_BOne, position_BTwo, position_BThree, position_BFour, position_COne, position_CTwo, position_CThree, position_CFour, position_DOne, position_DTwo, position_DThree, position_DFour, position_EOne, position_ETwo, position_EThree, position_EFour, position_FOne, position_FTwo, position_FThree, position_FFour, position_GOne, position_GTwo, position_GThree, position_GFour, position_HOne, position_HTwo, position_HThree, position_HFourFROM FROM position WHERE position_ID = ?';
		$stmt = $this->mysqli->prepare ( $query );
		$stmt->bind_param ( 'i', $id );
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result( $position_ID, $position_AOne, $position_ATwo, $position_AThree, $position_AFour, $position_AFive, $position_ASix, $position_BOne, $position_BTwo, $position_BThree, $position_BFour, $position_COne, $position_CTwo, $position_CThree, $position_CFour, $position_DOne, $position_DTwo, $position_DThree, $position_DFour, $position_EOne, $position_ETwo, $position_EThree, $position_EFour, $position_FOne, $position_FTwo, $position_FThree, $position_FFour, $position_GOne, $position_GTwo, $position_GThree, $position_GFour, $position_HOne, $position_HTwo, $position_HThree, $position_HFour);
		
		if ($num_of_rows == 1) {
			while ($stmt->fetch()) {
				$position = new position($position_AOne, $position_ATwo, $position_AThree, $position_AFour, $position_AFive, $position_ASix,
						$position_BOne, $position_BTwo, $position_BThree, $position_BFour,
						$position_COne, $position_CTwo, $position_CThree, $position_CFour,
						$position_DOne, $position_DTwo, $position_DThree, $position_DFour,
						$position_EOne, $position_ETwo, $position_EThree, $position_EFour,
						$position_FOne, $position_FTwo, $position_FThree, $position_FFour,
						$position_GOne, $position_GTwo, $position_GThree, $position_GFour,
						$position_HOne, $position_HTwo, $position_HThree, $position_HFour);
				$position->setId($position_ID);
			}
			$stmt->free_result();
			return $position;
		}
		$stmt->free_result();
		return false;
	}
	
	public function addPosition($position) {
		try {
			if (! $this->mysqli->connect_errno) {
				$query = 'insert into position (position_AOne,position_ATwo,position_AThree,position_AFour,position_AFive,position_ASix,position_BOne,position_BTwo,position_BThree,position_BFour,position_COne,position_CTwo,position_CThree,position_CFour,position_DOne,position_DTwo,position_DThree,position_DFour,position_EOne,position_ETwo,position_EThree,position_EFour,position_FOne,position_FTwo,position_FThree,position_FFour,position_GOne,position_GTwo,position_GThree,position_GFour,position_HOne,position_HTwo,position_HThree,position_HFour)
							values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);
							';
				$stmt = $this->mysqli->prepare ( $query );

				$a1 = $position->getA1();
				$a2 = $position->getA2();
				$a3 = $position->getA3();
				$a4 = $position->getA4();
				$a5 = $position->getA5();
				$a6 = $position->getA6();
				$b1 = $position->getB1();
				$b2 = $position->getB2();
				$b3 = $position->getB3();
				$b4 = $position->getB4();
				$c1 = $position->getC1();
				$c2 = $position->getC2();
				$c3 = $position->getC3();
				$c4 = $position->getC4();
				$d1 = $position->getD1();
				$d2 = $position->getD2();
				$d3 = $position->getD3();
				$d4 = $position->getD4();
				$e1 = $position->getE1();
				$e2 = $position->getE2();
				$e3 = $position->getE3();
				$e4 = $position->getE4();
				$f1 = $position->getF1();
				$f2 = $position->getF2();
				$f3 = $position->getF3();
				$f4 = $position->getF4();
				$g1 = $position->getG1();
				$g2 = $position->getG2();
				$g3 = $position->getG3();
				$g4 = $position->getG4();
				$h1 = $position->getH1();
				$h2 = $position->getH2();
				$h3 = $position->getH3();
				$h4 = $position->getH4();
				
				
				$stmt->bind_param ( 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiii',$a1,$a2,$a3,$a4,$a5,$a6,$b1,$b2,$b3,$b4,$c1,$c2,$c3,$c4,$d1,$d2,$d3,$d4,$e1,$e2,$e3,$e4,$f1,$f2,$f3,$f4,$g1,$g2,$g3,$g4,$h1,$h2,$h3,$h4);
				
				// Execute the statement
				$stmt->execute ();
				
				if ($stmt->error) {
					return $stmt->error;
				} else {
					return $position->getId() . ' added successfully!';
				}
			} else {
				return 'Could not connect to Database.';
			}
		} catch ( mysqli_sql_exception $e ) {
			throw $e->getMessage ();
		}
	}
	
	public function deletePosition($id) {
		if (! $this->mysqli->connect_errno) {
			$query = 'DELETE FROM position WHERE position_ID = ?';
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
	
	public function editPosition($id,$a1,$a2,$a3,$a4,$a5,$a6,$b1,$b2,$b3,$b4,$c1,$c2,$c3,$c4,$d1,$d2,$d3,$d4,$e1,$e2,$e3,$e4,$f1,$f2,$f3,$f4,$g1,$g2,$g3,$g4,$h1,$h2,$h3,$h4) {
		if (! $this->mysqli->connect_errno) {
		
			$query = 'UPDATE position SET position_AOne = ?,position_ATwo =  ?,position_AThree =?,position_AFour = ?,position_AFive = ?,position_ASix = ?,position_BOne = ? ,position_BTwo = ?,position_BThree = ?,position_BFour = ? ,position_COne = ? ,position_CTwo = ?,position_CThree = ? ,position_CFour = ?,position_DOne = ?,position_DTwo = ?,position_DThree = ? ,position_DFour = ?,position_EOne = ?,position_ETwo = ?,position_EThree = ?,position_EFour = ?,position_FOne = ?,position_FTwo = ?,position_FThree = ?,position_FFour = ?,position_GOne = ?,position_GTwo = ?,position_GThree = ?,position_GFour = ?,position_HOne = ?,position_HTwo = ?,position_HThree = ? ,position_HFour = ? where position_ID = ?';
			$stmt = $this->mysqli->prepare ( $query );
			
			$stmt->bind_param ( 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii',$a1,$a2,$a3,$a4,$a5,$a6,$b1,$b2,$b3,$b4,$c1,$c2,$c3,$c4,$d1,$d2,$d3,$d4,$e1,$e2,$e3,$e4,$f1,$f2,$f3,$f4,$g1,$g2,$g3,$g4,$h1,$h2,$h3,$h4, $id );
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