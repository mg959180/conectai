<?php
require_once APP_DIR . 'libs/View.php';
class AboutUsController
{
    private $_view;
    public function __construct()
    {
        $this->_view  = new View();
    }
    public function index()
    {
        $this->_view->setBreadCrumb('main_title', 'About ConnectAI');
        $this->_view->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'About Us']]);
        $this->_view->frontPageRender(VIEW_DIR . 'about');
    }
}
