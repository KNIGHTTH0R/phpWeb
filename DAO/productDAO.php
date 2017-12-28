
<?php
require_once (dirname(__FILE__).'/abstractDAO.php');
require_once (dirname(__FILE__).'/../model/product.php');

/**
 * product DAO
 * for modify the product table
 *
 * @Authur Chen
 */
class productDAO extends abstractDAO {
	function __construct() {
		try {
			parent::__construct ();
		} catch ( MySQLi_Sql_Exception $e ) {
			throw $e;
		}
	}
	
 	
	public function getProducts() {
		// return the whole product table;
		$result = $this->mysqli->query ( 'select * from product' );
		$products = Array ();
		
		if ($result->num_rows >= 1) {
			while ( $row = $result->fetch_assoc () ) {
				// Create a new product object, and add it to the array.
				$product = new product ( $row['product_title'], $row ['tour_type'], $row ['city_of_start'],
				$row ['city_of_end'], $row ['number_of_days'], $row ['product_description'],
				$row ['terms_and_condition'], $row['price_included'],$row['price_not_included'], $row ['pdf_link'], $row ['prices_single'],
				$row ['prices_double'], $row ['prices_triple'], $row ['prices_quadruple'],
				$row ['prices_discount'], $row ['category_category_ID'] );
				
				$product->setTax($row ['prices_tax']);
				$product->setId ( $row ['product_ID'] );
				$products [] = $product;
			}
			$result->free ();
			return $products;
		}
		$result->free ();
		return false;
	}
	public function getProduct($id) {
		$query = 'SELECT product_title, tour_type, city_of_start, city_of_end, number_of_days, product_description, terms_and_condition, price_included, price_not_included, pdf_link, prices_single, prices_double, prices_triple, prices_quadruple, prices_discount, category_category_ID,	prices_tax FROM product WHERE product_ID = ?';
		$stmt = $this->mysqli->prepare ( $query );
		$stmt->bind_param ( 'i', $id );
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result($product_title, $tour_type, $city_of_start, $city_of_end, $number_of_days, $product_description, $terms_and_condition, $price_included, $price_not_included, $pdf_link, $prices_single, $prices_double, $prices_triple, $prices_quadruple, $prices_discount, $category_category_ID,$prices_tax);
		
		while ($stmt->fetch()) {
			$product = new product($product_title, $tour_type, $city_of_start, $city_of_end, $number_of_days, $product_description,
					$terms_and_condition, $price_included, $price_not_included, $pdf_link,
					$prices_single, $prices_double, $prices_triple, $prices_quadruple, $prices_discount, $category_category_ID);
			$product->setId($id);
			$product->setTax($prices_tax);
		}
		
		$stmt->free_result();
		return $product;
	}
	
	public function getProductByCategory($categoryId){
		$query = 'SELECT product_title, tour_type, city_of_start, city_of_end, number_of_days, product_description, terms_and_condition, price_included, price_not_included, pdf_link, prices_single, prices_double, prices_triple, prices_quadruple, prices_discount, category_category_ID,prices_tax FROM product WHERE category_category_ID = ?';
		$stmt = $this->mysqli->prepare ( $query );
		$stmt->bind_param ('i', $categoryId);
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result($product_title, $tour_type, $city_of_start, $city_of_end, $number_of_days, $product_description, $terms_and_condition, $price_included, $price_not_included, $pdf_link, $prices_single, $prices_double, $prices_triple, $prices_quadruple, $prices_discount, $category_category_ID,$prices_tax);
		
		if ($num_of_rows >= 1) {
			while ($stmt->fetch()) {
				$product = new product($product_title, $tour_type, $city_of_start, $city_of_end, $number_of_days, $product_description,
						$terms_and_condition, $price_included, $price_not_included, $pdf_link,
						$prices_single, $prices_double, $prices_triple, $prices_quadruple, $prices_discount, $category_category_ID);
				$product->setId ( $row ['product_ID'] );
				$product->setTax ( $row ['prices_tax']);
				$products[] = $product;
			}
			
			$stmt->free_result();
			return $products;
		}
		$stmt->free_result();
		return false;
	}
	
	public function addProduct($product) {
		try {
			if (! $this->mysqli->connect_errno) {
				$query = 'INSERT INTO product(product_title,tour_type,city_of_start,city_of_end,number_of_days,
							product_description,terms_and_condition,price_included,price_not_included,pdf_link,
							prices_single,prices_double,prices_triple,prices_quadruple,
							prices_discount,category_category_ID,prices_tax) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
				$stmt = $this->mysqli->prepare ( $query );
				
				$title = $product->getTitle();
				$tourType = $product->getTourType();
				$cos = $product->getCityOfStart();
				$coe = $product->getCityOfEnd();
				$nod = $product->getNumberOfDays();
				$description = $product->getDescription();
				$terms = $product->getTerms();
				$priceIncluded = $product->getPriceIncluded();
				$priceNotIncluded = $product->getPriceNotIncluded();
				$pdf = $product->getPdf();
				$single = $product->getSingle();
				$double = $product->getDouble();
				$tripe = $product->getTriple();
				$quard = $product->getQuard();
				$discount = $product->getDiscount();
				$categoryId = $product->getCategoryId();
				$tax = $product->getTax();
				
				$stmt->bind_param ( 'sissssssssddddiis',$title, $tourType, $cos, $coe, $nod,
						$description,$terms,$priceIncluded,$priceNotIncluded,
						$pdf,$single,$double,$tripe,$quard,$discount,$categoryId,$tax);
				
				// Execute the statement
				$stmt->execute ();
				
				if ($stmt->error) {
					return $stmt->error;
				} else {
					return $title. ' added successfully!';
				}
			} else {
				return 'Could not connect to Database.';
			}
		} catch ( mysqli_sql_exception $e ) {
			throw $e->getMessage ();
		}
	}
	
	public function deleteProduct($id) {
		if (! $this->mysqli->connect_errno) {
			$query = 'DELETE FROM product WHERE product_ID = ?';
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

	public function editProduct($id,$title,$tourType, $cos, $coe, $nod,
			$description,$terms,$priceIncluded,$priceNotIncluded,
			$pdf,$single,$double,$tripe,$quard,$discount,$categoryId,$tax) {
				if (! $this->mysqli->connect_errno) {
					
					$query = 'UPDATE product SET product_title = ? , tour_type = ?,city_of_start = ?,city_of_end = ?,number_of_days = ?,product_description = ?,
						terms_and_condition = ?,price_included = ?, price_not_included = ? ,
						pdf_link = ?,prices_single = ?,prices_double = ?,prices_triple = ?,prices_quadruple = ?,
						prices_discount = ?,category_category_ID = ?,prices_tax = ?  where product_ID = ?';
					$stmt = $this->mysqli->prepare ( $query );
					
					$stmt->bind_param ( 'sississsssddddiisi',$title, $tourType, $cos, $coe, $nod,
							$description,$terms,$priceIncluded,$priceNotIncluded,
							$pdf,$single,$double,$tripe,$quard,$discount,$categoryId,$tax, $id );
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
	
	public function editProductAdmin($product) {
		if (! $this->mysqli->connect_errno) {
			$id = $product->getID();
			$title = $product->getTitle();
			$tourType = $product->getTourType();
			$cos = $product->getCityOfStart();
			$coe = $product->getCityOfEnd();
			$nod = $product->getNumberOfDays();
			$description = $product->getDescription();
			$terms = $product->getTerms();
			$priceIncluded = $product->getPriceIncluded();
			$priceNotIncluded= $product->getPriceNotIncluded();
			$pdf = $product->getPdf();
			$single = $product->getSingle();
			$double = $product->getDouble();
			$tripe = $product->getTriple();
			$quard = $product->getQuard();
			$discount = $product->getDiscount();
			$categoryId = $product->getCategoryId();
			$tax = $product->getTax();
			
			$query = 'UPDATE product SET product_title = ? , tour_type = ?,city_of_start = ?,city_of_end = ?,number_of_days = ?,product_description = ?,
				terms_and_condition = ?, price_included = ?, price_not_included = ?, pdf_link = ?,
				prices_single = ?,prices_double = ?,prices_triple = ?,prices_quadruple = ?,
				prices_discount = ?,category_category_ID = ? ,prices_tax = ?  where product_ID = ?';
			$stmt = $this->mysqli->prepare ( $query );
			
			$stmt->bind_param ( 'sississsssddddiisi',$title, $tourType, $cos, $coe, $nod,
					$description,$terms,$priceIncluded,$priceNotIncluded,$pdf,$single,$double,$tripe,$quard,$discount,$categoryId,$tax, $id );
			$stmt->execute ();
			
			if ($stmt->error) {
				return $stmt->error;
			} else {
				return $product->getId() . ' ' . $title. ' edited successfully!';
			}
			
		} else {
			return false;
		}
	}
	
	public function getCount(){
		$result = $this->mysqli->query('SELECT count(*) as counter FROM product');
	
		while($row = mysqli_fetch_assoc($result)){
			$counter = $row['counter'];
		} 
		
		return $counter;
	}
	
	public function getPagesByCategory($id,$limit,$offset,$tagContent,$tagDivCode){
		
		if (!empty($tagContent) && !empty($tagDivCode)) {
			$query = 'SELECT product_ID, product_title, tour_type, city_of_start, city_of_end, number_of_days, 
							product_description, terms_and_condition, price_included, price_not_included, pdf_link, 
							prices_single, prices_double, prices_triple, prices_quadruple, prices_discount, category_category_ID ,prices_tax
						FROM product 
						WHERE category_category_ID = ? AND product_ID IN (SELECT DISTINCT product_ID FROM tag WHERE tag_content=? and tag_div_code=?)
						ORDER BY product_ID DESC LIMIT ? OFFSET ?';
			$stmt = $this->mysqli->prepare ( $query );
			$stmt->bind_param ('isiii',$id,$tagContent,$tagDivCode,$limit,$offset);
		} else {
			$query = 'SELECT product_ID, product_title, tour_type, city_of_start, city_of_end, number_of_days, product_description, terms_and_condition, price_included, price_not_included, pdf_link, prices_single, prices_double, prices_triple, prices_quadruple, prices_discount, category_category_ID ,prices_tax FROM product WHERE category_category_ID = ? ORDER BY product_ID DESC LIMIT ? OFFSET ?';
			$stmt = $this->mysqli->prepare ( $query );
			$stmt->bind_param ('iii',$id,$limit,$offset);
		}
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result($product_ID, $product_title, $tour_type, $city_of_start, $city_of_end, $number_of_days, $product_description, $terms_and_condition, $price_included, $price_not_included, $pdf_link, $prices_single, $prices_double, $prices_triple, $prices_quadruple, $prices_discount, $category_category_ID,$tax);
		
		if ($num_of_rows >= 1) {
			while ($stmt->fetch()) {
				$product = new product($product_title, $tour_type, $city_of_start, $city_of_end, $number_of_days, $product_description,
						$terms_and_condition, $price_included, $price_not_included, $pdf_link,
						$prices_single, $prices_double, $prices_triple, $prices_quadruple, $prices_discount, $category_category_ID);
						$product->setTax($tax);
				$product->setId ($product_ID);
				$products[] = $product;
			}
			
			$stmt->free_result();
			return $products;
		}
		$stmt->free_result();
		return false;
		
	}
	
	public function getPages($limit,$offset){
		$query = 'SELECT product_ID, product_title, tour_type, city_of_start, city_of_end, number_of_days, product_description, terms_and_condition, price_included, price_not_included, pdf_link, prices_single, prices_double, prices_triple, prices_quadruple, prices_discount, category_category_ID,prices_tax FROM product ORDER BY product_ID DESC LIMIT ? OFFSET ?';
		$stmt = $this->mysqli->prepare ( $query );
		$stmt->bind_param ('ii',$limit,$offset);
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result($product_ID, $product_title, $tour_type, $city_of_start, $city_of_end, $number_of_days, $product_description, $terms_and_condition, $price_included, $price_not_included, $pdf_link, $prices_single, $prices_double, $prices_triple, $prices_quadruple, $prices_discount, $category_category_ID,$tax);
		
		if ($num_of_rows >= 1) {
			while ($stmt->fetch()) {
				$product = new product($product_title, $tour_type, $city_of_start, $city_of_end, $number_of_days, $product_description,
						$terms_and_condition, $price_included, $price_not_included, $pdf_link,
						$prices_single, $prices_double, $prices_triple, $prices_quadruple, $prices_discount, $category_category_ID);
				$product->setId ($product_ID);
				$product->setTax ($tax);
				$products[] = $product;
			}
			
			$stmt->free_result();
			return $products;
		}
		$stmt->free_result();
		return false;
	}
	
	// for add product from admin page
	public function getNewID() {
		// return the whole product table;
		$result = $this->mysqli->query ( 'select MAX(product_ID)+1 as ID from product' );
		$ID = $result->fetch_assoc();
		
		return $ID['ID'];
	}
	//
	public function getCountByCategory($categoryId, $tagContent, $tagDivCode){
		if (!empty($tagContent) && !empty($tagDivCode)) {
			$query = ('SELECT count(*) as cnt FROM product where category_category_ID = ? AND product_ID IN (SELECT DISTINCT product_ID FROM tag WHERE tag_content=? and tag_div_code=?)');
			$stmt = $this->mysqli->prepare ( $query );
			$stmt->bind_param ('isi', $categoryId, $tagContent, $tagDivCode);
		} else {
			$query = ('SELECT count(*) as cnt FROM product where category_category_ID = ?');
			$stmt = $this->mysqli->prepare ( $query );
			$stmt->bind_param ('i', $categoryId);
		}
		
		$stmt->execute ();
		
		/* Store the result (to get properties) */
		$stmt->store_result();
		
		/* Get the number of rows */
		$num_of_rows = $stmt->num_rows;
		
		/* Bind the result to variables */
		$stmt->bind_result($cnt);
		
		if ($num_of_rows == 1) {
			while ($stmt->fetch()) {
				$counter = $cnt;
			}
			
			$stmt->free_result();
			return $counter;
		}
		$stmt->free_result();
		return false;
	}
	
	public function addProductAdmin($product) {
		try {
			if (! $this->mysqli->connect_errno) {
				$query = 'INSERT INTO product(product_ID,product_title,tour_type,city_of_start,city_of_end,number_of_days,
							product_description,terms_and_condition,price_included,price_not_included,pdf_link,
							prices_single,prices_double,prices_triple,prices_quadruple,
							prices_discount,category_category_ID,prices_tax) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
				$stmt = $this->mysqli->prepare ( $query );
				
				$id = $product->getID();
				$title = $product->getTitle();
				$tourType = $product->getTourType();
				$cos = $product->getCityOfStart();
				$coe = $product->getCityOfEnd();
				$nod = $product->getNumberOfDays();
				$description = $product->getDescription();
				$terms = $product->getTerms();
				$priceIncluded = $product->getPriceIncluded();
				$priceNotIncluded = $product->getPriceNotIncluded();
				$pdf = $product->getPdf();
				$single = $product->getSingle();
				$double = $product->getDouble();
				$tripe = $product->getTriple();
				$quard = $product->getQuard();
				$discount = $product->getDiscount();
				$categoryId = $product->getCategoryId();
				$tax = $product->getTax();
				
				$stmt->bind_param ( 'isissssssssddddiis',$id, $title, $tourType, $cos, $coe, $nod,
						$description,$terms,$priceIncluded,$priceNotIncluded,
						$pdf,$single,$double,$tripe,$quard,$discount,$categoryId,$tax);
				
				// Execute the statement
				$stmt->execute ();
				
				if ($stmt->error) {
					return $stmt->error;
				} else {
					return $title. ' added successfully!';
				}
			} else {
				return 'Could not connect to Database.';
			}
		} catch ( mysqli_sql_exception $e ) {
			throw $e->getMessage ();
		}
	}
}

?>