<h1><?php echo $category; ?></h1>
<?php if (count($products) == 0) : ?>
	<div class="post">
		<h1>Šobrīd mums nav atbilstošās kategorijas preces!</h1>
		<p>Uzgaidiet kādu dienu vai pat divas!</p>
	</div>
<?php endif; ?>
<?php foreach($products as $product): ?>
<div class="calendar">
	<p class="month">&nbsp;</p>
	<p class="date"><?php echo Currency::pretty_format($product->price, $valute); ?></p>
</div>
<div class="post">
	<h1><?php echo $product->name; ?></h1>
	<?php if(empty($product->image_url)): ?>
		<img align="left" src="<?php echo URL::site('assets/pic/no_image_available.jpg'); ?>" alt="No Picture Available" /><br />
	<?php else: ?>
		<img align="left" src="<?php echo $product->image_url; ?>" alt="<?php echo $product->name; ?>" /><br />
	<?php endif; ?>
	<?php echo Darkmown::parse($product->description); ?>
</div>
<?php endforeach; ?>
