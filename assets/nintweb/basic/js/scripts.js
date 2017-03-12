(function($) {
    "use strict";

    function parallax() {
        var scrollPosition = $(window).scrollTop();
        $('#parallax').css('top', (0 - (scrollPosition * 0.3)) + 'px'); // bg image moves at 30% of scrolling speed
        $('#hero').css('opacity', ((100 - scrollPosition / 2) * 0.01));
    }
    $(document).ready(function() {

        /*	Parallax Background
	================================================== */

        $(window).on('scroll', function(e) {
            parallax();
        });

        /*	Local Scroll
	================================================== */

        jQuery('.navbar').localScroll({
            offset: -80,
            duration: 500
        });

        /*	Active Menu
	================================================== */

        jQuery(function() {
            var sections = jQuery('section');
            var navigation_links = jQuery('nav a');
            sections.waypoint({
                handler: function(direction) {
                    var active_section;
                    active_section = jQuery(this);
                    if (direction === "up") active_section = active_section.prev();
                    var active_link = jQuery('nav a[href="#' + active_section.attr("id") + '"]');
                    navigation_links.parent().removeClass("active");
                    active_link.parent().addClass("active");
                    active_section.addClass("active-section");
                },
                offset: '35%'
            });
        });

        /*	Pretty Photo
	================================================== */

        jQuery('#gallery a').attr('rel', 'prettyPhoto');
        jQuery("a[rel^='prettyPhoto']").prettyPhoto();

        /*	Bootstrap Carousel
	================================================== */

        jQuery('.carousel').carousel()
    });

    jQuery(window).load(function() {

        $('.section').each(function() {
            animate_start($(this));
        });

    });
        /*	Animation with Waypoints
	================================================== */

    var animate_start = function($this) {
        $this.find('.animate').each(function(i) {
            var $item = jQuery(this);
            var animation = $item.data("animate");

            $item.waypoint(function(direction) {
                $item.css({
                    '-webkit-animation-delay': (i * 0.1) + "s",
                    '-moz-animation-delay': (i * 0.1) + "s",
                    '-ms-animation-delay': (i * 0.1) + "s",
                    '-o-animation-delay': (i * 0.1) + "s",
                    'animation-delay': (i * 0.1) + "s"
                });
                $item.removeClass('animate').addClass('animated ' + animation).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                    jQuery(this).removeClass(animation + ' animated');
                });
            }, {
                offset: '80%',
                triggerOnce: true
            });
        });
    };
})(jQuery);
