
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8" />
<script src="http://code.jquery.com/jquery.min.js"></script>
</head>
<body>

<script type="text/javascript">
$(document).ready(function() {
	
	$("#myform").submit( function(e){
		e.preventDefault();
		
		var datas, xhr;
		
		datas = new FormData();
		datas.append( 'service_image', $( '#service_image' )[0].files[0] );
		datas.append( 'test', $('#ttt').val());
		
		$.ajax({
			url: './ajax-test2.php', //target php (backend)
			contentType: 'multipart/form-data',
			type: 'POST',
			data: datas,
			dataType: 'json',
			mimeType: 'multipart/form-data',
			success: function (data) {
				alert( data.url + '\n' + data.originalName);
			},
			error : function (jqXHR, textStatus, errorThrown) {
				alert('ERRORS: ' + textStatus);
			},
			cache: false,
			contentType: false,
			processData: false
		});
	});
		
});
	
	</script>
	
	<form id="myform" name="myform" method="post" enctype="multipart/form-data">
		<input  id="service_image" name="service_image" type="file" accept="image/*"/>
		<input type="text" id="ttt" name="ttt" value="test123">
		<input type=submit value="submit" />
	</form>
	</body>
	</html>