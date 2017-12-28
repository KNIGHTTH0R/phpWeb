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

    <!--holland-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> <a href="cruise.php">游轮</a> >> Holland&nbsp;America</p>

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
                <h2 style="margin-bottom: 20px; color: red;">何美游轮</h2>

                <div id="visa_detail">
                    <p>今天，这个曾经只属于欧洲达官贵人们享受的豪华邮轮，已经来到了我们身边！何美邮轮创立于1873年，至今已 有136年辉煌的历史，总部在美国西雅图。今天，何美邮轮14艘豪华船舰近500条航线遍布于全球。从登船的那一 刻，您将被它特有的贵族气息和欧洲浓郁的艺术氛围所深深吸引。 </p>
                    <p>何美邮轮公司建立于公元1837年，最早是的名称为【荷兰美洲蒸气轮船公司NASM】，以运送荷兰－美洲之间的 客运为主。由于何美邮轮专门提供到美洲的航行服务，所以渐渐的便以【荷美航运Holland America Line】闻名于 世；第一艘海上游轮便是以鹿特丹号命名，于公元1872年10月15日从荷兰出发航行到纽约，费时15天。当何美邮 轮届满25周年时，旗下已经拥有6艘载客和货运的轮船，并提供荷兰经全新完工的苏伊士运河间的航线。最早何美 邮轮搭载了许许多多，想要移民到美洲新大陆欧洲客，总人数竟有85万人次之多，一圆人们的美洲新大陆之梦。 何美邮轮的第一艘豪华游轮始于1895年，而第二艘则是于1910从纽约出发。1971年荷美航运有了重大的转变，开 始提供完全渡假，载客的豪华游轮服务。截至目前为止，何美邮轮已搭载超过1000万人次的旅客。 </p>
                    <p>何美邮轮餐厅的服务简直是无可挑剔。而最令我难忘的，则是何美邮轮的服务人员，知道如何充份的掌握服务之 道，让乘客感到备感温馨。而其它的游轮，则表现的太过于积极，反而让人感到非常拘束，不自在。何美邮轮的 全体员工，无论是机组人员，或是服务人员，最令人难以忘怀的便是他们亲切的服务态度。 唯有何美邮轮，能训练出并维持如此，高水平的服务水准。 只能用“一切都酷毙了”来形容荷美邮轮。船上的每一处都是那么的干净整洁。珍馐美馔，顶级的服务和非凡的娱乐 设备，简直让人乐不思蜀。 </p>
                    <p>何美邮轮非常注重 “服务品质的维持”，他们在印尼拥有专属的旅馆训练学校，以培训他们专业的服务。他们似乎 都拥极佳的天份，并对与人相处充满了兴趣；他们不但会记住乘客的大名，甚至还能对乘客的兴趣，和嗜好琅琅 上口呢！亲切细心的酒保，甚至会为乘客的喜好写下专属的纪录，女士们也许不难发现细心的他们，还会偷偷的 用餐巾，为您折了一朵可爱的纸玫瑰呢！ 极致的服务随处可见，所有的服务人员，都拥有极佳的经验，并且乐在工作中。 何美邮轮最大的秘密武器，便是他们无以伦比的员工。 </p>
                    <p>游轮的精神在于优秀的船员，良好的服务、和坚持品质及特有的风格。何美邮轮高效率的荷兰籍工作人员，以及 友善的印尼籍、菲律宾籍服务人员是绝佳的组合。无微不致的服务、亲切的笑容，和体贴的关怀都是荷美邮轮， 能吸引众多忠实乘客的主要原因。
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
