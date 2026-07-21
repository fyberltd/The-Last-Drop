</div>
<?php // end of wrapper for sticky footer
?>

<footer id="footer">
	<div class="container">
		<section class="logo_section">
			<a href="https://thelastdropcobh.com/site-homepage/" class="logo">
				<img src="<?php echo bloginfo('template_directory'); ?>/images/logo-horizontal.png"
					alt="The Last Drop logo">
			</a>
		</section>

		<section class="email_marketing_section">
			<div class="row">
				<div class="col-lg-6">
					<?php if (is_page('shop')): ?>
						<div class="content_wrap">
							<p class="description">Our shop page is coming soon, and with it a collection of The Last Drop
								merchandise designed to bring a little of the experience home.</p>
							<p class="description">Join our mailing list to be the first to know when it is ready to
								explore.</p>
							<p class="privacy_hint">Until then, gift vouchers will be available from the 22nd April and can
								be purchased directly with the help of a member of our team.</p>
						</div>
					<?php else: ?>
						<div class="content_wrap">
							<h2>Let us drop into your inbox</h2>
							<!-- <p class="description">Sign up with your email to receive news and updates from The Last Drop.
							</p> -->
							<p class="description">Receive special offers and news from the Last Drop</p>
							<div class="form_wrap">
								<div>
									<?php echo do_shortcode('[contact-form-7 id="c49fd22" title="Footer Email Subscription"]'); ?>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<div class="col-lg-3"></div>
				<div class="col-lg-3 footer-menu">
					<h5>Pages</h5>
					<ul>
						<li><a href="https://thelastdropcobh.com/our-story/">Our Story</a></li>
						<li><a href="https://thelastdropcobh.com/menu/">Menu</a></li>
						<li><a href="https://thelastdropcobh.com/discover-cobh/">Discover Cobh</a></li>
						<li><a href="https://thelastdropcobh.com/contact/">Contact Us</a></li>
						<li><a href="https://thelastdropcobh.com/find-us/">Find Us</a></li>
					</ul>
				</div>
				<!-- <div class="col-lg-6">
					<div class="form_wrap">
						<div>
							<?php echo do_shortcode('[contact-form-7 id="c49fd22" title="Footer Email Subscription"]'); ?>
						</div>
					</div>
				</div> -->
			</div>
		</section>

		<section class="bottom_section">
			<div class="row align-items-end">
				<div class="col-lg-4">
					<div class="social_contact">
						<div class="social_links">
							<a href="https://www.instagram.com/thelastdropcobh/" aria-label="Instagram" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/instagram.png"
									alt="instagram" style="width: 20px;">
							</a>
							<a href="https://www.facebook.com/people/The-Last-Drop-Cobh/61587506886679/"
								aria-label="Facebook" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook.png"
									alt="facebook" style="width: 20px;">
							</a>
							<a href="https://maps.app.goo.gl/FMYtyNBKJryeoqHv7" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/map-marker.png"
									alt="map" style="width: 20px;">
							</a>
						</div>
						<div class="contact_info">
							<p><a href="tel:+353214718282">+353 21 4718282</a> <a
									href="mailto:thesnug@thelastdropcobh.com">thesnug@thelastdropcobh.com</a></p>
							<p>The Last Drop, 17 Westbourne Place, Cobh, Co. Cork</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text-center">
					<div class="legal_links">
						<a href="https://thelastdropcobh.com/terms-and-conditions">General Terms and Conditions</a>
						<!-- <a href="https://thelastdropcobh.com/privacy-policy-2/">Cookies Policy</a> -->
					</div>
				</div>
				<div class="col-lg-4 text-right">
					<div class="copyright_credit">
						<p>Fyber Agency incorporates Fyber Digital and Fyber Live</p>
						<p>Copyright © 2026 The Last Drop Limited. All rights reserved.</p>
					</div>
				</div>
			</div>
		</section>
	</div>
</footer>

<!-- Slick Slider - carousel -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.1.0/anime.min.js"
	integrity="sha256-98Q574VkbV+PkxXCKSgL6jVq9mrVbS7uCdA+vt0sLS8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js" crossorigin="anonymous"></script>

<!-- GSAP and Scrolltrigger -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
<!-- Split-Type -->
<script src="https://unpkg.com/split-type"></script>


<?php wp_footer(); ?>

<script src="//instant.page/5.2.0" type="module"
	integrity="sha384-jnZyxPjiipYXnSU0ygqeac2q7CVYMbh84q0uHVRRxEtvFPiQYbXWUorga2aqZJ0z"></script>

</body>

</html>