(function ($, root, undefined) {

	$(function () {

		'use strict';

		// Scroll Reveal
		window.sr = ScrollReveal();
		sr.reveal('.project', { delay: 200 }, 100);

		// Mobile Navigation
		$(document.getElementById('menubutton')).click(function () {
			$(document.getElementById('mobilemenu')).css("left", "20vw");
			$('body').css('overflow', 'hidden');
		});
		$(document.getElementById('closemenubutton')).click(function () {
			$(document.getElementById('mobilemenu')).css("left", "200vw");
			$('body').css('overflow', 'auto');
		});
		$('#mobilemenu').after().click(function () {
			$(document.getElementById('mobilemenu')).css("left", "200vw");
			$('body').css('overflow', 'auto');
		});

		// Smooth Scrolling
		$('a').click(function() {
			if (this.hash !== "") {
	      event.preventDefault();
	      var hash = this.hash;
	      $('html, body').animate({
	        scrollTop: $(hash).offset().top
	      }, 500, function(){
	        window.location.hash = hash;
	      });
    	}
		});

		// Close Modal
		$('.closemodal').live('click', function() {
			$('.project-modal').remove();
			$('section').css('pointer-events', 'auto');
			$('body').css('overflow', 'inherit');
		});

	});

})(jQuery, this);
