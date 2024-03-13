<?php

require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Input.php';
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
        $this->_db->query("SELECT * FROM " . COUNTRIES . " WHERE 1 ORDER BY cun_id ASC,cun_status DESC");
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

    public function countryStatus()
    {
        if (Input::post('change_status')) {
            $data = Input::filter_param($_POST);
            $id = $data['id'];
            if ($id > 0) {
                try {
                    $sql = "UPDATE  " . COUNTRIES . " SET cun_status = '" . $data['status'] . "'  WHERE cun_id = " . $id;
                    $this->_db->beginTransaction();
                    $this->_db->query($sql);
                    $retVal = $this->_db->execute();
                    if ($retVal) {
                        $this->_db->commit();
                        response(['sts' => true, 'type' => 'success', 'msg' => 'Country Updated Successfully', 'results' => '0']);
                    } else {
                        response(['sts' => false, 'type' => 'error', 'msg' => 'Failed to upload data', 'results' => '0']);
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
}
