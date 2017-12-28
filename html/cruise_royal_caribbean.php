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

    <!--royal-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> <a href="cruise.php">游轮</a> >> Royal&nbsp;Caribbean</p>

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
                <h2 style="margin-bottom: 20px; color: red;">皇家加勒比游轮</h2>

                <div id="visa_detail">
                    <p>皇家加勒比国际游轮是全球船队规模最大的国际游轮品牌，目前共有君主、梦幻、灿烂、航行者、自由、绿洲 6个 船系的二十多艘大型现代游轮，量子系列也将于2014年登场，每年提供200多条精彩纷呈的邮轮度假航线，畅游 全球近300个旅游目的地，航线遍及加勒比海、阿拉斯加、加拿大、欧洲、中东、亚洲、澳大利亚及新西兰等70多 个国家和地区。 </p>
                    <p>皇家加勒比国际游轮隶属于全球领先的皇家加勒比游轮有限公司（Royal Caribbean Cruises Ltd.）。公司总部位 于美国迈阿密。在全球范围内经营游轮度假产品，旗下拥有皇家加勒比国际游轮（Royal Caribbean International ）、精致游轮（Celebrity Cruises）、精钻会游轮（Azamara Club Cruises）、Pullmantur、CDF（Croisieres de France）等游轮品牌。 </p>
                    <p>皇家加勒比游轮有限公司已于纽约证券交易所与奥斯陆证券交易所上市，代码为“RCL”。 </p>
                    <p>自1969年成立至今，皇家加勒比国际游轮在全球游轮史上留下了灿烂光辉的足迹，旗下多艘超大型游轮凭借史无 前例的吨位、大胆创新的设计屡屡打破世界游轮记录。 如今，在全球十大游轮中，有八条属于皇家加勒比国际游轮品牌。 </p>
                    <p>2008年，皇家加勒比正式进入中国，提供从上海、天津、香港始发的游轮度假航线。 凭借不断创新的航线设计和高品质的服务，皇家加勒比国际游轮进入中国市场以来获得了众多消费者的认可与喜 爱。 </p>
                    <p>2009年，皇家加勒比国际游轮在权威专业旅游媒体《旅讯》（Travel Weekly China）发起的“中国旅游业界奖”评 选中，一举囊获了“最佳豪华游轮”和“最佳会奖活动游轮”两大奖项，并在TTG杂志的“亚洲旅游系列大奖”中荣获“最 佳游轮公司”奖。2010年，皇家加勒比国际游轮在新浪网和旅游卫视联合主办的“公司人旅游新榜样”评选中脱颖而 出，摘得“最受公司人欢迎游轮品牌”奖。 </p>
                    <p>年复一年，皇家加勒比国际游轮将不断为喜爱邮轮旅行的尊贵宾客，提供奢华和充满活力的海上度假服务，并成 为中国游客参加豪华邮轮旅行的首选游轮公司。 </p>
                    <p><b>我们是航海家，更是梦想家</b> </p>
                    <p>骄傲的航海传统孕育了我们，四十余载不懈追寻，皇家加勒比国际游轮不断寻觅着超越地平线的美丽。我们从不 畏惧人所未至的地方。相反，勇往直前的冒险精神鼓舞着我们，劈荆斩浪，探索未知的苍茫——这，就是我们， 是我们自己的航向。 </p>
                    <p>1970年，我们怀揣着一个共同的目标—改变世界游轮旅行的方式，开始了一段航海旅程。这个目标让我们时刻团 结一心，无论在陆地还是海洋。它将永远化作我们的北极星，为我们指引前进的方向。我们不会为了改变而改 变，而是为了让光临游轮的每一位宾客都能享受到别处难寻的度假体验。我们的事业是使梦想照进现实，我们的 努力是让回忆终生难忘，我们帮助人们书写了一段又一段世代相传的美丽故事。 </p>
                    <p>从我们第一艘游轮—挪威之歌号（Song of Norway）到最新的革命性巨轮—海洋量子号（Quantum of the Seas），我们的游轮总是能够超出时代的期望。1988年，我们推出了当时海上航行的最大游轮—海洋君主号 （Sovereign of the Seas）。1999年，我们另一艘世界最大游轮—海洋航行者号（Voyager of the Seas）起航。 年复一年，我们不断建造出更大更好的游轮，海洋绿洲号（Oasis of the Seas）与海洋魅丽号（Allure of the Seas）的起锚代表了我们新的高峰。不久后，我们历史上最奇伟壮观的巨轮—海洋量子号（Quantum of the Seas）及其姊妹游轮海洋圣歌号（Anthem of the Seas）也将相继下水。但规模和吨位并不足以成为我们的标 志。
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
