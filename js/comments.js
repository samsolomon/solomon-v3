jQuery(document).ready(function( $ ) {

		//Add JS class to html
		$("html").addClass("js");

		//Comment Toggle
		if ((custom_js_vars.toggle_comments) == 'toggle') {
			$(".comments-wrap").hide();

			$("#comments-title").addClass("comment-toggle");

			//Scroll to Comment Reply
			if ( document.location.href.indexOf('#comment') > -1 ) {
		        $(".comments-wrap").show();

		        var $root = $('html, body');
			    var ancloc = window.location.hash;
			    event.preventDefault();
			        $root.animate({
			            scrollTop: $(ancloc).offset().top
			        }, 500, function () {
			            window.location.hash = href;
			        });
			        return false;
			}

			//Toggle Comments
			$("#comments-title").click(function () {
				$(".comments-wrap").slideToggle();

				$('html, body').animate({
	                scrollTop: $(".comments-wrap").offset().top
	            }, 500);

				return false;
			});
		}

});
