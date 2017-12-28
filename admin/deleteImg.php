<?php 

$file = "../files/image/double_right.png";
echo '<form method="post">';
echo '<input type="hidden" value="'.$file.'" name="delete_file" />';
echo '<input type="submit" value="Delete image" />';
echo '</form>';

if (array_key_exists('delete_file', $_POST)) {
	$filename = $_POST['delete_file'];
	if (file_exists($filename)) {
		unlink($filename);
		echo 'File '.$filename.' has been deleted';
	} else {
		echo 'Could not delete '.$filename.', file does not exist';
	}
}?>