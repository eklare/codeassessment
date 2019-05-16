

var KC = (function($) {

	var init = function() {

		// Prevent CSS animations until load
		$('body').removeClass('preload');

		
		$('.hamburger').click(function(){
			$('body').toggleClass('modalOpen navOpen');
			$('.modal .insideModal').html('');
		});



		$(document).on('click', '.modal .mobileNav ul.primary li a', function(){
			$('body').removeClass('modalOpen navOpen');
		});

	

		$(function() {
		  $('a[href*="#"]:not([href="#"])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html, body').animate({
		          scrollTop: target.offset().top - 100
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});



		$(document).on('submit', '#sendContact', function(e) {
			e.preventDefault();
			var $form = $(this);

			var data = $(this).serializeArray();

			
			var status, message;

			$form.find('.formResponse').empty();

			if( $('#email').val() != '' ) {


				var email = encodeURIComponent( $('#email').val() );
				var name = encodeURIComponent ( $('#name').val() );
				var comments = encodeURIComponent ( $('#comments').val() );

				//var querystring = "/contact?name=" + name + "&email=" + email +"&message=" + comments;
				console.log(querystring);

		
				$.get(querystring, function(d) {

					if( d.id ) {

						status = 'ok';
						message = '<span class="name"></span>Thank you for your interest.  We will contact you shortly.';
						$form.addClass('success');


					} else {

						status = 'error';
						message = 'Oops, something has gone wrong, plesae try again or give us a call.';



					}

					$('.formResponse').addClass(status).html('<p>'+ message +'</p>');

					

				});

			} else {

				$('.formResponse').addClass('error').html('<p>Please submit all fields.</p>');

				

			}

		}); // End contact form submission




	};

	var scroll = function() {

		// var winH = $(window).height();
		// var pixelsScrolled = $(window).scrollTop();

		// if(pixelsScrolled > 200){
		// 	$('body').addClass('scrolled');
		// } else{
		// 	$('body').removeClass('scrolled');
		// }

		var windscroll = $(window).scrollTop();
	    if (windscroll >= 200) {
	        $('body').addClass('scrolled');
	        $('.wrapper section.nav').each(function(i) {
	            if ($(this).position().top <= windscroll + 150) {
	                $('nav a.active').removeClass('active');
	                $('nav a').eq(i).addClass('active');
	            }
	        });

	    } else {

	        $('body').removeClass('scrolled');
	        $('nav a').removeClass('active');
	    }


	};

	var resize = function() {

		var docH = $(document).height();
		var winH = $(window).height();
		var winW = $(window).width();

	};

	return {
		init: 	init,
		scroll: scroll,
		resize: resize
	};

}(jQuery));

$(document).ready(function() {
	KC.init();
	KC.scroll();
	KC.resize();
});

$(window).scroll(function() {
	KC.scroll();
});

$(window).resize(function() {
	KC.resize();
});

$(document).keyup(function(e) {
	if (e.keyCode == 27) { // Esc key
		$('.close').trigger('click');
	}
	if (e.keyCode == 37) { // Left arrow
	}
	if (e.keyCode == 39) { // Right arrow
	}
});
