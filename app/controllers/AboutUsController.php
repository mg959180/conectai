<?php
require_once APP_DIR.'libs/BaseController.php';
class AboutUsController extends BaseController
{
    public function index()
    {
        $this->setBreadCrumb('main_title', 'About ConnectAI');
        $this->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'About Us']]);
        $this->frontPageRender(VIEW_DIR . 'about');
    }
}
