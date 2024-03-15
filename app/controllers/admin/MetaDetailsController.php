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
        $this->_db->query("SELECT * FROM " . META_DETAILS . " WHERE 1 ");
        $meta_data = $this->_db->resultSet();
        $this->_view->show_data_table = true;
        $this->_view->set_header_footer = true;
        $this->_view->setVal('meta_data', $meta_data);
        $this->_view->setVal('meta_description', 'Admin || Meta data Page');
        $this->_view->setVal('title', 'Admin || Meta data Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'meta-details/meta-list');
    }

    public function metaDetailsStatus()
    {
        if (Input::post('change_status')) {
            $data = Input::filter_param($_POST);
            $id = $data['id'];
            if ($id > 0) {
                try {
                    $sql = "UPDATE  " . META_DETAILS . " SET wmd_active = '" . $data['status'] . "'  WHERE wmd_id = " . $id;
                    $this->_db->beginTransaction();
                    $this->_db->query($sql);
                    $retVal = $this->_db->execute();
                    if ($retVal) {
                        $this->_db->commit();
                        response(['sts' => true, 'type' => 'success', 'msg' => 'Meta Details Status Updated Successfully', 'results' => '0']);
                    } else {
                        response(['sts' => false, 'type' => 'error', 'msg' => 'Failed to upload Meta Details Status', 'results' => '0']);
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
            $this->_db->query("SELECT * FROM " . META_DETAILS . " WHERE 1 AND wmd_id  = " . $id);
            $meta_data = $this->_db->single();
            $this->_view->setVal('meta_data', $meta_data);
            $this->_view->setVal('mode', 'edit');
            $this->_view->setVal('page_title', 'Meta Details Edit Page');
            $this->_view->setVal('meta_description', 'Admin || Meta Details Edit Page');
            $this->_view->setVal('title', 'Admin || Meta Details Edit Page');
        } else {
            $this->_view->setVal('page_title', 'Meta Details Add Page');
            $this->_view->setVal('mode', 'add');
            $this->_view->setVal('meta_description', 'Admin || Meta Details Add Page');
            $this->_view->setVal('title', 'Admin || Meta Details Add Page');
        }
        $this->_view->set_header_footer = true;
        $this->_view->enable_jquery = true;
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'meta-details/meta-form');
    }

    public function save()
    {
        if (isset($_POST['save_meta'])) {
            $data = Input::filter_param($_POST);
            $file_name = Input::files('images');

            $image_name = '';
            if ($file_name['name']) {
                $results =  uploadImage($file_name, UPLOAD_ROOT . 'admin/meta_images/');
                if ($results['sts'] == true) {
                    $image_name = $results['results'];
                } else {
                    set_session_alert($results['type'], $results['msg']);
                    if ($data['mode'] == 'edit') {
                        redirect(SITE_ADMIN_URL . 'meta-details/mode/' . $data['id']);
                    } else if ($data['mode'] == 'add') {
                        redirect(SITE_ADMIN_URL . 'meta-details/mode');
                    }
                }
            } else {
                $image_name = Input::post('old_images');
            }

            if ($data['mode'] == 'edit') {
                $sql = "UPDATE  " . META_DETAILS . " SET wmd_name = :name, wmd_website_url = :website_url, wmd_meta_image = :meta_image, wmd_meta_image_alt = :image_alt,
                 wmd_lang = :lang, wmd_meta_title = :meta_title, wmd_meta_description = :meta_description, wmd_meta_keyword = :meta_keyword, wmd_active = :active,
                  wmd_maintenance_mode = :maintenance_mode, wmd_maintenance_start_time = :maintenance_start_time, wmd_maintenance_end_time = :maintenance_end_time,
                   wmd_modified_by = :by, wmd_modified_date = :date WHERE wmd_id = " . $data['id'];
            } else if ($data['mode'] == 'add') {
                $sql = " INSERT INTO " . META_DETAILS . " (wmd_name, wmd_website_url, wmd_meta_image, wmd_meta_image_alt, wmd_lang, wmd_meta_title, wmd_meta_description, wmd_meta_keyword, wmd_active, wmd_maintenance_mode, wmd_maintenance_start_time, wmd_maintenance_end_time, wmd_created_by, wmd_created_date) 
                VALUES (:name,:website_url,:meta_image,:image_alt,:lang,:meta_title,:meta_description,:meta_keyword,:active,:maintenance_mode,:maintenance_start_time,:maintenance_end_time,:by,:date)";
            }

            try {
                $this->_db->beginTransaction();
                $this->_db->query($sql);
                $this->_db->bind(":name", $data['name']);
                $this->_db->bind(":website_url", $data['website_url']);
                $this->_db->bind(":meta_image", $image_name);
                $this->_db->bind(":image_alt", $data['image_alt']);
                $this->_db->bind(":lang", $data['lang']);
                $this->_db->bind(":meta_title", $data['meta_title']);
                $this->_db->bind(":meta_description", $data['meta_description']);
                $this->_db->bind(":meta_keyword", $data['meta_keyword']);
                $this->_db->bind(":active", $data['active']);
                $this->_db->bind(":maintenance_mode", $data['maintenance_mode']);
                $this->_db->bind(":maintenance_start_time", $data['maintenance_start_time']);
                $this->_db->bind(":maintenance_end_time", $data['maintenance_end_time']);
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
                    set_session_alert('success', 'Meta Details Details ' . $label . ' Successfully');
                    redirect(SITE_ADMIN_URL . 'meta-details/mode/' . $last_id);
                }
            } catch (Exception $ex) {
                $this->_db->rollBack();
                set_session_alert('error', $ex->getMessage());
                if ($data['mode'] == 'edit') {
                    redirect(SITE_ADMIN_URL . 'meta-details/mode/' . $data['id']);
                } else if ($data['mode'] == 'add') {
                    redirect(SITE_ADMIN_URL . 'meta-details/mode');
                }
            }
        } else {
            set_session_alert('error', 'Invalid Data');
            redirect(SITE_ADMIN_URL . 'meta-details');
        }
    }
}
