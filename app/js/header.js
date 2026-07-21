jQuery(document).ready(function ($) {

    //burger icon js opens nav and changes burger to cross
    $('body').click(function (e) {
        var target = $(e.target),
            article;

        if (target.is('.mobile-nav-button') || target.is('.bar1') || target.is('.bar2') || target.is('.bar3')) {
            console.log('button')
        } else {

            if ($(".nav-closed").hasClass("open")) {

                $(".nav-closed").removeClass("open");
                $(".bar1").removeClass("change");
                $(".bar2").removeClass("change");
                $(".bar3").removeClass("change");
            }
        }

    });

    $(".mobile-nav-button").click(function () {
        $(".nav-closed").toggleClass("open");
        $(".bar1").toggleClass("change");
        $(".bar2").toggleClass("change");
        $(".bar3").toggleClass("change");
    })

    // Mobile Nav Overlay Logic
    $(".mobile-menu-trigger, .overlay-close-trigger").click(function () {
        $(".mobile-nav-overlay").toggleClass("active");
        
        // Prevent body scroll when menu is open
        if ($(".mobile-nav-overlay").hasClass("active")) {
            $("body").css("overflow", "hidden");
        } else {
            $("body").css("overflow", "auto");
        }
    });

    // Close mobile overlay on link click
    $(".mobile-menu-list a").click(function() {
        $(".mobile-nav-overlay").removeClass("active");
        $("body").css("overflow", "auto");
    });

    //header spacing
    // let headerHeight = $('#header').outerHeight();

    // $('.header-spacing').css('padding-top', `${headerHeight}px`)


    // // Check window width and add class to #header for tactile or desktop.
    // $(window).on('resize', function () {
    //     if (window.innerWidth < 992) {
    //         if (!$('#header').hasClass('tactile')) {
    //             $('#header').addClass('tactile');
    //             $('#header').removeClass('desktop');
    //             console.log("#header.tactile");
    //         }
    //     } else {
    //         if (!$('#header').hasClass('desktop')) {
    //             $('#header').addClass('desktop');
    //             $('#header').removeClass('tactile');
    //             console.log("#header.desktop");
    //         }
    //     }
    // }).resize();

    // Sticky Top Bar logic
    $(window).on('scroll', function () {
        var scrollTop = $(window).scrollTop();
        var activeTopbar = $('.top-bar:visible, .mobile-announcement-bar:visible');
        
        if (scrollTop > 50) {
            if (activeTopbar.length > 0 && !activeTopbar.hasClass('sticky')) {
                var topbarHeight = activeTopbar.outerHeight();
                $('.top-bar, .mobile-announcement-bar').addClass('sticky');
                $('body').css('padding-top', topbarHeight + 'px');
            }
        } else {
            var allTopbars = $('.top-bar, .mobile-announcement-bar');
            if (allTopbars.hasClass('sticky')) {
                allTopbars.removeClass('sticky');
                $('body').css('padding-top', '0px');
            }
        }
    }).trigger('scroll');

    $(window).on('resize', function () {
        var activeTopbar = $('.top-bar:visible, .mobile-announcement-bar:visible');
        if (activeTopbar.hasClass('sticky')) {
            var topbarHeight = activeTopbar.outerHeight();
            $('body').css('padding-top', topbarHeight + 'px');
        }
    });
})