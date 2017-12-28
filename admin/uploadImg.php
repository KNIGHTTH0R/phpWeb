<?php
function phpAlert($msg) {
	echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

if(isset($_POST['submit'])) {
	$save_dir = "../files/image/";
	
	if(is_uploaded_file($_FILES["upload_file"]["tmp_name"])) {
		
		$dest = $save_dir . $_FILES["upload_file"]["name"];
		
		if(move_uploaded_file($_FILES["upload_file"]["tmp_name"], $dest)) {
			phpAlert("success");
		} else {
			phpAlert("fail2");
		}
	} else {
		echo "fail1";
	}
}
?>

<div id="uploadWarper">
	<p class="title">Promotion Pdf file Upload page</p>
</div>

<form enctype="multipart/form-data" method="post" action="<?php  $_SERVER['PHP_SELF'] ?>" >
     <input type="file" name="upload_file" /><br />
     <input type="submit" value="upload" name="submit"/>
</form>
