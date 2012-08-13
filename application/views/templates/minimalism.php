<! DOCTYPE html>
<html>
	<head>
		<title><?=$name?></title>
		<?php if(!empty($stylesheets)): ?>
			<?php foreach($stylesheets as $stylesheet): ?>
				<link rel="stylesheet"
						href="<?=URL::site('assets/css/'.$stylesheet.'.css')?>" />
			<?php endforeach; ?>
		<?php endif; ?>
		<meta charset="UTF-8" />
		<script src="<?=URL::site('assets/scripts/jquery.js')?>"></script>
		<script type="text/javascript" src="<?=URL::site('assets/scripts/raphael.js')?>"></script>
	</head>
	<body>
		<div class="menu">
			<div class="menu-center">
				<a href="<?=URL::site('.')?>" id="home" title="Sākums">Sākums</a>
				<a href="<?=URL::site('products')?>" title="Preču klāsts">Preces</a>
		<?php $user_cookie = Cookie::get('email');
		$user_session = Session::instance()->get('email');
		if(!empty($user_session)): ?>
				<a href="<?=URL::site('cart')?>" title="Grozs">Grozs</a>
				<a href="<?=URL::site('profile')?>" title="Mans Profils">Profils</a>
				<a href="<?=URL::site('logout')?>">Iziet</a>
		<?php elseif(!empty($user_cookie)):
		Session::instance()->set('email', $user_cookie);
		Request::current()->redirect('.');
		else: ?>
				<a href="<?=URL::site('login')?>">Ienākt</a>
				<a href="<?=URL::site('register')?>">Reģistrācija</a>
		<?php endif; ?>
			</div>
		</div>
		<?php $admin_session = Session::instance()->get('admin');
		$admin_cookie = Cookie::get('admin');
		if(!empty($admin_session)): ?>
		<div class="admin-menu">
			<div class="admin-menu-center">
				<a href="<?=URL::site('acp')?>">Sākums</a>
				<a href="<?=URL::site('acp/products')?>">Preču klāsts</a>
				<a href="<?=URL::site('acp/products/create')?>">Pievienot preci</a>
				<a href="<?=URL::site('acp/categories')?>">Kategorijas</a>
				<a href="<?=URL::site('acp/categories/create')?>">Pievienot kategoriju</a>
				<a href="<?=URL::site('acp/sign_out')?>">Iziet</a>
			</div>
		</div>
		<?php elseif(!empty($admin_cookie)):
		Session::instance()->set('admin', $admin_cookie);
		Request::current()->redirect('.'); endif;?>
		<div id="wrapper">
			<div class="header">
				<h1 class="title"><?=$name?></h1>
				<p class="title">Pie mums vienmēr izdevīgāk!</p>
			</div>
			<div class="content">

				<?php if(!empty($content)): ?>
					<?=$content?>
				<?php else: ?>
				Error!
				<?php endif; ?>

			</div>
		</div>
		<?php if(!empty($scripts)): ?>
		<?php foreach ($scripts as $script): ?>
			<script src="<?=URL::site('assets/scripts/'.$script.'.js')?>"></script>
		<?php endforeach;?>
		<?php endif; ?>
	</body>
</html>
