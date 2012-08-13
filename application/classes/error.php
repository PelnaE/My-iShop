<?php

class Error
{
	static function number_404()
	{
		return View::factory('errors/404');
	}
}