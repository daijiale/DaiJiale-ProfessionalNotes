// Navigation Menu
    new gnMenu(document.getElementById('gn-menu'));

// Scrolling
    $(".scroll").click(function (event) {
        event.preventDefault();
        //calculate destination place
        var dest = 0;
        if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
            dest = $(document).height() - $(window).height();
        } else {
            dest = $(this.hash).offset().top;
        }
        //go to destination
        $('html,body').animate({scrollTop: dest}, 1000, 'swing');
    });

// Pricing tables
    $(".stuff-01").hover(function () {$(".stuff-01").css("background", "#eaeaea");});
    $(".stuff-01").mouseleave(function () {$(".stuff-01").css("background", "transparent");});

    $(".stuff-02").hover(function () {$(".stuff-02").css("background", "#eaeaea");});
    $(".stuff-02").mouseleave(function () {$(".stuff-02").css("background", "transparent");});

    $(".stuff-03").hover(function () {$(".stuff-03").css("background", "#eaeaea");});
    $(".stuff-03").mouseleave(function () {$(".stuff-03").css("background", "transparent");});

    $(".stuff-04").hover(function () {$(".stuff-04").css("background", "#eaeaea");});
    $(".stuff-04").mouseleave(function () {$(".stuff-04").css("background", "transparent");});

    $(".stuff-05").hover(function () {$(".stuff-05").css("background", "#eaeaea");});
    $(".stuff-05").mouseleave(function () {$(".stuff-05").css("background", "transparent");});

    $(".stuff-06").hover(function () {$(".stuff-06").css("background", "#eaeaea");});
    $(".stuff-06").mouseleave(function () {$(".stuff-06").css("background", "transparent");});

    $(".stuff-07").hover(function () {$(".stuff-07").css("background", "#eaeaea");});
    $(".stuff-07").mouseleave(function () {$(".stuff-07").css("background", "transparent");});

    $(".stuff-08").hover(function () {$(".stuff-08").css("background", "#eaeaea");});
    $(".stuff-08").mouseleave(function () {$(".stuff-08").css("background", "transparent");});

    $(".stuff-09").hover(function () {$(".stuff-09").css("background", "#eaeaea");});
    $(".stuff-09").mouseleave(function () {$(".stuff-09").css("background", "transparent");});

    $(".stuff-10").hover(function () {$(".stuff-10").css("background", "#eaeaea");});
    $(".stuff-10").mouseleave(function () {$(".stuff-10").css("background", "transparent");
    });

// Initialize Google Map
    map = new GMaps({
        el: '#gmap',
        lat: 25.783275,
        lng: -80.210248,
        stylers: { saturation: -100 },
        scrollwheel: false,
        zoomControl: true,
        zoomControlOpt: {
            style: 'SMALL',
            position: 'TOP_LEFT'
        },
        panControl: false,
        streetViewControl: false,
        mapTypeControl: false,
        overviewMapControl: false
    });
    // Marker
    map.drawOverlay({
        lat: 25.783275,
        lng: -80.210248,
        content: '<div class="gmap-overlay-marker"><i class="fa fa-map-marker"></i></div>'
    });

    // Initialize Google Street View
    GMaps.createPanorama({
        el: '#gmap-streetview',
        lat: 35.674616,
        lng: 139.731153,
        scrollwheel: false,
        addressControl: false,
        linksControl: true, //shows the arrows and paths within the street
        pov: {
            heading: 245, // The camera heading in degrees relative to true north. North is 0, East is 90, etc.
            pitch: 20, // The camera pitch in degrees, relative to the street view. 90 is directly up, -90 is directly down
            zoom: 0 // The zoom level. Fully zoomed-out is level 0
        }
    });

// Init bootstrap tooltip
    $(function () {
        $("[rel='tooltip']").tooltip();
    });

// Button for mobile touch devices
    var $touchButton = $('#detect-mobile')

    $(function () {
        $touchButton.click(function (e) {
            e.preventDefault();
            var $body = $('body');
            $body.removeClass("not-global-detect");

            if ($body.hasClass('global-mobile-on')) {
                $body
                    .removeClass('global-mobile-on')
                    .addClass('global-mobile-off');
                touchHovers.hideEffects();
                touchHovers.bindEvents();
            } else {
                $body
                    .removeClass('global-mobile-off')
                    .addClass('global-mobile-on');
                touchHovers.showEffects();
                touchHovers.unbindEvents();
            }
        });
    });

// Initialize Fancybox
    $(".fancybox").fancybox({
        padding: 0,
        helpers: {
            overlay: {
                css: {
                    'background': 'rgba(255, 255, 255, 0.9)'
                }
            }
        }
    });

    $('.fancybox-media').fancybox({
        openEffect: 'none',
        closeEffect: 'none',
        helpers: {
            media: {}
        }
    });