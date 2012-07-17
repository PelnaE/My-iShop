<h2>Mans grozs</h2>
<?php if(count($products) == 0): ?>

	<h2>Jūsu grozā vēl nav nevienas preces!</h2>

	<p>Labojiet to, 
		<a href="<?=URL::site('products')?>">
			ieliekot tajā kādu preci un pasūtot to!
		</a>
	</p>

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
		<td><?=$product->name?></td>
		<td><?=$product->count?></td>
	<?php if($product->count > 1):
		$product->price = $product->price/100 * $product->count;?>
		<td>
			<?=Currency::pretty_format($product->price, $valute)?>
		</td>

		<?php else: ?>

		<td>
			<?=Currency::pretty_format($product->price, $valute)?>
		</td>

	<?php endif; ?>
		<td>
			<a href="<?=URL::site('cart/delete/'.$product->id.'/'.Security::token())?>" 
				class="delete">
				[X]
			</a>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?endif?>


	<script>

		$("a.delete").click(function () 
			{ 
				return confirm('Vai tiešām izņemt produktu no groza?') 
			}); 

	</script>