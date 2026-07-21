jQuery(document).ready(function ($) {
    if (!$('#menu_page').length) return;

    const $menuBoxes = $('.menu-box');
    const $contentArea = $('#dynamic-menu-content');
    const $title = $('#current-menu-title');
    const $pdfText = $('#pdf-link-text');

    $menuBoxes.click(function () {
        const $this = $(this);
        if ($this.hasClass('active')) return;

        const menuType = $this.data('menu');
        const pdfName = $this.data('pdf');
        const menuLabel = $this.find('.menu-label').text();

        // Update active state
        $menuBoxes.removeClass('active');
        $this.addClass('active');

        // Transition content
        $contentArea.removeClass('active');

        setTimeout(() => {
            // Update Text
            $title.text(menuLabel);
            $pdfText.text('Click to download ' + menuLabel + ' PDF Menu.');

            // Trigger reflow/animation
            $contentArea.addClass('active');
        }, 400);
    });

    // Entrance Animation Observer
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const entranceObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                $(entry.target).addClass('is-visible');
                entranceObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const $selectionSection = $('.menu-selection-section');
    if ($selectionSection.length) {
        entranceObserver.observe($selectionSection[0]);
    }

    // Initial trigger for content animation
    setTimeout(() => {
        $contentArea.addClass('active');
    }, 100);

    // Scroll to Top Button logic
    const $scrollTopBtn = $('#scroll-to-top');

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 100) {
            $scrollTopBtn.addClass('show');
        } else {
            $scrollTopBtn.removeClass('show');
        }
    });

    $scrollTopBtn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });
});
