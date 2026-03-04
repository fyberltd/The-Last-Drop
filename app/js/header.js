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

    });​

    $(".mobile-nav-button").click(function () {
        $(".nav-closed").toggleClass("open");
        $(".bar1").toggleClass("change");
        $(".bar2").toggleClass("change");
        $(".bar3").toggleClass("change");
    })
    
    //header spacing
    let headerHeight = $('#header').outerHeight();

    $('.header-spacing').css('padding-top', `${headerHeight}px`)


    // Check window width and add class to #header for tactile or desktop.
    $(window).on('resize', function () {
        if (window.innerWidth < 992) {
            if (!$('#header').hasClass('tactile')) {
                $('#header').addClass('tactile');
                $('#header').removeClass('desktop');
                console.log("#header.tactile");
            }
        } else {
            if (!$('#header').hasClass('desktop')) {
                $('#header').addClass('desktop');
                $('#header').removeClass('tactile');
                console.log("#header.desktop");
            }
        }
    }).resize();
})