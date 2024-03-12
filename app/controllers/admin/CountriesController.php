<?php

require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Database.php';
class CountriesController
{

    private $_view;
    private $_db;
    public function __construct()
    {
        check_login('index');
        $this->_view  = new View();
        $this->_db = new Database();
    }

    public function index()
    {
        $this->_db->query("SELECT * FROM " . COUNTRIES . " WHERE 1 ");
        $this->_db->stmt->execute();
        $countries_data = $this->_db->stmt->fetchAll();
        $this->_view->show_data_table = true;
        $this->_view->set_header_footer = true;
        $this->_view->setVal('countries_data', $countries_data);
        $this->_view->setVal('meta_description', 'Admin || Countries Page');
        $this->_view->setVal('title', 'Admin || Countries Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'locations/country-list');
    }
}
