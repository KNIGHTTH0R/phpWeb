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

    <!--taiwan-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> <a href="visa_canada_cn.php">签证申请(加拿大境内)</a> >> 台湾</p>
        <table>
            <tr>
                <td id="content_bg">
                    <div id="content">
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
                                <h2 style="margin-bottom: 20px; color: red;">入台许可证</h2>

                                <div style="line-height: 180%;" id="visa_detail">
                                    <p><b>特别说明：</b><br/> 大陆人士已入籍持有加拿大护照者，不必再申请入台许可证。</p>

                                    <p><b>代办对象：</b><br/> 1.是海外留学人员（持有多次入境的加拿大留学签证）<br/>2.是旅居海外取得当地永久居留权（即持有加国枫叶卡人士）<br/>3.是旅居国外一年以上且领有工作证明者。<br/>4.上述三类人士的旅居国外配偶及二亲等内血亲（父母、祖父母、兄弟姐妹等）若随行旅行观光，也有资格申请赴台观光证。</p>

                                    <p><b>签证时间：</b><br/> 签证下来时间一般为7个工作日，快递为5-7个工作日左右。<br/> 证件效期：单次证为３个月，多次证为１年。<br/>停留时间：每次在台停留时间为１５日（自入境之次日起算）。</p>

                                    <p><b>顾客所需提供资料：</b></p>
                                    <ul>
                                        <li>关于护照
                                            <ul>
                                                <li> 护照首页复印件；</li>
                                                <li> 行程结束后至少还有6个月有效期；</li>
                                                <li> 至少留有1页空白签证页，不含备注页；</li>
                                                <li> 须有中文签名（不可用铅笔，限中国护照）；</li>
                                            </ul>
                                        </li>
                                        <li>关于其他
                                            <ul>
                                                <li>留学生需要提供学校在读证明以及成绩单</li>
                                                <li>在职人员需要提供工签复印件以及雇主offer</li>
                                                <li>未成年申请人(未满20岁)，请检附：
                                                    <ol>
                                                        <li>父母同意书(jpg档案)正本；</li>
                                                        <li>父母亲护照或居民身分证复印件；</li>
                                                        <li>亲属关系证明文件(如户口簿或公安开立并盖有章戳之亲属关系证明)正本及复印件一份，正本验毕后当场归还。</li>
                                                    </ol>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>关于照片
                                            <p>相片详细规格说明如下：</p>
                                            <ul>
                                                <li>最近6个月内拍摄。</li>
                                                <li>以头部及肩膀顶端近拍，脸部佔据整张相片面积的70~80%。头部或是头髮不能碰触到相片边框(女性长髮碰触相片边框下缘情形例外)。</li>
                                                <li>上传相片为中性的色彩，无墨迹或摺痕。</li>
                                                <li>眼睛正视相机镜头拍摄，两眼必须张开且清晰可见，表情自然不夸张且嘴巴合闭(请勿露齿)，并自然地显现出皮肤的色调，有合适的亮度及对比。</li>
                                                <li>头髮不得遮盖到眼睛任一部分，并呈现清楚的脸型轮廓，不能侧向一边或倾斜，且脸型两侧、两耳轮廓及特殊痣、胎记、疤痕需清楚呈现，相片不修改。小耳症患者头髮可遮盖耳朵轮廓，但脸型两侧仍须显明不遮盖。</li>
                                                <li>上传相片背景需为白色，光源需均匀且不能有阴影或闪光反射在脸部，不能有红眼。</li>
                                                <li>上传相片需清晰、鲜明，其影像不得模煳或呈现任何锯齿状。</li>
                                                <li>上传相片档桉格式须为JPG或JPEG档，相片图档档桉大小需在512KB以内。</li>
                                                <li>如果配戴眼镜：
                                                    <ol>
                                                        <li>眼睛需清楚呈现，不能有闪光反射在眼镜上，且不能配戴有色眼镜(视障者除外)。</li>
                                                        <li>镜框不得遮盖眼睛任一部分（请勿配戴粗框眼镜拍照）。</li>
                                                    </ol>
                                                </li>
                                                <li>因宗教因素需戴头巾者，相片人貌之五官从下巴底部至额头顶端及脸部两侧轮廓，必须清楚呈现。</li>
                                                <li>幼儿相片必须单独显现申请人的影像（不能有椅背、玩具、奶嘴、他人或协助照相的手之影像）。</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p><b>注意事项：</b><br/> 1. 您所提交的表格信息申请人必须诚实、认真、仔细填写。如果表格填写不实、漏填、字迹不清楚，可能会导致签证申请遭到拒绝，或延误旅行，由此产生的一切后果由申请人自行承担。我们并不负责核查您的信息，请务必注意填写您的停留时间等个人信息，确保信息没有错误以及遗漏。如果因为信息不全等原因造成的延误或拒签，本公司概不负责；在办理签证期间，我司可能会根据您的材料情况要求增补其他材料、或予以劝退；领馆也可能会针对您的实际情况，要求增补其他材料，或延长签证受理时间（此情况由领馆决定，我司无法干预）。领馆也可能因内部原因导致延迟出签，本公司相关的受理时间信息仅供参考，非法定承诺。<br/> 2. 大使馆办理签证所需工作日是指您的护照进入大使馆受签开始计算的时间，没有包括快递和中途可能滞留的时间，建议您尽量提前办理签证以免耽误出行；签证资料上公布的签证有效期和停留天数，仅做参考而非任何法定承诺，一切均以签证官签发的签证内容为唯一依据。请根据签证所在国里的签证有效期限内选择出行日期。<br/> 3. 在您获得签证前请勿先行支付机票、酒店费用，以免因签证问题产生费用损失，否则损失将由您自行承担；如您提供了机票、酒店预订单申请签证，请勿在获得签证前取消预订，否则可能对签证结果产生影响。<br/>4. 申请费费用无论签证是否成功，不可退还（_________签证代办费用为CAD_________）；如果指定本公司负责代发以及代收以及转发相关文件，申请材料，本公司办公时间为周一到周五早10点到下午6点。来之前请务必致电我们确认您的信息，并约定取证时间。您可以自己提供预付回邮信封，我们将使用您提供的信封寄回您的护照，不收取回邮费用。我们使用FedEx或等级邮寄公司寄回您的护照，任何邮寄过程中的延误或丢失与本公司无关，请参考邮寄公司的规章制度与其交涉。 </p>
                                </div>

                                <p style="color: red; margin-top: 20px;">*以上信息可能随时更改，爱旅游保留最终解释权。</p>

                                <h3 style="margin-top: 20px;"> 更多详细信息请联系我们。</h3>
                            </div>
                        </div>

                    </div>
                </td>
            </tr>
        </table>
    </div>


    <?php 
    require_once (dirname(__FILE__) . '/index_footer.php');
    ?>
</body>


</html>
