<?php
/*template name: homepage*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<main id="home_page">

    <!-- Background Video -->
    <video autoplay loop muted playsinline class="bg-video">
        <source src="<?php echo get_template_directory_uri(); ?>/images/video/background-video.mp4" type="video/mp4">
    </video>
    
    <!-- Overlay -->
    <div class="bg-overlay"></div>

    <div class="main-content">
        <!-- Main State -->
        <div class="content-state state-main active">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="The Last Drop" class="logo">
            <h1>OPENING SOON</h1>
            <a href="#" class="btn-contact" id="open_contact">Contact us</a>
        </div>

        <!-- Contact State -->
        <div class="content-state state-contact">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon.png" alt="Back to Main" class="icon-logo" id="back_to_main" title="Back to Home">
            <h2>CONTACT US</h2>
            <?php echo do_shortcode('[contact-form-7 id="31f0a0b" title="Contact form"]'); ?>
        </div>
    </div>

    <!-- Footer Area -->
    <div class="landing-footer">
        
        <div class="footer-left">
            <div class="contact-links">
                <a href="tel:+353214813539">+353 21 4813539</a>
                <a href="mailto:bookings@thelastdropcobh.com">admin@thelastdropcobh.com</a>
            </div>
            <div class="address">
                The Last Drop, 17 Westbourne Place, Cobh, Co. Cork
            </div>
        </div>

        <div class="footer-right">
            <div class="social-icons">
                <a href="https://www.instagram.com/thelastdropcobh/" aria-label="Instagram" target="_blank">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                </a>
                <a href="https://www.facebook.com/cobh2022/posts/the-last-drop-cobh-a-new-bar-restaurant-will-be-opening-in-cobh-shortly-we-hope-/1439992074803797/" aria-label="Facebook" target="_blank">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                    </svg>
                </a>
            </div>
            <!-- <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Cookies Policy</a>
            </div> -->
            <div class="copyright">
                Copyright &copy; 2026 The Last Drop Limited. All rights reserved.
            </div>
        </div>

    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var openBtn = document.getElementById('open_contact');
        var backBtn = document.getElementById('back_to_main');
        var stateMain = document.querySelector('.state-main');
        var stateContact = document.querySelector('.state-contact');

        if(openBtn && stateMain && stateContact) {
            openBtn.addEventListener('click', function(e) {
                e.preventDefault();
                stateMain.classList.remove('active');
                stateContact.classList.add('active');
                window.scrollTo(0, 0); // Scroll to top for mobile
            });
        }

        if(backBtn && stateMain && stateContact) {
            backBtn.addEventListener('click', function(e) {
                e.preventDefault();
                stateContact.classList.remove('active');
                stateMain.classList.add('active');
                window.scrollTo(0, 0); // Scroll to top for mobile
            });
        }
    });
    </script>

</main>
<?php wp_footer(); ?>
</body>
</html>
