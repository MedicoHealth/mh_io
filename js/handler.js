$(document).ready(function(){
	$(".member").hover(function(){
		$(this).find(".memeberdescription").css("display", "block");
		}, function(){
		$(this).find(".memeberdescription").css("display", "none");
	});

	// Add smooth scrolling to all links
	  $("a").on('click', function(event) {
		if (this.hash !== "") {
		  event.preventDefault();
		  var hash = this.hash;
		  $('html, body').animate({
			scrollTop: $(hash).offset().top
		  }, 800, function(){
			window.location.hash = hash;
		  });
		}
	  });

	// COUNTDOWN
	// $('#clock').countdown('2018/9/1 18:00', function(event) {
	//   $(this).html(event.strftime('<div class="timeblock">%-D<span class="timedesc">days</span></div><div class="timeblock">%-H<span class="timedesc">hours</span></div><div class="timeblock">%-M<span class="timedesc">minutes</span></div>'));
	// });
	$('#clock').html('<div class="timeblock">12<span class="timedesc">days</span></div><div class="timeblock">57<span class="timedesc">hours</span></div><div class="timeblock">33<span class="timedesc">minutes</span></div>');

	// PLAY / PAUSE VIDEO
	$('#presentation-video').onScreen({
	   container: window,
	   direction: 'vertical',
	   doIn: function() {
			document.getElementById('presentation-video').play();
	   },
	   doOut: function() {
			document.getElementById('presentation-video').pause();
	   },
	   tolerance: 0,
	   throttle: 50,
	   toggleClass: 'onScreen',
	   lazyAttr: null,
	   lazyPlaceholder: 'someImage.jpg',
	   debug: false
	});

	// display mobile menu
	$('#intro').onScreen({
	   container: window,
	   direction: 'vertical',
	   doIn: function() {
			$("#follow-menu").slideUp();
			$("#mobile-menu").slideUp();
	   },
	   doOut: function() {
			if($(document).width()>610)
				$("#follow-menu").slideDown();
			else
				$("#mobile-menu").slideDown();
	   },
	   tolerance: 0,
	   throttle: 50,
	   toggleClass: 'onScreen',
	   lazyAttr: null,
	   lazyPlaceholder: 'someImage.jpg',
	   debug: false
	});
	// on mobile menu click
	var mobilecounter = 0;
	$('#mobile-menu').on('click touch', function () {
		if(mobilecounter%2==0){
			$("#follow-menu").slideDown();
		}
		else{
			$("#follow-menu").slideUp();
		}
		mobilecounter++;
	});
    setTimeout(function(){
        $('#ac-wrapper').css({ 'display':'flex' });
    }, 2000);
});

var moreButtonRotation = 90;

function openChimp(){
    $('#marketing-more').slideToggle('slow');
    if (moreButtonRotation == 90) {
        moreButtonRotation = -90
    } else {
        moreButtonRotation = -90
    }
        $('#more-button').css({ 'background':'linear-gradient('+moreButtonRotation+'deg, #486ae5, #31c4f1)' });

}

function closeModal(){
    $('#ac-wrapper').css({ 'display':'none' });
}
