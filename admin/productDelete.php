<?php
try {

	require_once (dirname(__FILE__).'/../DAO/productDAO.php');
	require_once (dirname(__FILE__).'/../DAO/scheduleDAO.php');
	require_once (dirname(__FILE__).'/../DAO/ticketDAO.php');
	require_once (dirname(__FILE__).'/../DAO/pictureDAO.php');
	require_once (dirname(__FILE__).'/../DAO/tagDAO.php');
	
	$pDAO = new productDAO();
	$sDAO = new scheduleDAO();
	$tDAO = new ticketDAO();
	$picDAO = new pictureDAO();
	$tagDAO = new tagDAO();
	
	$schedules = $sDAO->getSchedulePID($_POST['productID']);
	$tickets = $tDAO->getTicketPID($_POST['productID']);
	$pictures = $picDAO->getPicturePID($_POST['productID']);
	$cityTags = $tagDAO->getTagPID($_POST['productID'], 1);
	$routeTags = $tagDAO->getTagPID($_POST['productID'], 2);
	
	if (isset($cityTags) && !empty($cityTags)) {
		$tagDAO->deleteTagPID($_POST['productID'], 1);
	}
	if (isset($routeTags) && !empty($routeTags)) {
		$tagDAO->deleteTagPID($_POST['productID'], 2);
	}
	
	if (isset($schedules) && !empty($schedules)) {
		$sDAO->deleteSchedulePID($_POST['productID']);
	}
	
	if (isset($tickets) && !empty($tickets)) {
		$tDAO->deleteTicketPID($_POST['productID']);
	}
	
	if (isset($pictures) && !empty($pictures)) {
		foreach ( $pictures as $picture) {
			unlink(dirname(__FILE__).'/..'.$picture->getPictureURL().$picture->getPictureSavedName());
		}
		$picDAO->deletePicturePID($_POST['productID']);
	}
	
	$pDAO->deleteProduct($_POST['productID']);
	
	$strSuccessMsg = "[".$_POST['productID']."] was deleted.";
 
	echo $strSuccessMsg; 
	
} catch ( Exception $e ) {
		echo $e->getMessage ();
}
?>