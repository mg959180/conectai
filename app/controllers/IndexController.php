<?php
require_once APP_DIR . 'libs/View.php';
class IndexController
{
    private $_view;
    public function __construct()
    {
        $this->_view  = new View();
    }
    public function index()
    {
        $this->_view->show_project_model = true;
        $this->_view->frontPageRender(VIEW_DIR . 'index');
    }
}
