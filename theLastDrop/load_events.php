<?php
add_action('wp_ajax_nopriv_filter_events', 'the_last_drop_filter_events');
add_action('wp_ajax_filter_events', 'the_last_drop_filter_events');

function the_last_drop_filter_events() {
    $cat_id = isset($_POST['cat_id']) ? sanitize_text_field($_POST['cat_id']) : '';
    $sort = isset($_POST['sort']) ? sanitize_text_field($_POST['sort']) : 'latest';

    $args = array(
        'post_type' => 'event',
        'posts_per_page' => -1,
        'post_status' => 'publish',
    );

    // Sorting
    if ($sort === 'upcoming') {
        $args['meta_key'] = 'event_date_time';
        $args['orderby'] = 'meta_value';
        $args['order'] = 'ASC';
        // Only show events from now onwards
        $args['meta_query'] = array(
            array(
                'key' => 'event_date_time',
                'value' => date('Y-m-d H:i:s'),
                'compare' => '>=',
                'type' => 'DATETIME'
            )
        );
    } else {
        $args['orderby'] = 'date';
        $args['order'] = 'DESC';
    }

    // Category Filtering
    if (!empty($cat_id) && $cat_id !== 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'event_cat',
                'field' => 'term_id',
                'terms' => $cat_id,
            ),
        );
    }

    $query = new WP_Query($args);

    ob_start();

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            get_template_part('z-components/event-card');
        endwhile;
    else :
        echo '<div class="col-12 text-center py-5"><p class="intro-text">No events found matching your criteria.</p></div>';
    endif;

    $html = ob_get_clean();

    wp_send_json_success(array('html' => $html));
    wp_die();
}
