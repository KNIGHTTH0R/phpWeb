<style>

@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);


/* Global Button Styles */
a.animated-button:link, a.animated-button:visited {
    position: relative;
    display: block;
    margin: 1px auto 0;
    padding: 1px 1px;
    color: #fff;
    font-size:14px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    letter-spacing: .08em;
    border-radius: 0;
    text-shadow: 0 0 1px rgba(0, 0, 0, 0.2), 0 1px 0 rgba(0, 0, 0, 0.2);
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    transition: all 1s ease;
}
a.animated-button:link:after, a.animated-button:visited:after {
    content: "";
    position: absolute;
    height: 0%;
    left: 50%;
    top: 50%;
    width: 150%;
    z-index: -1;
    -webkit-transition: all 0.75s ease 0s;
    -moz-transition: all 0.75s ease 0s;
    -o-transition: all 0.75s ease 0s;
    transition: all 0.75s ease 0s;
}
a.animated-button:link:hover, a.animated-button:visited:hover {
    color: #FFF;
    text-shadow: none;
}
a.animated-button:link:hover:after, a.animated-button:visited:hover:after {
    height: 600%;
}
a.animated-button:link, a.animated-button:visited {
    position: relative;
    display: block;
    margin: 1px auto 0;
    padding: 1px 1px;
    color: black;
    font-size:14px;
    border-radius: 0;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    letter-spacing: .08em;
    text-shadow: 0 0 1px rgba(0, 0, 0, 0.2), 0 1px 0 rgba(0, 0, 0, 0.2);
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    transition: all 1s ease;
}

/* Victoria Buttons */

a.animated-button.victoria-one {
    border: 2px solid #FF6700;
}
a.animated-button.victoria-one:after {
    background: #FF6700;
    -moz-transform: translateX(-50%) translateY(-50%) rotate(-25deg);
    -ms-transform: translateX(-50%) translateY(-50%) rotate(-25deg);
    -webkit-transform: translateX(-50%) translateY(-50%) rotate(-25deg);
    transform: translateX(-50%) translateY(-50%) rotate(-25deg);
}
a.animated-button.victoria-two {
    border: 2px solid #FF6700;
}
a.animated-button.victoria-two:after {
    background: #FF6700;
    -moz-transform: translateX(-50%) translateY(-50%) rotate(25deg);
    -ms-transform: translateX(-50%) translateY(-50%) rotate(25deg);
    -webkit-transform: translateX(-50%) translateY(-50%) rotate(25deg);
    transform: translateX(-50%) translateY(-50%) rotate(25deg);
}
a.animated-button.victoria-three {
    border: 2px solid #FF6700;
}
a.animated-button.victoria-three:after {
    background: #FF6700;
    opacity: .5;
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}
a.animated-button.victoria-three:hover:after {
    height: 100%;
    opacity: 1;
}
a.animated-button.victoria-four {
    border: 2px solid #FF6700;
}
a.animated-button.victoria-four:after {
    background: #FF6700;
    opacity: .5;
    -moz-transform: translateY(-50%) translateX(-50%) rotate(90deg);
    -ms-transform: translateY(-50%) translateX(-50%) rotate(90deg);
    -webkit-transform: translateY(-50%) translateX(-50%) rotate(90deg);
    transform: translateY(-50%) translateX(-50%) rotate(90deg);
}
a.animated-button.victoria-four:hover:after {
    opacity: 1;
    height: 700% !important;
}

}
</style>

<?php 

require_once (dirname(__FILE__).'/../DAO/tagDAO.php');
require_once (dirname(__FILE__).'/../model/tag.php');

$tagDAO = new tagDAO();

$cityTag = $tagDAO->getTop10Cities();
//$routeTag = $tagDAO->getTagPID('1','2');


//echo 'cityTag:'.count($cityTag);
//echo 'routeTag:'.$routeTag;

for ($i=0 ; $i < count($cityTag); $i++) {
	echo '<div style="max-width: 150px; width: auto; height: 70px;"> <a href="#" class="btn btn-sm animated-button victoria-one">'.$cityTag[$i].'</a></div>';
}

?>


<div style="width: auto;"></div>