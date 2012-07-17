<h2><?=$category?></h2>
<?php if (empty($products)) : ?>
	<h2>Šobrīd mums nav atbilstošās kategorijas preces!</h2>
<?php endif; ?>
<?php foreach($products as $product): ?>
<section class="last-product">
		<a href="<?=URL::site('products/item/'.$product->id)?>">
	<?php if(empty($product->image_url)): ?>
		<img align="center" src="<?=URL::site('assets/pic/no_image_available.jpg')?>" alt="No Picture Available" /><br />
	<?php else: ?>
		<img align="center" src="<?=$product->image_url?>" alt="<?=$product->name?>" /><br />
	<?php endif; ?>
		<span class="title"><?=$product->name?></span><br />
				<span class="price">
			<?=Currency::pretty_format($product->price, $valute)?>
		</span>
	</a>
	</section>
<?php endforeach; ?>