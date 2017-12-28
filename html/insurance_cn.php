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

    <!--Insurance-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> 旅游探亲保险</p>

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
                <h2 style="margin-bottom: 20px; color: red;">旅游探亲保险</h2>

                <div id="visa_detail">
                    <p>爱旅游代办各类保险：旅游保险，探亲保险。</p>
                    <div class="container">
                        <!--row1-->
                        <div class="row text-center">
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img src="../images/insurance/21st-century.jpg" alt="21st-century">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img src="../images/insurance/allianz.jpg" alt="allianz">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img src="../images/insurance/blue-cross.jpg" alt="blue-cross">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img src="../images/insurance/gms.jpg" alt="gms">
                                </div>
                            </div>
                        </div>
                        <!--row2-->
                        <div class="row text-center">
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img src="../images/insurance/jf-insurance-agency-group-inc.jpg" alt="jf-insurance-agency-group-inc">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img src="../images/insurance/manulife.png" alt="manulife">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img src="../images/insurance/travelance.jpg" alt="travelance">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img src="../images/insurance/tugo.jpg" alt="tugo">
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 style="margin-top: 20px;"> 更多详细信息请联系我们。</h3>
                </div>
            </div>
        </div>
    </div>


    <?php 
    require_once (dirname(__FILE__) . '/index_footer.php');
    ?>
</body>


</html>
