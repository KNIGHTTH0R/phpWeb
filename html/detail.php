<!DOCTYPE html>
<html lang="en">
<?php
    $absPathHead = "http://" . $_SERVER ['HTTP_HOST'];
    
    $defaultPicturePath = $absPathHead . '/web/images/product/logo.png';
    if (isset ( $_GET ['productID'] )) {
    	$productId = $_GET ['productID'];
    } else {
    	header ( 'location:../html/index.php' );
    }
    require_once (dirname(__FILE__) . '/../DAO/productDAO.php');
    require_once (dirname(__FILE__) . '/../model/product.php');
    require_once (dirname(__FILE__) . '/../DAO/pictureDAO.php');
    require_once (dirname(__FILE__) . '/../model/picture.php');
    require_once (dirname(__FILE__) . '/../DAO/scheduleDAO.php');
    require_once (dirname(__FILE__) . '/../model/schedule.php');
    require_once (dirname(__FILE__) . '/index_sidebar.php');
    
    $pictureDAO = new pictureDAO ();
    $productDAO = new productDAO ();
    $scheduleDAO = new scheduleDAO ();
    $product = $productDAO->getProduct ( $productId );
    $picture = $pictureDAO->getPictureByProduct ( $productId );
    $pictureIndex = $pictureDAO->getCount ( $productId );
    $scheduleIndex = $scheduleDAO->getCount ( $productId );
    
?>
<head>
    <title>IShallTravel旅行网</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $absPathHead . '/web/css/bootstrap.min.css';?>">
    <link rel="stylesheet" href="<?php echo $absPathHead . '/web/css/styles.css';?>">
    <script src="<?php echo $absPathHead . '/web/js/jquery-3.2.1.min.js';?>"></script>
    <script src="<?php echo $absPathHead . '/web/js/bootstrap.min.js';?>"></script>
    <script src="<?php echo $absPathHead . '/web/js/script.js';?>"></script>
    <?php
		$css = file_get_contents ( "http://" . $_SERVER ['HTTP_HOST'] . '/web/css/styles.css' );
		echo "<style>" . $css . "</style>";				
	?>
    <style>
        body.detail {
        	font-family: 'Microsoft Yahei';
        }
        
        div.header {
        	position: relative;
        	top: 10px;
        	color: #104BA9;
        }
        
        td {
        	width: 100px;
        }
        
        div.itinerary, div.price, div.info {
        	color: #000000;
        }
        
        blockquote {
        	font-size: 1em;
        }
        
        img.slideshow {
            max-width: 550px;
            max-height: 280px;
            width: auto;
            height: auto;
            display: block;
            overflow : auto; 
            margin : auto; 
            position : absolute; 
            top : 0; left : 0;  bottom : 0; right : 0; 
            
        }
        
        div.item {
            width: 550px;
            height: 280px;
            position:relative;
        }
    </style>
</head>

<body class="detail">
    <?php
    require_once (dirname(__FILE__). '/index_navbar.php');
	?>     

    <!--Detail Page-->
	<div class="container header">
		<p><br><a href="<?php echo $absPathHead . '/web/html/index.php'; ?>">主页</a> >> <?php 
		if( $product->getCategoryId() == 1) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=1' . '">美国东部</a>';
		} elseif ( $product->getCategoryId() == 2 ) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=2' . '">美国西部</a>';
		} elseif ( $product->getCategoryId() == 3 ) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=3' . '">加拿大东部</a>';
		} elseif ( $product->getCategoryId() == 4 ) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=4' . '">加拿大西部</a>';
		} elseif ( $product->getCategoryId() == 5 ) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=5' . '">亚洲其他地区</a>';
		} elseif ( $product->getCategoryId() == 6 ) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=6' . '">欧洲</a>';
		} elseif ( $product->getCategoryId() == 7 ) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=6' . '">古巴</a>';
		} elseif ( $product->getCategoryId() == 8 ) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=6' . '">牙买加</a>';
		} elseif ( $product->getCategoryId() == 9 ) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=6' . '">墨西哥</a>';
		} elseif ( $product->getCategoryId() == 10 ) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=6' . '">多米尼加</a>';
		} elseif ( $product->getCategoryId() == 11 ) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=6' . '">中国</a>';
		} elseif ( $product->getCategoryId() == 12 ) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=6' . '">香港/澳门/台湾</a>';
		} elseif ( $product->getCategoryId() == 13 ) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=6' . '">日本/韩国</a>';
		} elseif ( $product->getCategoryId() == 14 ) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=6' . '">美国其他地区</a>';
		} elseif ( $product->getCategoryId() == 15 ) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=6' . '">加拿大其他地区</a>';
		} elseif ( $product->getCategoryId() == 16 ) {
		    echo '<a href="' . $absPathHead . '/web/html/list.php?categoryID=6' . '">其他</a>';
		} else {
		    
		}		
		?></p>
		<!--Header-->
		<div class="thumbnail">
			<div class="row">
				<h3 style="margin-left: 20px; " ><?php echo $product->getTitle(); ?></h3>
				<br />
				<div class="col-sm-6">
					<!--Carousel-->
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
                        <?php
							for($i = 0; $i < $pictureIndex; $i ++) {
							    echo '<li data-target="#myCarousel" data-slide-to="' . $i;
    							if ($i == 0) {
    							   echo '" class="active"></li>';
    							} else {
    							   echo '"></li>';
    							}
							}
						?>
                        </ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">                        
                            <?php
                            
                                if(!$picture || $picture == null){
                                    $picture = array('/web/images/product/logo.png');
                                }
    							for($i = 0; $i < $pictureIndex; $i ++) {
    								echo '<div class="item';
    								if ($i == 0) {
    									echo ' active">';
    								} else {
    									echo '">';
    								}
    								
    								if($picture[$i]->getPictureURL() != null && $picture[$i]->getPictureURL() != ''){
    								    echo '<img class="slideshow" src="' . $absPathHead ."/web". $picture[$i]->getPictureURL() . $picture[$i]->getPictureSavedName() . '">';
    								}else{
    									echo '<img class="slideshow" src="' . $absPathHead . '/web/images/product/logo.png">';
    									
    								}
    								echo '</div>';
    								
    							}
                                
    						?>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" role="button"
							data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
							aria-hidden="true"></span> <span class="sr-only">Previous</span>
						</a> <a class="right carousel-control" href="#myCarousel"
							role="button" data-slide="next"> <span
							class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-sm-6">                	
                    <p style="color: #FF6500;">
						<?php 
						if ($product->getMinPrice() == 0) {
						    echo "Price N/A";						    
						} else {
						    if ($product->getDiscount() != null || $product->getDiscount() !=0) {
						        echo '<span style="color:#000000;"><s>$ ' . $product->getMinPrice() . '</s></span>  ' . '<span style="font-size: 3em;"> $' . number_format($product->getMinPrice() * (1-$product->getDiscount()/100), 2) . '</span> CAD 起/人';
						    } else {	
						        echo '$ <span style="font-size: 3em;">' . number_format($product->getMinPrice(), 2) . '</span> CAD 起/人';
						    }
						} ?>						
					</p>
					<div class="table-responsive">
						<table>
							<tbody>
								<tr>
									<td>类型:</td>
									<td><?php 
									
									$tourT = $product->getTourType();
									if ($tourT == 1){
									    echo "大巴";
									} elseif ($tourT == 2){
									    echo "飞机";
									} elseif ($tourT == 3){
									    echo "others";
									} else {
									    echo "error";
									    
									}
									
									?> </td>
									<td>出发地：</td>
									<td><?php  echo $product->getCityOfStart();?></td>
								</tr>
								<tr>
									<td>行程天数：</td>
									<td><?php echo $product->getNumberOfDays(); ?></td>
									<td>目的地：</td>
									<td><?php  echo $product->getCityOfEnd();?></td>
								</tr>
							</tbody>
						</table>
					</div>
					<br />
						<p style="color:#000000;"><?php echo nl2br($product->getDescription()); ?></p>
					<br />
					<?php if ($product->getPdf()!=null && $product->getPdf() != "?")
					{
						echo '	<form action="/web'.$product->getPdf().'">
						<input type="submit" value="DOWNLOAD">
					</form>';
						
					}
						?>
				
				</div>
			</div>
		</div>


		<!--itinerary-->
		<div class="thumbnail itinerary">
        <?php
			for($i = 0; $i < $scheduleIndex; $i ++) {
				$schedule = $scheduleDAO->getScheduleByDay ((int) $_GET ['productID'], $i + 1 );
				echo '<div class="row">
                        <div class="col-sm-1">
                           <h3>第' . $schedule->getDay () . '天</h3>
                        </div>
                        <div class="col-sm-11">
                           <h3>' . $schedule->getTitle () . '</h3>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-1">
                            <p>行程介绍</p>
                        </div>
                        <div class="col-sm-11">
                            <p>' . nl2br($schedule->getDescription ()) . '</p>
                        </div>
                      </div>';
				echo '<div class="row">
                      <div class="col-sm-1">
                        <p>住宿安排</p>
                      </div>
                      <div class="col-sm-11">
                        <p>' . $schedule->getHotel () . '</p>
                      </div>
                      </div>';
			    echo '<div class="row">
                        <div class="col-sm-1">
                            <p>膳食</p>
                        </div>
                        <div class="col-sm-11">
                            <table class="table table-bordered">   
                            	<tr>
                             	   <td>早餐</td>
                             	   <td>午餐</td>
                             	   <td>晚餐</td>
                         	    </tr>
                         	    <tr>
                            	   <td>' . $schedule->getBreakfast () . '</td>
                            	   <td>' . $schedule->getLunch () . '</td>
                           	   	   <td>' . $schedule->getDinner () . '</td>
                                </tr>
                            </table>
                        </div>
                     </div>';
			}
		?>
        </div>
        

		<!--price-->
		<div class="thumbnail price">
			<div class="row">
				<div class="col-sm-1">
					<img src="../images/icon/icon_price_48.png">
				</div>
				<div class="col-sm-11">
					<p style="color: #FF6500;"><span style="font-size: 1.5em;">报名费</span> (CAD)</p>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th nowrap>单人房</th>
								<th nowrap>双人房/人</th>
								<th nowrap>三人房/人</th>
								<th nowrap>四人房/人</th>
								<th nowrap>税</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td nowrap><?php if ($product->getSingle() == 0) {echo 'N/A';} else {echo $product->getSingle();} ?></td>
								<td nowrap><?php if ($product->getDouble()== 0) {echo 'N/A';} else {echo $product->getDouble();} ?></td>
								<td nowrap><?php if ($product->getTriple()== 0) {echo 'N/A';} else {echo $product->getTriple();} ?></td>
								<td nowrap><?php if ($product->getQuard()== 0) {echo 'N/A';} else {echo $product->getQuard();} ?></td>
								<td nowrap>13%</td>
							</tr>
						</tbody>
					</table>
					<p>费用包含</p>
					<div>
						<p><?php echo nl2br($product->getPriceIncluded()); ?></p>
					</div>

					<p>费用不包含</p>
					<div>
						<p><?php echo nl2br($product->getPriceNotIncluded()); ?></p>
					</div>
				</div>
			</div>
		</div>

		<!--info-->
		<div class="thumbnail info">
			<div class="row">
				<div class="col-sm-1">
					<img src="../images/icon/icon_infor_48.png">
				</div>
				<div class="col-sm-11">
					<p style="color: #FF6500;"><span style="font-size: 1.5em;">条款</span> Terms and Conditions</p>
					<div>
						<p><?php echo nl2br($product->getTerms()) ;?></p>						
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php
    require_once (dirname(__FILE__). '/index_footer.php');
	?>
</body>
</html>
