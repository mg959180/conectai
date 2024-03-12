<?php


require_once APP_DIR.'libs/BaseController.php';
class AuthController extends BaseController
{
    public function forgotPassword()
    {
        
        $this->set_header_footer = false;
        $this->setVal('poo', 'hello');
        $this->frontPageRender(VIEW_DIR . 'forget-password');
    }

    
}
