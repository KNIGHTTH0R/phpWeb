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

    <!--cuba-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> 古巴</p>
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
                <h2 style="margin-bottom: 20px; color: red;">古巴</h2>
                <div class="container">
                    <div class="row text-center">
                        <h2><span id="visa-header-1">古巴热门城市</span></h2>
                    </div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="../images/central_america/cuba_havana.jpg" alt="havana">
                                    <p>哈瓦那</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="../images/central_america/cuba_varadero.jpg" alt="varadero">
                                    <p>巴拉德罗</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <img src="../images/central_america/cuba_cienfuegos.JPG" alt="costa">
                                    <p>西恩富戈斯</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="visa_detail">
                    <p><b>目的地速写：</b><br/> 众所周知，古巴曾经是西班牙的殖民地。19世纪末的两次独立战争后，美国占领古巴，随后的半个世纪，美国也是通过古巴的傀儡政府控制着古巴，所以古巴曾经有“美国人的后花园”之称，那个时候首都哈瓦那是个繁华的大都市，到处是霓虹灯，夜夜笙歌。这一情况一直持续到1959年，卡斯特罗领导古巴革命胜利后实行的财产国有化，让有钱人都逃离古巴，只剩下带不走的不动产和现在仍旧在古巴街上狂奔的一辆辆老爷车。美国政府也一直非常仇视这个眼皮下的新生政权，1961年美国雇佣军进攻古巴失败后，就开始了已经长达半个多世纪的经济封锁，从那个时候开始，古巴的物资短缺就从未中断过。美国数十年的禁运也让古巴这个国家的风貌数十年不变，古巴的神秘感和加勒比海的风情是吸引游客到此的主要元素。哈瓦那老城、特立尼达和圣地亚哥的殖民时代风情、满街跑的老爷车、巴拉德罗的度假海滩、切格瓦拉、海明威、拉丁音乐、雪茄和朗姆酒等，都是古巴的名片。 <br/><br/>当地语言: 西班牙语
                    </p>
                    <p><b>环境：</b><br/>古巴由古巴岛、青年岛及4195个岛屿组成，是西印度群岛中最大的岛国。古巴岛自东向西全长1250公里，最宽处191公里，最狭处32公里。其中古巴本岛面积为104945平方公里， 青年岛面积为2200平方公里，邻接小岛总面积为3715平方公里。其中平原占75%，西北部、中部和东南部为高原和山区，占18%，西部是丘陵和沼泽地，占7%。全国最高山峰为图尔基诺峰，海拔1974米。河流水量充足，有200多条河流和几千条溪涧，最长的河流考托河，全长为370公里。古巴属亚热带气候，最高气温38℃，年平均气温为25.5℃，年降水量为1375毫米
                    </p>
                    <p><b>消费水平：</b><br/>古巴的消费水平要根据它的货币体系分为两种，目前在古巴流通的有两种货币，分别是CUC(可兑换比索，俗称红比索)和CUP(古巴比索，俗称土比索)，1CUC=24CUP，对于游客而言，CUC用于所有的酒店住宿，所有的餐厅就餐，所有的购物，CUP仅用于露天菜市场买蔬菜和水果、乘坐公共汽车、在部分国营餐馆吃饭、理发等。 <br/>对游客而言，CUC的汇率与美元相当，一晚廉价民居Casa的主要要20-25CUC，在外国人餐厅就餐最低也要5-10CUC，这些对于古巴普通老百姓来说，是消费不起的天价。但如果使用CUP在国营餐厅吃饭，在市场买蔬菜水果，就特别便宜，一餐只需要20-30CUP，但使用CUP的餐馆和商店物资十分紧缺，经常断供应。 <br/>曾经古巴政府只允许外国人使用红比索，如今外国人可以同时使用红比索和土比索，所有的国营商业场所和私营业主均已接受外国人使用红比索消费，但有很多私营业主在找零时会把土比索当红比索使用，大家需要时刻提防，并牢记红比索和土比索的汇率，以防止上当受骗。
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
