<style>
.NaccLogo {
    position: fixed;
    z-index: 999;
    width: 170px;
    bottom: -200px;
    right: 50px;
    background: white;
    height: 170px;
    object-fit: contain;
    border-radius: 50%;
    padding: 10px;
    box-shadow: 10px 10px 40px -15px #0000003b;
	transition: 0.5s;
	border: 1px solid #c40003;
}
.ClassonLoad {
    bottom: 50px;
	transform: rotate3d(1, 1, 1, 360deg);
}
.ClassonScroll {
    right: 20px;
    bottom: 20px;
    width: 140px;
    height: 140px;
	transform: rotate3d(1, 1, 1, 0deg);
}
</style>
<img src="https://www.gims.net.in/img/naac-logo.png" id="naacLG" class="NaccLogo" alt="Nacc A+">
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const NLogo = document.getElementById("naacLG");
        NLogo.classList.add("ClassonLoad");

        window.addEventListener("scroll", function() {
            if (window.scrollY >= 100) {
                NLogo.classList.add("ClassonScroll");
            } else {
                NLogo.classList.remove("ClassonScroll");
            }
        });
    });
</script>

<style>
	.blink_meg {
    animation: blinkerg 1s linear infinite;
}
@keyframes blinkerg {
  50% {
    opacity: 0;
  }
}

.msc{
    bottom: 0px;
	position: fixed;
	z-index: 999;
	width:100%;
    background-color: #fcc425 !important;
}

.msc marquee {
    padding-top: 3px;
    font-size: 16px;
    font-weight: 600;
    margin: 0px;
    padding-bottom: 3px;
}
</style>

<div class="apply-phone-bnt">
	<style>
		.apply-now-link {
    position: fixed;
    bottom: 33px;
    z-index: 9999;
    background: #d81c2a;
    width: 100%;
    color: white;
    font-size: 18px;
    text-transform: uppercase;
    text-align: center;
}
@media only screen and (min-width: 768px) {
	.apply-now-link {
		display: none;
	}
}
.paddingleftmenu {
	padding-left: 20px;
}
	</style>
	<a href="https://www.gims.net.in/apply-now/" target="_blank" class="apply-now-link">Apply Now</a>
</div>
<div id="myModalR" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title new-font">Admission Enquiry</h4>
				<button type="button" class="close close-new" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="contact-form2">
					<div class="npf_wgts" data-height="425px" data-w="f663ccfe2c744c3f90f7be89fc957e53"></div>
				</div>
			</div>
		</div>
	</div>
</div>


<style>
.bottomnotification {
    position: fixed;
    bottom: 20px;
    width: 331px;
    left: -400px;
    background: #023e96;
    padding: 15px;
    transition: 0.5s;
    z-index: 999999999;
}
.opennot{
	left: 20px;
}
.notitext {
	text-align: center;
    color: white;
    padding: 0;
}
.calllink {
	display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background: white;
    padding: 10px;
    border-radius: 50px;
    color: black;
}
.closetab {
    color: #fff;
    font-size: 14px;
    font-weight: 700;
    float: right;
    margin-top: -15px;
    margin-right: -35px;
    background: red;
    padding: 1px 5px;
}
.bgyellow a {
	color: black !important;
}

.bgyellow {
	background: #ffc300;
}

.shortmenu ul li {
	background: #ffffff85;
}

@media only screen and (min-width: 991px) and (max-width: 1016px) {
	.PopupFixed {
	position: fixed;
    left: 0;
    top: 45%;
    width: 40px;
    height: 80px;
}
.PopupFixed a {
    height: 100%;
    font-size: 25px !important;
    display: flex !important;
    align-items: center;
    justify-content: center;
}
}

.btn-admition {
	height: 50px;
    width: 180px;
    bottom: 30px;
    position: fixed;
    z-index: 999;
	background-color: rgb(217 119 6) !important;
    /* background-color: #023e9600 !important; */
    font-size: 20px;
    left: 35px;
    border: none;
    transition-duration: 0.5s;
    width: 200px;
    padding: 6px 10px;
    outline: none !important;
	border-radius: 25px;
    text-transform: uppercase;
    font-weight: 400;
    color: white !important;

}
.btn-admition:hover{
	background-color: rgb(30 27 75);
}

#gdpiImg {
      transition: opacity 1s ease-in-out;
 }

</style>





<button data-toggle="modal" class="btn-admition" data-target="#myModalR4"><a href="upcoming-gd.php"><span class="color: white;">GD/PI Session</span></a></button>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				
				<button type="button" class="close close-new" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg></button>
			</div>
			<div class="modal-body">
				<a href="https://www.gims.net.in/gd-pi-session.php"><img src="img/kolkata-gdpi-17-feb-v1.webp" alt="GDPI Session GIMS"></a>
			</div>
		</div>
	</div>
</div>

<!-- <script>
  // Array of image sources
  var imageSources = ["img/gdpi-gniot-gims-campus.png?v=1", "img/gdpi-gniot-gims-campus.png?v=1"];

  var currentIndex = 0;
  var imgElement = document.getElementById("gdpiImg");

  function changeImageWithAnimation() {
    // Apply a fade-out effect
    imgElement.style.opacity = 0;

    setTimeout(function () {
      // Change the src attribute of the image
      imgElement.src = imageSources[currentIndex];

      // Apply a fade-in effect after changing the image source
      imgElement.style.opacity = 1;
    }, 1000); // Wait for 1 second (1000 milliseconds) for the fade-out effect

    // Increment the index, and reset to 0 if it exceeds the array length
    currentIndex = (currentIndex + 1) % imageSources.length;
  }

  // Set interval to call changeImageWithAnimation every 4 seconds (4000 milliseconds)
  setInterval(changeImageWithAnimation, 4000);
</script> -->


<div class="bottomnotification" id="notification">
	<span class="closetab">X</span>
	<p class="notitext">Admissions closed for PGDM 2023-25 Batch. For more information please contact - <a class="calllink" href="tel:18002746969"><svg width="25px" height="25px" viewBox="0 0 48 48" id="a" xmlns="http://www.w3.org/2000/svg"><defs><style>.b{fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;}</style></defs><path class="b" d="m23.5947,15.0005c.548-1.0177,1.1956-1.996,1.9428-2.9205.7344-.9086.6287-2.236-.1974-3.0621l-3.832-3.832c-.9854-.9854-2.5956-.8934-3.4904.1749-9.0143,10.7619-9.0143,26.515,0,37.2768.8948,1.0683,2.5022,1.163,3.4876.1777l3.4162-3.4162c1.2472-1.2472,1.3503-2.5721.616-3.4807-.7472-.9245-1.3948-1.9027-1.9428-2.9205-.6703-1.2448-1.9774-2.0111-3.3913-2.0111h-3.2796c-1.3552-4.5526-1.3552-9.4226,0-13.9752h3.2796c1.4138,0,2.7209-.7663,3.3913-2.0111Z"/><g><g><polyline class="b" points="26.3775 24.6979 23.498 27.5607 26.3775 30.4236"/><line class="b" x1="23.498" y1="27.5607" x2="36.7429" y2="27.5607"/></g><g><polyline class="b" points="33.8634 22.528 36.7429 19.6652 33.8634 16.8024"/><line class="b" x1="36.7429" y1="19.6652" x2="23.498" y2="19.6652"/></g></g></svg>Toll Free: 18000-274-6969</a></p>
</div>

<script>
        // Wait for the page to load
        window.addEventListener('load', function () {
            // Get the notification element
            var notification = document.getElementById('notification');

            // Wait for 4 seconds (4000 milliseconds) and then add the 'opennot' class
            setTimeout(function () {
                notification.classList.add('opennot');
            }, 2000);

            // Function to handle the close button click event
            function closeNotification() {
                notification.classList.remove('opennot');
            }

            // Add click event listener to the close button
            var closeButton = document.querySelector('.closetab');
            closeButton.addEventListener('click', closeNotification);
        });
    </script>

	
<style>
.imgpopupornt.ad {
    top: 0;
}

.imgpopupornt {
    position: fixed;
    top: -500%;
    z-index: 99999999;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    height: 100%;
    background: #1c1a1a38;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    padding: 50px;
}
.closebtnimg {
    width: 40px;
    height: 40px;
    background: #023e96;
    color: white;
    font-size: 20px;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
}
@media only screen and (max-width: 768px) {
	.imgpopupornt {
		flex-direction: column-reverse;
		align-items: flex-end;
		justify-content: flex-end;
	}
	.recrulogo img {
    width: 31%;
}

}
@media only screen and (max-width: 600px) {
	.recrulogo img {
    width: 31%;
}

}

@media (min-width: 991px) and (max-width: 1627px){
    .top_menubar>ul>li>a {
        font-size: 10px;
    }
    .top_menubar>ul>li {
        padding: 2px 2px 0;
    }
}


@media screen and (min-width: 991px) and (max-width: 1036px){
.logo {
    width: 185px;
}
}
.right0{
	right: 0;
}
@media (min-width: 1400px) and (max-width: 1580px){
	.navbar-light .main-menu li a.nav-link {
        font-size: 12px;
}

}

	 </style>

<!-- <div class="imgpopupornt">
	<img src="https://www.gims.net.in/img/popup.jpg" alt="Orientation Program">
	<span class="closebtnimg">X</span>
	</div>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
  setTimeout(function() {
    document.querySelector(".imgpopupornt").classList.add("ad");
  }, 2000);
});

document.addEventListener("click", function(event) {
  if (event.target.classList.contains("closebtnimg")) {
    document.querySelector(".imgpopupornt").classList.remove("ad");
  }
});

	</script> -->


<div id="myModal3" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close close-new" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="contact-form2">
					<style>.popt{text-align:center;color:#000;margin-bottom:5px !important;}</style>
					<style>.popt{text-align:center;color:#000;margin-bottom:5px !important;}</style>
					<p class="popt"><strong>For Admission of West Bengal/North East/Odisha</strong></p>

					<p class="popt">Mr.Pradeep Dey</p>	
					<p class="popt">Vice President</p>
					<p class="popt">West Bengal/North East/Odisha</p>
					<p class="popt">Kolkata Office Address (The DN-21 Unit No. 06, 2nd Floor, DN plot no-21, Street Number 11, DN Block, Sector V, Bidhannagar, Kolkata, West Bengal – 700091)</p>
					<p class="popt">069012 21139, 081308 23386</p>
					<p class="popt">pradee.dey@gniot.net.in</p>
				</div>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
<div id="myModal4" class="modal fade" role="dialog" style="z-index:9999999;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="contact-form2">
					<style>.popt{text-align:center;color:#000;margin-bottom:5px !important;}</style>
					<p class="popt"><strong>Query / Suggestions /Grievance</strong></p>
					<p class="popt"><strong>Mail Us at</strong></p>
					<p class="popt"><a href="mailto:feedback@gniot.net.in">Feedback@gniot.net.in</a><br/><br/></p>

				</div>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
<div class="top_menubar">
	<ul class="container">
	<!-- <li class="hovernew"><a href="examination.php">Examination</a></li> -->
	<li class="hovernew nav-item-top"><a href="examination.php" target="_blank">Examination</a>
		    <div class="shortmenu" style="width:250px;">
				<ul>
					<li><a target="_blank" href="examination.php">Examination</a></li>
					<li><a target="_blank" href="convocation-2024.php">Convocation PGDM Batch 2022-24</a></li>
					<li><a target="_blank" href="convocation.php">Convocation PGDM Batch 2020-22 & 2021-23</a></li>
				</ul>
			</div>
	    </li>
		<li class="life_links hovernew"><a href="javascript:void(0);">Campus Life<span class="lnr lnr-chevron-down"></span></a>
			<div class="top_megamenu life_box">
				<div class="container life_menu">
					<a class="close_btn2" href="javascript:void(0);"></a>
					<div class="row">
						<div class="mega_menu col-lg-9">		
							<div class="last_date">
								<div class="row">
									<div class="col-lg-6 apply_at">
										<h4><br/><span class="lnr lnr-briefcase"></span> Life @ GIMS (PGDM Institute)<br/><br/></h4>
										<div class="last_date2 last_date22">
											<div class="carousel slide blue-bd" id="myCarouselp3" data-interval="3000" data-ride="carousel">
												<div class="carousel-inner">
													<div class="item active">
														<div class="event-inner-area">
															<ul class="event-wrapper">
																<li>
																	<div class="event-calender-wrapper">
																		<img src="img/life-at-gims/event.jpg" alt="Life at GIMS" />
																	</div>
																	<div class="event-content-holder">
																		<h3><a href="#" target="_blank">Chanakya Talk Series</a></h3>
																		<p>GIMS (PGDM Institute) is organizing&nbsp;Chanakya Talk Series on 17th Oct 2020</p>
																		<a href="" class="readmore">Read More <span class="lnr lnr-chevron-right"></span></a>
																	</div>
																</li>
																<li>
																	<div class="event-calender-wrapper">
																		<img src="img/life-at-gims/event.jpg" alt="Life at GIMS" />
																	</div>
																	<div class="event-content-holder">
																		<h3><a href="#" target="_blank">Chanakya Talk Series</a></h3>
																		<p>GIMS (PGDM Institute) is organizing&nbsp;Chanakya Talk Series on 17th Oct 2020</p>
																		<a href="" class="readmore">Read More <span class="lnr lnr-chevron-right"></span></a>
																	</div>
																</li>
																<li>
																	<div class="event-calender-wrapper">
																		<img src="img/life-at-gims/event.jpg" alt="Life at GIMS" />
																	</div>
																	<div class="event-content-holder">
																		<h3><a href="#" target="_blank">Chanakya Talk Series</a></h3>
																		<p>GIMS (PGDM Institute) is organizing&nbsp;Chanakya Talk Series on 17th Oct 2020</p>
																		<a href="" class="readmore">Read More <span class="lnr lnr-chevron-right"></span></a>
																	</div>
																</li>
																<li>
																	<div class="event-calender-wrapper">
																		<img src="img/life-at-gims/event.jpg" alt="Life at GIMS" />
																	</div>
																	<div class="event-content-holder">
																		<h3><a href="#" target="_blank">Chanakya Talk Series</a></h3>
																		<p>GIMS (PGDM Institute) is organizing&nbsp;Chanakya Talk Series on 17th Oct 2020</p>
																		<a href="" class="readmore">Read More <span class="lnr lnr-chevron-right"></span></a>
																	</div>
																</li>
															</ul>
															<a class="main-read-button" href="">View More <i class="lnr lnr-chevron-right"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 side_border apply_at">
										<h4><br/><span class="lnr lnr-book"></span> Latest News<br/><br/></h4>
										<div class="last_date2 last_date22">
											<div class="carousel slide blue-bd" id="myCarouselp3" data-interval="3000" data-ride="carousel">
												<div class="carousel-inner">
													<div class="item active">
														<div class="event-inner-area">
															<ul class="event-wrapper">
																<li>
																	<div class="event-calender-wrapper">
																		<div class="event-calender-holder">
																			<h3>17</h3>
																			<p>October</p>
																			<span> 2020</span>
																		</div>
																	</div>
																	<div class="event-content-holder">
																		<h3><a href="#" target="_blank">Chanakya Talk Series <span class="lnr lnr-chevron-right"></span></a></h3>
																		<p>GIMS (PGDM Institute) is organizing&nbsp;Chanakya Talk Series on 17th Oct 2020</p>
																	</div>
																</li>
																<li>
																	<div class="event-calender-wrapper">
																		<div class="event-calender-holder">
																			<h3>17</h3>
																			<p>October</p>
																			<span> 2020</span>
																		</div>
																	</div>
																	<div class="event-content-holder">
																		<h3><a href="#" target="_blank">Chanakya Talk Series <span class="lnr lnr-chevron-right"></span></a></h3>
																		<p>GIMS (PGDM Institute) is organizing&nbsp;Chanakya Talk Series on 17th Oct 2020</p>
																	</div>
																</li>
																<li>
																	<div class="event-calender-wrapper">
																		<div class="event-calender-holder">
																			<h3>17</h3>
																			<p>October</p>
																			<span> 2020</span>
																		</div>
																	</div>
																	<div class="event-content-holder">
																		<h3><a href="#" target="_blank">Chanakya Talk Series <span class="lnr lnr-chevron-right"></span></a></h3>
																		<p>GIMS (PGDM Institute) is organizing&nbsp;Chanakya Talk Series on 17th Oct 2020</p>
																	</div>
																</li>
																<li>
																	<div class="event-calender-wrapper">
																		<div class="event-calender-holder">
																			<h3>17</h3>
																			<p>October</p>
																			<span> 2020</span>
																		</div>
																	</div>
																	<div class="event-content-holder">
																		<h3><a href="#" target="_blank">Chanakya Talk Series <span class="lnr lnr-chevron-right"></span></a></h3>
																		<p>GIMS (PGDM Institute) is organizing&nbsp;Chanakya Talk Series on 17th Oct 2020</p>
																	</div>
																</li>
															</ul>
															<a class="main-read-button" href="">View More <i class="lnr lnr-chevron-right"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> 
						</div>
						<div class="mega_menu_left col-lg-3">
							<span class="mega_menu_brand">
								<a href="" class="site-logo"><img src="img/gims-logo.jpg" alt="GIMS (PGDM Institute)" /></a>
							</span>
							<ul class="mega_menu_nav_campus">
								<li><a href="lecture-hall.php">Lecture Halls</a></li>
								<li><a href="library.php">Library</a></li>
								<li><a href="computer-centre.php">Computer Lab</a></li>
								<li><a href="hostel-facility.php">Hostel</a></li>
								<li><a href="music-room.php">Music Room</a></li>
								<li><a href="auditorium.php">Auditorium</a></li>
								<li><a href="conference-hall.php">Conference Hall</a></li>
								<li><a href="recreational-area.php">Recreational Area</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li class="hovernew"><a href="associations.php">Associations</a></li>
		<li class=""><a href="https://gniotims.edugrievance.com/" target="_blank" class="blink_meg blinkhover" style="font-weight: 600;color: #313232;background-color: #ffc300;padding-left: 5px;padding-right: 5px;">Grievance Cell</a></li>
		<li class="hovernew"><a href="https://aicte-india.org/feedback/" target="_blank" >AICTE Feedback</a></li>
		<li class="nav-item"><a href="aicte.php" target="_blank">AICTE Pledge</a></li>

		<li class="hovernew"><a href="https://www.gims.net.in/apply-now/" target="_blank" >Register Here</a></li>
		<li class="hovernew nav-item-top"><a href="#" target="_blank">E-Brochure</a>
		    <div class="shortmenu" style="width:250px;">
				<ul>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/gims-pgdm-brochure-batch-2025-2027-computer.pdf">Prospectus</a></li>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/gims-pgdm-2024.pdf">Leaflet</a></li>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/gims-pgdm-coffee-table-book.pdf">GIMS PGDM Coffee Table Book</a></li>
				</ul>
			</div>
	    </li>
		<li class="hovernew nav-item-top"><a href="javascript:void(0)" target="_blank">Alumni</a>
		    <div class="shortmenu" style="width:250px;">
				<ul>
					<li><a target="_blank" href="alumni-newsletter.php">Alumni Newsletter</a></li>
					<li><a target="_blank" href="glimpses-of-alumni-events.php">Glimpses of Alumni Events</a></li>
					<li><a target="_blank" href="https://alumni.gims.net.in/">Alumni Portal</a></li>
				</ul>
			</div>
	    </li>
		<!-- <li class="hovernew"><a href="https://www.gims.net.in/pdf/national-conference-brochure.pdf" target="_blank">Research</a></li> -->
		<!-- <li class="hovernew nav-item-top"><a href="https://www.gims.net.in/pdf/national-conference-brochure.pdf" target="_blank" style="font-weight: 600;color: #313232;background-color: #ffc300;padding-left: 5px;padding-right: 5px;" class="blink_meg blinkhover">Research</a> -->
		<li class="hovernew nav-item-top"><a href="https://www.gims.net.in/pdf/national-conference-brochure.pdf" target="_blank" >Research</a>

			<div class="shortmenu">
				<ul>
					<li><a target="_blank" href="https://www.gims.net.in/research.php">Journal of Global Management Perspectives</a></li>
    				<li class="expandlin">
                                    <a href="../first-international-conference.php" class="halfmenu" target="_blank">International Conference</a>
                                    <span class="halfmenu hlfmenuopen">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5v14"></path>
                                        </svg>
                                    </span>
                                    <div class="expandmenu">
                                        <div class="listul">
                                            <a href="pdf/research/icisem-tri-fold-3.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> ICISSEM-2024</a>
                                            
                                        </div>
                                    </div>
									<div class="expandmenu">
                                        <div class="listul">
                                            <a href="pdf/research/icisem-tri-fold-3.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Joint International Conference -2024</a>
                                            
                                        </div>
                                    </div>
                                    <div class="expandmenu">
                                        <div class="listul">
                                            <a href="pdf/research/icbse-2025.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> ICBSE-2025</a>
                                            
                                        </div>
                                    </div>
									<div class="expandmenu">
                                        <div class="listul">
                                            <a href="pdf/research/insight360-conflux-flyer-2-with-co-organizer1.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> INSIGHT360</a>
                                            
                                        </div>
                                    </div>
                                </li>
    				<li><a target="_blank" href="https://www.gims.net.in/pdf/national-conference-brochure.pdf">National Conference </a></li>
    				<li><a target="_blank" href="https://www.gims.net.in/research-advisory-council.php">Research Advisory Council</a></li>
    				<li><a target="_blank" href="pdf/research/icisem-tri-fold-3.pdf">ICISSEM-2024</a></li>
					<!-- <li><a target="_blank" href="pdf/hr-newsletter-2-0.pdf">In-House Publication</a></li> -->
					<li class="expandlin">
                                    <a href="../first-international-conference.php" class="halfmenu" target="_blank">In-House Publication</a>
                                    <span class="halfmenu hlfmenuopen">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5v14"></path>
                                        </svg>
                                    </span>
                                    <div class="expandmenu">
                                        <div class="listul">
                                            <a href="https://www.gims.net.in/hr-dept-newsletter.php"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> HR Dept.Newsletter</a>
                                            
                                        </div>
                                    </div>
                                    <div class="expandmenu">
                                        <div class="listul">
                                            <a href="https://www.gims.net.in/e-cell-dept-newsletter.php"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> E-Cell Dept.Newsletter</a>
                                            
                                        </div>
                                    </div>
                                    <div class="expandmenu">
                                        <div class="listul">
                                            <a href="pdf/research/icbse-2025.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> SCM Dept. Newsletter</a>
                                            
                                        </div>
                                    </div>
                                    <div class="expandmenu">
                                        <div class="listul">
                                            <a href="pdf/research/icbse-2025.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Marketing Dept.Newsletter</a>
                                            
                                        </div>
                                    </div>
                                    <div class="expandmenu">
                                        <div class="listul">
                                            <a href="./finance-dept-newsletter.php"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Finance Dept.Newsletter.</a>                                            
                                        </div>
                                    </div>
                                </li>
				</ul>
			</div>
		</li>
		<li class="hovernew"><a href="https://gims.net.in/blog/" target="_blank">Blogs</a></li>
		<li class="hovernew"><a href="https://www.coursera.org/login">Coursera Login</a></li>
		<li class="hovernew"><a href="media.php">Media</a></li>
		<li class="hovernew nav-item-top"><a href="https://www.gims.net.in/iqac.php">IQAC</a>
			<div class="shortmenu">
				<ul>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/iqac/about-iqac.pdf">About IQAC</a></li>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/iqac/objective-of-iqac.pdf">IQAC Objective</a></li>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/iqac/vision-and-mission.pdf">Vision & Mission</a></li>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/iqac/role-of-the-iqac-coordinator.pdf">Role of IQAC Coordinator</a></li>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/iqac/iqac-flow-chart1.pdf">IQAC Flow Chart</a></li>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/iqac/revised-composition-29th-april-23.pdf">IQAC-Revised Composition(April-2023)</a></li>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/iqac/revised-composition-6th-dec-23.pdf">IQAC-Revised Composition(Dec-2023)</a></li>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/iqac/revised-composition-14th-sept-2023.pdf">IQAC-Revised Composition(September-2023)</a>
					<!-- <li><a target="_blank" href="#">IQAC-Revised Composition(May-2023)</a></li>
					<li><a target="_blank" href="#">Composition IQAC(January-2023)</a></li> -->
					<li><a target="_blank" href="https://www.gims.net.in/pdf/iqac/mom-2nd-june.pdf">MOM 2nd June-2023</a></li>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/iqac/mom-1st-may.pdf">MOM IST MAY-2023</a></li>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/iqac/mom-28th-january.pdf">MOM 28th Jan-2023</a></li>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/iqac/mom-15th-dec.pdf">MOM 15th Dec-2022</a></li>
				</ul>
			</div>
		</li>
		<li class="hovernew"><a href="https://www.gims.net.in/virtual-tour/" target="_blank">Virtual Tour</a></li>
		<li class="hovernew nav-item-top bgyellow"><a href="international-immersion-programmes-2024.php" target="_blank">International Immersion Program</a>
			<div class="shortmenu right0">
				<ul>
					<li><a href="https://www.gims.net.in/pdf/de-montfort-university-dubai-mous.pdf" target="_blank">MOU signed</a></li>
					<li><a href="https://www.gims.net.in/international-immersion-programmes-2023.php" target="_blank">IIP Batch (2021-2023)</a></li>
					<li><a href="https://www.gims.net.in/gims-international-immersion-programmes.php" target="_blank">IIP Batch (2022-2024)</a></li>
				</ul>
			</div>
		</li>
		<li class="hovernew"><a href="https://axisbpayments.razorpay.com/PGDM-GIMS" target="_blank">Pay Fee Online</a></li>
		<li><a class="right_bar_search" href="javascript:void(0);"><i class="fa fa-search"></i></a>
		<li class="social"><a href="" target="_blank"><i class="icon-mail"></i></a></li>
		<li class="social"><a href="https://www.linkedin.com/company/gniot-institute-of-management-studies-pgdm-institute-gims/" target="_blank"><i class="icon-linkedin"></i></a></li>
		<li class="social"><a href="https://www.instagram.com/gims.net.in/" target="_blank"><i class="icon-instagram"></i></a></li>
		<li class="social"><a href="https://twitter.com/gims_net_in" target="_blank"><i class="icon-twitter"></i></a></li>
		<li class="social"><a href="https://www.facebook.com/GIOMS.IN/" target="_blank"><i class="icon-facebook"></i></a></li>
		</li>
	</ul>
</div>

<!--<div class="msc">
	<div>
		<marquee style="margin-left: 130px;" width="80%" onmouseover="this.stop();" onmouseout="this.start();"  direction="right" scrollamount="5" loop="infinite" ><a href="https://forms.gle/ENRGsCYtA3BgAEYa7" target="_blank" >Admission Open for Fee Waiver Quota for Session 2022-24</a><span style="margin-left: 350px">Admission Closed for PGDM (Post Graduation Diploma in Management) Session 2022-24</span></marquee>
	</div>
	
</div>-->


<div id="myModalR1" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title new-font">Admission Open for The Session 2023-25</h4>
				<button type="button" class="close close-new" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="contact-form2">
					<div class="npf_wgts" data-height="425px" data-w="f663ccfe2c744c3f90f7be89fc957e53"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
	/* @media (max-width: 1640px){
		#mainNav.fixed-top {
        top: 20px !important;
        background-color: #fff;
       }
		
	}
	@media (max-width: 1703px){
		#mainNav.fixed-top {
        top: 20px !important;
        background-color: #fff;
       }
	}
	@media (max-width: 1282px){
		#mainNav.fixed-top {
        top: 20px !important;
        background-color: #fff;
       }
		
	}
	@media (max-width: 1627px){
		#mainNav.fixed-top {
        top: 0 !important;
        background-color: #fff;
       }
		
	}
	@media (max-width: 1440px){
		#mainNav.fixed-top {
        top: 0 !important;
        background-color: #fff;
       }
		
	}
	@media (min-width: 1121px) {
    .navbar-expand-lg .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important
;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
        width: -webkit-fill-available !important;
    }
	#mainNav.fixed-top {
        top: 20px !important;
        background-color: #fff;
       }
} */

#mainNav {
     
	 padding-top: 48px !important;
	  
 }

 @media (min-width: 992px) {

.container-fluid {

padding-right: 10px !important;

}

}
@media (min-width: 1542px) {

#mainNav {
padding-top: 48px !important;
}

}

</style>


    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top inner-nav" id="mainNav">
	<div class="container-fluid">
	   <div class="logo">
			<a href=""><img src="img/gims-trans.png" alt="GIMS (PGDM Institute)"/></a>
		</div>
		<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse main-menu" id="navbarResponsive">		
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="">About GIMS <span class="span_icon"></span></a>
					<div class="mega_menu pt-5 hidden-xs">
						<div class="row no-gutters">
							<!-- <div class="col-md-8 pr-2">
								<div class="row no-gutters menu_col4 ">
									<div class="col-md-4">
										<a href=""> <img src="img/menu/new/gims-building.jpg" alt="About GIMS (PGDM Institute)" class="img-fluid">
											<div class="menu_boxx"><i class="icon-building"></i> About GIMS</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="history.php"> <img src="img/menu/new/history.jpg" alt="History of GIMS (PGDM Institute)" class="img-fluid">
											<div class="menu_boxx"><i class="icon-building"></i> History</div>
										</a>
									</div>	
									<div class="col-md-4">
										<a href=""> <img src="img/menu/new/vision-mission.jpg" alt="Mission and Vision" class="img-fluid">
											<div class="menu_boxx"><i class="icon-building"></i> Vision & Mission</div>
										</a>
									</div>						
								</div>
							</div> -->
							<div class="col-md-6 pr-3">
								<div  class="right_mega_menu paddingleftmenu">
									<ul>
										<li><a href="about-gims.php"><i class="icon-key"></i> About GIMS</a></li>
										<li><a href="mission-vision.php"><i class="icon-key"></i> Vision & Mission</a></li>
										<li><a href="blessings-of-founder.php"><i class="icon-key"></i> Founder Chairman's Message</a></li>
										<li><a href="chairmans-message.php"><i class="icon-user2"></i> Chairman's Message</a></li>
										
									</ul>
								</div>
							</div>
							<div class="col-md-6 pr-3">
								<div  class="right_mega_menu">
									<ul>
										<li><a href="ceo-message.php"><i class="icon-user2"></i> CEO Message</a></li>
										<li><a href="director.php"><i class="icon-user2"></i> Director's Message</a></li>
										<li><a href="head-pgp.php"><i class="icon-user2"></i> Executive Directorr</a></li>
										<li><a href="dean-academic.php"><i class="icon-user2"></i> Dean Academics</a></li>
										<li><a href="dean-academics.php"><i class="icon-user2"></i> Dean-Outreach & Student Welfare</a></li>
										<li><a href="#"><i class="icon-line-speech-bubble"></i> Accreditation</a></li>
										<li><a href="#"><i class="icon-line-speech-bubble"></i> Audited Statements</a></li>
										<!-- <li><a href="approval-letter.php"><i class="icon-line2-envelope-letter"></i> Approval Letter</a></li> -->
										<!-- <li><a href="dean-global-outreach-and-research.php"><i class="icon-user2"></i> Dean - Global Outreach and Research</a></li> -->
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="">Program <span class="span_icon"></span></a>
					<div class="mega_menu pt-5 hidden-xs">
						<div class="row no-gutters">
							<div class="col-md-12 pr-2">
								<div class="row no-gutters menu_col4 ">
									<div class="col-md-12">
										<h1 class="mainh1"><i class="icon-line2-graduation"></i> Post Graduate Diploma in Management (PGDM)</h1>
										<p class="subt">Admission Open for One of The Top Ranked Management College/Campus in Greater Noida & Delhi/NCR.</p>
									</div>
									<div class="col-md-6">
										<div class="bullet_menu">
											<ul>
												<li><a href="">About Program</a></li>
												<li><a href="">Eligibility Criteria</a></li>
												<li><a href="">Admission Procedure</a></li>
												<li><a href="">Fee Structure</a></li>
												<li><a href="">Program Highlights</a></li>
												<li><a href="">PGDM Specializations</a></li>
												<li><a href="">Certifications</a></li>
												<li><a href="">Admission Enquiry</a></li>
											</ul>
										</div>
									</div>
									<div class="col-md-6">
										<h4 class="cn-text"><i class="icon-location"></i> Address: Plot No. 7, Chanakya Block, Knowledge Park-II, Greater Noida, (U.P.), Bharat</h4>
										<h4 class="cn-text"><i class="icon-microphone"></i> Toll Free No.: 18002746969</h4>
										<h4 class="cn-text"><i class="icon-microphone2"></i> Outreach Help Line No.: 8860606606/63</h4>
										<h4 class="cn-text"><i class="icon-envelope"></i> Email: admission@gniot.net.in | gniot@gniot.net.in</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="">Campus <span class="span_icon"></span></a>
					<div class="mega_menu pt-5 hidden-xs">
						<div class="row no-gutters">
							<div class="col-md-12 pr-3">
								<div class="row no-gutters menu_col4 ">
									<div class="col-md-12">
										
									</div>
									<div class="col-md-3">
										<a href=""><img src="img/menu/new/lecture-hall.jpg" alt="Lecture Halls" class="img-fluid"/>
											<div class="menu_boxx"><i class="icon-microphone2"></i> Lecture Halls</div>
										</a>
									</div>
									<div class="col-md-3">
										<a href=""><img src="img/menu/new/library.jpg" alt="Library" class="img-fluid"/>
											<div class="menu_boxx"><i class="icon-book2"></i> Library</div>
										</a>
									</div>	
									<div class="col-md-3">
										<a href=""><img src="img/menu/new/computer-lab.jpg" alt="Computer Lab" class="img-fluid"/>
											<div class="menu_boxx"><i class="icon-desktop"></i> Computer Lab</div>
										</a>
									</div>	
									<div class="col-md-3">
										<a href=""><img src="img/menu/new/hostel.jpg" alt="Computer Lab" class="img-fluid"/>
											<div class="menu_boxx"><i class="icon-building"></i> Hostel</div>
										</a>
									</div>
									<div class="col-md-12">
										
									</div>
									<div class="col-md-3">
										<a href=""><img src="img/menu/cafeteria.jpg" alt="Cafeteria" class="img-fluid"/>
											<div class="menu_boxx"><i class="icon-coffee2"></i> Cafeteria</div>
										</a>
									</div>
									<div class="col-md-3">
										<a href=""><img src="img/menu/new/sports.jpg" alt="Sports" class="img-fluid"/>
											<div class="menu_boxx"><i class="icon-t-shirt"></i> Sports</div>
										</a>
									</div>	
									<div class="col-md-3">
										<a href=""><img src="img/menu/transport.jpg" alt="Transport" class="img-fluid"/>
											<div class="menu_boxx"><i class="icon-dashboard"></i> Transport</div>
										</a>
									</div>	
									<div class="col-md-3">
										<a href=""><img src="img/menu/ambulance.jpg" alt="Medical" class="img-fluid"/>
											<div class="menu_boxx"><i class="icon-medkit"></i> Medical</div>
										</a>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="">Admission/T & P <span class="span_icon"></span></a>
					<div class="mega_menu pt-5 hidden-xs">
						<div class="row no-gutters">
							<div class="col-md-4 pr-3 pl-3 admission">
								<h4>Admission</h4>
								<div  class="right_mega_menu">
									<ul>
										<li><a href=""><i class="icon-line2-graduation"></i> Admission Process</a></li>
										<li><a href="https://www.gims.net.in/admissions-at-gims.php"><i class="icon-line2-feed"></i> Eligibility Criteria</a></li>
										<li><a href=""><i class="icon-building"></i> Our Courses</a></li>
										<li><a href=""><i class="icon-fast-forward"></i> Fee Structure</a></li>
										<li><a href=""><i class="icon-opentable"></i> GDPI (MBA/PGDM)</a></li>
										<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="icon-line2-graduation"></i> Outreach</a></li>
										<li><a href="pdf/admission-form-gims.pdf" target="_blank"><i class="icon-icon-download2"></i> Download Application Form</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 pr-3 admission">
								<h4>Training and Placement</h4>
								<div class="right_mega_menu">
									<ul>
										<li><a href=""><i class="icon-line2-graduation"></i> T&P Department</a></li>
										<li><a href=""><i class="icon-line2-feed"></i> Our Recruiters</a></li>
										<li><a href=""><i class="icon-building"></i> T&P Program</a></li>
										<!-- <li><a href="pdf/placement-brochure.pdf" target="_blank" class="nav-link">Placement Brochure</a></li> -->

										<li class="expandlin">
													<a href="#" class="halfmenu">Placement Brochure</a><span class="halfmenu hlfmenuopen"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus"><path d="M5 12h14"/><path d="M12 5v14"/></svg></span>
													
													<div class="expandmenu">
														<div class="listul">
														 
															<a href="https://www.gims.net.in/pdf/placement-brochure-2023-25.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Batch 2023-25</a>
															
															<a href="../pdf/placement-brochure-2022-24.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Batch 2022-24</a>

															<a href="../pdf/placement-brochure.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Batch 2021-23</a>

															<a href="../pdf/placement-brochure.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Batch 2020-22</a>

														</div>
													</div>
												</li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 pr-3 admission">
								<h4>Life @ GIMS</h4>
								<div class="right_mega_menu">
									<ul>
										<li><a href=""><i class="icon-line2-graduation"></i> Gallery</a></li>
										<li><a href=""><i class="icon-line2-feed"></i> Campus</a></li>
										<li><a href=""><i class="icon-building"></i> Hostel</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-12">
								<p></p>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item"><a class="blink_me nav-link apply_btn" href="https://www.gims.net.in/apply-now/"> Apply Now</a></li>
			</ul>
		</div>
		<div class="mobile_nav">
			<a href="javascript:void(0);" class="mobile_nav_icon"></a>
			<div class="collapse navbar-collapse main-menu" id="navbarResponsive2">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="https://www.gims.net.in/apply-now/" style="font-weight: 600; color: #fff;    background: #023e96;padding-left: 5px;padding-right: 5px;" data-toggle="modal" data-target="#myModal4">Apply Now</a></li>
					<li class="nav-item"><a href="#" style="font-weight: 600;color: #323232; background-color: #ffc300;padding-left: 5px;padding-right: 5px;" data-toggle="modal" data-target="#myModal4">Grievance Cell</a></li>
					<li class="hovernew"><a href="https://aicte-india.org/feedback/" target="_blank" >AICTE Feedback</a></li>
		<li class="nav-item"><a href="aicte.php" target="_blank">AICTE Pledge</a></li>

					<li class="hovernew"><a href="https://www.gims.net.in/apply-now/" target="_blank" >Register Here</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="">About Us</a>
						<ul class="dropdown-menu">
							<li class="nav-item"><a href="about-gims.php" class="nav-link">About GIMS</a></li>
							<li class="nav-item"><a href="history.php" class="nav-link">History</a></li>
							<li class="nav-item"><a href="mission-vision.php" class="nav-link">Vision & Mission</a></li>
							<li class="nav-item"><a href="blessings-of-founder.php" class="nav-link">Founder Chairman's Message</a></li>
							<li class="nav-item"><a href="chairmans-message.php" class="nav-link">Chairman Message</a></li>
							<li class="nav-item"><a href="ceo-message.php" class="nav-link">CEO Message</a></li>
							<li class="nav-item"><a href="director.php" class="nav-link">Director Message</a></li>
							<li class="nav-item"><a href="approval-letter.php" class="nav-link">Approval Letter</a></li>
							<!-- <li class="nav-item"><a href="head-pgp.php" class="nav-link">Deputy Director</a></li> -->
							<li class="nav-item"><a href="head-pgp.php" class="nav-link">Executive Director</a></li>
							<li class="nav-item"><a href="dean-academic.php" class="nav-link">Dean Academics</a></li>
							<li class="nav-item"><a href="dean-academics.php" class="nav-link">Dean-Outreach & Student Welfare</a></li>
							<li><a href="#"><i class="icon-line-speech-bubble"></i> Accreditation</a></li>
							<li><a href="#"><i class="icon-line-speech-bubble"></i> Audited Statements</a></li>
							<!-- <li><a href="dean-global-outreach-and-research.php"><i class="icon-user2"></i> Dean - Global Outreach and Research</a></li> -->
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="">PGDM Program at GIMS</a>
						<ul class="dropdown-menu">
							<li><a href="">About Program</a></li>
							<li><a href="">Eligibility Criteria</a></li>
							<li><a href="">Admission Procedure</a></li>
							<li><a href="">Fee Structure</a></li>
							<li><a href="">Program Highlights</a></li>
							<li><a href="">PGDM Specializations</a></li>
							<li><a href="">Certifications</a></li>
							<li><a href="">Admission Enquiry</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="">Campus</a>
						<ul class="dropdown-menu">
							<li><a href=""><i class="icon-microphone2"></i> Lecture Halls</a></li>
							<li><a href=""><i class="icon-book2"></i> Library</a></li>
							<li><a href=""><i class="icon-desktop"></i> Computer Lab</a></li>
							<li><a href=""><i class="icon-building"></i> Hostel</a></li>
							<li><a href=""><i class="icon-coffee2"></i> Cafeteria</a></li>
							<li><a href=""><i class="icon-t-shirt"></i> Sports</a></li>
							<li><a href=""><i class="icon-dashboard"></i> Transport</a></li>
							<li><a href=""><i class="icon-medkit"></i> Medical</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="">Admission</a>
						<ul class="dropdown-menu">
							<li><a href=""><i class="icon-line2-graduation"></i> Admission Process</a></li>
							<li><a href="https://www.gims.net.in/admissions-at-gims.php"><i class="icon-line2-feed"></i> Eligibility Criteria</a></li>
							<li><a href=""><i class="icon-building"></i> Our Courses</a></li>
							<li><a href=""><i class="icon-fast-forward"></i> Fee Structure</a></li>
							<li><a href=""><i class="icon-opentable"></i> GDPI (MBA/PGDM)</a></li>
							<li><a href=""><i class="icon-opentable"></i> Course Module</a></li>
							
							<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="icon-line2-graduation"></i> Outreach</a></li>
							<li><a href="pdf/admission-form-gims.pdf" target="_blank"><i class="icon-icon-download2"></i> Download Application Form</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="">Placement</a>
						<ul class="dropdown-menu">
							<li><a href=""><i class="icon-line2-graduation"></i> T&P Department</a></li>
							<li><a href=""><i class="icon-line2-feed"></i> Our Recruiters</a></li>
							<li><a href=""><i class="icon-building"></i> T&P Program</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="">Life @ GIMS</a>
						<ul class="dropdown-menu">
							<li><a href=""><i class="icon-line2-graduation"></i> Gallery</a></li>
							<li><a href=""><i class="icon-line2-feed"></i> Campus</a></li>
							<li><a href=""><i class="icon-building"></i> Hostel</a></li>
						</ul>
					</li>
					
					<li class="nav-item dropdown submenu">
						<a class="nav-link dropdown-toggle" href="iqac.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">IQAC</a>
						<ul class="dropdown-menu">
							<li class="nav-item"><a class="nav-link" target="_blank" href="https://www.gims.net.in/pdf/iqac/about-iqac.pdf">About IQAC</a></li>
							<li class="nav-item"><a class="nav-link" target="_blank" href="https://www.gims.net.in/pdf/iqac/objective-of-iqac.pdf">IQAC Objective</a></li>
							<li class="nav-item"><a class="nav-link" target="_blank" href="https://www.gims.net.in/pdf/iqac/vision-and-mission.pdf">Vision & Mission</a></li>
							<li class="nav-item"><a class="nav-link" target="_blank" href="https://www.gims.net.in/pdf/iqac/role-of-the-iqac-coordinator.pdf">Role of IQAC Coordinator</a></li>
							<li class="nav-item"><a class="nav-link" target="_blank" href="https://www.gims.net.in/pdf/iqac/iqac-flow-chart1.pdf">IQAC Flow Chart</a></li>
							<li class="nav-item"><a class="nav-link" target="_blank" href="https://www.gims.net.in/pdf/iqac/revised-composition-29th-april-23.pdf">IQAC-Revised Composition(April-2023)</a></li>
							<li class="nav-item"><a class="nav-link" target="_blank" href="https://www.gims.net.in/pdf/iqac/revised-composition-6th-dec-23.pdf">IQAC-Revised Composition(Dec-2023)</a></li>
							<li><a target="_blank" href="https://www.gims.net.in/pdf/iqac/revised-composition-14th-sept-2023.pdf">IQAC-Revised Composition(September-2023)</a>
							<!-- <li class="nav-item"><a class="nav-link" href="#">IQAC-Revised Composition(May-2023)</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Composition IQAC(January-2023)</a></li> -->
							<li class="nav-item"><a class="nav-link" target="_blank" href="https://www.gims.net.in/pdf/iqac/mom-2nd-june.pdf">MOM 2nd June-2023</a></li>
							<li class="nav-item"><a class="nav-link" target="_blank" href="https://www.gims.net.in/pdf/iqac/mom-1st-may.pdf">MOM IST MAY-2023</a></li>
							<li class="nav-item"><a class="nav-link" target="_blank" href="https://www.gims.net.in/pdf/iqac/mom-28th-january.pdf">MOM 28th Jan-2023</a></li>
							<li class="nav-item"><a class="nav-link" target="_blank" href="https://www.gims.net.in/pdf/iqac/mom-15th-dec.pdf">MOM 15th Dec-2022</a></li>
						</ul>
					</li>
					<li class="nav-item"><a href="associations.php">Associations</a></li>
					<li class="nav-item"><a href="https://www.gims.net.in/pdf/gims-pgdm-brochure-batch-2024-2026-mobile.pdf" target="_blank" class="nav-link">E-Brochure</a></li>
					<li class="nav-item"><a href="https://www.gims.net.in/pdf/national-conference-brochure.pdf" target="_blank" class="nav-link">Research</a></li>
					<li class="nav-item"><a target="_blank" class="nav-link" href="https://www.gims.net.in/research.php">Journal of Global Management Perspectives</a></li>
    				<li class="nav-item"><a target="_blank" class="nav-link" href="../first-international-conference.php">International Conference </a></li>
    				<li class="nav-item"><a target="_blank" class="nav-link" href="https://www.gims.net.in/pdf/national-conference-brochure.pdf">National Conference </a></li>
					<li class="hovernew"><a href="https://gims.net.in/blog/" target="_blank">Blogs</a></li>
		            <li class="hovernew"><a href="https://www.coursera.org/login">Coursera Login</a></li>

					<li class="nav-item"><a href="media.php" class="nav-link">Media</a></li>
					<li class="nav-item"><a href="https://apply.gniotgroup.edu.in/" target="_blank" class="nav-link">Apply Online</a></li>
					<li class="nav-item"><a href="https://www.gims.net.in/virtual-tour/" target="_blank" class="nav-link">Virtual Tour</a></li>
					<li class="hovernew"><a href="https://www.gims.net.in/pdf/de-montfort-university-dubai-mous.pdf" target="_blank">MOU signed</a></li>
					<li class="hovernew"><a href="https://www.gims.net.in/international-immersion-programmes-2023.php" target="_blank">IIP Batch (2021-2023)</a></li>
					<li><a href="https://www.gims.net.in/gims-international-immersion-programmes.php" target="_blank">IIP Batch (2022-2024)</a></li>
					<li class="nav-item"><a href="https://axisbpayments.razorpay.com/PGDM-GIMS" target="_blank" class="nav-link">Pay Fee Online</a></li>
					<li class="nav-item"><a href="https://gniotims.edugrievance.com/" target="_blank" class="nav-link">Grievance Cell</a></li>
					<li class="nav-item"><a href="https://aicte-india.org/feedback/" target="_blank" >AICTE Feedback</a></li>
		            <li class="nav-item"><a href="aicte.php" target="_blank">AICTE Pledge</a></li>

					<li class="hovernew"><a href="https://www.gims.net.in/apply-now/" target="_blank" >Register Here</a></li>
					<li class="nav-item"><a href="pdf/placement-brochure.pdf" target="_blank" class="nav-link">Placement Brochure</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>