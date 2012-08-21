<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

<!--
 ____________________________________________________________
|                                                            |
|    DESIGN : Jeeremie { http://web-kreation.com }           |
|      DATE : 2008-01-23                                     |
|     EMAIL : webmaster@web-kreation.com                     |
|   VERSION : 2.1                                            |
|  DOWNLOAD : http://web-kreation.com/index.php/freebies     |
|____________________________________________________________|
-->

	<title><?=$name?></title>
	<?php foreach($stylesheets as $stylesheet): ?>
	<link rel="stylesheet" type="text/css" media="screen" href="<?=URL::site('assets/css/'.$stylesheet.'.css')?>"/>
    <script src="<?=URL::site('assets/scripts/jquery.js')?>"></script>
<?php endforeach; ?>
</head>
<body>
    <div id="container">
        <div id="wrapper">

			<div id="sidebar">
				<ul>
					<li id="sb_top">
						<div class="sb_logo">
							<h1><?=$name?></h1>
						</div>
					</li>
					<li>
						<ul class="navlist">
							<li><a href="<?=URL::site('/')?>">Home</a></li>
							<li><a href="<?=URL::site("/products/")?>">Products</a></li>

                            <?php if (Auth::is_user_signed_in() == FALSE): ?>
							<li><a href="<?=URL::site("/register/")?>">Registration</a></li>
                        <?php endif; ?>
						</ul>
					</li>
                    <?php if (Auth::is_user_signed_in() == FALSE): ?>
                    <li class="widget"><h2>Ienākt</h2>
                        <ul>
                            <form method="post" action="<?=URL::site('login/submit/'.Security::token())?>">
                                <input type="text" name="email" /><br />
                                <input type="password" name="pass" /><br />
                                <label>
                                    <input type="checkbox" name="cookie" />
                                    Login with cookies
                                </label><br />
                                <input type="submit" value="Login" />
                            </form>
                        </ul>
                    </li>
                    <?php else: ?>
                    <?php foreach($users as $user): ?>
                    <li class="widget"><h2><?=$user->name?> <?=$user->surname?></h2>
                        <ul>
                            <li><a href="<?=URL::site('/cart/')?>">Cart</a></li>
                            <li><a href="<?=URL::site('logout')?>">LogOut</a></li>
                        </ul>
                    </li>
                    <?php endforeach; ?>
                    <?php endif; ?>

                    <li class="widget"><h2>Kategorijas</h2>
                        <ul>
                        <?php foreach ($categories as $category): ?>
                                <li><a href="<?=URL::site('products/category/'."$category->slug")?>"><?=$category->name?></a></li>
                        <?php endforeach; ?>
                        </ul>
                    </li>
				</ul>
			</div>

			<!-- Top -->
<div id="top">
    <!-- search form -->
    <form method="get" id="searchform" action="">
      <div>
    	<input class="search" type="text" value="" name="s" id="s" />
      </div>
    </form>

    <!--<a href="contact.php" name="Contact"><img src="wp-content/themes/yoghourt/images/contact.jpg"  alt="Contact" /> Contact</a>  -->
</div>
            <div id="content">
            	<div id="intro">
                    <?php foreach($products as $product): ?>
                    <h1><a href="<?=URL::site('products/item/'.$product->id)?>"><?=$product->name?></a></h1>
                    <?php if (empty($product->image_url)): ?>
                        <img height="65px" src="<?=URL::site('assets/pic/no_image_available.jpg')?>" align="left" />
                    <?php else: ?>
                        <img height="65px" src="<?=$product->image_url?>" align="left" />
                    <?php endif ?>
                    Tikai <?=Currency::pretty_format($product->price, $valute, $product->discount)?>!<br />
                    Atlaide - <?=$product->discount?>%
                <?php endforeach; ?>
            	</div>
            	<?=$content?>



            </div> <!-- /content -->
            <?php if (isset($scripts)): ?>
            <?php foreach($scripts as $script): ?>
            <script type="text/javascript" src="<?=URL::site('assets/scripts/'. $script.'.js')?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

            <div id="footer">
                <div class="contentfoot">
                    <!-- Back to top button -->
					<div class="backtotop"><a href="#container" title="Back to top">&nbsp;</a></div>


                    <!-- To use this template free you must keep the link below-->
                    Template design by <a href="http://web-kreation.com">Web-Kreation</a>
                </div> <!-- /contentfoot -->


            </div> <!-- /footer -->

        <br class="endOfSection" />
        </div> <!-- /wrapper -->

    </div> <!-- /contain -->

</body>
</html>
