<?php
try {
	require_once (dirname(__FILE__).'/../DAO/productDAO.php');
	require_once (dirname(__FILE__).'/../model/product.php');
	$strSuccessMsg = "";
	$result = new product ( $_POST['productTitle'], $_POST ['productType'], $_POST ['productCityOfStart'], $_POST ['productCityOfEnd'],
	if ( isset($_POST['productID'])) {
		$delCount = count($_POST['deletePic']); 
		for($i=0; $i<$delCount; $i++) {
			$picDAO->deletePicture($_POST['deletePic'][$i]);
		if ( isset($_FILES ['productPicture'])) {
		if (isset($schedules) && !empty($schedules)) {
		if ( isset($_POST['scheduleDay'])) {
					$sDAO->addSchedule($day);
		if (isset($tickets) && !empty($tickets)) {
		if ( isset($_POST['ticketTitle'])) {
		if ( isset($_FILES ['productPdf'])) {
		
	} else {
	echo $strSuccessMsg;
?>