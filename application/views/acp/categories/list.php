<h1>
	<a href="<?php echo URL::site("acp"); ?>">
		Home
	</a> &mdash;
	<a href="<?php echo URL::site("acp/categories"); ?>">
		List Of Categories
	</a> |
	<a href="<?php echo URL::site("acp/categories/create"); ?>">
		Create A Category
	</a>
</h1>
<?php if(!empty($categories)): ?>
	<?php foreach($categories as $category): ?>
		<div class="post">
			<h1><?php echo $category->name; ?></h1>
		</div>
	<?php endforeach; ?>
<?php else: ?>
	<h2>Neviena kategorija nav atrasta!</h2>
<?php endif; ?>
