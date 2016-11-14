<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>

<div class="centerbox">

       <div class="center">
				<div class="lbox">
					<h1>联系方式</h1>
					<p>地址：长沙市雨花区万家丽中路华晨双帆国际701室</p>
					<p>邮箱：zhly@cninone.com</p>
					<p>电话：0731-85580789</p>
				</div>
			 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7ff1680bd5beefeb39f954206eb4ea04&action=ilylinks\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'ilylinks')) {$data = $content_tag->ilylinks(array('limit'=>'20',));}?>
    
            
          
            <div class="rbox"> 
            <?php $n=1;if(is_array($data['categoryinfo'])) foreach($data['categoryinfo'] AS $k1=>$v1) { ?>
			    <div class="r6">
					
					<img src="statics/images/l1.png"> 
					   <div class="linkscontent">
                  	   <a href="#"><h1><?php echo $v1['catname'];?></h1></a>
                  		
                  		<?php $arr 	= array_shift($data['linksinfo']);?>
                  		<?php $n=1;if(is_array($arr)) foreach($arr AS $k=>$v) { ?>
								<a href="<?php echo $v['18'];?>"><p><?php echo $v['3'];?></p></a> 
						<?php $n++;}unset($n); ?>
						
						</div>
                  <?php $n++;}unset($n); ?>
                      
                </div>
            
            
            
           <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        
        </div>
        
    </div>    
    
  	</div>	</div>
</div>