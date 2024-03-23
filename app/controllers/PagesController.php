<?php
require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Database.php';
class PagesController
{
    private $_view;
    private $_db;
    public function __construct()
    {
        $this->_view  = new View();
        $this->_db = new Database();
    }
    public function fairUsePolicy()
    {
        $http_ref =  $_SERVER['REQUEST_URI'];
        $http_ref = explode('/', $http_ref);
        $http_ref = array_filter($http_ref);
        $http_ref = end($http_ref);
        $this->_db->query("SELECT * FROM " . META_DETAILS . " WHERE 1 AND wmd_website_url = '" . SITE_URL . $http_ref . "'");
        $meta_data =  $this->_db->single();
        if (!empty($meta_data)) {
            $this->_view->setVal('meta_title', $meta_data['wmd_meta_title']);
            $this->_view->setVal('meta_description', $meta_data['wmd_meta_description']);
            $this->_view->setVal('meta_keyword', $meta_data['wmd_meta_keyword']);
            $this->_view->setVal('meta_image',  UPLOAD_URL . 'admin/meta_images/' . $meta_data['wmd_meta_image']);
            $this->_view->setVal('meta_image_alt', $meta_data['wmd_meta_image_alt']);
        }

        // $this->_view->setBreadCrumb('main_title', 'Our Clients');
        // $this->_view->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Our Clients']]);

        $this->_view->setVal('policy', true);
        $this->_view->frontPageRender(VIEW_DIR . 'pages');
    }
    public function cancellation()
    {
        $http_ref =  $_SERVER['REQUEST_URI'];
        $http_ref = explode('/', $http_ref);
        $http_ref = array_filter($http_ref);
        $http_ref = end($http_ref);
        $this->_db->query("SELECT * FROM " . META_DETAILS . " WHERE 1 AND wmd_website_url = '" . SITE_URL . $http_ref . "'");
        $meta_data =  $this->_db->single();
        if (!empty($meta_data)) {
            $this->_view->setVal('meta_title', $meta_data['wmd_meta_title']);
            $this->_view->setVal('meta_description', $meta_data['wmd_meta_description']);
            $this->_view->setVal('meta_keyword', $meta_data['wmd_meta_keyword']);
            $this->_view->setVal('meta_image',  UPLOAD_URL . 'admin/meta_images/' . $meta_data['wmd_meta_image']);
            $this->_view->setVal('meta_image_alt', $meta_data['wmd_meta_image_alt']);
        }

        // $this->_view->setBreadCrumb('main_title', 'Our Clients');
        // $this->_view->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Our Clients']]);

        $this->_view->setVal('cancellation', true);
        $this->_view->frontPageRender(VIEW_DIR . 'pages');
    }
    public function terms()
    {
        $http_ref =  $_SERVER['REQUEST_URI'];
        $http_ref = explode('/', $http_ref);
        $http_ref = array_filter($http_ref);
        $http_ref = end($http_ref);
        $this->_db->query("SELECT * FROM " . META_DETAILS . " WHERE 1 AND wmd_website_url = '" . SITE_URL . $http_ref . "'");
        $meta_data =  $this->_db->single();
        if (!empty($meta_data)) {
            $this->_view->setVal('meta_title', $meta_data['wmd_meta_title']);
            $this->_view->setVal('meta_description', $meta_data['wmd_meta_description']);
            $this->_view->setVal('meta_keyword', $meta_data['wmd_meta_keyword']);
            $this->_view->setVal('meta_image',  UPLOAD_URL . 'admin/meta_images/' . $meta_data['wmd_meta_image']);
            $this->_view->setVal('meta_image_alt', $meta_data['wmd_meta_image_alt']);
        }

        // $this->_view->setBreadCrumb('main_title', 'Our Clients');
        // $this->_view->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Our Clients']]);

        $this->_view->setVal('term', true);
        $this->_view->frontPageRender(VIEW_DIR . 'pages');
    }
    public function privacy()
    {
        $http_ref =  $_SERVER['REQUEST_URI'];
        $http_ref = explode('/', $http_ref);
        $http_ref = array_filter($http_ref);
        $http_ref = end($http_ref);
        $this->_db->query("SELECT * FROM " . META_DETAILS . " WHERE 1 AND wmd_website_url = '" . SITE_URL . $http_ref . "'");
        $meta_data =  $this->_db->single();
        if (!empty($meta_data)) {
            $this->_view->setVal('meta_title', $meta_data['wmd_meta_title']);
            $this->_view->setVal('meta_description', $meta_data['wmd_meta_description']);
            $this->_view->setVal('meta_keyword', $meta_data['wmd_meta_keyword']);
            $this->_view->setVal('meta_image',  UPLOAD_URL . 'admin/meta_images/' . $meta_data['wmd_meta_image']);
            $this->_view->setVal('meta_image_alt', $meta_data['wmd_meta_image_alt']);
        }

        // $this->_view->setBreadCrumb('main_title', 'Our Clients');
        // $this->_view->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Our Clients']]);

        $this->_view->setVal('privacy', true);
        $this->_view->frontPageRender(VIEW_DIR . 'pages');
    }
}
