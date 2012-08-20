<h2>Login:</h2>
<form action="<?=URL::site('acp/sign_up')?>" method="post">
	<input type="text" name="nick" /><br />
	<input type="password" name="pass" /><br />
	<label>
		<input type="checkbox" name="cookie" />
		Login with cookies.
	</label><br />
	<input type="submit" value="Apstiprinu!" />
</form>