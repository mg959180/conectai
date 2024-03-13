<?php

require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Input.php';
require_once APP_DIR . 'libs/Database.php';
require_once APP_DIR . 'libs/Session.php';
class TaxesController
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
        $this->_db->query("SELECT *, (SELECT cun_name FROM " . COUNTRIES . " WHERE cun_id = tax_cnt_id) as cnt_name FROM " . TAXES . " WHERE 1 ORDER BY tax_id ASC");
        $taxes_data = $this->_db->resultSet();
        $this->_view->show_data_table = true;
        $this->_view->set_header_footer = true;
        $this->_view->setVal('taxes_data', $taxes_data);
        $this->_view->setVal('meta_description', 'Admin || Taxes Page');
        $this->_view->setVal('title', 'Admin || Taxes Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'taxes/taxes-list');
    }

    public function taxesStatus()
    {
        if (Input::post('change_status')) {
            $data = Input::filter_param($_POST);
            $id = $data['id'];
            if ($id > 0) {
                try {
                    $sql = "UPDATE  " . TAXES . " SET tax_status = '" . $data['status'] . "'  WHERE tax_id = " . $id;
                    $this->_db->beginTransaction();
                    $this->_db->query($sql);
                    $retVal = $this->_db->execute();
                    if ($retVal) {
                        $this->_db->commit();
                        response(['sts' => true, 'type' => 'success', 'msg' => 'Taxes Status Updated Successfully', 'results' => '0']);
                    } else {
                        response(['sts' => false, 'type' => 'error', 'msg' => 'Failed to upload Taxes Status', 'results' => '0']);
                    }
                } catch (Exception $ex) {
                    $this->_db->rollBack();
                    response(['sts' => false, 'type' => 'error', 'msg' => $ex->getMessage(), 'results' => '0']);
                }
            } else {
                response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => '0']);
            }
        }
    }

    public function mode($id = null)
    {
        if ($id > 0) {
            $this->_db->query("SELECT * FROM " . TAXES . " WHERE 1 AND tax_id  = " . $id . " ORDER BY tax_id ASC");
            $taxes_data = $this->_db->single();
            $this->_view->setVal('taxes_data', $taxes_data);
            $this->_db->query("SELECT * FROM " . COUNTRIES . " WHERE 1 AND cun_status = 1 AND cun_id = " . $taxes_data['tax_cnt_id']);
            $this->_db->stmt->execute();
            $countries_data = $this->_db->stmt->fetchAll();
            $this->_view->setVal('countries_data', $countries_data);
            $this->_view->setVal('mode', 'edit');
            $this->_view->setVal('page_title', 'Taxes Edit Page');
            $this->_view->setVal('meta_description', 'Admin || Taxes Edit Page');
            $this->_view->setVal('title', 'Admin || Taxes Edit Page');
        } else {
            $this->_db->query("SELECT * FROM " . COUNTRIES . " WHERE 1 AND cun_status = 1");
            $this->_db->stmt->execute();
            $countries_data = $this->_db->stmt->fetchAll();
            $this->_view->setVal('countries_data', $countries_data);
            $this->_view->setVal('page_title', 'Taxes Add Page');
            $this->_view->setVal('mode', 'add');
            $this->_view->setVal('meta_description', 'Admin || Taxes Add Page');
            $this->_view->setVal('title', 'Admin || Taxes Add Page');
        }
        $this->_view->show_data_table = true;
        $this->_view->set_header_footer = true;
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'taxes/taxes-form');
    }

    public function save()
    {
        if (isset($_POST['save_taxes'])) {
            $data = Input::filter_param($_POST);
            if ($data['mode'] == 'edit') {
                $sql = "UPDATE  " . TAXES . " SET tax_name = :tax_name, tax_value = :tax_value, tax_cnt_id = :tax_country,
                tax_status = :tax_status, tax_modifiedby = :by, tax_modified_date = :date WHERE tax_id = " . $data['id'];
            } else if ($data['mode'] == 'add') {
                $sql = " INSERT INTO  " . TAXES . " (tax_name, tax_value, tax_cnt_id, tax_status, tax_created_by, tax_created_date)
                 VALUES (:tax_name,:tax_value,:tax_country,:tax_status,:by,:date)";
            }
            try {
                $this->_db->beginTransaction();
                $this->_db->query($sql);
                $this->_db->bind(":tax_name", $data['tax_name']);
                $this->_db->bind(":tax_value", $data['tax_value']);
                $this->_db->bind(":tax_country", $data['tax_country']);
                $this->_db->bind(":tax_status", $data['tax_status']);
                $this->_db->bind(":by", Session::get('admin')['uId']);
                $this->_db->bind(":date", date(SYSTEM_DATE_TIME_FORMAT_LONG));
                $retVal = $this->_db->execute();
                if ($data['mode'] == 'edit') {
                    $last_id = $data['id'];
                    $label = " Updated";
                } else if ($data['mode'] == 'add') {
                    $last_id = $this->_db->lastInsertId();
                    $label = " Saved";
                }
                if ($retVal) {
                    $this->_db->commit();
                    set_session_alert('success', 'Taxes Details ' . $label . ' Successfully');
                    redirect(SITE_ADMIN_URL . 'taxes/mode/' . $last_id);
                }
            } catch (Exception $ex) {
                $this->_db->rollBack();
                set_session_alert('error', $ex->getMessage());
                if ($data['mode'] == 'edit') {
                    redirect(SITE_ADMIN_URL . 'taxes/mode/' . $data['id']);
                } else if ($data['mode'] == 'add') {
                    redirect(SITE_ADMIN_URL . 'taxes/mode');
                }
            }
        } else {
            set_session_alert('error', 'Invalid Data');
            redirect(SITE_ADMIN_URL . 'taxes');
        }
    }
}
