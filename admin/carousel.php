<?php
require_once (dirname(__FILE__) . '/../DAO/slideShowDAO.php');
require_once (dirname(__FILE__) . '/../model/slideShow.php');
$slideShowDAO = new slideShowDAO();
$slideShows = $slideShowDAO->getSlideShows();
$absPathHead = "http://" . $_SERVER['HTTP_HOST'].'/web';
?>

    <link rel="stylesheet" href="<?php echo $absPathHead . '/css/bootstrap.min.css';?>">
    <script src="<?php echo $absPathHead . '/js/bootstrap.min.js';?>"></script>
	<div class="container-fluid">
		<div class="row text-center">
			<h2>
				<b>Carousel Management</b>
			</h2>
		</div>
        <?php
        if (isset($_GET['modified'])) {
            if ($_GET['modified'] == "true") {
                echo "<script>popUpModified()</script>";
            } else {
                echo "<script>popUpError()</script>";
            }
        }
        ?>                 
        <!--Carousel Review-->
		<div class="container">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src=<?php echo '../images/carousel/' . $slideShows[0]->getLink();?> alt="slideShowOne" id="carousel_1_pic">
						<div class="carousel-caption">
							<a href="#" style="color: #FFFFFF; text-decoration: none;"><h3 id="carousel_1_title"><?php echo $slideShows[0]->getTitle();?></h3></a>
							<p id="carousel_1_desc1"><?php echo $slideShows[0]->getDescriptionA();?></p>
							<p id="carousel_1_desc2"><?php echo $slideShows[0]->getDescriptionB();?></p>
						</div>
					</div>
					<div class="item">
						<img src=<?php echo '../images/carousel/' . $slideShows[1]->getLink();?> alt="slideShowTwo" id="carousel_2_pic">
						<div class="carousel-caption">
							<a href="#" style="color: #FFFFFF; text-decoration: none;"><h3 id="carousel_2_title"><?php echo $slideShows[1]->getTitle();?></h3></a>
							<p id="carousel_2_desc1"><?php echo $slideShows[1]->getDescriptionA();?></p>
							<p id="carousel_2_desc2"><?php echo $slideShows[1]->getDescriptionB();?></p>
						</div>
					</div>
					<div class="item">
						<img src=<?php echo '../images/carousel/' . $slideShows[2]->getLink();?> alt="whales.jpg" id="carousel_3_pic">
						<div class="carousel-caption">
							<a href="#" style="color: #FFFFFF; text-decoration: none;"><h3 id="carousel_3_title"><?php echo $slideShows[2]->getTitle();?></h3></a>
							<p id="carousel_3_desc1"><?php echo $slideShows[2]->getDescriptionA();?></p>
							<p id="carousel_3_desc2"><?php echo $slideShows[2]->getDescriptionB();?></p>
						</div>
					</div>
					<div class="item">
						<img src=<?php echo '../images/carousel/' . $slideShows[3]->getLink();?> alt="aurora.jpg" id="carousel_4_pic">
						<div class="carousel-caption">
							<a href="#" style="color: #FFFFFF; text-decoration: none;"><h3 id="carousel_4_title"><?php echo $slideShows[3]->getTitle();?></h3></a>
							<p id="carousel_4_desc1"><?php echo $slideShows[3]->getDescriptionA();?></p>
							<p id="carousel_4_desc2"><?php echo $slideShows[3]->getDescriptionB();?></p>
						</div>
					</div>
					<div class="item">
						<img src=<?php echo '../images/carousel/' . $slideShows[4]->getLink();?> alt="vancouver.jpg" id="carousel_5_pic">
						<div class="carousel-caption">
							<a href="#" style="color: #FFFFFF; text-decoration: none;"><h3 id="carousel_5_title"><?php echo $slideShows[4]->getTitle();?></h3></a>
							<p id="carousel_5_desc1"><?php echo $slideShows[4]->getDescriptionA();?></p>
							<p id="carousel_5_desc2"><?php echo $slideShows[4]->getDescriptionB();?></p>
						</div>
					</div>
					<div class="item">
                        <img src=<?php echo '../images/carousel/' . $slideShows[5]->getLink();?> alt="slideShowSix" id="carousel_6_pic">
                        <div class="carousel-caption">
                            <a href="#" style="color:#FFFFFF; text-decoration:none;"><h3 id="carousel_6_title"><?php echo $slideShows[5]->getTitle();?></h3></a>
                            <p id="carousel_6_desc1"><?php echo $slideShows[5]->getDescriptionA();?></p>
                            <p id="carousel_6_desc2"><?php echo $slideShows[5]->getDescriptionB();?></p>
                        </div>
                    </div>                    
                    <div class="item">
                        <img src=<?php echo '../images/carousel/' . $slideShows[6]->getLink();?> alt="slideShowSeven" id="carousel_7_pic">
                        <div class="carousel-caption">
                            <a href="#" style="color:#FFFFFF; text-decoration:none;"><h3 id="carousel_7_title"><?php echo $slideShows[6]->getTitle();?></h3></a>
                            <p id="carousel_7_desc1"><?php echo $slideShows[6]->getDescriptionA();?></p>
                            <p id="carousel_7_desc2"><?php echo $slideShows[6]->getDescriptionB();?></p>
                        </div>
                    </div>
				</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
					aria-hidden="true"></span> <span class="sr-only">Previous</span>
				</a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"
					aria-hidden="true"></span> <span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<!--Control Panel-->
		<div class="container">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#menu1">Carousel #1</a></li>
				<li><a data-toggle="tab" href="#menu2">Carousel #2</a></li>
				<li><a data-toggle="tab" href="#menu3">Carousel #3</a></li>
				<li><a data-toggle="tab" href="#menu4">Carousel #4</a></li>
				<li><a data-toggle="tab" href="#menu5">Carousel #5</a></li>
				<li><a data-toggle="tab" href="#menu6">Carousel #6</a></li>
				<li><a data-toggle="tab" href="#menu7">Carousel #7</a></li>
				<li><a data-toggle="tab" href="#menu8">Upload Images</a></li>
			</ul>
			<div class="tab-content">
				<div id="menu1" class="tab-pane fade in active">
					<div class="col-sm-6">
						<h3 id="carousel_1_title">Carousel #1</h3>
						<p>Picture ID: <span id="panel_carousel_1_pic_ID"><?php echo $slideShows[0]->getId();?></span></p>
						<p>Picture Title: <span id="panel_carousel_1_pic_title"><?php echo $slideShows[0]->getTitle();?></span></p>
						<p>Description 1: <span id="panel_carousel_1_desc1"><?php echo $slideShows[0]->getDescriptionA();?></span></p>
						<p>Description 2: <span id="panel_carousel_1_desc2"><?php echo $slideShows[0]->getDescriptionB();?></span></p>
						<p>Link: <span id="panel_carousel_1_link"><?php echo $slideShows[0]->getLink();?></span></p>
						<p>URL: <span id="panel_carousel_1_URL"><?php echo $slideShows[0]->getURL();?></span></p>
					</div>
					<div class="col-sm-6">
						<form action="" method="post" enctype="multipart/form-data" id="carousel_1_form">
							<h3 id="carousel_1">Carousel #1 Management Panel</h3>
							<div class="form-group">
								<label>Picture Title</label> 
								<input type="text" class="form-control" name="title" value="<?php echo $slideShows[0]->getTitle();?>"> 
								<label>Picture Description One</label> 
								<input type="text" class="form-control" name="descriptionA" value="<?php echo $slideShows[0]->getDescriptionA();?>"> 
								<label>Picture Description Two</label> 
								<input type="text" class="form-control" name="descriptionB" value="<?php echo $slideShows[0]->getDescriptionB();?>"> 
								<label>Picture Link</label> 
								<input type="text" class="form-control" name="link" value="<?php echo $slideShows[0]->getLink();?>"> 
								<label>Picture URL</label> 
								<input type="text" class="form-control" name="URL" value="<?php echo $slideShows[0]->getURL();?>">
							</div>
							<input type="button" class="btn-info" id="carousel_1_btn" value="Submit Changes">
						</form>
						<script type="text/javascript">
                            $(document).ready(function() {
                            	$("#carousel_1_btn").unbind("click").bind("click",function(e){
                            		
                            		var datas, xhr;
                            		
                            		datas = new FormData($("#carousel_1_form")[0]);
                            
                            		$.ajax({
                            			url: '../modifyScriptPHP/modifyCarousel.php?id=1', //target php (backend)
                            			type: 'POST',
                            			data: datas,
                            			success: function (data) {
                            			    alert("Modified");
                                			$('#adminContents').load("carousel.php", function() {
                                				$('#content').show()
                                		    });
                            			},
                            			error : function (jqXHR, textStatus, errorThrown) {
                            			    alert("Failed!");                        				
                            			},
                            			cache: false,
                            			contentType: false,
                            			processData: false
                            		});
                            	});
                            		
                            });
                    	</script>
					</div>
				</div>
				<div id="menu2" class="tab-pane fade">
					<div class="col-sm-6">
						<h3 id="carousel_2_title">Carousel #2</h3>
						<p>Picture ID: <span id="panel_carousel_2_pic_ID"><?php echo $slideShows[1]->getId();?></span></p>
						<p>Picture Title: <span id="panel_carousel_2_pic_title"><?php echo $slideShows[1]->getTitle();?></span></p>
						<p>Description 1: <span id="panel_carousel_2_desc1"><?php echo $slideShows[1]->getDescriptionA();?></span></p>
						<p>Description 2: <span id="panel_carousel_2_desc2"><?php echo $slideShows[1]->getDescriptionB();?></span></p>
						<p>Link: <span id="panel_carousel_2_link"><?php echo $slideShows[1]->getLink();?></span></p>
						<p>URL: <span id="panel_carousel_2_URL"><?php echo $slideShows[1]->getURL();?></span></p>
					</div>
					<div class="col-sm-6">
						<form action="" method="post" enctype="multipart/form-data" id="carousel_2_form">
							<h3 id="carousel_2">Carousel #2 Management Panel</h3>
							<div class="form-group">
								<label>Picture Title</label> 
								<input type="text" class="form-control" name="title" value="<?php echo $slideShows[1]->getTitle();?>"> 
								<label>PictureDescription One</label> 
								<input type="text" class="form-control" name="descriptionA" value="<?php echo $slideShows[1]->getDescriptionA();?>"> 
								<label>Picture Description Two</label> 
								<input type="text" class="form-control" name="descriptionB" value="<?php echo $slideShows[1]->getDescriptionB();?>"> 
								<label>Picture Link</label> 
								<input type="text" class="form-control" name="link" value="<?php echo $slideShows[1]->getLink();?>"> 
								<label>Picture URL</label> 
								<input type="text"class="form-control" name="URL" value="<?php echo $slideShows[1]->getURL();?>">
							</div>
							<input type="button" class="btn-info" id="carousel_2_btn" value="Submit Changes">
						</form>
						<script type="text/javascript">
                            $(document).ready(function() {
                            	$("#carousel_2_btn").unbind("click").bind("click",function(e){
                            		
                            		var datas, xhr;
                            		
                            		datas = new FormData($("#carousel_2_form")[0]);
                            
                            		$.ajax({
                            			url: '../modifyScriptPHP/modifyCarousel.php?id=2', //target php (backend)
                            			type: 'POST',
                            			data: datas,
                            			success: function (data) {
                            			    alert("Modified");
                                			$('#adminContents').load("carousel.php", function() {
                                			$('#content').show()
                                		    });
                            			},
                            			error : function (jqXHR, textStatus, errorThrown) {
                            			    alert("Failed!");                        				
                            			},
                            			cache: false,
                            			contentType: false,
                            			processData: false
                            		});
                            	});
                            		
                            });
                    	</script>
					</div>
				</div>
				<div id="menu3" class="tab-pane fade">
					<div class="col-sm-6">
						<h3 id="carousel_3_title">Carousel #3</h3>
						<p>Picture ID: <span id="panel_carousel_3_pic_ID"><?php echo $slideShows[2]->getId();?></span></p>
						<p>Picture Title: <span id="panel_carousel_3_pic_title"><?php echo $slideShows[2]->getTitle();?></span></p>
						<p>Description 1: <span id="panel_carousel_3_desc1"><?php echo $slideShows[2]->getDescriptionA();?></span></p>
						<p>Description 2: <span id="panel_carousel_3_desc2"><?php echo $slideShows[2]->getDescriptionB();?></span></p>
						<p>Link: <span id="panel_carousel_3_link"><?php echo $slideShows[2]->getLink();?></span></p>
						<p>URL: <span id="panel_carousel_3_URL"><?php echo $slideShows[2]->getURL();?></span></p>
					</div>
					<div class="col-sm-6">
						<form action="" method="post" enctype="multipart/form-data" id="carousel_3_form">
							<h3 id="carousel_3">Carousel #3 Management Panel</h3>
							<div class="form-group">
								<label>Picture Title</label> 
								<input type="text" class="form-control" name="title" value="<?php echo $slideShows[2]->getTitle();?>"> 
								<label>Picture Description One</label> 
								<input type="text" class="form-control" name="descriptionA" value="<?php echo $slideShows[2]->getDescriptionA();?>"> 
								<label>Picture Description Two</label> 
								<input type="text" class="form-control" name="descriptionB" value="<?php echo $slideShows[2]->getDescriptionB();?>"> 
								<label>Picture Link</label> 
								<input type="text" class="form-control" name="link" value="<?php echo $slideShows[2]->getLink();?>"> 
								<label>Picture URL</label> 
								<input type="text" class="form-control" name="URL" value="<?php echo $slideShows[2]->getURL();?>">
							</div>
							<input type="button" class="btn-info" id="carousel_3_btn" value="Submit Changes">
						</form>
						<script type="text/javascript">
                            $(document).ready(function() {
                            	$("#carousel_3_btn").unbind("click").bind("click",function(e){
                            		
                            		var datas, xhr;
                            		
                            		datas = new FormData($("#carousel_3_form")[0]);
                            
                            		$.ajax({
                            			url: '../modifyScriptPHP/modifyCarousel.php?id=3', //target php (backend)
                            			type: 'POST',
                            			data: datas,
                            			success: function (data) {
                            			    alert("Modified");
                                			$('#adminContents').load("carousel.php", function() {
                                			$('#content').show()
                                		    });
                            			},
                            			error : function (jqXHR, textStatus, errorThrown) {
                            			    alert("Failed!");                        				
                            			},
                            			cache: false,
                            			contentType: false,
                            			processData: false
                            		});
                            	});
                            		
                            });
                    	</script>
					</div>
				</div>
				<div id="menu4" class="tab-pane fade">
					<div class="col-sm-6">
						<h3 id="carousel_4_title">Carousel #4</h3>
						<p>Picture ID: <span id="panel_carousel_4_pic_ID"><?php echo $slideShows[3]->getId();?></span></p>
						<p>Picture Title: <span id="panel_carousel_4_pic_title"><?php echo $slideShows[3]->getTitle();?></span></p>
						<p>Description 1: <span id="panel_carousel_4_desc1"><?php echo $slideShows[3]->getDescriptionA();?></span></p>
						<p>Description 2: <span id="panel_carousel_4_desc2"><?php echo $slideShows[3]->getDescriptionB();?></span></p>
						<p>Link: <span id="panel_carousel_4_link"><?php echo $slideShows[3]->getLink();?></span></p>
						<p>URL: <span id="panel_carousel_4_URL"><?php echo $slideShows[3]->getURL();?></span></p>
					</div>
					<div class="col-sm-6">
						<form action="" method="post" enctype="multipart/form-data" id="carousel_4_form" >
							<h3 id="carousel_4">Carousel #4 Management Panel</h3>
							<div class="form-group">
								<label>Picture Title</label> 
								<input type="text" class="form-control" name="title" value="<?php echo $slideShows[3]->getTitle();?>"> 
								<label>Picture Description One</label> 
								<input type="text" class="form-control" name="descriptionA" value="<?php echo $slideShows[3]->getDescriptionA();?>"> 
								<label>Picture Description Two</label> 
								<input type="text" class="form-control" name="descriptionB" value="<?php echo $slideShows[3]->getDescriptionB();?>"> 
								<label>Picture Link</label> 
								<input type="text" class="form-control" name="link" value="<?php echo $slideShows[3]->getLink();?>"> 
								<label>Picture URL</label> 
								<input type="text" class="form-control" name="URL" value="<?php echo $slideShows[3]->getURL();?>">
							</div>
							<input type="button" class="btn-info" id="carousel_4_btn" value="Submit Changes">
						</form>
						<script type="text/javascript">
                            $(document).ready(function() {
                            	$("#carousel_4_btn").unbind("click").bind("click",function(e){
                            		
                            		var datas, xhr;
                            		
                            		datas = new FormData($("#carousel_4_form")[0]);
                            
                            		$.ajax({
                            			url: '../modifyScriptPHP/modifyCarousel.php?id=4', //target php (backend)
                            			type: 'POST',
                            			data: datas,
                            			success: function (data) {
                            			    alert("Modified");
                                			$('#adminContents').load("carousel.php", function() {
                                			$('#content').show()
                                		    });
                            			},
                            			error : function (jqXHR, textStatus, errorThrown) {
                            			    alert("Failed!");                        				
                            			},
                            			cache: false,
                            			contentType: false,
                            			processData: false
                            		});
                            	});
                            		
                            });
                    	</script>
					</div>
				</div>
				<div id="menu5" class="tab-pane fade">
					<div class="col-sm-6">
						<h3 id="carousel_5_title">Carousel #5</h3>
						<p>Picture ID: <span id="panel_carousel_5_pic_ID"><?php echo $slideShows[4]->getId();?></span></p>
						<p>Picture Title: <span id="panel_carousel_5_pic_title"><?php echo $slideShows[4]->getTitle();?></span></p>
						<p>Description 1: <span id="panel_carousel_5_desc1"><?php echo $slideShows[4]->getDescriptionA();?></span></p>
						<p>Description 2: <span id="panel_carousel_5_desc2"><?php echo $slideShows[4]->getDescriptionB();?></span></p>
						<p>Link: <span id="panel_carousel_5_link"><?php echo $slideShows[4]->getLink();?></span></p>
						<p>URL: <span id="panel_carousel_5_URL"><?php echo $slideShows[4]->getURL();?></span></p>
					</div>
					<div class="col-sm-6">
						<form action="" method="post" enctype="multipart/form-data" id="carousel_5_form" >
							<h3 id="carousel_5">Carousel #5 Management Panel</h3>
							<div class="form-group">
								<label>Picture Title</label> 
								<input type="text" class="form-control" name="title" value="<?php echo $slideShows[4]->getTitle();?>"> 
								<label>Picture Description One</label> 
								<input type="text" class="form-control" name="descriptionA" value="<?php echo $slideShows[4]->getDescriptionA();?>"> 
								<label>Picture Description Two</label> 
								<input type="text" class="form-control" name="descriptionB" value="<?php echo $slideShows[4]->getDescriptionB();?>"> 
								<label>Picture Link</label> 
								<input type="text" class="form-control" name="link" value="<?php echo $slideShows[4]->getLink();?>"> 
								<label>Picture URL</label> 
								<input type="text" class="form-control" name="URL" value="<?php echo $slideShows[4]->getURL();?>">
							</div>
							<input type="button" class="btn-info" id="carousel_5_btn" value="Submit Changes">
						</form>
						<script type="text/javascript">
                            $(document).ready(function() {
                            	$("#carousel_5_btn").unbind("click").bind("click",function(e){
                            		
                            		var datas, xhr;
                            		
                            		datas = new FormData($("#carousel_5_form")[0]);
                            
                            		$.ajax({
                            			url: '../modifyScriptPHP/modifyCarousel.php?id=5', //target php (backend)
                            			type: 'POST',
                            			data: datas,
                            			success: function (data) {
                                			alert("Modified");
                                			$('#adminContents').load("carousel.php", function() {
                                			$('#content').show()
                                		    });
                            			},
                            			error : function (jqXHR, textStatus, errorThrown) {
                            			    alert("Failed!");                                 			                      				
                            			},
                            			cache: false,
                            			contentType: false,
                            			processData: false
                            		});
                            	});
                            		
                            });
                    	</script>
					</div>
				</div>
				<div id="menu6" class="tab-pane fade">
					<div class="col-sm-6">
						<h3 id="carousel_6_title">Carousel #6</h3>
						<p>Picture ID: <span id="panel_carousel_6_pic_ID"><?php echo $slideShows[5]->getId();?></span></p>
						<p>Picture Title: <span id="panel_carousel_6_pic_title"><?php echo $slideShows[5]->getTitle();?></span></p>
						<p>Description 1: <span id="panel_carousel_6_desc1"><?php echo $slideShows[5]->getDescriptionA();?></span></p>
						<p>Description 2: <span id="panel_carousel_6_desc2"><?php echo $slideShows[5]->getDescriptionB();?></span></p>
						<p>Link: <span id="panel_carousel_6_link"><?php echo $slideShows[5]->getLink();?></span></p>
						<p>URL: <span id="panel_carousel_6_URL"><?php echo $slideShows[5]->getURL();?></span></p>
					</div>
					<div class="col-sm-6">
						<form action="" method="post" enctype="multipart/form-data" id="carousel_6_form" >
							<h3 id="carousel_6">Carousel #6 Management Panel</h3>
							<div class="form-group">
								<label>Picture Title</label> 
								<input type="text" class="form-control" name="title" value="<?php echo $slideShows[5]->getTitle();?>"> 
								<label>Picture Description One</label> 
								<input type="text" class="form-control" name="descriptionA" value="<?php echo $slideShows[5]->getDescriptionA();?>"> 
								<label>Picture Description Two</label> 
								<input type="text" class="form-control" name="descriptionB" value="<?php echo $slideShows[5]->getDescriptionB();?>"> 
								<label>Picture Link</label> 
								<input type="text" class="form-control" name="link" value="<?php echo $slideShows[5]->getLink();?>"> 
								<label>Picture URL</label> 
								<input type="text" class="form-control" name="URL" value="<?php echo $slideShows[5]->getURL();?>">
							</div>
							<input type="button" class="btn-info" id="carousel_6_btn" value="Submit Changes">
						</form>
						<script type="text/javascript">
                            $(document).ready(function() {
                            	$("#carousel_6_btn").unbind("click").bind("click",function(e){
                            		
                            		var datas, xhr;
                            		
                            		datas = new FormData($("#carousel_6_form")[0]);
                            
                            		$.ajax({
                            			url: '../modifyScriptPHP/modifyCarousel.php?id=6', //target php (backend)
                            			type: 'POST',
                            			data: datas,
                            			success: function (data) {
                            			    alert("Modified");
                                			$('#adminContents').load("carousel.php", function() {
                                			$('#content').show()
                                		    });  
                            			},
                            			error : function (jqXHR, textStatus, errorThrown) {
                            			    alert("Failed!");                                 			                     				
                            			},
                            			cache: false,
                            			contentType: false,
                            			processData: false
                            		});
                            	});
                            		
                            });
                    	</script>
					</div>
				</div>
				<div id="menu7" class="tab-pane fade">
					<div class="col-sm-6">
						<h3 id="carousel_7_title">Carousel #6</h3>
						<p>Picture ID: <span id="panel_carousel_7_pic_ID"><?php echo $slideShows[6]->getId();?></span></p>
						<p>Picture Title: <span id="panel_carousel_7_pic_title"><?php echo $slideShows[6]->getTitle();?></span></p>
						<p>Description 1: <span id="panel_carousel_7_desc1"><?php echo $slideShows[6]->getDescriptionA();?></span></p>
						<p>Description 2: <span id="panel_carousel_7_desc2"><?php echo $slideShows[6]->getDescriptionB();?></span></p>
						<p>Link: <span id="panel_carousel_7_link"><?php echo $slideShows[6]->getLink();?></span></p>
						<p>URL: <span id="panel_carousel_7_URL"><?php echo $slideShows[6]->getURL();?></span></p>
					</div>
					<div class="col-sm-6">
						<form action="" method="post" enctype="multipart/form-data" id="carousel_7_form" >
							<h3 id="carousel_7">Carousel #7 Management Panel</h3>
							<div class="form-group">
								<label>Picture Title</label> 
								<input type="text" class="form-control" name="title" value="<?php echo $slideShows[6]->getTitle();?>"> 
								<label>Picture Description One</label> 
								<input type="text" class="form-control" name="descriptionA" value="<?php echo $slideShows[6]->getDescriptionA();?>"> 
								<label>Picture Description Two</label> 
								<input type="text" class="form-control" name="descriptionB" value="<?php echo $slideShows[6]->getDescriptionB();?>"> 
								<label>Picture Link</label> 
								<input type="text" class="form-control" name="link" value="<?php echo $slideShows[6]->getLink();?>"> 
								<label>Picture URL</label> 
								<input type="text" class="form-control" name="URL" value="<?php echo $slideShows[6]->getURL();?>">
							</div>
							<input type="button" class="btn-info" id="carousel_7_btn" value="Submit Changes">
						</form>
						<script type="text/javascript">
                            $(document).ready(function() {
                            	$("#carousel_7_btn").unbind("click").bind("click",function(e){
                            		
                            		var datas, xhr;
                            		
                            		datas = new FormData($("#carousel_7_form")[0]);
                            
                            		$.ajax({
                            			url: '../modifyScriptPHP/modifyCarousel.php?id=7', //target php (backend)
                            			type: 'POST',
                            			data: datas,
                            			success: function (data) {
                            			    alert("Modified");
                                			$('#adminContents').load("carousel.php", function() {
                                			$('#content').show()
                                		    }); 
                            			},
                            			error : function (jqXHR, textStatus, errorThrown) {
                            			    alert("Failed!");                                			                      				
                            			},
                            			cache: false,
                            			contentType: false,
                            			processData: false
                            		});
                            	});
                            		
                            });
                    	</script>
					</div>
				</div>
				
				<div id="menu8" class="tab-pane fade">
					<form action="" method="post" enctype="multipart/form-data" id="uploadImageForm">
						<input type="file" name="uploadImage" id="uploadImage" accept="image/*"/> 
						<br /> 
						<input type="button" id="uploadImageButton" value="submit image"/>
					</form>

                    <script type="text/javascript">
                        $(document).ready(function() {
                        	$("#uploadImageButton").unbind("click").bind("click",function(e){
                        		
                        		var datas, xhr;
                        		
                        		datas = new FormData($("#uploadImageForm")[0]);
                        
                        		$.ajax({
                        			url: './ajax-test2.php', //target php (backend)
                        			type: 'POST',
                        			data: datas,
                        			success: function (data) {
                        				alert("Uploaded");
                        				$('#adminContents').load("carousel.php", function() {
                            			$('#content').show()
                            		    }); 
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
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<footer>
			<p>
				Note: <br />1. The <b>Picture Link</b> requires the full name of images, e.g. <b>file.jpg</b>. 
				<br />2. The URL is for future use, so far it could be omitted. 
				<br />3. Regarding the type of images, only <b>jpeg, jpg, png</b> are valid. 
				<br />4. A proper image size should	be 1920*600.
			</p>
		</footer>
	</div>
