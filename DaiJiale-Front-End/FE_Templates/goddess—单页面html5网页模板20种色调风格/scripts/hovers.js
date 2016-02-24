var touchHovers = (function () {
    var speed = 300,
        easing = mina.backout,
        $elements = null,
        $originals = null,
        originals = {};

    function init() {
        updateVars();
        bindEvents();
    }

    function updateVars() {
        $elements = $('body').find('.svg-hover');
        $originals = $elements.clone();
    }

    function bindEvents() {
        originals = {};
        $elements.each(function (i, el) {
            var $el = $(el),
                $original = $originals.eq(i),
                s = Snap(el.querySelector('svg')), path = s.select('path'),
                pathConfig = {
                    from: $original.find('svg path').attr('d'),
                    to: $original.attr('data-path-hover')
                };

            $el
                .off('mouseenter.touchHoversMouseEnter')
                .on('mouseenter.touchHoversMouseEnter', function () {
                    path.animate({ 'path': pathConfig.to }, speed, easing);
                });

            $el
                .off('mouseleave.touchHoversMouseLeave')
                .on('mouseleave.touchHoversMouseLeave', function () {
                    path.animate({ 'path': pathConfig.from }, speed, easing);
                });
        });
    }

    function unbindEvents() {
        $elements.each(function (i, el) {
            $(el)
                .off('mouseenter.touchHoversMouseEnter')
                .off('mouseleave.touchHoversMouseLeave');
        });
    }

    function showEffects() {
        $elements.each(function (i, el) {
            var $original = $originals.eq(i),
                s = Snap(el.querySelector('svg')), path = s.select('path'),
                pathConfig = {
                    from: $original.find('svg path').attr('d'),
                    to: $original.attr('data-path-hover')
                };
            path.animate({ 'path': pathConfig.to }, speed, easing);
        });
    }

    function hideEffects() {
        $elements.each(function (i, el) {
            var $original = $originals.eq(i),
                s = Snap(el.querySelector('svg')), path = s.select('path'),
                pathConfig = {
                    from: $original.find('svg path').attr('d'),
                    to: $original.attr('data-path-hover')
                };
            path.animate({ 'path': pathConfig.from }, speed, easing);
        });
    }

    return {
        init: init,
        bindEvents: bindEvents,
        unbindEvents: unbindEvents,
        showEffects: showEffects,
        hideEffects: hideEffects
    };
})();

touchHovers.init();