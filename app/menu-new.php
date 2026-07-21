<?php
/*template name: menu new*/
get_header(); ?>

<main id="menu_page" class="menu-main">
    <section class="menu-hero">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="<?php echo get_template_directory_uri(); ?>/images/video/menu-hero-bg-video.mp4"
                type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="hero-title laima-font">Menu</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-selection-section">
        <div class="container">
            <h2 class="section-title laima-font">OUR MENUS</h2>

            <div class="menu-selection-grid">
                <a href="#main-menu-section" class="menu-box active">
                    <div class="box-content">
                        <div class="menu-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/breakfast-menu.png"
                                alt="Main Menu">
                        </div>
                        <span class="menu-label">MAIN MENU</span>
                        <div class="download-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-down.svg"
                                alt="Download">
                        </div>
                    </div>
                </a>

                <a href="#drinks-menu-section" class="menu-box">
                    <div class="box-content">
                        <div class="menu-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/drinks-menu.png"
                                alt="Drinks">
                        </div>
                        <span class="menu-label">DRINKS</span>
                        <div class="download-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-down.svg"
                                alt="Download">
                        </div>
                    </div>
                </a>

                <a href="#craft-cocktails-section" class="menu-box">
                    <div class="box-content">
                        <div class="menu-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/craft-cocktail.png"
                                alt="Craft Cocktails">
                        </div>
                        <span class="menu-label">CRAFT COCKTAILS</span>
                        <div class="download-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-down.svg"
                                alt="Download">
                        </div>
                    </div>
                </a>
            </div>

            <div class="pdf-notice">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-down.svg" alt="icon">
                <span id="pdf-link-text">Click to download a PDF Menu.</span>
            </div>
        </div>
    </section>

    <!-- Main Menu Section -->
    <section id="main-menu-section" class="menu-display-section" style="background-color: #052C1B;">
        <div class="container">
            <h4 class="menu-category-title">MAIN MENU</h4>

            <?php
            $main_menu_parent = get_term_by('slug', 'main-menu', 'menu_category');
            if ($main_menu_parent):
                $sub_categories = get_terms(array(
                    'taxonomy' => 'menu_category',
                    'parent' => $main_menu_parent->term_id,
                    'hide_empty' => false,
                    'orderby' => 'term_id', // Adjust as needed
                    'order' => 'ASC'
                ));

                foreach ($sub_categories as $sub_cat):
                    // Skip Allergens here if it's a child of Main Menu, handled separately below
                    if ($sub_cat->slug === 'allergens')
                        continue;

                    $items_query = new WP_Query(array(
                        'post_type' => 'menu_item',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'menu_category',
                                'field' => 'slug',
                                'terms' => $sub_cat->slug,
                            ),
                        ),
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                    ));
                    ?>
                    <div class="menu-group mt-5">
                        <div class="group-header">
                            <h3 class="group-main-title laima-font text-gold"><?php echo $sub_cat->name; ?></h3>
                            <?php if ($cat_irish = get_field('irish_translation', $sub_cat)): ?>
                                <p class="group-subtitle"><?php echo $cat_irish; ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="group-items">
                            <?php if ($items_query->have_posts()):
                                while ($items_query->have_posts()):
                                    $items_query->the_post();
                                    $price = get_field('price');
                                    $desc = get_field('description');
                                    ?>
                                    <div class="menu-item-row">
                                        <div class="item-info">
                                            <h4><?php the_title(); ?></h4>
                                            <?php if ($desc): ?>
                                                <p><?php echo $desc; ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="item-price"><?php echo $price; ?></div>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata(); endif; ?>
                        </div>
                    </div>
                <?php endforeach; endif; ?>

            <!-- Allergens Section -->
            <?php
            $allergens_cat = get_term_by('slug', 'allergens', 'menu_category');
            if ($allergens_cat):
                $allergens_query = new WP_Query(array(
                    'post_type' => 'menu_item',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'menu_category',
                            'field' => 'slug',
                            'terms' => 'allergens',
                        ),
                    ),
                    'orderby' => 'date',
                    'order' => 'ASC',
                ));
                if ($allergens_query->have_posts()):
                    ?>
                    <div class="menu-group mt-5 pt-5">
                        <div class="group-header">
                            <h3 class="group-main-title"
                                style="color: #ebe9df; font-family: 'Lexend'; font-size: 1.6rem; letter-spacing: 0.2em;">
                                ALLERGENS</h3>
                        </div>
                        <div class="group-items">
                            <div class="row allergens-grid">
                                <?php
                                $count = 1;
                                while ($allergens_query->have_posts()):
                                    $allergens_query->the_post();
                                    ?>
                                    <?php if (($count - 1) % 5 === 0)
                                        echo '<div class="col-md-4">'; ?>
                                    <p style="display: flex; gap: 0.5rem;"><span><?php echo $count; ?></span> <?php the_title(); ?>
                                    </p>
                                    <?php if ($count % 5 === 0 || $count === $allergens_query->post_count)
                                        echo '</div>'; ?>
                                    <?php $count++; endwhile;
                                wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; endif; ?>
        </div>
    </section>

    <!-- Drinks Section -->
    <section id="drinks-menu-section" class="menu-display-section"
        style="background-color: #EBE9DF; position: relative; overflow: hidden;">
        <!-- Background Images -->
        <div class="drinks-bg-watermark"
            style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/website-identity/drinks-bg.jpg');">
        </div>
        <div class="drinks-img-left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/beers.png" alt="Beer Glass">
        </div>
        <div class="drinks-img-right">
            <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/cola-drink.webp"
                alt="Cola Drink">
        </div>

        <div class="container py-10 relative-z">
            <h2 class="menu-category-title Lexend-font text-center" style="color: #26241a; font-weight: 300; margin:0;">
                DRINKS</h2>

            <div class="drinks-accordion mt-5">
                <?php
                $drinks_parent = get_term_by('slug', 'drinks', 'menu_category');
                if ($drinks_parent):
                    $drinks_subcats = get_terms(array(
                        'taxonomy' => 'menu_category',
                        'parent' => $drinks_parent->term_id,
                        'hide_empty' => false,
                        'orderby' => 'term_id',
                        'order' => 'ASC'
                    ));

                    foreach ($drinks_subcats as $drink_cat):
                        $items_query = new WP_Query(array(
                            'post_type' => 'menu_item',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'menu_category',
                                    'field' => 'slug',
                                    'terms' => $drink_cat->slug,
                                ),
                            ),
                            'orderby' => 'menu_order',
                            'order' => 'ASC',
                        ));
                        if (!$items_query->have_posts())
                            continue;
                        ?>
                        <div class="drinks-toggle-item">
                            <div class="drinks-toggle-header" onclick="toggleDrinkItem(this)">
                                <h3 class="laima-font text-gold"><?php echo $drink_cat->name; ?></h3>
                                <div class="toggle-arrow">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/drinks-arrow-down.svg"
                                        alt="Toggle">
                                </div>
                            </div>
                            <div class="drinks-toggle-content">
                                <div class="content-inner">
                                    <?php if ($drink_cat->slug === 'whiskey'): ?>
                                        <div class="whiskey-grid">
                                            <?php
                                            $w_count = 0;
                                            while ($items_query->have_posts()):
                                                $items_query->the_post();
                                                if ($w_count % ceil($items_query->post_count / 3) === 0)
                                                    echo '<div class="whiskey-col">';
                                                echo '<p>' . get_the_title() . '</p>';
                                                if (($w_count + 1) % ceil($items_query->post_count / 3) === 0 || ($w_count + 1) === $items_query->post_count)
                                                    echo '</div>';
                                                $w_count++;
                                            endwhile;
                                            wp_reset_postdata(); ?>
                                        </div>
                                    <?php else: ?>
                                        <div class="drinks-list-flex justify-content-center">
                                            <?php
                                            $total = $items_query->post_count;
                                            $i = 0;
                                            while ($items_query->have_posts()):
                                                $items_query->the_post();
                                                $i++;
                                                ?>
                                                <span><?php the_title(); ?></span>
                                                <?php if ($i < $total): ?>
                                                    <span class="separator">•</span>
                                                <?php endif; ?>
                                            <?php endwhile;
                                            wp_reset_postdata(); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; endif; ?>
            </div>
        </div>

        <script>
            function toggleDrinkItem(header) {
                const parent = header.parentElement;
                const content = header.nextElementSibling;

                // Toggle active class
                parent.classList.toggle('active');

                // Handle height for transition
                if (parent.classList.contains('active')) {
                    content.style.maxHeight = content.scrollHeight + "px";
                } else {
                    content.style.maxHeight = 0;
                }
            }
        </script>
    </section>

    <!-- Craft Cocktails Section -->
    <section id="craft-cocktails-section" class="craft-cocktails-section" style="background-color: #E3E1D5;">
        <div class="craft-bg-layer"
            style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/website-identity/craft-cocktail-bg.png'); opacity: 0.1;">
        </div>
        <div class="coffee-image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/craft-cocktail-coffee.png"
                alt="Espresso Martini" class="coffee-img">
        </div>
        <div class="food-image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/craft-cocktail-food.png"
                alt="Cocktail" class="food-img">
        </div>
        <div class="container relative-z">
            <div class="row cocktail-header-row text-center justify-content-center">
                <div class="col-lg-8">
                    <h2 class="section-main-title Lexend-font mb-4" style="color: #26241a; font-weight: 300;">CRAFT
                        COCKTAILS</h2>
                    <p class="section-intro mx-auto mb-2" style="color: #26241a;">Expertly prepared, perfectly balanced,
                        ready to enjoy.</p>
                    <p class="section-price mb-5" style="color: #26241a; font-weight: 500;">€13.00 each</p>
                </div>
            </div>

            <div class="cocktails-content-wrapper">
                <div class="cocktails-list-grid">
                    <div class="cocktail-item">
                        <h4>Festive Old Fashioned</h4>
                        <p>A rich, warming classic with notes of orange, spice, and smooth whiskey.</p>
                    </div>
                    <div class="cocktail-item">
                        <h4>Strawberry Daiquiri</h4>
                        <p>Fresh and fruity with ripe strawberry and a refreshing citrus kick.</p>
                    </div>
                    <div class="cocktail-item">
                        <h4>Espresso Martini</h4>
                        <p>Bold espresso, smooth vodka, and a touch of sweetness — the perfect pick-me-up.</p>
                    </div>
                    <div class="cocktail-item">
                        <h4>Spicy Margarita</h4>
                        <p>A lively twist with chilli heat balanced by zesty lime and smooth tequila.</p>
                    </div>
                    <div class="cocktail-item">
                        <h4>Whiskey Sour</h4>
                        <p>A refreshing blend of whiskey, citrus, and subtle sweetness, finished silky smooth.</p>
                    </div>
                    <div class="cocktail-item">
                        <h4>Cosmo</h4>
                        <p>Light, crisp, and refreshing with citrus and cranberry notes.</p>
                    </div>
                    <div class="cocktail-item">
                        <h4>Tommy’s Margarita</h4>
                        <p>A modern favourite with tequila, lime, and agave for a clean, crisp finish.</p>
                    </div>
                    <div class="cocktail-item">
                        <h4>Pornstar Martini</h4>
                        <p>A vibrant passionfruit cocktail served with a touch of sparkle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content">
                        <h4 class="section-title laima-font">Looking to visit us?</h4>
                        <p>You can simply walk in to The Last Drop but we do recommend that you make a reservation.</p>
                        <!-- <a href="https://thelastdropcobh.com/contact-us/" class="btn btn-gold">Book a Table</a> -->
                        <script async src="https://bookings.tablepath.com/js/dist/widget.min.js"></script><a
                            href="https://bookings.tablepath.com/l2fx9d/the-last-drop-reservations" tppw-id="l2fx9d"
                            tppw-code="the-last-drop-reservations" class="btn btn-gold">Book a Table</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('z-components/call-to-action'); ?>

</main>



<?php get_footer(); ?>