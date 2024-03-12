<?php
if (defined('ENVIRONMENT')) {
    switch (ENVIRONMENT) {
        case 'DEVELOPMENT':
            $server_url = 'http://' . $_SERVER['HTTP_HOST'] . '/conectai/';
            $server_database = 'connectai';
            $server_user_name = 'root';
            $server_password = '';
            $document_root = $_SERVER['DOCUMENT_ROOT'] . '/conectai';
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            break;
        case 'PRODUCTION':
            $is_https = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on');
            $http = ($is_https == true ? 'https://' : 'http://');
            $server_url = $http . 'mtechlabs.co.in/';
            $server_database = ' mtechlabsco_connectai';
            $server_user_name = 'mtechlabsco_connectai';
            $server_password = 'mtechlabsco@700783';
            $document_root = $_SERVER['DOCUMENT_ROOT'] . '/';
            error_reporting(E_ALL);
            ini_set('display_errors', 0);
            ini_set('display_startup_errors', 0);
            break;
        default:
            exit('The application environment is not set correctly.');
    }
}
define('APP_ROOT', dirname(__FILE__));
ini_set('log_errors', 1);   // Mechanism to log errors
defined('ABSOLUTE_URL') || define('ABSOLUTE_URL', $document_root);
defined('UPLOAD_ROOT') || define('UPLOAD_ROOT', ABSOLUTE_URL . '/public/uploads/');
defined('SITE_URL') || define('SITE_URL', $server_url);
defined('PUBLIC_URL') || define('PUBLIC_URL', $server_url.'public/');
defined('ADMIN_ASSETS_URL') || define('ADMIN_ASSETS_URL', $server_url.'public/admin/assets/');
defined('FRONT_ASSETS_URL') || define('FRONT_ASSETS_URL', $server_url.'public/front/assets/');
defined('SITE_ADMIN_URL') || define('SITE_ADMIN_URL', $server_url.'admin/');
defined('HOST_NAME') || define('HOST_NAME', 'localhost');
defined('DATABASE') || define('DATABASE', $server_database);
defined('USER_NAME') || define('USER_NAME', $server_user_name);
defined('PASSWORD') || define('PASSWORD', $server_password);
defined('APP_DIR') || define('APP_DIR', '../app/');
defined('VIEW_DIR') || define('VIEW_DIR', APP_DIR . 'views/');
defined('ADMIN_VIEW_DIR') || define('ADMIN_VIEW_DIR', APP_DIR . 'views/admin/');
defined('MODEL_DIR') || define('MODEL_DIR', APP_DIR . 'model/');
defined('CONTROLLER_DIR') || define('CONTROLLER_DIR', APP_DIR . 'controllers/');
defined('UPLOAD_URL') || define('UPLOAD_URL', SITE_URL . 'public/uploads/');
// File maximum size, in mb
defined('FILE_MAX_SIZE') || define('FILE_MAX_SIZE', 4);
// Cookie expiry time in seconds
defined('COOKIE_EXPIRY') || define("COOKIE_EXPIRY", 7 * 86400);
