<?php 
    require_once (dirname(__FILE__) . '/../DAO/slideShowDAO.php');
    require_once (dirname(__FILE__) . '/../model/slideShow.php');
     $absPathHead = "http://" . $_SERVER ['HTTP_HOST'];
	$slideShowDAO = new slideShowDAO();
	$slideShows = $slideShowDAO->getSlideShows();
	$defaultPicturePath = $absPathHead . '/web/images/product/logo.png';
?>
<!--Carousel-->
    <div id="myCarousel" class="carousel slide hidden-xs hidden-sm" data-ride="carousel">
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
		<!-- slideSHOW STARTS HERE -->
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src=<?php echo '../images/carousel/' . $slideShows[0]->getLink();?> alt="slideShowOne" id="carousel_1_pic">
                <div class="carousel-caption">
                    <a href="#" style="color:#FFFFFF; text-decoration:none;"><h3 id="carousel_1_title"><?php echo $slideShows[0]->getTitle();?></h3></a>
                    <p id="carousel_1_desc1"><?php echo $slideShows[0]->getDescriptionA();?></p>
                    <p id="carousel_1_desc2"><?php echo $slideShows[0]->getDescriptionB();?></p>
                </div>
            </div>

            <div class="item">
                <img src=<?php echo '../images/carousel/' . $slideShows[1]->getLink();?> alt="slideShowTwo" id="carousel_2_pic">
                <div class="carousel-caption">
                    <a href="#" style="color:#FFFFFF; text-decoration:none;"><h3 id="carousel_2_title"><?php echo $slideShows[1]->getTitle();?></h3></a>
                    <p id="carousel_2_desc1"><?php echo $slideShows[1]->getDescriptionA();?></p>
                    <p id="carousel_2_desc2"><?php echo $slideShows[1]->getDescriptionB();?></p>
                </div>
            </div>

            <div class="item">
                <img src=<?php echo '../images/carousel/' . $slideShows[2]->getLink();?> alt="slideShowThree" id="carousel_3_pic">
                <div class="carousel-caption">
                    <a href="#" style="color:#FFFFFF; text-decoration:none;"><h3 id="carousel_3_title"><?php echo $slideShows[2]->getTitle();?></h3></a>
                    <p id="carousel_3_desc1"><?php echo $slideShows[2]->getDescriptionA();?></p>
                    <p id="carousel_3_desc2"><?php echo $slideShows[2]->getDescriptionB();?></p>
                </div>
            </div>

            <div class="item">
                <img src=<?php echo '../images/carousel/' . $slideShows[3]->getLink();?> alt="slideShowFour" id="carousel_4_pic">
                <div class="carousel-caption">
                    <a href="#" style="color:#FFFFFF; text-decoration:none;"><h3 id="carousel_4_title"><?php echo $slideShows[3]->getTitle();?></h3></a>
                    <p id="carousel_4_desc1"><?php echo $slideShows[3]->getDescriptionA();?></p>
                    <p id="carousel_4_desc2"><?php echo $slideShows[3]->getDescriptionB();?></p>
                </div>
            </div>

            <div class="item">
                <img src=<?php echo '../images/carousel/' . $slideShows[4]->getLink();?> alt="slideShowFive" id="carousel_5_pic">
                <div class="carousel-caption">
                    <a href="#" style="color:#FFFFFF; text-decoration:none;"><h3 id="carousel_5_title"><?php echo $slideShows[4]->getTitle();?></h3></a>
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
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <nav class="navbar navbar-default hidden-xs hidden-sm">
        <div class="container-fluid"></div>
    </nav>