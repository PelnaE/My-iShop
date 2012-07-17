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
}