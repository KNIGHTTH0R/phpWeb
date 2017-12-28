<!DOCTYPE html>
<html lang="zh">
<?php 
  $absPathHead = "http://" . $_SERVER['HTTP_HOST'];
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
    $css = file_get_contents("http://" . $_SERVER['HTTP_HOST'] . '/web/css/styles.css');
      echo "<style>" . $css . "</style>";
    ?>
</head>

<body>
    <?php 
    require_once (dirname(__FILE__) . '/index_navbar.php');
    require_once (dirname(__FILE__) . '/index_carousel.php');
    ?>

    <!--Visa-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> 签证申请(加拿大境内)</p>
        <div class="row text-center">
            <h2><span id="visa-header-1">签证申请</span>&nbsp;<span id="visa-header-2">(加拿大境内)</span></h2>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#menu1">亚洲国家</a></li>
            <li><a data-toggle="tab" href="#menu2">欧洲国家</a></li>
            <li><a data-toggle="tab" href="#menu3">中南美国家</a></li>
            <li><a data-toggle="tab" href="#menu4">美国</a></li>
        </ul>

        <div class="tab-content">
            <div id="menu1" class="tab-pane fade in active">
                <!--row1-->
                <div class="row text-center">
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/asia/china.jpg" alt="china">
                            <p><strong>中国</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_china.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/asia/korea.jpg" alt="korea">
                            <p><strong>韩国</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_korea.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/asia/japan.jpg" alt="japan">
                            <p><strong>日本</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_japan.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/asia/vienam.jpg" alt="vienam">
                            <p><strong>越南</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_vienam.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--row2-->
                <div class="row text-center">
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/asia/taiwan.jpg" alt="taiwan">
                            <p><strong>台湾</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_taiwan.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/asia/india.jpg" alt="india">
                            <p><strong>印度</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_india.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/asia/singapore.jpg" alt="singapore">
                            <p><strong>新加坡</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_singapore.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/asia/arab.jpg" alt="arab">
                            <p><strong>阿联酋</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_arab.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="menu2" class="tab-pane fade">
                <!--row1-->
                <div class="row text-center">
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/europe/uk.jpg" alt="uk">
                            <p><strong>英国</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_uk.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/europe/germany.jpg" alt="germany">
                            <p><strong>德国</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_germany.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/europe/france.jpg" alt="france">
                            <p><strong>法国</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_france.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/europe/italy.jpg" alt="italy">
                            <p><strong>意大利</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_italy.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--row2-->
                <div class="row text-center">
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/europe/spanish.jpg" alt="spanish">
                            <p><strong>西班牙</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_spanish.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/europe/turky.jpg" alt="turky">
                            <p><strong>土耳其</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_turky.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../../images/visa/europe/greece.jpg" alt="greece">
                            <p><strong>希腊</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_greece.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/europe/holland.jpg" alt="holland">
                            <p><strong>荷兰</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_holland.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--row3-->
                <div class="row text-center">
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/europe/switzerland.jpg" alt="switzerland">
                            <ul class="pager">
                                <li><a href="visa_canada_cn_switzerland.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="menu3" class="tab-pane fade">
                <!--row1-->
                <div class="row text-center">
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/central_america/brazil.jpg" alt="brazil">
                            <p><strong>巴西</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_brazil.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div id="menu4" class="tab-pane fade">
                <!--row1-->
                <div class="row text-center">
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/visa/us.jpg" alt="us">
                            <p><strong>美国</strong></p>
                            <ul class="pager">
                                <li><a href="visa_canada_cn_us.php">查看详情</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php 
    require_once (dirname(__FILE__) . '/index_footer.php');
    ?>
</body>


</html>
