<?php
require_once APP_DIR . 'libs/View.php';
class ConectaiApiController
{
    private $_view;
    public function __construct()
    {
        $this->_view  = new View();
    }
    public function index()
    {
        $this->_view->frontPageRender(VIEW_DIR . 'connect-api');
    }
}
