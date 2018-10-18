windowH = $(window).height();
windowW = $(window).width();
var mobileBreakPoint = 768;
var device;
var isIE11 = !!window.MSInputMethodContext && !!document.documentMode;



jQuery(document).ready(function($) {
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

    }

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

		if ($(window).scrollTop() > loadingSize - 10) {

            toggleElement.addClass('fixed');
            $("body").css('padding-top', toggleSize);

		} else {

            toggleElement.removeClass('fixed');
            $("body").css('padding-top', "0");

		}

	});


    // ========================================================
    // SCROLL TO
    // Target: Element, Button: Element, Time: String
    // ========================================================
    function scrollTo ($target, $button, $time){
        $($button).click(function() {

            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($target).position().top
            }, $time);

            console.log($('html').scrollTop);
            console.log($($target).position().top);
        });
    }

    scrollTo('#homepage-work', '#discover', 500);


    // ========================================================
    // POSITION TITLE
    // Goal: Position correctly rotated section titles.
    // ========================================================
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