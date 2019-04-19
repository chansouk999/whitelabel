jQuery(document).ready(function() {
    var $ = jQuery;
    var $carousel = $('.carousel');

    if ($carousel.find('.carousel-inner > .item').size() <= 1) {
        $carousel.find('.carousel-control').remove();
        $carousel.find('.carousel-indicators').remove();
    }

    $carousel.find('.carousel-inner > .item').each(function(i) {
        (i === 0) ? $carousel.find('.carousel-indicators').append("<li data-target='#" + $carousel.attr('id') + "' data-slide-to='" + i + "' class='active'></li>"): $carousel.find('.carousel-indicators').append("<li data-target='#" + $carousel.attr('id') + "' data-slide-to='" + i + "'></li>");
        var src = $(this).find('img').attr('src');
        if (src) {
            $(this).css('background', 'url(' + src + ')');
        }
    });
    $carousel.find('.carousel-inner > .item').first().addClass('active');
});