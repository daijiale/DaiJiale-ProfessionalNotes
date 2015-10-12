<!-- js  start-->


<!-- Touch slider - Swiper -->
        <script src="external/swiper/idangerous.swiper.js"></script>

        
        <!-- Scroll to piugin -->
        <script src="external/scrollto/jquery.scrollTo.min.js"></script>
        <!-- mCustomScrollbar -->
        <script src="external/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <!-- Smooth Scroll -->
        <script src="external/SmoothScroll/SmoothScroll.js"></script>
        
        <!-- Custom -->
        <script src="js/custom.js"></script>
        <!-- JavaScript-->
        <!-- External-->

        <!-- Bootstrap 3--> 
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- Mobile menu -->
        <script src="external/z-nav/jquery.mobile.menu.js"></script>

        <!-- Sliders -->
        <!-- Flexslider -->
        <script src="external/flexslider/jquery.flexslider-min.js"></script>
        <!-- Touch slider - Swiper -->
        <script src="external/swiper/idangerous.swiper.js"></script>

        <!-- Scroll to piugin -->
        <script src="external/scrollto/jquery.scrollTo.min.js"></script>
        <!-- Livicons -->
        <script src="external/livicons/livicons-1.3.min.js"></script>
        <script src="external/livicons/raphael-min.js"></script>

        <!-- Waypoints -->
        <script src="external/waypoint/waypoints.min.js"></script>
        <!-- mCustomScrollbar -->
        <script src="external/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <!-- Event that will trigger when the element is scrolled in to the viewport.--> 
        <script src="external/inview/jquery.inview.js"></script>



        

<script type="text/javascript" src="./index_static/jquery-1.11.2.js"></script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=44824960" charset="UTF-8"></script>
<script type="text/javascript" src="./index_static/imgAdapt.js"></script>
<script type="text/javascript" src="./index_static/raphael-min.js"></script>
<script src="./index_static/tvp.player_v2_jq.js"></script>
<script src="./index_static/video.js"></script>

<script type="text/javascript">
var isChrome = $.browser.webkit;
var isIe78 = ($.browser.ie && $.browser.version <= 8);
if(isIe78){$("#indexbg").attr({"src":"http://3gimg.qq.com/trom_s/toshomepage20150702/tos_home/images/bg_banner_index2.jpg"});}
var transitonEnd = true;
var s = 100;
var dot = [
			{x:140,y:340,r:120,m:50 + 0,stepX:1,stepY:1},
			{x:400,y:880,r:60,m:40 + 0,stepX:-1,stepY:1},
			{x:480,y:700,r:20,m:60 + 1,stepX:-1,stepY:-1},
			{x:880,y:1200,r:300,m:166  + 0,stepX:-1,stepY:1},
			{x:1730,y:880,r:280,m:145 + 0,stepX:1,stepY:1},
			{x:600,y:400,r:18,m:148  + 0,stepX:-1,stepY:1},
			{x:1000,y:300,r:40,m:90  + 0,stepX:1,stepY:-1},
			{x:1300,y:400,r:70,m:99+ 0,stepX:1,stepY:1},
		];
var paper = Raphael(document.getElementById("svg"),0, 0, 2560, 1600);
if(!isIe78){
	var line1 = paper.path("M" + dot[0].x +"," + dot[0].y + "L" + dot[1].x +"," + dot[1].y);
	var line2 = paper.path("M" + dot[1].x +"," + dot[1].y + "L" + dot[2].x +"," + dot[2].y);
	var circle = paper.circle(dot[0].x, dot[0].y, dot[0].r);
	var circle2 = paper.circle(dot[1].x, dot[1].y, dot[1].r);
	var circle3 = paper.circle(dot[2].x, dot[2].y, dot[2].r);
	var circle4 = paper.circle(dot[3].x, dot[3].y, dot[3].r);
	var circle5 = paper.circle(dot[4].x, dot[4].y, dot[4].r);
	//中间中等大圆
	var circle6 = paper.circle(dot[5].x, dot[5].y, dot[5].r);
	var circle7 = paper.circle(dot[6].x, dot[6].y, dot[6].r);
	var circle8 = paper.circle(dot[7].x, dot[7].y, dot[7].r);
}
function clone(obj) {
	var copy;
	if (null == obj || "object" != typeof obj) return obj;
	if (obj instanceof Date) {
		copy = new Date();
		copy.setTime(obj.getTime());
		return copy;
	}
	if (obj instanceof Array) {
		copy = [];
		for (var i = 0, len = obj.length; i < len; i++) {
			copy[i] = clone(obj[i]);
		}
		return copy;
	}
	if (obj instanceof Object) {
		copy = {};
		for (var attr in obj) {
			if (obj.hasOwnProperty(attr)) copy[attr] = clone(obj[attr]);
		}
		return copy;
	}
	throw new Error("Unable to copy obj! Its type isn't supported.");
}	
		
			
var movedot = clone(dot);
	
var dotChage = function(){
	for (i = 0; i < dot.length-1; i++){
		
		if ( movedot[i].x >= dot[i].x + dot[i].m || movedot[i].x < dot[i].x - dot[i].m){
			 movedot[i].stepX = -  movedot[i].stepX;
			
			 
		}
		if ( movedot[i].y >= dot[i].y + dot[i].m || movedot[i].y < dot[i].y - dot[i].m){
			 movedot[i].stepY = -  movedot[i].stepY;

		}
		
		movedot[i].x += movedot[i].stepX;
		movedot[i].y += movedot[i].stepY;
	}
}
	
if(!isIe78){	
	var draw = function(){
			movedot0x = movedot[0].x + movedot[0].r * (Math.cos(Math.atan((movedot[1].y-movedot[0].y)/(movedot[1].x-movedot[0].x))));
			movedot0y = movedot[0].y + movedot[0].r * (Math.sin(Math.atan((movedot[1].y-movedot[0].y)/(movedot[1].x-movedot[0].x))));
			movedot1x = movedot[1].x - movedot[1].r * (Math.cos(Math.atan((movedot[1].y-movedot[0].y)/(movedot[1].x-movedot[0].x))));
			movedot1y = movedot[1].y - movedot[1].r * (Math.sin(Math.atan((movedot[1].y-movedot[0].y)/(movedot[1].x-movedot[0].x))));
			movedot2x = movedot[1].x + movedot[1].r * (Math.cos(Math.atan((movedot[2].y-movedot[1].y)/(movedot[2].x-movedot[1].x))));
			movedot2y = movedot[1].y + movedot[1].r * (Math.sin(Math.atan((movedot[2].y-movedot[1].y)/(movedot[2].x-movedot[1].x))));
			movedot3x = movedot[2].x - movedot[2].r * (Math.cos(Math.atan((movedot[2].y-movedot[1].y)/(movedot[2].x-movedot[1].x))));
			movedot3y = movedot[2].y - movedot[2].r * (Math.sin(Math.atan((movedot[2].y-movedot[1].y)/(movedot[2].x-movedot[1].x))));
			line1[0].setAttribute("d","M" +  movedot0x +"," + movedot0y + "L" + movedot1x +"," + movedot1y);
			line2[0].setAttribute("d","M" +  movedot3x +"," + movedot3y + "L" + movedot2x +"," + movedot2y);
			circle.attr({cx:movedot[0].x, cy:movedot[0].y, r:movedot[0].r});
			circle2.attr({cx:movedot[1].x, cy:movedot[1].y, r:movedot[1].r});
			circle3.attr({cx:movedot[2].x, cy:movedot[2].y, r:movedot[2].r});
			circle4.attr({cx:movedot[3].x, cy:movedot[3].y, r:movedot[3].r});
			circle5.attr({cx:movedot[4].x, cy:movedot[4].y, r:movedot[4].r});
			circle6.attr({cx:movedot[5].x, cy:movedot[5].y, r:movedot[5].r});
			circle7.attr({cx:movedot[6].x, cy:movedot[6].y, r:movedot[6].r});
			circle8.attr({cx:movedot[7].x, cy:movedot[7].y, r:movedot[7].r});
			circle.attr({"fill":"#fff","fill-opacity": 0.2,"stroke":"none"});
			circle2.attr({"fill":"#fff","fill-opacity": 0.2,"stroke":"none"});
			circle3.attr({"fill":"#fff","fill-opacity": 0.2,"stroke":"none"});
			circle4.attr({"fill":"#fff","fill-opacity": 0.2,"stroke":"none"});
			circle5.attr({"fill":"#fff","fill-opacity": 0.2,"stroke":"none"});
			circle6.attr({"fill":"#fff","fill-opacity": 0.2,"stroke":"none"});
			circle7.attr({"fill":"#fff","fill-opacity": 0.2,"stroke":"none"});
			circle8.attr({"fill":"#fff","fill-opacity": 0.2,"stroke":"none"});
			line1.attr("fill", "#fff");
			line1.attr("stroke", "#fff");
			line1.attr("opacity", "0.4");
			line2.attr("fill", "#fff");
			line2.attr("stroke", "#fff");
			line2.attr("opacity", "0.4");
		}
	
}
var k = 0;
var loop = setInterval(function(){
	dotChage();	
	if(!isIe78){draw();}
 },1000/12)
	 

// 背景图居中显示

    $(document).ready(function(){
        var pWidth = $(window).width();
        var pHeight =$(window).height();
        var options = {
            "imgDoms":document.getElementsByName("bg"),
            "showAlign":"center",
            "pWidth":pWidth,//父节点宽度
            "pHeight":pHeight//父节点高度
        }
        var options2 = {
            "imgDoms":document.getElementsByName("svg"),
            "showAlign":"center",
			"imgWidth":1920,
			"imgHeight":1000,
            "pWidth":pWidth,
            "pHeight":pHeight
        }
        imgAdapt(options);
    })


//窗口自适应

	$(window).resize(function(){
		
        pWidth = $(window).width();
        pHeight =$(window).height();
        options = {
			"imgDoms":document.getElementsByName("bg"),
			"showAlign":"center",
			"pWidth":pWidth,
			"pHeight":pHeight
        }
        options2 = {
			"imgDoms":document.getElementsByName("svg"),
			"showAlign":"center",
			"pWidth":pWidth,
			"pHeight":pHeight
        }
        imgAdapt(options);
		fullScreen();
		if(isChrome || isMac){
			$(".page_wrap").css({"webkitTransform": 'translate3d(0,' +  (count)*(-screenHeight) +'px,'+ '0)'});
		}
		else {
			$(".page_wrap").stop(false, true).animate({"top": (count)*(-screenHeight) + "px"}, 300, function () {
				go = true;
			});
		}
		
	});
	

    var $footer = $('.footer_wrap');
    var footerTimer;
    var WAITING_TIME = 2000;

    $('.trigger').mouseenter(function () {
        showFooterToggle(true);
    });

    $footer.mouseenter(function () {
        showFooterToggle(true);
        if (footerTimer) {
            clearTimeout(footerTimer);
        }
    }).mouseleave(function () {
        showFooterToggle(false);
    });

    function bindMouseWheelEvent($el) {
        $el.on('mousewheel.tos.footer', function () {
            var states = $footer.attr('data-animating') === 'true' ? true : false;
            if (!states) {
                showFooterToggle(true);
                if (footerTimer) {
                    clearTimeout(footerTimer);
                }
                footerTimer = setTimeout(function () {
                    showFooterToggle(false);
                }, WAITING_TIME);
            }
        });
    }

    function showFooterToggle(states) {
        states = states !== undefined ? states : !$footer.is(':visited');
        var animating = $footer.attr('data-animating') === 'true' ? true : false;
        if (animating) {
            return;
        }
        $footer.attr('data-animating', true);
        if (states) {
            $footer.fadeIn(800, function () {
                $footer.attr('data-animating', false);
            });
        } else {
            $footer.fadeOut(800, function () {
                $footer.attr('data-animating', false);
            });
        }
    }

    function resetFooter() {
        $footer.attr('data-animating', false).hide();//.css({bottom: -footerHeight});
        clearTimeout(footerTimer);
    }




    function getHeight() {
        return $(window).height();
    }

    function getWidth() {
        return $(window).width();
        if (window.innerWidth != undefined) {
            return window.innerWidth;
        }
        else {
            var B = document.body, D = document.documentElement;
            return Math.min(D.clientWidth, B.clientWidth);
        }
    }
    var count = 0;
    var length = $(".page_wrap .page_item").length;
    var screenWidth = getWidth();
    var screenHeight = getHeight();
    var INIH = screenHeight;
    var d = 0;
    var go = true;

    function fullScreen() {
        screenWidth = getWidth();
        screenHeight = getHeight();
        $(".container .page_item").css({"width": screenWidth + "px","height": screenHeight + "px","overflow": "hidden" });
        $(".container").css({"width": screenWidth + "px","height": screenHeight + "px","overflow": "hidden" });
        $('body').focus();
    }
    fullScreen();
	
    var dd = 0;
	
	
    function sliderDown() {
        count++;
		if(isChrome|| isMac){
			$(".page_wrap").css({"webkitTransform": 'translate3d(0,' +  (count)*(-screenHeight) +'px,'+ '0)'});
			go = true;
			transitonEnd = false;

		}
		else{
			$(".page_wrap").stop(false, true).animate({"top": "-=" + screenHeight + "px"}, 300, function () {
				go = true;
			});
		}
		
        if (count == length - 1) {
            d = 1;
            dd = 0;
        }
    }

    function sliderUp() {
        count--;
		if(isChrome|| isMac){
			$(".page_wrap").css({"webkitTransform": 'translate3d(0,' +  (count)*(-screenHeight) +'px,'+ '0)'});
			go = true;
			transitonEnd = false;
		}
		else{
			$(".page_wrap").stop(false, true).animate({"top": "+=" + screenHeight + "px"}, 300, function () {
				go = true;
			});
		}
        if (count == 0) {
            d = 0;
        }
        dd = 1;
    }

    function changDot() {
        $(".counter span").eq(count).addClass("cur").siblings(this).removeClass("cur");
        $(".counter2 span").eq(count).addClass("cur").siblings(this).removeClass("cur");
        $(".counter").hide();
        $(".counter2").show();
        if (count == 5 || count == 6) {
            $(".counter").show();
            $(".counter2").hide();
        }
    }
	

    function toggleArrow() {
        if (count == length - 1) {
            $("#arrow").stop(false, true).fadeOut(1000);
            if (dd == 0) {
                dd = 1;

            }
        }
        else {
            $("#arrow").stop(false, true).fadeIn(1000);
        }
    }

    $("#arrow").click(function(){
        if (count < length - 1) {
            sliderDown();
            changDot();
			taggoleLoof();			
			
        }
        addCur();
    })

    var curCount = 0;
    var isMac = navigator.userAgent && navigator.userAgent.indexOf('Mac OS') > 0;
    
    $(".counter span,.counter2 span").click(function () {
        curCount = $(this).index();
        count = curCount;
        var direction = ($(".counter .cur").index() - count) > 0 ? 'prev' : 'next';
        changDot();
		if(isChrome || isMac){
			$(".page_wrap").css({"webkitTransform": 'translate3d(0,' +  (count)*(-screenHeight) +'px,'+ '0)'});
			transitonEnd = false;
		}
		else{
			$(".page_wrap").stop(true, false).animate({"top": -curCount * screenHeight + "px"}, 300);
		}
        if (count == length - 1) {
            $("li").eq(length - 1).addClass("show");
            var states = $footer.attr('data-animating') === 'true' ? true : false;
            if (states) {
                return;
            }
            setTimeout(function () {
                bindMouseWheelEvent($('body'));
            }, 400);

        }
        

        addCur();
		taggoleLoof();			

        // css animate
        setTimeout(function () {
            clearAllAnimate();
        }, 300);
    })

    var lastSlideTime = 0;
    var nowTime = 0;
    var s = 0;
    var flagFooter = 0;
    function footerTryShow() {
        if (flagFooter == 0) {
            flagFooter = 1;
        }
    }
    var wheelEvent = "onwheel" in document.createElement("div") ? "wheel" : // Modern browsers support "wheel"
        document.onmousewheel !== undefined ? "mousewheel" : // Webkit and IE support at least "mousewheel"
        "DOMMouseScroll";
		
		
	if(isChrome || isMac) {
		$(".page_wrap")[0].addEventListener("transitionend", function(){transitonEnd = true;}, true);
		$(".page_wrap")[0].addEventListener("webkitTransitionEnd", function(){transitonEnd = true;}, true);
		$(".page_wrap")[0].addEventListener("MozTransitionEnd", function(){transitonEnd = true;}, true);
	}
	
    $('body').on('mousewheel DOMMouseScroll', function (e) {
        e.preventDefault();
        nowTime = +new Date().getTime();
        var $body = $(this);
        var direction;
        
        if (e.type == 'mousewheel') {
            direction = (e.originalEvent.wheelDelta * -1);
        }
        else if (e.type == 'DOMMouseScroll') {
            direction = 40 * e.originalEvent.detail;
        }
        
        if (!$(".page_wrap").is(":animated") && transitonEnd ) {
            if (isMac) {
                if (nowTime - lastSlideTime < 1300)
                    return;
            }
            lastSlideTime = nowTime;
            if (direction > 0) {
                if (count < length - 1) {
                    sliderDown();
                    changDot();
					taggoleLoof();			
                    //wrodsShow();
                }

            }
            else {
                if (count < length && count > 0) {
                    sliderUp();
                    changDot();
					taggoleLoof();			
                }
            }
            if (count == length - 1) {
                
                //footerTryShow();
                var states = $footer.attr('data-animating') === 'true' ? true : false;
                if (states) {
                    return;
                }
                var delay = isMac ? 1300 : 400;
                setTimeout(function () {
                    bindMouseWheelEvent($body);
                }, delay);
                
            } else {
                $body.off('mousewheel.tos');
                setTimeout(function () {
                    resetFooter();
                }, 400);
            }
            
            if (count === 0) {
                $("#arrow").show();
            } else {
                $("#arrow").hide();
            }

            // css animate
            setTimeout(function () {
                clearAllAnimate();
            }, 300);

            fadeOutContent(count);
            addCur();

        }
    });


    var addCur = function () {
        $(".page_item").removeClass("cur");
        $(".page_item").eq(count).addClass("cur");
		if(count == 5){
			$("#tab_cnt_site").addClass("flyin");
		}
		if(count != 6 && count != 5){
			$("#tab_cnt_site").removeClass("flyin");
		}
    }

    var $pageCnt = $('.page_cnt');
    function fadeOutContent(count) {
        var prev = count - 1;
        if (prev) {
            $pageCnt.eq(prev - 1).fadeOut(200, function () {
                var $me = $(this);
                setTimeout(function () {
                    $me.show();
                }, 300);
            });
        }
    }

    /**
     * CSS Animates
     */
    var aiStyle = 'animated';
    var $aiNoBorderDesign = $('.no-border-design');
    var $aiApps = $('.phone-apps');
    var $phoneDetail = $('.phone-detail');
    var $noticeBar = $('.notice-bar');
    var $notices = $('.notice');
    
    function clearAllAnimate () {
        $('.ai').each(function () {
            if (!$(this).hasClass('isLastPage')) {
                $(this).removeClass(aiStyle);
            }
        });
    }

    function animateActionByOrder ($els, order) {
        var str = Object.prototype.toString;
        var interval = order !== undefined ? order : 500;
        var isArr = str.call(interval) === '[object Array]';

        var orders = [];
        if (isArr) {
            orders = interval;
        } else {
            var i = 0;
            var len = $els.length;
            var step = 0;
            for (; i < len; i++) {
                orders.push(step += interval);
            }
        }
        $els.each(function (index) {
            var $me = $(this);
            setTimeout(function () {
                $me.addClass(aiStyle);
            }, orders[index]);
        });
    }
    
    var $body = $('body');
	
	
	var taggoleLoof = function(){
		if(loop == undefined && count == 0){
			loop = setInterval(function(){
					dotChage();	
					if(!isIe78){draw();}
				 },1000/12);	
		}
		if(loop != undefined && count != 0){
			window.clearInterval(loop);
			loop = undefined;
		}
		
	}

	taggoleLoof();
	
	
	
</script>

<script type="text/javascript">
	//news_tab
	
	$("#news_site").click(function(){
		$(".tab_line").animate({"left":20},300);
		$("#news_form").removeClass("cur");
		$(this).addClass("cur");
		$("#tab_cnt_form").addClass("");
		$("#tab_cnt_site").removeClass("");
		$(".tab_container").animate({"left":0},200);
		$("#tab_cnt_form").removeClass("flyin");
		$("#tab_cnt_site").addClass("flyin");
	})
	
	$("#news_form").click(function(){
		$(".tab_line").animate({"left":180},300);
		$("#news_site").removeClass("cur");
		$(this).addClass("cur");
		$("#tab_cnt_site").addClass("");
		setTimeout('$("#tab_cnt_site").addClass("cur");',400)
		$("#tab_cnt_form").removeClass("none cur");
		$(".tab_container ").animate({"left":-1000},200);
		$("#tab_cnt_form").addClass("flyin");
		$("#tab_cnt_site").removeClass("flyin");
	})
	
	
	
</script>