<h2>Jaunākais, ko varam piedāvāt</h2>
<?php foreach ($last_products as $product): ?>
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
				€ <?=Num::format(($product->price/100)/0.70,2)?>
			<?php elseif ($valute == 'USD'): ?>
				$<?=Num::format(($product->price/100)/0.55,2)?>
			<?php endif; ?>
		</span>
	</a>
	</section>
<?php endforeach; ?>
<?php if(count($discounts) >= 1): ?>
	<h2>Šīs nedēļas atlaides!</h2>
	<?php foreach ($discounts as $discount): ?>
		<section class="last-product">
		<a href="<?=URL::site('products/item/'.$discount->id)?>">
	<?php if(empty($discount->image_url)): ?>
		<img align="center" src="<?=URL::site('assets/pic/no_image_available.jpg')?>" alt="No Picture Available" /><br />
	<?php else: ?>
		<img align="center" src="<?=$discount->image_url?>" alt="<?=$discount->name?>" /><br />
	<?php endif; ?>
		<span class="title"><?=$discount->name?></span><br />
		<span class="price">
			<span style="color:red"><?php if($valute == 'LVL' or $valute == NULL): ?>
			<?=Num::format(($discount->price/100)-($discount->price/100)*($discount->discount/100),2)?>  
			<?php elseif($valute == 'EUR'): ?>
			€ <?=Num::format((($discount->price/100)-($discount->price/100)*($discount->discount/100))/0.70,2)?>
			<?php elseif ($valute == 'USD'): ?>
			$<?=Num::format((($discount->price/100)-($discount->price/100)*($discount->discount/100))/0.55,2)?>
			<?php endif; ?></span>
			<del><?php if($valute == 'LVL' or $valute == NULL): ?>
				<?=Num::format($discount->price/100,2)?> Ls
			<?php elseif($valute == 'EUR'): ?>
				€ <?=Num::format(($discount->price/100)/0.70,2)?>
			<?php elseif ($valute == 'USD'): ?>
				$<?=Num::format(($discount->price/100)/0.55,2)?>
			<?php endif; ?></del><br />
			<span style="font-size:16px;color:red"><?=$discount->discount?>% atlaide!</span>
		</span>
	</a>
	</section>
	<?php endforeach; ?>
<?php endif; ?>