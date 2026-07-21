<?php
/*template name: gallery*/
get_header(); ?>

<main id="gallery_page" class="gallery-main">
    <section class="gallery-hero">
        <!-- <video autoplay muted loop playsinline class="hero-video">
            <source src="<?php echo get_template_directory_uri(); ?>/images/video/whats-on-hero-bg.mp4"
                type="video/mp4">
        </video> -->
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="hero-title laima-font">Gallery</h1>
                </div>
            </div>
        </div>
    </section>

    <?php
    // Get categories
    $terms = get_terms(array(
        'taxonomy' => 'gallery_category',
        'hide_empty' => true,
    ));
    ?>

    <section class="gallery-filters-section">
        <div class="container">
            <div class="filter-bar">
                <div class="tags-container">
                    <span class="label">Tags</span>
                    <div class="filters">
                        <button class="tag-pill active" data-filter="all">All <img
                                src="<?php echo get_template_directory_uri(); ?>/images/icons/cross.svg"
                                alt="cross"></button>

                        <?php foreach ($terms as $term): ?>
                            <button class="tag-pill" data-filter="<?php echo $term->slug; ?>">
                                <?php echo $term->name; ?>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="sort-container">
                    <span class="label">Sort by</span>
                    <div class="sort-select-wrap">
                        <select name="sort" id="sort-select">
                            <option value="latest">Latest</option>
                            <option value="oldest">Oldest</option>
                            <option value="az">A-Z</option>
                            <option value="za">Z-A</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="gallery-wrapper">
        <!-- GALLERY ITEMS -->
        <div class="gallery-grid" id="gallery-grid">
            <?php
            $args = array(
                'post_type' => 'gallery',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            );

            $query = new WP_Query($args);

            while ($query->have_posts()):
                $query->the_post();

                $item_terms = get_the_terms(get_the_ID(), 'gallery_category');
                $term_slugs = '';

                if ($item_terms) {
                    foreach ($item_terms as $term) {
                        $term_slugs .= $term->slug . ' ';
                    }
                }
                ?>
                <div class="gallery-item <?php echo $term_slugs; ?>" data-title="<?php echo esc_attr(get_the_title()); ?>"
                    data-date="<?php echo get_the_date('U'); ?>">
                    <a href="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" data-fancybox="gallery-main"
                        data-caption="<?php echo esc_attr(get_the_title()); ?>" class="img-wrapper">
                        <?php the_post_thumbnail('large'); ?>
                        <div class="zoom-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 3H21V8M8 21H3V16M21 16V21H16M3 8V3H8" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </a>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>

    <?php get_template_part('z-components/call-to-action'); ?>

    <!-- FILTER & SORT JS -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const buttons = document.querySelectorAll('.tag-pill');
            const items = document.querySelectorAll('.gallery-item');
            const grid = document.getElementById('gallery-grid');
            const sortSelect = document.getElementById('sort-select');
            const crossIconHtml = `<img src="<?php echo get_template_directory_uri(); ?>/images/icons/cross.svg" alt="cross">`;

            // FILTER LOGIC
            buttons.forEach(button => {
                button.addEventListener('click', function () {
                    let filter = this.getAttribute('data-filter');

                    // Update active button state
                    buttons.forEach(btn => {
                        btn.classList.remove('active');
                        const img = btn.querySelector('img');
                        if (img) img.remove();
                    });
                    this.classList.add('active');
                    this.insertAdjacentHTML('beforeend', crossIconHtml);

                    // Filter items
                    items.forEach(item => {
                        if (filter === 'all' || item.classList.contains(filter)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // SORT LOGIC
            sortSelect.addEventListener('change', function () {
                const sortBy = this.value;
                let itemsArray = Array.from(items);

                itemsArray.sort((a, b) => {
                    if (sortBy === 'az') {
                        return a.dataset.title.localeCompare(b.dataset.title);
                    } else if (sortBy === 'za') {
                        return b.dataset.title.localeCompare(a.dataset.title);
                    } else if (sortBy === 'latest') {
                        return b.dataset.date - a.dataset.date;
                    } else if (sortBy === 'oldest') {
                        return a.dataset.date - b.dataset.date;
                    }
                    return 0;
                });

                // Clear and re-order in DOM
                grid.innerHTML = '';
                itemsArray.forEach(item => grid.appendChild(item));
            });

            // INITIALIZE FANCYBOX
            if (typeof Fancybox !== 'undefined') {
                Fancybox.bind("[data-fancybox]", {
                    infinite: true,
                    hideScrollbar: true,
                });
            }
        });
    </script>

</main>



<?php get_footer(); ?>