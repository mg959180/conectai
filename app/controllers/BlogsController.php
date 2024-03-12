<?php
require_once APP_DIR . 'libs/View.php';
class BlogsController
{
    private $_view;
    public function __construct()
    {
        $this->_view  = new View();
    }
    public function index()
    {
        $this->_view->setBreadCrumb('main_title', 'Blog Posts');
        $this->_view->frontPageRender(VIEW_DIR . 'blogs');
    }

    public function detail($slug)
    {
        if ($slug) {
            $this->_view->frontPageRender(VIEW_DIR . 'blog-details');
        } else {
            redirect(SITE_URL . 'page-not-found');
        }
    }
}
