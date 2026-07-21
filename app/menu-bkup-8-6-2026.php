<?php
/*template name: menu*/
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
            <div class="row py-5">
                <div class="col-lg-6">
                    <h2 style="color: #B17C2B">A journey through Ireland with modern tastes</h2>
                </div>
                <div class="col-lg-6">
                    <p style="color: #EBE9DF; font-size: 1.6rem; font-weight: 300;">Here in Cobh, we are lucky enough to
                        be surrounded by the sea and to live amongst some of the most fertile farmland on the island of
                        Ireland. </p>
                    <p style="color: #EBE9DF; font-size: 1.6rem; font-weight: 300;">Our menu reflects our desire to use
                        seafood caught near our coast and ingredients grown on this land so that we can offer the best
                        of traditional and modern Irish cuisine.</p>
                </div>
            </div>
            <h2 class="section-title laima-font">OUR MENUS</h2>

            <div class="menu-selection-grid">
                <div class="main">
                    <a href="#main-menu-accordion-section" class="menu-box active">
                        <div class="box-content">
                            <div class="menu-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/tasting-menu.png"
                                    alt="Main Menu">
                            </div>
                            <span class="menu-label">MAIN MENU</span>
                            <div class="download-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-down-new.svg"
                                    alt="Download">
                            </div>
                        </div>
                    </a>
                    <div class="menu-pdf">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-down.svg" alt="icon">
                        <a href="https://thelastdropcobh.com/wp-content/uploads/2026/06/TLD-4pp-A4-Menu-june26.pdf"
                            target="_blank"><span id="pdf-link-text">Click to download Main Menu.</span></a>
                    </div>
                </div>

                <div class="drinks">
                    <a href="#drinks-menu-section" class="menu-box">
                        <div class="box-content">
                            <div class="menu-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/drinks-menu.png"
                                    alt="Drinks">
                            </div>
                            <span class="menu-label">DRINKS</span>
                            <div class="download-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-down-new.svg"
                                    alt="Download">
                            </div>
                        </div>
                    </a>
                    <div class="menu-pdf">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-down.svg" alt="icon">
                        <a href="https://thelastdropcobh.com/wp-content/uploads/2026/06/TLD-Drinks-Menu-june26.pdf"
                            target="_blank"><span id="pdf-link-text">Click to download Drinks Menu.</span></a>
                    </div>
                </div>

                <div class="cocktail">
                    <a href="#craft-cocktails-section" class="menu-box">
                        <div class="box-content">
                            <div class="menu-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/craft-cocktail.png"
                                    alt="Craft Cocktails">
                            </div>
                            <span class="menu-label">CRAFT COCKTAILS</span>
                            <div class="download-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-down-new.svg"
                                    alt="Download">
                            </div>
                        </div>
                    </a>
                    <div class="menu-pdf">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-down.svg" alt="icon">
                        <a href="https://thelastdropcobh.com/wp-content/uploads/2026/06/TLD-Cocktail-Menu-june26.pdf"
                            target="_blank"><span id="pdf-link-text">Click to download Craft Cocktail Menu.</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Menu Section -->
    <!-- <section id="main-menu-section" class="menu-display-section" style="background-color: #052C1B;">
        <div class="container">
            <h4 class="menu-category-title">MAIN MENU</h4>
            
            <div class="menu-group">
                <div class="group-header">
                    <h3 class="group-main-title laima-font text-gold">Starters & <br>Light Bites</h3>
                    <p class="group-subtitle">(Tosaitheoirí & Greimíní Éadroma)</p>
                </div>
                <div class="group-items">
                    <?php
                    $starters = [
                        ['title' => 'Shamrock Bon Bons (1,3,4,7)', 'desc' => 'A trio of croquettes on beetroot purée; creamy colcannon potato, Clonakilty black pudding and smoked salmon', 'price' => '€14.95'],
                        ['title' => 'Atlantic Seafood Chowder (1,2,4,7,9,12)', 'desc' => 'Selection of local seafood and smoked fish, vegetables, cream, served with Irish brown bread', 'price' => '€14.50'],
                        ['title' => 'Crispy Boneless Chicken Thighs (3,6,7,10,11)', 'desc' => 'Golden, crispy chicken thighs with homemade garlic aioli', 'price' => '€12.95'],
                        ['title' => 'Seared Scallops & Black Pudding (1,3,7,12,14)', 'desc' => 'Atlantic scallops, Clonakilty black pudding crumb, pea purée, served on potato bread with Rocket salad and Red pepper infusion.', 'price' => '€17.00'],
                        ['title' => 'Classic Prawn Cocktail (1,3,7,12,14)', 'desc' => 'Prawn Cocktail with baby gem lettuce and Marie Rose sauce', 'price' => '€12.95'],
                        ['title' => 'Bang Bang Cauliflower (V) (1,3,7,10,11)', 'desc' => 'Crispy panko cauliflower served with spicy-sweet sriracha sauce, sesame seeds, spring onion.', 'price' => '€10.95'],
                        ['title' => 'Soup of the Day (V) (1,3,7)', 'desc' => 'Daily homemade soup served with Irish brown bread', 'price' => '€8.50'],
                    ];
                    foreach ($starters as $item): ?>
                    <div class="menu-item-row">
                        <div class="item-info">
                            <h4><?php echo $item['title']; ?></h4>
                            <p><?php echo $item['desc']; ?></p>
                        </div>
                        <div class="item-price"><?php echo $item['price']; ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="menu-group mt-5">
                <div class="group-header">
                    <h3 class="group-main-title laima-font text-gold">Salads & <br>Sandwiches</h3>
                    <p class="group-subtitle">(Sailéid & Ceapairí) Wedge Salad</p>
                </div>
                <div class="group-items">
                    <?php
                    $salads = [
                        ['title' => 'Wedge Salad with Cork blue cheese (3,7,10)', 'desc' => 'Baby gem wedges topped with crispy bacon, crumbled local blue cheese, cherry tomatoes and drizzled with homemade ranch dressing', 'price' => '€16.50'],
                        ['title' => 'Quinoa Salad (V) (7,10,11,12)', 'desc' => 'Quinoa, cucumber, avocado, green apple, chickpea, broccoli topped with feta cheese and toasted seeds mixed with a light citrus-vinaigrette dressing', 'price' => '€16.50'],
                        ['title' => 'Warm Potato Salad with Smoked Salmon (3,4,7)', 'desc' => 'Potato salad with smoked salmon, garden peas, boiled egg, scallions, light yogurt dressing.', 'price' => '€17.50'],
                        ['title' => 'Classic Club Sandwich (1,3,7,10)', 'desc' => 'Three layer sandwich with toasted bread, sliced chicken, cheese, bacon, lettuce and tomato with a mayonnaise dressing. Served with fries', 'price' => '€17.95'],
                        ['title' => 'Cork Grilled Cheese Sandwich (V) (1,7)', 'desc' => 'Vintage Bandon cheddar cheese on grilled sourdough bread, served with Ballymaloe Relish and crisps', 'price' => '€10.95'],
                        ['title' => 'Traditional Irish Open Egg Sandwich (V) (1,3,6,7,10)', 'desc' => 'Brown bread, sliced free-range eggs, lettuce, tomato, scallions, salad cream, sea salt & cracked pepper', 'price' => '€10.95'],

                        ['title' => 'Add Ham', 'price' => '€3'],
                        ['title' => 'Add cup of Soup', 'price' => '€3.50'],
                    ];
                    foreach ($salads as $item): ?>
                    <div class="menu-item-row">
                        <div class="item-info">
                            <h4><?php echo $item['title']; ?></h4>
                            <p><?php echo $item['desc']; ?></p>
                        </div>
                        <div class="item-price"><?php echo $item['price']; ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="menu-group mt-5">
                <div class="group-header">
                    <h3 class="group-main-title laima-font text-gold">Mains</h3>
                    <p class="group-subtitle">(Príomhliorna)</p>
                </div>
                <div class="group-items">
                    <?php
                    $mains = [
                        ['title' => 'Irish Stew (7,9,12)', 'desc' => 'Slow-braised Irish beef with root vegetables in a Beamish stout gravy served with creamy mash potatoes.', 'price' => '€23.00'],
                        ['title' => 'Seafood Pie (1,2,4,7,9,12)', 'desc' => 'Fresh fish and prawns baked in a creamy white vine sauce, topped with golden herb-crusted potato', 'price' => '€23.00'],
                        ['title' => 'Shepherdless Pie (V) (6,7,9)', 'desc' => 'Rich lentil and vegetable base with a cheesy mashed potato topping', 'price' => '€21.00'],
                        ['title' => 'Saffron & Chorizo Risotto (7,12)', 'desc' => 'Saffron risotto with Gubbeen chorizo, vibrant baby spinach and Grana Padano cheese', 'price' => '€24.95'],
                        ['title' => 'Traditional Fish & Chips (1,2,3,4,10,12)', 'desc' => 'Catch of the day in a light crispy beer batter, served with chunky fries, mushy peas and homemade tartar sauce', 'price' => '€22.95'],
                        ['title' => 'The Last Drop Burger (3,6,7,10,11,12)', 'desc' => 'Irish beef burger, streaky bacon, caramelised onions, melted cheddar, sliced pickles and coleslaw in a toasted brioche bun. Served with fries', 'price' => '€19.95'],
                        ['title' => 'Dry Aged Steak 10Oz (7,12)', 'desc' => 'Your server will be happy to tell you of today’s steak selection all sourced from local farms. Served with whiskey peppercorn sauce or smoked garlic butter. Choose two sides', 'price' => '€36.95'],
                        ['title' => 'Chicken Supreme (1,7,12)', 'desc' => 'Roast chicken supreme with Clonakilty black pudding, creamy mushroom and bacon sauce, served with wilted greens and sautéed potato', 'price' => '€23.50'],
                    ];
                    foreach ($mains as $item): ?>
                    <div class="menu-item-row">
                        <div class="item-info">
                            <h4><?php echo $item['title']; ?></h4>
                            <p><?php echo $item['desc']; ?></p>
                        </div>
                        <div class="item-price"><?php echo $item['price']; ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="menu-group mt-5">
                <div class="group-header">
                    <h3 class="group-main-title laima-font text-gold">Sides</h3>
                    <p class="group-subtitle">(Taobhanna)</p>
                    <p class="text-white mt-3" style="font-size: 1.4rem; opacity: 0.9;">€6.00 each</p>
                </div>
                <div class="group-items">
                    <div class="drinks-list">
                        <p>Fries</p>
                        <p>Creamy Mashed Potatoes (7)</p>
                        <p>Colcannon Potatoes (7)</p>
                        <p>Sautéed Mushrooms and Onions (7)</p>
                        <p>Side Salad (10,12)</p>
                        <p>Onion Rings (1,3,7)</p>
                        <p>Seasonal Green Vegetables (7)</p>
                    </div>
                </div>
            </div>

            <div class="menu-group mt-5">
                <div class="group-header">
                    <h3 class="group-main-title laima-font text-gold">Desserts</h3>
                    <p class="group-subtitle">(Milseoga)</p>
                </div>
                <div class="group-items">
                    <?php
                    $desserts = [
                        ['title' => 'Murphys Chocolate Cake (1,3,7,12)', 'desc' => 'Rich chocolate cake infused with Murphy’s stout served with vanilla ice cream.', 'price' => '€9.50'],
                        ['title' => 'Chefs Crumble (1,3,7)', 'desc' => 'Guinness Stout, Vanilla Ice Cream, Irish Whiskey, Chocolate Bitters. A creamy blast from the past.', 'price' => '€9.50'],
                        ['title' => 'Yellowman Eton Mess (3,7) €9.50', 'desc' => 'Crushed meringue, fresh berries, whipped cream served with Yellowman honeycomb from Ballycastle.', 'price' => '€9.50'],
                        ['title' => 'Sticky Toffee Pudding (1,3,7,8,12)', 'desc' => 'Warm sticky toffee pudding with rich toffee sauce served with rum & raisin ice cream.', 'price' => '€9.50'],
                        ['title' => 'Ice Cream (1,3,7,12)', 'desc' => 'Vanilla, Chocolate, Strawberry, Mokka, Brown Bread, Rum and Raisin.', 'price' => '€7.50'],
                        ['title' => 'Affogato (1,3,7)', 'desc' => 'Vanilla ice cream covered with a shot of espresso and some homemade shortbread.', 'price' => '€7.50'],
                        ['title' => 'Irish Cheeseboard (1,3,7) €17.00', 'desc' => 'A variety of the best Irish cheeses served with freshly baked brown bread, crackers, pickle relish and grapes.', 'price' => '€17.00'],
                    ];
                    foreach ($desserts as $item): ?>
                    <div class="menu-item-row">
                        <div class="item-info">
                            <h4><?php echo $item['title']; ?></h4>
                            <p><?php echo $item['desc']; ?></p>
                        </div>
                        <div class="item-price"><?php echo $item['price']; ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="menu-group mt-5 pt-5">
                <div class="group-header">
                    <h3 class="group-main-title" style="color: #ebe9df; font-family: 'Lexend'; font-size: 1.6rem; letter-spacing: 0.2em;">ALLERGENS</h3>
                </div>
                <div class="group-items">
                    <div class="row allergens-grid">
                        <div class="">
                            <p><span>1</span> Cereals/Wheat</p>
                            <p><span>2</span> Crustaceans</p>
                            <p><span>3</span> Eggs</p>
                            <p><span>4</span> Fish</p>
                            <p><span>5</span> Peanuts</p>
                        </div>
                        <div class="">
                            <p><span>6</span> Soya</p>
                            <p><span>7</span> Milk</p>
                            <p><span>8</span> Nuts/Pecan</p>
                            <p><span>9</span> Celery</p>
                            <p><span>10</span> Mustard</p>
                        </div>
                        <div class="">
                            <p><span>11</span> Sesame Seeds</p>
                            <p><span>12</span> Sulphur Dioxide</p>
                            <p><span>13</span> Lupin</p>
                            <p><span>14</span> Molluscs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Main Menu Section -->
    <!-- <section id="main-menu-section" class="menu-display-section" style="background-color: #052C1B;">
        <div class="container">
            <h4 class="menu-category-title">MAIN MENU</h4>
            
            <?php
            $main_menu_parent = get_term_by('slug', 'main-menu', 'menu_category');
            if ($main_menu_parent):
                $sub_categories = get_terms(array(
                    'taxonomy' => 'menu_category',
                    'parent' => $main_menu_parent->term_id,
                    'hide_empty' => false,
                    'orderby' => 'term_id',
                    'order' => 'ASC'
                ));

                foreach ($sub_categories as $sub_cat):
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
                            <?php if ($sub_cat->slug === 'sides'): ?>
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
                                wp_reset_postdata();
                            endif; ?>
                        </div>
                    </div>
                <?php endforeach; endif; ?>

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
                    <h3 class="group-main-title" style="color: #ebe9df; font-family: 'Lexend'; font-size: 1.6rem; letter-spacing: 0.2em;">ALLERGENS</h3>
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
                                    <p style="display: flex; gap: 0.5rem;"><span><?php echo $count; ?></span> <?php the_title(); ?></p>
                                <?php if ($count % 5 === 0 || $count === $allergens_query->post_count)
                                    echo '</div>'; ?>
                        <?php $count++; endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            <?php endif; endif; ?>
        </div>
    </section> -->

    <!-- Main Menu Section (Tabs / Boxed Version) -->
    <section id="main-menu-accordion-section" class="menu-display-section"
        style="background-color: #052C1B; padding-top: 5rem; padding-bottom: 5rem;">
        <style>
            .circle-nav-btn {
                width: 19%;
                height: auto;
                border-radius: 4px !important;
                border: 1px solid #b17c2b !important;
                color: #ebe9df !important;
                font-size: 1.6rem;
                text-transform: uppercase;
                display: flex;
                justify-content: center;
                padding: 15px;
                transition: all 0.3s ease;
            }

            .circle-nav-btn:hover {
                background-color: rgba(212, 175, 55, 0.15) !important;
                color: #b17c2b !important;
            }

            .circle-nav-btn.active {
                background-color: #b17c2b !important;
                color: #ebe9df !important;
                border-color: #b17c2b !important;
            }

            .menu-item-box {
                transition: transform 0.3s ease, border-color 0.3s ease;
                background-color: transparent;
            }

            .menu-item-box:hover {
                border-color: #b17c2b !important;
                transform: translateY(-2px);
            }
        </style>

        <div class="container">
            <h4 class="menu-category-title mb-5 text-center laima-font" style="color: #ebe9df; letter-spacing: 2px;">
                MAIN MENU</h4>

            <?php
            if ($main_menu_parent):
                ?>
                <!-- Category Circular Tabs -->
                <div class="nav nav-pills justify-content-between mb-5 gap-3" id="mainMenuTabs" role="tablist">
                    <?php
                    $index = 0;
                    foreach ($sub_categories as $sub_cat):
                        if ($sub_cat->slug === 'allergens')
                            continue;
                        $index++;
                        $tab_id = "tab-menu-" . $index;
                        $content_id = "content-menu-" . $index;
                        $is_active = ($index === 1) ? 'active' : '';
                        ?>
                        <button class="nav-link circle-nav-btn <?php echo $is_active; ?>" id="<?php echo $tab_id; ?>"
                            data-bs-toggle="pill" data-bs-target="#<?php echo $content_id; ?>" type="button" role="tab"
                            aria-controls="<?php echo $content_id; ?>"
                            aria-selected="<?php echo ($index === 1) ? 'true' : 'false'; ?>">
                            <?php echo $sub_cat->name; ?>
                        </button>
                    <?php endforeach; ?>
                </div>

                <!-- Allergen Filter Section -->
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
                        $allergens_list = [];
                        $count = 1;
                        while ($allergens_query->have_posts()) {
                            $allergens_query->the_post();
                            $allergens_list[$count] = get_the_title();
                            $count++;
                        }
                        wp_reset_postdata();
                        ?>
                        <div class="allergen-filter-section mb-5"
                            style="border-top: 1px solid rgba(177, 124, 43, 0.5); border-bottom: 1px solid rgba(177, 124, 43, 0.5); padding: 15px 0;">
                            <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                                data-bs-target="#allergenFilterCollapse" style="cursor: pointer;">
                                <span style="color: #ebe9df; font-size: 1.4rem; font-family: 'Lexend', sans-serif;">Filter</span>
                                <span
                                    style="color: #b17c2b; font-size: 1.2rem; font-family: 'Lexend', sans-serif; text-transform: uppercase; font-weight: 500;">ALLERGEN
                                    FILTER <span style="font-size: 0.8em; margin-left: 5px;">▼</span></span>
                            </div>

                            <div class="collapse mt-4" id="allergenFilterCollapse">
                                <div
                                    style="background-color: rgba(235, 233, 223, 0.03); padding: 30px; border: 1px solid rgba(177, 124, 43, 0.2);">
                                    <p
                                        style="color: #b17c2b; font-size: 1.4rem; font-weight: 500; margin-bottom: 25px; font-family: 'Lexend', sans-serif;">
                                        Does not contain:</p>
                                    <div class="row">
                                        <?php foreach ($allergens_list as $num => $name): ?>
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <label class="allergen-checkbox-label"
                                                    style="display: flex; align-items: center; cursor: pointer; color: #ebe9df; font-size: 1.2rem; font-family: 'Lexend', sans-serif;">
                                                    <input type="checkbox" class="allergen-filter-checkbox" value="<?php echo $num; ?>"
                                                        style="display: none;">
                                                    <span class="custom-checkbox"
                                                        style="width: 22px; height: 22px; border: 1px solid #b17c2b; border-radius: 50%; display: inline-block; margin-right: 12px; position: relative; flex-shrink: 0;"></span>
                                                    <?php echo $name; ?>
                                                </label>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="text-center mt-5">
                                        <button id="clearAllergenFilters"
                                            style="background-color: #b17c2b; color: #052C1B; border: none; padding: 12px 35px; font-family: 'Lexend', sans-serif; font-weight: 500; font-size: 1.2rem; cursor: pointer; transition: opacity 0.3s;"
                                            onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">CLEAR
                                            FILTERS</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .allergen-checkbox-label input:checked+.custom-checkbox {
                                background-color: #b17c2b;
                            }

                            .allergen-checkbox-label input:checked+.custom-checkbox::after {
                                content: '';
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                                width: 8px;
                                height: 8px;
                                background-color: #052C1B;
                                border-radius: 50%;
                            }
                        </style>
                    <?php endif; endif; ?>

                <!-- Tab Contents (Menu Items) -->
                <div class="tab-content" id="mainMenuTabsContent">
                    <?php
                    $index = 0;
                    foreach ($sub_categories as $sub_cat):
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
                        $index++;
                        $tab_id = "tab-menu-" . $index;
                        $content_id = "content-menu-" . $index;
                        $is_active = ($index === 1) ? 'show active' : '';
                        ?>
                        <div class="tab-pane fade <?php echo $is_active; ?>" id="<?php echo $content_id; ?>" role="tabpanel"
                            aria-labelledby="<?php echo $tab_id; ?>" tabindex="0">

                            <div class="text-center mb-5 mt-4">
                                <h3 class="laima-font text-gold"><?php echo $sub_cat->name; ?></h3>
                                <?php if ($cat_irish = get_field('irish_translation', $sub_cat)): ?>
                                    <p><?php echo $cat_irish; ?></p>
                                <?php endif; ?>
                                <?php if ($sub_cat->name == 'Mains'): ?>
                                    <p style="font-weight: 300; font-size: 1.6rem;">Weekend Specials Available, please ask your
                                        server</p>
                                <?php endif; ?>
                            </div>

                            <div class="row g-4">
                                <?php if ($items_query->have_posts()):
                                    while ($items_query->have_posts()):
                                        $items_query->the_post();
                                        $price = get_field('price');
                                        $desc = get_field('description');
                                        $title = get_the_title();

                                        $allergens_attr = '';
                                        if (preg_match('/\(([\d,\s]+)\)/', $title, $matches)) {
                                            $allergens_attr = str_replace(' ', '', $matches[1]);
                                        }
                                        ?>
                                        <div class="col-md-6 menu-item-container" data-allergens="<?php echo $allergens_attr; ?>">
                                            <div class="menu-item-box h-100"
                                                style="border: 1px solid rgba(235, 233, 223, 0.25); padding: 25px;">
                                                <div class="box-header"
                                                    style="display: flex; justify-content: flex-start; gap: 8px; margin-bottom: 12px; align-items: baseline; flex-wrap: wrap;">
                                                    <h4
                                                        style="font-size: 1.6rem; margin: 0; color: #ebe9df; text-transform: uppercase; font-family: 'Lexend', sans-serif; font-weight: 400;">
                                                        <?php echo $title; ?>
                                                    </h4>
                                                    <?php if ($price): ?>
                                                        <span style="color: #b17c2b; font-size: 1.6rem; opacity: 0.8;">|</span>
                                                        <span
                                                            style="color: #b17c2b; font-size: 1.6rem; font-weight: 500;"><?php echo $price; ?></span>
                                                    <?php endif; ?>
                                                </div>
                                                <?php if ($desc): ?>
                                                    <p
                                                        style="font-size: 1.4rem; margin: 0; color: #ebe9df; font-weight: 300; line-height: 1.6; opacity: 0.9;">
                                                        <?php echo $desc; ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if (false):  // OLD ALLERGENS SECTION COMMENTED OUT ?>
                <!-- Allergens Section (Static / Consistent with dark UI) -->
                <?php
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
                        <div class="mt-5 pt-5 border-top border-secondary">
                            <h3 class="group-main-title text-center mb-4"
                                style="color: #ebe9df; font-family: 'Lexend'; font-size: 2.6rem">ALLERGENS</h3>
                            <div class="row allergens-grid justify-content-center">
                                <?php
                                $count = 1;
                                while ($allergens_query->have_posts()):
                                    $allergens_query->the_post();
                                    ?>
                                    <?php if (($count - 1) % 5 === 0)
                                        echo '<div class="col-md-3 col-sm-6">'; ?>
                                    <p style="display: flex; gap: 0.5rem; color: #ebe9df;"><span><?php echo $count; ?></span>
                                        <?php the_title(); ?></p>
                                    <?php if ($count % 5 === 0 || $count === $allergens_query->post_count)
                                        echo '</div>'; ?>
                                    <?php $count++; endwhile;
                                wp_reset_postdata(); ?>
                            </div>
                        </div>
                    <?php endif; endif; ?>
            <?php endif; // END OLD ALLERGENS SECTION COMMENT OUT ?>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const checkboxes = document.querySelectorAll('.allergen-filter-checkbox');
                    const menuItems = document.querySelectorAll('.menu-item-container');
                    const clearBtn = document.getElementById('clearAllergenFilters');

                    function filterMenuItems() {
                        const selectedAllergens = Array.from(checkboxes)
                            .filter(cb => cb.checked)
                            .map(cb => cb.value);

                        menuItems.forEach(item => {
                            if (selectedAllergens.length === 0) {
                                item.style.display = 'block';
                                return;
                            }

                            const itemAllergensStr = item.getAttribute('data-allergens');
                            if (!itemAllergensStr) {
                                // If item has no allergens, it's safe to show
                                item.style.display = 'block';
                                return;
                            }

                            const itemAllergens = itemAllergensStr.split(',').map(s => s.trim());

                            // "Does not contain" logic: Hide if the item CONTAINS ANY of the selected allergens
                            let shouldHide = false;
                            for (let allergen of selectedAllergens) {
                                if (itemAllergens.includes(allergen)) {
                                    shouldHide = true;
                                    break;
                                }
                            }

                            if (shouldHide) {
                                item.style.display = 'none';
                            } else {
                                item.style.display = 'block';
                            }
                        });
                    }

                    checkboxes.forEach(cb => {
                        cb.addEventListener('change', filterMenuItems);
                    });

                    if (clearBtn) {
                        clearBtn.addEventListener('click', function (e) {
                            e.preventDefault();
                            checkboxes.forEach(cb => cb.checked = false);
                            filterMenuItems();
                        });
                    }
                });
            </script>
        </div>
    </section>

    <!-- Drinks Section -->
    <section id="drinks-menu-section" class="menu-display-section"
        style="background-color: #edebe2; position: relative; overflow: hidden;">
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
                        if ($drink_cat->slug === 'wine')
                            continue;

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

                        <?php if ($drink_cat->slug === 'whiskey'):
                            $wine_parent = get_term_by('slug', 'wine', 'menu_category');
                            if ($wine_parent):
                                ?>
                                <!-- Manual Wine Toggle Item -->
                                <div class="drinks-toggle-item slug-wine">
                                    <div class="drinks-toggle-header" onclick="toggleDrinkItem(this)">
                                        <h3 class="laima-font text-gold"><?php echo $wine_parent->name; ?></h3>
                                        <div class="toggle-arrow">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/drinks-arrow-down.svg"
                                                alt="Toggle">
                                        </div>
                                    </div>
                                    <div class="drinks-toggle-content">
                                        <div class="content-inner">
                                            <div class="wine-nested-categories">
                                                <?php
                                                $wine_subcats = get_terms(array(
                                                    'taxonomy' => 'menu_category',
                                                    'parent' => $wine_parent->term_id,
                                                    'hide_empty' => true,
                                                ));

                                                // Manual ordering
                                                $order = array('white-wine', 'rose-wine', 'red-wine', 'sparkling-wine');
                                                usort($wine_subcats, function ($a, $b) use ($order) {
                                                    $pos_a = array_search($a->slug, $order);
                                                    $pos_b = array_search($b->slug, $order);
                                                    return $pos_a - $pos_b;
                                                });

                                                foreach ($wine_subcats as $wine_sub):
                                                    $wine_items = new WP_Query(array(
                                                        'post_type' => 'menu_item',
                                                        'posts_per_page' => -1,
                                                        'tax_query' => array(
                                                            array(
                                                                'taxonomy' => 'menu_category',
                                                                'field' => 'slug',
                                                                'terms' => $wine_sub->slug,
                                                            ),
                                                        ),
                                                        'orderby' => 'menu_order',
                                                        'order' => 'ASC',
                                                    ));
                                                    if ($wine_items->have_posts()):
                                                        ?>
                                                        <div class="wine-subcategory-group">
                                                            <h4 class="wine-subcategory-title text-center Lexend-font">
                                                                <?php echo strtoupper($wine_sub->name); ?>
                                                            </h4>
                                                            <div class="wine-items-list row">
                                                                <?php while ($wine_items->have_posts()):
                                                                    $wine_items->the_post();
                                                                    $subtitle = get_field('wine_subtitle');
                                                                    $variety = get_field('grape_variety');
                                                                    $country = get_field('country');
                                                                    $region = get_field('region');
                                                                    $notes = get_field('tasting_notes');
                                                                    $bottle = get_field('bottle_price');
                                                                    $glass = get_field('glass_price');
                                                                    ?>
                                                                    <div class="col-lg-4 mb-5">
                                                                        <div class="detailed-wine-item text-start">
                                                                            <div class="wine-title-area">
                                                                                <h5 class="wine-name Lexend-font"><?php the_title(); ?></h5>
                                                                                <?php if ($subtitle): ?>
                                                                                    <div class="wine-subtitle Lexend-font text-uppercase">
                                                                                        <?php echo $subtitle; ?>
                                                                                    </div>
                                                                                <?php endif; ?>
                                                                            </div>

                                                                            <div class="wine-details-area">
                                                                                <?php if ($variety): ?>
                                                                                    <p class="wine-detail-row"><strong>GRAPE VARIETY:</strong>
                                                                                        <?php echo $variety; ?></p>
                                                                                <?php endif; ?>
                                                                                <?php if ($country): ?>
                                                                                    <p class="wine-detail-row"><strong>COUNTRY:</strong>
                                                                                        <?php echo $country; ?></p>
                                                                                <?php endif; ?>
                                                                                <?php if ($region): ?>
                                                                                    <p class="wine-detail-row"><strong>REGION:</strong>
                                                                                        <?php echo $region; ?></p>
                                                                                <?php endif; ?>
                                                                                <?php if ($notes): ?>
                                                                                    <div class="wine-tasting-notes mt-3">
                                                                                        <strong class="d-block mb-2 text-uppercase">Tasting
                                                                                            Notes</strong>
                                                                                        <p class="mb-0"><?php echo $notes; ?></p>
                                                                                    </div>
                                                                                <?php endif; ?>
                                                                            </div>

                                                                            <div class="wine-pricing-area d-flex gap-5 mt-4 justify-content-start">
                                                                                <?php if ($bottle): ?>
                                                                                    <div class="price-item"><strong>Bottle:</strong>
                                                                                        €<?php echo $bottle; ?></div>
                                                                                <?php endif; ?>
                                                                                <?php if ($glass): ?>
                                                                                    <div class="price-item"><strong>Glass:</strong>
                                                                                        €<?php echo $glass; ?></div>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php endwhile;
                                                                wp_reset_postdata(); ?>
                                                            </div>
                                                        </div>
                                                    <?php endif; endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; endif; ?>
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

                    // Ensure header is in view at the top (with offset for sticky header)
                    setTimeout(() => {
                        const offset = 100; // Account for sticky header
                        const elementPosition = header.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - offset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }, 300); // Wait for transition to start
                } else {
                    content.style.maxHeight = 0;
                }
            }
        </script>
    </section>

    <!-- Craft Cocktails Section -->
    <section id="craft-cocktails-section" class="craft-cocktails-section">
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
                    <p class="section-intro mx-auto mb-2" style="color: #26241a; max-width: unset;">Expertly prepared,
                        perfectly balanced, ready to enjoy.</p>
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
                        <p>A vibrant passion fruit cocktail served with a touch of sparkle.</p>
                    </div>
                </div>
            </div>

            <div class="row cocktail-header-row text-center justify-content-center" style="margin-top: 5rem">
                <div class="col-lg-8">
                    <h2 class="section-main-title Lexend-font mb-4" style="color: #26241a; font-weight: 300;">SIGNATURE
                        COCKTAILS</h2>
                    <!-- <p class="section-intro mx-auto mb-2" style="color: #26241a; max-width: unset;">Expertly prepared, perfectly balanced, ready to enjoy.</p> -->
                    <p class="section-price mb-5" style="color: #26241a; font-weight: 500;">€16.50 each</p>
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

    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" class="scroll-to-top-btn" aria-label="Scroll to top">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/scroll-up-arrow.png" alt="Scroll Up">
    </button>

</main>



<?php get_footer(); ?>