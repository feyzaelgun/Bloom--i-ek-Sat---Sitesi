<?php include "../../netting/baglan.php";

$product_id = $_GET['product_id'];


$sor = $db->query("SELECT * FROM products where product_id = '$product_id' ");
$cek = $sor->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Bloom</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<!-- FONTS -->
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=DM+Sans:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Inter:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Elsie:100,200,300,400,400italic,500,600,700,700italic,900'>
	<!-- Bootstrap core CSS -->
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<!--CSS -->
	<link rel='stylesheet' href='css/structure.css'>
	<link rel='stylesheet' href='css/flower2.css'> </head>

<body class="product-template-default single single-product woocommerce woocommerce-page style-simple button-custom layout-full-width if-zoom if-border-hide no-shadows header-transparent header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders footer-copy-center mobile-tb-center mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-header-mini mobile-sticky">
	<div id="Wrapper">
		<div id="Header_wrapper">
			<header id="Header">
				<div id="Top_bar">
					<div class="row">
						<div class="column one">
							<div class="top_bar_left clearfix">
								<div class="logo">
									<a id="logo" href="../../index.php" title="BeFlower 2 - Betheme" data-height="60" data-padding="25"><img class="logo-main scale-with-grid" src="images/flower2.png" data-retina="images/retina-flower2.png" data-height="60" alt="flower2" data-no-retina/><img class="logo-sticky scale-with-grid" src="images/flower2.png" data-retina="images/retina-flower2.png" data-height="60" alt="flower2" data-no-retina/><img class="logo-mobile scale-with-grid" src="images/flower2.png" data-retina="images/retina-flower2.png" data-height="60" alt="flower2" data-no-retina/><img class="logo-mobile-sticky scale-with-grid" src="images/flower2.png" data-retina="images/retina-flower2.png" data-height="60" alt="flower2" data-no-retina/></a>
								</div>
								<div class="menu_wrapper">
									<nav id="menu">
										<ul id="menu-main-menu" class="menu menu-main">
											<li class=""> <a href="../../index.php"><span>ANASAYFA</span></a> </li>
											
											<li class="current_page_item"> <a href="shop.php"><span>ÜRÜNLER</span></a> </li>
											<li> <a href="about.php"><span>HAKKIMIZDA</span></a> </li>
											<li> <a href="contact.php"><span>İLETİŞİM</span></a> </li>
											
										</ul>
									</nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a> </div>
							</div>
							<div class="top_bar_right">
								<div class="top_bar_right_wrapper"> <a id="header_cart" href="sepet.php"><i class="icon-cart"></i></a></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div id="Subheader">
				<div class="container">
					<div class="column one">
						<h2 class="title">Çiçeklerimiz</h2> </div>
				</div>
			</div>
		</div>
		<!-- #Content -->
		<div id="Content" class="woocommerce">
			<div class="container">
				<div class="product">
					<div class="row">
						<div class="col-md-6">
							<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4" data-columns="4" style="transition: opacity .25s ease-in-out;">
								<figure class="woocommerce-product-gallery__wrapper">
									<div data-thumb="images/flower2-products-pic5-300x300.jpg" data-thumb-alt="" class="woocommerce-product-gallery__image">
										<a href="images/flower2-products-pic5.jpg"><img width="780" height="780" src="../../<?php echo $cek['product_img'];  ?>" class="wp-post-image" alt="" loading="lazy" title="flower2-products-pic5" data-caption="" data-src="images/flower2-products-pic5.jpg" data-large_image="images/flower2-products-pic5.jpg" data-large_image_width="780" data-large_image_height="780" /></a>
									</div>
								</figure>
							</div>
						</div>
						<div class="summary col-md-6">
							<h1 class="product_title entry-title"><?php echo $cek['product_name'] ?></h1>
							<p class="price"> <span class="woocommerce-Price-amount amount">
															<bdi>
																<span class="woocommerce-Price-currencySymbol">₺</span><del><?php echo $cek['product_price']*1.2 ?></del> </bdi>
								</span> &ndash; <span class="woocommerce-Price-amount amount">
															<bdi>
																<span class="woocommerce-Price-currencySymbol">₺</span><?php echo $cek['product_price'] ?> </bdi>
								</span>
							</p>
							<form class="variations_form cart" action="#" method="post" enctype='multipart/form-data' data-product_id="96" data-product_variations="">
							
								<div class="single_variation_wrap">
									<div class="woocommerce-variation single_variation"></div>
									<div class="woocommerce-variation-add-to-cart variations_button">
										<div class="quantity">
											<label class="screen-reader-text" for="quantity_612363a8a0229">Amet purus non quantity</label>
											<input type="number" id="quantity_612363a8a0229" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" /> </div>
										<button type="submit" class="single_add_to_cart_button button alt"> Sepete ekle</button>
										<input type="hidden" name="add-to-cart" value="96" />
										<input type="hidden" name="product_id" value="96" />
										<input type="hidden" name="variation_id" class="variation_id" value="0" /> </div>
								</div>
							</form>
							<div class="product_meta"> <span class="sku_wrapper">SKU: <span class="sku"><?= $product_id ?></span></span> 

							</div>
						</div>
					</div>
				</div>
				<!-- #product-96 -->
			</div>
		</div>
				<footer id="Footer" class="clearfix">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<hr class="no_line" style="margin:0 auto 100px"> </div>
					<div class="col-md-3">
						<div class="image_frame image_item no_link scale-with-grid alignnone no_border">
							
						</div>
						<hr class="no_line" style="margin: 0 auto 20px auto">
						<p> Bloom
							<br> Kültür Mah,Plevne Bulvarı 
							<br> No:13/C Alsancak Konak, İzmir </p>
					</div>
					<div class="col-md-6">
						<div style="text-align:center;">
							<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
								<div class="image_wrapper"><img class="scale-with-grid" src="images/flower2-footer-icon1.png" alt="flower2-footer-icon1" width="41" height="41"> </div>
							</div>
							<hr class="no_line" style="margin: 0 auto 30px auto">
							<h3>+90 0551 098 92 38</h3>
							<hr class="no_line" style="margin: 0 auto 10px auto">
							<p style="color:#67aa25;"> Herhangi bir yardıma veya tavsiyeye ihtiyacınız varsa bizi arayın</p>
						</div>
					</div>
					<div class="col-md-3">
						<hr class="no_line" style="margin: 0 auto 20px auto">
						<ul style="text-align:right;">
							<li style="margin-bottom:10px;"> <a href="#">FACEBOOK</a><i class="icon-facebook" style="color:#67aa25"></i> </li>
							<li style="margin-bottom:10px;"> <a href="#">X</a><i class="icon-twitter" style="color:#67aa25"></i> </li>
							<li style="margin-bottom:10px;"> <a href="#">INSTAGRAM</a><i class="icon-instagram" style="color:#67aa25"></i> </li>
						</ul>
					</div>
					<div class="col-12">
						<hr class="no_line" style="margin:0 auto 70px"> </div>
				</div>
			</div>
			<div class="footer_copy">
				<div class="container">
					<div class="column one">
						<div class="copyright"> &copy; Bloom<a target="_blank" rel="nofollow" href="https://1.envato.market/9ZxXY"></a> </div>
						<nav id="social-menu" class="menu-footer-container">
							<ul id="menu-footer" class="social-menu">
								<li> <a href="#">Kargolama &#038; İadeler</a> </li>
								<li> <a href="#">Şartlar ve koşullar</a> </li>
								<li> <a href="#">Gizlilik Politikası</a> </li>
								<li> <a href="#">Çerezler</a> </li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</footer>

	</div>
	<div id="Side_slide" class="right dark" data-width="250">
		<div class="close-wrapper"> <a href="#" class="close"><i class="icon-cancel-fine"></i></a> </div>
		<div class="extras"> <a href="#" class="action_button">MY ACCOUNT <i class="icon-right-open"></i></a>
			<div class="extras-wrapper"> <a class="icon cart" id="slide-cart" href="sepet.php"><i class="icon-cart"></i><span id="header-cart-count"></span></a> </div>
		</div>
		<div class="menu_wrapper"></div>
	</div>
	<div id="body_overlay"></div>
	<!-- JS -->
	<script src="../../js/jquery-3.6.0.min.js"></script>
	<script src="../../js/jquery-migrate-3.3.2.js"></script>
	<script src="../../js/mfn.menu.js"></script>
	<script src="../../js/jquery.plugins.js"></script>
	<script src="../../js/jquery.jplayer.min.js"></script>
	<script src="../../js/animations/animations.js"></script>
	<script src="../../js/translate3d.js"></script>
	<script src="../../js/scripts.js"></script>
</body>

</html>