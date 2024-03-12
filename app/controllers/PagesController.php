<?php
require_once APP_DIR . 'libs/View.php';
class PagesController
{
    private $_view;
    public function __construct()
    {
        $this->_view  = new View();
    }
    public function fairUsePolicy()
    {
        // $this->_view->setBreadCrumb('main_title', 'Our Clients');
        // $this->_view->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Our Clients']]);

        $this->_view->setVal('policy', true);
        $this->_view->frontPageRender(VIEW_DIR . 'pages');
    }
    public function cancellation()
    {
        // $this->_view->setBreadCrumb('main_title', 'Our Clients');
        // $this->_view->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Our Clients']]);

        $this->_view->setVal('cancellation', true);
        $this->_view->frontPageRender(VIEW_DIR . 'pages');
    }
    public function terms()
    {
        // $this->_view->setBreadCrumb('main_title', 'Our Clients');
        // $this->_view->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Our Clients']]);

        $this->_view->setVal('term', true);
        $this->_view->frontPageRender(VIEW_DIR . 'pages');
    }
    public function privacy()
    {
        // $this->_view->setBreadCrumb('main_title', 'Our Clients');
        // $this->_view->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Our Clients']]);

        $this->_view->setVal('privacy', true);
        $this->_view->frontPageRender(VIEW_DIR . 'pages');
    }
}
