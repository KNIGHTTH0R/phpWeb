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
    
    <!--Air-Lines-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> 购票简介</p>
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
                <h2 style="margin-bottom: 20px; color: red;">机票预定</h2>
                <p>爱旅游代理各大航空公司的机票，价格优惠，欢迎来电咨询。</p>
                <div class="container">
                    <!--row1-->
                    <div class="row text-center">
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-air-canada.jpg" alt="air-canada">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-air-china.jpg" alt="air-china">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-air-transat.jpg" alt="air-transat">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-american-airlines.jpg" alt="american-airlines">
                            </div>
                        </div>
                    </div>
                    <!--row2-->
                    <div class="row text-center">
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-cathay-pacific.jpg" alt="cathay-pacific">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-china-airlines.jpg" alt="china-airlines">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-china-southern.jpg" alt="china-southern">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-china-eastern.jpg" alt="china-eastern">
                            </div>
                        </div>
                    </div>
                    <!--row3-->
                    <div class="row text-center">
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-delta.jpg" alt="delta">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-eva-air.jpg" alt="eva-air">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-hainan-airlines.jpg" alt="hainan-airlines">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-korean-air.jpg" alt="korean-air">
                            </div>
                        </div>
                    </div>
                    <!--row4-->
                    <div class="row text-center">
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-malaysia-airlines.jpg" alt="malaysia-airlines">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-philippine-airlines.jpg" alt="philippine-airlines">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-thai-airways.jpg" alt="thai-airways">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-united-airlines.jpg" alt="united-airlines">
                            </div>
                        </div>
                    </div>
                    <!--row5-->
                    <div class="row text-center">
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-vietnam-airlines.jpg" alt="vietnam-airlines">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="../images/airline/airline-westJet.jpg" alt="westJet">
                            </div>
                        </div>
                    </div>
                </div>

                <div style="line-height: 180%;" id="visa_detail">
                    <p><b>购票须知：</b><br/>1. 所有价格以出票时的即时价格为准。<br/>2. 一般订位只能保留24小时，某些特定的航空公司（如西捷航空和其他美国航空公司）会在晚上自动取消没有出票的预订。<br/>3. 收到你的订单后，我们会在工作时间内尽快联系你确认出票。为了方便联系，我们建议你提供加拿大或美国的电话。如因联系不上你而导致无法确认出票，我们将保留取消预订的权利。<br/>4. 预订中提供的信用卡信息只作担保之用。在出票前，我们不会扣除任何费用。如果是第三方付款，需持卡的人签署授权书，并提供信用卡和身份证明的复印件方能出票。请完成预订后在工作时间内联系客服，索取授权书。<br/>5. 我司不支持三家航空公司在同一张机票上的预订。如果你预订上了，我司保留拒接出票的权利。<br/>6. 请确认旅客信息（包括名字，性别，出生年月日）必须与他的旅行证件一致。以上信息的缺失都有可能造成无法出票。<br/>7. 务必在出票前确保持有行程所需的有效签证及旅行证件。</p>

                    <p><b>备注：</b><br/>请务必在完成预定后，在我们的工作时间内与我们的工作人员联系以确认出票。<br/>请自行确认您的旅行证件、签证符合相关国家要求。以下信息仅供参考。请注意，即使您的旅行证件符合要求，您仍有可能被拒绝入境。</p>
                    <p style="color: red; margin-top: 20px;">*以上信息可能随时更改，爱旅游保留最终解释权。</p>

                    <h3> 更多详细信息请联系我们。</h3>
                </div>
            </div>

        </div>
    </div>

    <?php 
    require_once (dirname(__FILE__). '/index_footer.php');
    ?>
</body>


</html>
