<style>

.paging ,th,td{
	border:0px;
}
.page{
	 width:18px;
    height:18px;
    border:0;
}

.singleLeft{
    background: url('../images/button/single_left.png') no-repeat;	
    background-size: 100% 100%;
    
}

.singleRight{
	    background: url('../images/button/single_right.png') no-repeat;	
	    background-size: 100% 100%;
	
}

.doubleLeft{
	    background: url('../images/button/double_left.png') no-repeat;
	        background-size: 100% 100%;
	    
}

.doubleRight{
	    background: url('../images/button/double_right.png') no-repeat;
	        background-size: 100% 100%;
	    
}
</style>
<link rel="stylesheet" href="../css/css-admin.css">
<script type="text/javascript">
	$(document).ready(function() {
		$('#registerProductBtn').click(function() {
			$('#adminContents').load("productDetail.php", function() {
				$('#content').show()
			});
		});

		$("table tbody tr").on("mouseover mouseout",function(e){
			if (e.type == "mouseover") {
				$(this).css("background","#FAEBD7").css("transition"," all 0.1s ease-in-out;");
			} else if (e.type == "mouseout") {
				$(this).css("background","").css("transition","");
			}
		});
	});

	function openProductDetail(id) {
		var url = "productDetail.php?id=" + id;		
		$('#adminContents').load(url, function() {
			$('#content').show()
		});
	}

	function openProductRegisterForm() {
		var url = "productDetail.php";		
		$('#adminContents').load(url, function() {
			$('#content').show()
		});
	}

	function movePages(url) {
		$('#adminContents').load(url, function() {
			$('#content').show()
		});
	}

</script> 

<div id="productMgmtWarper" style="margin-left: 20px;">
	<p class="title">Product Management Page</p>
</div>


<?php
require_once (dirname(__FILE__).'/../DAO/productDAO.php');
require_once (dirname(__FILE__).'/../model/product.php');
$DAO = new productDAO ();
if (isset ( $_GET ['deleted'] )) {
	echo '<span style=\'color:red\'>Deleted</span>';
} else if (isset ( $_GET ['modified'] )) {
	echo '<span style=\'color:red\'>Modified</span>';
}
if (isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page = 1;
}

$total = $DAO -> getCount(); // how many records in the database
$limit = 10; //the num of records per page

$pages = ceil($total/$limit);

$offset = ($page -1) * $limit;
//start inforamtion
$start = $offset +1;
$end = min (($offset+$limit),$total);

if($total > 0){
	
	echo '<table id="productList" style="width: 1000px; margin-left: 20px;">
	<colgroup>
		<col style="width:4%;">
		<col style="width:*%;">
		<col style="width:8%;">
		<col style="width:12%;">
		<col style="width:12%;">
		<col style="width:8%;">
		<col style="width:10%;">
		<col style="width:10%;">
	</colgroup>
	<tr style="height: 40px;">
		<th class="center">ID</th>
		<th class="center">Title</th>
		<th class="center">TourType</th>
		<th class="center">CityOfStart</th>
		<th class="center">CityOfEnd</th>
		<th class="center">Days</th>
		<th class="center">Discount</th>
		<th class="center">CategoryID</th>
	</tr>
';
	

try {
	$products = $DAO->getPages($limit,$offset);

	if ($products) {
		foreach ( $products as $product ) {
			echo '<tr style="height: 40px;" onclick="openProductDetail('. $product->getId () . ');">';
			echo '<td class="center" >'. $product->getId (). '</td>';
			echo '<td>' . $product->getTitle(). '</td>';
			echo '<td class="center">' . $product->getTourType(). '</td>';
			echo '<td class="center">' . $product->getCityOfStart(). '</td>';
			echo '<td class="center">' . $product->getCityOfEnd(). '</td>';
			echo '<td class="center">' . $product->getNumberOfDays(). '</td>';
			echo '<td class="center">' . $product->getDiscount(). '%</td>';
			echo '<td class="center">' . $product->getCategoryId(). '</td>';
			echo '</tr>';
		}
	}
} catch ( Exception $e ) {
	$e->getMessage ();
}
}
?>
</table>
<?php 
$doubleLeftBtn = $page==1 ? '':'
<button  class = "page doubleLeft" onclick="movePages(\'productMgmt.php?page=1\');"/>
';

$singleLeftBtn = $page==1? '' :'
<button  class = "page singleLeft" onclick="movePages(\'productMgmt.php?page='.($page-1). '\');"/
>';

$singleRightBtn = $page==$pages ? '':'
<button  class = "page singleRight" onclick="movePages(\'productMgmt.php?page='.($page+1).'\');"/>
';

$doubleRightBtn = $page==$pages ? '':'
<button  class = "page doubleRight" onclick="movePages(\'productMgmt.php?page='.$pages.'\');"/>
';

$middlePart  = '
<div id = "paging"><p> Page'.$page.' of '.$pages.' pages, displaying '.$start.'-'.$end. ' of '. $total. ' results </p></div>
			';

echo '<div style="margin-left: 20px; margin-top: 20px; ">';
echo '	<div style="float: left; width: 230px; text-align: right; height: 30px;">'.$doubleLeftBtn.'</div>';
echo '	<div style="float: left; width: 30px; text-align: center; height: 30px;">'.$singleLeftBtn.'</div>';
echo '	<div style="float: left; width: 480px; text-align: center; height: 30px;">'.$middlePart.'</div>';
echo '	<div style="float: left; width: 30px; text-align: center; height: 30px;">'.$singleRightBtn.'</div>';
echo '	<div style="float: left; width: 230px; text-align: left; height: 30px;">'.$doubleRightBtn.'</div>';
echo '</div>';

?>


<br/><br/>
<div style="margin-left:20px;">
	<button type="submit" class="btn btn-primary" id="registerProductBtn" onclick="openProductRegisterForm();">REGISTER</button>
</div>
<br/><br/>
