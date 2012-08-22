<h1>Jaunākais, ko varam piedāvāt</h1>
<?php foreach ($last_products as $product): ?>
	<div class="calendar">
		<p class="month"><?php echo empty($valute) ? 'LVL' : $valute; ?></p>
		<p class="date"><?php echo Currency::pretty_format($product->price, $valute)?></p>
	</div>
	<div class="post">
		<h1><a href="<?php echo URL::site('products/item/'.$product->id)?>"><?php echo $product->name; ?></a></h1>
		<?php if(empty($product->image_url)): ?>
		<img align="left" src="<?php echo URL::site('assets/pic/no_image_available.jpg'); ?>">
		<?php else: ?>
		<img align="left" src="<?php echo $product->image_url; ?>">
	    <?php endif ?>
		<?php echo Darkmown::parse($product->description); ?>
	</div>
<?php endforeach; ?>
