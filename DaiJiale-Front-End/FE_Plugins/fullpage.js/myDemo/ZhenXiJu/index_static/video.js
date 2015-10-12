$(document).ready(function() {
    var $win = $(window);
    var player;
    var $indexVideo = $('#indexVideo');
    var $videos = $('.btn_video');
    var $model = $('.sq-modal');
    var $modalVideo = $('.modal-video-wrap');
    var $mVideo = $('#mVideo');
    var $modelCloseBtn = $('.btn-close');
    var $wrap = $('.wrap');
    //var isIE = window.navigator.userAgent.toLowerCase().indexOf("msie")!=-1;
    var indexVideoId = 'n0152ro1q47';

    (function showMenu() {
        var $menu = $('.J_menu');
        $menu.on('mouseenter', function () {
            $(this).find('.menu-panel').stop().fadeIn();
        }).on('mouseleave', function () {
            $(this).find('.menu-panel').stop().fadeOut();
        });
    }());
    
    // init
    resetWrap();
    playVideo($indexVideo, indexVideoId);
    
    // events
    $('.video-box').find('.btn-close').click(function () {
        stopVideo();
    });
    
    $win.resize(function () {
        resetVideoSize();
        resetWrap();
    });

    $videos.on('click', function () {
        var $me = $(this);
        var vid = $me.data().vid;
        stopVideo();
        showModel();
        playVideo($mVideo, vid);
        $indexVideo.empty();
    });
    
    $modelCloseBtn.on('click', function () {
        hideModel();
        stopVideo();
        $mVideo.empty();
        playVideo($indexVideo, indexVideoId, false);
    });
    
    // function
    function showModel () {
        var width = $win.width();
        var height = $win.height();
        var top = $win.scrollTop();
        $modalVideo.width(width - 100).height(height - 100);
        $model.css({
            'top': top
        }).fadeIn();
        $(document).on('mousewheel.model', function (e) {
            e.preventDefault();
        });
    }
    
    function hideModel () {
        $model.fadeOut();
        $(document).off('mousewheel.model');
    }

    function playVideo($el, vid, autoPlay) {
        var $video = $el;
        var width = $video.parent().width();
        var height = $video.parent().height();
        var domId = $el.attr('id');
        var pic = pic || '';
        var autoPlay = autoPlay === undefined ? true : autoPlay;

        $video.width(width).height(height);
        
        if (domId && vid) {
            var video = new tvp.VideoInfo();
            player = new tvp.Player();
            video.setVid(vid);
            player.create({
                width: width,
                height: height + 35,
                video: video,
                pic: pic,
                modId: domId,
                autoplay: autoPlay,
                flashWmode:"opaque",
                vodFlashExtVars: {
                    searchbar: 0,
                    searchpanel: 0
                }
            });
        }
        //hack: 解决 Flash 顿卡问题
        /*setTimeout(function () {
            $video.width(width - 1);
        }, 1000);*/
    }
    
    function stopVideo() {
        if (player) {
            player.pause();
        }
    }
    
    function resetVideoSize() {
        var width = $win.width() - 100;
        var height = $win.height() - 100;
        $modalVideo.width(width).height(height);
        var $flash = $mVideo.find('embed, object');
        $flash.width(width).height(height + 35);
    }
    
    function resetIndexVideoSize() {
        var width = $('.video-box').width();
        var height = $('.video-box').height();
        var $flash = $indexVideo.find('embed, object');
        $flash.width(width).height(height + 35);
    }
    
    function resetWrap() {
        var width = $win.width();
        if (width < 1440) {
            $wrap.addClass('w_1000');
            resetIndexVideoSize();
        } else {
            $wrap.removeClass('w_1000');
            resetIndexVideoSize();
        }
    }
    
});