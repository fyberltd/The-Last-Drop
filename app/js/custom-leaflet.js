jQuery(document).ready(function ($) {
    // Find Us Page Logic
    if ($('#find_us_page').length || $('#contact_us_page').length) {
        // Initialize Map
        const mapCenter = [51.849077, -8.2975756]; // Westbourne Place, Cobh
        const map = L.map('map', {
            center: mapCenter,
            zoom: 21,
            scrollWheelZoom: false,
            zoomControl: true,
            attributionControl: false
        });

        // Add Tiles
        // OLD CODE - OpenStreetMap Tiles (commented out for reference)
        // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     attribution: '&copy; OpenStreetMap contributors'
        // }).addTo(map);

        // NEW CODE - Google Maps Tiles
        L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: '&copy; Google Maps'
        }).addTo(map);

        // Custom Marker
        const customIcon = L.divIcon({
            className: 'custom-div-icon',
            html: `<div class="marker-pin"><img src="${themeData.template_url}/images/icon.png" alt="Logo"></div>`,
            iconSize: [220, 60],
            iconAnchor: [110, 60]
        });
        L.marker(mapCenter, { icon: customIcon }).addTo(map);

        // POIs
        const poiIcon = L.divIcon({
            className: 'custom-div-icon poi-marker',
            html: '<div class="marker-pin"><div class="dot"></div></div>',
            iconSize: [20, 20],
            iconAnchor: [10, 10]
        });

        const pois = [
            { name: "Cobh Heritage Centre", coords: [51.8492, -8.2987] },
            { name: "St Colman's Cathedral", coords: [51.8510, -8.2936] },
            { name: "Titanic Experience Cobh", coords: [51.8485, -8.2975] }
        ];

        pois.forEach(poi => {
            L.marker(poi.coords, { icon: poiIcon })
                .addTo(map)
                .bindPopup(`<span style="color:#052C1B; font-family:'Lexend';">${poi.name}</span>`);
        });
    }

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
