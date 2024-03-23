<?php
require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Database.php';
class BlogsController
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
        $this->_db->query("SELECT * FROM " . META_DETAILS . " WHERE 1 AND wmd_website_url = '" . SITE_URL . $http_ref . "'");
        $meta_data =  $this->_db->single();
        if (!empty($meta_data)) {
            $this->_view->setVal('meta_title', $meta_data['wmd_meta_title']);
            $this->_view->setVal('meta_description', $meta_data['wmd_meta_description']);
            $this->_view->setVal('meta_keyword', $meta_data['wmd_meta_keyword']);
            $this->_view->setVal('meta_image',  UPLOAD_URL . 'admin/meta_images/' . $meta_data['wmd_meta_image']);
            $this->_view->setVal('meta_image_alt', $meta_data['wmd_meta_image_alt']);
        }
        $this->_db->query("SELECT blo_title,blo_slug,blo_images,blo_image_alt_text,blo_desc FROM " . BLOGS . " WHERE 1  ORDER BY blo_sort_order ASC");
        $blogs_data =  $this->_db->resultSet();

        $this->_view->setVal('blogs_data', $blogs_data);
        $this->_view->setBreadCrumb('main_title', 'Blog Posts');
        $this->_view->frontPageRender(VIEW_DIR . 'blogs');
    }

    public function detail($slug)
    {
        if ($slug) {
            $this->_db->query("SELECT * FROM " . BLOGS . " WHERE 1 AND blo_slug = '" . $slug . "'");
            $blogs_data =  $this->_db->single();
            if (!empty($blogs_data)) {
                $this->_view->setVal('blogs_data', $blogs_data);
                $this->_view->setVal('meta_title', $blogs_data['blo_meta_title']);
                $this->_view->setVal('meta_description', $blogs_data['blo_meta_description']);
                $this->_view->setVal('meta_keyword', $blogs_data['blo_meta_keyword']);
                $this->_view->setVal('meta_image',  UPLOAD_URL . 'admin/blog_images/' . $blogs_data['blo_images']);
                $this->_view->setVal('meta_image_alt', $blogs_data['blo_image_alt_text']);
                $this->_view->frontPageRender(VIEW_DIR . 'blog-details');
            } else {
                redirect(SITE_URL . 'page-not-found');
            }
        } else {
            redirect(SITE_URL . 'page-not-found');
        }
    }
}
