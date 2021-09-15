$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 20) {
        $("header").addClass("before-fixed-top");
        $("header").addClass("size-fixed-top");
    } else {
        $("header").removeClass("before-fixed-top");
        $("header").removeClass("size-fixed-top");
    }
});
$(function($) {
    var telInput = $('#phone');
    telInput.intlTelInput({
        utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.8/js/utils.js',
        initialCountry: 'sa'
            // ,
            // onlyCountries: ['cn', 'us', 'ca', 'gr', 'es', 'pt', 'hu', 'fk', 'eg', 'ps'],
    });
});
$('.navbar-expand-lg .navbar-nav .dropdown-menu').hover(function() {
    $('.nav-link.dropdown-toggle').attr('aria-expanded', 'true');
}, function() {
    $('.nav-link.dropdown-toggle').attr('aria-expanded', 'false');
});
$(".navbar-expand-lg .navbar-nav .dropdown-menu").mouseleave(function() {
    $(".navbar-expand-lg .navbar-nav .dropdown-menu").removeClass('show')
});
$(document).ready(function() {
    $('body .btn-show-messageconfirm').click(function() {
        $('body .confirm-message').css('display', 'block')
    });
});
$(document).ready(function() {
    $('body .btn-close-messageconfirm').click(function() {
        $('body .confirm-message').css('display', 'none')
    });
});

$(document).ready(function() {
    $('body button.btn-play-video').click(function() {
        $('body div.video-overlay').css('display', 'block');
        $("body").append('<video width="320" height="240" controls class="videoshow"><source src="img/videoshow.mp4" type="video/mp4">Your browser does not support the video tag.</video>');
        $('video.videoshow').css('display', 'block');
    });
});
$(document).ready(function() {
    $('body div.video-overlay').click(function() {
        $(this).css('display', 'none');
        $("video.videoshow").remove();
        $('video.videoshow').get(0).pause().css('display', 'none');

    });
});
$(document).keyup(function(e) {
    if (e.key === "Escape") {
        $('body div.video-overlay').css('display', 'none');
        $("video.videoshow").remove();
        $('video.videoshow').get(0).pause().css('display', 'none');


    }
});
$(document).ready(function() {
    $('body .btn-menu-on-mobile').click(function() {
        $('body div.menu-on-mobile').css('transform', 'translate(0px, 0px)', 'transition', '0.5s');
        $('html').css('overflow-y', 'hidden');
    });
});
$(document).ready(function() {
    $('body .btn-close-menu-mobile').click(function() {
        $('body div.menu-on-mobile').css('transform', 'translate(100vw, 0px)', 'transition', '0.3s');
        $('html').css('overflow-y', 'scroll');
    });
});

function checksize() {
    if ($(window).width() > 720) {
        $('body div.menu-on-mobile').css('transform', 'translate(0px, 0px)', 'transition', '0.5s');
    } else {
        $('body div.menu-on-mobile').css('transform', 'translate(100vw, 0px)', 'transition', '0.5s');

    }
}

checksize();

$(window).resize(checksize);

$.scrollIt({
    upKey: 38, // key code to navigate to the next section
    downKey: 40, // key code to navigate to the previous section
    easing: 'easeInOutCirc', // the easing function for animation
    scrollTime: 1200, // how long (in ms) the animation takes
    activeClass: 'active', // class given to the active nav element
    onPageChange: null, // function(pageIndex) that is called when page is changed
    topOffset: -70 // offste (in px) for fixed top navigation
});
$(function() {
    $.scrollIt();
});