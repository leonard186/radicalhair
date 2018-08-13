/************************************************************
 * Jquery
 ************************************************************/

$(document[0]).ready(function() {

    /* Sticky navigation */

    $('.js--nav-scroll').waypoint(function(direction) {
        if (direction == "down") {
            $('nav').addClass('fixed-top animated fadeInDown');
        } else {
            $('nav').addClass('fadeOutUp');
            setTimeout(function() {
                $('nav').removeClass('fixed-top animated fadeOutUp fadeInDown');
            }, 500);
        }
    }, {
        offset: '15%;'
    });

    /* Scroll effect */

    $('.js--wp-1').waypoint(function(direction) {
        $('.js--wp-1').addClass('animated fadeIn')
    }, {
        offset: '80%'
    });

    $('.js--wp-2').waypoint(function(direction) {
        $('.js--wp-2').addClass('animated fadeIn')
    }, {
        offset: '80%'
    });

    $('.js--wp-3').waypoint(function(direction) {
        $('.js--wp-3').addClass('animated fadeIn')
    }, {
        offset: '80%'
    });

    $('.js--wp-4').waypoint(function(direction) {
        $('.js--wp-4').addClass('animated fadeIn')
    }, {
        offset: '80%'
    });

    $('.js--wp-5').waypoint(function(direction) {
        $('.js--wp-5').addClass('animated fadeIn')
    }, {
        offset: '80%'
    });

    $('.js--wp-6').waypoint(function(direction) {
        $('.js--wp-6').addClass('animated fadeIn')
    }, {
        offset: '80%'
    });

    $('.js--wp-7').waypoint(function(direction) {
        $('.js--wp-7').addClass('animated fadeIn')
    }, {
        offset: '80%'
    });

    $('.js--wp-8').waypoint(function(direction) {
        $('.js--wp-8').addClass('animated fadeIn')
    }, {
        offset: '80%'
    });

    $('.js--wp-9').waypoint(function(direction) {
        $('.js--wp-9').addClass('animated fadeIn')
    }, {
        offset: '80%'
    });

    $('.js--wp-10').waypoint(function(direction) {
        $('.js--wp-10').addClass('animated fadeIn')
    }, {
        offset: '80%'
    });

    $('.js--wp-11').waypoint(function(direction) {
        $('.js--wp-11').addClass('animated fadeIn')
    }, {
        offset: '80%'
    });

    //Check to see if the window is top if not then display button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollup').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

});