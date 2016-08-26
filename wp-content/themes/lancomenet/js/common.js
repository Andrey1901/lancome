$(document).ready(function () {
    $('.mobile_nav').click(function () {
        $('.nav').toggle('normal');
    });

    $('#close_menu_tab').click(function () {
        $('.menu-tab').fadeOut('500');
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.navbar').addClass('header-fixed-mini');
        } else {
            $('.navbar').removeClass('header-fixed-mini');
        }
    });

    var $root = $('html, body');
    $('.link, .arrow-up').click(function() {
        $root.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 1500);
        return false;
    });

});