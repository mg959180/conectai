<?php
require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Input.php';
require_once APP_DIR . 'libs/Database.php';
class BlogsController
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
        $this->_db->query("SELECT * FROM " . BLOGS . " WHERE 1 ");
        $blogs_data = $this->_db->resultSet();
        $this->_view->show_data_table = true;
        $this->_view->set_header_footer = true;
        $this->_view->setVal('blogs_data', $blogs_data);
        $this->_view->setVal('meta_description', 'Admin || Blogs Page');
        $this->_view->setVal('title', 'Admin || Blogs Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'blogs/blogs-list');
    }

    public function blogsStatus()
    {
        if (Input::post('change_status')) {
            $data = Input::filter_param($_POST);
            $id = $data['id'];
            if ($id > 0) {
                try {
                    $sql = "UPDATE  " . BLOGS . " SET blo_status = '" . $data['status'] . "'  WHERE blo_id = " . $id;
                    $this->_db->beginTransaction();
                    $this->_db->query($sql);
                    $retVal = $this->_db->execute();
                    if ($retVal) {
                        $this->_db->commit();
                        response(['sts' => true, 'type' => 'success', 'msg' => 'Blogs Status Updated Successfully', 'results' => '0']);
                    } else {
                        response(['sts' => false, 'type' => 'error', 'msg' => 'Failed to upload Blogs Status', 'results' => '0']);
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

    public function blogsOrder()
    {
        if (Input::post('change_order')) {
            $data = Input::filter_param($_POST);
            $id = $data['id'];
            if ($id > 0) {
                try {
                    $sql = "UPDATE  " . BLOGS . " SET blo_sort_order = '" . $data['order'] . "'  WHERE blo_id = " . $id;
                    $this->_db->beginTransaction();
                    $this->_db->query($sql);
                    $retVal = $this->_db->execute();
                    if ($retVal) {
                        $this->_db->commit();
                        response(['sts' => true, 'type' => 'success', 'msg' => 'Blogs Order Updated Successfully', 'results' => '0']);
                    } else {
                        response(['sts' => false, 'type' => 'error', 'msg' => 'Failed to upload Blogs Order', 'results' => '0']);
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
            $this->_db->query("SELECT * FROM " . BLOGS . " WHERE 1 AND blo_id  = " . $id);
            $blogs_data = $this->_db->single();
            $this->_view->setVal('blogs_data', $blogs_data);
            $this->_view->setVal('mode', 'edit');
            $this->_view->setVal('page_title', 'Blog Edit Page');
            $this->_view->setVal('meta_description', 'Admin || Blog Edit Page');
            $this->_view->setVal('title', 'Admin || Blog Edit Page');
        } else {
            $this->_view->setVal('page_title', 'Blog Add Page');
            $this->_view->setVal('mode', 'add');
            $this->_view->setVal('meta_description', 'Admin || Blog Add Page');
            $this->_view->setVal('title', 'Admin || Blog Add Page');
        }
        $this->_view->set_header_footer = true;
        $this->_view->enable_jquery = true;
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'blogs/blogs-form');
    }

    public function save()
    {
        if (isset($_POST['save_blogs'])) {

            $data = Input::filter_param($_POST);
            $file_name = Input::files('images');

            $image_name = '';
            if ($file_name['name']) {
                $results =  uploadImage($file_name, UPLOAD_ROOT . 'admin/blog_images/');
                if ($results['sts'] == true) {
                    $image_name = $results['results'];
                } else {
                    set_session_alert($results['type'], $results['msg']);
                    if ($data['mode'] == 'edit') {
                        redirect(SITE_ADMIN_URL . 'blogs/mode/' . $data['id']);
                    } else if ($data['mode'] == 'add') {
                        redirect(SITE_ADMIN_URL . 'blogs/mode');
                    }
                }
            } else {
                $image_name = Input::post('old_images');
            }
         
            if ($data['mode'] == 'edit') {
                $sql = "UPDATE  " . BLOGS . " SET blo_title = :title, blo_slug = :slug, blo_desc = :desc, blo_extra_dec = :extra_dec, blo_images = :images, 
                blo_image_alt_text = :image_alt_text, blo_meta_title = :meta_title, blo_meta_keyword = :meta_keyword, blo_meta_description = :meta_description, 
                blo_status = :status, blo_sort_order = :sort_order, blo_modified_by = :by, blo_modified_date = :date WHERE blo_id = " . $data['id'];
            } else if ($data['mode'] == 'add') {
                $sql = " INSERT INTO  " . BLOGS . " (blo_title, blo_slug, blo_desc, blo_extra_dec, blo_images, blo_image_alt_text, blo_meta_title, blo_meta_keyword, blo_meta_description, blo_status, blo_sort_order, blo_created_by, blo_created_date)
                 VALUES (:title,:slug,:desc,:extra_dec,:images,:image_alt_text,:meta_title,:meta_keyword,:meta_description,:status,:sort_order,:by,:date)";
            }
       
            try {
                $this->_db->beginTransaction();
                $this->_db->query($sql);
                $this->_db->bind(":title", $data['blo_name']);
                $this->_db->bind(":slug", $data['blo_slug']);
                $this->_db->bind(":desc", $data['blo_desc']);
                $this->_db->bind(":extra_dec", $data['blo_short_desc']);
                $this->_db->bind(":images", $image_name);
                $this->_db->bind(":image_alt_text", $data['image_alt']);
                $this->_db->bind(":meta_title", $data['blo_meta_title']);
                $this->_db->bind(":meta_keyword", $data['blo_meta_keyword']);
                $this->_db->bind(":meta_description", $data['blo_meta_description']);
                $this->_db->bind(":status", $data['blo_status']);
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
                    set_session_alert('success', 'Blogs Details ' . $label . ' Successfully');
                    redirect(SITE_ADMIN_URL . 'blogs/mode/' . $last_id);
                }
            } catch (Exception $ex) {
                $this->_db->rollBack();
                set_session_alert('error', $ex->getMessage());
                if ($data['mode'] == 'edit') {
                    redirect(SITE_ADMIN_URL . 'blogs/mode/' . $data['id']);
                } else if ($data['mode'] == 'add') {
                    redirect(SITE_ADMIN_URL . 'blogs/mode');
                }
            }
        } else {
            set_session_alert('error', 'Invalid Data');
            redirect(SITE_ADMIN_URL . 'blogs');
        }
    }
}
