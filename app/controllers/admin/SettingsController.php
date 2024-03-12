<?php
require_once APP_DIR . 'libs/View.php';
class SettingsController
{
    private $_view;
    public function __construct()
    {
        check_login();
        $this->_view  = new View();
    }

    public function index()
    {
        $this->_view->set_header_footer = true;
        $this->_view->setVal('meta_description', 'Admin || Main Setting Page');
        $this->_view->setVal('title', 'Admin || Main Setting Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'main-setting-form');
    }

    public function GeneralSetting()
    {
        $this->_view->set_header_footer = true;
        $this->_view->setVal('meta_description', 'Admin || General Setting Page');
        $this->_view->setVal('title', 'Admin || General Setting Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'general-setting-form');
    }

    public function PaymentInfoSetting()
    {
        $this->_view->set_header_footer = true;
        $this->_view->setVal('meta_description', 'Admin || Payment Info. Setting Page');
        $this->_view->setVal('title', 'Admin || Payment Info. Setting Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'payment-info-setting-form');
    }
}
