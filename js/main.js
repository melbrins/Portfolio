windowH = $(window).height();
windowW = $(window).width();
var mobileBreakPoint = 768;
var device;
var img = $('img');

function isMobile(){

    if($(window).width() < mobileBreakPoint) return true;
    return false;

}

$(window).resize(windowResize);

function windowResize (){
    previousDevice = device;

    if(isMobile()){
        device = 'mobile';
    } else {
        device = 'desktop';
    }

    if(previousDevice != device){
        toggleImages();
    }
}

function toggleImages(){

    img.each(function(){
        if(isMobile()) {
            if (this.getAttribute('data-src-mobile') != undefined) {
                var mobileImg = this.getAttribute('data-src-mobile');

                this.src = mobileImg;
                console.log('src                : ' + this.getAttribute('src'));
            }
        }else{
            if (this.getAttribute('data-src-desktop') != undefined) {
                var desktopImg = this.getAttribute('data-src-desktop');

                this.src = desktopImg;
                console.log('src                : ' + this.getAttribute('src'));
            }
        }


    });
}

jQuery(document).ready(function($) {
    windowResize ();
	// ============================
	// MOBILE - MENU
	// ============================
	var menu = $("#mobile-menu");

	menu.hide();

	$("#toggle-nav").click(function() {
        menu.slideToggle(500);
	});

	// ============================
	// TOGGLE - FIXED HEADER
	// ============================
	var toggleElement  	= $(".toggle-fix");
    var toggleSize  	= toggleElement.height();
	var loadingSection  = $('#loading');

	var loadingSize = windowH - 60;

    if(loadingSection){
        loadingSection.css('height', loadingSize);
	}

	$(window).bind('scroll', function() {

		if ($(window).scrollTop() > loadingSize) {

            toggleElement.addClass('fixed');
            $("body").css('padding-top', toggleSize);

		} else {

            toggleElement.removeClass('fixed');
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

    // ========================================================
    // SCROLL TO
    // Target: Element, Button: Element, Time: String
    // ========================================================
    function scrollTo ($target, $button, $time){
        $($button).click(function() {

            event.preventDefault();

            $('html').animate({
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