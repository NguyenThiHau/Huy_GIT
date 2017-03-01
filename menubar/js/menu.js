
$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 80) {
            $('#header').addClass('scroll_bottom');
            $('#menu').hide();
            $('#header').addClass('header_small');
            $('#logo').addClass('logo_small');
        } else {
            $('#header').removeClass('scroll_bottom');
            $('#menu').show();
            $('#header').removeClass('header_small');
            $('#logo').removeClass('logo_small');
        }

    });
});
