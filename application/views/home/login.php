<h2>Login:</h2>
<form action="<?=URL::site('login/submit/'.Security::token())?>" method="post">
	<input type="text" name="email" /><br />
	<input type="password" name="pass" /><br />
	<label>
		<input type="checkbox" name="cookie" />
		Login with cookies.
	</label>
	<input type="submit" value="OK!" />
</form>
