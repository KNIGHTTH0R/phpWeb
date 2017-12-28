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

    <!--china domestic-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> 签证申请（中国境内）</p>

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
                <h2 style="margin-bottom: 20px; color: red;">加拿大签证申请（中国境内）</h2>

                <div id="content">
                    <style>
                        #visa_china_cn {
                            margin-bottom: 0px;
                            font-size: 1em;
                            font-family: "Microsoft Yahei";
                        }
                        
                        #visa_china_cn a:link,
                        #visa_china_cn a:visited {
                            color: blue;
                        }
                        
                        #visa_china_cn a:hover {
                            color: red;
                        }
                        
                        #visa_china_cn ul li {
                            list-style-type: disc;
                            list-style-position: inside;
                            margin: 10px 0px 10px 0px;
                            line-height: 150%;
                        }
                        
                        #visa_china_cn table {
                            width: 100%;
                            border-collapse: collapse;
                            font-size: 1em;
                        }
                        
                        #visa_china_cn table th {
                            color: white;
                            background: #3b4e87;
                        }
                        
                        #visa_china_cn table th,
                        #visa_china_cn table td {
                            padding: 10px 10px 10px 10px;
                            border: 1px solid #dfdfdf;
                        }
                        
                        #visa_china_cn table .col1 {
                            width: 5%;
                        }
                        
                        #visa_china_cn table .col2 {
                            width: 10%;
                            font-weight: bold;
                        }
                        
                        #visa_china_cn table .col3 {
                            width: 5%;
                        }
                        
                        #visa_china_cn table .col4 {
                            width: 8%;
                        }
                        
                        #visa_china_cn table .col5 {
                            width: 72%;
                        }

                    </style>

                    <div id="visa_china_cn">
                        <ul>
                            <li>
                                <a href="../files/visa_china_cn/canada_visa_application.pdf" target="_blank">加拿大签证所需材料以及申请表格电子版（表格仅供参考，请不要做正式申请使用）</a>
                            </li>
                            <li>
                                <a href="#">加拿大签证在职证明担保函</a>
                            </li>
                        </ul>

                        <p><b>加拿大旅游签证须知</b></p>
                        <table>
                            <tr>
                                <th class="col1">序号</th>
                                <th class="col2">所需资料</th>
                                <th class="col3">原件</th>
                                <th class="col4">复印件</th>
                                <th class="col5">资料说明</th>
                            </tr>
                            <tr>
                                <td class="col1">1</td>
                                <td class="col2">护照</td>
                                <td class="col3">1份</td>
                                <td class="col4">1份</td>
                                <td class="col5">
                                    <ul>
                                        <li>A 护照必须在旅途结束后，至少1年以上有效期，空白签证页2页以上</li>
                                        <li>B 护照末页需本人亲笔签名（不可用铅笔）</li>
                                        <li>C 若申请人有旧护照，则必须提供原件</li>
                                        <li>D 若申请人旧护照遗失，则必须提供旧护照的遗失证明</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="col1">2</td>
                                <td class="col2">照片</td>
                                <td class="col3">4张</td>
                                <td class="col4"></td>
                                <td class="col1">2寸白底彩色照片4张</td>
                            </tr>
                            <tr>
                                <td class="col1">3</td>
                                <td class="col2">身份证</td>
                                <td class="col3"></td>
                                <td class="col4">1份</td>
                                <td class="col5">申请人本人身份证复印件，身份证必须在有效期内。新版身份证必须正反两面复印</td>
                            </tr>
                            <tr>
                                <td class="col1">4</td>
                                <td class="col2">户口本</td>
                                <td class="col3"></td>
                                <td class="col4">1份</td>
                                <td class="col5">
                                    <ul>
                                        <li>A 完整的全家户口本复印件</li>
                                        <li>B 若夫妻不在同一户口本上，请提供配偶的完整户口本复印件（包括首页，备注页，不能有缺页）</li>
                                        <li>C 若非上海领区申请人，请提供在上海领区范围内城市，半年以上，有效期为六个月以上的暂住证或者居住证原件和复印件</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="col1">5</td>
                                <td class="col2">营业执照</td>
                                <td class="col3"></td>
                                <td class="col4">1份</td>
                                <td class="col5">申请人公司的营业执照或组织机构代码证副本清晰的复印件并盖公章，须在有效期内并正常年检。</td>
                            </tr>
                            <tr>
                                <td class="col1">6</td>
                                <td class="col2">在职证明</td>
                                <td class="col3">1份</td>
                                <td class="col4">1份</td>
                                <td class="col5">申请人所在公司的正式公函原件(要有供领馆查询的单位地址、单位电话和传真号码并用中文或英文打印，内容包括：申请人在公司的职务、月收入薪资，在现在工作单位工作时间、此行目的、行程日期、准假天数、说明谁承担费用并保证其遵守当地法律以及按时返回中国，公司保证在申请人回国后保留其职务，必须有单位名称抬头、公章、负责人签名。（请勿在上面标注“仅供签证使用”等字样）（须公司抬头纸打印）</td>
                            </tr>
                            <tr>
                                <td class="col1">7</td>
                                <td class="col2">资产证明</td>
                                <td class="col3">1份</td>
                                <td class="col4">1份</td>
                                <td class="col5">
                                    <ul>
                                        <li>A 存款证明（金额10万元以上，冻结期限在回国后还有1个月的有效期）</li>
                                        <li>B 房产证复印件（如有）</li>
                                        <li>C 车产证复印件(如有)</li>
                                        <li>D个人对帐单（工资对帐单\个人信用卡对帐单\股票交易单；6个月以上）<br>（以上材料根据个人实际情况进行提供，加粗的为必须提供）</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="col1">8</td>
                                <td class="col2">结婚证明</td>
                                <td class="col3"></td>
                                <td class="col4">1份</td>
                                <td class="col5">结婚证复印件（如遗失，请提供民政局证明）</td>
                            </tr>
                            <tr>
                                <td class="col1">9</td>
                                <td class="col2">加拿大亲属（关系说明）</td>
                                <td class="col3"></td>
                                <td class="col4">1份</td>
                                <td class="col5">如在加拿大有亲属，请尽可能提供与其的关系证明，或者能提供亲属有效的加拿大签证复印件或者是加拿大枫叶卡复印件</td>
                            </tr>
                            <tr>
                                <td class="col1">10</td>
                                <td class="col2">未满18岁孩子材料</td>
                                <td class="col3">1份</td>
                                <td class="col4"></td>
                                <td class="col5">
                                    父母与孩子的亲属关系公证：
                                    <ul>
                                        <li>A.如父母同行，只需提供父母与孩子的亲属关系公证</li>
                                        <li>B.如一方父母同行，还需提供委托公证</li>
                                        <li>C.如父母均不同行，需提供委托公证（注：此类情况签证拒签率非常高）</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>

                        <p><br/><b>备注说明：</b><br/> 1. 具备以上资料并不能保证您获得加拿大签证，在办理过程中可能因材料不准确、不清楚、不真实或其它原因而要求您补充相关材料。<br/> 2. 如果您申请过加拿大移民或非移民签证，无论申请是否被拒签，都要如实说明。</p>
                    </div>
                    <p style="color: red;">*以上信息可能随时更改，爱旅游保留最终解释权。</p>
                    <h3> 更多详细信息请联系我们。</h3>
                </div>
            </div>
        </div>
    </div>




    <?php 
    require_once (dirname(__FILE__) . '/index_footer.php');
    ?>
</body>


</html>
