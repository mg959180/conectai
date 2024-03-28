<?php
require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Database.php';
class OurPricingController
{
    private $_view;
    private $_db;
    public function __construct()
    {
        $this->_view  = new View();
        $this->_db = new Database();
    }
    public function index()
    {
        $http_ref =  $_SERVER['REQUEST_URI'];
        $http_ref = explode('/', $http_ref);
        $http_ref = array_filter($http_ref);
        $http_ref = end($http_ref);
        if (empty($http_ref)) {
            $http_ref = 'home';
        }
        $this->_db->query("SELECT * FROM " . META_DETAILS . " WHERE 1 AND wmd_website_url = '" . $http_ref . "'");
        $meta_data =  $this->_db->single();
        if (!empty($meta_data)) {
            $this->_view->setVal('meta_title', $meta_data['wmd_meta_title']);
            $this->_view->setVal('meta_description', $meta_data['wmd_meta_description']);
            $this->_view->setVal('meta_keyword', $meta_data['wmd_meta_keyword']);
            $this->_view->setVal('meta_image',  UPLOAD_URL . 'admin/meta_images/' . $meta_data['wmd_meta_image']);
            $this->_view->setVal('meta_image_alt', $meta_data['wmd_meta_image_alt']);
        }


        $this->_db->query("SELECT * FROM " . PLANS . " WHERE 1 AND plan_status = 1 ORDER BY plan_sort_order ASC");
        $plans_data =  $this->_db->resultSet();
        $comparison_data = $plan_features_data = [];
        foreach ($plans_data as $pdk => $pdv) {
            if (!empty($pdv)) {
                $this->_db->query("SELECT * FROM " . PLANS_FEATURES . " WHERE 1 AND pfe_plan_id = " . $pdv['plan_id'] . " AND pfe_status = 1 ORDER BY pfe_sort_order ASC");
                $features_data =  $this->_db->resultSet();
            }
            if (count($features_data) > 0) {
                $comparison_data[$pdk] = $pdv;
                foreach($features_data as $fdK => $fdV){
                    $plan_features_data[$fdK][$pdk] = $fdV;
                }
            }
        }
        $this->_view->setVal('comparison_data', $comparison_data);
        $this->_view->setVal('plan_features_data', $plan_features_data);
        $this->_view->setBreadCrumb('main_title', 'Pricing & Plan');
        $this->_view->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Pricing']]);
        $this->_view->show_extra_script = true;
        $this->_view->frontPageRender(VIEW_DIR . 'pricing');
    }
}
