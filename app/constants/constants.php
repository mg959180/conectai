<?php

defined('GENDER') || define('GENDER', ['m' => 'Male', 'f' => 'Female', 'o' => 'Other']);

defined('DATE_FORMAT') || define('DATE_FORMAT', 'd/m/Y');
defined('DATE_FORMAT_SCRIPT') || define('DATE_FORMAT_SCRIPT', 'Y/m/d');
defined('DATE_USER_FORMAT') || define('DATE_USER_FORMAT', 'd F, Y');
defined('DATE_USER_FORMAT_SMALL') || define('DATE_USER_FORMAT_SMALL', 'd M, Y');
defined('DATE_USER_FORMAT_SMALL_WITHOUT_COMMA') || define('DATE_USER_FORMAT_SMALL_WITHOUT_COMMA', 'd M Y');
defined('DATE_TIME_FORMAT') || define('DATE_TIME_FORMAT', 'd/m/Y H:i');
defined('DATE_TIME_FORMAT_LONG') || define('DATE_TIME_FORMAT_LONG', 'd M, Y H:i:s');
defined('DATE_TIME_FORMAT_LONG_A') || define('DATE_TIME_FORMAT_LONG_A', 'd M, Y h:i A');
defined('DATE_TIME_FORMAT_LONG_A_WEEK') || define('DATE_TIME_FORMAT_LONG_A_WEEK', 'D d M, Y h:i A');
defined('SYSTEM_DATE_TIME') || define('SYSTEM_DATE_TIME', 'Y-m-d');
defined('SYSTEM_DATE_TIME_FORMAT_LONG') || define('SYSTEM_DATE_TIME_FORMAT_LONG', 'Y-m-d H:i:s');
defined('DATE_USER_FORMAT_SHORT') || define('DATE_USER_FORMAT_SHORT', 'M, Y');
defined('DATE_TIME_FORMAT_MAIL_TIME') || define('DATE_TIME_FORMAT_MAIL_TIME', 'h:i A');

defined('BIRTHDAY_MONTHS') || define('BIRTHDAY_MONTHS', ["1" => "January", "2" => "February", "3" => "March", "4" => "April", "5" => "May", "6" => "June", "7" => "July", "8" => "August", "9" => "September", "10" => "October", "11" => "November", "12" => "December"]);
defined('BIRTHDAY_MONTHS_SHORT') || define('BIRTHDAY_MONTHS_SHORT', ["1" => "Jan", "2" => "Feb", "3" => "Mar", "4" => "Apr", "5" => "May", "6" => "Jun", "7" => "Jul", "8" => "Aug", "9" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec"]);
defined('BIRTHDAY_DATES') || define('BIRTHDAY_DATES', ["1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "10" => "10", "11" => "11", "12" => "12", "13" => "13", "14" => "14", "15" => "15", "16" => "16", "17" => "17", "18" => "18", "19" => "19", "20" => "20", "21" => "21", "22" => "22", "23" => "23", "24" => "24", "25" => "25", "26" => "26", "27" => "27", "28" => "28", "29" => "29", "30" => "30", "31" => "31"]);


defined('WEEK_DAYS') || define('WEEK_DAYS', [
    'monday' => 'Monday',
    'tuesday' => 'Tuesday',
    'wednesday' => 'Wednesday',
    'thursday' => 'Thursday',
    'friday' => 'Friday',
    'saturday' => 'Saturday',
    'sunday' => 'Sunday'
]);

defined('ALLOWED_CHARS') ||  define('ALLOWED_CHARS', '123456789aeubcdfghjkmnpqrstvwxyz');


// Allowed extensions
define('FILE_EXT', array(
	'jpg',
	'jpeg',
	'png',
));
