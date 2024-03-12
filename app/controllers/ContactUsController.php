<?php
require_once APP_DIR . 'libs/View.php';
class ContactUsController
{
    private $_view;
    public function __construct()
    {
        $this->_view  = new View();
    }
    public function index()
    {
        $this->_view->setBreadCrumb('main_title', 'Contact With Us');
        $this->_view->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Contact Us']]);
        $this->_view->frontPageRender(VIEW_DIR . 'contact');
    }
}
