<!DOCTYPE html>
<html lang="en">
<style>

.paging ,th,td{
    border:0px;
}
.page{
     width:18px;
    height:18px;
    border:0;
}

.singleLeft{
    background: url('../images/button/single_left.png') no-repeat;  
    background-size: 100% 100%;
    
}

.singleRight{
        background: url('../images/button/single_right.png') no-repeat; 
        background-size: 100% 100%;
    
}

.doubleLeft{
        background: url('../images/button/double_left.png') no-repeat;
            background-size: 100% 100%;
        
}

.doubleRight{
        background: url('../images/button/double_right.png') no-repeat;
            background-size: 100% 100%;
        
}
</style>
<?php
if (isset ( $_GET ['categoryID'] )) {
    $categoryId = $_GET ['categoryID'];
} else {
    header ( 'location:index.php' );
}

if (isset ( $_GET ['page'] )) {
    $page = $_GET ['page'];
} else {
    $page = 1;
}

if (isset ( $_GET ['tagContent'] )) {
    $tagContent = $_GET ['tagContent'] ;
}

if (isset ( $_GET ['tagDivCode'] )) {
    $tagDivCode = $_GET ['tagDivCode'] ;
}


$absPathHead = "http://" . $_SERVER ['HTTP_HOST'];

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
                $css = file_get_contents ( "http://" . $_SERVER ['HTTP_HOST'] . '/web/css/styles.css' );
                echo "<style>" . $css . "</style>";
    ?>
<style>
body.list_page {
    font-family: 'Microsoft Yahei';
}

div.header {
    position: relative;
    top: 10px;
}

td {
    width: 70px;
}

div.content {
    color: #000000;
}
</style>
<style>
/* Styles for tag buttons*/
.tagbutton {
   border: 0px solid #ffffff;
   background: #ff6600;
   background: -webkit-gradient(linear, left top, left bottom, from(#ff6600), to(#ff6600));
   background: -webkit-linear-gradient(top, #ff6600, #ff6600);
   background: -moz-linear-gradient(top, #ff6600, #ff6600);
   background: -ms-linear-gradient(top, #ff6600, #ff6600);
   background: -o-linear-gradient(top, #ff6600, #ff6600);
   background-image: -ms-linear-gradient(top, #ff6600 0%, #ff6600 100%);
   padding: 7px 14px;
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border-radius: 5px;
   -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   color: #ffffff;
   font-size: 12px;
   vertical-align: middle;
   text-decoration: none;
   }
.tagbutton:hover {
   border: 1px solid #ff6600;
   background: #ffffff;
   background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#ffffff));
   background: -webkit-linear-gradient(top, #ffffff, #ffffff);
   background: -moz-linear-gradient(top, #ffffff, #ffffff);
   background: -ms-linear-gradient(top, #ffffff, #ffffff);
   background: -o-linear-gradient(top, #ffffff, #ffffff);
   background-image: -ms-linear-gradient(top, #ffffff 0%, #ffffff 100%);
   color: #000000;
   text-decoration: none;
   }
.tagbutton:active {
   border: 1px solid #ff6600;
   background: #ffffff;
   background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#ffffff));
   background: -webkit-linear-gradient(top, #ffffff, #ffffff);
   background: -moz-linear-gradient(top, #ffffff, #ffffff);
   background: -ms-linear-gradient(top, #ffffff, #ffffff);
   background: -o-linear-gradient(top, #ffffff, #ffffff);
   background-image: -ms-linear-gradient(top, #ffffff 0%, #ffffff 100%);
   color: #000000;
   text-decoration: none;
   }
</style>
</head>

<body class="list_page">
    <?php
        require_once (dirname(__FILE__) . '/index_navbar.php');
        require_once (dirname(__FILE__) . '/../model/category.php');
        require_once (dirname(__FILE__) . '/../DAO/categoryDAO.php');
        require_once (dirname(__FILE__) . '/../model/product.php');
        require_once (dirname(__FILE__) . '/../DAO/productDAO.php');
        require_once (dirname(__FILE__) . '/../DAO/pictureDAO.php');
        require_once (dirname(__FILE__) . '/../model/picture.php');
        
        $pictureDAO = new pictureDAO ();
        $categoryDAO = new categoryDAO ();
        $productDAO = new productDAO ();
        
        $defaultPicturePath = $absPathHead . '/web/images/product/logo.png';
        
        // for pagination
        // number of products per page
        $limit = 10;
        $totalProducts = $productDAO->getCountByCategory ((int) $categoryId,$tagContent,$tagDivCode);
        $totalPages = ceil ( $totalProducts / $limit );
        
        // get the offset of the page
        $offset = ($page - 1) * $limit;
        
        // for inforamtion
        $start = $offset + 1;
        $end = min ( ($offset + $limit), $totalPages);
        
        
        echo '<div class="container header">';
        try{
            if ($totalPages > 0) {
                // get category
                switch ($categoryId) {
                    case 1 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '美国东部</a></p>';
                        break;
                    case 2 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '美国西部</a></p>';
                        break;
                    case 3 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '加拿大东部</a></p>';
                        break;
                    case 4 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '加拿大西部</a></p>';
                        break;
                    case 5 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '亚洲其他地区</a></p>';
                        break;
                    case 6 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '欧洲</a></p>';
                        break;
                    case 7 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '古巴</a></p>';
                        break;
                    case 8 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '牙买加</a></p>';
                        break;
                    case 9 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '墨西哥</a></p>';
                        break;
                    case 10 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '多米尼加</a></p>';
                        break;
                    case 11 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '中国</a></p>';
                        break;
                    case 12 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '香港/澳门/台湾</a></p>';
                        break;
                    case 13 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '日本/韩国</a></p>';
                        break;
                    case 14 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '美国其他地区</a></p>';
                        break;
                    case 15 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '加拿大其他地区</a></p>';
                        break;
                    case 16 :
                        echo '<p><a href="' . $absPathHead . '/web/html/index.php">主页</a> >> ' . '其他</a></p>';
                        break;                  
                    default :
                        break;
                }
                
                // for europe category
                if ($categoryId == 6) {
                    require_once (dirname(__FILE__).'/../DAO/tagDAO.php');
                    require_once (dirname(__FILE__).'/../model/tag.php');

                    $tagDAO = new tagDAO();

                    $cityTag = $tagDAO->getTop10Cities();
                    $routeTag = $tagDAO->getTop10Routes();

                    echo '  <div id="europe_category_only" style="width: 1140px; height: 860px;">';
                    //echo '      <input type="hidden" id="europeTagSearchKeyword" name="europeTagSearchKeyword" value="">';
                    //echo '      <input type="hidden" id="europeTagSearchDivCode" name="europeTagSearchDivCode" value="">';
                    echo '      <div id="europe_map" style="width: 810px; height: auto; float: left;">';
                    echo '          <img src="/web/images/category/map-of-europe-780x859.PNG">';
                    echo '      </div>';
                    echo '      <div id="europe_map_menu" style="width: 330px; height: auto; float: right; white-space:pre-line; ">';
                    
                    if (count($cityTag) > 0) {
                        echo '          <h4 class="caption" style="color: #104BA9; margin-left:10px; margin-bottom:10px;">Hot top 10 cities</h3>';
                        echo '          <h6 style="margin-top:20px; line-height:300%;"">';
                        for ($i=0 ; $i < count($cityTag); $i++) {
                            echo '<a href="#" class="tagbutton" onclick="location.href=\'list.php?categoryID='.$categoryId.'&page=1&tagContent='.$cityTag[$i].'&tagDivCode=1\'">'.$cityTag[$i].'</a>&nbsp;&nbsp;';  
                            if ($i%4 == 3) {
                                echo '<br>';
                            }
                        }
                        echo '          </h6>';
                        echo '          </h4>';
                    }
                    echo '          <br/><br/><br/>';
                    if (count($routeTag) > 0) {
                        echo '          <h4 class="caption" style="color: #104BA9; margin-left:10px; margin-bottom:10px;">Hot top 10 routes</h3>';
                        echo '          <h6 style="margin-top:20px; line-height:300%;"">';
                            for ($j=0 ; $j < count($routeTag); $j++) {
                                echo '<a href="#" class="tagbutton">'.$routeTag[$j].'</a>&nbsp;&nbsp;';  
                                if ($i%2 == 1) {
                                echo '<br>';
                            }
                            }
                        echo '          </h6><br/><br/>';
                        echo '          </h4><br/><br/>';
                    }
                    
                    echo '      </div>';
                    echo '  </div><br/><br/>';
                }

                // get the whole product table back
                $products = $productDAO->getPagesByCategory ( (int) $categoryId, $limit, $offset,$tagContent,$tagDivCode);
                
                if ($products) {
                    foreach ( $products as $product ) {
                        
                        if ($product != null) {
                        // find the picture for current product
                        $picture = $pictureDAO->getFirstPictureByproduct ($product->getId());
                        
                        // replace with default picture if there is no picture in the database
                        if (!$picture || $picture == null)
                            $picturePath = $defaultPicturePath;
                            else
                                $picturePath =$absPathHead."/web". $picture->getPictureURL ().$picture->getPictureSavedName();
                                
                                
                                    
                                    $tourT = $product->getTourType();
                                    if ($tourT == 1){
                                        $tourType =  "大巴";
                                    } elseif ($tourT == 2){
                                        $tourType = "飞机";
                                    } elseif ($tourT == 3){
                                        $tourType = "others";
                                    } else {
                                        $tourType = "error";
                                        
                                    }
                                    
                                
                                
                        echo '<!--List Item-->
                                <!--The list item could be looped -->
                                <div class="thumbnail">
                                    <div class="row">
                                        <h3 class="caption" style="color: #104BA9; margin-left:5px;">';
                                    echo '<a href = "'.$absPathHead.'/web/html/detail.php?productID=' . $product->getId () . '">' . $product->getTitle () . '</a>';
                                  echo '</h3>
                                        <div class="col-sm-2">
                                            <img src="' . $picturePath . '">
                                        </div>
                                        <div class="col-sm-7 content">
                                            <div class="table-responsive">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>线路类型: </td>
                                                            <td>' . $tourType . '</td>
                                                            <td>行程天数： </td>
                                                            <td>' . $product->getNumberOfDays () . '</td>
                                                            <td>出发地： </td>
                                                            <td>' . $product->getCityOfStart () . '</td>
                                                            <td>目的地： </td>
                                                            <td>' . $product->getCityOfEnd () . '</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>                                    
                                            <br/>
                                            <p>' . nl2br($product->getDescription ()) . '</p> 
                                        </div>                               
                                        <div class="col-sm-3">
                                            <p style="color: #FF6500;">'; 
                                            if ($product->getMinPrice() == 0) {
                                                echo "Price N/A"; 
                                            } else {
                                                if ($product->getDiscount() != null || $product->getDiscount() !=0) {
                                                    echo '<span style="color:#000000;"><s>$ ' . $product->getMinPrice() . '</s></span>  ' . '<span style="font-size: 2em;"> $' . number_format($product->getMinPrice() * (1-$product->getDiscount()/100), 2) . '</span> CAD 起/人';
                                                } else {
                                                    echo '$ <span style="font-size: 2em;">' . number_format($product->getMinPrice(), 2) . '</span> CAD 起/人';
                                                }
                                            } 
                                            echo '</p>
                                            <button type="button" class="btn btn-warning" onclick="window.location.href=\'../html/detail.php?productID=' . $product->getId () . '\'" style="background: #FF6500; color: #FFFFFF;">查看详情</button>
                                        </div>
                                    </div>
                                </div>';
                
                                }                       
                            }
                        }
                        
                    } else {
                        echo '<p>Sorry we have nothing here :( </p>';
                    }
        } catch (Exception $e){
            $e->getMessage();
        }
                
    
//pagination part
if (!empty($tagContent) && !empty($tagDivCode)) {
    $doubleLeftBtn = $page==1 ? '':'
    <button  class = "page doubleLeft" onclick="location.href=\'list.php?categoryID='.$categoryId.'&page=1&tagContent='.$tagContent.'&tagDivCode='.$tagDivCode.'\'"/>';
                    
    $singleLeftBtn = $page==1? '' :'
    <button  class = "page singleLeft" onclick="location.href=\'list.php?categoryID='.$categoryId.'&page='.($page-1). '&tagContent='.$tagContent.'&tagDivCode='.$tagDivCode.'\'"/>';
                    
    $singleRightBtn = $page==$totalPages ? '':'
    <button  class = "page singleRight" onclick="location.href=\'list.php?categoryID='.$categoryId.'&page='.($page+1). '&tagContent='.$tagContent.'&tagDivCode='.$tagDivCode.'\'"/>';
                    
    $doubleRightBtn = $page==$totalPages ? '':'
    <button  class = "page doubleRight" onclick="movePages(location.href=\'list.php?categoryID='.$categoryId.'&page='.($totalPages). '&tagContent='.$tagContent.'&tagDivCode='.$tagDivCode.'\'"/>';
} else {
    $doubleLeftBtn = $page==1 ? '':'
    <button  class = "page doubleLeft" onclick="location.href=\'list.php?categoryID='.$categoryId.'&page=1\'"/>';
                    
    $singleLeftBtn = $page==1? '' :'
    <button  class = "page singleLeft" onclick="location.href=\'list.php?categoryID='.$categoryId.'&page='.($page-1). '\'"/>';
                    
    $singleRightBtn = $page==$totalPages ? '':'
    <button  class = "page singleRight" onclick="location.href=\'list.php?categoryID='.$categoryId.'&page='.($page+1). '\'"/>';
                    
    $doubleRightBtn = $page==$totalPages ? '':'
    <button  class = "page doubleRight" onclick="movePages(location.href=\'list.php?categoryID='.$categoryId.'&page='.($totalPages). '\'"/>';
}           
$middlePart  = '
<div id = "paging">
    <p> Page'.$page.' of '.$totalPages.' pages, displaying '.$start.'-'.$end. ' of '. $totalProducts . ' results </p>
</div>';
                
            echo '<div style="margin-left: 20px; margin-top: 20px; ">';
            echo '  <div style="float: left; width: 230px; text-align: right; height: 30px;">'.$doubleLeftBtn.'</div>';
            echo '  <div style="float: left; width: 30px; text-align: center; height: 30px;">'.$singleLeftBtn.'</div>';
            echo '  <div style="float: left; width: 480px; text-align: center; height: 30px;">'.$middlePart.'</div>';
            echo '  <div style="float: left; width: 30px; text-align: center; height: 30px;">'.$singleRightBtn.'</div>';
            echo '  <div style="float: left; width: 230px; text-align: left; height: 30px;">'.$doubleRightBtn.'</div>';
            echo '</div>';
echo '</div>';
?> 
  
    <?php
    require_once (dirname(__FILE__) . '/index_footer.php');
    ?>
</body>

</html>
