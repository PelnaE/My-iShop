<?php

# Error Class for Kohana Framework 3.2.
# I think, default Kohana Exception app sucks very much! :)
# Use, if you like it. It is possible.

Class Error {
	public function 404(){
		View::factory('errors/404');
	}
	public function 505(){
		$view = 'errors/505';
	}
}