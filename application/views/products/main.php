<?php if(count($products) > 0): ?>
<h1>Visas veikalā pieejamās preces</h1>
	<?php foreach($products as $product): ?>
	<div class="calendar">
		<p class="month">Cena</p>
		<p class="date"><?php echo Currency::pretty_format($product->price, $valute); ?></p>
	</div>
	<div class="post">
		<h1><a href="<?php echo URL::site('products/item/'.$product->id); ?>"><?php echo $product->name; ?></a></h1>
	<?php if(empty($product->image_url)): ?>
		<img align="left" src="<?php echo URL::site('assets/pic/no_image_available.jpg'); ?>" alt="No Picture Available" /><br />
	<?php else: ?>
		<img align="left" src="<?php echo $product->image_url; ?>" alt="<?php echo $product->name; ?>" /><br />
	<?php endif; ?>
		<?php echo Darkmown::parse($product->description); ?>
	</div>

	<?php endforeach; ?>

<?php else: ?>

	<h2>Pagaidām nekā...</h2>

	<p>Mūsu preču klāstā nav neviena produkta. Varbūt ienāksi nedaudz vēlāk?</p>

<?php endif; ?>
