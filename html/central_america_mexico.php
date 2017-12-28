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
    require_once (dirname(__FILE__). '/index_navbar.php');
    require_once (dirname(__FILE__). '/index_carousel.php');
    ?>

    <!--mexico-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> 墨西哥</p>
        <div id="content">
            <style>
                #visa_canada_detail_cn {
                    margin-bottom: 0px;
                    font-size: 16px;
                    font-family: "Microsoft Yahei";
                }
                
                #visa_canada_detail_cn a:link,
                #visa_canada_detail_cn a:visited {
                    color: blue;
                }
                
                #visa_canada_detail_cn a:hover {
                    color: red;
                }
                
                #visa_detail table {
                    border-collapse: collapse;
                    font-size: 16px;
                }
                
                #visa_detail table th {
                    border: 1px solid #dfdfdf;
                    padding: 5px 5px 5px 5px;
                    color: white;
                    background: #3b4e87;
                }
                
                #visa_detail table td {
                    border: 1px solid #dfdfdf;
                    padding: 5px 5px 5px 5px;
                }
            </style>

            <div id="visa_canada_detail_cn">
                <h2 style="margin-bottom: 20px; color: red;">墨西哥</h2>
                <div class="container">
                    <div class="row text-center">
                        <h2><span id="visa-header-1">墨西哥热门城市</span></h2>
                    </div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="../images/central_america/mexico-cancun.jpg" alt="cancun">
                                    <p>坎昆</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="../images/central_america/mexico-mexico-city.jpg" alt="mexico-city">
                                    <p>墨西哥城</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="../images/central_america/mexico-chichen-itza.jpg" alt="chichen-itza">
                                    <p>奇琴伊察</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="visa_detail">
                    <p><b>目的地速写：</b><br/> 墨西哥(Mexico)是美洲历史和自然景观最丰富的国家之一，这里孕育了古玛雅和古阿兹特克文明。墨西哥南部尤卡坦半岛的奇琴伊察玛雅金字塔被誉为世界七大奇迹之一，周边的图卢姆、梅里达、帕伦克等地也有宏伟的玛雅遗迹。首都墨西哥城位于墨西哥中部，附近是阿兹特克文明的发源地。 除了历史遗迹，墨西哥尤卡坦半岛上的坎昆，是北美最棒的加勒比海度假胜地之一。南部的圣克里斯托瓦尔和中部的瓦哈卡、瓜拉华托是西班牙殖民时代遗留下来的度假小城。
                        <br/><br/>当地语言: 西班牙语
                    </p>
                    <p><b>环境：</b><br/>面积1964375平方公里，位于北美洲南部。北邻美国，南接危地马拉和伯利兹，东临墨西哥湾和加勒比海，西南濒太平洋。海岸线长11122公里。有300万平方公里经济专属区和35.8万平方公里大陆架。沿海有大港口70余个。著名的特万特佩克地峡将北美洲和中美洲连成一片。全国5／6左右为高原及山地。墨西哥高原居中，其东、西、南部为马德雷山脉，东南为地势平坦的尤卡坦半岛，沿海多狭长平原。全国大部分地区分旱、雨两季，最旱月份为2月，降水量仅5毫米；降水最多月份为7月，降水量约170毫米。墨西哥高原终年气候温和，年平均气温在24℃左右。
                    </p>
                    <p><b>消费水平：</b><br/>在街头吃一个Taco(玉米卷)要12比索，在餐厅吃午餐套餐在40到60比索左右，在青旅的住宿是130比索起一晚，公交车3块到5块比索不等，出租车起步价8比索起
                    </p>

                </div>
                <h3 style="margin-top: 20px;"> 更多详细信息请联系我们。</h3>
            </div>
        </div>

    </div>



    <?php 
    require_once (dirname(__FILE__). '/index_footer.php');
    ?>

</html>
