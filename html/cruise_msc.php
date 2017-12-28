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

    <!--msc-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> <a href="cruise.php">游轮</a> >> MSC</p>

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
                <h2 style="margin-bottom: 20px; color: red;">地中海游轮</h2>

                <div id="visa_detail">
                    <p>意大利全资拥有的MSC地中海邮轮，属同类中规模最大，总部位于那不勒斯，于1987年成立，并于1995年正式命 名为地中海邮轮。同年开始发展邮轮业务，5年后随着MSC Lirica抒情号及MSC Opera歌剧号的建造，奠定业务迅 速增长的里程碑。 </p>
                    <p>MSC地中海邮轮旗下的现代化邮轮团队，为旅客提供多款路线和产品选择，加上热情的招待，优质的服务，让旅 客陶醉于一次充满意大利特色 的旅程之中。MSC地中海邮轮被公认为实力雄厚的意大利邮轮公司，旗下的邮轮均 达国家级水平，设备先进，配套完善，致力为旅客提供最舒适的意式邮轮假期。 </p>
                    <p>凭借MSC地中海邮轮独特的意大利风格，于行内独具一格：船上热情的招待，华丽的装潢，舒适的设计，精致的 美食，浪漫的气氛，处处流露 出公司秉承“意大利制造”的理念，也是MSC地中海邮轮的不同凡响之处。 MSC地中海邮轮的标志把MSC三个字母镶嵌在指南针图案中间，代表在MSC邮轮的世界里，顾客永远是我们的中 心。指南针本身象征着公司邮轮 将驶向各个方向，从而达到公司的长远目标。 </p>
                    <p>MSC地中海邮轮对于品质非常重视，是第一家获得ISO9002/1994和ISO9001:2000双重认证的邮轮公司，其后更 获得了ISO14001环境保护证书，我们将为客人提供舒适的环境的同时，不遗余力的保护我们的生态，秉承这一理 念，2010年3月20日，MSC Magnifica 华丽号于德国汉堡开启 地中海邮轮崭新的一页，无论是AWT污水处理、节 能、自动调温，和涂料等方面都做到保护环境的承诺。 </p>
                    <p>MSC地中海邮轮亦引入全新的度假概念，于MSC幻想曲号划分贵宾区域，名为 MSC YACHT CLUB，让贵宾专享 个人管家服务。这个贵宾区域亦包 括私人酒吧，阳光浴场，水疗池，天幕游泳池，连酒吧的观景廊及礼宾服务， 更可让你尽享海上风光。
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
