<?php
require_once (dirname(__FILE__).'/../DAO/adminDAO.php');
require_once (dirname(__FILE__).'/../model/admin.php');

if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;
$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];

$aDAO = new adminDAO();

try {
	$checkAdmin = $aDAO->checkPassword($user_id,$user_pw);
	
	if(!$checkAdmin) {
		echo "<script>alert('Either your email address or your password were incorrect.');history.back();</script>";
		exit;
	}
	session_start();
	$_SESSION['user_id'] = $user_id;
	
} catch ( Exception $e ) {
	$e->getMessage ();
}

?>
<meta http-equiv='refresh' content='0;url=adminMain.php'>