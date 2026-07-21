<?php
/*template name: site-homepage*/
get_header(); ?>

<main id="primary" class="site-main">
    <section class="site-hero">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="<?php echo get_template_directory_uri(); ?>/images/video/background-video.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="hero-title">Where every drop<br> tells a story.</h1>
                    <div class="hero-buttons">
                        <a href="#" class="btn btn-outline-white">Find us</a>
                        <a href="https://thelastdropcobh.com/contact-us/" class="btn btn-gold">Book a Table</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home-intro">
        <div class="set-container">
        <div class="top-section">
            <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/left-artboard.webp" alt="" class="artboard left-artboard">
            <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/right-artboard.webp" alt="" class="artboard right-artboard">
            <div class="subtitle-wrap">
                <span class="section-subtitle">OUR STORY</span>
                <h2 class="section-title">A Toast to<br>Irish Resilience</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.</p>
                <div class="btn-wrap">
                    <a href="#" class="btn btn-outline-gold">Find out more</a>
                </div>
            </div>
            <div class="image-div">
                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/beers.png" alt="Beers" class="beer-image">
            </div>
        </div>

        <div class="bottom-section">
            <div class="container">
                <div class="data">
                    <span class="section-subtitle">OUR MENU</span>
                    <div class="section-text">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.</p>
                    </div>
                    <div class="menu-tags">
                        <p>
                            <span>Breakfast</span> &bull; <span>&Agrave; La Carte</span> &bull; <span>Tasting Menu</span> &bull; <span>Drinks &amp; Cocktails</span>
                        </p>
                    </div>
                    <div class="btn-wrap">
                        <a href="#" class="btn btn-outline-gold">View Menu</a>
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
                        <img src="https://thelastdropcobh.com/wp-content/uploads/2026/03/git-voucher-new.gif" alt="Voucher" class="voucher-image">
                    </div>
                    <div class="col-lg-6">
                        <div class="voucher-data">
                            <span class="section-subtitle">GIFT VOUCHER</span>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip</p>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.</p>
                            <div class="btn-wrap">
                                <a href="#" class="">Ask a member of staff to find out more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
    <div class="honour-section">
        <video class="bg-video" autoplay muted loop playsinline>
        <source src="https://thelastdropcobh.com/wp-content/uploads/2026/03/honour-bg-video.mp4" type="video/mp4">
        </video>

        <div class="container">
        <h2 class="section-title">
            Honouring the Past.<br>Savouring the Present
        </h2>
        </div>
    </div>
    </section>

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
