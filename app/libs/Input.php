<?php

/*
 * Input Class
 * Get input data send by user
 * Sanitize input data
 */

class Input
{

	public static function get($item)
	{

		if (isset($_GET[$item])) {
			return self::sanitize($_GET[$item]);
		} else return '';
	}
	public static function files($item)
	{
		if (isset($_FILES[$item])) {
			return $_FILES[$item];
		} else return '';
	}

	public static function post($item)
	{
		if (isset($_POST[$item])) {
			return self::sanitize($_POST[$item]);
		} else return '';
	}

	private static function sanitize($string)
	{
		return htmlentities($string, ENT_QUOTES, 'UTF-8');
	}


	public static function filter_param($data)
	{
		foreach ($data as $key => $value) {
			$value = trim($value);
			$value = stripslashes($value);
			$value = strip_tags($value);
			$value = htmlspecialchars($value);
			$data[$key] = $value;
		}
		return $data;
	}
}
