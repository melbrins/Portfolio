// ============================
// PROJECT - FULLSCREEN FIX
// Fix vertical when not overflow
// Call fullscreenFix() if .fullscreen content changes
// ============================

function fullscreenFix(){
	var h = $('body').height();
    // set .fullscreen height
    $(".content-b").each(function(){
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
	$(".background").each(function(){
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
        	//var maxH = contH > windowH ? contH : windowH;
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
	// TOGGLE - FIXED HEADER
	// ============================
	$(".content-wrap").bind('scroll', function() {
		if ($(".content-wrap").scrollTop() > 300) {
			$(".toggle-fix").addClass('fixed');
			var toggleSize = $(".toggle-fix").height();
			$(".content-wrap").css('padding-top', toggleSize);
		}
		else {
			$(".toggle-fix").removeClass('fixed');
			$(".content-wrap").css('padding-top', "0");
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


jQuery(document).ready(function($) {

	$titleSizeW = $(this).find('.section--title h2:visible').width() + 30;
	$titleSizeH = $(this).find('.section--title h2:visible').height() + 30;

	$(window).resize(function(){
		positionTitle();
	});

	function positionTitle(){
		$(".section:visible").each(function(){

			$sectionPadding = parseInt($(this).css('padding-top').replace("px", ""));

			if($(window).width() > '770'){
				
					$(this).find('.section--title').css("width", $titleSizeH);
					$(this).find('.section--title').css("height", $titleSizeW);
					$(this).find('.section--title h2').css("width", $titleSizeW);
					$(this).find('.section--title h2').css("left", $titleSizeH);
					$(this).find('.section--title').css("top", $sectionPadding);
	
			}else{
	
				$(this).find('.section--title').css("width", '');
				$(this).find('.section--title').css("height", '');
				$(this).find('.section--title h2').css("width", '');
				$(this).find('.section--title h2').css("left", '');
				$(this).find('.section--title').css("top", '');
	
			}

		});
	}

	positionTitle();
});	