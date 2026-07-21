<?php
/*template name: find-us*/
get_header(); ?>

<main id="find_us_page" class="find-us-main">
    <section class="find-us-hero">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="<?php echo get_template_directory_uri(); ?>/images/video/find-us-hero-bg.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="hero-title laima-font">Find us</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="general-info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="section-title laima-font">General Information</h2>
                </div>
                <div class="col-lg-7">
                    <div class="info-content">
                        <p>Whether arriving by cruise ship, train, taxi, or car, The Last Drop is centrally located and
                            within easy walking distance of Cobh’s key attractions, making it a perfect stop while
                            exploring the town.</p>
                        <div class="quick-links">
                            <span class="links-label">Quick Links:</span>
                            <div class="links-grid">
                                <a href="#from-the-cruise-ship-port" class="btn btn-gold">From the Cruise Ship Port</a>
                                <a href="#from-cork-city" class="btn btn-gold">From Cork City</a>
                                <a href="#nearby-attractions" class="btn btn-gold">Nearby Attractions</a>
                            </div>
                        </div>
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
                        <div id="custom-google-map" style="width: 100%; height: 500px;"></div>
                    </div>
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


                        <h2 class="section-subtitle mt-5">BAR HOURS</h2>

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
                <div class="col-lg-6">
                    <div class="local-parking">
                        <h2 class="section-subtitle">PARKING IN COBH</h2>
                        <p>Planning your visit? A quick note on parking to help you arrive stress-free.</p>

                        <p>Parking in Cobh can be limited, particularly at busy times, but there are several good
                            options within easy walking distance.</p>

                        <p>Free parking is available along the Five Foot Way near the Shantyman — a lovely spot and just
                            a short stroll away.</p>

                        <p>There is also parking beside Cobh Cathedral, offering another convenient option before
                            heading down.</p>

                        <p>We recommend allowing a little extra time to find a space and enjoy the walk through this
                            beautiful town on your way to us.</p>

                        <div class="parking-item mt-5">
                            <h3 class="parking-name">Five Foot Way Car Park</h3>
                            <p>Located along the waterfront, this is a popular free option for accessing the town
                                centre, according to the Titanic Experience Cobh.</p>
                            <div class="parking-btns">
                                <!-- <a href="https://www.google.com/maps/dir//Five+Foot+Way+Car+Park/@51.8488219,-8.303923,17z"
                                    target="_blank" class="btn btn-outline-gold">Get Directions</a>
                                <a href="#" class="btn btn-gold">Five Foot Way Car Park</a> -->
                            </div>
                        </div>

                        <div class="parking-item">
                            <h3 class="parking-name">Cobh Cathedral Car Park</h3>
                            <p>Suitable for visiting the cathedral and city center, notes the Titanic Experience Cobh.
                            </p>
                            <div class="parking-btns">
                                <!-- <a href="https://www.google.com/maps/dir//Cobh+Cathedral+Car+Park/@51.8510,-8.2936,17z"
                                    target="_blank" class="btn btn-outline-gold">Get Directions</a>
                                <a href="#" class="btn btn-gold">Cobh Cathedral Car Park</a> -->
                            </div>
                        </div>

                        <div class="parking-item">
                            <h3 class="parking-name">Street Parking</h3>
                            <p>Available along the main thoroughfares, usually requires payment via ParkMagic, says
                                Parkopedia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="getting-here-section">
        <div class="container">
            <div class="row info-row">
                <div class="col-lg-6">
                    <h2 class="main-title">Getting to The Last Drop</h2>
                </div>
                <div class="col-lg-6">
                    <p class="intro-text">Whether arriving by cruise ship, train, taxi, or car, The Last Drop is
                        centrally located and within easy walking distance of Cobh’s key attractions, making it a
                        perfect stop while exploring the town.</p>
                </div>
            </div>

            <div class="row info-row" id="from-the-cruise-ship-port">
                <div class="col-lg-6">
                    <div class="section-label">
                        <h3>FROM THE CRUISE <br>SHIP PORT</h3>
                        <p style="letter-spacing: 8px; font-weight: 400;">(COBH CRUISE TERMINAL)</p>
                        <p>Cruise ships visiting Cork typically dock at the Deepwater Quay beside the Cobh Heritage
                            Centre. The terminal is right in the heart of town, making Cobh one of the easiest cruise
                            ports in Ireland to explore on foot.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="direction-details">
                        <div class="option-item border-0">
                            <h4>Walking</h4>
                            <p>The Last Drop is approximately 3–5 minutes on foot from the cruise terminal along the
                                waterfront. The walk is flat and scenic, passing several cafés and harbour views.</p>
                        </div>
                        <div class="option-item">
                            <h4>Taxi</h4>
                            <p>Taxis are usually available outside the cruise terminal if you prefer a short ride.
                                Typical fares within Cobh are €5–€10, though most visitors choose to walk due to the
                                short distance.</p>
                        </div>
                        <div class="option-item">
                            <h4>Public Transport</h4>
                            <p>Public transport isn’t usually necessary for travel within Cobh itself, but the Cobh
                                train station is located right beside the cruise terminal if you are arriving from or
                                continuing to Cork City.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row info-row" id="from-cork-city">
                <div class="col-lg-6">
                    <div class="section-label">
                        <h3>FROM CORK CITY</h3>
                        <p class="section-desc">If you are travelling from Cork:</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="direction-details">
                        <div class="option-item border-0">
                            <h4>Train</h4>
                            <p>The Irish Rail commuter train from Cork’s Kent Station to Cobh takes about 25 minutes,
                                with services running roughly every 30 minutes. The station in Cobh is just a short walk
                                from the waterfront restaurants and attractions.</p>
                        </div>
                        <div class="option-item">
                            <h4>Bus</h4>
                            <p>Direct bus services also operate between Cork city and Cobh via regional routes.</p>
                        </div>
                        <div class="option-item">
                            <h4>Taxi / Car</h4>
                            <p>A taxi or car journey takes 25–30 minutes depending on traffic.</p>
                        </div>
                    </div>
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
                        'link_text' => 'The Cobh Heritage Centre',
                        // 'link' => 'https://cobhheritage.com/'
                    ],
                    [
                        'title' => 'Titanic Experience Cobh',
                        'img' => 'Titanic-Experience-Cobh.jpg',
                        'desc' => 'Set inside the original White Star Line ticket office, Titanic Experience Cobh offers an immersive journey into the final port of call of the RMS Titanic in 1912. Visitors can follow the stories of real passengers who boarded the ship here before its fateful voyage.',
                        'distance' => '2-3 mins',
                        'link_text' => 'Titanic Experience Cobh',
                        // 'link' => 'https://titanicexperiencecobh.ie/'
                    ],
                    [
                        'title' => 'St Colman\'s Cathedral',
                        'img' => 'St-Colman\'s-Cathedral.jpg',
                        'desc' => 'Dominating the skyline above the harbour, St Colman\'s Cathedral is one of Ireland\'s most striking neo-Gothic churches. Its soaring spire, beautiful stained glass windows, and panoramic views over Cork Harbour make it one of Cobh\'s most recognisable landmarks.',
                        'distance' => '8-10 mins',
                        'link_text' => 'St Colman\'s Cathedral',
                        // 'link' => 'https://cobhcathedralparish.ie/'
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
                                <h3 class="attraction-name"><?php echo $attraction['title']; ?></h3>
                                <p class="attraction-desc"><?php echo $attraction['desc']; ?></p>

                                <div class="distance-info">
                                    <p class="label">Walking distance from The Last Drop:</p>
                                    <span class="badge"><?php echo $attraction['distance']; ?></span>
                                </div>

                                <div class="website-info">
                                    <p class="label">Website:</p>
                                    <a href="<?php echo $attraction['link']; ?>"
                                        class="btn btn-outline-dark"><?php echo $attraction['link_text']; ?></a>
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