<?php
require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Input.php';
require_once APP_DIR . 'models/admin/AuthModel.php';
require_once APP_DIR . 'libs/Session.php';
class AuthController
{

    private $_view;
    private $_db;
    public function __construct()
    {
        // check_login('index');
        $this->_view = new View();
        $this->_db = new Database();
    }

    public function index()
    {

        if (Input::post('login')) {
            $data = Input::filter_param($_POST);
            if (!(isset($data['uname']) && !empty($data['uname']) == true)) {
                response(['sts' => false, 'type' => 'error', 'msg' => 'Please Enter User Name!', 'results' => '0']);
            }
            if (!(isset($data['pass']) && !empty($data['pass']) == true)) {
                response(['sts' => false, 'type' => 'error', 'msg' => 'Please Enter password!', 'results' => '0']);
            }

            $authObj = new AuthModel();
            $u_exist = $authObj->CheckUser('user', $data['uname']);
            if (count($u_exist) == 0) {
                response(['sts' => false, 'type' => 'error', 'msg' => 'Login Details Not found!', 'results' => '0']);
            } else {
                $u_fetch = $u_exist[0];
                if ($u_fetch['adm_status'] == 0) {
                    response(['sts' => false, 'type' => 'error', 'msg' => 'Your Account is inactive contact your administrator!', 'results' => '0']);
                } else {
                    if (is_production()) {
                        $check_password = password_verify($data['pass'], $u_fetch['adm_password']);
                    } else {
                        $check_password = $data['pass'] == $u_fetch['adm_password'];
                    }
                    if (!$check_password) {
                        response(['sts' => false, 'type' => 'error', 'msg' => 'Password Invalid, Please Enter Correct Password!', 'results' => '0']);
                    } else {
                        $_SESSION['admin']['login'] = true;
                        $_SESSION['admin']['uId'] = $u_fetch['adm_id'];
                        $_SESSION['admin']['uName'] = $u_fetch['adm_user_name'];
                        $_SESSION['admin']['Name'] = $u_fetch['adm_screen_name'];
                        response(['sts' => true, 'type' => 'success', 'msg' => 'Login Successful!', 'results' => '1']);
                    }
                }
            }
        }
    }

    public function profile()
    {
        if (Session::exists('admin')) {
            $id = Session::get('admin')['uId'];
            $this->_db->query("SELECT * FROM " . ADMINS . " WHERE adm_id  = '" . $id . "'");
            $this->_db->stmt->execute();
            $admin_edit_data =  $this->_db->stmt->fetch();
            $this->_view->setVal('admin_edit_data', $admin_edit_data);
        }

        if (isset($_POST['edit_profile'])) {
            $file_name = Input::files('images');
            $image_name = '';
            if ($file_name['name']) {
                $results =  uploadImage($file_name, UPLOAD_ROOT . 'admin/profile_images/');
                if ($results['sts'] == true) {
                    $image_name = $results['results'];
                } else {
                    set_session_alert($results['type'], $results['msg']);
                    redirect(SITE_ADMIN_URL . 'auth/profile');
                }
            } else {
                $image_name = Input::post('old_images');
            }

            $data = Input::filter_param($_POST);
            $sql = "UPDATE  " . ADMINS . " SET adm_fname = :fname, adm_lname = :lname, adm_screen_name = :screen_name,
            adm_user_name = :user_name, adm_phone1 = :phone, adm_email = :email,adm_profile_pic = :img,
            adm_slug = :slug, adm_modifiedby = :date, adm_ip_information = :ip  WHERE adm_id = " . $id;

            try {
                $this->_db->beginTransaction();
                $this->_db->query($sql);
                $this->_db->bind(":fname", $data['first_name']);
                $this->_db->bind(":lname", $data['last_name']);
                $this->_db->bind(":screen_name", $data['screen_name']);
                $this->_db->bind(":user_name", $data['username']);
                $this->_db->bind(":phone", $data['contact']);
                $this->_db->bind(":email", $data['email']);
                $this->_db->bind(":slug", $data['slug']);
                $this->_db->bind(":img", $image_name);
                $this->_db->bind(":date", date(SYSTEM_DATE_TIME_FORMAT_LONG));
                $this->_db->bind(":ip", get_client_ip());
                $retVal = $this->_db->execute();

                if ($retVal) {
                    $this->_db->commit();
                    set_session_alert('success', 'Profile Details Updated Successfully');
                    redirect(SITE_ADMIN_URL . 'auth/profile');
                }
            } catch (Exception $ex) {
                $this->_db->rollBack();
                set_session_alert('error', $ex->getMessage());
                redirect(SITE_ADMIN_URL . 'auth/profile');
            }
        }

        $this->_view->set_header_footer = true;
        $this->_view->setVal('meta_description', 'Admin || Profile Page');
        $this->_view->setVal('title', 'Admin || Profile Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'profile');
    }

    public function changePassword()
    {

        if (Session::exists('admin')) {
            $id = Session::get('admin')['uId'];
            $this->_db->query("SELECT adm_password FROM " . ADMINS . " WHERE adm_id  = '" . $id . "'");
            $this->_db->stmt->execute();
            $admin_edit_data =  $this->_db->stmt->fetch();
        }
        if (isset($_POST['edit_profile'])) {

            $data = Input::filter_param($_POST);
           
            if (is_production()) {
                $check_password = password_verify($data['current_password'], $admin_edit_data['adm_password']);
            } else {
                $check_password = $data['current_password'] == $admin_edit_data['adm_password'];
            }
            if (!$check_password) {
                set_session_alert('error', 'Current Password not matched');
                redirect(SITE_ADMIN_URL . 'auth/change-password');
            }

            if (!($data['new_password'] == $data['retype_password'])) {
                set_session_alert('error', 'New Password and Retype password must be same');
                redirect(SITE_ADMIN_URL . 'auth/change-password');
            }
            $sql = "UPDATE  " . ADMINS . " SET adm_password = :password, adm_modifiedby = :date, adm_ip_information = :ip  WHERE adm_id = " . $id;

            try {
                $this->_db->beginTransaction();
                $this->_db->query($sql);
                $this->_db->bind(":password", $data['new_password']);
                $this->_db->bind(":date", date(SYSTEM_DATE_TIME_FORMAT_LONG));
                $this->_db->bind(":ip", get_client_ip());
                $retVal = $this->_db->execute();

                if ($retVal) {
                    $this->_db->commit();
                    set_session_alert('success', 'Password Updated Successfully');
                    redirect(SITE_ADMIN_URL . 'auth/change-password');
                }
            } catch (Exception $ex) {
                $this->_db->rollBack();
                set_session_alert('error', $ex->getMessage());
                redirect(SITE_ADMIN_URL . 'auth/change-password');
            }
        }


        $this->_view->set_header_footer = true;
        $this->_view->setVal('meta_description', 'Admin || Change Password Page');
        $this->_view->setVal('title', 'Admin || Change Password Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'change-password');
    }

    public function logOut()
    {
        SESSION::flash('admin');
        redirect(SITE_ADMIN_URL . 'login');
    }
}
