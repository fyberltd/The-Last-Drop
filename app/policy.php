<?php
/*template name: Policy */
?>

<?php
get_header();
?>

<main id="policy_page">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <?php the_title(); ?>
                </h1>

                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                }
                ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>