<?php
?>


<!-- javascript ajaxForm controll --> 
<script src="http://malsup.github.com/jquery.form.js"></script>
<script type="text/javascript">
 
var options = {
    beforeSubmit : "",
    success      : "",
    dataType     : 'json'
};    
 
$(function(){
   
   $("#ajaxSubmitBtn").click(function(e){
	   alert("submit");
        e.preventDefault();
        apply();
    });
   
});
 
function apply()
{
    // ajaxSubmit Option  
    options = {
        beforeSubmit : applyBefore, // ajaxSubmit 전처리 함수
        success      : applyAfter,  // ajaxSubmit 후처리 함수
        dataType     : 'json'       // 데이터 타입 json
    };
    // frmApply Form Data값을 testAjax.html 으로 ajax 전송
    $("#frmApply").ajaxSubmit(options);
}
 
function applyBefore(formData, jqForm, options)
{        
   
    // ajaxSubmit 전 처리 작업 영역
 	alert("before");
    return true;
}
 
function applyAfter(objResponse, statusText, xhr, $form)
{	alert("after");
    if (statusText == "success") {
        // ajax 통신 성공 후 처리영역
        if (objResponse.strResult == "SUCCESS" ) {
            // 리턴받은 json 배열의 strResult 값이 "SUCCESS"일 경우 처리영역
            alert(objResponse.strObject);
            // 결과값 SUCCESS!! 리턴!!
        } else {
            // SUCCESS 이외의 값으로 리턴됐을 경우 처리영역
        }
    } else {
        // ajax 통신 실패 처리영역
    }    
} 
</script>

	<div id="productMgmtWarper">
		<p class="title">Product Management Page</p>
	</div>
	<br>
 ajaxSubmit Form
<form id="frmApply" method="post" action="./ajaxPage.php" onSubmit="return false;">
    <input type="hidden" name="f_data1" value="">
    <input type="hidden" name="f_data2" value="">
    <input type="hidden" name="f_data3" value="">
    <input type="hidden" name="f_data4" value="">
</form>
 
<!-- ajaxSubmit Call Button --> 
<a href="#" id="ajaxSubmitBtn" >ajaxSubmit Call</a>
 