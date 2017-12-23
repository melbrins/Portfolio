// ============================
// PROJECT - FULLSCREEN FIX
// Fix vertical when not overflow
// Call fullscreenFix() if .fullscreen content changes
// ============================

function fullscreenFix(){
	var h = $('body').height();
    // set .fullscreen height
    $(".content-b").each(function(i){
    	if($(this).innerHeight() <= h){
    		$(this).closest(".fullscreen").addClass("not-overflow");
    	}
    });
}
$(window).resize(fullscreenFix);
fullscreenFix();

// ============================
// PROJECT - BACKGROUND RESIZE
// ============================

function backgroundResize(){
	var windowH = $(window).height();
	$(".background").each(function(i){
		var path = $(this);
        // variables
        var contW = path.width();
        var contH = path.height();
        var imgW = path.attr("data-img-width");
        var imgH = path.attr("data-img-height");
        var ratio = imgW / imgH;
        // overflowing difference
        var diff = parseFloat(path.attr("data-diff"));
        diff = diff ? diff : 0;
        // remaining height to have fullscreen image only on parallax
        var remainingH = 0;
        if(path.hasClass("parallax")){
        	var maxH = contH > windowH ? contH : windowH;
        	remainingH = windowH - contH;
        }
        // set img values depending on cont
        imgH = contH + remainingH + diff;
        imgW = imgH * ratio;
        // fix when too large
        if(contW > imgW){
        	imgW = contW;
        	imgH = imgW / ratio;
        }
        //
        path.data("resized-imgW", imgW);
        path.data("resized-imgH", imgH);
        path.css("background-size", imgW + "px " + imgH + "px");
    });
}
$(window).resize(backgroundResize);
$(window).focus(backgroundResize);
backgroundResize();


jQuery(document).ready(function($) {
	// ============================
	// MOBILE - MENU
	// ============================
	$("#mobile-menu").hide();
	$("#toggle-nav").click(function() {
		$("#mobile-menu").slideToggle(500);
	});
	// ============================
	// MOBILE - FILTER
	// ============================
	$("#toggle-filters").click(function() {
		$("#filters").slideToggle(500);
		$('#toggle-filters').toggleClass('active');
	});
	$(".filter").bind("click", function() {
		if ($(window).width() < 767) {
			$("#filters").slideToggle(500);
			$('#toggle-filters').toggleClass('active');

			$currentfilter = $(this).html();

			$('.top-banner .current-filter').html($currentfilter);
		}
	});
	// ============================
	// TOGGLE - FIXED HEADER
	// ============================
	$(window).bind('scroll', function() {
		if ($(window).scrollTop() > 300) {
			$(".toggle-fix").addClass('fixed');
			var toggleSize = $(".toggle-fix").height();
			$("body").css('padding-top', toggleSize);
		}
		else {
			$(".toggle-fix").removeClass('fixed');
			$("body").css('padding-top', "0");
		}
	});
	// ============================
	// PROJECT - MAIN PICTURE
	// ============================
	$("#main-picture").addClass("full");
	// ============================
	// PROJECT - PAGE HEIGHT
	// ============================
	$(window).resize(function(){
		resizeContainer();
	});

	function resizeContainer(){
		if($(window).width() > 770){
			$docHeight = $(window).height();
			$(".artwork").height($docHeight);
			$(".description").height($docHeight);
		}else{
			$(".artwork").height('auto');
			$(".description").height('auto');
		}
	}

	resizeContainer();
});

$(document).ready(function(){
 	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:5
	        }
	    }
	});
});
