<?php

class Auth
{
	static function is_admin_signed_in()
	{
		$user_session = Session::instance()->get('admin');
		$user_cookie  = Cookie::get('admin');

		if ($user_cookie && !$user_session) {
			Session::set('admin', $user_cookie);
			return $user_cookie;

		} else if ($user_session) {
			return $user_session;
		}

		return false;

	}
	static function is_user_signed_in()
	{
		$session = Session::instance()->get('email');
		$cookie  = Cookie::get('email');
		if ($cookie && !$session) {
			Session::set('email', $cookie);
			return $cookie;

		} else if ($session) {
			return $session;
		}

		return false;
	}
}
