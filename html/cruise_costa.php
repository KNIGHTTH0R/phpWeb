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

    <!--costa-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> <a href="cruise.php">游轮</a> >> Costa</p>

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
                <h2 style="margin-bottom: 20px; color: red;">歌诗达游轮</h2>

                <div id="visa_detail">
                    <p>有着悠久而辉煌历史的意大利歌诗达邮轮公司（Costa-Cruise-Lines），是以意大利风情（Cruising Italian Style） 为品牌定位的邮轮公司。起源于1860年的Costa家族，在欧洲地区是最大的邮轮公司。 </p>
                    <p>歌诗达邮轮惊艳的标志： <br/>歌诗达邮轮船队以艳黄明亮色调的烟囱，搭配象征企业识别标志的英文字母 C，航行所到之处总是掀起人们惊艳 的目光，在欧洲海域成为最为灿烂耀眼的船队，在亚洲地区更是一座众望所托的海上城堡！ </p>
                    <p>歌诗达邮轮贴心的餐食：<br/> 歌诗达邮轮船上每天备有丰富的膳食美味，您可早起在宽阔甲板享用茶和咖啡，也可以在自助餐厅享用丰富而精 致的早餐与午餐，更有精美的下午茶，纯正的意式比萨与美味小吃盛情恭候，而特别的晚餐与午夜惊喜更是为人 所期待，除此之外，船上还备有低热量食物，蔬食以满足特殊饮食需要。 </p>
                    <p>歌诗达邮轮特别的体验： <br/>您也可以选择在房间享用早餐；用餐时间有水，软饮，咖啡、茶与雪糕，有船长出席的鸡尾酒欢迎宴，特别喜庆 与节日的晚餐盛宴。歌诗达邮轮是对意大利风情理念的延续，在外观与内部装饰上保持着华丽而别具格调的意大 利气息，地道美食美酒与在细节上的精雕细琢将意大利的艺术气息表现到了极致，让您时刻体会歌诗达邮轮提供 了最浪漫休闲的氛围并与亲朋好友团聚的绝妙机会，舒适的二人晚餐，夕阳时分在甲板上漫步，以及在夜晚翩翩 起舞。而携带儿童的家庭也会喜爱，因为我们提供儿童节目、儿童菜单及专门为儿童设置的区域，确保孩子们能 尽情欢乐。歌诗达邮轮供每人依据其个人品味和生活方式加以选择，因此没有所谓的典型邮轮游客。 </p>
                    <p>歌诗达邮轮精彩的娱乐： <br/>歌诗达邮轮就是漂浮于海上的旅游胜地，提供最佳的旅游胜地所提供的一切选择，大多数的日子都在观光、体育 活动、文化讲座、教育性课程和水池休闲之中度过。在夜晚之中，主题之夜、乐队、迪斯科、劲舞、音乐剧和鲜 活的赌场便闪亮登场。您会发现歌诗达邮轮船只，就是漂浮于海上的度假胜地，能提供可以想象到的舒适、方便 的感受和一切设施。您可以放松下来，完全纵情欢乐。或者，您还可以不停歇地享受一项又一项的精彩演出、纵 情饕餮、在鲜活的赌场之中试试您的运气，或者在入夜之后，于激动人心的迪斯科节拍中随心舞动。 </p>
                    <p>毫无疑问，越来越多的人都开始选择歌诗达邮轮度假了；而您一旦体验了歌诗达邮轮旅行的乐趣，就一定还会想 再进行一次。 </p>
                    <p>歌诗达邮轮船队中的每艘邮轮都是依照意大利的风格与传统设计完成。这些壮观的船只，位列当代最美丽的船舶 之中，就是一艘艘漂浮的宫殿，并为客人们提供舒适、方便的感受和一切设施。船队上的艺术品倾注了数百万美 元精心打造，包括雕塑、绘画、壁饰、壁挂和工匠手制家具，配有超大房间，其中大部分房间能够观赏海景，并 附有阳台，为游客提供宾至如归的舒适感受。 </p>
                    <p>歌诗达邮轮船队，将带着您去获得独一无二、绝无仅有的经历，体验夺人心魄的美景与永生难忘的城市......
                    </p>
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
