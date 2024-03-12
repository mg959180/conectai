<?php

require_once APP_DIR.'libs/BaseController.php';
class IndexController extends BaseController
{
    public function index()
    {
        $this->show_project_model = true;
        $this->frontPageRender(VIEW_DIR . 'index');
    }
}
