<h1>Jaunākais, ko varam piedāvāt</h1>
<?php foreach ($last_products as $product): ?>
	<div class="calendar">
		<p class="month"><?=empty($valute) ? 'LVL' : $valute?></p>
		<p class="date"><?=Currency::pretty_format($product->price, $valute)?></p>
	</div>
	<div class="post">
		<h1><a href="<?=URL::site('products/item/'.$product->id)?>"><?=$product->name?></a></h1>
		<?php if(empty($product->image_url)): ?>
		<img align="left" src="<?=URL::site('assets/pic/no_image_available.jpg')?>">
		<?php else: ?>
		<img align="left" src="<?=$product->image_url?>">
	    <?php endif ?>
		<?=Darkmown::parse($product->description)?>
	</div>
<?php endforeach; ?>
