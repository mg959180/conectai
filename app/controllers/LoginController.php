<?php

require_once APP_DIR.'libs/BaseController.php';
class LoginController extends BaseController
{
    public function index()
    {
        $this->setVal('poo','hello');
        $this->set_header_footer = false;
        $this->frontPageRender(VIEW_DIR . 'login');
    }
}
