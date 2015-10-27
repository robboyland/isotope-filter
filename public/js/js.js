$(window).load( function() {

    $('.isotope_container').isotope({
        layoutMode: 'vertical',
        itemSelector: '.isotope_selector',
        vertical: {
          horizontalAlignment: 1
        }
    });

    // cache container
    var $container = $('#isotope_container');

    // initialize isotope
    $container.isotope({
    // options...
        animationEngine: 'best-available',
        itemSelector: '.isotope_selector',
        layoutMode: 'vertical'
    });

    // filter items when filter link is clicked
    $('#isotope_filters li a').on('click', function() {
        var selector = $(this).data('filter');
        $container.isotope({
        filter: selector
    });

    });
});