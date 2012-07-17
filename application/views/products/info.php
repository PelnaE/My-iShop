<?php if(!empty($products)): ?>
<?php foreach($products as $product): ?>
<table>
	<tr>
		<th>Nosaukums</th>
		<td><?=$product->name?></td>
	</tr>
	<tr>
		<th></th>
		<?php if(empty($product->image_url)): ?>
		<td><img src="<?=URL::site('assets/pic/no_image_available.jpg')?>" alt="" /></td>
		<?php else : ?>
		<td><img src="<?=$product->image_url?>" alt=""></td>
	<?php endif; ?>
	</tr>
	<tr>
		<th>Apraksts</th>
		<td><?=Darkmown::parse($product->description)?></td>
	</tr>
	<tr>
		<th>Cena</th>
		<td>
			<?php if ($product->is_discount == 1) :?>
			<span style="color:red"><?=Currency::pretty_format($product->price, $valute, $product->discount)?></span>
			<del><?=Currency::pretty_format($product->price, $valute)?></del>
			<br />
			<span style="font-size:16px;color:red"><?=$product->discount?>% atlaide!</span>
			<?php else: ?>
				<?=Currency::pretty_format($product->price, $valute)?>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<th>Skaits</th>
		<td><input type="text" id="count" value="1" /></td>
	</tr>
	<tr>
		<th></th>
		<td><div class="add-to-cart" data-item-id="<?=$product->id?>" data-token="<?=Security::token()?>"></div></td>
	</tr>
</table>
<?php endforeach; ?>
<?php endif; ?>