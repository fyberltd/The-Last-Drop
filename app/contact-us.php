<?php
/*template name: Contact Us*/
?>

<?php
get_header();
?>

<main id="contact_us_page" class="contact-us-main">
    <section class="contact-us-hero">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="<?php echo get_template_directory_uri(); ?>/images/video/contact-us-hero-bg.mp4"
                type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="hero-title laima-font">Contact us</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="opening-parking-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="opening-hours">
                        <h2 class="section-subtitle">RESTAURANT HOURS</h2>
                        <table class="hours-table">
                            <tbody>
                                <tr>
                                    <td>Monday</td>
                                    <td>12 midday to 6pm (Lunch Menu Only)</td>
                                    <!-- <td>5pm - 10pm</td> -->
                                </tr>
                                <tr>
                                    <td>Tuesday</td>
                                    <td>12 midday to 8.30pm</td>
                                    <!-- <td>Closed</td> -->
                                </tr>
                                <tr>
                                    <td>Wednesday</td>
                                    <td>12 midday to 8.30pm</td>
                                    <!-- <td>Closed</td> -->
                                </tr>
                                <tr>
                                    <td>Thursday</td>
                                    <td>12 midday to 8.30pm</td>
                                    <!-- <td>5pm - 10pm</td> -->
                                </tr>
                                <tr>
                                    <td>Friday</td>
                                    <td>12 midday to 8.30pm</td>
                                    <!-- <td>5pm - 10pm</td> -->
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td>12 midday to 8.30pm</td>
                                    <!-- <td>3pm - 8:30pm</td> -->
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td>12 midday to 7:30pm</td>
                                    <!-- <td>3pm - 7pm</td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="opening-hours">
                        <h2 class="section-subtitle">BAR HOURS</h2>
                        <table class="hours-table">
                            <tbody>
                                <tr>
                                    <td>Monday</td>
                                    <td>12 midday to 6pm</td>
                                    <!-- <td>5pm - 10pm</td> -->
                                </tr>
                                <tr>
                                    <td>Tuesday</td>
                                    <td>12 midday to 11:30pm</td>
                                    <!-- <td>Closed</td> -->
                                </tr>
                                <tr>
                                    <td>Wednesday</td>
                                    <td>12 midday to 11:30pm</td>
                                    <!-- <td>Closed</td> -->
                                </tr>
                                <tr>
                                    <td>Thursday</td>
                                    <td>12 midday to 11:30pm</td>
                                    <!-- <td>5pm - 10pm</td> -->
                                </tr>
                                <tr>
                                    <td>Friday</td>
                                    <td>12 midday to 12:30am</td>
                                    <!-- <td>5pm - 10pm</td> -->
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td>12 midday to 12:30am</td>
                                    <!-- <td>3pm - 8:30pm</td> -->
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td>12 midday to 11:00pm</td>
                                    <!-- <td>3pm - 7pm</td> -->
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="address-map-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="address-details">
                        <h5>ADDRESS</h5>
                        <div class="address-lines">
                            <p>17 Westbourne Place<br>Cobh, Co. Cork</p>
                            <p>+353 21 4718282</p>
                            <p>admin@thelastdropcobh.com</p>
                        </div>
                        <div class="btn-box">
                            <a href="https://maps.app.goo.gl/YTZqv3QuozcRMZ5A6" target="_blank"
                                class="btn btn-outline-gold">Get Directions</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="map-container">
                        <div id="custom-google-map" style="width: 100%; height: 500px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h5 class="section-title laima-font">Restaurant bookings and reservations</h5>
                        <p>At the current time, we are only expecting walk-ins to allow our staff to settle in to our
                            new surroundings</p>
                        <div class="contact-details">
                            <a href="mailto:thesnug@thelastdropcobh.com">thesnug@thelastdropcobh.com</a>
                            <a href="tel:+353214718282">+353 21 4718282</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h5 class="section-title laima-font">Feedback</h5>
                        <p>We welcome your feedback. We'd love to hear about your recent experience as we're always
                            striving to deliver the best. Our survey will only take a minute of your time.</p>
                        <a href="mailto:admin@thelastdropcobh.com">admin@thelastdropcobh.com</a>
                        <!-- <a href="" class="btn btn-gold">Give Feedback</a> -->
                    </div>
                </div>
                <!-- <div class="col-lg-4">
                    <div class="contact-info">
                        <h5 class="section-title laima-font">Online Orders and Accounts</h5>
                        <p>For information and advice on new and existing orders, problems accessing your online account, or to give feedback regarding our online shop please click Email Online Shop below to contact us.</p>
                        <a href="" class="btn btn-gold">Email Online Shop</a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <section class="form-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-content">
                        <h4 class="section-title laima-font">Other Enquiries</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div><?php echo do_shortcode('[contact-form-7 id="31f0a0b" title="Contact form"]'); ?></div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content">
                        <h4 class="section-title laima-font">Looking for directions?</h4>
                        <p>Whether arriving by cruise ship, train, taxi, or car, The Last Drop is centrally located and
                            within easy walking distance of Cobh’s key attractions, making it a perfect stop while
                            exploring the town.</p>
                        <a style="color: #fff;" href="https://thelastdropcobh.com/find-us/" class="btn btn-gold">Find
                            Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('z-components/call-to-action'); ?>


</main>

<?php
get_footer();
?>