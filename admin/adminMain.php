<!DOCTYPE html>
<html>
<?php
session_start();
if(!isset($_SESSION['user_id'])) {
	echo "<meta http-equiv='refresh' content='0;url=login.php'>";
	exit;
}
?>
<head>
<meta charset="ISO-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/css-admin.css">
<title>I Shall Travel Administrator page</title>
<script src="../js/jquery-3.2.1.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script type="text/javascript">



    $(document).ready(function() {
    	$('label[name=menuLabel]').click(function() {
		    var url;
		    switch (this.id) {
		    case "menuLabel1":
				url = "pdfUpload.php";
				break;
		    case "menuLabel2":
				url = "carousel.php";
				break;
		    case "menuLabel3":
				url = "homepageProduct.php";
				break;
		    case "menuLabel4":
				url = "productMgmt.php";
				break;
		    case "menuLabel5":
				url = "logout.php";
				break;
		    }
		    $('#adminContents').load(url, function() {
				$('#content').show()
			});
		});

		window.onunload=function(){
		    window.location.replace(self.location);
		}
    });

    

</script>


</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div id="adminWraper" class="col-sm-2">
				<div id="adminMenu">
					<br> <img src="../images/icon/icon-admin-account-icon.png" border="0" style="margin-left: 24px"><br> <br>
					<div class="btn-group btn-group-vertical" data-toggle="buttons">
						<label class="btn btn-warning" name="menuLabel" id="menuLabel1"> <input type="radio" name="menuBtn" id="menuBtn1" autocomplete="off" onclick="moveTo(this);"> Promotion File Upload</label>
						<label class="btn btn-warning" name="menuLabel" id="menuLabel2"> <input type="radio" name="menuBtn" id="menuBtn2" autocomplete="off" onclick="moveTo(this);"> Mainpage Carousel Management</label>
						<label class="btn btn-warning" name="menuLabel" id="menuLabel3"> <input type="radio" name="menuBtn" id="menuBtn3" autocomplete="off" onclick="moveTo(this);"> Mainpage Product Management</label>
						<label class="btn btn-warning" name="menuLabel" id="menuLabel4"> <input type="radio" name="menuBtn" id="menuBtn4" autocomplete="off" onclick="moveTo(this);"> Product Data Management</label>
						<label class="btn btn-warning" name="menuLabel" id="menuLabel5"> <input type="radio" name="menuBtn" id="menuBtn5" autocomplete="off" onclick="moveTo(this);"> Logout</label>
					</div>
				</div>
			</div>
			<div id="adminContents" class="col-sm-10" style="overflow: auto;">
					<div class="center">
						<p class="title">SELECT MENU</p>
					</div>
			</div>
		</div>
	</div>
	
</body>
</html>