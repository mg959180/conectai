<?php
require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Input.php';
require_once APP_DIR . 'libs/Database.php';
require_once APP_DIR . 'libs/Session.php';
class SettingsController
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
        if (isset($_POST['save_setting'])) {
            $data = Input::filter_param($_POST);
            $sql = "UPDATE  " . WEBSITE_SETTINGS . " SET wes_name = :name, wes_maintenance_mode = :mode, wes_maintenance_start_time = :s_date,
            wes_maintenance_end_time = :e_date, wes_modified_by  = :by, wes_modified_date = :date WHERE wes_id = 1";
            
            try {
                $this->_db->beginTransaction();
                $this->_db->query($sql);
                $this->_db->bind(":name", $data['name']);
                $this->_db->bind(":mode", $data['maintenance_mode']);
                $this->_db->bind(":s_date", date(SYSTEM_DATE_TIME_FORMAT_LONG, strtotime($data['start_date'] . ' 00:00:00')));
                $this->_db->bind(":e_date", date(SYSTEM_DATE_TIME_FORMAT_LONG, strtotime($data['end_date'] . ' 23:59:59')));
                $this->_db->bind(":by", Session::get('admin')['uId']);
                $this->_db->bind(":date", date(SYSTEM_DATE_TIME_FORMAT_LONG));
                $retVal = $this->_db->execute();
                if ($retVal) {
                    $this->_db->commit();
                    set_session_alert('success', 'Website Settings Updated Successfully');
                    redirect(SITE_ADMIN_URL . 'settings');
                }
            } catch (Exception $ex) {
                $this->_db->rollBack();
                set_session_alert('error', $ex->getMessage());
                redirect(SITE_ADMIN_URL . 'settings');
            }
        }
        $this->_db->query("SELECT * FROM " . WEBSITE_SETTINGS . " WHERE 1 AND wes_id = 1");
        $website_data = $this->_db->single();
        $this->_view->setVal('website_data', $website_data);
        $this->_view->set_header_footer = true;
        $this->_view->setVal('meta_description', 'Admin || Main Setting Page');
        $this->_view->setVal('title', 'Admin || Main Setting Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->setVal('page_title', 'Setting Page');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'settings/main-setting-form');
    }

    public function paymentInfoSetting()
    {
        $this->_view->set_header_footer = true;
        $this->_view->setVal('meta_description', 'Admin || Payment Info. Setting Page');
        $this->_view->setVal('title', 'Admin || Payment Info. Setting Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'payment-info-setting-form');
    }
}
