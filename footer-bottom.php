<script>
		$(function() {
		//caches a jQuery object containing the header element
		var header = $(".top_menubar");
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();

			if (scroll >= 100) {
				header.removeClass('show').addClass("hide");
			} else {
				header.removeClass("hide").addClass('show');
			}
		});
		});
	</script>
<!--<footer class="full_footer p_absoulte">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 col-6">
				<ul class="list-unstyled social_icon social_icon_two">
					<li><a href="https://twitter.com/gims_net_in" target="_blank"><i class="social_twitter"></i></a></li>
					<li><a href="https://www.facebook.com/gims.net.in" target="_blank"><i class="social_facebook"></i></a></li>
					<li><a href="https://www.linkedin.com/company/gniot-institute-of-management-studies-pgdm-institute-gims/" target="_blank"><i class="social_linkedin"></i></a></li>
					<li><a href="https://www.instagram.com/gims.net.in/" target="_blank"><i class="social_instagram"></i></a></li>
				</ul>
			</div>
			<div class="col-sm-6 col-6">
				<div class="pr_details_nav h_slider_nav align-items-end">
					<span class="prev" id="moveUp">Prev</span>
					<span class="next moveUp" id="moveDown">Next</span>
				</div>
			</div>
		</div>
	</div>
</footer>-->
<!-- Facebook Pixel Code -->
<script async>
setTimeout(function() {
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '877633433000291');
  fbq('track', 'PageView');
}, 4000);
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=877633433000291&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->