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
        $this->_db->query("SELECT blo_title,blo_slug,blo_images,blo_image_alt_text,blo_desc FROM " . BLOGS);
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
                $this->_view->frontPageRender(VIEW_DIR . 'blog-details');
            } else {
                redirect(SITE_URL . 'page-not-found');
            }   
        } else {
            redirect(SITE_URL . 'page-not-found');
        }
    }
}
