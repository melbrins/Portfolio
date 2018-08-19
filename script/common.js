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

    if(loadingSection){
        loadingSection.css('height', windowH);
	}

	$(window).bind('scroll', function() {

		if ($(window).scrollTop() > windowH) {

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