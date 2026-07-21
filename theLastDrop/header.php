<?php
$is_basket_or_checkout = is_page_template('basket.php') || is_page_template('checkout.php');
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Last Drop Cobh | Restaurant & Bar in Cobh, Co. Cork</title>
	<meta name="description"
		content="The Last Drop Cobh is a restaurant and bar in the heart of Cobh, Co. Cork, serving Irish food, drinks and cocktails in a welcoming waterfront setting. Book a table online.">
	<!-- TODO -->
	<link rel="stylesheet" href="https://use.typekit.net/xtp7lfs.css">
	<link rel="stylesheet" type="text/css"
		href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />


	<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>

	<!-- TablePath  -->
	<script async src="https://bookings.tablepath.com/js/dist/widget.min.js"></script>

	<!-- <script>
		window.addEventListener("load", function () {
			window.cookieconsent.initialise({
				"palette": {
					"popup": {
						"background": "#252e39"
					},
					"button": {
						"background": "transparent",
						"text": "#14a7d0",
						"border": "#14a7d0"
					}
				}
			})
		});
	</script> -->

	<!-- Google Tag Manager -->
	<script>(function (w, d, s, l, i) {
			w[l] = w[l] || []; w[l].push({
				'gtm.start':
					new Date().getTime(), event: 'gtm.js'
			}); var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
					'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-M9QWV5Z8');</script>
	<!-- End Google Tag Manager -->

	<!-- Slick Slider - Carousel -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

	<?php wp_head(); ?>
</head>
<?php // https://cookieconsent.osano.com/download/ 
?>

<body <?php body_class() ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9QWV5Z8" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<!-- Desktop Header (Live Site - Do Not Modify) -->
	<div class="d-none d-lg-block">
		<div class="top-bar">
			<div class="container d-flex justify-content-center align-items-center gap-5">
				<a href="https://thelastdropcobh.com/menu/" class="btn btn-gold"><img
						src="<?php echo bloginfo('template_directory'); ?>/images/icons/menu-new.svg" alt="menu"> Menu
				</a>
				<a href="https://bookings.tablepath.com/l2fx9d/the-last-drop-reservations" tppw-id="l2fx9d"
					tppw-code="the-last-drop-reservations" class="btn btn-gold"> <img
						src="<?php echo bloginfo('template_directory'); ?>/images/icons/reservations.svg" alt="table"
						style="width: 15px;"> Reservations
				</a>
			</div>
		</div>
		<header id="header" class="site-homepage <?php if ($is_basket_or_checkout)
			echo 'basket-header'; ?>" <?php if ($is_basket_or_checkout)
				  echo 'style="background-color: #E3E1D5;"'; ?>>
			<div class="container content">
				<a href="https://thelastdropcobh.com/site-homepage/" class="logo">
					<img src="<?php echo $is_basket_or_checkout ? 'https://thelastdropcobh.com/wp-content/uploads/2026/06/TLD-Cobh-basket.png' : get_template_directory_uri() . '/images/logo-horizontal.png'; ?>"
						alt="logo">
				</a>

				<nav class="nav-closed <?php if ($is_basket_or_checkout)
					echo 'basket-nav'; ?>">
					<a href="https://thelastdropcobh.com/site-homepage/" class="img-container logo-mobile">
						<img src="<?php echo $is_basket_or_checkout ? 'https://thelastdropcobh.com/wp-content/uploads/2026/06/TLD-Cobh-basket.png' : get_template_directory_uri() . '/images/logo-horizontal.png'; ?>"
							alt="logo">
					</a>

					<?php wp_nav_menu(array('theme_location' => 'header_nav', 'container_id' => 'header_nav')); ?>
					<a href="https://bookings.tablepath.com/l2fx9d/the-last-drop-reservations" tppw-id="l2fx9d"
						tppw-code="the-last-drop-reservations" class="header-reservatio-item">Reservations</a>
					<div class="header-actions">
						<div class="header-icons">
							<a href="https://www.instagram.com/thelastdropcobh/" aria-label="Instagram" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/instagram.png"
									alt="instagram">
							</a>
							<a href="https://www.facebook.com/people/The-Last-Drop-Cobh/61587506886679/"
								aria-label="Facebook" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook.png"
									alt="facebook">
							</a>
							<a href="https://maps.app.goo.gl/FMYtyNBKJryeoqHv7" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/map-marker.png"
									alt="map">
							</a>
							<a href="tel:+353214718282">
								<img src="<?php echo bloginfo('template_directory'); ?>/images/icons/phone.svg"
									alt="phone">
							</a>
						</div>
						<!-- <div class="header-buttons">
							<a href="https://thelastdropcobh.com/find-us/" class="btn btn-outline-gold">Find us</a>
							<script async src="https://bookings.tablepath.com/js/dist/widget.min.js"></script><a
								href="https://bookings.tablepath.com/l2fx9d/the-last-drop-reservations" tppw-id="l2fx9d"
								tppw-code="the-last-drop-reservations" class="btn btn-gold">Book a Table</a>

						</div> -->
					</div>
				</nav>

				<div class="mobile-nav-button">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</div>
			</div>
		</header>
	</div>

	<!-- Mobile Header (Newly Added) -->
	<div class="d-block d-lg-none <?php if ($is_basket_or_checkout)
		echo 'basket-mobile-header'; ?>">
		<div class="mobile-announcement-bar">
			<div class="container">
				<div class="row align-items-center">
					<!-- <div class="col-8">
						<h5 class="laima-font text-white mb-0">The Last Drop is Now Open!</h5>
					</div> -->
					<div class="col-12 text-center">
						<a href="https://thelastdropcobh.com/menu/" class="btn btn-gold">
							<img src="<?php echo bloginfo('template_directory'); ?>/images/icons/menu-new.svg"
								alt="menu" style="width: 15px;"> Menu
						</a>
						<a href="https://bookings.tablepath.com/l2fx9d/the-last-drop-reservations" tppw-id="l2fx9d"
							tppw-code="the-last-drop-reservations" class="btn btn-gold">
							<img src="<?php echo bloginfo('template_directory'); ?>/images/icons/reservations.svg"
								alt="table" style="width: 15px;"> Reservations
						</a>
					</div>
				</div>
			</div>
		</div>

		<header class="mobile-nav-bar">
			<div class="container d-flex justify-content-between align-items-center py-3">
				<div class="mobile-menu-trigger">
					<img src="<?php echo bloginfo('template_directory'); ?>/images/icons/Menu.svg" alt="Menu"
						width="30">
				</div>
				<a href="https://thelastdropcobh.com/site-homepage/" class="mobile-logo">
					<img src="<?php echo $is_basket_or_checkout ? 'https://thelastdropcobh.com/wp-content/uploads/2026/06/TLD-Cobh-basket.png' : get_template_directory_uri() . '/images/logo-horizontal.png'; ?>"
						alt="logo" width="180">
				</a>
				<div class="mobile-phone-link">
					<a href="tel:+353214718282">
						<img src="<?php echo bloginfo('template_directory'); ?>/images/icons/phone.svg" alt="phone"
							width="24">
					</a>
				</div>
			</div>
		</header>
	</div>

	<!-- Mobile Menu Overlay -->
	<div class="mobile-nav-overlay d-lg-none" id="mobile-overlay">
		<div class="overlay-header container d-flex justify-content-between align-items-center py-3">
			<div class="overlay-close-trigger">
				<img src="<?php echo bloginfo('template_directory'); ?>/images/icons/Menu.svg" alt="Close Menu"
					width="30">
			</div>
			<div class="overlay-logo">
				<img src="<?php echo get_template_directory_uri() . '/images/logo-horizontal.png'; ?>" alt="logo"
					width="180">
			</div>
			<div class="overlay-phone">
				<a href="tel:+353214718282">
					<img src="<?php echo bloginfo('template_directory'); ?>/images/icons/phone.svg" alt="phone"
						width="24">
				</a>
			</div>
		</div>

		<div class="overlay-content text-center">
			<ul class="mobile-menu-list list-unstyled">
				<li><a href="https://thelastdropcobh.com/our-story/">Our Story</a></li>
				<li><a href="https://thelastdropcobh.com/menu/">Menu</a></li>
				<li><a href="https://thelastdropcobh.com/discover-cobh/">Discover Cobh</a></li>
				<li><a href="https://thelastdropcobh.com/contact-us/">Contact Us</a></li>
				<li><a href="https://thelastdropcobh.com/find-us/">Find us</a></li>
				<li>
					<a href="https://bookings.tablepath.com/l2fx9d/the-last-drop-reservations" tppw-id="l2fx9d"
						tppw-code="the-last-drop-reservations">Reservations</a>
				</li>
			</ul>
			<div class="mobile-icons">
				<a href="https://www.instagram.com/thelastdropcobh/" aria-label="Instagram" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icons/instagram.png" alt="instagram">
				</a>
				<a href="https://www.facebook.com/people/The-Last-Drop-Cobh/61587506886679/" aria-label="Facebook"
					target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook.png" alt="facebook">
				</a>
				<a href="https://maps.app.goo.gl/FMYtyNBKJryeoqHv7" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icons/map-marker.png" alt="map">
				</a>
				<!-- <a href="tel:+353214718282">
					<img src="<?php echo bloginfo('template_directory'); ?>/images/icons/phone.svg" alt="phone">
				</a> -->
			</div>
		</div>

		<div class="overlay-footer text-center w-100 pb-5">
			<div class="d-flex justify-content-center gap-4">
				<a href="https://thelastdropcobh.com/privacy-policy-2/" class="text-white text-decoration-none"
					style="font-size: 1.2rem;">Privacy Policy</a>
				<a href="https://thelastdropcobh.com/privacy-policy-2/" class="text-white text-decoration-none"
					style="font-size: 1.2rem;">Cookie Policy</a>
			</div>
		</div>
	</div>

	<div id="wrapper">
		<!-- <div class="header-spacing"></div> -->