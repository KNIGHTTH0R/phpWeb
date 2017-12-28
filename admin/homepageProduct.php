<!DOCTYPE html>
<html lang="zh">
<?php
$absPathHead = "http://" . $_SERVER['HTTP_HOST'];

require_once (dirname(__FILE__) . '/../DAO/positionDAO.php');
require_once (dirname(__FILE__) . '/../model/position.php');
require_once (dirname(__FILE__) . '/../DAO/productDAO.php');
require_once (dirname(__FILE__) . '/../model/product.php');
require_once (dirname(__FILE__) . '/../DAO/pictureDAO.php');
require_once (dirname(__FILE__) . '/../model/picture.php');
$positionDAO = new positionDAO();
$positions = $positionDAO->getPositions();
$productDAO = new productDAO();
$product_a1 = $productDAO->getProduct($positions[0]->getA1());
$product_a2 = $productDAO->getProduct($positions[0]->getA2());
$product_a3 = $productDAO->getProduct($positions[0]->getA3());
$product_a4 = $productDAO->getProduct($positions[0]->getA4());
$product_a5 = $productDAO->getProduct($positions[0]->getA5());
$product_a6 = $productDAO->getProduct($positions[0]->getA6());

$product_b1 = $productDAO->getProduct($positions[0]->getB1());
$product_b2 = $productDAO->getProduct($positions[0]->getB2());
$product_b3 = $productDAO->getProduct($positions[0]->getB3());
$product_b4 = $productDAO->getProduct($positions[0]->getB4());

$product_c1 = $productDAO->getProduct($positions[0]->getC1());
$product_c2 = $productDAO->getProduct($positions[0]->getC2());
$product_c3 = $productDAO->getProduct($positions[0]->getC3());
$product_c4 = $productDAO->getProduct($positions[0]->getC4());

$product_d1 = $productDAO->getProduct($positions[0]->getD1());
$product_d2 = $productDAO->getProduct($positions[0]->getD2());
$product_d3 = $productDAO->getProduct($positions[0]->getD3());
$product_d4 = $productDAO->getProduct($positions[0]->getD4());

$product_e1 = $productDAO->getProduct($positions[0]->getE1());
$product_e2 = $productDAO->getProduct($positions[0]->getE2());
$product_e3 = $productDAO->getProduct($positions[0]->getE3());
$product_e4 = $productDAO->getProduct($positions[0]->getE4());

$product_f1 = $productDAO->getProduct($positions[0]->getF1());
$product_f2 = $productDAO->getProduct($positions[0]->getF2());
$product_f3 = $productDAO->getProduct($positions[0]->getF3());
$product_f4 = $productDAO->getProduct($positions[0]->getF4());

$product_g1 = $productDAO->getProduct($positions[0]->getG1());
$product_g2 = $productDAO->getProduct($positions[0]->getG2());
$product_g3 = $productDAO->getProduct($positions[0]->getG3());
$product_g4 = $productDAO->getProduct($positions[0]->getG4());

$product_h1 = $productDAO->getProduct($positions[0]->getH1());
$product_h2 = $productDAO->getProduct($positions[0]->getH2());
$product_h3 = $productDAO->getProduct($positions[0]->getH3());
$product_h4 = $productDAO->getProduct($positions[0]->getH4());

$pictureDAO = new pictureDAO();
$picture_a1 = $pictureDAO->getPictureByProduct($positions[0]->getA1());
$picture_a2 = $pictureDAO->getPictureByProduct($positions[0]->getA2());
$picture_a3 = $pictureDAO->getPictureByProduct($positions[0]->getA3());
$picture_a4 = $pictureDAO->getPictureByProduct($positions[0]->getA4());
$picture_a5 = $pictureDAO->getPictureByProduct($positions[0]->getA5());
$picture_a6 = $pictureDAO->getPictureByProduct($positions[0]->getA6());

$picture_b1 = $pictureDAO->getPictureByProduct($positions[0]->getB1());
$picture_b2 = $pictureDAO->getPictureByProduct($positions[0]->getB2());
$picture_b3 = $pictureDAO->getPictureByProduct($positions[0]->getB3());
$picture_b4 = $pictureDAO->getPictureByProduct($positions[0]->getB4());

$picture_c1 = $pictureDAO->getPictureByProduct($positions[0]->getC1());
$picture_c2 = $pictureDAO->getPictureByProduct($positions[0]->getC2());
$picture_c3 = $pictureDAO->getPictureByProduct($positions[0]->getC3());
$picture_c4 = $pictureDAO->getPictureByProduct($positions[0]->getC4());

$picture_d1 = $pictureDAO->getPictureByProduct($positions[0]->getD1());
$picture_d2 = $pictureDAO->getPictureByProduct($positions[0]->getD2());
$picture_d3 = $pictureDAO->getPictureByProduct($positions[0]->getD3());
$picture_d4 = $pictureDAO->getPictureByProduct($positions[0]->getD4());

$picture_e1 = $pictureDAO->getPictureByProduct($positions[0]->getE1());
$picture_e2 = $pictureDAO->getPictureByProduct($positions[0]->getE2());
$picture_e3 = $pictureDAO->getPictureByProduct($positions[0]->getE3());
$picture_e4 = $pictureDAO->getPictureByProduct($positions[0]->getE4());

$picture_f1 = $pictureDAO->getPictureByProduct($positions[0]->getF1());
$picture_f2 = $pictureDAO->getPictureByProduct($positions[0]->getF2());
$picture_f3 = $pictureDAO->getPictureByProduct($positions[0]->getF3());
$picture_f4 = $pictureDAO->getPictureByProduct($positions[0]->getF4());

$picture_g1 = $pictureDAO->getPictureByProduct($positions[0]->getG1());
$picture_g2 = $pictureDAO->getPictureByProduct($positions[0]->getG2());
$picture_g3 = $pictureDAO->getPictureByProduct($positions[0]->getG3());
$picture_g4 = $pictureDAO->getPictureByProduct($positions[0]->getG4());

$picture_h1 = $pictureDAO->getPictureByProduct($positions[0]->getH1());
$picture_h2 = $pictureDAO->getPictureByProduct($positions[0]->getH2());
$picture_h3 = $pictureDAO->getPictureByProduct($positions[0]->getH3());
$picture_h4 = $pictureDAO->getPictureByProduct($positions[0]->getH4());

if (isset($_GET['modified'])) {
    if ($_GET['modified'] == "true") {
        echo "<script>popUpModified()</script>";
    } else {
        echo "<script>popUpError()</script>";
    }
}
?>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Management</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container">
		<div class="row text-center">
			<h2>
				<b>Home Page Products Management</b>
			</h2>
		</div>
		<div class="row">
			<p>
				Note: <br />1. Please use the list page (e.g. to open the canada east list page, please through: Homepage->美加->加东) to identify which product
				would be added into the home page. <br />2. In the list page, there is a product ID in each product, copy the ID and tpye it into the
				relative blank, then the product in the home page will change automatically. <br />3. A proper image size for any product should be 450*300.
			</p>
		</div>
		<!--Control Panel-->
		<div class="container">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#menu1">Promotions</a></li>
				<li><a data-toggle="tab" href="#menu2">Canada-East</a></li>
				<li><a data-toggle="tab" href="#menu3">Canada-West</a></li>
				<li><a data-toggle="tab" href="#menu4">America-East</a></li>
				<li><a data-toggle="tab" href="#menu5">America-West</a></li>
				<li><a data-toggle="tab" href="#menu6">China</a></li>
				<li><a data-toggle="tab" href="#menu7">Asia</a></li>
				<li><a data-toggle="tab" href="#menu8">Europe</a></li>
			</ul>
			<div class="tab-content">
			
				<div id="menu1" class="tab-pane fade in active">
					<div class="row">
						<!--Categorized destination -->
						<div class="container">
							<div class="row text-center">
								<h2>秒杀活动</h2>
								<div class="col-sm-4">
                                    <div class="thumbnail thumbnail_promotion">
                                        <?php
                                            if (!empty($product_a1)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_a1->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_a1[0]->getPictureURL() . $picture_a1[0]->getPictureSavedName() . '" alt="product_a1">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_a1->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_a1->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_a1->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_a1->getDiscount() != null || $product_a1->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_a1->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_a1->getMinPrice() * (1-$product_a1->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_a1->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getA1() . ' does not exist</p>';
                                            }
                                        ?>                             
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="thumbnail thumbnail_promotion">
                                        <?php
                                            if (!empty($product_a2)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_a2->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_a2[0]->getPictureURL() . $picture_a2[0]->getPictureSavedName() . '" alt="product_a2">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_a2->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_a2->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_a2->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_a2->getDiscount() != null || $product_a2->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_a2->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_a2->getMinPrice() * (1-$product_a2->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_a2->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getA2() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="thumbnail thumbnail_promotion">
                                    	<?php
                                            if (!empty($product_a3)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_a3->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_a3[0]->getPictureURL() . $picture_a3[0]->getPictureSavedName() . '" alt="product_a3">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_a3->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_a3->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_a3->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_a3->getDiscount() != null || $product_a3->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_a3->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_a3->getMinPrice() * (1-$product_a3->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_a3->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getA3() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>            
                            </div>
                                                        
                            <div class="row text-center">
                                <div class="col-sm-4">
                                    <div class="thumbnail thumbnail_promotion">
                                    	<?php
                                            if (!empty($product_a4)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_a4->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_a4[0]->getPictureURL() . $picture_a4[0]->getPictureSavedName() . '" alt="product_a4">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_a4->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_a4->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_a4->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_a4->getDiscount() != null || $product_a4->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_a4->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_a4->getMinPrice() * (1-$product_a4->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_a4->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getA4() . ' does not exist</p>';
                                            }
                                        ?>                    
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="thumbnail thumbnail_promotion">
                                    	<?php
                                            if (!empty($product_a5)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_a5->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_a5[0]->getPictureURL() . $picture_a5[0]->getPictureSavedName() . '" alt="product_a5">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_a5->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_a5->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_a5->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_a5->getDiscount() != null || $product_a5->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_a5->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_a5->getMinPrice() * (1-$product_a5->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_a5->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getA5() . ' does not exist</p>';
                                            }
                                        ?>                    
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="thumbnail thumbnail_promotion">
                                    	<?php
                                            if (!empty($product_a6)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_a6->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_a6[0]->getPictureURL() . $picture_a6[0]->getPictureSavedName() . '" alt="product_a6">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_a6->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_a6->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_a6->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_a6->getDiscount() != null || $product_a6->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_a6->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_a6->getMinPrice() * (1-$product_a6->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_a6->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getA6() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>            
                            </div>
							<form action="" method="post" enctype="multipart/form-data" id="product_1_form">
								<div class="row">
									<div class="col-sm-2">
										<div class="form-group">
											<label>Change 促销 #1 ID to: </label> <input type="text" name="a1" value="<?php echo $positions[0]->getA1();?>">
										</div>
									</div>
									<div class="col-sm-2">
										<div class="form-group">
											<label>Change 促销 #2 ID to: </label> <input type="text" name="a2" value="<?php echo $positions[0]->getA2();?>">
										</div>
									</div>
									<div class="col-sm-2">
										<div class="form-group">
											<label>Change 促销 #3 ID to: </label> <input type="text" name="a3" value="<?php echo $positions[0]->getA3();?>">
										</div>
									</div>
									<div class="col-sm-2">
										<div class="form-group">
											<label>Change 促销 #4 ID to: </label> <input type="text" name="a4" value="<?php echo $positions[0]->getA4();?>">
										</div>
									</div>
									<div class="col-sm-2">
										<div class="form-group">
											<label>Change 促销 #5 ID to: </label> <input type="text" name="a5" value="<?php echo $positions[0]->getA5();?>">
										</div>
									</div>
									<div class="col-sm-2">
										<div class="form-group">
											<label>Change 促销 #6 ID to: </label> <input type="text" name="a6" value="<?php echo $positions[0]->getA6();?>">
										</div>
									</div>
								</div>
								<div class="row">
									<input type="button" class="btn-info" id="product_1_btn" value="Submit Changes">
								</div>
							</form>
							<script type="text/javascript">
                                $(document).ready(function() {
                                	$("#product_1_btn").unbind("click").bind("click",function(e){
                                		
                                		var datas, xhr;
                                		
                                		datas = new FormData($("#product_1_form")[0]);
                                
                                		$.ajax({
                                			url: '../modifyScriptPHP/modifyHomepageProduct.php?id=1', //target php (backend)
                                			type: 'POST',
                                			data: datas,
                                			success: function (data) {
                                			    alert("Modified");
                                			    $('#adminContents').load("homepageProduct.php", function() {
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
				</div>
				
				<div id="menu2" class="tab-pane fade">
					<div class="row">
						<!--Categorized destination -->
						<div class="container">
							<div class="row text-center">
								<h2>加拿大东部游</h2>
								<div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_b1)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_b1->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_b1[0]->getPictureURL() . $picture_b1[0]->getPictureSavedName() . '" alt="product_b1">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_b1->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_b1->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_b1->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_b1->getDiscount() != null || $product_b1->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_b1->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_b1->getMinPrice() * (1-$product_b1->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_b1->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getB1() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_b2)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_b2->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_b2[0]->getPictureURL() . $picture_b2[0]->getPictureSavedName() . '" alt="product_b2">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_b2->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_b2->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_b2->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_b2->getDiscount() != null || $product_b2->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_b2->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_b2->getMinPrice() * (1-$product_b2->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_b2->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getB2() . ' does not exist</p>';
                                            }
                                        ?>                     
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_b3)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_b3->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_b3[0]->getPictureURL() . $picture_b3[0]->getPictureSavedName() . '" alt="product_b3">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_b3->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_b3->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_b3->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_b3->getDiscount() != null || $product_b3->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_b3->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_b3->getMinPrice() * (1-$product_b3->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_b3->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getB3() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_b4)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_b4->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_b4[0]->getPictureURL() . $picture_b4[0]->getPictureSavedName() . '" alt="product_b4">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_b4->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_b4->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_b4->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_b4->getDiscount() != null || $product_b4->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_b4->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_b4->getMinPrice() * (1-$product_b4->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_b4->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getB4() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
							
							<form action="" method="post" enctype="multipart/form-data" id="product_2_form">
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 加东 #1 ID to: </label> <input type="text" name="b1" value="<?php echo $positions[0]->getB1();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 加东 #2 ID to: </label> <input type="text" name="b2" value="<?php echo $positions[0]->getB2();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 加东 #3 ID to: </label> <input type="text" name="b3" value="<?php echo $positions[0]->getB3();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 加东 #4 ID to: </label> <input type="text" name="b4" value="<?php echo $positions[0]->getB4();?>">
										</div>
									</div>
								</div>
								<div class="row">
									<input type="button" class="btn-info" id="product_2_btn" value="Submit Changes">
								</div>
							</form>
							<script type="text/javascript">
                                $(document).ready(function() {
                                	$("#product_2_btn").unbind("click").bind("click",function(e){
                                		
                                		var datas, xhr;
                                		
                                		datas = new FormData($("#product_2_form")[0]);
                                
                                		$.ajax({
                                			url: '../modifyScriptPHP/modifyHomepageProduct.php?id=2', //target php (backend)
                                			type: 'POST',
                                			data: datas,
                                			success: function (data) {
                                			    alert("Modified");
                                			    $('#adminContents').load("homepageProduct.php", function() {
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
				</div>
				
				<div id="menu3" class="tab-pane fade">
					<div class="row">
						<!--Categorized destination -->
						<div class="container">
							<div class="row text-center">
								<h2>加拿大西部游</h2>
								<div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_c1)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_c1->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_c1[0]->getPictureURL() . $picture_c1[0]->getPictureSavedName() . '" alt="product_c1">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_c1->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_c1->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_c1->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_c1->getDiscount() != null || $product_c1->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_c1->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_c1->getMinPrice() * (1-$product_c1->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_c1->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getC1() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_c2)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_c2->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_c2[0]->getPictureURL() . $picture_c2[0]->getPictureSavedName() . '" alt="product_c2">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_c2->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_c2->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_c2->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_c2->getDiscount() != null || $product_c2->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_c2->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_c2->getMinPrice() * (1-$product_c2->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_c2->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getC2() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_c3)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_c3->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_c3[0]->getPictureURL() . $picture_c3[0]->getPictureSavedName() . '" alt="product_c3">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_c3->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_c3->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_c3->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_c3->getDiscount() != null || $product_c3->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_c3->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_c3->getMinPrice() * (1-$product_c3->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_c3->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getC3() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_c4)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_c4->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_c4[0]->getPictureURL() . $picture_c4[0]->getPictureSavedName() . '" alt="product_c4">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_c4->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_c4->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_c4->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_c4->getDiscount() != null || $product_c4->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_c4->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_c4->getMinPrice() * (1-$product_c4->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_c4->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getC4() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
							</div>
							<form action="" method="post" enctype="multipart/form-data" id="product_3_form">
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 加西 #1 ID to: </label> <input type="text" name="c1" value="<?php echo $positions[0]->getC1();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 加西 #2 ID to: </label> <input type="text" name="c2" value="<?php echo $positions[0]->getC2();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 加西 #3 ID to: </label> <input type="text" name="c3" value="<?php echo $positions[0]->getC3();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 加西 #4 ID to: </label> <input type="text" name="c4" value="<?php echo $positions[0]->getC4();?>">
										</div>
									</div>
								</div>
								<div class="row">
									<input type="button" class="btn-info" id="product_3_btn" value="Submit Changes">
								</div>
							</form>
							<script type="text/javascript">
                                $(document).ready(function() {
                                	$("#product_3_btn").unbind("click").bind("click",function(e){
                                		
                                		var datas, xhr;
                                		
                                		datas = new FormData($("#product_3_form")[0]);
                                
                                		$.ajax({
                                			url: '../modifyScriptPHP/modifyHomepageProduct.php?id=3', //target php (backend)
                                			type: 'POST',
                                			data: datas,
                                			success: function (data) {
                                			    alert("Modified");
                                			    $('#adminContents').load("homepageProduct.php", function() {
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
				</div>
				
				<div id="menu4" class="tab-pane fade">
					<div class="row">
						<!--Categorized destination -->
						<div class="container">
							<div class="row text-center">
								<h2>美国东部游</h2>
								<div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_d1)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_d1->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_d1[0]->getPictureURL() . $picture_d1[0]->getPictureSavedName() . '" alt="product_d1">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_d1->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_d1->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_d1->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_d1->getDiscount() != null || $product_d1->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_d1->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_d1->getMinPrice() * (1-$product_d1->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_d1->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getD1() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_d2)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_d2->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_d2[0]->getPictureURL() . $picture_d2[0]->getPictureSavedName() . '" alt="product_d2">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_d2->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_d2->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_d2->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_d2->getDiscount() != null || $product_d2->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_d2->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_d2->getMinPrice() * (1-$product_d2->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_d2->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getD2() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_d3)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_d3->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_d3[0]->getPictureURL() . $picture_d3[0]->getPictureSavedName() . '" alt="product_d3">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_d3->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_d3->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_d3->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_d3->getDiscount() != null || $product_d3->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_d3->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_d3->getMinPrice() * (1-$product_d3->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_d3->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getD3() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_d4)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_d4->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_d4[0]->getPictureURL() . $picture_d4[0]->getPictureSavedName() . '" alt="product_d4">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_d4->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_d4->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_d4->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_d4->getDiscount() != null || $product_d4->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_d4->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_d4->getMinPrice() * (1-$product_d4->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_d4->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getD4() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
							</div>
							<form action="" method="post" enctype="multipart/form-data" id="product_4_form">
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 美东 #1 ID to: </label> <input type="text" name="d1" value="<?php echo $positions[0]->getD1();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 美东 #2 ID to: </label> <input type="text" name="d2" value="<?php echo $positions[0]->getD2();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 美东 #3 ID to: </label> <input type="text" name="d3" value="<?php echo $positions[0]->getD3();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 美东 #4 ID to: </label> <input type="text" name="d4" value="<?php echo $positions[0]->getD4();?>">
										</div>
									</div>
								</div>
								<div class="row">
									<input type="button" class="btn-info" id="product_4_btn" value="Submit Changes">
								</div>
							</form>
							<script type="text/javascript">
                                $(document).ready(function() {
                                	$("#product_4_btn").unbind("click").bind("click",function(e){
                                		
                                		var datas, xhr;
                                		
                                		datas = new FormData($("#product_4_form")[0]);
                                
                                		$.ajax({
                                			url: '../modifyScriptPHP/modifyHomepageProduct.php?id=4', //target php (backend)
                                			type: 'POST',
                                			data: datas,
                                			success: function (data) {
                                			    alert("Modified");
                                			    $('#adminContents').load("homepageProduct.php", function() {
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
				</div>
				
				<div id="menu5" class="tab-pane fade">
					<div class="row">
						<!--Categorized destination -->
						<div class="container">
							<div class="row text-center">
								<h2>美国西部游</h2>
								<div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_e1)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_e1->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_e1[0]->getPictureURL() . $picture_e1[0]->getPictureSavedName() . '" alt="product_e1">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_e1->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_e1->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_e1->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_e1->getDiscount() != null || $product_e1->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_e1->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_e1->getMinPrice() * (1-$product_e1->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_e1->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getE1() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_e2)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_e2->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_e2[0]->getPictureURL() . $picture_e2[0]->getPictureSavedName() . '" alt="product_e2">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_e2->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_e2->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_e2->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_e2->getDiscount() != null || $product_e2->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_e2->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_e2->getMinPrice() * (1-$product_e2->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_e2->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getE2() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_e3)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_e3->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_e3[0]->getPictureURL() . $picture_e3[0]->getPictureSavedName() . '" alt="product_e3">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_e3->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_e3->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_e3->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_e3->getDiscount() != null || $product_e3->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_e3->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_e3->getMinPrice() * (1-$product_e3->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_e3->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getE3() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_e4)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_e4->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_e4[0]->getPictureURL() . $picture_e4[0]->getPictureSavedName() . '" alt="product_e4">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_e4->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_e4->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_e4->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_e4->getDiscount() != null || $product_e4->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_e4->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_e4->getMinPrice() * (1-$product_e4->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_e4->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getE4() . ' does not exist</p>';
                                            }
                                        ?>                    
                                    </div>
                                </div>
							</div>
							<form action="" method="post" enctype="multipart/form-data" id="product_5_form">
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 美西 #1 ID to: </label> <input type="text" name="e1" value="<?php echo $positions[0]->getE1();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 美西 #2 ID to: </label> <input type="text" name="e2" value="<?php echo $positions[0]->getE2();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 美西 #3 ID to: </label> <input type="text" name="e3" value="<?php echo $positions[0]->getE3();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 美西 #4 ID to: </label> <input type="text" name="e4" value="<?php echo $positions[0]->getE4();?>">
										</div>
									</div>
								</div>
								<div class="row">
									<input type="button" class="btn-info" id="product_5_btn" value="Submit Changes">
								</div>
							</form>
							<script type="text/javascript">
                                $(document).ready(function() {
                                	$("#product_5_btn").unbind("click").bind("click",function(e){
                                		
                                		var datas, xhr;
                                		
                                		datas = new FormData($("#product_5_form")[0]);
                                
                                		$.ajax({
                                			url: '../modifyScriptPHP/modifyHomepageProduct.php?id=5', //target php (backend)
                                			type: 'POST',
                                			data: datas,
                                			success: function (data) {
                                			    alert("Modified");
                                			    $('#adminContents').load("homepageProduct.php", function() {
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
				</div>
				
				<div id="menu6" class="tab-pane fade">
					<div class="row">
						<!--Categorized destination -->
						<div class="container">
							<div class="row text-center">
								<h2>中国</h2>
								<div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_f1)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_f1->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_f1[0]->getPictureURL() . $picture_f1[0]->getPictureSavedName() . '" alt="product_f1">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_f1->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_f1->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_f1->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_f1->getDiscount() != null || $product_f1->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_f1->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_f1->getMinPrice() * (1-$product_f1->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_f1->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getF1() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_f2)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_f2->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_f2[0]->getPictureURL() . $picture_f2[0]->getPictureSavedName() . '" alt="product_f2">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_f2->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_f2->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_f2->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_f2->getDiscount() != null || $product_f2->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_f2->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_f2->getMinPrice() * (1-$product_f2->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_f2->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getF2() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_f3)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_f3->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_f3[0]->getPictureURL() . $picture_f3[0]->getPictureSavedName() . '" alt="product_f3">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_f3->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_f3->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_f3->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_f3->getDiscount() != null || $product_f3->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_f3->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_f3->getMinPrice() * (1-$product_f3->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_f3->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getF3() . ' does not exist</p>';
                                            }
                                        ?>                    
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_f4)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_f4->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_f4[0]->getPictureURL() . $picture_f4[0]->getPictureSavedName() . '" alt="product_f4">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_f4->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_f4->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_f4->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_f4->getDiscount() != null || $product_f4->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_f4->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_f4->getMinPrice() * (1-$product_f4->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_f4->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getF4() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
							</div>
							<form action="" method="post" enctype="multipart/form-data" id="product_6_form">
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 中国 #1 ID to: </label> <input type="text" name="f1" value="<?php echo $positions[0]->getF1();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 中国  #2 ID to: </label> <input type="text" name="f2" value="<?php echo $positions[0]->getF2();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 中国  #3 ID to: </label> <input type="text" name="f3" value="<?php echo $positions[0]->getF3();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 中国  #4 ID to: </label> <input type="text" name="f4" value="<?php echo $positions[0]->getF4();?>">
										</div>
									</div>
								</div>
								<div class="row">
									<input type="button" class="btn-info" id="product_6_btn" value="Submit Changes">
								</div>
							</form>
							<script type="text/javascript">
                                $(document).ready(function() {
                                	$("#product_6_btn").unbind("click").bind("click",function(e){
                                		
                                		var datas, xhr;
                                		
                                		datas = new FormData($("#product_6_form")[0]);
                                
                                		$.ajax({
                                			url: '../modifyScriptPHP/modifyHomepageProduct.php?id=6', //target php (backend)
                                			type: 'POST',
                                			data: datas,
                                			success: function (data) {
                                			    alert("Modified");
                                			    $('#adminContents').load("homepageProduct.php", function() {
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
				</div>
				
				<div id="menu7" class="tab-pane fade">
					<div class="row">
						<!--Categorized destination -->
						<div class="container">
							<div class="row text-center">
								<h2>亚洲</h2>
								<div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_g1)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_g1->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_g1[0]->getPictureURL() . $picture_g1[0]->getPictureSavedName() . '" alt="product_g1">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_g1->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_g1->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_g1->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_g1->getDiscount() != null || $product_g1->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_g1->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_g1->getMinPrice() * (1-$product_g1->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_g1->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getG1() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_g2)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_g2->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_g2[0]->getPictureURL() . $picture_g2[0]->getPictureSavedName() . '" alt="product_g2">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_g2->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_g2->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_g2->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_g2->getDiscount() != null || $product_g2->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_g2->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_g2->getMinPrice() * (1-$product_g2->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_g2->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getG2() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_g3)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_g3->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_g3[0]->getPictureURL() . $picture_g3[0]->getPictureSavedName() . '" alt="product_g3">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_g3->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_g3->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_g3->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_g3->getDiscount() != null || $product_g3->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_g3->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_g3->getMinPrice() * (1-$product_g3->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_g3->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getG3() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_g4)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_g4->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_g4[0]->getPictureURL() . $picture_g4[0]->getPictureSavedName() . '" alt="product_g4">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_g4->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_g4->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_g4->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_g4->getDiscount() != null || $product_g4->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_g4->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_g4->getMinPrice() * (1-$product_g4->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_g4->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getG4() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
							</div>
							<form action="" method="post" enctype="multipart/form-data" id="product_7_form">
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 亚洲 #1 ID to: </label> <input type="text" name="g1" value="<?php echo $positions[0]->getG1();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 亚洲  #2 ID to: </label> <input type="text" name="g2" value="<?php echo $positions[0]->getG2();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 亚洲  #3 ID to: </label> <input type="text" name="g3" value="<?php echo $positions[0]->getG3();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 亚洲  #4 ID to: </label> <input type="text" name="g4" value="<?php echo $positions[0]->getG4();?>">
										</div>
									</div>
								</div>
								<div class="row">
									<input type="button" class="btn-info" id="product_7_btn" value="Submit Changes">
								</div>
							</form>
							<script type="text/javascript">
                                $(document).ready(function() {
                                	$("#product_7_btn").unbind("click").bind("click",function(e){
                                		
                                		var datas, xhr;
                                		
                                		datas = new FormData($("#product_7_form")[0]);
                                
                                		$.ajax({
                                			url: '../modifyScriptPHP/modifyHomepageProduct.php?id=7', //target php (backend)
                                			type: 'POST',
                                			data: datas,
                                			success: function (data) {
                                			    alert("Modified");
                                			    $('#adminContents').load("homepageProduct.php", function() {
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
				</div>
				
				<div id="menu8" class="tab-pane fade">
					<div class="row">
						<!--Categorized destination -->
						<div class="container">
							<div class="row text-center">
								<h2>欧洲</h2>
								<div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_h1)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_h1->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_h1[0]->getPictureURL() . $picture_h1[0]->getPictureSavedName() . '" alt="product_h1">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_h1->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_h1->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_h1->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_h1->getDiscount() != null || $product_h1->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_h1->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_h1->getMinPrice() * (1-$product_h1->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_h1->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getH1() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_h2)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_h2->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_h2[0]->getPictureURL() . $picture_h2[0]->getPictureSavedName() . '" alt="product_h2">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_h2->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_h2->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_h2->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_h2->getDiscount() != null || $product_h2->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_h2->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_h2->getMinPrice() * (1-$product_h2->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_h2->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getH2() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_h3)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_h3->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_h3[0]->getPictureURL() . $picture_h3[0]->getPictureSavedName() . '" alt="product_h3">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_h3->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_h3->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_h3->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_h3->getDiscount() != null || $product_h3->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_h3->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_h3->getMinPrice() * (1-$product_h3->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_h3->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getH3() . ' does not exist</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail thumbnail_product">
                                    	<?php
                                            if (!empty($product_h4)) {
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_h4->getID() . '">';
                                                echo    '<img src="' . $absPathHead . '/web' . $picture_h4[0]->getPictureURL() . $picture_h4[0]->getPictureSavedName() . '" alt="product_h4">';
                                                echo '</a>';
                                                echo '<a href="' . $absPathHead . '/web/html/detail.php?productID=' . $product_h4->getID() . '">';
                                                echo    '<p style="font-size: 1.1em;"><strong>' . $product_h4->getTitle() . '</strong></p>';
                                                echo '</a>';
                                                echo '<p style="color:red;font-size: 1.2em;"><strong>';
                                                        if ($product_h4->getMinPrice() == 0) {
                                						    echo "Price N/A";						    
                                						} else {
                                						    if ($product_h4->getDiscount() != null || $product_h4->getDiscount() !=0) {
                                						        echo '<span style="color:#000000;"><s>$ ' . $product_h4->getMinPrice() . '</s></span>  ' . 
                                						             '<span style="font-size: 2em;"> $' . number_format($product_h4->getMinPrice() * (1-$product_h4->getDiscount()/100), 2) . '</span> CAD 起';
                                						    } else {	
                                						        echo '$ <span style="font-size: 1.2em;">' . number_format($product_h4->getMinPrice(), 2) . '</span> CAD 起';
                                						    }
                                						} 
                                				echo '</strong></p>';
                                            } else {
                                                echo '<p>Sorry, Product ID: ' . $positions[0]->getH4() . ' does not exist</p>';
                                            }
                                        ?>                    
                                    </div>
                                </div>
							</div>
							<form action="" method="post" enctype="multipart/form-data" id="product_8_form">
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 欧洲 #1 ID to: </label> <input type="text" name="h1" value="<?php echo $positions[0]->getH1();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 欧洲  #2 ID to: </label> <input type="text" name="h2" value="<?php echo $positions[0]->getH2();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 欧洲  #3 ID to: </label> <input type="text" name="h3" value="<?php echo $positions[0]->getH3();?>">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Change 欧洲  #4 ID to: </label> <input type="text" name="h4" value="<?php echo $positions[0]->getH4();?>">
										</div>
									</div>
								</div>
								<div class="row">
									<input type="button" class="btn-info" id="product_8_btn" value="Submit Changes">
								</div>
							</form>
							<script type="text/javascript">
                                $(document).ready(function() {
                                	$("#product_8_btn").unbind("click").bind("click",function(e){
                                		
                                		var datas, xhr;
                                		
                                		datas = new FormData($("#product_8_form")[0]);
                                
                                		$.ajax({
                                			url: '../modifyScriptPHP/modifyHomepageProduct.php?id=8', //target php (backend)
                                			type: 'POST',
                                			data: datas,
                                			success: function (data) {
                                			    alert("Modified");
                                			    $('#adminContents').load("homepageProduct.php", function() {
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
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>