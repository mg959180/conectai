<?php
require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Input.php';
require_once APP_DIR . 'libs/Database.php';
class AuthController
{
    private $_view;
    public function __construct()
    {
        $this->_view  = new View();
        $this->_db = new Database();
    }

    public function index()
    {

        if (Input::post('login')) {

            $this->_db->query("SELECT wes_open_ai_uid,wes_open_ai_upass,wes_open_ai_key,wes_demo_websites,wes_open_ai_demo_days,wes_demo_pages FROM " . WEBSITE_SETTINGS . " WHERE wes_id   = 1");
            $this->_db->stmt->execute();
            $settings_data =  $this->_db->stmt->fetch();
            $start_date =  date(SYSTEM_DATE_TIME_FORMAT_LONG);
            $days =  $settings_data['wes_open_ai_demo_days'];
            $end_date =  date(SYSTEM_DATE_TIME_FORMAT_LONG, strtotime('-1 second', strtotime(date(SYSTEM_DATE_TIME_FORMAT_LONG) . ' +' . $days . ' day')));

            $data = Input::filter_param($_POST);
            $ch = curl_init();
            $headers = [
                'Content-Type: application/json'
            ];
            $postData = array(
                'UserName' => $settings_data['wes_open_ai_uid'],
                'Password' => $settings_data['wes_open_ai_upass'],
                "Email" => $data['email'],
                'StartDate' => $start_date,
                'EndDate' => $end_date,
                'OpenAIKey' => $settings_data['wes_open_ai_key'],
                'TotalWebsites' => $settings_data['wes_demo_websites'],
                'TotalPages' => $settings_data['wes_demo_pages']
            );
           
            //create user :- https://api.conectai.chat/v1/create-user
            //Generate license :-
            $url = "https://api.conectai.chat/v1/create-user";
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $server_output = curl_exec($ch);
            $output = json_decode($server_output,1);
            if ($output['responsestatuscode'] !== 200) {
                response(['sts' => false, 'type' => 'error', 'msg' => "Error: call to URL $url failed with status $status, response $server_output, curl_error " . curl_error($ch) . ", curl_errno " . curl_errno($ch), 'results' => $output['message']]);
            } else {
                response(['sts' => true, 'type' => 'success', 'msg' => 'Successfully Created', 'results' => $output['data']]);
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
