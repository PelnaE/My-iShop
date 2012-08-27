<?php if(count($products) == 0): ?>
	<div class="post">
		<h1>Product with that ID not exists.</h1>
		We do not have product with that ID!
	</div>
<?php endif; ?>
<?php foreach($products as $product): ?>
	<div class="calendar">
		<?php if ($product->is_discount == 1): ?>
		<p class="month"><?php echo Currency::pretty_format($product->price, $valute, $product->discount); ?></p>
		<p class="date"><del><?php echo Currency::pretty_format($product->price, $valute); ?></del></p>
		<?php else: ?>
		<p class="month">Cena</p>
		<p class="date"><?php echo Currency::pretty_format($product->price, $valute); ?></p>
		<?php endif; ?>
	</div>
<div class="post">
	<h1><?php echo $product->name; ?></h1>
		<?php if(empty($product->image_url)): ?>
		<img align="left" src="<?php echo URL::site('assets/pic/no_image_available.jpg'); ?>" alt="" />
		<?php else : ?>
		<img align="left" src="<?php echo $product->image_url; ?>" alt="" />
	<?php endif; ?>
	<?php echo Darkmown::parse($product->description); ?>
	<?php if ($product->is_discount > 0): ?>
	Ar atlaidi - <?php echo Currency::pretty_format($product->price, $valute, $product->discount); ?>
<?php endif; ?>
<h1>Iegādāties</h1>
Cik daudz <?php echo $product->name; ?> Jums vajag? <input type="number" name="count" min="1" max="<?php echo $product->count; ?>" /><br />
<div class="add-to-cart" data-item-id="<?php echo $product->id; ?>" data-token="<?php echo Security::token(); ?>"></div>
</div>
<?php endforeach; ?>
