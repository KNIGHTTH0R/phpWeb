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

    <!--dominican-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> 多米尼加共和国</p>
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
                <h2 style="margin-bottom: 20px; color: red;">多米尼加共和国</h2>
                <div class="container">
                    <div class="row text-center">
                        <h2><span id="visa-header-1">多米尼加共和国热门城市</span></h2>
                    </div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="../images/central_america/dominican-santo-domingo.jpg" alt="santo-domingo">
                                    <p>圣多明各</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="../images/central_america/dominican-punta-cana.jpg" alt="punta-cana">
                                    <p>蓬塔卡纳</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="../images/central_america/dominican-cabarete.jpg" alt="cabarete">
                                    <p>喀巴里特</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="visa_detail">
                    <p><b>目的地速写：</b><br/> 位于加勒比海伊斯帕尼奥拉岛东部，西接海地，南临加勒比海，北濒大西洋，东隔莫纳海峡同波多黎各相望。境内地势较高，多山，科迪勒拉山脉分中央、北部和东部三条横贯全国。中部的杜阿尔特峰海拔3175米，为西印度群岛的最高峰。中北部有锡瓦奥谷地，西部有大片干旱沙漠。主要河流为北亚克河、尤约河。西南部的恩里基略湖为第一大湖，是拉美陆地最低点，湖面在海平面以下40多米。北部、东部属热带雨林气候，西南部属热带草原气候。多米尼加于1844年脱离海地管治，真正宣布独立。1865年，击退西班牙入侵。首都位于圣多明各。<br/><br/>当地语言: 西班牙语
                    </p>
                    <p><b>环境：</b><br/>海岸线全长1350公里。面积48442平方公里，占伊斯帕尼奥拉岛面积64%。人口641.6万(1985)。全国分为26个省,首都圣多明各。河流短小，水势湍急，主要有流经锡瓦奥谷地的北亚克河和流经东北部贝加雷阿平原的尤纳河，均有灌溉和发电之利。地处北纬17°36′～19°56′，气温年变化不大,年平均气温25～30℃，但中科迪勒拉山区气温较低,冬季可达0℃以下。北部和东部面迎东北信风，年降水量达1500～2500毫米，属热带海洋性气候，山地森林茂密，盛产苏芳木、桃花心木等珍贵林木。背风的西南部年降水量不足1000毫米，干季较长，属热带草原气候。夏秋常受飓风袭击，造成灾害。
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
