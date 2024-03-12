<?php

require_once APP_DIR . 'libs/BaseController.php';

class LoginController extends BaseController
{

    public function __construct()
    {
        check_login();
    }

    public function index()
    {
        $this->setVal('login_class', 'bg-gradient-primary');
        $this->setVal('meta_description', 'Login Page');
        $this->setVal('title', 'Login Page');
        $this->setVal('meta_author', 'Mayank Gupta');
        $this->adminPageRender(ADMIN_VIEW_DIR . 'login');
    }
}
