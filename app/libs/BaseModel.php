<?php

require_once APP_DIR . 'libs/Database.php';

class BaseModel extends Database
{
    protected $_db;

    public function __construct()
    {
        // $this->_db = new self;
    }
}
