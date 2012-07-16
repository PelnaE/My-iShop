<?php if(!empty($categories)): ?>
	<?php foreach($categories as $category): ?>
		<div class="category">
			<?=$category->name?>
		</div>
	<?php endforeach; ?>
<?php else: ?>
	<h2>Neviena kategorija nav atrasta!</h2>
<?php endif; ?>