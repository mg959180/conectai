<?php

require_once APP_DIR.'libs/BaseController.php';
class PageNotFoundController extends BaseController
{

    public function index()
    {
        $this->setVal('poo', 'hello');
        $this->frontPageRender(VIEW_DIR . 'page-not-found');
    }
}
