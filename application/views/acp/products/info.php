<?php foreach($products as $product): ?>
	<form action="<?=URL::site('acp/products/item/'.$product->id.'/'.Security::token())?>" method="post">
	<table>
		<tr>
			<th>Nosaukums</th>
			<td><input type="text" name="name" value="<?=$product->name?>" /></td>
		</tr>
		<tr>
			<th>Cena (Bez atlaides)</th>
			<td><input type="text" name="price" value="<?=Num::format($product->price/100,2)?>" /></td>
		</tr>
<?php if($product->is_discount == 1): ?>
		<tr>
			<th>Cena (Ar atlaidi)</th>
			<td><?=Num::format(($product->price/100)-($product->price/100)*($product->discount/100),2)?></td>
		</tr>
		<tr>
			<th>Atlaide <input checked="checked" type="checkbox" name="is_discount" /></th>
			<td>
				
				<input style="width:95%" type="text" name="discount" value="<?=$product->discount?>"/>%
			</td>
		</tr>
<?php else: ?>
		<tr>
			<th>Atlaide <input type="checkbox" name="is_discount" /></th>
			<td>
				
				<input style="width:95%" type="text" name="discount" />%
			</td>
		</tr>
<?php endif; ?>
		<tr>
			<td>Attēla adrese</td>
			<td><input type="text" name="img_url" value="<?=$product->image_url?>" /></td>
		</tr>
		<tr>
			<th>Paskaidrojums</th>
			<td><textarea name="description" id="" cols="50" rows="10"><?=$product->description?></textarea></td>
		</tr>
		<tr>
			<th></th>
			<td><input style="float:right" type="submit" value="Apstiprinu!" /></td>
		</tr>
	</table>
</form>
<?php endforeach; ?>