<?php
require_once APP_DIR . 'libs/View.php';
class RegisterController
{
    private $_view;
    public function __construct()
    {
        $this->_view  = new View();
    }
    public function index()
    {
        $this->_view->set_header_footer = false;
        $this->_view->setVal('poo', 'hello');
        $this->_view->frontPageRender(VIEW_DIR . 'signup');
    }
}
