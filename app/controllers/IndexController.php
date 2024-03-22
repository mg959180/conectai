<?php
require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Database.php';
class IndexController
{
    private $_view;
    private $_db;
    public function __construct()
    {
        $this->_view  = new View();
        $this->_db = new Database();
    }
    public function index()
    {
        $this->_db->query("SELECT blo_title,blo_slug,blo_images,blo_image_alt_text,blo_desc FROM " . BLOGS ." WHERE 1 LIMIT 4");
        $blogs_data =  $this->_db->resultSet();
        $this->_view->setVal('blogs_data', $blogs_data);
        $this->_view->show_project_model = true;
        $this->_view->frontPageRender(VIEW_DIR . 'index');
    }
}
