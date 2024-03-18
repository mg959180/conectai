<?php
require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Database.php';
class ContactEnquiryController
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
        $this->_db->query("SELECT con_id FROM " . CONTACT_US . " WHERE 1 AND con_is_read = 0");
        $this->_db->stmt->execute();
        $contactData =  $this->_db->stmt->fetchAll();

        $ids = [];
        foreach ($contactData  as $con) {
            $ids[] = $con['con_id'];
        }

        if (count($ids) > 0) {
            $sql = "UPDATE " . CONTACT_US . " SET con_is_read = 1 WHERE con_id IN (" . implode(',', $ids) . ")";
            try {
                $this->_db->beginTransaction();
                $this->_db->query($sql);
                $retVal = $this->_db->execute();
                if ($retVal) {
                    $this->_db->commit();
                }
            } catch (Exception $ex) {
                $this->_db->rollBack();
                set_session_alert('error', $ex->getMessage());
            }
        }

        $this->_db->query("SELECT * FROM " . CONTACT_US . " WHERE 1 ");
        $this->_db->stmt->execute();
        $contact_us_data =  $this->_db->stmt->fetchAll();
        $this->_view->show_data_table = true;
        $this->_view->set_header_footer = true;
        $this->_view->setVal('contact_us_data', $contact_us_data);
        $this->_view->setVal('meta_description', 'Admin || Contact Us Page');
        $this->_view->setVal('title', 'Admin || Contact Us Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'contact-us/contact-us-list');
    }
}
