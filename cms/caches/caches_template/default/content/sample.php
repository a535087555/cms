<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ily365</title>
<link href="<?php echo MYCSS_PATH;?>ily/sample.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="statics/images/logo32.png">
</head>

<body>
	<div class="nav">
		<div class="navbox">
			<img class="logo" src="statics/images/logo.png">
			<div class="navsbox">
			   <?php include template("content","header"); ?>
			</div>
			<div class="tel">
				<img src="statics/images/tel.png">
				<p class="tel1">客户咨询热线</p>
				<p class="tel2">0731-85580789</p>
			</div>
		</div>
	</div>
	<div class="s_banner">
		<div class="sbanner_bg"></div>
	</div>
	<div class="mgs">
		<div class="r_s6">
			<img src="statics/images/sam_logo.png">
			<p>为他们提供电子票务系统、旅游分销系统、监管平台、景区APP、景区微信平台、目的地移动官网、目的地微信平台、目的地APP等产品，提供整合营销解决方案、基于物联网及云计算的技术支持等服务。</p>
		</div>


		<div class="r_s7">
			<h1>南岳衡山、蔡伦竹海、东江湖、常德桃花源、古丈县</h1>
			<div class="imgbox">
				<?php $n=1;if(is_array($allsample)) foreach($allsample AS $v) { ?> <img src="<?php echo $v['thumb'];?>"> <?php $n++;}unset($n); ?>


				<!--             <img src="statics/images/sam_02.jpg">
                 <img src="statics/images/sam_04.jpg">
                 <img src="statics/images/sam_03.jpg">
                 <img src="statics/images/sam_01.jpg">
                 <img src="statics/images/sam_05.jpg">
                 <img src="statics/images/sam_02.jpg">
                 <img src="statics/images/sam_04.jpg">
                 <img src="statics/images/sam_03.jpg">
                 <img src="statics/images/sam_01.jpg">
                 <img src="statics/images/sam_05.jpg"> -->


			</div>
		</div>
	</div>



	<div class="bottom">
		<div class="line"></div>
		<div class="midline">
			   <?php include template("content","links"); ?>
		</div>

		<?php include('phpcms/templates/default/content/foot.html');?>


	</div>
</body>


</html>