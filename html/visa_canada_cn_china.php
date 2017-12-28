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

    <!--China-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> <a href="visa_canada_cn.php">签证申请(加拿大境内)</a> >> 中国</p>
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
                            <h2 style="margin-bottom: 20px; color: red;">中国签证(中国签证中心指定代理)</h2>
                            <p style="margin-bottom: 18px; color: red;">邮寄前请先点击阅读相关条款</p>

                            <div id="visa_detail">
                                <a href="../files/visa_canada_cn_china/china_visa_application.pdf" target="_blank">中华人民共和国签证申请表4页（可填写）</a><br/>
                                <a href="../files/visa_canada_cn_china/invitation_letter.pdf" target="_blank">中国签证邀请函格式下载请点击</a><br/>
                                <p><br/>2014年元旦起，中国签证中心只收电脑机打签证申请表格，所有邮寄表格请自行打印并签字，<b style="color: red;">爱旅游将不接受邮寄手写表格</b>。</p>

                                <p><b>中国签证申请中心收费标准如下：</b></p>
                                <table>
                                    <tr>
                                        <th>签证类型及有效期</th>
                                        <th>普通</th>
                                        <th>快速</th>
                                        <th>加急</th>
                                        <th>备注</th>
                                    </tr>
                                    <tr>
                                        <td>加拿大护照（十年多次往返）</td>
                                        <td>$160</td>
                                        <td>$245</td>
                                        <td>$290</td>
                                        <td style="color: red;">普通服务处理时间约为6到7个工作日</td>
                                    </tr>
                                    <tr>
                                        <td>美国护照（十年多次往返）</td>
                                        <td>$205</td>
                                        <td>$285</td>
                                        <td>$330</td>
                                        <td style="color: red;">快速服务处理时间约为4到5个工作日</td>
                                    </tr>
                                    <tr>
                                        <td>第三国家护照（单次往返）</td>
                                        <td>$120</td>
                                        <td>$195</td>
                                        <td>$240</td>
                                        <td style="color: red;">加急服务处理时间约为2到3个工作日</td>
                                    </tr>
                                    <tr>
                                        <td>第三国家护照（两次往返）</td>
                                        <td>$145</td>
                                        <td>$220</td>
                                        <td>$265</td>
                                        <td style="color: red;">以上时间不包括来回邮寄时间</td>
                                    </tr>
                                    <tr>
                                        <td>第三国家护照（半年多次往返）</td>
                                        <td>$170</td>
                                        <td>$245</td>
                                        <td>$290</td>
                                        <td style="color: red;">回邮费用为$30；四本护照以上费用为$50</td>
                                    </tr>
                                    <tr>
                                        <td>第三国家护照（一年多次往返）</td>
                                        <td>$230</td>
                                        <td>$295</td>
                                        <td>$340</td>
                                        <td style="color: red;">以上价格均为加元并已包税，如需邮寄另收邮寄费</td>
                                    </tr>
                                </table>
                                <br />
                                <p><b>2012年10月31日起中国签证新规定:</b><br/>所有邀请函均需附上邀请人国内<span style="color: red;">身份证</span>正反面复印件</p>

                                <p><b>2012年5月16日起中国签证新规定:</b></p>
                                <ul>
                                    <li>申请旅游或探亲签证（L类签证）需提供以下任一项（邀请函<span style="color: red;">不可为</span>电子邮件打印）：
                                        <ul>
                                            <li>国内旅游公司邀请函 (可复印件或传真或原件)</li>
                                            <li>国内亲戚朋友邀请函 (可复印件或传真或原件)</li>
                                            <ul>
                                                <li>邀请函应书写或打印，并经邀请人签名。邀请函可以是传真件，邮寄信件或扫描打印件，但不能是电子邮件。</li>
                                                <li>邀请函应包括邀请人和被邀请人的姓名、住址和他们之间的关系，被邀请人赴中国的目的及停留时间等等。</li>
                                                <li><span style="color: red;">探亲邀请函必须包含以下信息：</span>
                                                    <ul>
                                                        <li>邀请人姓名</li>
                                                        <li>被邀请人姓名</li>
                                                        <li>在中国逗留时间</li>
                                                        <li>中国和加拿大的完整地址</li>
                                                        <li>邀请人签名</li>
                                                        <li>日期</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <li>机票行程和酒店订单 (两者都必须提供)</li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul>
                                    <li>访问、商务（F）签证，发给应邀赴华访问、经商、考察、讲学、进行科技文化交流的人员及短期进修、实习等活动不超过6个月的人员。申请材料及注意事项如下：
                                        <ul>
                                            <li>申请一次、两次入境有效访问、商务（F）签证，应提交中国政府有关部门，或乡（镇）以上地方政府，中国公司、企事业单位出具的邀请函（传真）或请柬。</li>
                                            <li>申请多次入境有效访问、商务（F）签证，应提交下列文件之一：
                                                <ul>
                                                    <li>中国政府有关部门或有关省（直辖市、自治区）人民政府（或其外事办公室、经贸委等）的多次签证通知（传真）；</li>
                                                    <li>被中国政府主管部门授权的中国企事业单位的多次签证通知（传真）；</li>载有申请人姓名的在华投资、经商企业的营业执照或企业批准书的原件和复印件；
                                                    <li>申请人所在公司在华分公司邀请其多次访华的函（电）；</li>
                                                    <li>一年内有两次以上持F签证进入中国的记录（需提交有关签证页的复印件）。</li>
                                                    <li><span style="color: red;">商务邀请函必须有以下信息：</span>
                                                        <ul>
                                                            <li>公司名称</li>
                                                            <li>被邀请人姓名</li>
                                                            <li>公司电话和完整地址</li>
                                                            <li>公司负责人姓名</li>
                                                            <li>探访原因</li>
                                                            <li>公司盖章</li>
                                                            <li>邀请人签名</li>
                                                            <li>日期</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <p> 申请人必须诚实、认真、仔细填写《中华人民共和国签证申请表》。如果表格填写不实、漏填、字迹不清楚，可能会导致签证申请遭到拒绝，或延误旅行，由此产生的一切后果由申请人自行承担。领事官员根据中国有关法律、规定和个案情况审发签证，有权依法拒绝申请人的签证申请，依法改变、取消已发签证并无需说明理由。 </p>
                                <p><b> 照片要求：</b><br/>签证申请人所提交的照片须为本人半年内拍摄的2x2，正面、免冠、白色背景的彩色护照照片。</p>
                                <p><b> 中国签证材料<span style="color: red;">（均需原件）</span></b></p>
                                <ul>
                                    <li>持加拿大护照：
                                        <ul>
                                            <li>中国出生
                                                <ul>
                                                    <li>中国内陆出生，请提供1-4任一项材料（西藏，内蒙古出生请再附加‘5’项）
                                                        <ul>
                                                            <li>印有中国签证的有效或已注销的加拿大护照</li>
                                                            <li>中国护照，不得减角或注销</li>
                                                            <li>中国身份证或户口本</li>
                                                            <li>中国出生证</li>
                                                            <li>西藏出生请附加一封自我介绍信，内容包括：
                                                                <ul>
                                                                    <li>何年何月何日来的加拿大</li>
                                                                    <li>是否在加拿大工作/上学，何时入学，专业</li>
                                                                    <li>家庭成员信息：姓名，年龄，工作情况</li>
                                                                    <li>此次回国目的，若为探亲，探望对象的姓名，年龄，工作情况，地址</li>
                                                                    <li>签字</li>
                                                                    <li>（以上信息仅供参考，不能保证一定申请成功）</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li>中国香港澳门台湾出生，请提供以下任一材料
                                                        <ul>
                                                            <li>印有中国签证的有效或已注销的加拿大护照</li>
                                                            <li>香港身份证</li>
                                                            <li>香港出生证/纸</li>
                                                            <li>回乡证</li>
                                                            <li>港澳台同胞证</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>非中国出生
                                                <ul>
                                                    <li>出生纸---必须是LONG FORM（黄色），上面会有父母的姓名，父母原国籍，父母出生地等。</li>
                                                    <li>父母双方小孩子出生那一天的加拿大护照原件复印件，姓名需要与出生纸上的一致。如果姓名不一致，父母必须要提供改名纸原件。</li>
                                                    <li>如果小孩子出生时候父母双方或者一方还没有入籍加拿大，那么父母需要提供他们小孩子出生那一天父母持有的中国护照原复印件与LANDING PAPER（或者枫叶卡）原件复印件，以此证明他们在小孩子时候父母已经是加拿大永久居民。如果姓名不一致，父母必须要提供改名纸。</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>持其他国家护照请在以上材料基础上提供枫叶卡，并填写中国签证申请表格附表D项。</li>
                                    <li>赴西藏旅游以及特种旅游
                                        <ul>
                                            <li>如果前往西藏自治区旅游，须事先与该自治区旅游局（电话：0086－891－6834313，传真：0086－891－6834632）<br>或加拿大中国旅行社（电话： 4169798993，传真：4169798220）联系获得入藏许可。</li>
                                            <li>如果申请特种旅游（如：自备车、徒步、骑自行车、骑马、骑骆驼、航拍、摄影、探险、热气球等），需提供中国国家旅游局或各省、自治区、直辖市旅游局的签证通知函；<br>来华登山，需提供国家体育总局签证通知函。前往西藏登山，需提供西藏自治区旅游局的签证通知函。</li>
                                        </ul>
                                    </li>
                                </ul>

                                <p><b>你可将申请材料送到我们的办公地点。</b></p>

                                <ul>
                                    <li>护照为重要的身份证件，邮寄护照请使用安全可靠的速递公司。</li>
                                    <li>我们的护照将会统一收集到公司总部整理递交，如果您递交到其它办公室，请考虑额外的延迟。</li>
                                    <li>一次入境签证，通常自签发之日起3个月内入境有效。两次入境签证的有效期通常为6个月。在华停留期限由领事根据有关规定和个案情况等审定。申请签证一般不要提前3个月申请，可以提前1-2个月申请，以免日久失效；</li>
                                    <li>申请人入境后，如实际停留期将超过签证允许的停留期，则必须在签证停留期满前，向当地县级以上公安机关或其他主管机关申请延期。逾期滞留将被处以罚款等处罚。</li>
                                </ul>
                                
                                <p><b>特别提醒：</b></p>
                                <ul>
                                    <li>您所提交的表格将直接提交到中国签证申请中心，我们并不负责核查您的信息，请务必注意填写的停留时间。如果因为信息不全等原因造成的延误或拒签，本公司概不负责；</li>
                                    <li>申请费及回邮费用不可退还；</li>
                                    <li>所有护照将全部返回总部，大约一周内分配到其他分社。您可以选择到任何办公地点取回您的护照，我们的办公时间为周一到周五早10点到下午6点。来之前请务必致电我们确认您的护照已经返回，并约定取证时间。</li>
                                    <li>您可以自己提供预付回邮信封，我们将使用您提供的信封寄回您的护照，不收取回邮费用。</li>
                                    <li>我们使用FedEx或等级邮寄公司寄回您的护照，任何邮寄过程中的延误或丢失与本公司无关，请参考邮寄公司的规章制度与其交涉。</li>
                                </ul>
                            </div>

                            <p style="color: red; margin-top: 20px;">*以上信息可能随时更改，爱旅游保留最终解释权。</p>
                            <h3 style="margin-top: 20px;">更多详细信息请联系我们。</h3>
                        </div>
                    </div>

                </div>
            </td>
        </tr>
    </div>


    <?php 
    require_once (dirname(__FILE__) . '/index_footer.php');
    ?>
</body>


</html>
