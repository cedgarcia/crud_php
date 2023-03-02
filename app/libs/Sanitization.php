<?php

class Sanitization
{
	// Remove all characters except letters, digits and !#$%&'*+-=?^_`{|}~@.[]	
	/**
	 * email
	 *
	 * @param  mixed $valid_email
	 * @return void
	 */
	function email($valid_email)
	{
		$clean_email = filter_var($valid_email, FILTER_SANITIZE_EMAIL);
		return $clean_email;
	}
	// URL-encode string, optionally strip or encode special characters.	
	/**
	 * urlEncode
	 *
	 * @param  mixed $url
	 * @return void
	 */
	function urlEncode($url)
	{
		// $sanitizedUrl = filter_var($url, FILTER_SANITIZE_ENCODED);

		// Encode characters and remove all characters with ASCII value > 127
		$sanitizedUrl = filter_var($url, FILTER_SANITIZE_ENCODED, FILTER_FLAG_STRIP_HIGH);
		return $sanitizedUrl;
	}
	
	
	// Remove all HTML tags from a string	
	/**
	 * string
	 *
	 * @param  mixed $str
	 * @return void
	 */
	function string($str)
	{
		$sanitizedStr = filter_var($str, FILTER_SANITIZE_STRING);
		return $sanitizedStr;
	}


}