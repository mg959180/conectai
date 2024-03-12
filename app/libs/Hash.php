<?php

/*
 * Hash Class
 * for encrypt and decrypt Sanitize input data
 */

class Hash
{

	private static $_options = array(
		'cost' 	=> 11
	);

	public static function make($string)
	{
		return password_hash($string, PASSWORD_BCRYPT, self::$_options);
	}

	public static function encrypt($string)
	{
		return strtr(base64_encode($string), '+/=', '-_-');
	}

	public static function decrypt($string)
	{
		return base64_decode(strtr($string, '-_-', '+/='));
	}


	public static function check($string, $hash)
	{
		return password_verify($string, $hash);
	}

	public static function unique($length = 32)
	{

		$keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$str = '';
		$max = mb_strlen($keyspace, '8bit') - 1;

		for ($i = 0; $i < $length; ++$i) {
			$str .= $keyspace[random_int(0, $max)];
		}

		return $str;
	}
}
