<?php

require_once APP_DIR.'libs/BaseController.php';
class ContactUsController extends BaseController
{
    public function index()
    {
        $this->setBreadCrumb('main_title', 'Contact With Us');
        $this->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Contact Us']]);
        $this->frontPageRender(VIEW_DIR . 'contact');
    }
}
