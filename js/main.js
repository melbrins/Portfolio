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
var windowH = $(window).height();

function backgroundResize(){	
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
		if ($(".content-wrap").scrollTop() > windowH) {
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

	// ========================================================
	// SCROLL TO 
	// Target: Element, Button: Element, Time: String
	// ========================================================
	function scrollTo ($target, $button, $time){
		$($button).click(function() {
			
			event.preventDefault();

		    $('.content-wrap').animate({
		        scrollTop: $($target).position().top
		    }, $time);

		});
	}

	scrollTo('#services', '#discover', 500);


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
					$(this).find('.section--title').css("top", $sectionPadding);

					$(this).find('.section--title h2').css("width", $titleSizeW);
					$(this).find('.section--title h2').css("left", $titleSizeH / 2);
	
			}else{
	
				$(this).find('.section--title').css("width", '');
				$(this).find('.section--title').css("height", '');
				$(this).find('.section--title').css("top", '');

				$(this).find('.section--title h2').css("width", '');
				$(this).find('.section--title h2').css("left", '');
			}

		});
	}

	positionTitle();
});	
/**
 * main3.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
(function() { 

	var bodyEl  	= document.body,
		content 	= document.querySelector( '.content-wrap' ),
		openbtn 	= document.getElementById( 'open-button' ),
		closebtn 	= document.getElementById( 'close-button' ),
		isOpen 		= false,

		morphEl 	= document.getElementById( 'morph-shape' ),
		s 			= Snap( morphEl.querySelector( 'svg' ) );

		path 		= s.select( 'path' );
		
		var initialPath = this.path.attr('d'),
		pathOpen 	= morphEl.getAttribute( 'data-morph-open' ),
		isAnimating = false;

	function init() {
		initEvents();
	}

	function initEvents() {
		console.log('initEvents'); 
		openbtn.addEventListener( 'click', toggleMenu );
		if( closebtn ) {
			closebtn.addEventListener( 'click', toggleMenu );
		}

		// close the menu element if the target it´s not the menu element or one of its descendants..
		content.addEventListener( 'click', function(ev) {
			var target = ev.target;
			if( isOpen && target !== openbtn ) {
				toggleMenu();
			}
		} );
	}

	function toggleMenu() {
		console.log('toggleMenu');
		if( isAnimating ) return false;
		isAnimating = true;
		if( isOpen ) {
			classie.remove( bodyEl, 'show-menu' );
			// animate path
			setTimeout( function() {
				// reset path
				path.attr( 'd', initialPath );
				isAnimating = false; 
			}, 300 );
		}
		else {
			classie.add( bodyEl, 'show-menu' );
			// animate path
			path.animate( { 'path' : pathOpen }, 400, mina.easeinout, function() { isAnimating = false; } );
		}
		isOpen = !isOpen;
	}

	init();

})();
//# sourceMappingURL=main.js.map