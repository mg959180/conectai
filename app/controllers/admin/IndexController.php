<?php

require_once APP_DIR . 'libs/BaseController.php';
class IndexController extends BaseController
{

    public function __construct()
    {
        check_login('index');
    }


    public function index()
    {
        echo 'hello world this is testing class for Admin index controller';
    }

    
}
