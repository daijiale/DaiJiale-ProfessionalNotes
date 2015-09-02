(function(){
	$("#latestProjects li:not(.active) a.button").live("click", function(){
		var currentButton = $(this);
		var activeButton = $("#latestProjects li.active a.button");

		activeButton.parent().removeClass("active");
		activeButton
			.animate({ bottom: "-25px" }, { queue: false, duration: 500 })
			.siblings(".details").animate({ bottom: "7px" }, { queue: false, duration: 500 });

		activeButton.parent().find(".img_wrapper").find(".img_grayscale").animate({opacity:0}, 500);

		currentButton.parent().addClass("active");
		currentButton
			.stop(true,true)
			.animate({ bottom: "-230px"	}, { queue: false, duration: 500 })
			.siblings(".details").animate({ bottom: "-200px" }, { queue: false, duration: 500 });
		currentButton.parent().find(".img_wrapper").find(".img_grayscale").animate({opacity:1}, 500);

		$(".slider .sliderBar")
			.stop(true,true)
			//.animate({ left: (($(this).parent().index() * 242)+43) + "px" })
			.animate({ left: $(this).parent().position().left - 77 + "px" })
			.css({"backgroundPosition" : "0px -32px", "top" : "-7px"})
			.animate({
				top: "-39px",
				backgroundPosition : "0 0"
			});
		return false;
	});


	//SLIDER home page
	$("#latestProjects .rightArrow").bind("click", function(){

		$("#latestProjects a.button").animate({
			bottom: "-25px"
		}).parent().find(".img_wrapper").find(".img_grayscale").animate({opacity:0}, 500);

		$("#latestProjects li").removeClass("active");

		$("#latestProjects .details").animate({
			bottom: "7px"
		}).promise().done( function(){
			$("#latestProjects ul li:first").animate({
				marginLeft: "-242px"
			}, function(){
				var li = $("#latestProjects ul li:first").remove();
				$("#latestProjects ul").append(li);
				$("#latestProjects ul li:last").fadeIn().css("marginLeft","0");
			});

		});

		$(".slider .sliderBar").css({"backgroundPosition" : "0px -32px", "top" : "-7px"})
	});


	$("#latestProjects .leftArrow").bind("click", function(){

		$("#latestProjects a.button").animate({
			bottom: "-25px"
		}).parent().find(".img_wrapper").find(".img_grayscale").animate({opacity:0}, 500);

		$("#latestProjects li").removeClass("active");

		$("#latestProjects .details").animate({
			bottom: "7px"
		}).promise().done( function(){
			var last = $("#latestProjects ul li:last").css({"marginLeft" : "-242px"}).remove();
			$("#latestProjects ul").prepend(last);

			$("#latestProjects ul li:first").animate({
				marginLeft: "0"
			});

		});
		$(".slider .sliderBar").css({"backgroundPosition" : "0px -32px", "top" : "-7px"})
	});


	$("nav li#selector").css({
		width : $("nav li.active").width(),
		left: $("nav li.active").position().left+20
	});

	var resetNavSelector;
	$("nav>ul>li:not(#logo_placeholder)").hover(function(){
		var currentLink = $(this);
		clearTimeout(resetNavSelector);
		$("nav li#selector").animate(
			{
				width : currentLink.width(),
				left: currentLink.position().left+20
			}, {
				duration : 300,
				easing : "swing",
				queue : false
			});

	}, function(){
		var activeLink = $("nav li.active");

		resetNavSelector = setTimeout(function() {
			$("nav li#selector").animate({ width : activeLink.width(), left: activeLink.position().left+20 }, 200);
	    }, 200);
	});

	//v1
	// $("nav ul li.as").hover(function(){
	// 		$(this).find(".submenu").stop(true,true).slideDown();
	// 		$(this).css("background","#3d3d3d");
	// 	}, function(){
	// 		$(this).find(".submenu").stop(true,true).slideUp();
	// 		$(this).css("background","none");
	// });



	//v2
	$("nav ul li.as>a").click(function(){
		$(this).siblings(".submenu").stop(true,true).slideDown();
		//$(this).parent().css("background","#3d3d3d");
		return false;
	});

	$("nav ul li.as").hover(function(){

		}, function(){
			$(this).find(".submenu").stop(true,true).slideUp();
			$(this).css("background","none");
	});



//portfolio gallery
	$("#portfolio .rightArrow").bind("click", function(){

		var slider = $(this).siblings(".slider");
		var li;

		slider.find("li.slide:first").animate({
			marginLeft: "-1000px"
		}, 1000, function(){
			li = $(this).remove().css("marginLeft","0");
			$(".slider .container").append(li);
		});
	});

	$("#portfolio .leftArrow").bind("click", function(){

		var slider = $(this).siblings(".slider");
		var li;

		console.log(slider.find("li.slide:last"));

		li = slider.find("li.slide:last").remove().css("marginLeft","-1000px");
		$(".slider .container").prepend(li);

		slider.find("li.slide:first").animate({
			marginLeft: "0"
		}, 1000);


	});

	$(document).ready(function() {
		$(".fancybox").fancybox({
	    	openEffect	: 'elastic',
    		closeEffect	: 'elastic',
	        padding : 2
		});
	});

    $('#project_type').ddslick({
    	width: "170px",
    	selectText: "Select your favorite social network",
    });


    $('#category_select').ddslick({
    	width: "160px",
    	selectText: "Select your favorite social network",
    });


	// On window load. This waits until images have loaded which is essential
	$(window).load(function(){



		// Fade in images so there isn't a color "pop" document load and then on window load
		$("#gallery li img").fadeIn(500);
		$("#gallery li .details").delay(500).fadeIn(100);

		// clone image
		$('#gallery li img').each(function(){
			var el = $(this);
			el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({"position":"absolute","z-index":"4","opacity":"0"}).insertBefore(el).queue(function(){
				var el = $(this);
				el.parent().css({"width":this.width,"height":this.height});
				el.dequeue();
			});
			this.src = grayscale(this.src);
		});

		$('#gallery li:not(.active) img').live({
			mouseenter: function(){
				$(this).stop(true,true).animate({opacity:1}, 500);
			},
			mouseleave: function(){
				$(this).stop(true,true).animate({opacity:0}, 500);
			}
		});


	});

})();

