<?php

require_once APP_DIR.'libs/BaseController.php';
class OurClientsController extends BaseController
{
    public function index()
    {
        // $this->setBreadCrumb('main_title', 'Our Clients');
        // $this->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Our Clients']]);
        $this->frontPageRender(VIEW_DIR . 'our-clients');
    }
}
