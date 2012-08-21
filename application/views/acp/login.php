<h1>Login</h1>
<form action="<?=URL::site('acp/sign_up/'.Security::token())?>" method="post">
	<input type="text" name="email" /><br />
	<input type="password" name="pass" /><br />
	<label>
		<input type="checkbox" name="cookie" />
		Login with cookies.
	</label><br />
	<input type="submit" value="Apstiprinu!" />
</form>