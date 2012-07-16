<h2><?=$category?></h2>
<?php if(!empty($products)): ?>
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
			<?php if($valute == 'LVL' or $valute == NULL): ?>
				<?=Num::format($product->price/100,2)?> Ls
			<?php elseif($valute == 'EUR'): ?>
				 <?=Num::format(($product->price/100)/0.70,2)?>
			<?php elseif($valute == 'USD'): ?>
				$<?=Num::format(($product->price/100)/0.55,2)?>
			<?php endif; ?>
		</span>
	</a>
	</section>
<?php endforeach; ?>
<?php else: ?>
	<h2>Error 404!</h2>
<?php endif; ?>