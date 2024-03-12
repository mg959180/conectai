<?php

require_once APP_DIR.'libs/BaseController.php';
class BlogsController extends BaseController
{
    public function index()
    {
        $this->setBreadCrumb('main_title', 'Blog Posts');
        $this->setVal('poo', 'hello');
        $this->frontPageRender(VIEW_DIR . 'blogs');
    }

    public function detail($slug)
    {
        if ($slug) {
            $this->setVal('poo', 'hello');
            $this->frontPageRender(VIEW_DIR . 'blog-details');
        } else {
            redirect(SITE_URL . 'page-not-found');
        }
    }
}
