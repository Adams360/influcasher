// Navbar menu
   
jQuery(function ($) {
    $('.navbar .hamburger').on('click', function () {
        $(this).toggleClass('is-active');

        if ($(this).hasClass('is-active')) {
            $('.navbar .navbar__menu').addClass('is-active');
            $('.navbar .navbar__cta').addClass('is-active');
        } else {
            $('.navbar .navbar__menu').removeClass('is-active');
            $('.navbar .navbar__cta').removeClass('is-active');
        }
    });

    if ($(window).width() <= 950) {
        $('.navbar .navbar__cta').appendTo('.navbar .navbar__menu');
    };

});
