<?php
/*template name: Policy */
?>

<?php
get_header();
?>

<main id="policy_page">
    <section class="policy-hero">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="<?php echo get_template_directory_uri(); ?>/images/website-identity/privacy-policy-bg-video.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="hero-title laima-font">General Terms and Conditions</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>The Last Drop Collection incorporates The Last Drop Cobh and the First Drop Cobh.</p>
                    <p>The Last Drop Collection will <strong> never sell, rent, </strong> or <strong> share your personal information </strong> with any third parties for marketing purposes without your express permission.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="policy-content-section">
        <div class="container">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    $content = apply_filters('the_content', get_the_content());
                    
                    // Split content right before any h1 or h2 tag
                    $parts = preg_split('/(?=<h[1-2][^>]*>)/i', $content);
                    $is_first_row = true;
                    
                    foreach ($parts as $part) {
                        if (empty(trim($part))) continue;
                        
                        $heading = '';
                        $text = $part;
                        
                        // Check if the part starts with h1 or h2
                        if (preg_match('/^\s*<h[1-2][^>]*>(.*?)<\/h[1-2]>(.*)/is', $part, $matches)) {
                            $heading = strip_tags($matches[1]);
                            $text = $matches[2];
                        } elseif ($is_first_row) {
                            // If there is content before the first heading, use the page title
                            $heading = get_the_title();
                        }
                        
                        echo '<div class="row mb-5">';
                        echo '<div class="col-lg-4">';
                        if (!empty($heading)) {
                            echo '<h1>' . $heading . '</h1>';
                        }
                        echo '</div>';
                        echo '<div class="col-lg-8">';
                        echo $text;
                        echo '</div>';
                        echo '</div>';
                        
                        $is_first_row = false;
                    }
                }
            }
            ?>
        </div>
    </section>

    <?php get_template_part('z-components/call-to-action'); ?>
    
</main>

<?php
get_footer();
?>