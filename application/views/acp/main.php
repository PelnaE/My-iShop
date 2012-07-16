<?php
if(!empty($session)):
?>
<h2>ACP</h2>
<h3>Hi, admin!</h3>
<ul>
<li><a href="<?=URL::site('acp/products/create')?>">Add New Product</a></li>
<li><a href="<?=URL::site('acp/products')?>">Products</a></li>
</ul>
<?php
elseif(!empty($cookie)):
Session::instance()->set('admin',$cookie);
Request::current()->redirect('acp');
else:
?>
<form action="<?=URL::site('acp/sign_up')?>" method="post">
	<input type="text" name="nick" /><br />
	<input type="password" name="pass" /><br />
	<label>
		<input type="checkbox" name="cookie" />
		Login with cookies.
	</label><br />
	<input type="submit" value="Apstiprinu!" />
</form>
<?endif?>
