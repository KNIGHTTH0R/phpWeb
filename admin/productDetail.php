<?php
require_once (dirname(__FILE__).'/../DAO/productDAO.php');
require_once (dirname(__FILE__).'/../DAO/scheduleDAO.php');
require_once (dirname(__FILE__).'/../DAO/ticketDAO.php');
require_once (dirname(__FILE__).'/../DAO/pictureDAO.php');
require_once (dirname(__FILE__).'/../DAO/tagDAO.php');

require_once (dirname(__FILE__).'/../model/product.php');
require_once (dirname(__FILE__).'/../model/schedule.php');
require_once (dirname(__FILE__).'/../model/ticket.php');
require_once (dirname(__FILE__).'/../model/picture.php');
require_once (dirname(__FILE__).'/../model/tag.php');

if (! isset ( $_GET ['id'] ) || ! is_numeric ( $_GET ['id'] )) {
	$product = new product("","","","","","","","","","","","","","","","");
} else {
	$pDAO = new productDAO();
	$sDAO = new scheduleDAO();
	$tDAO = new ticketDAO();
	$picDAO = new pictureDAO();
	$tagDAO = new tagDAO();
	
	$product = $pDAO->getProduct($_GET['id']);
	$schedules = $sDAO->getSchedulePID($_GET['id']);
	$tickets = $tDAO->getTicketPID($_GET['id']);
	$pictures = $picDAO->getPicturePID($_GET['id']);
	$cityTag = $tagDAO->getTagPID($_GET['id'],'1');
	$routeTag = $tagDAO->getTagPID($_GET['id'],'2');
}


?>
<link rel="stylesheet" href="../css/css-admin.css">
<style type="text/css">
	.pop-layer {display:none; position: absolute; top: 50%; left: 50%; width: 640px; height:auto;  background-color:#fff; border: 5px solid #3571B5; z-index: 10;}	
	.pop-layer .pop-container {padding: 20px 25px;}
	.pop-layer p.ctxt {color: #666; line-height: 25px;}
	.pop-layer .btn-r {width: 100%; margin:10px 0 20px; padding-top: 10px; border-top: 1px solid #DDD; text-align:right;}

	a.cbtn {display:inline-block; height:25px; padding:0 14px 0; border:1px solid #304a8a; background-color:#3f5a9d; font-size:13px; color:#fff; line-height:25px;}	
	a.cbtn:hover {border: 1px solid #091940; background-color:#1f326a; color:#fff;}
</style>
<script src="http://malsup.github.com/jquery.form.js"></script>
<script type="text/javascript">

	$(document).ready(function() {
		checkTourType();
		checkCategory();
		checkTagAvailable();
		
		$("#submitData").unbind("click").bind("click",function(e){
			if(confirm("submit?")){
				e.preventDefault();
				apply('register');
			}
		});
		
		$("#deleteData").unbind("click").bind("click",function(e){
			if(confirm("delete?")){
				e.preventDefault();
				apply('delete');
			}
		});

		$("#returnList").unbind("click").bind("click",function(e){
			goList();
		});
		
	});

	function layer_open(el, url){
		var temp = $('#' + el);		
		var bg = temp.prev().hasClass('bg');

		if(bg){
			$('.layer').fadeIn();
		}else{
			temp.fadeIn();	
		}

		// appear layer
		if (temp.outerHeight() < $(document).height() ) temp.css('margin-top', '-'+temp.outerHeight()/2+'px');
		else temp.css('top', '0px');
		if (temp.outerWidth() < $(document).width() ) temp.css('margin-left', '-'+temp.outerWidth()/2+'px');
		else temp.css('left', '0px');

		temp.find('a.cbtn').click(function(e){
			$('#imgTarget').empty();
			if(bg){
				$('.layer').fadeOut();
			}else{
				temp.fadeOut();		// layer disappear when click close button
			}
			e.preventDefault();
		});

		$('.layer .bg').click(function(e){
			$('#imgTarget').empty();
			$('.layer').fadeOut();
			e.preventDefault();
		});

		$('#imgTarget').append("<img src="+url+" style='width: 580px; height: auto; border: none;'/>");
	}
	
	function goList() {
		$('#adminContents').load('productMgmt.php', function() {
			$('#content').show()
		});
	}
	
	function checkTourType() {
		var tourType = "<?php echo $product->getTourType() ?>";		
		document.getElementById("productType").selectedIndex = tourType;
	}

	function checkCategory() {
		var cID = "<?php echo $product->getCategoryId() ?>";		
		document.getElementById("productCategory").selectedIndex = cID;
	}
	
	function numberInuptValidaton(evt) {
		  var theEvent = evt || window.event;
		  var key = theEvent.keyCode || theEvent.which;
		  key = String.fromCharCode( key );
		  var regex = /[0-9]|\./;
		  if( !regex.test(key) ) {
		    theEvent.returnValue = false;
		    if(theEvent.preventDefault) theEvent.preventDefault();
		  }
		}
	
	function addPictureRow() {
	    var my_tbody = document.getElementById('pictureSlots');
	    var row = my_tbody.insertRow( my_tbody.rows.length ); 
	    
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);

		cell1.innerHTML = '<button id="removePictureSlot" style="width: 25px;" onclick="deleteRow(this);"> - </button>';
		cell2.innerHTML = '<input type="file" name="productPicture[]" accept="image/*" />';
	}

	function deleteRow(obj) {
		$(obj).parent().parent().remove();
	}

	function addScheduleRow() {
		var html = "<tr>";
		html += "	<td class='center'>Day</td>";
		html += "	<td class='left'><input type='text' size='3' name='scheduleDay[]' ></td>";
		html += "	<td class='center'>Title</td>";
		html += "	<td class='left' colspan='3'><input type='text' size='20' name='scheduleTitle[]' ></td>";
		html += "</tr>";
		html += "<tr>";
		html += "	<td class='center'>Breakfast</td>";
		html += "<td class='left'><input type='text' size='10' name='scheduleBreakfast[]' ></td>";
		html += "<td class='center'>Lunch</td>";
		html += "<td class='left'><input type='text' size='10' name='scheduleLunch[]' ></td>";
		html += "<td class='center'>Dinner</td>";
		html += "<td class='left'><input type='text' size='10' name='scheduleDinner[]' ></td>";
		html += "</tr>";
		html += "<tr>";
		html += "<td class='center'>Description</td>";
		html += "<td class='left' colspan='5'><textarea name='scheduleDesc[]' rows='5' cols='88'></textarea></td>";
		html += "</tr>";
		html +="<tr>";
		html +="	<td class='center'>Hotel</td>";
		html +="	<td class='left' colspan='3'><input type='text' name='scheduleHotel[]' ></td>";
		html +="	<td class='center' colspan='2'><button id='deleteScheduleSlot' onclick='deleteScheduleRow(this);'>Delete Schedule</button></td>";
		html +="</tr>";
		$('#scheduleSlots').append(html);
	}

	function deleteScheduleRow(obj) {
		$(obj).parent().parent().prev().remove();
		$(obj).parent().parent().prev().remove();
		$(obj).parent().parent().prev().remove();
		$(obj).parent().parent().remove();
	}

	function addTicketRow() {
	    var my_tbody = document.getElementById('ticketPriceSlot');
	    var row = my_tbody.insertRow( my_tbody.rows.length ); 
	    
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);
		var cell6 = row.insertCell(5);
		var cell7 = row.insertCell(6);
		var cell8 = row.insertCell(7);
		
		cell1.innerHTML = '<button id="removeTicketPriceSlot" style="width: 25px;" onclick="deleteRow(this);"> - </button>';
		cell2.innerHTML = '<input type="text" size="18" name="ticketTitle[]">';
		cell3.innerHTML = '<input type="text" size="8" onkeypress="numberInuptValidaton(event);" name="ticketAdult[]">';
		cell4.innerHTML = '<input type="text" size="8" onkeypress="numberInuptValidaton(event);" name="ticketEnfants[]">';
		cell5.innerHTML = '<input type="text" size="8" onkeypress="numberInuptValidaton(event);" name="ticketChildren[]">';
		cell6.innerHTML = '<input type="text" size="8" onkeypress="numberInuptValidaton(event);" name="ticketTeens[]">';
		cell7.innerHTML = '<input type="text" size="8" onkeypress="numberInuptValidaton(event);" name="ticketSenior[]">';
		cell8.innerHTML = '<select name="ticketMandatory[]"><option value="">Select mandatory</option><option value="1">YES</option><option value="2">NO</option></select>';
	}

	function validation()
	{
		if ($('#productTitle').val().trim() == "") {
			alert("Please enter title");
			$('#productTitle').focus();
			return false;
		}
		if ($('#productCategory').val().trim() == "") {
			alert("Please select category");
			$('#productCategory').focus();
			return false;
		}
		if ($('#productCityOfStart').val().trim() == "") {
			alert("Please enter depature city name");
			$('#productCityOfStart').focus();
			return false;
		}
		if ($('#productCityOfEnd').val().trim() == "") {
			alert("Please enter arrival city name");
			$('#productCityOfEnd').focus();
			return false;
		}
		if ($('#productNumberOfDay').val().trim() == "") {
			alert("Please enter number of day");
			$('#productNumberOfDay').focus();
			return false;
		}
		if ($('#productType').val().trim() == "") {
			alert("Please select type of tour");
			$('#productType').focus();
			return false;
		}
		if ($('#productDesc').val().trim() == "") {
			alert("Please enter description");
			$('#productDesc').focus();
			return false;
		}
		if ($('#productTerms').val().trim() == "") {
			alert("Please enter terms and conditions");
			$('#productTerms').focus();
			return false;
		}
		
		if ($('#productPriceSingle').val().trim() == "") {
			alert("Please enter single price");
			$('#productPriceSingle').focus();
			return false;
		}
		if ($('#productPriceDouble').val().trim() == "") {
			alert("Please enter double price");
			$('#productPriceDouble').focus();
			return false;
		}
		if ($('#productPriceTriple').val().trim() == "") {
			alert("Please enter triple price");
			$('#productPriceTriple').focus();
			return false;
		}
		if ($('#productPriceQuardruple').val().trim() == "") {
			alert("Please enter quardruple price");
			$('#productPriceQuardruple').focus();
			return false;
		}
	    return true;
	}
	
	function apply(type) {
		var targetUrl = "";
		
		if(type == "register") {
			validation();
			targetUrl = "./productRegister.php";	

		} else if (type == "delete") {
			targetUrl = "./productDelete.php";	
		}
		
		var datas, xhr;
		datas = new FormData($("#productDetailForm")[0]);

 	    $.ajax({
			url: targetUrl,
			type: "post",
			data: datas,//$("#productDetailForm").serialize(),
            success: function (data) {
                alert(data);
              	goList();
            },
            error : function (jqXHR, textStatus, errorThrown) {
				alert('ERRORS: ' + textStatus);
			},
			cache: false,
			contentType: false,
			processData: false
			
		});
	}
	
	function checkNumber() {
		if ((event.keyCode > 32 && event.keyCode < 43) || (event.keyCode > 45 && event.keyCode < 48) || (event.keyCode > 57 && event.keyCode < 65) || (event.keyCode > 90 && event.keyCode < 97)){
			event.returnValue = false;
		}
	}

	function checkChageCityTag() {
		$('#cityTagChangeFlag').val('true');
	}

	function checkChageRouteTag() {
		$('#routeTagChangeFlag').val('true');
	}

	function checkTagAvailable() {
		if ($('#productCategory').val().trim() == "6") {
			$('#productCityTag').attr("disabled", false);
			$('#productRouteTag').attr("disabled", false);
		} else {
			$('#productCityTag').val("");
			$('#productRouteTag').val("");
			$('#productCityTag').attr("disabled", true);
			$('#productRouteTag').attr("disabled", true);
		}
	}
	

</script>
<div id="productDetailWarper" style="margin-left: 20px;">
	<p class="title">Product Management Page</p>

	<form id="productDetailForm" method="post" action="./" enctype="multipart/form-data" onSubmit="return false;">
		<input type="hidden" name="numOfSchdules" id="numOfSchdules" value="1">
		<div id="productDetailWraper">
			<table id="basicInformation" style="width: 1000px; margin-left: 20px;	">
				<colgroup>
					<col style="width:13%;"/>
					<col style="width:37%;"/>
					<col style="width:13%;"/>
					<col style="width:37%;"/>
				</colgroup>
				<tbody>
					<?php
						if (isset ( $_GET ['id'] )) {
							echo '<tr>
								<td class="right">ProductID</td>
								<td class="left" colspan="3"><input type="text" id="productID" name="productID" size="44" readonly="readonly" value="'.$product->getID().'"></td>			
							</tr>';
						}
					?>
					<tr>
						<td class="right">Title</td>
						<td class="left"><input type="text" id="productTitle" name="productTitle" size="44" value="<?php echo $product->getTitle() ?>"></td>			
						<td class="right">Category</td>
						<td class="left">
							<select id="productCategory" name="productCategory" onchange="checkTagAvailable();">
								<option value="">Select category</option>
								<?php 
									require_once('../DAO/categoryDAO.php');
									require_once('../model/category.php');
									$categoryDAO = new categoryDAO();
									$categories= $categoryDAO->getCategories();
									foreach ($categories as $category) {
										echo '<option value="'.$category->getId().'">'.$category->getId().' : '.$category->getName().'</option>';
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td class="right">City of Start</td>
						<td class="left"><input type="text" id="productCityOfStart" name="productCityOfStart" value="<?php echo $product->getCityOfStart() ?>"></td>			
						<td class="right">City of End</td>
						<td class="left"><input type="text" id="productCityOfEnd" name="productCityOfEnd" value="<?php echo $product->getCityOfEnd() ?>"></td>			
					</tr>
					<tr>
						<td class="right">City Tag</td>
						<td class="left" colspan="3">
							<input type="text" id="productCityTag" size="88" name="productCityTag" value="<?php echo $cityTag ?>" onKeypress="checkNumber();" onchange="checkChageCityTag();" disabled="disabled">
							<input type="hidden" id="cityTagChangeFlag" name="cityTagChangeFlag" value="false"> Separated by a comma
						</td>		
					</tr>
					<tr>	
						<td class="right">Route Tag</td>
						<td class="left" colspan="3">
							<input type="text" id="productRouteTag" size="88" name="productRouteTag" value="<?php echo $routeTag ?>" onKeypress="checkNumber();" onchange="checkChageRouteTag();" disabled="disabled">
							<input type="hidden" id="routeTagChangeFlag" name="routeTagChangeFlag" value="false"> Separated by a comma
						</td>
					</tr>
					<tr>
						<td class="right">Number of Days</td>
						<td class="left" ><input type="text" size="3" id="productNumberOfDay" name="productNumberOfDay" maxlength="3" onkeypress="numberInuptValidaton(event);" value="<?php echo $product->getNumberOfDays() ?>"></td>
						<td class="right">Type of Tour</td>
						<td class="left">
							<select id="productType" name="productType">
								<option value="">Select type</option>
								<option value="1">1 : Bus</option>
								<option value="2">2 : Airplane</option>
								<option value="3">3 : Others</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="right">Description</td>
						<td class="left" colspan="3"><textarea id="productDesc" name="productDesc" rows="5" cols="118"><?php echo $product->getDescription() ?></textarea></td>	
					</tr>
					<tr>
						<td class="right">Price Included</td>
						<td class="left" colspan="3"><textarea id="productDesc" name="productPriceIncluded" rows="5" cols="118"><?php echo $product->getPriceIncluded() ?></textarea></td>	
					</tr>
					<tr>
						<td class="right">Price Not Included</td>
						<td class="left" colspan="3"><textarea id="productDesc" name="productPriceNotIncluded" rows="5" cols="118"><?php echo $product->getPriceNotIncluded() ?></textarea></td>	
					</tr>
					<tr>
						<td class="right">Terms & Conditions</td>
						<td class="left" colspan="3"><textarea id="productTerms" name="productTerms" rows="5" cols="118"><?php echo $product->getTerms() ?></textarea></td>	
					</tr>
					<tr>
						<td class="right">Prices</td>
						<td class="left" colspan="3">
							<div>
								<table style="width:800;">
									<thead>
										<tr>
											<th class="center" style="padding-top:2px; padding-bottom: 2px;width:130px; background-color: lightgrey;">Discount</th>
											<th class="center" style="padding-top:2px; padding-bottom: 2px;width:130px; background-color: lightgrey;">Single</th>
											<th class="center" style="padding-top:2px; padding-bottom: 2px;width:130px; background-color: lightgrey;">Double</th>
											<th class="center" style="padding-top:2px; padding-bottom: 2px;width:130px; background-color: lightgrey;">Triple</th>
											<th class="center" style="padding-top:2px; padding-bottom: 2px;width:130px; background-color: lightgrey;">Quadruple</th>
											<th class="center" style="padding-top:2px; padding-bottom: 2px;width:130px; background-color: lightgrey;">Tax</th>
										</tr>
									</thead>
									<tbody>
										<tr >
											<td style="padding-top:2px; padding-bottom: 2px;" class="center" ><input type="text" size="4" onkeypress="numberInuptValidaton(event);" maxlength="4" id="productDiscount" name="productDiscount" value="<?php echo $product->getDiscount() ?>">%</td>
											<td style="padding-top:2px; padding-bottom: 2px;" class="center" ><input type="text" size="12" onkeypress="numberInuptValidaton(event);" id="productPriceSingle" name="productPriceSingle" value="<?php echo $product->getSingle() ?>"></td>
											<td style="padding-top:2px; padding-bottom: 2px;" class="center" ><input type="text" size="12" onkeypress="numberInuptValidaton(event);" id="productPriceDouble" name="productPriceDouble" value="<?php echo $product->getDouble() ?>"></td>
											<td style="padding-top:2px; padding-bottom: 2px;" class="center" ><input type="text" size="12" onkeypress="numberInuptValidaton(event);" id="productPriceTriple" name="productPriceTriple" value="<?php echo $product->getTriple() ?>"></td>
											<td style="padding-top:2px; padding-bottom: 2px;" class="center" ><input type="text" size="12" onkeypress="numberInuptValidaton(event);" id="productPriceQuardruple" name="productPriceQuardruple" value="<?php echo $product->getQuard() ?>"></td>
											<td style="padding-top:2px; padding-bottom: 2px;" class="center" ><input type="text" size="4" onkeypress="numberInuptValidaton(event);" id="productPriceTax" name="productPriceTax" value="<?php echo $product->getTax() ?>">%</td>
										</tr>
									</tbody>
								</table>
							</div>
						</td>
					</tr>
					<tr>
						<td class="right">Main Pictures</td>
						<td class="left" colspan="3">
							<div>
								<table id="pictureTable" style="border: 0px none; width:640px;">
									<tbody id="pictureSlots">
										<?php
											if (isset($pictures) && !empty($pictures)) {
												$picCnt = 0;
												foreach ( $pictures as $picture) {
													echo'
													<tr>
														<td style="width:40px;"></td>
														<td style="width:400px;">
															Delete <input type="checkbox" name="deletePic[]" value="'.$picture->getPictureID().'">&nbsp;&nbsp;&nbsp; 
															<a href="#" class="btn-example" onclick="layer_open(\'layer1\',\'..'.$picture->getPictureURL().''.$picture->getPictureSavedName().'\');return false;" ><span>'.$picture->getPictureOriginalName().'</span></a>
														</td>
													</tr>';
												}
											} 
										?>
										<tr>
											<td style="width:40px;"><button id="addPictureSlot" style="width: 25px;" onclick="addPictureRow();">+</button></td>
											<td style="width:600px;"><input type="file" name="productPicture[]" accept="image/*" /></td>
										</tr>
									</tbody>
								</table>
							</div>
						</td>
					</tr>
					<tr>
						<td class="right">PDF File</td>
						<td class="left" colspan="3">
							<input type="hidden" id="productPdfValue" name="productPdfValue" value="<?php echo $product->getPdf() ?>">
							<div>
								<table id="pdfTable" style="border: 0px none; width:640px;">
									<tbody id="pdfSlots">
										<tr>
											<td style="width:600px;"> <input type="file" id="productPdf" name="productPdf" accept="application/pdf" /></td>
										</tr>
										<tr>
											<object id="pdfViewer" data="/web<?php echo $product->getPdf() ?>" type="application/pdf" width="80%" height="80%">
												<p>
													Alternative text - include a link <a href="<?php echo $product->getPdf() ?>">to the PDF!</a>
												</p>
											</object>
										</tr>
									</tbody>
								</table>
							</div>
						</td>
					</tr>
					<tr style="height: auto;">
						<td class="right">Schedules</td>
						<td class="left" colspan="3">
							<div id="temp1">
								<table id="scheduleTable" style="width:840px;">
									<colgroup>
										<col style="width:100px;"/>
										<col style="width:180px;"/>
										<col style="width:100px;"/>
										<col style="width:180px;"/>
										<col style="width:100px;"/>
										<col style="width:180px;"/>
									</colgroup>
									<tbody id="scheduleSlots">
										<?php
										if (isset($schedules) && !empty($schedules)) {
											$sCnt = 0;
											foreach ( $schedules as $schedule) {
												echo '
												<tr>
													<td class="center">Day</td>
													<td class="left"><input type="text" size="3" name="scheduleDay[]" value="'.$schedule->getDay().'"></td>
													<td class="center">Title</td>
													<td class="left" colspan="3"><input type="text" name="scheduleTitle[]" value="'.$schedule->getTitle().'"></td>
												</tr>
												<tr>
													<td class="center">Breakfast</td>
													<td class="left"><input type="text" name="scheduleBreakfast[]" value="'.$schedule->getBreakfast().'"></td>
													<td class="center">Lunch</td>
													<td class="left"><input type="text" name="scheduleLunch[]" value="'.$schedule->getLunch().'"></td>
													<td class="center">Dinner</td>
													<td class="left"><input type="text" name="scheduleDinner[]" value="'.$schedule->getDinner().'"></td>
												</tr>
												<tr>
													<td class="center">Description</td>
													<td class="left" colspan="5"><textarea name="scheduleDesc[]" rows="5" cols="88">'.$schedule->getDescription().'</textarea></td>
												</tr>
												<tr>
													<td class="center">Hotel</td>';
												if ($sCnt == 0) {
													echo '<td class="left" colspan="2"><input type="text" name="scheduleHotel[]" value="'.$schedule->getHotel().'"></td>
													<td class="center" colspan="2"><button id="addScheduleSlot" onclick="addScheduleRow();">Add Schedule</button></td>';
													$sCnt++;
												} else {
													echo '<td class="left" colspan="3"><input type="text" name="scheduleHotel[]" value="'.$schedule->getHotel().'"></td>
													<td class="center" colspan="2"><button id="deleteScheduleSlot" onclick="deleteScheduleRow(this);">Delete Schedule</button></td>';
												}
												echo '</tr>';
											}
										} else {
											echo '
													<tr>
														<td class="center">Day</td>
														<td class="left"><input type="text" size="3" name="scheduleDay[]" ></td>
														<td class="center">Title</td>
														<td class="left" colspan="3"><input type="text" size="20" name="scheduleTitle[]"></td>
													</tr>
													<tr>
														<td class="center">Breakfast</td>
														<td class="left"><input type="text" size="10" name="scheduleBreakfast[]" ></td>
														<td class="center">Lunch</td>
														<td class="left"><input type="text" size="10" name="scheduleLunch[]" ></td>
														<td class="center">Dinner</td>
														<td class="left"><input type="text" size="10" name="scheduleDinner[]" ></td>
													</tr>
													<tr>
														<td class="center">Description</td>
														<td class="left" colspan="5"><textarea name="scheduleDesc[]" rows="5" cols="88"></textarea></td>
													</tr>
													<tr>
														<td class="center">Hotel</td>
														<td class="left" colspan="3"><input type="text" name="scheduleHotel[]" value=""></td>
														<td class="center" colspan="2"><button id="addScheduleSlot" onclick="addScheduleRow();">Add Schedule</button></td>
													</tr>
											';
										}
										?>
									</tbody>
								</table>
							</div>
						</td>
					</tr>
					<tr>
						<td class="right">Ticket Prices</td>
						<td class="left" colspan="3">
							<div>
								<table id="ticketPricesTable" style="width:840;">
									<thead>
										<tr>
											<th class="center" style="padding-top:2px; padding-bottom: 2px;width:30px; background-color: lightgrey;"></th>
											<th class="center" style="padding-top:2px; padding-bottom: 2px;width:170px; background-color: lightgrey;">Title</th>
											<th class="center" style="padding-top:2px; padding-bottom: 2px;width:100px; background-color: lightgrey;">Adult</th>
											<th class="center" style="padding-top:2px; padding-bottom: 2px;width:100px; background-color: lightgrey;">Enfants</th>
											<th class="center" style="padding-top:2px; padding-bottom: 2px;width:100px; background-color: lightgrey;">Children</th>
											<th class="center" style="padding-top:2px; padding-bottom: 2px;width:100px; background-color: lightgrey;">Teens</th>
											<th class="center" style="padding-top:2px; padding-bottom: 2px;width:100px; background-color: lightgrey;">Senior</th>
											<th class="center" style="padding-top:2px; padding-bottom: 2px;width:140px; background-color: lightgrey;">Mandatory</th>
										</tr>
									</thead>
									<tbody id="ticketPriceSlot">
										<?php
										if (isset($tickets) && !empty($tickets)) {
												$tCnt = 0;
												foreach ( $tickets as $ticket) {
													echo'
													<tr>';
													if ($tCnt == 0) {
														echo '<td><button id="addTicketSlot" style="width: 25px;" onclick="addTicketRow();"> + </button></td>';
														$tCnt++;
													} else {
														echo '<td><button id="removeTicketPriceSlot" style="width: 25px;" onclick="deleteRow(this);"> - </button></td>';
													}
													echo ' <td><input type="text" size="18" name="ticketTitle[]" value="'.$ticket->getTitle().'"></td>
													<td><input type="text" size="8" onkeypress="numberInuptValidaton(event);" name="ticketAdult[]" value="'.$ticket->getAdult().'"></td>
													<td><input type="text" size="8" onkeypress="numberInuptValidaton(event);" name="ticketEnfants[]" value="'.$ticket->getEnfants().'"></td>
													<td><input type="text" size="8" onkeypress="numberInuptValidaton(event);" name="ticketChildren[]" value="'.$ticket->getChild().'"></td>
													<td><input type="text" size="8" onkeypress="numberInuptValidaton(event);" name="ticketTeens[]" value="'.$ticket->getTeen().'"></td>
													<td><input type="text" size="8" onkeypress="numberInuptValidaton(event);" name="ticketSenior[]" value="'.$ticket->getSenior().'"></td>
													<td>
														<select name="ticketMandatory[]">
															<option value="">Select mandatory</option>';
													if ($ticket->getMandatory()=='1') {
														echo '
																<option value="1" selected="selected">YES</option>
																<option value="2">NO</option>';
													} else {
														echo '
																<option value="1">YES</option>
																<option value="2" selected="selected">NO</option>';
													}
													echo '
															</select>
														</td>
													</tr>';
												}
											} else {
												echo'
												<tr>
													<td><button id="addTicketSlot" style="width: 25px;" onclick="addTicketRow();">+</button></td>
													<td><input type="text" size="18" name="ticketTitle[]"></td>
													<td><input type="text" size="8" onkeypress="numberInuptValidaton(event);" name="ticketAdult[]" ></td>
													<td><input type="text" size="8" onkeypress="numberInuptValidaton(event);" name="ticketEnfants[]" ></td>	
													<td><input type="text" size="8" onkeypress="numberInuptValidaton(event);" name="ticketChildren[]" ></td>
													<td><input type="text" size="8" onkeypress="numberInuptValidaton(event);" name="ticketTeens[]" ></td>
													<td><input type="text" size="8" onkeypress="numberInuptValidaton(event);" name="ticketSenior[]" ></td>
													<td>
														<select name="ticketMandatory[]">
															<option value="">Select mandatory</option>
															<option value="1">YES</option>
															<option value="2">NO</option>
														</select>
													</td>
												</tr>';
											}
										?>
									</tbody>
								</table>
							</div>
						</td>
					</tr>				
				</tbody>
			</table>
			<br>
		</div>
	</form>
	<div style="margin-left: 20px; ">
		<div style="float: left; width: 400px; text-align: left; height: 40px;">
			<button type="button" class="btn btn-primary" id="returnList">LIST</button>
		</div>
		<div style="float: left; width: 500px; text-align: right; height: 40px;">
			<?php
				if (isset ( $_GET ['id'] )) {
					echo '<button type="button" class="btn btn-primary" id="deleteData">DELETE</button>';
				}
			?>
		</div>
		<div style="float: left; width: 100px; text-align: right; height: 40px;">
			<button type="button" class="btn btn-primary" id="submitData">SUBMIT</button>
		</div>
	</div>
	<div id="layer1" class="pop-layer">
		<div class="pop-container">
			<div class="pop-conts">
				<!--content //-->
				<div id="imgTarget">
				</div>
				<div class="btn-r">
					<a href="#" class="cbtn">Close</a>
				</div>
				<!--// content-->
			</div>
		</div>
	</div>
	
</div>