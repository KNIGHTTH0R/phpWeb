<script src="http://malsup.github.com/jquery.form.js"></script>
<script type="text/javascript">

	$(document).ready(function() {
		$("#submitData").unbind("click").bind("click",function(e){
			if(confirm("submit?")){
				e.preventDefault();
				apply();
			}
		});
	});
	
	function apply() {
		var targetUrl = "./pdfRegister.php";
		var datas, xhr;
		datas = new FormData($("#pdfForm")[0]);
		$.ajax({
			url: targetUrl,
			type: "post",
			data: datas,
	        success: function (data) {
	            alert(data);
	            resetFile();
	            refreshPdf();
	        },
	        error : function (jqXHR, textStatus, errorThrown) {
				alert('ERRORS: ' + textStatus);
			},
			cache: false,
			contentType: false,
			processData: false
			
		});
	}
	
	function refreshPdf() {
		$('#adminContents').load("pdfUpload.php", function() {
			$('#content').show()
		});
	}

	function resetFile() {
		var control = $("#promoPdf");
		control.replaceWith( control = control.clone( true ) );
	}
	
</script>
<link rel="stylesheet" href="../css/css-admin.css">
<div id="pdfUploderWarper" style="margin-left: 20px;">
	<p class="title">Promotion File Upload Page</p>
	
	<form id="pdfForm" method="post" action="./" enctype="multipart/form-data" onSubmit="return false;">
		<input type="file" id="promoPdf" name="promoPdf" accept="application/pdf" />
		<input type="hidden" id="test" name="test" value="test">
		<br><button type="button" id="submitData">SUBMIT</button>
	</form>
	<br>
	<button type="button" onclick="refreshPdf();">REFRESH PDF</button>
	<br/><br/>
</div>
<div style="height: 800px; width: 800px; margin-left: 20px;">
	<p>Current PDF file</p><br/>
	<object id="pdfViewer" data="../files/promotion/PROMOTION.pdf" type="application/pdf" width="80%" height="80%">
		<p>
			Alternative text - include a link <a href="../files/promotion/PROMOTION.pdf">to the PDF!</a>
		</p>
	</object>
	<br/>
	<p> EXTERNAL LINK : <a href="../files/promotion/PROMOTION.pdf" target="_blank">PROMOTION.PDF</a>
</div>
