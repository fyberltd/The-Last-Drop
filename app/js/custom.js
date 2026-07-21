jQuery(document).ready(function ($) {

    // Menu Page Logic
    if ($('#menu_page').length) {
        $('.menu-box').on('click', function (e) {
            e.preventDefault();
            const targetId = $(this).attr('href');
            if (!targetId || targetId === '#') return;

            const $target = $(targetId);
            if ($target.length) {
                $('html, body').animate({
                    scrollTop: $target.offset().top - 80
                }, 800);

                $('.menu-box').removeClass('active');
                $(this).addClass('active');
            }
        });

        // Update active box on scroll
        $(window).on('scroll', function () {
            const scrollPos = $(window).scrollTop() + 150;
            $('section[id]').each(function () {
                const top = $(this).offset().top;
                const bottom = top + $(this).outerHeight();

                if (scrollPos >= top && scrollPos <= bottom) {
                    const id = $(this).attr('id');
                    const $box = $(`.menu-box[href="#${id}"]`);
                    if ($box.length) {
                        $('.menu-box').removeClass('active');
                        $box.addClass('active');
                    }
                }
            });
        });
    }

    // Scroll Reveal for Nearby Attractions
    if ($('.nearby-attractions-section').length) {
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const $cards = $(entry.target).find('.attraction-card');
                    $cards.each(function (index) {
                        setTimeout(() => {
                            $(this).addClass('revealed');
                        }, index * 200); // Staggered reveal
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        observer.observe(document.querySelector('.nearby-attractions-section'));
    }


});

// google map api 

window.initCustomGoogleMap = function () {
    const mapElement = document.getElementById("custom-google-map");

    if (!mapElement) {
        return;
    }

    const location = {
        lat: 51.849077,   // 53.8008,
        lng: -8.2975756   //-1.5491
    };

    const map = new google.maps.Map(mapElement, {
        center: location,
        zoom: 20,
        disableDefaultUI: false,
        streetViewControl: false,
        keyboardShortcuts: false,
        styles: [
            {
                featureType: "road",
                elementType: "geometry",
                stylers: [
                    { color: "#033421" }
                ]
            }
        ]
    });

    const marker = new google.maps.Marker({
        position: location,
        map: map,
        title: "My Location",
        icon: {
            url: "https://thelastdropcobh.com/wp-content/uploads/2026/06/icon.png",
            scaledSize: new google.maps.Size(30, 40),
            anchor: new google.maps.Point(15, 75) // Shifts the icon upward by 35px
        }
    });

    const infoWindow = new google.maps.InfoWindow({
        content: `
        <div style="max-width:220px;">
            <strong>The Last Drop Cobh Restaurant</strong><br>
            17 Westbourne Place<br>
            Cobh, Co. Cork<br>
            +353 21 4718282<br>
        </div>
    `
    });

    marker.addListener("click", function () {
        infoWindow.open(map, marker);
    });
};
