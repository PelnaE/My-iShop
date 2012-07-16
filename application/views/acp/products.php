<?php if(count($products) > 0): ?>
<table width="100%">
	<tr>
	<th></th>
	<th>Nosaukums</th>
	<th>Kategorija</th>
	<th></th>
	</tr>
	<?php foreach($products as $product): ?>
<tr>
<td><?=$product->id?></td>
<td>
	<a href="<?=URL::site('acp/products/item/'.$product->id)?>">
		<?=$product->name?>
	</a>
</td>
<td><?=$product->category?></td>
<td>
	<a href="<?=URL::site('acp/products/delete/'
							.$product->id.'/'.Security::token())?>"
		class="delete">[X]</a>
</td>
</tr>
<?php endforeach; ?>
</table>
<?php else: ?>
<h3>Nothing to found</h3>
<a href="<?=URL::site('acp/products/create')?>">Create A Product</a>
<?php endif; ?>
