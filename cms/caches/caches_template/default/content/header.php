<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="navsbox">
			
	 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5b38a2589e9728a18dbd00df91526e36&action=navlist&posid=9&order=id&num=10&cache=0\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'navlist')) {$data = $content_tag->navlist(array('posid'=>'9','order'=>'id','limit'=>'10',));}?>
    		<div id="announ">
                 <ul>
                 <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
                        
                      <a href="<?php echo $v['description'];?>"><li class="firstnav"><?php echo $v['title'];?></li></a>
                      <?php $n++;}unset($n); ?>
                 </ul>
            </div>
     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>