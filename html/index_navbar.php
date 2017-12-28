<?php
$absPathHead = "http://" . $_SERVER['HTTP_HOST'];
?>

<!--Logo-->
    <div class="container logo">
        <div class="col-xs-4 col-md-6">
            <img src="../images/logo/logo_color_word.jpg" class="img-responsive" style="min-width: 240px;">
        </div>
        <div class="col-xs-8 col-md-2"></div>
        <div class="col-md-4 hidden-xs hidden-sm text-center">
            <span class="pull-right" style="color:#FF6700; margin-top: 2%;">热线电话: <br/>(613) 680-5160<br/>(613) 680-5168</span>
            <img src="../images/logo/qr_sm.jpg" class="img-responsive pull-right" style="max-width: 100px; margin-top: 1%;">
        </div>
    </div>

<!--Navbar-->
    <nav class="navbar navbar-default" style="z-index: 1000;">
        <div class="container-fluid" id="nav_center">   
        	
            <!-- menu -->
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                    </button>                
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                    	<li class="dropdown">
                            <a href="<?php echo $absPathHead . '/web/html/index.php';?>">首页</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">美国<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $absPathHead . '/web/html/list.php?categoryID=1';?>">美国东部</a></li>
                                <li><a href="<?php echo $absPathHead . '/web/html/list.php?categoryID=2';?>">美国西部</a></li>
                                <li><a href="<?php echo $absPathHead . '/web/html/list.php?categoryID=14';?>">其他地区</a></li>                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">加拿大<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $absPathHead . '/web/html/list.php?categoryID=3';?>">加拿大东部</a></li>
                                <li><a href="<?php echo $absPathHead . '/web/html/list.php?categoryID=4';?>">加拿大西部</a></li>
                                <li><a href="<?php echo $absPathHead . '/web/html/list.php?categoryID=15';?>">其他地区</a></li> 
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">亚洲<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            	<li><a href="<?php echo $absPathHead . '/web/html/list.php?categoryID=11';?>">中国</a></li> 
                            	<li><a href="<?php echo $absPathHead . '/web/html/list.php?categoryID=12';?>">港\澳\台</a></li>
                                <li><a href="<?php echo $absPathHead . '/web/html/list.php?categoryID=13';?>">韩\日</a></li>
                                <li><a href="<?php echo $absPathHead . '/web/html/list.php?categoryID=5';?>">其他地区</a></li>                                                         
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">欧洲<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $absPathHead . '/web/html/list.php?categoryID=6';?>">欧洲参团游</a></li>                            
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">中南美洲<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $absPathHead . '/web/html/central_america_cuba.php';?>">古巴简介</a></li>
                                <li><a href="<?php echo $absPathHead . '/web/html/central_america_jamaica.php';?>">牙买加简介</a></li>
                                <li><a href="<?php echo $absPathHead . '/web/html/central_america_mexico.php';?>">墨西哥简介</a></li>
                                <li><a href="<?php echo $absPathHead . '/web/html/central_america_dominican.php';?>">多米尼加简介</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">游轮<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $absPathHead . '/web/html/cruise.php';?>">游轮公司简介</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">机票<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $absPathHead . '/web/html/air_ticket.php';?>">购票简介</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">签证保险<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $absPathHead . '/web/html/visa_canada_cn.php';?>">签证申请(加拿大境内)</a></li>
                                <li><a href="<?php echo $absPathHead . '/web/html/visa_china_cn.php';?>">签证申请(中国境内)</a></li>
                                <li><a href="<?php echo $absPathHead . '/web/html/insurance_cn.php';?>">旅游探亲保险</a></li>
                            </ul>
                        </li> 
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">其他<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $absPathHead . '/web/html/list.php?categoryID=16';?>">门票</a></li>
                            </ul>
                        </li> 
                        <li class="dropdown">
                        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">关于我们<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $absPathHead . '/web/html/about_us.php';?>">公司简介</a></li>                          
                            </ul>
                        </li>                  
                    </ul>
                </div>
          	</div>          	
        </div>
    </nav>