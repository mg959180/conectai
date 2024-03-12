<?php
function get_controller_name($url)
{
    return str_replace(' ', '', ucwords(str_replace('-', ' ', $url))) . 'Controller';
}

function is_production()
{
    return (ENVIRONMENT == 'PRODUCTION') ? true : false;
}

function redirect($url)
{
    echo "<script>
      window.location.href='$url';
    </script>";
    exit;
}

function check_login($mode = 'login')
{
    if ($mode == 'login') {
        if ((isset($_SESSION['admin']['login']) && $_SESSION['admin']['login'] == true)) {
            echo "<script>
          window.location.href='" . SITE_ADMIN_URL . "';
        </script>";
            exit;
        }
    } else {
        if (!(isset($_SESSION['admin']['login']) && $_SESSION['admin']['login'] == true)) {
            echo "<script>
          window.location.href='" . SITE_ADMIN_URL . 'login' . "';
        </script>";
            exit;
        }
    }
}

function debug_data($data, $die = true, $strict = false)
{
    echo "<pre style='text-align: left;'>";
    if ($strict == false) {
        print_r($data);
    } else {
        var_dump($data);
    }
    echo '</pre>';
    if ($die) {
        die;
    }
}

function alert($type, $msg)
{
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

    echo <<<alert
      <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
        <strong class="me-3">$msg</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    alert;
}


function set_session_alert($type, $msg)
{
    $bs_class = (($type == "success") ? "alert-success" : "alert-danger");
    $msg = "<div class='alert $bs_class alert-dismissible fade show custom-alert' role='alert'>
        <strong class='me-3'>$msg</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    $_SESSION['msg_stack'][] = $msg;
}


function display_alert()
{
    if (isset($_SESSION['msg_stack'])) {
        $msg = $_SESSION['msg_stack'];
        foreach ($msg as $mk => $mv) {
            echo $mv;
        }
        unset($_SESSION['msg_stack']);
    }
}


function response($response_data)
{
    echo json_encode(['sts' => $response_data['sts'], 'type' => $response_data['type'], 'msg' => $response_data['msg'], 'results' => $response_data['results']]);
    die;
}



function debug_results($var, $strict = false)
{
    if ($var != null) {
        if ($strict == false) {
            if (is_array($var) || is_object($var)) {
                echo "<pre style='text-align: left;'>";
                print_r($var);
                echo "</pre>";
            } else {
                echo $var;
            }
        } else {
            if (is_array($var) || is_object($var)) {
                echo "<pre style='text-align: left;'>";
                var_dump($var);
                echo "</pre>";
            } else {
                var_dump($var);
            }
        }
    } else {
        var_dump($var);
    }
}


function change_to_custom_date($date, $df = DATE_USER_FORMAT_SMALL)
{
    if (return_null_on_empty($date) !== null)
        return date($df, strtotime($date));
    else
        return '-';
}

function return_dash_on_empty($val)
{
    return (isset($val) && !empty($val)) ? $val : '-';
}

function return_null_on_empty($val)
{
    return (isset($val) && !empty($val)) ? $val : null;
}

function get_phone_format($val)
{
    if ($val) {
        $phone = explode('##', $val);
        $phone = '+' . $phone[0] . ' ' . $phone[2];
    } else {
        $phone = '-';
    }
    return $phone;
}


function get_client_ip()
{
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


function get_ip_address()
{

    if (isset($_SERVER)) {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_CLIENT_IP'])) {

            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } else {

            $ip = $_SERVER['REMOTE_ADDR'];
        }
    } else {

        if (getenv('HTTP_X_FORWARDED_FOR')) {

            $ip = getenv('HTTP_X_FORWARDED_FOR');
        } else if (getenv('HTTP_CLIENT_IP')) {

            $ip = getenv('HTTP_CLIENT_IP');
        } else {

            $ip = getenv('REMOTE_ADDR');
        }
    }

    return $ip;
}


function sanitize_string_for_module($string)
{

    $string = strtoupper($string);

    $string = str_replace(' ', '_', $string);

    $string = preg_replace('/[^a-zA-Z0-9-]/', '_', $string);

    $string = preg_replace('/-+/', '_', $string);

    if (substr($string, -1) == "_") {

        $string = substr($string, 0, (strlen($string) - 1));
    }

    return $string;
}

function get_phone_in_format($phone_no, $mode = "with_isd_code")
{
    if (empty($phone_no))
        return;
    $phone = explode('##', $phone_no);
    if ($mode == 'with_isd_code') {
        if (!empty($phone[2])) {
            $retval = "+" . $phone[1] . '-' . $phone[2];
        }
    } else if ($mode == 'just_number') {
        $retval = $phone[2];
    } else if ($mode == 'isd_code') {
        $retval = $phone[1];
    }
    return $retval;
}

function get_price_format($number)
{
    $retval = number_format($number, '2', '.', '');
    return $retval;
}

function get_plan_validity_format($start_date, $end_date)
{
    $diff = (date_diff(date_create($start_date), date_create($end_date)));

    $validity = ($diff->y <> 0) ? ($diff->y . ' Year(s)') : '';
    $validity .= ($diff->m <> 0) ? ($diff->m . ' Month(s)') : '';
    $validity .= ($diff->d <> 0) ? (($diff->d + 1) . ' Day(s)') : '';

    return $validity;
}


function generate_user_pin()
{
    $randstr = mt_rand(1001, 9999);
    return $randstr;
}


function get_serial_number($number, $mode = '.')
{
    $retval = $number;
    if (!empty($mode)) {
        $retval = $number . $mode;
    }
    return $retval;
}


function get_discounted_values($amount, $discount)
{

    if (empty($amount) || empty($discount))
        return false;

    $discount_val = ($amount * $discount) / 100;
    $discounted_amount = ($amount - $discount_val);

    return array('discount' => $discount_val, 'final_amount' => $discounted_amount);
}


function thousands_currency_format($num)
{

    if ($num > 1000) {

        $x = round($num);
        $x_number_format = number_format($x);
        $x_array = explode(',', $x_number_format);
        $x_parts = array('k', 'm', 'b', 't');
        $x_count_parts = count($x_array) - 1;
        $x_display = $x;
        $x_display = $x_array[0] . ((int)$x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
        $x_display .= $x_parts[$x_count_parts - 1];

        return $x_display;
    }

    return $num;
}


function generate_random_code($length = 10)
{
    $all_words = strlen(ALLOWED_CHARS);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= ALLOWED_CHARS[rand(0, $all_words - 1)];
    }
    return $random_string;
}

function getOTP()
{
    return  mt_rand(100000, 999999);
}

function uploadImage($image, $folder, $valid_mime = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp', 'image/svg+xml'])
{
    $img_mime = $image['type'];

    if (!in_array($img_mime, $valid_mime)) {
        return response(['sts' => false, 'type' => 'error', 'msg' => 'File Type must be valid', 'results' => null]);
        //invalid image mime or format
    } else if (($image['size'] / (1024 * 1024)) > 2) {
        return response(['sts' => false, 'type' => 'error', 'msg' => 'Image Size Must be below 10 mb', 'results' => null]);
        //invalid image mime or format
    } else {
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $r_name = 'IMG_' . random_int(11111, 99999) . ".$ext";

        $img_path = $folder . $r_name;
        if (move_uploaded_file($image['tmp_name'], $img_path)) {
            return  ['sts' => true, 'type' => 'success', 'msg' => 'Image Upload successfully', 'results' => $r_name];
        } else {
            return response(['sts' => false, 'type' => 'error', 'msg' => 'Failed to upload image', 'results' => null]);
            //invalid image mime or format
        }
    }
}

function deleteImage($image, $folder)
{
    if (unlink($folder . $image)) {
        return true;
    } else {
        return false;
    }
}
