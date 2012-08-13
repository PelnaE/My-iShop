<h2>Reģistrācija:</h2>
<p class="warning">Lūdzam aizpildīt visus lauciņus!</p>
<form action="<?=URL::site('register')?>" method="post">
	<input type="hidden" name="token" value="<?=Security::token()?>" />
<table border="0">
	<tr><td width="60%">E-pasts</td><td> <input type="text" name="email" /><br /></td></tr>
	<tr><td width="60%">Vārds</td><td><input type="text" name="name" /><br /></td></tr>
	<tr><td>Uzvārds</td><td><input type="text" name="surname" /></td></tr>
	<tr><td width="60%">Parole</td><td><input type="password" name="pass" /><br /></td></tr>
	<tr><td>Parole vēlreiz:</td><td><input type="password" name="pass_confirm" /></td></table>
<label>
		<input type="checkbox" name="checkbox" /></td><td> Esmu iepazinies/usies ar
			<a href="<?=URL::site('terms')?>" title="Terms">noteikumiem</a>.
	</label><br />
	<p class="warning">Lūdzu, pirms spiest pogu "Apstiprinu!", pārbaudiet, vai
	neesat atstājusi/is tukšus lauciņus!</p><br />
<input type="submit" value="Apstiprinu!" />
</form>
