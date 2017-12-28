<?php
try {
	$strSuccessMsg = "";
	
	if ( isset($_FILES['promoPdf'])) {
			if (!empty($_FILES['promoPdf']['name'])) {
			$path = "../files/promotion/";
			$name = $_FILES['promoPdf']['name'];
			list ( $txt, $ext ) = explode ( ".", $name );
			$savedName = 'PROMOTION.pdf';
			$tmp = $_FILES ['promoPdf']['tmp_name'];
			move_uploaded_file ( $tmp, $path . $savedName);
		}
		$strSuccessMsg = $path . $savedName;//'The Promotion PDF file was uploaded successfully.';
	} else {
		$strSuccessMsg = 'Upload failed.';
	}
	echo $strSuccessMsg;
	
} catch ( Exception $e ) {
	echo $e->getMessage ();
}

?>