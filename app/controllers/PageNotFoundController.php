<?php
require_once APP_DIR . 'libs/View.php';
class PageNotFoundController
{
    private $_view;
    public function __construct()
    {
        $this->_view  = new View();
    }
    public function index()
    {
        $this->_view->setVal('poo', 'hello');
        $this->_view->frontPageRender(VIEW_DIR . 'page-not-found');
    }
}
