<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */
 

  function getlinkscontent($id){
      $db=pc_base::load_model('ily_links_model');
      if(!strpos($db->table_name, '_data')){
          $db->table_name=$db->table_name.'_data';    
      }
     $res = $db->select(array('catid'=>intval($id)));
     echo $res['content'];
  }


?>