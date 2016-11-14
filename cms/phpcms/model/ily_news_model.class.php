<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_sys_class('model', '', 0);

class ily_news_model extends model
{

    protected $_limit = '';

    public function __construct()
    {
        $this->db_config = pc_base::load_config('database');
        $this->db_setting = 'default';
        $this->table_name = 'news';
        parent::__construct();
    }

    public function total()
    {
        return parent::count();
    }

    public function getdbname()
    {
        $_config = $this->db_config;
        
        return $_config['default']['database'];
    }

    public function setLimit($_limit)
    {
        $this->_limit = $_limit;
    }
}

?>