<script type="text/javascript" async>
var s=document.createElement("script");
s.type="text/javascript";
s.async=true;
s.src="https://widgets.nopaperforms.com/emwgts.js";
document.body.appendChild(s);
</script>
<script>
		$(function() {
		//caches a jQuery object containing the header element
		var header = $(".top_menubar");
		var navbar = $(".navbar");
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();

			if (scroll >= 100) {
				header.removeClass('show').addClass("hide");
				header.addClass('navbar-shrink');
				navbar.addClass('navbar-shrink');
			} else {
				header.removeClass("hide").addClass('show');
				header.removeClass('navbar-shrink');
				navbar.removeClass('navbar-shrink');
			}
		});
		});
	</script>