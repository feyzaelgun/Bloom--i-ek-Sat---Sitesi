<?php
session_start();
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

<body class="page style-simple button-custom layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-transparent header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders footer-copy-center mobile-tb-center mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-header-mini mobile-sticky">
	<div id="Wrapper">
		<div id="Header_wrapper">
			<header id="Header">
				<div id="Top_bar">
					<div class="row">
						<div class="column one">
							<div class="top_bar_left clearfix">
								<div class="logo">
									<a id="logo" href="../../index.php" title="BeFlower 2 - Betheme" data-height="60" data-padding="25"><img class="logo-main scale-with-grid" src="images/flower2.png" data-retina="images/retina-flower2.png" data-height="60" alt="flower2"><img class="logo-sticky scale-with-grid" src="images/flower2.png" data-retina="images/retina-flower2.png" data-height="60" alt="flower2"><img class="logo-mobile scale-with-grid" src="images/flower2.png" data-retina="images/retina-flower2.png" data-height="60" alt="flower2"><img class="logo-mobile-sticky scale-with-grid" src="images/flower2.png" data-retina="images/retina-flower2.png" data-height="60" alt="flower2"></a>
								</div>
								<div class="menu_wrapper">
									<nav id="menu">
										<ul id="menu-main-menu" class="menu menu-main">
											<li class=" page_item "> <a href="../../index.php"><span>ANASAYFA</span></a> </li>
											
											<li> <a href="shop.php"><span>ÜRÜNLER</span></a> </li>
											<li> <a href="about.php"><span>HAKKIMIZDA</span></a> </li>
											<li class="page_item Call"> <a href="contact.php"><span>İLETİŞİM</span></a> </li>
											
										</ul>
									</nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a> </div>
							</div>
							<div class="top_bar_right">
							<div class="top_bar_right_wrapper"> <a id="header_cart" href="#"><i class="icon-cart"></i><span id="header-cart-count">0</span></a></div>

							</div>
						</div>
					</div>
				</div>
			</header>
		</div>
		<div id="Content">
			<div class="section mcb-section bg-cover" style="padding-top:250px;background-color:#134845;background-image:url(images/flower2-section-bg1.png);background-repeat:no-repeat;background-position:center top">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h1 style="color:#FFF;">Sepet</h1> </div>
						<div class="col-12">
							<hr class="no_line" style="margin:0 auto 40px"> </div>
					</div>
					<div class="row" style="padding:100px 5% 60px;    border-radius: 15px;background-color:#fff;background-image:url(images/flower2-footer-bg.png);background-repeat:no-repeat;background-position:left center">
					



    <?php if (!empty($_SESSION['cart'])): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Ürün Resmi</th>
                    <th>Ürün Adı</th>
                    <th>Adet</th>
                    <th>Fiyat</th>
                    <th>Toplam</th>
                    <th>Sil</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($_SESSION['cart'] as $id => $item): 
                    $subtotal = $item['price'] * $item['quantity'];
                    $total += $subtotal;
                ?>
                <tr>
                    <td><img src="../../<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>" width="50"></td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td><?php echo $item['price']; ?> &#36;</td>
                    <td><?php echo $subtotal; ?> &#36;</td>
                    <td>
                        <form method="POST" action="sepet_sil.php">
                            <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                            <button type="submit" class="btn btn-danger btn-sm">Sil</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-end"><strong>Toplam:</strong></td>
                    <td colspan="2"><?php echo $total; ?> &#36;</td>
                </tr>
            </tfoot>
        </table>


    <?php else: ?>
        <p>Sepetiniz boş!</p>
    <?php endif; ?>


					</div>
				</div>
			</div>
			<div class="section" style="padding-bottom:60px;background-color:#134845">
				<div class="container">
					<div class="row">
					</div>
				</div>
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
						<p> Envato
							<br> Level 13, 2 Elizabeth,
							<br> Victoria 3000, Australia </p>
					</div>
					<div class="col-md-6">
						<div style="text-align:center;">
							<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
								<div class="image_wrapper"><img class="scale-with-grid" src="images/flower2-footer-icon1.png" alt="flower2-footer-icon1" width="41" height="41"> </div>
							</div>
							<hr class="no_line" style="margin: 0 auto 30px auto">
							<h3>+61 (0) 3 8376 6284</h3>
							<hr class="no_line" style="margin: 0 auto 10px auto">
							<p style="color:#67aa25;"> Call us if you need any help or advice </p>
						</div>
					</div>
					<div class="col-md-3">
						<hr class="no_line" style="margin: 0 auto 20px auto">
						<ul style="text-align:right;">
							<li style="margin-bottom:10px;"> <a href="#">FACEBOOK</a><i class="icon-facebook" style="color:#67aa25"></i> </li>
							<li style="margin-bottom:10px;"> <a href="#">TWITTER</a><i class="icon-twitter" style="color:#67aa25"></i> </li>
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
						<div class="copyright"> &copy; 2021 - BeTheme. Muffin group - HTML by <a target="_blank" rel="nofollow" href="https://1.envato.market/9ZxXY">BeantownThemes</a> </div>
						<nav id="social-menu" class="menu-footer-container">
							<ul id="menu-footer" class="social-menu">
								<li> <a href="#">Shipping &#038; Returns</a> </li>
								<li> <a href="#">Terms and conditions</a> </li>
								<li> <a href="#">Privacy policy</a> </li>
								<li> <a href="#">Cookies</a> </li>
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
	<script src="../../phpmailer/form.js"></script>
</body>

</html>