<?php
require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Session.php';
require_once APP_DIR . 'libs/Database.php';
require_once APP_DIR . 'libs/Input.php';
class IndexController
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
        $this->_db->query("SELECT * FROM " . CONTACT_US . " WHERE DATE(con_date) = '" . date(SYSTEM_DATE_TIME) . "' AND con_is_read = 0 ");
        $this->_db->stmt->execute();
        $contact_us_data =  $this->_db->stmt->fetchAll();

        $this->_view->show_data_table = true;
        $this->_view->setVal('contact_us_data', $contact_us_data);
        $this->_view->set_header_footer = true;
        $this->_view->setVal('meta_description', 'Admin || Dashboard Page');
        $this->_view->setVal('title', 'Admin || Dashboard Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'index');
    }
}
