<?php

class OrdersController
{

    public function __construct()
    {
        check_login('index');
    }
    public function index()
    {
        echo 'Page Not Found';
    }
}
