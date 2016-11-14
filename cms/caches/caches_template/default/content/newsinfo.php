<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ily365</title>
<link href="<?php echo MYCSS_PATH;?>ily/newsinfo.css" rel="stylesheet" type="text/css" />
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
	<div class="news_banner">
		<div class="newsbox">

			<?php $n=1;if(is_array($_info)) foreach($_info AS $k=>$v) { ?>
			<div class="title"><?php echo $v['3'];?></div>
			<div class="content">
				<div>
					<h5><?php echo $v['18'];?></h5>
				</div>
			</div>




			<?php $n++;}unset($n); ?>

			<div></div>

		</div>
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