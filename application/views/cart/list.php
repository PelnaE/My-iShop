<?php if(count($products) == 0): ?>

<div class="post">
	<h1>Jūsu grozā vēl nav nevienas preces.</h1>
	<p class="notfound">To varat labot, iegādājoties kādu preci!</p>
</div>

<?php else:?>

<table border="0">
	<tr>
		<th>Nosaukums</th>
		<th>Skaits</th>
		<th>Cena</th>
		<th>Opcijas</th>
	</tr>
<?php foreach($products as $product): ?>
	<tr>
		<td><?php echo $product->name; ?></td>
		<td><?php echo $product->count; ?></td>
	<?php if($product->count > 1): ?>
		<td>
			<?php echo Currency::pretty_format($product->price * $product->count, $valute, $product->discount); ?>
		</td>

		<?php else: ?>

		<td>
			<?php echo Currency::pretty_format($product->price, $valute, $product->discount); ?>
		</td>

	<?php endif; ?>
		<td>
			<a href="<?php echo URL::site('cart/delete/'.$product->id.'/'.Security::token()); ?>"
				class="delete">
				[X]
			</a>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>


	<script>

		$("a.delete").click(function ()
			{
				return confirm('Vai tiešām izņemt produktu no groza?');
			});

	</script>
