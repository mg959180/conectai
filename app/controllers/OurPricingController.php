<?php
require_once APP_DIR . 'libs/View.php';
class OurPricingController
{
    private $_view;
    public function __construct()
    {
        $this->_view  = new View();
    }
    public function index()
    {
        $this->_view->setBreadCrumb('main_title', 'Pricing & Plan');
        $this->_view->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Pricing']]);
        $this->_view->show_extra_script = true;
        $this->_view->frontPageRender(VIEW_DIR . 'pricing');
    }
}
