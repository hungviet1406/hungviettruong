$(document).ready(function() {
	$(window).bind('scroll', function() {
		parallax();
	});
});

function parallax() {
	var scrollPos = $(window).scrollTop();
	// Section 1
	$('.section-1').css('backgroundPosition', "50% " + Math.round(($('.section-1').offset().top - scrollPos) * 0.5) + "px");
	// Section 2
	$('.section-2').css('backgroundPosition', "50% " + Math.round(($('.section-2').offset().top - scrollPos) * 0.3) + "px");
	$('.sherlock').css('top',(200 - (scrollPos * 0.2)) + 'px')
	$('#sherlock-img').css('top',(800 - (scrollPos * 1)) + 'px')
	// Section 3
	$('.section-3').css('backgroundPosition', "50% " + Math.round(($('.section-3').offset().top - scrollPos) * 0.4) + "px");
	$('.steve').css('top',(1000 - (scrollPos * 0.5)) + 'px')
	$('#steve-img').css('top',(1600 - (scrollPos * 1)) + 'px')
}