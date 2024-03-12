<?php
require_once APP_DIR . 'libs/View.php';
class LoginController
{
    private $_view;
    public function __construct()
    {
        check_login();
        $this->_view  = new View();
    }

    public function index()
    {
        $this->_view->set_header_footer = false;
        $this->_view->setVal('login_class', 'bg-gradient-primary');
        $this->_view->setVal('meta_description', 'Admin || Login Page');
        $this->_view->setVal('title', 'Admin || Login Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'login');
    }
}
