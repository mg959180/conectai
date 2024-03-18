<?php
require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Input.php';
class AuthController
{
    private $_view;
    public function __construct()
    {
        $this->_view  = new View();
    }
    
    public function index()
    {
        $start_date =  date(SYSTEM_DATE_TIME_FORMAT_LONG);
        $end_date =  date(SYSTEM_DATE_TIME_FORMAT_LONG, strtotime('-1 second', strtotime(date(SYSTEM_DATE_TIME_FORMAT_LONG) . ' +1 month')));

        if (Input::post('login')) {
            $data = Input::filter_param($_POST);
            $ch = curl_init();
            $headers = [
                'Content-Type: application/json'
            ];
            $postData = array(
                'UserName' => 'AAA1111AAA678AAA988AAA765AAAAAAA',
                'Password' => 'AAA2345AAA678AAA988AAA765AAAA222',
                "Email" => $data['email'],
                'StartDate' => $start_date,
                'StartDate' => $end_date,
                'OpenAIKey' => '123',
                'TotalWebsites' => '1',
                'TotalPages' => '1'
            );
            //create user :- https://api.conectai.chat/v1/create-user
            //Generate license :- https://api.conectai.chat/v1/generate-license
            $url = "https://api.conectai.chat/v1/create-user";
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $server_output = curl_exec($ch);
            if ($status !== 201 || $status !== 200) {
                response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => $server_output]);
            } else {
                response(['sts' => true, 'type' => 'success', 'msg' => 'Successfully Created', 'results' =>  $server_output]);
            }
        } else {
            response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => 0]);
        }
    }

    public function forgotPassword()
    {
        $this->_view->set_header_footer = false;
        $this->_view->frontPageRender(VIEW_DIR . 'forget-password');
    }
}
