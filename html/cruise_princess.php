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

    <!--princess-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> <a href="cruise.php">游轮</a> >> Princess</p>

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
                <h2 style="margin-bottom: 20px; color: red;">公主游轮</h2>

                <div id="visa_detail">
                    <p>美国公主邮轮隶属于美国嘉年华集团，是全世界阵容最大，服务最好的邮轮公司之一。 <br/>创建年份：1965年 <br/>船队总部：美国洛杉矶 <br/>员工总数：陆上4000名，船上12000名 <br/>船队属性：大型豪华邮轮 </p>
                    <p>美国公主邮轮由90年中开始，不断改善船上的设施，令旗下邮轮设备及服务趋向多元化，务求使客人可按照其喜 好，选择合适的活动。迄今，美国公主邮轮标志著：随心所欲，任君选择的海上假期。在这概念下，美国公主邮 轮提供灵活及切合个人需要的餐饮服务及娱乐设施。还有，在满载2000多名乘客的邮轮上，您绝不会感到迷失或 拥挤，因为美国公主邮轮的船队具备大船的设施和气派之余，更保留了小船队的温馨及亲切气氛。 </p>
                    <p>个人化选择的哲学更可由航程中尽显，邮轮旅游比其他的旅游方式更加自由，轻松！您无须再忍受不断更换酒 店，舟车劳顿及打包行程的烦琐不便，原本需要忍受长途转机或频繁倒车才能抵达的地方，邮轮都可以带你轻松 抵达！在邮轮上您将享受到全天候的服务，丰盛的美食和舒适的房间，告别了其他方式旅游途中的种种局限和麻 烦。事实上，从登船的那一刻开始，您就已经置身在一所浪漫豪华的五星级酒店之中。 </p>
                    <p>大船的选择，小船的享受（Big Ship Choice,Small Ship Feel）-在这么大的船上要如何让人仍然觉得拥有自己的空 间？这就是我们所谓的：大船的选择，小船的享受。这要归功于美国公主邮轮船队革命性的设计，船只有充足的 空间了提供多项的选择，但您仍然能体验到通常在小船上才有的温馨与私密感觉。 </p>
                    <p>个性化的餐饮选择—正在度假的您，应该能照自己的喜好和时间去用餐才对。正是因为这个理由，美国公主号邮 轮推出了：个性化餐饮选择。您可以盛装打扮,到雅致的正式餐厅享用传统式的晚餐；或是照您的方便时间,到随时 入席（Anytime Dining）的餐厅去用餐。另外，也可以选择到船上的特色餐厅去试试精致佳肴。所有都可任君挑选！ </p>
                    <p>经济实惠的阳台舱房—搭乘邮轮的最大乐趣之一，就是能在自己的阳台上享受清新的海风，放松自己，并欣赏过 往的风景。我们不希望您失去任何一个赏景的机会，所以提供了最经济实惠的阳台舱房给懂得享受的您。 </p>
                    <p>公主级的服务—让您的邮轮假期完美呈现的幕后功臣，就是著名的公主级服务的信条可由C.R.U.I.S.E.这六个字代表。其分别的意义为：<br/> 礼貌（Courtesy）、尊重（Respect）、始终如一的卓越服务（UnfailingIn Service Excellence）。 上从船长的诚心欢迎，下至船舱服务人员璀璨的笑脸，或是贴心的餐厅服务生，都能作为美国公主邮轮服务精神 的代表。我们也同样用始终如一的服务精神，在40年来接待过无数最挑剔的客人。 </p>
                    <p>美国公主邮轮带您走进多姿多彩的绚烂旅程—蓝顶白墙的希腊村落，色彩鲜艳的加勒比海城镇，神秘而拥有悠久 历史及传统的亚洲，以及有着壮观冰河与迷人野生动物的阿拉斯加，令人神往的夏威夷和南太平洋上的珍珠：大 溪地，每个都是您梦中向往的美景。无论您想去哪里，美国公主邮轮都能帮助实现您的梦想！
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
