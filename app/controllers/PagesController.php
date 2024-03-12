<?php

require_once APP_DIR.'libs/BaseController.php';
class PagesController extends BaseController
{

    public function fairUsePolicy()
    {
        // $this->setBreadCrumb('main_title', 'Our Clients');
        // $this->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Our Clients']]);

        $this->setVal('policy', true);
        $this->frontPageRender(VIEW_DIR . 'pages');
    }
    public function cancellation()
    {
        // $this->setBreadCrumb('main_title', 'Our Clients');
        // $this->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Our Clients']]);

        $this->setVal('cancellation', true);
        $this->frontPageRender(VIEW_DIR . 'pages');
    }
    public function terms()
    {
        // $this->setBreadCrumb('main_title', 'Our Clients');
        // $this->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Our Clients']]);

        $this->setVal('term', true);
        $this->frontPageRender(VIEW_DIR . 'pages');
    }
    public function privacy()
    {
        // $this->setBreadCrumb('main_title', 'Our Clients');
        // $this->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Our Clients']]);

        $this->setVal('privacy', true);
        $this->frontPageRender(VIEW_DIR . 'pages');
    }
}
