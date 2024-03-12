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
        check_login('index');
        $this->_view  = new View();
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
        $id = Session::get('admin')['uId'];
        $this->_db->query("SELECT * FROM " . ADMINS . " WHERE adm_id  = '" . $id . "'");
        $this->_db->stmt->execute();
        $admin_data =  $this->_db->stmt->fetch();

        $this->_view->setVal('admin_data', $admin_data);
        $this->_view->set_header_footer = true;
        $this->_view->setVal('meta_description', 'Admin || Profile Page');
        $this->_view->setVal('title', 'Admin || Profile Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'profile');
    }

    public function changePassword()
    {
        $this->_view->set_header_footer = true;
        $this->_view->setVal('meta_description', 'Admin || Profile Page');
        $this->_view->setVal('title', 'Admin || Profile Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'change-password');
    }

    public function logOut()
    {
        SESSION::flash('admin');
        redirect(SITE_ADMIN_URL . 'login');
    }
}
