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

    <!--jamaica-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> 牙买加</p>
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
                <h2 style="margin-bottom: 20px; color: red;">牙买加</h2>
                <div class="container">
                    <div class="row text-center">
                        <h2><span id="visa-header-1">牙买加热门城市</span></h2>
                    </div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="../images/central_america/jamaica-montego-bay.jpg" alt="montego-bay">
                                    <p>蒙特哥贝</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="../images/central_america/jamaica-kingston.jpg" alt="kingston">
                                    <p>牙买加金斯顿</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="../images/central_america/jamaica-ocho-rios.JPG" alt="costa">
                                    <p>奥乔里奥斯</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="visa_detail">
                    <p><b>目的地速写：</b><br/> 19 世纪末，牙买加旅游业刚开始时，许多人都预定了太阳追逐者的南向旅游线路；在那个时候，那些将香蕉运到各大城市市场的海船向那些被牙买加景色吸引的早期游客带来牙买加。100 多年来，牙买加美丽的海滩吸引着无数的游客。受牙买加宜人的热带气候，绵延数公里的海滩，美丽的街景，雄伟的山脉，奇险的峡谷所吸引，数以百万的游客曾来到这里欣赏美丽的景色，感受当地人的好客。<br/><br/>当地语言: 英语
                    </p>
                    <p><b>环境：</b><br/>牙买加为热带气候，在海平面上比较湿润，在山区非常凉爽。牙买加有季节性降雨，海岸上的平均温度最低为 24 摄氏度 （ 75 华氏度 ），最 高为 32 摄氏度 （ 90 华氏度 ）
                    </p>


                </div>
                <h3 style="margin-top: 20px;"> 更多详细信息请联系我们。</h3>
            </div>
        </div>

    </div>



    <?php 
    require_once (dirname(__FILE__). '/index_footer.php');
    ?>
</body>


</html>
