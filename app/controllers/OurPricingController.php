<?php

require_once APP_DIR.'libs/BaseController.php';
class OurPricingController extends BaseController
{
    public function index()
    {
        $this->setBreadCrumb('main_title', 'Pricing & Plan');
        $this->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Pricing']]);
        $this->show_extra_script = true;
        $this->frontPageRender(VIEW_DIR . 'pricing');
    }
}
