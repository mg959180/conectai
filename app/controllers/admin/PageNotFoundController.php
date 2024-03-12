<?php

require_once APP_DIR . 'libs/BaseController.php';
class PageNotFoundController extends BaseController
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
