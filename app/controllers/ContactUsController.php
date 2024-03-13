<?php
require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Input.php';
require_once APP_DIR . 'libs/Database.php';
class ContactUsController
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
        $this->_view->setBreadCrumb('main_title', 'Contact With Us');
        $this->_view->setBreadCrumb('submenu', [['link' => SITE_URL, 'name' => 'Home'], ['last' => true, 'name' => 'Contact Us']]);
        $this->_view->frontPageRender(VIEW_DIR . 'contact');
    }

    public function sendData()
    {
        if (Input::post('sendData')) {
            $data = Input::filter_param($_POST);


            // Check that data was sent to the mailer.
            if (empty($data['name']) or empty($data['message']) or empty($data['phone']) or !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                response(['sts' => false, 'type' => 'error', 'msg' => 'Please fill all the fields and try again.', 'results' => '0']);
            }
            $sql = "INSERT INTO " . CONTACT_US . "(con_name,con_email,con_mobile,con_message,con_date,con_created_ip_address) VALUES (:name,:email,:mobile,:message,:date,:ip)";
            try {
                $this->_db->beginTransaction();
                $this->_db->query($sql);
                $this->_db->bind(':name', $data['name']);
                $this->_db->bind(':email', $data['email']);
                $this->_db->bind(':mobile', $data['phone']);
                $this->_db->bind(':message', $data['message']);
                $this->_db->bind(':date', date(SYSTEM_DATE_TIME_FORMAT_LONG));
                $this->_db->bind(':ip', get_client_ip());
                $retVal = $this->_db->execute();
                if ($retVal) {
                    // Sender Email and Name 
                    $from = stripslashes($_POST['name']) . "<" . stripslashes($_POST['email']) . ">";
                    // Recipient Email Address 
                    $to = 'mg959180@gmail.com';
                    // Email Subject 
                    $subject = 'New Message from Conect AI Contact Form';
                    // Email Header 
                    $headers = "From: $from\r\n" . "MIME-Version: 1.0\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    // Message Body 
                    $body = "Name: " . $data['name'] . "\nEmail: " . $data['email'] . "\nPhone: " . $data['phone'] . "\nMessage:\n" . $data['message'];
                    // If there are no errors, send the email
                    
                    $this->_db->commit();
                    if (mail($to, $subject, $body, $headers)) {
                        response(['sts' => true, 'type' => 'success', 'msg' => 'Thank You! We will be in touch with you very soon.', 'results' => '1']);
                    } else {
                        response(['sts' => false, 'type' => 'error', 'msg' => 'Sorry there was an error sending your message. Please try again', 'results' => '0']);
                    }
                }
            } catch (Exception $ex) {
                $this->_db->rollBack();
                response(['sts' => false, 'type' => 'error', 'msg' => 'Sorry there was an error sending your message. Please try again', 'results' => '0']);
            }
        }
    }
}
