<?php
require_once APP_DIR . 'libs/View.php';
class OurClientsController
{
    private $_view;
    public function __construct()
    {
        $this->_view  = new View();
    }
    public function index()
    {
        // $this->_view->setBreadCrumb('main_title', 'Our Clients');
        // $this->_view->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Our Clients']]);
        $this->_view->frontPageRender(VIEW_DIR . 'our-clients');
    }
}
