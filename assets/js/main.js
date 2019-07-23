/* ========================== PARALLAX SCROLL FOR THE HEADER CITY SKYLINE IMAGE ========================== */
$(function() {

	//Cache the window object
	var $window = $(window);

	//Parallax background effect 
	$('section[data-type="background"]').each(function() {

		var $bgobj = $(this); // assigning the object

		$window.scroll(function() {

			// scroll the background at var speed
			// the yPos is a negative value because we're scrolling it up
			var yPos = -($window.scrollTop() / $bgobj.data('speed'));

			var yPos = 35 - yPos;

			// Put together our final background position
			var coords = '0 ' + yPos + '%';

			// Move the background
			$bgobj.css({ backgroundPosition: coords });

		}); // end window scroll


	});

});

/* ====================== AUTOMATIC SCROLL IN THE FOOTER JELLYFISH IMAGE ============================ */ 
var BackgroundScroll = function(params) {
	
	params = $.extend({
		scrollSpeed: 70,
		imageWidth: $('.footer-image').width(),
		imageHeight: $('.footer-image').height()
	}, params);

	var step = 1,
		current = 0,
		restartPosition = - (params.imageWidth - params.imageHeight);

	var scroll = function() {
		current -= step;
		if (current == restartPosition){
			current = 0;
		}	
		$('.footer-image').css('backgroundPosition', current + 'px 0');

	};

	this.init = function() {
		setInterval(scroll, params.scrollSpeed);

	};
	
};

var scroll = new BackgroundScroll();
scroll.init();

/* ========================= AJAX LOAD NEXT PIECE WITHOUT REFRESHING PAGE =================================  */

$(".next-btn").click(function() {

	$.ajax("nextpiece.html").done(function(data) {

		$(".col-sm-6").html(data);

	})
	.fail(function() {

		alert("There was an error");

	});
	
});