<?php

if (! function_exists('hashPassword'))
{
	function hashPassword($password) {
		return password_hash($password, PASSWORD_BCRYPT /**, $params*/);
	}
}

if(!function_exists("logged_in_session")) {
	function logged_in_session()
	{
		$ci =& get_instance();
		return (Object) $ci->session;
	}
}


if(!function_exists("is_logged_in")) {
	function is_logged_in()
	{
		return logged_in_session()->login_status;
	}
}
