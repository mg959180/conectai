<?php
require_once APP_DIR . 'libs/View.php';
class IndexController
{
    private $_view;
    public function __construct()
    {
        check_login('index');
        $this->_view  = new View();
    }

    public function index()
    {
        $this->_view->set_header_footer = true;
        $this->_view->setVal('meta_description', 'Admin || Dashboard Page');
        $this->_view->setVal('title', 'Admin || Dashboard Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'index');
    }
}
