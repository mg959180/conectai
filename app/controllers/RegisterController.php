<?php


require_once APP_DIR.'libs/BaseController.php';
class RegisterController extends BaseController
{
    public function index()
    {
        $this->set_header_footer = false;
        $this->setVal('poo', 'hello');
        $this->frontPageRender(VIEW_DIR . 'signup');
    }
}
