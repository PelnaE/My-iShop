<h1>
	<a href="<?php echo URL::site("acp"); ?>">
		Home
	</a> &mdash;
	<a href="<?php echo URL::site("acp/products/create"); ?>">
		Create Product
	</a> |
	<a href="<?php echo URL::site("acp/products"); ?>">
		List of Products
	</a>
</h1>
<form action="<?php echo URL::site('acp/products/create'); ?>" method="post">
	<input type="hidden" name="csrf_security" value="<?php echo Security::token(); ?>" />
	<table>
	<tr><td>Nosaukums</td><td><input type="text" name="name" /></td></tr>
	<tr><td>Kategorija</td>
		<td><select name="category">
			<?php foreach ($categories as $category): ?>
				<option value="<?php echo $category->slug; ?>"><?php echo $category->name; ?></option>
			<?php endforeach; ?>
			</select></td></tr>
	<tr><td>Apraksts</td><td><textarea cols="45" rows="10"name="description"></textarea></td></tr>
	<tr><td>Cena</td><td><input type="text" name="price" /></td></tr>
	<tr><td>Valūta</td><td>
		<select name="valute">
		<option value="LVL" selected="selected">Latvijas Lati</option>
		<option value="EUR">Euro</option>
		<option value="USD">United States Dollar</option>
		</select>
	</td></tr>
	<tr><td>Attēla adrese</td><td><input type="text" name="img_url" /></td></tr>
	<tr><td>Skaits</td><td><input type="text" name="count" /></td></tr>
	<tr><td></td><td><input type="submit" value="Apstiprinu!" /></td></tr>
	</table>
</form>
