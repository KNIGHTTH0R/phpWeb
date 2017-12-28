<?php
    $path='../images/carousel/';
    
    if (! empty ( $_FILES ['uploadImage'] ['name'] )) {
    	$name = $_FILES ['uploadImage'] ['name'];    	
    	list ( $txt, $ext ) = explode ( ".", $name );    	
    	$tmp = $_FILES ['uploadImage'] ['tmp_name'] ;    	
    	move_uploaded_file ( $tmp, $path . $name);    
    } 
    echo $name;
?>