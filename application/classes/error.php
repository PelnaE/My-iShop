<?php

# Error Class for Kohana Framework 3.2.
# I think, default Kohana Exception app sucks very much! :)
# Use, if you like it. It is possible.

class Error {
	static function number_404(){
		return View::factory('errors/404');
	}
}