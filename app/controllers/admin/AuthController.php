<?php

require_once APP_DIR . 'libs/BaseController.php';
require_once APP_DIR . 'libs/Input.php';
require_once APP_DIR . 'models/admin/AuthModel.php';
class AuthController extends BaseController
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
            $amobj = new AuthModel();
            $u_exist = $amobj->CheckUser(); 

            print_r($amobj);
            
            // $u_exist = select(
            //     "SELECT * FROM users WHERE uname = ? ",
            //     [$data['uname']],
            //     "s"
            // );

            if (mysqli_num_rows($u_exist) == 0) {
                response(['sts' => false, 'type' => 'error', 'msg' => 'Login Details Not found!', 'results' => '0']);
            } else {
                $u_fetch = mysqli_fetch_assoc($u_exist);
                if ($u_fetch['status'] == 0) {
                    response(['sts' => false, 'type' => 'error', 'msg' => 'Your Account is inactive contact your administrator!', 'results' => '0']);
                } else {
                    // if (!password_verify($data['pass'], $u_fetch['password'])) {
                    if (!($data['pass'] == $u_fetch['password'])) {
                        response(['sts' => false, 'type' => 'error', 'msg' => 'Password Invalid, Please Enter Correct Password!', 'results' => '0']);
                    } else {
                        $_SESSION['admin']['login'] = true;
                        $_SESSION['admin']['uId'] = $u_fetch['id'];
                        $_SESSION['admin']['uName'] = $u_fetch['uname'];
                        $_SESSION['admin']['Name'] = $u_fetch['name'];
                        response(['sts' => true, 'type' => 'success', 'msg' => 'Login Successful!', 'results' => '1']);
                    }
                }
            }
        }
    }
}
