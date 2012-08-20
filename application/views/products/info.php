<?php if(!empty($products)): ?>
<?php foreach($products as $product): ?>
<div class="calendar">
	<p class="month">Cena</p>
	<p class="date"><?=Currency::pretty_format($product->price, $valute)?></p>
</div>
<div class="post">
	<h1><?=$product->name?></h1>
		<?php if(empty($product->image_url)): ?>
		<img align="left" src="<?=URL::site('assets/pic/no_image_available.jpg')?>" alt="" />
		<?php else : ?>
		<img align="left" src="<?=$product->image_url?>" alt="" />
	<?php endif; ?>
	<?=Darkmown::parse($product->description)?>
	<?php if ($product->is_discount > 0): ?>
	Ar atlaidi - <?=Currency::pretty_format($product->price, $valute, $product->discount)?>
<?php endif; ?>
<h1>Iegādāties</h1>
Cik daudz <?=$product->name?> Jums vajag? <input type="text" id="count" value="1" /><br />
<div class="add-to-cart" data-item-id="<?=$product->id?>" data-token="<?=Security::token()?>"></div>
</div>
<?php endforeach; ?>
<?php endif; ?>
