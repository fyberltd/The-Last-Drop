<?php
/*template name: whats-on*/
get_header(); ?>

<main id="whats_on_page" class="whats-on-main">
    <section class="whats-on-hero">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="<?php echo get_template_directory_uri(); ?>/images/video/whats-on-hero-bg.mp4"
                type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="hero-title laima-font">What's On</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="event-section">

        <section class="whats-on-intro-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h2 class="section-title laima-font">Come and see something different during your stay in Cobh.
                        </h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="section-desc">The Last Drop occasionally hosts gigs and events with local artist
                            throughout the year. See our upcoming events here, some event required a reservation or
                            ticket. These can be purchased using the links below.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="events-filter-bar">
            <div class="container">
                <div class="filter-row">
                    <div class="tags-container">
                        <span class="label text-uppercase">Tags</span>
                        <a href="#" class="tag-pill active">Music <img src="<?php echo get_template_directory_uri(); ?>/images/icons/cross.svg" alt="cross"></a>
                        <a href="#" class="tag-pill">Arts</a>
                        <a href="#" class="tag-pill">Food & Drink</a>
                        <a href="#" class="tag-pill">St. Patrick's Day</a>
                        <a href="#" class="tag-pill">Misc</a>
                    </div>

                    <div class="sort-container">
                        <span class="label text-uppercase">Sort by</span>
                        <div class="sort-select-wrap">
                            <select name="sort" id="sort-select">
                                <option value="latest">Latest</option>
                                <option value="oldest">Oldest</option>
                                <option value="datewise">Datewise</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="events-grid-section">
            <div class="container">
                <div class="row">
                    <!-- Event 1 -->
                    <div class="col-lg-4 mb-grid">
                        <div class="event-card">
                            <div class="img-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/music.jpg"
                                    alt="Ellie O'Neill">
                                <span class="badge">Music</span>
                            </div>
                            <div class="event-date">Apr 10, 2026, 8:00 pm</div>
                            <h3 class="event-title">Ellie O'Neill</h3>
                            <div class="event-desc">
                                <p>Ellie O'Neill is an artist from Co. Meath, Ireland. Her music weaves a rich, diverse
                                    and tender landscape, traversing raw and intuitive explorations of intimacy and
                                    loss, friendship and queer identity. Writing mainly with voice and acoustic guitar,
                                    her songs range from cyclical, meditative, two-chord reveries to big-hearted,
                                    muscular, grungy confessionals.</p>
                            </div>
                            <p class="reservation-note"><strong>No reservations required.</strong></p>
                        </div>
                    </div>

                    <!-- Event 2 -->
                    <div class="col-lg-4 mb-grid">
                        <div class="event-card">
                            <div class="img-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/food-drink.jpg"
                                    alt="Whiskey Tasting">
                                <span class="badge">Food & Drink</span>
                            </div>
                            <div class="event-date">Apr 10, 2026, 8:00 pm</div>
                            <h3 class="event-title">Whiskey Tasting</h3>
                            <div class="event-desc">
                                <p>Spend an hour with the guys at Spirit of Ireland distillery and you will experience
                                    the passion and enthusiasm that goes into every drop produced here.</p>
                                <p>The distillery's expert guides will tell you all about this age-old, hands-on process
                                    that is part science, part patience and part instinct. And you'll round off the tour
                                    with a chance to try some of the Maturing Malt.</p>
                                <p><strong>What to expect on the tour:</strong></p>
                                <ul>
                                    <li>An introduction to the Spirit of Ireland and its founders in the Distillery
                                        Boardroom</li>
                                    <li>An up close and detailed description of the distilling process alongside some of
                                        the largest copper pot stills in Ireland</li>
                                    <li>Learn about how the unique choice of casks will influence the Maturing Spirit
                                        over the years</li>
                                    <li>Rounding off with three tasters of Spirit of Ireland’s latest releases and
                                        maturing spirits</li>
                                </ul>
                            </div>
                            <a href="#" class="btn-gold">Book now</a>
                        </div>
                    </div>

                    <!-- Event 3 -->
                    <div class="col-lg-4 mb-grid">
                        <div class="event-card">
                            <div class="img-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/patrick-day-celebration.jpg"
                                    alt="St. Patrick's Day Celebrations">
                                <span class="badge">St. Patrick's Day</span>
                            </div>
                            <div class="event-date">Mar 17, 2026, 8:00 pm</div>
                            <h3 class="event-title">St. Patrick's Day Celebrations</h3>
                            <div class="event-desc">
                                <p>Get ready to come alive for Saint Patrick's celebrations at the Last Drop! With
                                    feel-good tunes, crackin' food and enough drinks to keep a leprechaun happy, get
                                    ready to soak up live music from talented up and coming artists, and celebrate with
                                    friends.</p>
                                <p>Your paddy's day luck doesn't end there, we have 50% off a single Paddy's Apple &
                                    Lemonade drink, made with Paddy Devils Apple Irish Whisky drink offer available from
                                    the 16th March - 12th April! 💚</p>
                            </div>
                            <p class="reservation-note"><strong>No reservations required.</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Second Row (Initially Hidden) -->
                <div class="row extra-events" style="display: none;">
                    <!-- Replicated Event 1 -->
                    <div class="col-lg-4 mb-grid">
                        <div class="event-card">
                            <div class="img-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/music.jpg"
                                    alt="Ellie O'Neill">
                                <span class="badge">Music</span>
                            </div>
                            <div class="event-date">Apr 10, 2026, 8:00 pm</div>
                            <h3 class="event-title">Ellie O'Neill (Replicated)</h3>
                            <div class="event-desc">
                                <p>Ellie O'Neill is an artist from Co. Meath, Ireland. Her music weaves a rich, diverse
                                    and tender landscape, traversing raw and intuitive explorations of intimacy and
                                    loss, friendship and queer identity.</p>
                            </div>
                            <p class="reservation-note"><strong>No reservations required.</strong></p>
                        </div>
                    </div>

                    <!-- Replicated Event 2 -->
                    <div class="col-lg-4 mb-grid">
                        <div class="event-card">
                            <div class="img-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/food-drink.jpg"
                                    alt="Whiskey Tasting">
                                <span class="badge">Food & Drink</span>
                            </div>
                            <div class="event-date">Apr 10, 2026, 8:00 pm</div>
                            <h3 class="event-title">Whiskey Tasting (Replicated)</h3>
                            <div class="event-desc">
                                <p>Spend an hour with the guys at Spirit of Ireland distillery and you will experience
                                    the passion and enthusiasm that goes into every drop produced here.</p>
                            </div>
                            <a href="#" class="btn-gold">Book now</a>
                        </div>
                    </div>

                    <!-- Replicated Event 3 -->
                    <div class="col-lg-4 mb-grid">
                        <div class="event-card">
                            <div class="img-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/patrick-day-celebration.jpg"
                                    alt="St. Patrick's Day Celebrations">
                                <span class="badge">St. Patrick's Day</span>
                            </div>
                            <div class="event-date">Mar 17, 2026, 8:00 pm</div>
                            <h3 class="event-title">St. Patrick's Day Celebrations (Replicated)</h3>
                            <div class="event-desc">
                                <p>Get ready to come alive for Saint Patrick's celebrations at the Last Drop! With
                                    feel-good tunes, crackin' food and enough drinks to keep a leprechaun happy.</p>
                            </div>
                            <p class="reservation-note"><strong>No reservations required.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="view-more-section">
            <div class="container">
                <p id="view-more-label">View more</p>
                <a href="javascript:void(0);" class="view-more-trigger">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/down.svg" alt="down">
                </a>
            </div>
        </section>

        <section class="whats-on-subscription">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="laima-font">Keep up to date with the latest show and event announcements</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="form_wrap">
                            <?php echo do_shortcode('[contact-form-7 id="c49fd22" title="Footer Email Subscription"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $('.view-more-trigger').on('click', function (e) {
                e.preventDefault();
                var $trigger = $(this);
                var $extraEvents = $('.extra-events');
                var $label = $('#view-more-label');

                $extraEvents.slideToggle(800);
                $trigger.toggleClass('active');
                
                // Toggle text
                if ($trigger.hasClass('active')) {
                    $label.text('View less');
                } else {
                    $label.text('View more');
                }
            });
        });
    </script>

</main>



<?php get_footer(); ?>