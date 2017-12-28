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

    <!--norwegian-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> <a href="cruise.php">游轮</a> >> Norwegian</p>

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
                <h2 style="margin-bottom: 20px; color: red;">诺唯真游轮</h2>

                <div id="visa_detail">
                    <p>诺唯真游轮（Norwegian Cruise Line）作为游轮行业最富创新力的品牌，在过去50年品牌历史中不断地突破着对 于游轮的传统定义。诺唯真游轮通过为客人在海上提供自由和随心所欲的旅游体验，颠覆了传统的游轮旅游。再 加上无与伦比的娱乐和餐饮体验，将完美地满足中国年轻一代爱好邮轮旅游人群的需求。今天，诺唯真游轮邀请 客人体验“自由，就在这海天之间”，登上14艘特别建造之一的游轮去探索世界，让客人有机会在最新和最现代的船 只上享受最休闲的度假村式游轮度假。 </p>
                    <p>近期，诺唯真游轮在久负盛名的世界旅游奖评选中今年连续第八年被评选为“欧洲最领先游轮”品牌， 第三次被选 为“加勒比海领先游轮”品牌及第四次获得“世界领先大型船舶游轮“品牌。 </p>
                    
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
