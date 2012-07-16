<h2>Izveidot kategoriju:</h2>
<form action="<?=URL::site('acp/categories/create')?>/<?=Security::token()?>" method="post">

<table>
	<tr>
		<td width="60%">Nosaukums</td>
		<td><input type="text" name="name" /></td>
	</tr>
	<tr>
		<td>Slug</td>
		<td><input type="text" name="slug" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input style="float:right"type="submit" value="Apstiprinu!"/></td>
	</tr>
</table>

</form>