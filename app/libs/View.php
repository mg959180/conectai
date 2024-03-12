<?php
require_once APP_DIR . 'libs/Session.php';
require_once APP_DIR . 'libs/Database.php';
class View
{
    protected $set_val = [];
    protected $set_breadcrumb = [];
    public $show_extra_script = false;
    public $set_header_footer = true;
    public $show_project_model = false;
    public $show_data_table = false;
    public $show_chart = false;
    protected $view;

    public function __construct()
    {
    }

    public function setVal($key, $val)
    {
        $this->set_val[$key] = $val;
    }

    public function setBreadCrumb($key, $val)
    {
        $this->set_breadcrumb[$key] =  $val;
    }

    public function render($viewScript)
    {
        extract($this->set_val);
        require_once $viewScript;
    }

    public function frontBreadCrumb()
    {
        $breadcrumb  = '';
        if (isset($this->set_breadcrumb['main_title'])) {
            $breadcrumb  .= '<section class="py-10 py-lg-15 bg-blog" data-aos="fade-up-sm" data-aos-delay="50">
            <div class="container"><div class="text-center">';
            if (isset($this->set_breadcrumb['submenu'])) {
                $breadcrumb  .= '<h3 class=" mb-2">' . $this->set_breadcrumb['main_title'] . '</h3>';
            } else {
                $breadcrumb  .= '<h1 class=" mb-2">' . $this->set_breadcrumb['main_title'] . '</h1>';
            }
            if (isset($this->set_breadcrumb['submenu'])) {
                $breadcrumb  .= '<nav aria-label="breadcrumb"><ol class="breadcrumb justify-center fs-sm">';
                foreach ($this->set_breadcrumb['submenu'] as  $sub_v) {
                    $breadcrumb  .= '<li class="breadcrumb-item ' . (isset($sub_v['last']) ? 'active' : '') . '" ' . (isset($sub_v['last']) ? 'aria-current="page"' : '') . ' >' . (isset($sub_v['link']) ? '<a href="' . $sub_v['link'] . '">' . $sub_v['name'] . '</a>' : $sub_v['name']) . '</li>';
                }
                $breadcrumb  .= '</ol></nav>';
            }
            $breadcrumb  .= '</div></div></section>';
        }
        return $breadcrumb;
    }

    public function frontPageRender($viewScript)
    {
        if (isset($this->set_breadcrumb)) {
            $this->set_val['bread_crumb'] =  $this->frontBreadCrumb();
        }

        $this->set_val['show_extra_script'] = $this->show_extra_script;
        $this->set_val['header_footer'] = $this->set_header_footer;
        $this->set_val['show_project_model'] = $this->show_project_model;
        extract($this->set_val);
        require_once VIEW_DIR . 'master/header.php';
        require_once $viewScript . '.php';
        require_once VIEW_DIR . 'master/footer.php';
    }


    public function adminPageRender($viewScript)
    {
        if (Session::exists('admin')) {
            $db = new Database();
            $id = Session::get('admin')['uId'];
            $db->query("SELECT adm_screen_name as s_name, adm_profile_pic  as pic FROM " . ADMINS . " WHERE adm_id  = '" . $id . "'");
            $db->stmt->execute();
            $admin_data =  $db->stmt->fetch();

            $db->query("SELECT con_name as cname, con_message as cmessage, con_date as cdate FROM " . CONTACT_US . " WHERE 1 AND con_is_read = 0 ");
            $db->stmt->execute();
            $contact_us_data =  $db->stmt->fetchAll();

            $this->set_val['admin_data'] = $admin_data;
            $this->set_val['recent_contact_us_data'] = $contact_us_data;
        }

        $this->set_val['header_footer'] = $this->set_header_footer;
        $this->set_val['show_data_table'] = $this->show_data_table;
        $this->set_val['show_chart'] = $this->show_chart;
        extract($this->set_val);
        require_once VIEW_DIR . 'admin/header.php';
        require_once $viewScript . '.php';
        require_once VIEW_DIR . 'admin/footer.php';
    }
}
