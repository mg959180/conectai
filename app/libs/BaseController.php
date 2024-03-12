<?php

require_once APP_DIR . 'libs/View.php';

class BaseController extends View
{
    protected $_view;
    public function  __construct()
    {
        // $this->_view = new self;
    }
}
