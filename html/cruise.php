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

    <!--Cruise-->
    <!--row1-->
    <div class="container">
        <p><br><a href="index.php">主页</a> >> 游轮</p>
        <div class="row text-center">
            <h2><span id="visa-header-1">豪华游轮公司简介</span></h2>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="../images/cruise/carnival.jpg" alt="carnival">
                        <ul class="pager">
                            <li><a href="cruise_carnival.php">查看详情</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="../images/cruise/celebrity.jpg" alt="celebrity">
                        <ul class="pager">
                            <li><a href="cruise_celebrity.php">查看详情</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="../images/cruise/costa.jpg" alt="costa">
                        <ul class="pager">
                            <li><a href="cruise_costa.php">查看详情</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--row2-->
    <div class="container">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="../images/cruise/disney.jpg" alt="disney">
                        <ul class="pager">
                            <li><a href="cruise_disney.php">查看详情</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="../images/cruise/holland_america.jpg" alt="holland_america">
                        <ul class="pager">
                            <li><a href="cruise_holland_america.php">查看详情</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="../images/cruise/msc.jpg" alt="msc">
                        <ul class="pager">
                            <li><a href="cruise_msc.php">查看详情</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--row3-->
    <div class="container">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="../images/cruise/norwegian.jpg" alt="norwegian">
                        <ul class="pager">
                            <li><a href="cruise_norwegian.php">查看详情</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="../images/cruise/princess.jpg" alt="princess">
                        <ul class="pager">
                            <li><a href="cruise_princess.php">查看详情</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="../images/cruise/royal_caribbean.jpg" alt="royal_caribbean">
                        <ul class="pager">
                            <li><a href="cruise_royal_caribbean.php">查看详情</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php 
    require_once (dirname(__FILE__). '/index_footer.php');
    ?>
</body>


</html>
