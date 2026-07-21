<?php
/**
 * Event Card Component
 */
$event_title = get_field('title') ?: get_the_title();
$event_desc = get_field('description');
$event_date = get_field('event_date_time');
$res_info = get_field('reservation_info');
$book_link = get_field('booking_link');
$featured_img = get_the_post_thumbnail_url(get_the_ID(), 'large');

// Get categories for the badge
$terms = get_the_terms(get_the_ID(), 'event_cat');
$cat_name = ($terms && !is_wp_error($terms)) ? $terms[0]->name : '';
?>

<div class="col-lg-4 event-card-col">
    <article class="event-card">
        <div class="event-image-wrapper">
            <?php if ($featured_img) : ?>
                <img src="<?php echo esc_url($featured_img); ?>" alt="<?php echo esc_attr($event_title); ?>">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg" alt="Event Placeholder">
            <?php endif; ?>
            
            <?php if ($cat_name) : ?>
                <span class="event-cat-badge"><?php echo esc_html($cat_name); ?></span>
            <?php endif; ?>
        </div>
        
        <div class="event-content">
            <?php if ($event_date) : ?>
                <div class="event-meta"><?php echo esc_html($event_date); ?></div>
            <?php endif; ?>
            
            <h5 class="event-title"><?php echo esc_html($event_title); ?></h5>
            
            <?php if ($event_desc) : ?>
                <div class="event-description">
                    <p><?php echo nl2br(esc_html($event_desc)); ?></p>
                </div>
            <?php endif; ?>
            
            <?php if ($res_info) : ?>
                <div class="reservation-info"><?php echo esc_html($res_info); ?></div>
            <?php endif; ?>
            
            <?php if ($book_link) : ?>
                <a href="<?php echo esc_url($book_link); ?>" class="btn-book-now" target="_blank">Book now</a>
            <?php endif; ?>
        </div>
    </article>
</div>
