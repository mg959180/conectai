<?php

require_once APP_DIR . 'libs/BaseController.php';
class CountriesController extends BaseController
{

    public function __construct()
    {
        check_login('index');
    }

    public function index()
    {
    }
}