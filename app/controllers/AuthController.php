<?php
require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Input.php';
require_once APP_DIR . 'libs/Database.php';
class AuthController
{
    private $_view;
    private $_db;
    public function __construct()
    {
        $this->_view  = new View();
        $this->_db = new Database();
    }

    public function index()
    {

        if (Input::post('login')) {
            $data = Input::filter_param($_POST);
            if (!empty($data['email'])) {
                $email =  trim(strtolower($data['email']));
                if ($email) {
                    if (strlen($email) > 5 || strlen($email) < 150) {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                            $this->_db->query("SELECT wes_open_ai_uid,wes_open_ai_upass,wes_open_ai_key,wes_demo_websites,wes_open_ai_demo_days,wes_demo_pages FROM " . WEBSITE_SETTINGS . " WHERE wes_id   = 1");
                            $settings_data = $this->_db->single();
                            $start_date =  date(SYSTEM_DATE_TIME_FORMAT_LONG);
                            $days =  $settings_data['wes_open_ai_demo_days'];
                            $end_date =  date(SYSTEM_DATE_TIME_FORMAT_LONG, strtotime('-1 second', strtotime(date(SYSTEM_DATE_TIME_FORMAT_LONG) . ' +' . $days . ' day')));

                            $ch = curl_init();
                            $headers = [
                                'Content-Type: application/json'
                            ];
                            $postData = array(
                                'UserName' => $settings_data['wes_open_ai_uid'],
                                'Password' => $settings_data['wes_open_ai_upass'],
                                "Email" => $email,
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
                            $output = json_decode($server_output, 1);
                            if ($output['responsestatuscode'] !== 200) {
                                response(['sts' => false, 'type' => 'error', 'msg' => "Error: call to URL $url failed with status $status, response $server_output, curl_error " . curl_error($ch) . ", curl_errno " . curl_errno($ch), 'results' => $output['message']]);
                            } else {
                                response(['sts' => true, 'type' => 'success', 'msg' => 'Successfully Created', 'results' => $output['data']]);
                            }
                        } else {
                            response(['sts' => false, 'type' => 'error', 'msg' => "Email should be valid.", 'results' => 0]);
                        }
                    } else {
                        response(['sts' => false, 'type' => 'error', 'msg' => "Email should be between 5-150 characters.", 'results' => 0]);
                    }
                } else {
                    response(['sts' => false, 'type' => 'error', 'msg' => 'Email Address Must be entered', 'results' => 0]);
                }
            } else {
                response(['sts' => false, 'type' => 'error', 'msg' => 'Email Address Must be entered', 'results' => 0]);
            }
        } else {
            response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => 0]);
        }
    }

    public function sendOtpDetails()
    {
        if (Input::post('login')) {
            $data = Input::filter_param($_POST);
            if (!empty($data['email'])) {
                $email =  trim(strtolower($data['email']));
                if ($email) {
                    if (strlen($email) > 5 || strlen($email) < 150) {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $this->_db->query("SELECT usr_id FROM " . USERS . " WHERE usr_email = '" . $email . "'");
                            $user_data = $this->_db->single();
                            if (empty($user_data['usr_id'])) {
                                $sql = " INSERT INTO  " . USERS . " (usr_email, usr_website_name, usr_lang, usr_created_date)
                                VALUES (:email,:website_name,:lang,:date)";
                                try {
                                    $this->_db->beginTransaction();
                                    $this->_db->query($sql);
                                    $this->_db->bind(":email", $email);
                                    $this->_db->bind(":website_name", $data['website_url']);
                                    $this->_db->bind(":lang", $data['website_lang']);
                                    $this->_db->bind(":date", date(SYSTEM_DATE_TIME_FORMAT_LONG));
                                    $retVal = $this->_db->execute();
                                    if ($retVal) {
                                        $this->_db->commit();
                                        $otp  =  getOTP();

                                        $this->_db->query("SELECT wes_mailer_from_address,wes_mailer_from_name FROM " . WEBSITE_SETTINGS . " WHERE wes_id   = 1");
                                        $this->_db->stmt->execute();
                                        $settings_data =  $this->_db->stmt->fetch();
                                        // Sender Email and Name 
                                        $from =  $settings_data['wes_mailer_from_address'] . "<" . $settings_data['wes_mailer_from_name'] . ">";
                                        // Recipient Email Address 
                                        $to = $email;
                                        // Email Subject 
                                        $subject = 'One Time Password - Conect Ai Application Alert ';
                                        // Email Header 
                                        $headers = "From: $from\r\n" . "MIME-Version: 1.0\r\n";
                                        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                                        // Message Body 
                                        $body = "HI, " . $otp . " is your one time password (OTP) for <a href='http://conectai.chat/'>conectai chat</a>. Please use the OTP to proceed further. <br> Thank You<br>From ConectAi Chat";
                                        // If there are no errors, send the email
                                        if (mail($to, $subject, $body, $headers)) {
                                            $sql = "UPDATE  " . USERS . " SET usr_email_otp = :otp,usr_email_verification_sent = :verification_sent, usr_email_otp_sent_time = :date, usr_email_otp_attempt = :otp_attempt, usr_modified_date = :date WHERE usr_email = '" . $email . "'";
                                            $this->_db->beginTransaction();
                                            $this->_db->query($sql);
                                            $this->_db->bind(":otp", $otp);
                                            $this->_db->bind(":otp_attempt", 1);
                                            $this->_db->bind(":verification_sent", 1);
                                            $this->_db->bind(":date", date(SYSTEM_DATE_TIME_FORMAT_LONG));
                                            $retVal = $this->_db->execute();
                                            $this->_db->commit();
                                            $this->_view->render(VIEW_DIR . 'verification_form');
                                        } else {
                                            response(['sts' => false, 'type' => 'error', 'msg' => 'Sorry there was an error sending the verification mail. please try again later with correct email details.', 'results' => '0']);
                                        }
                                    }
                                } catch (Exception $ex) {
                                    $this->_db->rollBack();
                                    response(['sts' => false, 'type' => 'error', 'msg' => $ex->getMessage(), 'results' => 0]);
                                }
                            } else {
                                response(['sts' => false, 'type' => 'error', 'msg' => "Your Email Id already Registered", 'results' => 0]);
                            }
                        } else {
                            response(['sts' => false, 'type' => 'error', 'msg' => "Email should be valid.", 'results' => 0]);
                        }
                    } else {
                        response(['sts' => false, 'type' => 'error', 'msg' => "Email should be between 5-150 characters.", 'results' => 0]);
                    }
                } else {
                    response(['sts' => false, 'type' => 'error', 'msg' => 'Email Address Must be entered', 'results' => 0]);
                }
            } else {
                response(['sts' => false, 'type' => 'error', 'msg' => 'Email Address Must be entered', 'results' => 0]);
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
