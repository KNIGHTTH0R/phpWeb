
<?php
require_once (dirname(__FILE__).'/abstractDAO.php');
require_once (dirname(__FILE__).'/../model/ticket.php');

/**
 * ticket DAO
 * for modify the ticket table
 *
 * @Authur Chen
 */
class ticketDAO extends abstractDAO {
	function __construct() {
		try {
			parent::__construct ();
		} catch ( MySQLi_Sql_Exception $e ) {
			throw $e;
		}
	}
	
	public function getTickets() {
		// return the whole ticket table;
		$result = $this->mysqli->query ( 'select * from ticket' );
		$products = Array ();
		
		if ($result->num_rows >= 1) {
			while ( $row = $result->fetch_assoc () ) {
				// Create a new ticket object, and add it to the array.
				$ticket = new ticket ( $row ['ticket_title'], $row ['ticket_adult'],
				$row ['ticket_enfants'], $row ['ticket_child'], $row ['ticket_teen'],
				$row ['ticket_senior'], $row ['ticket_mandatory'], $row ['product_product_ID']);
				
				$ticket->setId ( $row ['ticket_ID'] );
				$tickets [] = $ticket;
			}
			$result->free ();
			return $tickets;
		}
		$result->free ();
		return false;
	}
	
	//get a single ticket record
	public function getTicket($id) {
		$query = 'SELECT ticket_ID, ticket_title, ticket_adult, ticket_enfants, ticket_child, ticket_teen, ticket_senior, ticket_mandatory, product_product_ID FROM ticket WHERE ticket_ID = ?';
		$stmt = $this->mysqli->prepare ( $query );
		$stmt->bind_param ( 'i', $id );
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result( $ticket_ID, $ticket_title, $ticket_adult, $ticket_enfants, $ticket_child, $ticket_teen, $ticket_senior, $ticket_mandatory, $product_product_ID);
		if ($num_of_rows== 1) {
			while ($stmt->fetch()) {
				$ticket= new ticket($ticket_title, $ticket_adult, $ticket_enfants, $ticket_child, $ticket_teen, $ticket_senior, $ticket_mandatory, $product_product_ID);
			}
			
			$stmt->free_result();
			return $ticket;
		}
		
		$stmt->free_result();
		return false;
	}
	
	
	//add ticket in to ticket table
	public function addTicket($ticket) {
		try {
			if (! $this->mysqli->connect_errno) {
				$query = 'INSERT INTO ticket(ticket_title,ticket_adult,ticket_enfants,
							ticket_child,ticket_teen,ticket_senior,ticket_mandatory,
							product_product_ID) VALUES (?,?,?,?,?,?,?,?)';
				$stmt = $this->mysqli->prepare ( $query );
				
				$title = $ticket->getTitle();
				$adult = $ticket->getAdult();
				$enf =  $ticket->getEnfants();
				$child = $ticket->getChild();
				$teen = $ticket->getTeen();
				$sen = $ticket->getSenior();
				$mandatory = $ticket->getMandatory();
				$pID = $ticket->getProductId();
				
				$stmt->bind_param ( 'ssssssii', $title, $adult, $enf, $child,
						$teen,$sen,$mandatory,$pID);
				
				// Execute the statement
				$stmt->execute ();
				
				if ($stmt->error) {
					return $stmt->error;
				} else {
					return $ticket->getId() . ' ' . $title. ' added successfully!';
				}
			} else {
				return 'Could not connect to Database.';
			}
		} catch ( mysqli_sql_exception $e ) {
			throw $e->getMessage ();
		}
	}
	
	//for delete records
	public function deleteTicket($id) {
		if (! $this->mysqli->connect_errno) {
			$query = 'DELETE FROM ticket WHERE ticket_ID = ?';
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
	
	//for edit the ticket table
	public function editTicket($id,$title, $adult, $enf, $child,
	$teen,$sen,$mandatory,$pID) {
		if (! $this->mysqli->connect_errno) {
		
			$query = 'UPDATE ticket SET ticket_title = ?,ticket_adult = ?,ticket_enfants = ?,ticket_child = ?,ticket_teen = ?,
						ticket_senior = ?,ticket_mandatory = ?,product_product_ID = ? where ticket_ID = ?';
			$stmt = $this->mysqli->prepare ( $query );
			
			$stmt->bind_param ( 'ssssssiii',$title, $adult, $enf, $child,
					$teen,$sen,$mandatory,$pID,$id);
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
	
	public function getTicketPID($id) {
		$query = 'SELECT ticket_ID, ticket_title, ticket_adult, ticket_enfants, ticket_child, ticket_teen, ticket_senior, ticket_mandatory, product_product_ID FROM ticket WHERE product_product_ID = ?';
		$stmt = $this->mysqli->prepare ( $query );
		$stmt->bind_param ( 'i', $id );
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result( $ticket_ID, $ticket_title, $ticket_adult, $ticket_enfants, $ticket_child, $ticket_teen, $ticket_senior, $ticket_mandatory, $product_product_ID);
		if ($num_of_rows>= 1) {
			while ($stmt->fetch()) {
				$ticket= new ticket($ticket_title, $ticket_adult, $ticket_enfants, $ticket_child, $ticket_teen, $ticket_senior, $ticket_mandatory, $product_product_ID);
				$ticket->setId ($ticket_ID);
				$tickets[] = $ticket;
			}
			
			$stmt->free_result();
			return $tickets;
		}
		
		$stmt->free_result();
		return false;
	}
	
	public function deleteTicketPID($id) {
		if (! $this->mysqli->connect_errno) {
			$query = 'DELETE FROM ticket WHERE product_product_ID = ?';
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