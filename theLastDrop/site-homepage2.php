<?php
/*template name: site-homepage2*/
get_header(); ?>

<main id="primary" class="site-main">
    <section class="site-hero">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="<?php echo get_template_directory_uri(); ?>/images/video/background-video.mp4"
                type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="hero-title">Where every drop<br> tells a story.</h1>
                    <div class="hero-buttons">
                        <script async src="https://bookings.tablepath.com/js/dist/widget.min.js"></script>
                        <a href="https://bookings.tablepath.com/l2fx9d/the-last-drop-reservations" tppw-id="l2fx9d"
                            tppw-code="the-last-drop-reservations" class="btn btn-gold"> <img
                                src="<?php echo bloginfo('template_directory'); ?>/images/icons/reservations.svg"
                                alt="table" style="width: 15px;"> Reservations
                        </a>
                        <a href="https://thelastdropcobh.com/menu/" class="btn btn-gold">
                            <img src="<?php echo bloginfo('template_directory'); ?>/images/icons/menu-new.svg"
                                alt="menu" style="width: 20px;"> Menu
                        </a>
                        <a href="https://thelastdropcobh.com/find-us/" class="btn btn-gold">
                            <img src="<?php echo bloginfo('template_directory'); ?>/images/icons/find-us.svg"
                                alt="find-us" style="width: 15px;">
                            Find us
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- <?php get_template_part('z-components/festive-season'); ?> -->
    <?php get_template_part('z-components/christmas'); ?>


    <section id="home-intro">
        <div class="set-container">
            <div class="top-section">
                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/left-artboard.webp" alt=""
                    class="artboard left-artboard">
                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/right-artboard.webp"
                    alt="" class="artboard right-artboard">
                <div class="subtitle-wrap">
                    <span class="section-subtitle">OUR STORY</span>
                    <h2 class="section-title">A Toast to<br>Irish Resilience</h2>
                    <p>At the heart of Cobh’s vibrant waterfront, The Last Drop is a new dining destination bringing
                        fresh energy to one of the town’s most historic locations. Situated on the former site of The
                        Quays Bar & Restaurant, the restaurant blends Cobh’s rich maritime heritage with a welcoming
                        modern atmosphere, offering locals and visitors alike a perfect place to relax, dine, and enjoy
                        the harbour town’s unique character.</p>
                    <p>Whether you’re discovering Cobh’s fascinating past, enjoying the scenic waterfront, or simply
                        looking for a memorable place to eat, The Last Drop offers a welcoming space to pause, savour
                        great food, and take in the spirit of one of Ireland’s most historic harbour towns. 🍽️⚓</p>
                    <div class="btn-wrap">
                        <a href="https://thelastdropcobh.com/menu/" class="btn btn-outline-gold">Find out more</a>
                    </div>
                </div>
                <div class="image-div">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/beers.png" alt="Beers"
                        class="beer-image">
                </div>
            </div>

            <div class="bottom-section">
                <div class="container">
                    <div class="data">
                        <span class="section-subtitle">OUR MENU</span>
                        <div class="section-text">
                            <p>Here in Cobh, we are lucky enough to be surrounded by the sea and to live amongst some of
                                the most fertile farmland on the island of Ireland.</p>
                            <p>Our menu reflects our desire to use seafood caught near our coast and ingredients grown
                                on this land so that we can offer the best of traditional and modern Irish cuisine.</p>
                            <p>
                                <a href="https://thelastdropcobh.com/menu/#main-menu-section">Main Menu</a> ·
                                <a href="https://thelastdropcobh.com/menu/#drinks-menu-section">Drinks</a> ·
                                <a href="https://thelastdropcobh.com/menu/#craft-cocktails-section">Craft Cocktails</a>
                            </p>
                        </div>
                        <!-- <div class="menu-tags">
                        <p>
                            <span>Breakfast</span> &bull; <span>&Agrave; La Carte</span> &bull; <span>Tasting Menu</span> &bull; <span>Drinks &amp; Cocktails</span>
                        </p>
                    </div> -->
                        <div class="btn-wrap">
                            <a href="https://thelastdropcobh.com/menu/" class="btn btn-outline-gold">View Menu</a>
                        </div>
                        <!-- <div class="image-div">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/food.webp" alt="Food" class="food-image">
                    </div> -->
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="voucher-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- <img src="https://thelastdropcobh.com/wp-content/uploads/2026/03/git-voucher-new.gif"
                            alt="Voucher" class="voucher-image"> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/TLD-Gift-Card-shadow.png"
                            class="voucher-image" alt="Voucher">
                    </div>
                    <div class="col-lg-6">
                        <div class="voucher-data">
                            <span class="section-subtitle">GIFT VOUCHER</span>
                            <p>Give the gift of exceptional drink and dining with The Last Drop gift voucher. Whether
                                it’s for a special occasion or just to treat someone you love, our vouchers unlock
                                delicious dining, signature cocktails, and unforgettable experiences</p>
                            <div class="btn-wrap">
                                <a href="https://thelastdropcobh.com/contact-us/" class="">Gift Vouchers will be
                                    available from Wednesday 29th April</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('z-components/call-to-action'); ?>

</main>

<script>
    const hero = document.querySelector(".bottom-section");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                hero.classList.add("show");
            }
        });
    }, { threshold: 0.3 }); // triggers when 30% visible

    observer.observe(hero);
</script>

<?php get_footer(); ?>