// Want to include some JS?
// @codekit-prepend "libs/mmenu.js"


// binds $ to jquery, requires you to write strict code. Will fail validation if it doesn't match requirements.
(function($) {
    "use strict";

	// add all of your code within functions, create as many of these blocks as needed
	$(function() {
        $("#primaryNavigation").mmenu({
            "offCanvas": {
                position: "right"
            }
        }, {
            clone: true
        });
	});

}(jQuery));
