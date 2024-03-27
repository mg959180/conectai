<?php

require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Database.php';
class OrdersController
{
    private $_view;
    private $_db;
    public function __construct()
    {
        check_login('index');
        $this->_view  = new View();
        $this->_db = new Database();
    }

    public function index()
    {
        echo 'Page Not Found';
    }

    public function accounts()
    {
        echo 'Page Not Found';
    }
}
