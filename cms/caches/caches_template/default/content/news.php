<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ily365</title>
<link href="<?php echo MYCSS_PATH;?>ily/news.css" rel="stylesheet" type="text/css" />
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

			<?php $n=1;if(is_array($allnews)) foreach($allnews AS $v) { ?>
			<div class="newsbox1">
				<a href="#"><img style="width: 242px; height: 162px;"
					src="<?php echo $v['5'];?>"></a> <a
					href="?m=content&c=ily&a=newsinfo&id=<?php echo $v['0'];?>"><h1><?php echo $v['3'];?></h1></a>
				<h2><?php echo $v['7'];?></h2>
				<div class="n_bo">
					<label class="time"><?php echo date('Y-m-d',$v[15]);?></label><label
						class="point">点击数：35</label>
				</div>
			</div>
			<?php $n++;}unset($n); ?>

			<!-- 注释下 ， $v[5]}表示图，v[3]表示简洁文字， $v[15]表示写的时间戳 -->

			<!-- 		<div class="newsbox1">
        		<a href="#"><img src="statics/images/n1.png"></a>
    			<a href="#"><h1>全球智慧城市（北京）高峰论坛在京召开</h1></a>
                <h2>2015年10月24日—25日，由经济日报社指导、《经济》杂志社主办的全球智慧城市（北京）高峰论坛暨百城百企经济技术合作会议在北京人民大会堂召开...</h2>
                <div class="n_bo"><label class="time">2016.01.24</label><label class="point">点击数：35</label></div>
    </div>
		<div class="newsbox1">
        		<a href="#"><img src="statics/images/n2.png"></a>
    			<a href="#"><h1>全球智慧城市（北京）高峰论坛在京召开</h1></a>
                <h2>1月8日，我司湖南智慧旅游网络科技有限公司与湖南省旅游局、湘潭市旅游局、韶山市旅游局等单位代表一起热烈欢迎并陪同国家旅游局全国红色旅游工作协调小组办公室常务副主任罗迪辉及解放军总后勤部后勤学院教授刘高平一行专程来到韶山调研红色旅游。</h2>
                <div class="n_bo"><label class="time">2016.01.24</label><label class="point">点击数：35</label></div>
    </div>
   		 <div class="newsbox1">
         		<a href="#"><img src="statics/images/n3.png"></a>
    			<a href="#"><h1>全球智慧城市（北京）高峰论坛在京召开</h1></a>
                <h2>2015年10月24日—25日，由经济日报社指导、《经济》杂志社主办的全球智慧城市（北京）高峰论坛暨百城百企经济技术合作会议在北京人民大会堂召开...</h2>
                <div class="n_bo"><label class="time">2016.01.24</label><label class="point">点击数：35</label></div>
    </div>
    
    	<div class="newsbox1">
        		<a href="#"><img src="statics/images/n1.png"></a>
    			<a href="#"><h1>全球智慧城市（北京）高峰论坛在京召开</h1></a>
                <h2>2015年10月24日—25日，由经济日报社指导、《经济》杂志社主办的全球智慧城市（北京）高峰论坛暨百城百企经济技术合作会议在北京人民大会堂召开...</h2>
               <div class="n_bo"><label class="time">2016.01.24</label><label class="point">点击数：35</label></div>
    </div>
		<div class="newsbox1">
        		<a href="#"><img src="statics/images/n2.png"></a>
    			<a href="#"><h1>全球智慧城市（北京）高峰论坛在京召开</h1></a>
                <h2>2015年10月24日—25日，由经济日报社指导、《经济》杂志社主办的全球智慧城市（北京）高峰论坛暨百城百企经济技术合作会议在北京人民大会堂召开...</h2>
               <div class="n_bo"><label class="time">2016.01.24</label><label class="point">点击数：35</label></div>
    </div>
   		 <div class="newsbox1">
         		<a href="#"><img src="statics/images/n3.png"></a>
    			<a href="#"><h1>全球智慧城市（北京）高峰论坛在京召开</h1></a>
                <h2>2015年10月24日—25日，由经济日报社指导、《经济》杂志社主办的全球智慧城市（北京）高峰论坛暨百城百企经济技术合作会议在北京人民大会堂召开...</h2>
                <div class="n_bo"><label class="time">2016.01.24</label><label class="point">点击数：35</label></div>
    </div> -->


		</div>
	</div>


	<div class="count">



		<div id="page"><?php echo $page;?></div>
		<!-- 	<ul>
   	<a href="#"><li class="firstli">1</li></a>
    <a href="#"><li>2</li></a>
    <a href="#"><li>3</li></a>
    <a href="#"><li>4</li></a>
    <a href="#"><li>5</li></a>
    <a href="#"><li>6</li></a>
    <a href="#"><li>7</li></a>
    <a href="#"><li>8</li></a>
    <a href="#"><li>9</li></a>
    <a href="#"><li>10</li></a>
    <a href="#"><li class="go"></li></a>
	</ul> -->
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