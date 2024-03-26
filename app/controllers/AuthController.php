<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once APP_DIR . 'libs/PHPMailer/src/PHPMailer.php';
require_once APP_DIR . 'libs/PHPMailer/src/Exception.php';
require_once APP_DIR . 'libs/PHPMailer/src/SMTP.php';

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
                if (!empty($email)) {
                    if (strlen($email) > 5 || strlen($email) < 150) {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $this->_db->query("SELECT * FROM " . USERS . " WHERE usr_email = '" . $email . "'");
                            $user_data = $this->_db->single();

                            if (!empty($user_data)) {
                                if ($user_data['usr_email_verified'] == 1) {
                                    if ($user_data['usr_chat_account_created'] == 0) {
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
                                        //Generate license :- https://api.conectai.chat/v1/generate-license
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
                                            $sql = "UPDATE  " . USERS . " SET usr_chat_account_created = :account_created,
                                             usr_chat_demo_start_date = :start_date, usr_chat_demo_end_date = :end_date,
                                             usr_modified_date = :date WHERE usr_email = '" . $email . "'";
                                            $this->_db->beginTransaction();
                                            $this->_db->query($sql);
                                            $this->_db->bind(":account_created", 1);
                                            $this->_db->bind(":start_date",  $start_date);
                                            $this->_db->bind(":end_date", $end_date);
                                            $this->_db->bind(":account_created", 1);
                                            $this->_db->bind(":date", date(SYSTEM_DATE_TIME_FORMAT_LONG));
                                            $retVal = $this->_db->execute();
                                            $this->_db->commit();

                                            // $this->_db->query("SELECT wes_mailer_from_address,wes_mailer_from_name FROM " . WEBSITE_SETTINGS . " WHERE wes_id   = 1");
                                            // $this->_db->stmt->execute();
                                            // $settings_data =  $this->_db->stmt->fetch();
                                            // Sender Email and Name 
                                            // $from =  $settings_data['wes_mailer_from_address'] . "<" . $settings_data['wes_mailer_from_name'] . ">";
                                            // Recipient Email Address 
                                            $to = $email;
                                            // Email Subject 
                                            $subject = 'Demo Account Created - Conect Ai Application Alert ';
                                            // Email Header 
                                            // $headers = "From: $from\r\n" . "MIME-Version: 1.0\r\n";
                                            // $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                                            // Message Body 
                                            $body = "HI,Your account created successfully.<br>
                                        This your demo account which is expired in " . $days . " days. Please purchase our plan to this <a href='" . SITE_URL . 'our-pricing' . "'>pricing page</a> to continue our feature.
                                            <br> Thank You<br>From ConectAi Chat";
                                            // If there are no errors, send the email
                                            // mail($to, $subject, $body, $headers);

                                            $return_val =  $this->send_mail(['recipient_email' => $to, 'recipient_name' => '', 'subject' => $subject, 'body' => $body]);
                                            response(['sts' => true, 'type' => 'success', 'msg' => 'Successfully Created', 'results' => $output['data']]);
                                        }
                                    } else {
                                        response(['sts' => false, 'type' => 'error', 'msg' => "Your email already registered! if forget the detail please contact our customer support", 'results' => 0]);
                                    }
                                } else {
                                    response(['sts' => false, 'type' => 'error', 'msg' => "Please Verify your details to proceed!", 'results' => 0]);
                                }
                            } else {
                                response(['sts' => false, 'type' => 'error', 'msg' => "Please Verify your details to proceed!", 'results' => 0]);
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
        if (Input::post('send_otp')) {
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

                                        $this->_db->query("SELECT wes_email_verification_time FROM " . WEBSITE_SETTINGS . " WHERE wes_id = 1");
                                        $settings_data =  $this->_db->single();
                                        $expires_time  =   (intVal($settings_data['wes_email_verification_time']) / 60);
                                        // $this->_db->query("SELECT wes_mailer, wes_mailer_host, wes_mailer_uname, wes_mailer_upass, wes_mailer_encryption, wes_mailer_from_address, wes_mailer_from_name FROM " . WEBSITE_SETTINGS . " WHERE wes_id   = 1");
                                        // $this->_db->stmt->execute();
                                        // $settings_data =  $this->_db->stmt->fetch();
                                        // Sender Email and Name 
                                        // $from =  $settings_data['wes_mailer_from_address'] . "<" . $settings_data['wes_mailer_from_name'] . ">";
                                        // Recipient Email Address 
                                        $to = $email;
                                        // Email Subject 
                                        $subject = 'One Time Password - Conect Ai Application Alert ';
                                        // Email Header 
                                        // $headers = "From: $from\r\n" . "MIME-Version: 1.0\r\n";
                                        // $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                                        // Message Body 
                                        $body = "HI, " . $otp . " is your one time password (OTP) for <a href='http://conectai.chat/'>conectai chat</a>. Please use the OTP to proceed further. This otp is valid for " . $expires_time . " Minutes. <br> Thank You<br>From ConectAi Chat";
                                        // If there are no errors, send the email

                                        // mail($to, $subject, $body, $headers)
                                        $sent_time = date(SYSTEM_DATE_TIME_FORMAT_LONG);
                                        $return_val =  $this->send_mail(['recipient_email' => $to, 'recipient_name' => '', 'subject' => $subject, 'body' => $body]);

                                        if ($return_val == true) {
                                            $sql = "UPDATE  " . USERS . " SET usr_email_otp = :otp,usr_email_verification_sent = :verification_sent, usr_email_otp_sent_time = :sent_time, usr_email_otp_attempt = :otp_attempt, usr_modified_date = :modified_date WHERE usr_email = '" . $email . "'";
                                            $this->_db->beginTransaction();
                                            $this->_db->query($sql);
                                            $this->_db->bind(":otp", $otp);
                                            $this->_db->bind(":otp_attempt", 1);
                                            $this->_db->bind(":verification_sent", 1);
                                            $this->_db->bind(":sent_time", $sent_time);
                                            $this->_db->bind(":modified_date", $sent_time);
                                            $retVal = $this->_db->execute();
                                            $this->_db->commit();
                                            response(['sts' => true, 'type' => 'success', 'msg' => 'Otp Send Successfully', 'results' => $expires_time]);
                                        } else {
                                            response(['sts' => false, 'type' => 'error', 'msg' => 'Sorry there was an error sending the verification mail. please try again later with correct email details.', 'results' => '0']);
                                        }
                                    } else {
                                        response(['sts' => false, 'type' => 'error', 'msg' => 'Sorry there was an error sending the verification mail. please try again later with correct email details.', 'results' => '0']);
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

    public function displayOtpForm()
    {
        if (Input::post('display_otp')) {
            $data = Input::filter_param($_POST);
            if (!empty($data['email'])) {
                $this->_db->query("SELECT * FROM " . USERS . " WHERE usr_email = '" . $data['email'] . "'");
                $user_data = $this->_db->single();
                $this->_view->setVal('user_data', $user_data);
                $this->_view->render(VIEW_DIR . 'verification_form');
            } else {
                response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => 0]);
            }
        } else {
            response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => 0]);
        }
    }

    public function validateOtp()
    {

        if (Input::post('validate_otp')) {
            $data = Input::filter_param($_POST);
            if (!empty($data['email'])) {
                if (!empty($data['otp'])) {
                    $this->_db->query("SELECT * FROM " . USERS . " WHERE usr_email = '" . $data['email'] . "'");
                    $user_data = $this->_db->single();

                    $this->_db->query("SELECT wes_email_verification_time FROM " . WEBSITE_SETTINGS . " WHERE wes_id = 1");
                    $settings_data =  $this->_db->single();
                    $expires_time  =   (intVal($settings_data['wes_email_verification_time']) * 60);
                    if (!empty($user_data)) {
                        $otp_sent_time = $user_data['usr_email_otp_sent_time'];
                        $otp_sent_verify_time = change_to_custom_date($otp_sent_time . '+' . $expires_time . ' minutes', SYSTEM_DATE_TIME_FORMAT_LONG);
                        if ($user_data['usr_email_otp'] == $data['otp']) {
                            if (strtotime($otp_sent_time) <= strtotime($otp_sent_verify_time)) {
                                $sent_time = date(SYSTEM_DATE_TIME_FORMAT_LONG);
                                $sql = "UPDATE  " . USERS . " SET usr_email_verified = :email_verified, usr_modified_date = :modified_date WHERE usr_email = '" . $data['email'] . "'";
                                $this->_db->beginTransaction();
                                $this->_db->query($sql);
                                $this->_db->bind(":email_verified", 1);
                                $this->_db->bind(":modified_date", $sent_time);
                                $retVal = $this->_db->execute();
                                $this->_db->commit();
                                response(['sts' => true, 'type' => 'success', 'msg' => 'Email Verified Successfully', 'results' => 1]);
                            } else {
                                response(['sts' => false, 'type' => 'error', 'msg' => 'OTP expired! please resend the otp to proceed', 'results' => 0]);
                            }
                        } else {
                            response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Otp! PLease enter correct otp which is send to latest email.', 'results' => 0]);
                        }
                    } else {
                        response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => 0]);
                    }
                } else {
                    response(['sts' => false, 'type' => 'error', 'msg' => 'please enter the otp', 'results' => 0]);
                }
            } else {
                response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => 0]);
            }
        } else {
            response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => 0]);
        }
    }

    public function resendOtp()
    {
        if (Input::post('resend_otp')) {
            if (!empty($data['email'])) {
                $this->_db->query("SELECT wes_mailer_from_address,wes_mailer_from_name,wes_email_verification_time,wes_otp_attempts FROM " . WEBSITE_SETTINGS . " WHERE wes_id   = 1");
                $this->_db->stmt->execute();
                $settings_data =  $this->_db->stmt->fetch();

                $data = Input::filter_param($_POST);
                $email =  trim(strtolower($data['email']));
                $this->_db->query("SELECT * FROM " . USERS . " WHERE usr_email = '" . $email . "'");
                $user_data = $this->_db->single();
                if (!empty($user_data)) {
                    if ($user_data['usr_email_otp_attempt'] < $settings_data['wes_otp_attempts']) {
                        try {
                            // Sender Email and Name 
                            $from =  $settings_data['wes_mailer_from_address'] . "<" . $settings_data['wes_mailer_from_name'] . ">";
                            // Recipient Email Address 
                            $to = $email;
                            $otp  =  getOTP();
                            // Email Subject 
                            $subject = 'One Time Password - Conect Ai Application Alert ';
                            // Email Header 
                            $headers = "From: $from\r\n" . "MIME-Version: 1.0\r\n";
                            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                            // Message Body
                            $expires_time  =   (intVal($settings_data['wes_email_verification_time']) * 60);
                            $body = "HI, " . $otp . " is your one time password (OTP) for <a href='http://conectai.chat/'>conectai chat</a>. Please use the OTP to proceed further. this otp will expires in " . $expires_time . " minutes. <br> Thank You<br>From ConectAi Chat";
                            // If there are no errors, send the email
                            if (mail($to, $subject, $body, $headers)) {
                                $sql = "UPDATE  " . USERS . " SET usr_email_otp = :otp,usr_email_verification_sent = :verification_sent, usr_email_otp_sent_time = :date, usr_email_otp_attempt = :otp_attempt, usr_modified_date = :date WHERE usr_email = '" . $email . "'";
                                $this->_db->beginTransaction();
                                $this->_db->query($sql);
                                $this->_db->bind(":otp", $otp);
                                $this->_db->bind(":otp_attempt", ($user_data['usr_email_otp_attempt'] + 1));
                                $this->_db->bind(":verification_sent", 1);
                                $this->_db->bind(":date", date(SYSTEM_DATE_TIME_FORMAT_LONG));
                                $retVal = $this->_db->execute();
                                $this->_db->commit();
                                response(['sts' => true, 'type' => 'success', 'msg' => 'Otp Send Successfully', 'results' => '0']);
                            } else {
                                response(['sts' => false, 'type' => 'error', 'msg' => 'Sorry there was an error sending the verification mail. please try again later with correct email details.', 'results' => '0']);
                            }
                        } catch (Exception $ex) {
                            $this->_db->rollBack();
                            response(['sts' => false, 'type' => 'error', 'msg' => $ex->getMessage(), 'results' => 0]);
                        }
                    } else {
                        response(['sts' => false, 'type' => 'error', 'msg' => 'You reach maximum number of times email verification. please contact the customer support to continue.', 'results' => 0]);
                    }
                } else {
                    response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => 0]);
                }
            } else {
                response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => 0]);
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

    public function send_mail($data)
    {
        $this->_db->query("SELECT wes_mailer, wes_mailer_host AS host,wes_mailer_port AS port, wes_mailer_uname AS user_name, wes_mailer_upass AS user_pass, wes_mailer_encryption AS encryption, wes_mailer_from_address AS sender_address, wes_mailer_from_name AS sender_name FROM " . WEBSITE_SETTINGS . " WHERE wes_id   = 1");
        $settings_data =  $this->_db->single();
        if (!empty($settings_data)) {
            $mail = new PHPMailer();
            try {
                $mail->SMTPDebug  = 0; // debugging: 1 = errors and messages, 2 = messages only
                $mail->IsSMTP();
                $mail->Host = $settings_data['host'];
                $mail->SMTPAuth = true; // authentication enabled
                $mail->Username = $settings_data['user_name'];
                $mail->Password = $settings_data['user_pass'];
                $mail->SMTPSecure = $settings_data['encryption']; // secure transfer enabled REQUIRED for Gmail
                $mail->Port = $settings_data['port']; // or 587
                $mail->setFrom($settings_data['sender_address'], $settings_data['sender_name']);
                if (!empty($data['recipient_name'])) {
                    $mail->addAddress($data['recipient_email'], $data['recipient_name']);
                } else {
                    $mail->addAddress($data['recipient_email']);
                }
                $mail->isHTML(true);
                $mail->Subject = $data['subject'];
                $bodyContent =  $data['body'];
                $mail->Body = $bodyContent;
                $send_success = $mail->Send();
                return $send_success;
            } catch (Exception $e) {
                return $e->getMessage();
            }
        } else {
            return false;
        }
    }
}
