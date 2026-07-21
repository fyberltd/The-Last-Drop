<?php
/*template name: Custom Template */
?>

<?php get_header(); ?>

<?php get_template_part('content', get_post_format()) ?><!-- Probably useless -->

<h1>Custom Template</h1>

<!-- <?php /* if (have_rows('layout')) : */ ?>

    <?php /* global $post;
    $pageName = $post->post_name; */ ?>
    <main class="layout" id="page-<?php /* echo $pageName */ ?>">
        <?php /* while (have_rows('layout')) : the_row();

            get_template_part('z-acf-layout/' . get_row_layout());

        endwhile; */ ?>
    </main>
<?php /* endif; */ ?> -->

<?php get_footer(); ?>