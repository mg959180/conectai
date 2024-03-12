<?php

require_once APP_DIR . 'libs/Input.php';
require_once APP_DIR . 'models/admin/AuthModel.php';
class AuthController
{

    public function __construct()
    {
        check_login();
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
}
