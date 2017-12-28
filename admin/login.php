<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/css-admin.css">
<script src="../js/jquery-3.2.1.js"></script>
<title>I Shall Travel Administrator page</title>
</head>
<script type="text/javascript">
$(document).ready(function() {
	$('#user_id').focus();
});
</script>
<img src="../images/logo/logo.png" style="width: 600px; height: auto; margin-left: 200px; margin-top: 100px;">
<form method='post' action='login_ok.php'>
	<table style="margin-left: 300px; margin-top: 50px;">
		<tr>
			<td style="width: 100px;">ID</td>
			<td style="width: 200px;"><input type='text' id='user_id' name='user_id' tabindex='1' /></td>
			<td rowspan='2'><input type='submit' tabindex='3' value='login'
				style='height: 50px' /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type='password' id='user_pw' name='user_pw' tabindex='2' /></td>
		</tr>
	</table>
</form>
</html>