<?php

require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Database.php';
require_once APP_DIR . 'libs/Hash.php';
class OrdersController
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
        $this->_db->query("SELECT *, (select usr_email from ".USERS." WHERE usr_id = ord_usr_id) as email , (select cun_name from ".COUNTRIES." WHERE cun_id = ord_country_id) as cnt_name FROM " . ORDERS . " WHERE 1 ORDER BY ord_id DESC");
        $orders_data = $this->_db->resultSet();
        $this->_view->show_data_table = true;
        $this->_view->set_header_footer = true;
        $this->_view->setVal('orders_data', $orders_data);
        $this->_view->setVal('meta_description', 'Admin || Orders Page');
        $this->_view->setVal('title', 'Admin || Orders Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'orders/order-list');
    }

    public function accounts()
    {
        $this->_db->query("SELECT * FROM " . USERS . " WHERE 1 AND usr_demo_chat = 0 ORDER BY usr_id DESC");
        $demo_users_data = $this->_db->resultSet();
        $this->_view->show_data_table = true;
        $this->_view->set_header_footer = true;
        $this->_view->setVal('demo_users_data', $demo_users_data);
        $this->_view->setVal('meta_description', 'Admin || Demo Users Page');
        $this->_view->setVal('title', 'Admin || Demo Users Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'orders/demo-accounts-list');
    }


    public function viewInvoice($id){

    }
}
