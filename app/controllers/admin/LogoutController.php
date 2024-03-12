<?php

require_once APP_DIR . 'libs/Session.php';
class LogoutController
{

    public function __construct()
    {
        check_login('index');
    }

    public function index()
    {
        SESSION::flash('admin');
        redirect(SITE_ADMIN_URL . 'login');
    }
}
