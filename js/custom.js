// Want to include some JS?
// @codekit-prepend "libs/mmenu.js"
// @prepros-prepend "libs/mmenu.js"

// binds $ to jquery, requires you to write strict code. Will fail validation if it doesn't match requirements.
(function($) {
    "use strict";

	// add all of your code within functions, create as many of these blocks as needed
	$(function() {
        $("#primaryNavigation").mmenu({
            "offCanvas": {
                'zposition': "front", // makes the menu appear above
                'position': "left"
            }
        }, {
            clone: true,
            transitionDuration: 340
        });

        var api = $("#mm-primaryNavigation").data('mmenu');

        // triggers breadcrumb animate on open
        api.bind("open:before", function($panel) {
            console.log('open');
            $('.burger-menu').addClass('active');
        });

        // triggers breadcrumb animate on close
        api.bind("close:before", function($panel) {
            $('.burger-menu').removeClass('active');
        });
	});

    /**
     * Trigger the window when it scrolls passed header offset.
     * adds a margin to the body so that it stopps a "jagged" bounce.
     */

    var $navOffsetTop = 100,
        $navHeight = '30px';

    $(window).scroll(function() {
        if ($(document).scrollTop() > $navOffsetTop) {
            $('#primaryNavigation').addClass('fixed');
            $('body').css('margin-top', $navHeight);
        } else {
            $('#primaryNavigation').removeClass('fixed');
            $('body').css('margin-top', '0');
        }
    });

}(jQuery));
