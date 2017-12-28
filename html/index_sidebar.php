<!-- Side Bar -->
<style>
.sideBar {
	position: fixed;
	top: 95%;
	z-index: 1000;
}

.sideBar.boxRight {
	width: 100px;
	float: right;
	padding: 0px 0px 0px 0px;
	right: 5%;
	background-color: #FFFFFF;
}

img#side_img {
	display: block;	
}

.sideBar {
	transition: all 0.2s ease-in-out;
	font-family: "Helvetica Neue", Helvetica, "Avenir Next", Avenir,
		"Lantinghei SC", "Hiragino Sans GB", "Microsoft YaHei", "微软雅黑",
		STHeiti, "WenQuanYi Micro Hei", SimSun, sans-serif;
	font-size: 1.1em;
	font-weight: bold;
}

.sideBar:hover {
	top: calc(95% - 250px);
}


</style>
<div class="sideBar boxRight hidden-xs hidden-sm hidden-md">
	<div>
		<div class="row text-center thumbnail">
			<a href="#nav_center">返回页顶</a>
			<hr style="border-top: 1px solid #ccc;" />
			<p><span style="color: #FF6700;">热线电话:<br />(613) 680-5160<br />(613) 680-5168</span></p>
			<img id="side_img" src="../images/logo/qr_sm.jpg" class="img-responsive" style="max-width: 100px;">
		</div>
	</div>
</div>