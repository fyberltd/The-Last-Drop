<?php
/*template name: discover-cobh*/
get_header(); ?>

<main id="discover_cobh_page" class="discover-cobh-main">
    <section class="discover-cobh-hero">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="<?php echo get_template_directory_uri(); ?>/images/video/discover-cobh-hero-bg.mp4"
                type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="hero-title laima-font">Discover Cobh</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Nearby Attractions Section -->
    <section class="nearby-attractions-section" id="nearby-attractions">
        <div class="container">
            <div class="row info-row align-items-end mb-5 section-header">
                <div class="col-lg-6">
                    <h2 class="section-title">Nearby Attractions</h2>
                </div>
                <div class="col-lg-6">
                    <p class="section-intro">The Last Drop is located within the town centre waterfront area, meaning
                        most of Cobh's attractions, shops, and viewpoints are reachable in less than 5 minutes on foot.
                    </p>
                </div>
            </div>

            <div class="row attractions-grid">
                <?php
                $attractions = [
                    [
                        'title' => 'Cobh Heritage Centre',
                        'img' => 'Cobh-Heritage-Centre.jpg',
                        'desc' => 'Located on the historic quayside, the Cobh Heritage Centre tells the powerful story of Irish emigration. Through engaging exhibits and personal stories, visitors can learn about the millions who left Ireland from this very harbour in search of new lives around the world.',
                        'distance' => '1-2 mins',
                        'link_text' => 'The Cobh Heritage Centre'
                    ],
                    [
                        'title' => 'Titanic Experience Cobh',
                        'img' => 'Titanic-Experience-Cobh.jpg',
                        'desc' => 'Set inside the original White Star Line ticket office, Titanic Experience Cobh offers an immersive journey into the final port of call of the RMS Titanic in 1912. Visitors can follow the stories of real passengers who boarded the ship here before its fateful voyage.',
                        'distance' => '2-3 mins',
                        'link_text' => 'Titanic Experience Cobh'
                    ],
                    [
                        'title' => 'St Colman\'s Cathedral',
                        'img' => 'St-Colman\'s-Cathedral.jpg',
                        'desc' => 'Dominating the skyline above the harbour, St Colman\'s Cathedral is one of Ireland\'s most striking neo-Gothic churches. Its soaring spire, beautiful stained glass windows, and panoramic views over Cork Harbour make it one of Cobh\'s most recognisable landmarks.',
                        'distance' => '8-10 mins',
                        'link_text' => 'St Colman\'s Cathedral'
                    ],
                    [
                        'title' => 'Cobh Gifts',
                        'img' => 'cobh-gifts.jpg',
                        'desc' => 'Cobh Gifts located on the East Side of town is now open in Cobh offering unique and exclusive Cobh themed items, Gifts for all occasions and souvenirs that celebrate the charm of our seaside town.',
                        'distance' => '5-6 mins',
                        'link_text' => 'The Cobh Heritage Centre'
                    ],
                    [
                        'title' => 'Spike Island',
                        'img' => 'spike-island.jpg',
                        'desc' => 'Formerly the world\'s largest prison, today you can explore several museums, exhibitions, scenic island walks, child friendly areas and a cafe and gift shop. Visit includes ferry, guided tour and free map and downloadable app.',
                        'distance' => '5-6 mins',
                        'link_text' => 'Spike Island'
                    ],
                    [
                        'title' => 'Cork Harbour Boat Hire',
                        'img' => 'cobh-harbour.jpg',
                        'desc' => 'Cork Harbour Boat Hire allows you to explore the vast depths of Cork Harbour on a fantastic boating adventure. This is an ideal day out in Cork for groups of all ages and sizes, with the easy to drive boats making it very easy to navigate the waters with Cork Harbour Boat Hire. There is so much to explore in Cork Harbour, and this fantastic boat trip is an ideal way to take in the fresh sea air and see another side of Cork.',
                        'sub_sections' => [
                            [
                                'title' => 'Sea Safari ribs',
                                'desc' => 'A great new addition to our fleet for those of you looking to explore Cork Harbour in speed & comfort! One of our fully qualified skippers will take you on an unforgettable trip around the second largest natural harbour in the world. Learn all about Cork Harbours rich history, take in the sights, check out the local wildlife, stop off for some food & drink at one of the many bars & restaurants along the way. We cater for groups as small as 4 or up to larger groups of 50. Available for 1, 2 & 3 hour bookings. Collection points all over the harbour.'
                            ]
                        ],
                        'distance' => '5-6 mins',
                        'link_text' => 'St Colman\'s Cathedral'
                    ]
                ];
                foreach ($attractions as $attraction): ?>
                    <div class="col-lg-4 attraction-col">
                        <div class="attraction-card">
                            <div class="img-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/<?php echo $attraction['img']; ?>"
                                    alt="<?php echo $attraction['title']; ?>">
                            </div>
                            <div class="card-content">
                                <h3 class="attraction-name">
                                    <?php echo $attraction['title']; ?>
                                </h3>
                                <p class="attraction-desc">
                                    <?php echo $attraction['desc']; ?>
                                </p>

                                <?php if (isset($attraction['sub_sections'])): ?>
                                    <?php foreach ($attraction['sub_sections'] as $sub): ?>
                                        <h4 class="attraction-subname Lexend-font">
                                            <?php echo $sub['title']; ?>
                                        </h4>
                                        <p class="attraction-desc">
                                            <?php echo $sub['desc']; ?>
                                        </p>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                                <div class="distance-info">
                                    <p class="label">Walking distance from The Last Drop:</p>
                                    <span class="badge">
                                        <?php echo $attraction['distance']; ?>
                                    </span>
                                </div>

                                <div class="website-info">
                                    <p class="label">Website:</p>
                                    <a href="#" class="btn btn-outline-dark">
                                        <?php echo $attraction['link_text']; ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="find-us-cta">
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

    <!-- <script async src="https://bookings.tablepath.com/js/dist/widget.min.js"></script><a href="https://bookings.tablepath.com/l2fx9d/the-last-drop-reservations" tppw-id="l2fx9d" tppw-code="the-last-drop-reservations">Book Now</a> -->

    <?php get_template_part('z-components/call-to-action'); ?>

</main>



<?php get_footer(); ?>