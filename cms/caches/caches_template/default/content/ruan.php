<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ily365</title>
<link href="<?php echo MYCSS_PATH;?>ily/ruan.css" rel="stylesheet" type="text/css" />
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
	<div class="r_banner">
		<div class="rbanner_bg"></div>
	</div>
	<div class="mgs">
		<div class="r_s1">
			<img src="statics/images/r_t1.png">
			<p>电子票务系统主要针对景区当前情况，提供一整套的售检管销一体化的票务解决方案，提供在线分销、电子售票、电子验票、财务统计、数据分析、与第三方对接和信息化管理等功能，提高票务管理工作的效率、提升票务管理的水平、实现景区智能化管理。

				电子票务系统实现了对票务自动化管理，结束了传统手工售票及统计的历史，它的意义不仅是售票、订票那么简单，而是使得票务管理工作走向全面自动化、规范化，对信息及时发布和进行会员管理，从根本上提高了票务管理效率和对客户的服务质量。</p>
		</div>

		<div class="r_s2">
			<h1>多种售票方式</h1>
			<div class="r_s2_l">

				<h2>窗口售票</h2>
				<p>能很好的支持单景区售票、多景区联票的销售，售票支持对个人、对团体，丰富门票类型的同时，极大的提升了景区门票的售票效率。</p>

				<h2>自助终端售票/取票</h2>
				<p>传统售票的一种辅助形势，能够为客流高峰时期分流售票压力，自助售票机操作简单便捷，适宜大众使用。</p>

				<h2>网络售票</h2>
				<p>旅游景区的门票直接发布到网络，游客可以使用电脑、手机等终端通过OTA、电子商务网站等渠道自助选择门票；旅行社等团体可通过景旅通第三方票务分销平台直接预订门票。</p>
			</div>
			<div class="r_s2_r">
				<img src="statics/images/r_img01.png">
			</div>
		</div>



		<?php $n=1;if(is_array($_categoryinfo)) foreach($_categoryinfo AS $v) { ?>

		<div class="r_s3">
			<h1><?php echo $v['catname'];?></h1>
			<div class="r_s2_l">

				<?php $tmp_arr=array_shift($_ruaninfo)?>
				<?php $n=1;if(is_array($tmp_arr)) foreach($tmp_arr AS $val) { ?>
				<h2><?php echo $val['title'];?></h2>
				<p><?php echo $val['description'];?></p>
				<?php $n++;}unset($n); ?>



			</div>


			<div class="r_s2_r">
				<img src="<?php echo $v['image'];?>">
			</div>
		</div>

		<?php $n++;}unset($n); ?>






		<!--             <div class="r_s2">
                <h1>多种售票方式</h1>
            	<div class="r_s2_l">
                
            	<h2>窗口售票</h2>
                <p>能很好的支持单景区售票、多景区联票的销售，售票支持对个人、对团体，丰富门票类型的同时，极大的提升了景区门票的售票效率。</p>
                
            	<h2>自助终端售票/取票</h2>
                <p>传统售票的一种辅助形势，能够为客流高峰时期分流售票压力，自助售票机操作简单便捷，适宜大众使用。</p>
                
            	<h2>网络售票</h2>
                <p>旅游景区的门票直接发布到网络，游客可以使用电脑、手机等终端通过OTA、电子商务网站等渠道自助选择门票；旅行社等团体可通过景旅通第三方票务分销平台直接预订门票。</p></div>
                <div class="r_s2_r">
                	<img src="statics/images/r_img01.png">
                </div>
            </div>
            <div class="r_s3">
                <h1>更安全的检票方式</h1>
            	<div class="r_s2_l">
                
            	<h2>闸机自助检票</h2>
                <p>景区检票采用闸机检票取代人工检票，能有效的避免误检、漏检、人情票等情况的发生。</p>
                
            	<h2>手持终端检票</h2>
                <p>作为闸机检票补充，手持机检票具有更灵活、更机动的特点，能够适应任何检票环境。</p>
                
            	<h2>门票编码核心加密</h2>
                <p>门票的编码采用单向加密技术，不能破解不能复制，防止门票造假。</p>
                <h2>门票唯一性检验</h2>
                <p>售出的门票通过检票设备后即刻失效。</p>
                
                
                </div>
                <div class="r_s2_r">
                	<img src="statics/images/r_img02.png">
                </div>
            </div>
            <div class="r_s3">
                <h1>支持多种门票介质</h1>
            	<div class="r_s2_l">
                
            	<h2>纸质门票</h2>
                <p>窗口售票直接打印成纸质门票，游客使用纸质门票通过检票设备入园。</p>
                
            	<h2>二维码门票</h2>
                <p>通过短信将二维码门票发送至游客的手机，游客直接使用短信二维码检票入园。</p>
                
            	<h2>身份证门票</h2>
                <p>门票绑定游客的身份证信息，游客可以使用身份证直接通过检票设备。</p></div>
                <div class="r_s2_r">
                	<img src="statics/images/r_img03.png">
                </div>
            </div>
            <div class="r_s3">
                <h1>更精细的报表支撑</h1>
            	<div class="r_s2_l">
                
            	<h2>日常报表</h2>
                <p>提供丰富的日常报表，能够让景区工作人员便捷、快速的核对指定时间段的经营数据，减少财务漏洞。</p>
                
            	<h2>游客信息统计</h2>
                <p>根据游客基础信息统计各类型游客的兴趣爱好，为景区定向营销提供数据支持。</p>
                
            	<h2>分析决策</h2>
                <p>根据日常经营数据中的规律，系统智能的做出总结和建议，提供可供景区选择的计划安排、活动安排、优惠折扣等方案，为景区分析决策提供指导，提高景区收益。</p></div>
                <div class="r_s2_r">
                	<img src="statics/images/r_img04.png">
                </div>
            </div> -->


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