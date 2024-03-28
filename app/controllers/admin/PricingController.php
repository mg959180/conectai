<?php
require_once APP_DIR . 'libs/View.php';
require_once APP_DIR . 'libs/Input.php';
require_once APP_DIR . 'libs/Database.php';
require_once APP_DIR . 'libs/Hash.php';
class PricingController
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
        $this->_db->query("SELECT * FROM " . PLANS . " WHERE 1 ");
        $pricing_data = $this->_db->resultSet();
        $this->_view->show_data_table = true;
        $this->_view->set_header_footer = true;
        $this->_view->setVal('pricing_data', $pricing_data);
        $this->_view->setVal('meta_description', 'Admin || Pricing Page');
        $this->_view->setVal('title', 'Admin || Pricing Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'pricing/pricing-list');
    }

    public function plansForm($id = null)
    {
        $this->_db->query("SELECT cun_currency AS currency_code, cun_id AS currency_country_id, cun_name AS currency_country_name FROM " . COUNTRIES . " WHERE 1 AND cun_status = 1");
        $currencies_list = $this->_db->resultSet();
        $this->_view->setVal('currencies_list', $currencies_list);

        if (!empty($id)) {
            $record_id  = Hash::decrypt($id);
            $this->_db->query("SELECT * FROM " . PLANS . " WHERE 1 AND plan_id = " . $record_id);
            $pricing_form_data = $this->_db->single();
            $this->_view->setVal('pricing_form_data', $pricing_form_data);
            $this->_view->setVal('mode', 'edit');
        } else {
            $this->_view->setVal('mode', 'add');
        }

        $this->_view->enable_jquery = true;
        $this->_view->setVal('meta_description', 'Admin || Pricing Page');
        $this->_view->setVal('title', 'Admin || Pricing Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'pricing/pricing-form');
    }

    public function deletePlans($id)
    {
        if (isset($id)) {
            $record_id  = Hash::decrypt($id);
            if (!empty($record_id)) {
                $this->_db->query("SELECT * FROM " . PLANS . " WHERE 1 AND plan_id = " . $record_id);
                $pricing_data = $this->_db->single();
                if (!empty($pricing_data)) {
                    try {

                        $this->_db->beginTransaction();
                        $this->_db->query("DELETE FROM " . PLANS_FEATURES . " WHERE 1 AND pfe_plan_id = " . $record_id);
                        $this->_db->execute();

                        $this->_db->query("DELETE FROM " . PLANS_PRICES . " WHERE 1 AND ppr_plan_id = " . $record_id);
                        $this->_db->execute();

                        $this->_db->query("DELETE FROM " . PLANS . " WHERE 1 AND plan_id = " . $record_id);
                        $retVal =  $this->_db->execute();

                        $this->_db->commit();
                        if ($retVal) {
                            set_session_alert('success', 'Plans Deleted Successfully!');
                        } else {
                            set_session_alert('error', 'Error in Deleting Plans!');
                        }
                    } catch (Exception $ex) {
                        $this->_db->rollBack();
                        set_session_alert('error', $ex->getMessage());
                    }
                } else {
                    set_session_alert('error', 'Invalid Data');
                }
            } else {
                set_session_alert('error', 'Invalid Data');
            }
        } else {
            set_session_alert('error', 'Invalid Data');
        }
        redirect(SITE_ADMIN_URL . 'pricing');
    }

    public function plansStatus()
    {
        if (Input::post('change_status')) {
            $data = Input::filter_param($_POST);
            $id = $data['id'];
            if ($id > 0) {
                try {
                    $sql = "UPDATE  " . PLANS . " SET plan_status = '" . $data['status'] . "'  WHERE plan_id = " . $id;
                    $this->_db->beginTransaction();
                    $this->_db->query($sql);
                    $retVal = $this->_db->execute();
                    if ($retVal) {
                        $this->_db->commit();
                        response(['sts' => true, 'type' => 'success', 'msg' => 'Plan Status Updated Successfully', 'results' => '0']);
                    } else {
                        response(['sts' => false, 'type' => 'error', 'msg' => 'Failed to upload Plan Status', 'results' => '0']);
                    }
                } catch (Exception $ex) {
                    $this->_db->rollBack();
                    response(['sts' => false, 'type' => 'error', 'msg' => $ex->getMessage(), 'results' => '0']);
                }
            } else {
                response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => '0']);
            }
        } else {
            response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => '0']);
        }
    }

    public function plansOrder()
    {
        if (Input::post('change_order')) {
            $data = Input::filter_param($_POST);
            $id = $data['id'];
            if ($id > 0) {
                try {
                    $sql = "UPDATE  " . PLANS . " SET plan_sort_order = '" . $data['order'] . "'  WHERE plan_id  = " . $id;
                    $this->_db->beginTransaction();
                    $this->_db->query($sql);
                    $retVal = $this->_db->execute();
                    if ($retVal) {
                        $this->_db->commit();
                        response(['sts' => true, 'type' => 'success', 'msg' => 'Plan Order Updated Successfully', 'results' => '0']);
                    } else {
                        response(['sts' => false, 'type' => 'error', 'msg' => 'Failed to upload Plan Order', 'results' => '0']);
                    }
                } catch (Exception $ex) {
                    $this->_db->rollBack();
                    response(['sts' => false, 'type' => 'error', 'msg' => $ex->getMessage(), 'results' => '0']);
                }
            } else {
                response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => '0']);
            }
        } else {
            response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => '0']);
        }
    }

    public function savePlans()
    {
        if (isset($_POST['save_plans'])) {
            $data = Input::filter_param($_POST);

            if ($data['mode'] == 'edit') {
                $sql = "UPDATE  " . PLANS . " SET plan_name = :name, plan_code = :code, plan_desc = :desc, plan_short_desc = :short_desc, plan_status = :status, plan_show_in_plans =:show_in_plans, plan_sort_order = :sort_order, plan_best_selling = :best_selling, plan_modified_by = :by, plan_modified_date = :date WHERE plan_id = " . $data['id'];
            } else if ($data['mode'] == 'add') {
                $sql = " INSERT INTO  " . PLANS . " (plan_name, plan_code, plan_desc, plan_short_desc, plan_status, plan_show_in_plans,plan_sort_order, plan_best_selling, plan_created_by , plan_created_date)
                 VALUES (:name,:code,:desc,:short_desc,:status,:show_in_plans,:sort_order,:best_selling,:by,:date)";
            }

            try {
                $this->_db->beginTransaction();
                $this->_db->query($sql);
                $this->_db->bind(":name", $data['name']);
                $this->_db->bind(":code", $data['code']);
                $this->_db->bind(":desc", $data['desc']);
                $this->_db->bind(":short_desc", $data['short_desc']);
                $this->_db->bind(":status", $data['status']);
                $this->_db->bind(":sort_order", $data['sort_order']);
                $this->_db->bind(":best_selling", (!empty($data['best_selling']) ? 1 : 0));
                $this->_db->bind(":show_in_plans", ((isset($_POST['show_in_plans'])) ? 1 : 0));
                $this->_db->bind(":by", Session::get('admin')['uId']);
                $this->_db->bind(":date", date(SYSTEM_DATE_TIME_FORMAT_LONG));
                $retVal = $this->_db->execute();

                if ($data['mode'] == 'edit') {
                    $last_id = Hash::encrypt($data['id']);
                    $label = " Updated";
                } else if ($data['mode'] == 'add') {
                    $last_id = $this->_db->lastInsertId();
                    $label = " Saved";
                }
                if ($retVal) {
                    $this->_db->commit();
                    set_session_alert('success', 'Plans Details ' . $label . ' Successfully');
                    redirect(SITE_ADMIN_URL . 'pricing/plans-form/' . $last_id);
                } else {
                    if ($data['mode'] == 'edit') {
                        $last_id = Hash::encrypt($data['id']);
                        $label = " Updated";
                    } else if ($data['mode'] == 'add') {
                        $last_id = '';
                        $label = " Saved";
                    }
                    set_session_alert('error', 'Unable to  ' . $label . ' Plans Details!');
                    redirect(SITE_ADMIN_URL . 'pricing/plans-form/' .  $last_id);
                }
            } catch (Exception $ex) {
                $this->_db->rollBack();
                set_session_alert('error', $ex->getMessage());
                if ($data['mode'] == 'edit') {
                    redirect(SITE_ADMIN_URL . 'pricing/plans-form/' .  Hash::encrypt($data['id']));
                } else if ($data['mode'] == 'add') {
                    redirect(SITE_ADMIN_URL . 'pricing/plans-form');
                }
            }
        } else {
            set_session_alert('error', 'Invalid Data');
            redirect(SITE_ADMIN_URL . 'pricing/plans-form');
        }
    }

    public function definePlansPackages($id, $map_id = null)
    {
        $id = Hash::decrypt($id);
        $this->_db->query("SELECT  *, (SELECT cun_currency_symbol FROM " . COUNTRIES . " WHERE cun_id = ppr_cun_id ) as currency_code  FROM " . PLANS_PRICES . " WHERE 1 AND ppr_plan_id = " . $id);
        $plans_prices = $this->_db->resultSet();
        $this->_view->setVal('plans_prices', $plans_prices);

        $this->_db->query("SELECT cun_id , cun_name FROM " . COUNTRIES . " WHERE 1 AND cun_status = 1");
        $countries_data = $this->_db->resultSet();
        $this->_view->setVal('countries_data', $countries_data);

        if (!empty($map_id)) {
            $map_id = Hash::decrypt($map_id);
            $this->_db->query("SELECT  * FROM " . PLANS_PRICES . " WHERE 1 AND ppr_id = " . $map_id);
            $edit_plans_prices = $this->_db->single();
            $this->_view->setVal('edit_plans_prices', $edit_plans_prices);
            $this->_view->setVal('mode', 'edit');
        } else {
            $this->_view->setVal('mode', 'add');
        }

        $this->_view->setVal('id', $id);
        $this->_view->enable_jquery = true;
        $this->_view->show_data_table = true;
        $this->_view->set_header_footer = true;
        $this->_view->setVal('meta_description', 'Admin || Pricing Page');
        $this->_view->setVal('title', 'Admin || Pricing Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'pricing/pricing-packages-form');
    }

    public function deletePlansPackages($mid, $id)
    {
        if (isset($id)) {
            $record_id = Hash::decrypt($id);
            if (!empty($record_id)) {
                $this->_db->query("SELECT  * FROM " . PLANS_PRICES . " WHERE 1 AND ppr_id = " . $record_id);
                $edit_plans_prices = $this->_db->single();
                if (!empty($edit_plans_prices)) {
                    $this->_db->query("DELETE FROM " . PLANS_PRICES . " WHERE 1 AND ppr_id = " . $record_id);
                    $data = $this->_db->execute();
                    if ($data) {
                        set_session_alert('success', 'Website PLans Prices Deleted Successfully!');
                    } else {
                        set_session_alert('error', 'Error to Deleting Website PLans Prices!');
                    }
                } else {
                    set_session_alert('error', 'Invalid Data');
                }
            } else {
                set_session_alert('error', 'Invalid Data');
            }
        } else {
            set_session_alert('error', 'Invalid Data');
        }
        redirect(SITE_ADMIN_URL . 'pricing/define-plans-packages/' . $mid);
    }

    public function savePlansPackages()
    {
        $data = Input::filter_param($_POST);
        if (isset($_POST['submit_plan_prices'])) {
            // debug_data($data);
            try {
                if ($data['mode'] == 'edit') {
                    $sql = "UPDATE  " . PLANS_PRICES . " SET ppr_amount = :amount, ppr_duration = :duration, ppr_status = :status,
                     ppr_cun_id  = :country, ppr_plan_id  = :plan_id WHERE ppr_id = " . $data['id'];
                } else if ($data['mode'] == 'add') {
                    $sql = " INSERT INTO  " . PLANS_PRICES . " (ppr_amount, ppr_duration, ppr_status, ppr_cun_id, ppr_plan_id)
                 VALUES (:amount,:duration,:status,:country,:plan_id)";
                }
                $this->_db->beginTransaction();
                $this->_db->query($sql);
                $this->_db->bind(":amount", $data['amount']);
                $this->_db->bind(":duration", $data['duration']);
                $this->_db->bind(":status", $data['status']);
                $this->_db->bind(":country", $data['country']);
                $this->_db->bind(":plan_id", $data['mid']);
                $retVal = $this->_db->execute();
                if ($data['mode'] == 'edit') {
                    $label = " Updated";
                } else if ($data['mode'] == 'add') {
                    $label = " Saved";
                }
                if ($retVal) {
                    $this->_db->commit();
                    set_session_alert('success', 'Plans Prices Details ' . $label . ' Successfully');
                } else {
                    set_session_alert('success', 'Unable to ' . $label . ' Plans Prices Details');
                }
            } catch (Exception $ex) {
                $this->_db->rollBack();
                set_session_alert('error', $ex->getMessage());
            }
        } else {
            set_session_alert('error', 'Invalid Data');
        }
        redirect(SITE_ADMIN_URL . 'pricing/define-plans-packages/' . Hash::encrypt($data['mid']));
    }

    public function definePlansFeatures($id, $map_id = null)
    {
        $id = Hash::decrypt($id);

        $this->_db->query("SELECT  *, (SELECT cun_currency_symbol FROM " . COUNTRIES . " WHERE cun_id = ppr_cun_id ) as currency_code FROM " . PLANS_PRICES . " WHERE 1 AND ppr_plan_id = " . $id);
        $plans_prices = $this->_db->resultSet();
        $this->_view->setVal('plans_prices', $plans_prices);

        $this->_db->query("SELECT *, (SELECT GROUP_CONCAT(concat((SELECT cun_currency_symbol FROM " . COUNTRIES . " WHERE cun_id = ppr_cun_id ),' ',ppr_amount ,' ',ppr_duration) SEPARATOR  '<br>') FROM " . PLANS_PRICES . " WHERE FIND_IN_SET(ppr_id,pfe_ppr_ids)) AS price_name FROM " . PLANS_FEATURES . " WHERE 1 AND pfe_plan_id = " . $id);
        $plans_features = $this->_db->resultSet();
        $this->_view->setVal('plans_features', $plans_features);

        if (!empty($map_id)) {
            $map_id = Hash::decrypt($map_id);
            $this->_db->query("SELECT * FROM " . PLANS_FEATURES . " WHERE 1 AND pfe_id = " . $map_id);
            $edit_results = $this->_db->single();
            $this->_view->setVal('edit_results', $edit_results);
            $this->_view->setVal('mode', 'edit');
        } else {
            $this->_view->setVal('mode', 'add');
        }

        $this->_view->setVal('id', $id);
        $this->_view->enable_jquery = true;
        $this->_view->set_header_footer = true;
        $this->_view->show_data_table = true;
        $this->_view->setVal('meta_description', 'Admin || Pricing Features Page');
        $this->_view->setVal('title', 'Admin || Pricing Features Page');
        $this->_view->setVal('meta_author', 'Mayank Gupta');
        $this->_view->adminPageRender(ADMIN_VIEW_DIR . 'pricing/pricing-features-form');
    }

    public function deletePlansFeatures($mid, $id)
    {
        $mid = Hash::decrypt($mid);
        if (isset($id)) {
            $record_id = Hash::decrypt($id);
            if (!empty($record_id)) {
                $this->_db->query("SELECT  * FROM " . PLANS_FEATURES . " WHERE 1 AND pfe_id = " . $record_id);
                $edit_plans_prices = $this->_db->single();
                if (!empty($edit_plans_prices)) {
                    $this->_db->query("DELETE FROM " . PLANS_FEATURES . " WHERE 1 AND pfe_id = " . $record_id);
                    $data = $this->_db->execute();
                    if ($data) {
                        set_session_alert('success', 'Website PLans Features Deleted Successfully!');
                    } else {
                        set_session_alert('error', 'Error to Deleting Website PLans Features!');
                    }
                } else {
                    set_session_alert('error', 'Invalid Data');
                }
            } else {
                set_session_alert('error', 'Invalid Data');
            }
        } else {
            set_session_alert('error', 'Invalid Data');
        }
        $mid = Hash::encrypt($mid);
        redirect(SITE_ADMIN_URL . 'pricing/define-plans-features/' . $mid);
    }

    public function savePlansFeatures()
    {
        if (isset($_POST['submit_plan_prices'])) {
            try {
                if ($_POST['mode'] == 'edit') {
                    $sql = "UPDATE  " . PLANS_FEATURES . " SET pfe_title = :title, pfe_value = :value, pfe_desc = :desc,pfe_extra_desc = :extra_desc,
                    pfe_ppr_ids  = :ppr_ids, pfe_plan_id = :plan_id, pfe_required = :required,pfe_show_in_plans = :show_in_plans , pfe_status = :status,pfe_sort_order=:sort_order WHERE pfe_id = " . $_POST['id'];
                } else if ($_POST['mode'] == 'add') {
                    $sql = " INSERT INTO  " . PLANS_FEATURES . " (pfe_title, pfe_value, pfe_desc,pfe_extra_desc, pfe_ppr_ids, pfe_plan_id, pfe_required,pfe_show_in_plans,pfe_status,pfe_sort_order)
                 VALUES (:title,:value,:desc,:extra_desc,:ppr_ids,:plan_id,:required,:show_in_plans,:status,:sort_order)";
                }

                $this->_db->beginTransaction();
                $this->_db->query($sql);
                $this->_db->bind(":title", $_POST['feature_title']);
                $this->_db->bind(":value", $_POST['feature_value']);
                $this->_db->bind(":desc", $_POST['desc']);
                $this->_db->bind(":extra_desc", $_POST['extra_desc']);
                $this->_db->bind(":ppr_ids", implode(',', array_filter($_POST['price'])));
                $this->_db->bind(":plan_id", $_POST['mid']);
                $this->_db->bind(":required", ((isset($_POST['required'])) ? 1 : 0));
                $this->_db->bind(":show_in_plans", ((isset($_POST['show_in_plans'])) ? 1 : 0));
                $this->_db->bind(":status", $_POST['status']);
                $this->_db->bind(":sort_order", $_POST['sort_order']);
                $retVal = $this->_db->execute();
                if ($_POST['mode'] == 'edit') {
                    $label = " Updated";
                } else if ($_POST['mode'] == 'add') {
                    $label = " Saved";
                }
                if ($retVal) {
                    $this->_db->commit();
                    set_session_alert('success', 'Plans Features Details ' . $label . ' Successfully');
                } else {
                    set_session_alert('success', 'Unable to ' . $label . ' Plans Features Details');
                }
            } catch (Exception $ex) {
                $this->_db->rollBack();
                set_session_alert('error', $ex->getMessage());
            }
        } else {
            set_session_alert('error', 'Invalid Data');
        }
        $mid = Hash::encrypt($_POST['mid']);
        redirect(SITE_ADMIN_URL . 'pricing/define-plans-features/' . $mid);
    }
    
    public function plansFeaturesOrder()
    {
        if (Input::post('change_order')) {
            $data = Input::filter_param($_POST);
            $id = $data['id'];
            if ($id > 0) {
                try {
                    $sql = "UPDATE  " . PLANS_FEATURES . " SET pfe_sort_order = '" . $data['order'] . "'  WHERE pfe_id  = " . $id;
                    $this->_db->beginTransaction();
                    $this->_db->query($sql);
                    $retVal = $this->_db->execute();
                    if ($retVal) {
                        $this->_db->commit();
                        response(['sts' => true, 'type' => 'success', 'msg' => 'Features Display Order Updated Successfully', 'results' => '0']);
                    } else {
                        response(['sts' => false, 'type' => 'error', 'msg' => 'Failed to upload Features Display Order', 'results' => '0']);
                    }
                } catch (Exception $ex) {
                    $this->_db->rollBack();
                    response(['sts' => false, 'type' => 'error', 'msg' => $ex->getMessage(), 'results' => '0']);
                }
            } else {
                response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => '0']);
            }
        } else {
            response(['sts' => false, 'type' => 'error', 'msg' => 'Invalid Data', 'results' => '0']);
        }
    }

}
