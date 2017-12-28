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

    <!--carnival-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> <a href="cruise.php">游轮</a> >> Carnival</p>

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
                <h2 style="margin-bottom: 20px; color: red;">嘉年华游轮</h2>

                <div id="visa_detail">
                    <p>嘉年华邮轮，指美囯上市公司嘉年华邮轮集团。嘉年华邮轮于1972年成立，总部设在迈阿密，航线广布巴哈马、 加勒比海、墨西哥渡假区、巴拿马运河、阿拉斯加、夏威夷、百慕达及加拿大等世界最美的海域，其精挑细选的 游览景点，一流的美食及住宿服务，完善的休闲设施，以及多采多姿的活动节目，船上永远洋溢着欢笑喜悦的气 氛，在游轮界以「FUN SHIPS」着称。嘉年华邮轮集团现有24艘8－12万吨大型豪华邮轮（即将变为25艘），这 也是现今为止最为庞大的豪华邮轮船队。</p>
                    <p> 公司的创始人是Ted Arison ，当时Ted Arison用1美元和承担了那条船的所有债务的形式买下了一艘船： "Mardi Gras",公司的另外一位创始人Bob Dickinson在嘉年华公司的总公司：波士顿的美国国际旅行服务有限公司工作， 他们共同为嘉年华邮轮公司的发展做出了很大的努力。 嘉年华邮轮公司现在雇用了大约3,500 个人在岸上工作， 大部分员工在公司总部迈阿密工作。嘉年华邮轮公司提供了全球28,000 个工作岗位在它的邮轮上工作。</p>
                    <p> 嘉年华邮轮品牌年轻化，是美国年轻人比较喜欢的邮轮，船上的活动比较丰富，刺激，娱乐性比较强，属于经济 型的邮轮。嘉年华邮轮在2016年春天推出嘉年华Vista号，这将是一艘可以容纳4980名乘客的豪华巨轮。嘉年华 Vista下水后也将是其最大的一艘邮轮，IMAX影院也将首次出现在这艘邮轮上。 </p>
                    <p>嘉年华邮轮，是以欢乐为主题的游轮，娱乐活动不可胜数，除了基本的网球、高尔夫球…，夜晚更安排夜总会现 场歌舞表演，DISCO跳舞或者酒吧小酌两杯；此外嘉年华游轮系列大多数设有赌场可以一试手气，让船上的夜晚 丰富又有无穷乐趣。并且无论选择内舱客舱还是豪华套房，都能得到客舱服务员的悉心服务，游轮上还有中文菜 单、中文每日活动表，旅客亦能从容融入游轮生活。 </p>
                    <p>北美作为世界最大的邮轮消费地区，全世界约有55%的邮轮客人在这个地区。2013年美国出发的邮轮是加勒比海 (包含巴哈马群岛)，其次是地中海，阿拉斯加，北欧等地区。 嘉年华邮轮：主打当地邮轮市场(行程3-8天)。1972年开始在北美运营，目前共运营24艘邮轮。第25艘可以搭乘 3972名乘客的新邮轮将在2016年4月投入运营。 </p>
                    <p>船队全年在 欧洲、 加勒比海、 地中海、 墨西哥、 巴哈马航行运营；而季节性航线则有 阿拉斯加、 夏威夷、 巴 拿马运河、 加拿大海域航线等。其船队优势在于它多样化的休闲设施，装潢新颖、宽敞的客舱。邮轮上的秀场节 目与娱乐设施应有尽有，让旅客在船上宛如天天参加嘉年华盛会。豪华的超五星级享受，闪烁的霓虹灯，流光溢 彩的环境，这就是嘉年华带给你的一切。 </p>
                    <p>嘉年华邮轮集团下属邮轮公司：公主邮轮（Princess Cruises），荷美邮轮（Holland America）、歌诗达邮轮 （Costa Cruise Line）、冠达邮轮（Cunard Line 其前身白星邮轮拥有泰坦尼克号邮轮）、世邦邮轮以及风之颂邮 轮等。
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
