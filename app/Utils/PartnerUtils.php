<?php

namespace App\Utils;

class PartnerUtils
{
   public static function generateStrongApiKey($length = 45, $add_dashes = false, $available_sets = 'luds'){
		$sets = array();
		if(strpos($available_sets, 'l') !== false)
			$sets[] = 'abcdefghjkmnpqrstuvwxyz';
		if(strpos($available_sets, 'u') !== false)
			$sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
		if(strpos($available_sets, 'd') !== false)
			$sets[] = '23456789';
		if(strpos($available_sets, 's') !== false)
			$sets[] = '!@#$%&*?';
		$all = '';
		$apiKey = '';
		foreach($sets as $set)
		{
			$apiKey .= $set[array_rand(str_split($set))];
			$all .= $set;
		}
		$all = str_split($all);
		for($i = 0; $i < $length - count($sets); $i++)
			$apiKey .= $all[array_rand($all)];
		$apiKey = str_shuffle($apiKey);
		if(!$add_dashes)
			return $apiKey;
		$dash_len = floor(sqrt($length));
		$dash_str = '';
		while(strlen($apiKey) > $dash_len)
		{
			$dash_str .= substr($apiKey, 0, $dash_len) . '-';
			$apiKey = substr($apiKey, $dash_len);
		}
		$dash_str .= $apiKey;
		return $dash_str;
	}
}
