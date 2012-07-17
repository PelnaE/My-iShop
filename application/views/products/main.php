<h2>Meklēt preces pēc kategorijām</h2>
<?php foreach ($categories as $category): ?>
	<ul>
	 	<li><a href="<?=URL::site('products/category/'."$category->slug")?>"><?=$category->name?></a></li>
	 </ul> 
<?php endforeach; ?>

<?php if(count($products) > 0): ?>
<h2>Visas veikalā pieejamās preces</h2>
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

<?php else: ?>

	<h2>Pagaidām nekā...</h2>

	<p>Mūsu preču klāstā nav neviena produkta. Varbūt ienāksi nedaudz vēlāk?</p>

<?php endif; ?>
