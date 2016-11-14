<?php
defined('IN_PHPCMS') or exit('No permission resources.');

class ily
{

    function __construct()
    {}

    public function init()
    {
        
        // news的内容
        $this->model = pc_base::load_model('ily_news_model');
        $_ily_new = new ily_news_model();
        $_dbname = $_ily_new->getdbname();
        $_mysqls = $_ily_new->sqls('SELECT * FROM ' . $_dbname . '.`v9_news`  ORDER BY updatetime DESC limit 0,6');
        $allnews = $_ily_new->query($_mysqls)->fetch_all();
        
        // var_dump($allnews);
        
        include template('content', 'ily');
    }

    public function ruan()
    {
        pc_base::load_model('ily_ruan_model');
        pc_base::load_model('category_model');
        
        $_category = new category_model();
        $_categoryinfo = $_category->select(array(
            'parentid' => '45'
        ));
        // parentid=45 代表是 软件开发 模块的内容
        
        foreach ($_categoryinfo as $k => $val) {
            $_catid[] .= $val["catid"];
        }
        // 获得不同的CATID
        
        $_ruan = new ily_ruan_model();
        
        foreach ($_catid as $_key => $_val) {
            $_ruaninfo[$_key] = $_ruan->select(array(
                'catid' => "$_val"
            ));
        }
        // 根据CATID获得不同的值
        
        // var_dump($_ruaninfo);
        
        include template('content', 'ruan');
    }

    public function ying()
    {
        $this->db = pc_base::load_model('ily_ying_model');
        
        pc_base::load_model('ily_ying_model');
        pc_base::load_model('category_model');
        
        $_category = new category_model();
        $_categoryinfo = $_category->select(array(
            'parentid' => '44'
        ));
        // parentid=44 代表是硬件 模块的内容
        
        foreach ($_categoryinfo as $k => $val) {
            $_catid[] .= $val["catid"];
        }
        // 获得不同的CATID
        $_ying = new ily_ying_model();
        foreach ($_catid as $_key => $_val) {
            $_yinginfo[$_key] = $_ying->select(array(
                'catid' => "$_val"
            ));
        }
        // 根据CATID获得不同的值
        
        // var_dump($_yinginfo);
        
        include template('content', 'ying');
    }

    public function sample()
    {
        $this->db = pc_base::load_model('ily_sample_model');
        $_ily_sample = new ily_sample_model();
        $allsample = $_ily_sample->select();
        
        // var_dump($allsample);
        
        include template('content', 'sample');
    }

    public function shop()
    {
        include template('content', 'shop');
    }

    public function about()
    {
        pc_base::load_model('ily_about_model');
        pc_base::load_model('category_model');
        
        $_category = new category_model();
        $_categoryinfo = $_category->select(array(
            'parentid' => '54'
        ));
        // parentid=18 代表是介绍模块的内容
        
        foreach ($_categoryinfo as $k => $val) {
            $_catid[] .= $val["catid"];
        }
        // 获得不同的CATID
        $_about = new ily_about_model();
        foreach ($_catid as $_key => $_val) {
            $_aboutinfo[$_key] = $_about->select(array(
                'catid' => "$_val"
            ));
        }
        
        // var_dump($_aboutinfo);
        include template('content', 'about');
    }

    public function news()
    {
        $this->model = pc_base::load_model('ily_news_model');
        $_ily_new = new ily_news_model();
        // var_dump($_ily_new->listinfo());
        
        $page = $this->page();
        
        $_page = 1; // 初始化$_page;
        
        if (isset($_GET['page'])) {
            $_page = ($_GET['page'] - 1) * 6;
        }
        
        $_dbname = $_ily_new->getdbname(); // 获得数据库名
        $_mysqls = $_ily_new->sqls('SELECT * FROM `' . $_dbname . '`.`v9_news` ORDER BY updatetime DESC limit ' . $_page . ',6');
        // 直接执行sql语句。返回句柄
        $allnews = $_ily_new->query($_mysqls)->fetch_all();
        
        include template('content', 'news');
    }

    public function info()
    {}

    public function page($_pagesize = 6)
    {
        pc_base::load_sys_class(page); // 调用 LIBS/CLASSES/MYPAGE
        $_model = pc_base::load_model('ily_news_model');
        $_ily_new_count = new ily_news_model();
        // var_dump($_ily_new_count->count());
        
        $_page = new Page($_ily_new_count->count(), $_pagesize);
        
        $_model->setLimit($_page->getLimit());
        $page = $_page->showpage();
        return $page;
    }

    public function links()
    {
        $this->model = pc_base::load_model('ily_links_model');
        $_ily_links = new ily_links_model();
        
        // SELECT a.id,a.title,b.content FROM v9_ilylinks AS a LEFT JOIN v9_ilylinks_data AS b ON a.id=b.id
        
        $_link_mysqls = $_ily_links->sqls('SELECT a.id,a.title,a.catid,b.content FROM v9_ilylinks AS a LEFT JOIN v9_ilylinks_data AS b ON a.id=b.id where a.catid=35');
        $frilinks = $_ily_links->query($_link_mysqls)->fetch_all();
        
        $_service_mysqls = $_ily_links->sqls('SELECT a.id,a.title,a.catid,b.content FROM v9_ilylinks AS a LEFT JOIN v9_ilylinks_data AS b ON a.id=b.id where a.catid=36');
        $servicelinks = $_ily_links->query($_service_mysqls)->fetch_all();
        
        $_view_mysqls = $_ily_links->sqls('SELECT a.id,a.title,a.catid,b.content FROM v9_ilylinks AS a LEFT JOIN v9_ilylinks_data AS b ON a.id=b.id where a.catid=37');
        $viewlinks = $_ily_links->query($_view_mysqls)->fetch_all();
        
        $_aboutus_mysqls = $_ily_links->sqls('SELECT a.id,a.title,a.catid,b.content FROM v9_ilylinks AS a LEFT JOIN v9_ilylinks_data AS b ON a.id=b.id where a.catid=38');
        $aboutlinks = $_ily_links->query($_aboutus_mysqls)->fetch_all();
        
        print_r($frilinks);
        
        include template('content', 'links');
    }

    public function newsinfo()
    {
       
            pc_base::load_model('ily_news_model');
            $_new = new ily_news_model();
            $_id = $_GET['id'];
            
            $_newsinfo_mysqls = ("SELECT * FROM v9_news AS a JOIN v9_news_data AS b ON a.id=b.id AND a.id=$_id");
            $_info = $_new->query($_newsinfo_mysqls)->fetch_all();
            
            // $_newinfo=$_new->select(array('id'=>"$_id") );
            var_dump($_info);
            
            include template('content', 'newsinfo');
       
    }
}
?>