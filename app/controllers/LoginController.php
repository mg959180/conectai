<?php
require_once APP_DIR . 'libs/View.php';
class LoginController
{
    private $_view;
    public function __construct()
    {
        $this->_view  = new View();
    }
    public function index()
    {
        $this->_view->set_header_footer = false;
        $this->_view->frontPageRender(VIEW_DIR . 'login');
    }
}
