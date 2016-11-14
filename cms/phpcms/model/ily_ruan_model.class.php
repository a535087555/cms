<?php
defined('IN_PHPCMS') or exit('No permission resources.');

pc_base::load_sys_class('model', '', 0);

class ily_ruan_model extends model
{

    function __construct()
    {
        $this->db_config = pc_base::load_config('database');
        $this->db_setting = 'default';
        $this->table_name = 'ruan';
        parent::__construct();
    }

    function _selectcontentByCatid($catid)
    {
        
        // 表的内容在另外的一个表所以用双表查询
        $this->db_config = pc_base::load_config('database');
        $this->db_setting = 'default';
        $this->table_name = 'ruan';
        parent::__construct();
        
        // SELECT * FROM v9_category a ,v9_ruan b, v9_ruan_data c where a.catid = b.catid and b.id = c.id and a.parentid=45 and b.catid=46
        $_mysqls = $this->sqls('SELECT * FROM ' . $this->table_name . ' AS a LEFT JOIN ' . $this->table_name . '_data AS b ON a.id=b.id where a.catid=' . $catid . '');
        return $this->query($_mysqls)->fetch_all();
    }

    function _selectcategory($catid)
    {
        $sql = "SELECT * FROM v9_category WHERE catid='.$catid.'";
        echo $sql;
    }
}
?>