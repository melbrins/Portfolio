////////////// Main.js

/////	Author: 		Igor Kolga
/////	Date created: 	25/03/2014
/////	Last modified: 	23/04/2014





// Sidebar - Cultural Diary tabs switch
function toggleSidebarTabs(el) {
	$('.sidebar').find('.title-switch li').removeClass('active').eq(el).addClass('active').end().end()
		.find('.list-box .list').removeClass('active').eq(el).addClass('active');
}





// Page: homepage - news slider

var slide_width = 920;
var $slider = $('.news-container').find('.slider');
var $slide = $('.news-container').find('.slide');

var total_slider, 
	total_width;

var scrolling = 0;
var scroll_speed = 1000;
var is_scrolling = false;

var scr_timer;


function insertSlideBefore() {
	var new_value = parseInt($('.slide').first().css('left')) - slide_width;
	console.log(new_value);
	$('.slide').last().css('left', new_value + 'px').insertBefore($('.slide').first());
}

function insertSlideAfter() {
	var new_value = parseInt($('.slide').last().css('left')) + slide_width;
	$('.slide').first().css('left', new_value + 'px').insertAfter($('.slide').last());
}

function scrollNews(dir) {
	if (is_scrolling == false) {
		if (dir == 'turn-left') {
			is_scrolling = true;
			scrolling += 920;
			$slider.find('.slide.active').removeClass('active').prev('.slide').addClass('active');

			if ($slider.find('.slide.active').index() == 0) {
				insertSlideBefore();
			}
		}

		else if (dir == 'turn-right') {
			is_scrolling = true;
			scrolling -=920;
			$slider.find('.slide.active').removeClass('active').next('.slide').addClass('active');

			if ($slider.find('.slide.active').index() == total_slides - 1) {
				insertSlideAfter();
			}
		}

	
		$slider.css('-webkit-transform', 'translateX('+ scrolling +'px)');
		
		scr_timer = setTimeout(function () {
			is_scrolling = false;
		}, scroll_speed);
	}
}


function initSlider() {
	total_slides = $slide.length;
	if (total_slides >= 4) {
		$slide.each(function () {
			$(this).css({ position: 'absolute', left: scrolling + 'px' });
			scrolling += slide_width;
		});

		scrolling = 0;
		insertSlideBefore();
	}



	total_width = slide_width * total_slides;
	$slide.eq(0).addClass('active');
	$('.slider').css({'width': total_width + 'px', 'left': '0px'});
}




// Page: cultural diary - toggle event slide
function toggleAccordion(el) {
	var $head = $(el);
	var $body = $(el).next('.body');
		if ($head.hasClass('active')) {
			$head.removeClass('active').find('.reveal').html('<span></span>Open');
			$body.stop(true, true).slideUp(300);
		}
		else if (!$body.hasClass('active')) {
			$head.addClass('active').find('.reveal').html('<span></span>Close');
			$body.stop(true, true).slideDown(300);
		}
}



function setPageHeight() {
	if ($('#page').outerHeight() < $('#secondary').height() && $('#secondary').css('display') != 'none') {
		var side_height  = $('#secondary').outerHeight() + 100;
		$('#page').animate({ 'min-height': side_height + 'px'}, 500);
	}
}




// Menu bar fixed status switch
var $menu = $('#site-navigation');
var menu_top = $menu.offset().top;
var $sticky = $('#fixed-nav');

function toggleFixedHeader(dist) {
	if (dist < menu_top && $sticky.hasClass('sticky')) {
		$sticky.removeClass('sticky');
	}
	else if (dist >= menu_top && !$sticky.hasClass('sticky')) {
		$sticky.addClass('sticky');
	}
}


function toggleMobileNav(state) {
	var $nav = $('#mobile-nav');
	var $overlay = $('.overlay-box');

	if (state == 'on') {
		$nav.addClass('on');
		$overlay.fadeIn(500);
	}
	else if (state == 'off') {
		$nav.removeClass('on');
		$overlay.fadeOut(500);
	}
}


$(function () {

	// Homepage sidebar for Recent Articles
	/* TODO: removed because sidebar changed - consider removing if not using tabs
	$('.sidebar').find('.title-switch li').on('click', function () {
		if (!$(this).hasClass('active')) {
			var el = $(this).index();
			toggleSidebarTabs(el);
		}
	})
	*/


	// News slider
	if ($('.news-container').length) {
		initSlider();
	}
	

	$('.news-turn').on('click', function () {
		scrollNews($(this).attr('id'));
	});

	

	// Fix menu
	$(window).scroll(function () {
		var scrolled = $(window).scrollTop();
		toggleFixedHeader(scrolled);
	});


	// Cultural diary page events slide
	$('#page').find('.head').on('click', function () {
		toggleAccordion($(this));
	});



	// Mobile Top Navigation
	$('.mobile-top').find('.home-btn').on('click', function () {
		toggleMobileNav('on');
	});

	$('#mobile-nav').find('.close-nav').on('click', function () {
		toggleMobileNav('off');
	});


	$('.mobile-top.main-bar').find('.search-btn').on('click', function () {
		$(this).next('.mobile-search').fadeIn(300).addClass('on');
		$(this).fadeOut(300);
	});

});


$(window).load(function () {
	setPageHeight();
});