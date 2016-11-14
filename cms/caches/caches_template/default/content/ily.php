<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>

<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css"
	rel="stylesheet">
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link href="<?php echo MYCSS_PATH;?>ily/zhuye.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="statics/images/logo32.png">
<meta charset="UTF-8">
<title>ily365</title>



</head>

<body>

	<div class="nav">
		<div class="navbox">
			<img class="logo" src="statics/images/logo.png">
			  <?php include template("content","header"); ?>

			<div class="tel">
				<img src="statics/images/tel.png">
				<p class="tel1">客户咨询热线</p>
				<p class="tel2">0731-85580789</p>
			</div>
		</div>
	</div>

	<div class="banner">
		<!-- <div class="sbanner"></div>
        <div class="icon2">
        <a href="#"><span class="licon"></span></a>
        <a href="#"><span class="ricon"></span></a>
 		</div> -->

		<div id="myCarousel" class="carousel slide">
			<!-- 轮播（Carousel）指标 -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- 轮播（Carousel）项目 -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="statics/images/banner1.jpg" alt="First slide">
				</div>
				<div class="item">
					<img src="statics/images/banner1.jpg" alt="Second slide">
				</div>
				<div class="item">
					<img src="statics/images/banner1.jpg" alt="Third slide">
				</div>
			</div>
			<!-- 轮播（Carousel）导航 -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel"
				data-slide="next">&rsaquo;</a>
		</div>


		<div class="icon">
			<a href="#"><span class="one"></span></a> <a href="#"><span
				class="two"></span></a> <a href="#"><span class="three"></span></a>
		</div>
	</div>
	<div class="picture">
		<div class="pic_box1"
			onmouseover="this.style.backgroundColor='#79FF79'"
			onmouseout="this.style.backgroundColor='#f4f4f4'">
			<a href="?m=content&c=ily&a=ying"> <img
				src="statics/images/i_01.png">
				<h1>硬件营销</h1>
				<h2>旅游目的地O2O服务平台</h2>
			</a>
		</div>
		<div class="pic_box2"
			onmouseover="this.style.backgroundColor='#79FF79'"
			onmouseout="this.style.backgroundColor='#f4f4f4'">
			<a href="?m=content&c=ily&a=ruan"> <img
				src="statics/images/i_02.png">
				<h1>软件开发</h1>
				<h2>旅游目的地O2O服务平台</h2>
			</a>

		</div>
		<div class="pic_box3"
			onmouseover="this.style.backgroundColor='#79FF79'"
			onmouseout="this.style.backgroundColor='#f4f4f4'">
			<a href="?m=content&c=ily&a=shop"> <img
				src="statics/images/i_03.png">
				<h1>旅游商城</h1>
				<h2>旅游目的地O2O服务平台</h2>
			</a>
		</div>


	</div>
	<div class="sample">
		<p class="tit">成功案例</p>
		<p class="det">-南岳衡山-</p>
		<img src="statics/images/sample.png"> <a
			href="?m=content&c=ily&a=sample"><div class="more">
				<p>了解更多</p>
			</div></a>
	</div>


	<div class="news">
		<p class="tit">新闻动态</p>
		<p class="det">-news-</p>
		<div class="newsbox">

			<?php $n=1;if(is_array($allnews)) foreach($allnews AS $v) { ?>
			<div class="n1">
				<img style="width: 242px; height: 162px;" src="<?php echo $v['5'];?>" />
				<h1>
					<a href="?m=content&c=ily&a=newsinfo&id=<?php echo $v['0'];?>"><?php echo $v['3'];?></a>
				</h1>
				<h2><?php echo $v['7'];?></h2>

				<p><?php echo date('Y-m-d',$v[15]);?></p>
			</div>
			<?php $n++;}unset($n); ?>








		</div>
		<a href="?m=content&c=ily&a=news"><div class="more">
				<p>了解更多</p>
			</div></a>

	</div>


	<div class="partners">
		<p class="tit">合作伙伴</p>
		<p class="det">-partners-</p>
		<div class="logobox">
			<div class="im">
				<img src="statics/images/logo1.png">
			</div>
			<div class="im">
				<img src="statics/images/logo2.png">
			</div>
			<div class="im">
				<img src="statics/images/logo3.png">
			</div>
			<div class="im">
				<img src="statics/images/logo4.png">
			</div>
			<div class="im">
				<img src="statics/images/logo5.png">
			</div>
			<div class="im">
				<img src="statics/images/logo6.png">
			</div>
			<div class="im">
				<img src="statics/images/logo7.png">
			</div>
			<div class="im">
				<img src="statics/images/logo8.png">
			</div>
			<div class="im">
				<img src="statics/images/logo9.png">
			</div>
			<div class="im">
				<img src="statics/images/logo10.png">
			</div>
			<div class="im">
				<img src="statics/images/logo11.png">
			</div>
			<div class="im">
				<img src="statics/images/logo12.png">
			</div>
			<div class="im">
				<img src="statics/images/logo13.png">
			</div>
			<div class="im">
				<img src="statics/images/logo14.png">
			</div>
			<div class="im">
				<img src="statics/images/logo15.png">
			</div>
			<div class="im">
				<img src="statics/images/logo16.png">
			</div>
		</div>
		<a href="partners.html"><div class="more">
				<p>了解更多</p>
			</div></a>
	</div>
	
	<div class="bottom">
		<div class="line"></div>
		<div class="midline">

               <?php include template("content","links"); ?>

	
		</div>
	
	</div>
	
	
	
  <?php include template("content","foot"); ?>
</body>

 
 
</html>