<?php
require_once APP_DIR . 'libs/View.php';
class AuthController
{
    private $_view;
    public function __construct()
    {
        $this->_view  = new View();
    }
    public function forgotPassword()
    {
        $this->_view->set_header_footer = false;
        $this->_view->frontPageRender(VIEW_DIR . 'forget-password');
    }

    
}
