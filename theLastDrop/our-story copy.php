<?php
/*template name: our-story*/
get_header(); ?>

<main id="our_story_page" class="our-story-main">
    <section class="our-story-hero">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="<?php echo get_template_directory_uri(); ?>/images/website-identity/hero_bg_video.mp4"
                type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="hero-title laima-font">Our Story</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="served-section">
        <div class="served-bg-watermark">
            <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/served_section_bg.png" alt="">
        </div>
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="served-image-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/served_section_main.png"
                            alt="Whiskey Glass" class="served-main-image">
                    </div>
                    <div class="served-content">
                        <span class="served-subtitle">THE LAST DROP</span>
                        <h2 class="served-title laima-font">Where Ireland's<br>Story is Served.</h2>
                        <div class="served-text">
                            <p>At the heart of Cobh’s vibrant waterfront, The Last Drop is a new dining destination
                                bringing fresh energy to one of the town’s most historic locations. Situated on the
                                former site of The Quays Bar & Restaurant, the restaurant blends Cobh’s rich maritime
                                heritage with a welcoming modern atmosphere, offering locals and visitors alike a
                                perfect place to relax, dine, and enjoy the harbour town’s unique character.</p>
                            <p>Whether you’re discovering Cobh’s fascinating past, enjoying the scenic waterfront, or
                                simply looking for a memorable place to eat, The Last Drop offers a welcoming space to
                                pause, savour great food, and take in the spirit of one of Ireland’s most historic
                                harbour towns.</p>
                        </div>
                        <div class="btn-row">
                            <a href="#" class="btn btn-outline-gold">Find out more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="history-video-section">
        <video autoplay muted loop playsinline class="history-video">
            <source src="<?php echo get_template_directory_uri(); ?>/images/website-identity/served_section_video.mp4"
                type="video/mp4">
        </video>
        <div class="video-overlay"></div>
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="history-video-title laima-font">Discover Cobh.<br>Rooted in History.</h2>
                </div>
            </div>
        </div>
        <div class="gradient-transition-bottom"></div>
    </section>

    <section class="history-content-section">
        <div class="artboard-bg ab-top-left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/artboard_top_left.png" alt="">
        </div>
        <div class="artboard-bg ab-bottom-left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/artboard_bottom_left.png"
                alt="">
        </div>
        <div class="artboard-bg ab-mid">
            <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/artboard_bg.webp" alt="">
        </div>
        <div class="artboard-bg ab-bottom-right">
            <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/artboard_bottom_right.png"
                alt="">
        </div>

        <div class="container">
            <!-- Block 1: Raised on Resilience -->
            <div class="row align-items-center history-block block-1">
                <div class="col-lg-7">
                    <div class="history-image compass-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/stop-watch.png"
                            alt="Compass">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="history-text">
                        <h2 class="history-title laima-font">Raised on<br>Resilience.</h2>
                        <p>Cobh is a picturesque harbour town on the south coast of Ireland in Cobh, located in County
                            Cork. Known for its colourful waterfront houses and deep maritime roots, the town has long
                            been one of Ireland’s most important historic ports. In the 19th and early 20th centuries,
                            millions of emigrants departed from here in search of new lives across the Atlantic, making
                            Cobh a powerful symbol of Ireland’s diaspora and seafaring heritage.</p>
                        <p>One of the most poignant landmarks in the town is “Heartbreak Pier” (also called the White
                            Star Line Pier), where countless families said emotional farewells to loved ones leaving
                            Ireland. It is famously associated with the departure of passengers boarding ships such as
                            the RMS Titanic in 1912.</p>
                    </div>
                </div>
            </div>

            <!-- Block 2: From Hard Times to Good Times -->
            <div class="row align-items-center history-block block-2">
                <div class="col-lg-5">
                    <div class="history-text">
                        <h2 class="history-title laima-font">From Hard Times<br>to Good Times.</h2>
                        <p>Today, visitors come to Cobh to explore its maritime history and scenic charm. Highlights
                            include the towering St Colman's Cathedral overlooking the harbour, the immersive Titanic
                            Experience Cobh museum located in the original White Star Line ticket office, and the
                            striking Spike Island — a historic island fortress once known as “Ireland’s Alcatraz.”</p>
                        <p>With its blend of dramatic history, maritime heritage, and beautiful coastal scenery, Cobh
                            remains one of Ireland’s most moving and memorable harbour towns.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="history-image chisel-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/pealer.webp"
                            alt="Chisel">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="explore-cobh-section">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="explore-title laima-font">Explore the story of Cobh</h2>
                    <div class="explore-content">
                        <p>We’re just a two-minute walk from the Cobh Heritage Centre—a fascinating and worthwhile stop
                            during your visit, where you can discover the rich maritime history and emigration stories
                            that shaped the town.</p>
                    </div>
                    <div class="explore-btn-row">
                        <a href="https://www.cobhheritage.com/" target="_blank" class="btn btn-outline-gold">The Cobh
                            Heritage Centre</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="explore-images-grid">
            <div class="explore-image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/explore-image-1.webp"
                    alt="Cobh 1">
            </div>
            <div class="explore-image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/explore-image-2.jpg"
                    alt="Cobh 2">
            </div>
            <div class="explore-image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/explore-image-3.jpg"
                    alt="Cobh 3">
            </div>
            <div class="explore-image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/explore-image-4.jpg"
                    alt="Cobh 4">
            </div>
        </div>
    </section>

    <?php get_template_part('z-components/call-to-action'); ?>

</main>



<?php get_footer(); ?>