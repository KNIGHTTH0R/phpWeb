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
    require_once (dirname(__FILE__). '/index_navbar.php');
    require_once (dirname(__FILE__). '/index_carousel.php');
    ?> 

    <!--disney-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> <a href="cruise.php">游轮</a> >> Disney</p>

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
                <h2 style="margin-bottom: 20px; color: red;">迪斯尼游轮</h2>

                <div id="visa_detail">
                    <p>迪士尼邮轮海上巡游线是迪士尼公司自主营运的豪华游轮游览服务，开始于1998年，提供往返于美国东海岸的佛 罗里达，包括巴哈马海域、加勒比海、美国西海岸—墨西哥蔚蓝海岸和地中海地区的多日航海度假产品。 依靠迪士尼的品牌优势和对主题公园管理的经验，迪士尼邮轮主要针对带小孩的家庭旅行者，提供短期的海上度 假体验。 </p>
                    <p>通常，在迪士尼游轮海上巡游度假产品中，游客只需要一次支付费用，上船以後所有的费用都包括在内。整个旅 行计划中，会有一部分时间在船上度过（当海上巡游日时，将整天都在船上），而在游轮到达一些目的地，通常 是风景秀丽的岛屿，包括巴哈马迪士尼自有小岛Castaway Cay等之後会停靠，游客可以下船在目的地享受多种游 乐项目，包括在海边游泳、潜水、在岛上参加冒险。 </p>
                    <p>在迪士尼邮轮上，游客可以享用免费的美食，除了游轮上少数特定的高级餐馆，都可以免费用餐，此外，游轮内 部还有大型剧院，有特别的迪士尼舞台剧演出。除此之外，游轮还为不同年龄段的游客提供不同内容。 </p>
                    <p>迪士尼游轮上还有专属的儿童服务团队，带领您的孩子，进行有趣的海上活动，为了儿童的安全，海上医护团队 24小时时刻关注您的孩子的健康。 </p>
                    <p>更奇特的是：迪斯尼邮轮上会专门为小朋友准备每人一副的船上GPS 呼叫手环，随时可以知道您的孩子在邮轮的 哪个方位，这样您就不用操心，放心地享受属于大人们的假日时光。 </p>
                    <p>迪斯尼邮轮拥有跟其他邮轮所不一样的客房设施，它将更多的为家庭和儿童的便利考量，设计舒适现代化，拥有 宽敞的空间和典雅的装饰。全部房间内都設有分离的盥洗室，是专为家庭而设的一个完善功能，并为邮轮业首创！ </p>
                    <p>迪斯尼邮轮除了游轮上五彩缤纷的邮轮节目，它的梦幻航程更为人津津乐道。迪士尼邮轮除了巴哈马航线及加勒 比海航线，也开始航行阿拉斯加、墨西哥或巴拿马运河等路线。如今迪斯尼游轮更是跨越大西洋来到欧洲，可能 会让你的全家度过一个梦幻般的邮轮假期。
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
