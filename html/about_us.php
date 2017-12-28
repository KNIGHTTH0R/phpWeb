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
    require_once (dirname(__FILE__) . '/index_navbar.php');
    require_once (dirname(__FILE__) . '/index_carousel.php');
    ?> 
    
    <!--About Us-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> 公司简介</p>
        
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
                <h2 style="margin-bottom: 20px; color: red;">公司简介</h2>

                <div id="visa_detail">
                    <p>爱上旅游是加拿大安大略旅游协会（TICO）注册的专业旅游服务公司（TICO Registration No.50023218）,公司位于加拿大首都-渥太华。 </p>
                    <p>本公司集航空票务，酒店预订，豪华游轮，世界各地旅游团，本地巴士团，以及旅游保险，签证服务为一体的综合性旅游公司。尤已经验加中旅游及航空票务著称。 </p>
                    <p>公司拥有一支训练有素，热情专业的员工队伍，提供专业旅游服务。承接各类个人旅游，团队出行，商务考察团组等以及为客户设计定制专属旅游线路。 </p>
                    
                    
                </div>

                
            </div>
        </div>
        
       
    </div>  
    <?php 
    require_once (dirname(__FILE__). '/index_footer.php');    
    ?>
</body>


</html>