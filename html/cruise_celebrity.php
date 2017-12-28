<!DOCTYPE html>
<html lang="en">
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

    <!--celebrity-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> <a href="cruise.php">游轮</a> >> Celebrity</p>

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
                <h2 style="margin-bottom: 20px; color: red;">精致游轮</h2>

                <div id="visa_detail">
                    <p>精致游轮隶属于皇家加勒比国际游轮公司旗下的更高级别的游轮船队品牌。 今天精致游轮的广告语是：让您享受明星般的待遇。因为精致游轮提供比她母公司—皇家加勒比国际游轮公司， 好得多的产品和服务。 </p>
                    <p> 精致游轮的烟囱上都有一个大大的X，这是希腊字母表中第三个字母，在希腊文中念chi，在英文中是C，这就是精 致游轮创始人Chandris 家族的第一个字母。2007年精致游轮成立了一家新的拥有中型船只的邮轮公司Azamara Cruises。 </p>
                    <p> 精致游轮是由Harry H. Haralambopoulos 和希腊Chandris 海运公司和Chandris 游轮公司的拥有者Chandris 兄 弟，当游轮工业飞速发展的时候，经过深思熟虑，于1989年成立的。为建立一家更好的游轮公司，拥有更新的船 只、更大的船舱、更关注于保持欧洲传统的餐饮和服务，以及旅游业中最优质的游轮产品的需求为目标。 </p>
                    <p> 精致游轮决心为游轮旅游设定一个新的国际性标准，并具有最佳的质量，庄重的风格，周到的服务，宽敞的住 房，和精良的菜肴。精致游轮公司相信餐饮体验，是一个优质游轮度假产品中不可或缺的，精致游轮定制厨房， 可以制作海上最好的美食，一切工序中的材料，都是最好，最新鲜的。 </p>
                    <p> 精致游轮所不同于其他游轮休假产品的是，精致游轮始终致力于提供超出客人预期的游轮体验。这项出色的表现 水准已成为精英游轮的定义，并为今天的游轮巡游设定了国际化标准。自成立以来，精致游轮履行的最初的承 诺：经典中的精华，优雅的巡航和与时俱进。 </p>
                    <p> 1997年，皇家加勒比国际游轮公司1997年以1.3亿美金，买下了精致游轮公司。 精致游轮现有的游轮与其极致系列游轮，共同精益求精，表现了更大的技术成果和意义深远的创新，同时保留了 与众不同的风格，不断的改进和优质的服务，已经成为了一个精致游轮的标志。</p>
                </div>

                <h3 style="margin-top: 20px;"> 更多详细信息请联系我们。</h3>
            </div>
        </div>

    </div>



    <?php 
    require_once (dirname(__FILE__) . '/index_footer.php');
    ?>
</body>


</html>
