<?php
require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Input.php';
require_once APP_DIR . 'libs/Database.php';
class MetaDetailsController
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
        $this->_db->query("SELECT * FROM " . CLIENTS . " WHERE 1 ");
        $clients_data = $this->_db->resultSet();
        $this->_view->show_data_table = true;
        $this->_view->set_header_footer = true;
        $this->_view->setVal('clients_data', $clients_data);
        $this->_view->setVal('meta_description', 'Admin || Clients Page');
        $this->_view->setVal('title', 'Admin || Clients Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'clients/clients-list');
    }

    public function clientsStatus()
    {
        if (Input::post('change_status')) {
            $data = Input::filter_param($_POST);
            $id = $data['id'];
            if ($id > 0) {
                try {
                    $sql = "UPDATE  " . BLOGS . " SET poi_status = '" . $data['status'] . "'  WHERE poi_id = " . $id;
                    $this->_db->beginTransaction();
                    $this->_db->query($sql);
                    $retVal = $this->_db->execute();
                    if ($retVal) {
                        $this->_db->commit();
                        response(['sts' => true, 'type' => 'success', 'msg' => 'Clients Status Updated Successfully', 'results' => '0']);
                    } else {
                        response(['sts' => false, 'type' => 'error', 'msg' => 'Failed to upload Clients Status', 'results' => '0']);
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
            $this->_db->query("SELECT * FROM " . CLIENTS . " WHERE 1 AND poi_id  = " . $id);
            $clients_data = $this->_db->single();
            $this->_view->setVal('clients_data', $clients_data);
            $this->_view->setVal('mode', 'edit');
            $this->_view->setVal('page_title', 'Clients Edit Page');
            $this->_view->setVal('meta_description', 'Admin || Clients Edit Page');
            $this->_view->setVal('title', 'Admin || Clients Edit Page');
        } else {
            $this->_view->setVal('page_title', 'Clients Add Page');
            $this->_view->setVal('mode', 'add');
            $this->_view->setVal('meta_description', 'Admin || Clients Add Page');
            $this->_view->setVal('title', 'Admin || Clients Add Page');
        }
        $this->_view->set_header_footer = true;
        $this->_view->enable_jquery = true;
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'clients/clients-form');
    }

    public function save()
    {
        if (isset($_POST['save_clients'])) {

            $data = Input::filter_param($_POST);
            $file_name = Input::files('images');

            $image_name = '';
            if ($file_name['name']) {
                $results =  uploadImage($file_name, UPLOAD_ROOT . 'admin/client_images/');
                if ($results['sts'] == true) {
                    $image_name = $results['results'];
                } else {
                    set_session_alert($results['type'], $results['msg']);
                    if ($data['mode'] == 'edit') {
                        redirect(SITE_ADMIN_URL . 'clients/mode/' . $data['id']);
                    } else if ($data['mode'] == 'add') {
                        redirect(SITE_ADMIN_URL . 'clients/mode');
                    }
                }
            } else {
                $image_name = Input::post('old_images');
            }

            if ($data['mode'] == 'edit') {
                $sql = "UPDATE  " . CLIENTS . " SET poi_title = :title, poi_desc = :url, poi_image = :images, poi_image_alt_text = :image_alt_text, poi_status = :status, poi_sort_order = :sort_order, poi_modified_by = :by, poi_modified_date = :date WHERE poi_id = " . $data['id'];
            } else if ($data['mode'] == 'add') {
                $sql = " INSERT INTO  " . CLIENTS . " (poi_title, poi_desc, poi_image, poi_image_alt_text, poi_status, poi_sort_order, poi_created_by, poi_created_date)
                 VALUES (:title,:url,:images,:image_alt_text,:status,:sort_order,:by,:date)";
            }

            try {
                $this->_db->beginTransaction();
                $this->_db->query($sql);
                $this->_db->bind(":title", $data['client_name']);
                $this->_db->bind(":url", $data['client_url']);
                $this->_db->bind(":images", $image_name);
                $this->_db->bind(":image_alt_text", $data['image_alt']);
                $this->_db->bind(":status", $data['client_status']);
                $this->_db->bind(":sort_order", $data['sort_order']);
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
                    set_session_alert('success', 'Clients Details ' . $label . ' Successfully');
                    redirect(SITE_ADMIN_URL . 'clients/mode/' . $last_id);
                }
            } catch (Exception $ex) {
                $this->_db->rollBack();
                set_session_alert('error', $ex->getMessage());
                if ($data['mode'] == 'edit') {
                    redirect(SITE_ADMIN_URL . 'clients/mode/' . $data['id']);
                } else if ($data['mode'] == 'add') {
                    redirect(SITE_ADMIN_URL . 'clients/mode');
                }
            }
        } else {
            set_session_alert('error', 'Invalid Data');
            redirect(SITE_ADMIN_URL . 'clients');
        }
    }
}
