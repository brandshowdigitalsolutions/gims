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
<img src="img/naac-logo.png" id="naacLG" class="NaccLogo" alt="Nacc A+">
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

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KXM3DQ6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<style>
.mega_menu .bullet_menu2 li {
    padding-top: 13px;
    color: #b2b2b2;
    font-size: 14px;
    font-weight: normal;
    position: relative;
    padding-left: 20px;
    text-transform: capitalize;
}
.mega_menu .bullet_menu2 li a {
    color: #000;
}
.expandlin {
    display: flex;
    flex-wrap: wrap;
    gap: 5px;
}
.expandmenu {
    display: none;
}
.hlfmenuopen{
	cursor:pointer;
}
.active .expandmenu {
    display: block;
    width: 100%;
    padding-left: 15px;
}
.listul {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

</style>

<style>
	.top_menubar>ul>li {
		display: inline-block;
		vertical-align: top;
		font: 400 12px 'Open Sans';
		padding: 2px 6px 0;
	}

	.dropdown-menu li a:focus,
	.dropdown-menu>li>a:hover {
		color: #262626;
		text-decoration: none;
		background-color: #ffffff;
	}
	.blink_meg {
		animation: blinkerg 1s linear infinite;
	}
	@keyframes blinkerg {
		50% {
			opacity: 0;
		}
	}
	.msc {
		bottom: 0px;
		position: fixed;
		z-index: 999;
		width: 100%;
		background-color: #fcc425 !important;
	}

	.msc marquee {
		padding-top: 3px;
		font-size: 16px;
		font-weight: 600;
		margin: 0px;
		padding-bottom: 3px;
	}
	.paddingleftmenu {
		padding-left: 20px;
	}
	.bgyellow a {
    color: black !important;
}
.bgyellow {
    background: #ffc300;
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
		.apply-now-link {
			display: none;
		}
		@media only screen and (min-width: 768px) {
			.apply-now-link {
				display: none;
			}
		}
		.new-sec-menu p {
			margin: 0 !important;
			padding: 0 0 0 15px !important;
			text-align: left;
			font-size: 16px;
		}
	</style>
	<a href="https://apply.gniotgroup.edu.in/" target="_blank" class="apply-now-link">Apply Now</a>
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
	.opennot {
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
	.navbar .offcanfas_menu > .nav-item.submenu .dropdown-menu > .nav-item > .nav-link {
    color: rgb(255 255 255 / 86%);
}
@media (min-width: 991px) and (max-width: 1484px){
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
.shortmenu ul li {
    background: #ffffff85;
}

@media (min-width: 1400px) and (max-width: 1550px){
	.navbar-light .main-menu li a.nav-link {
		font-size: 12px;
}

}

.btn-admition {
    bottom: 25px;
    position: fixed;
    z-index: 999;
    background-color: #023e9600 !important;
    font-size: 20px;
    left: 35px;
    border: none;
    transition-duration: 0.5s;
    width: 200px;
    padding: 6px 10px;
    outline: none !important;
    border-radius: 5px;
    text-transform: uppercase;
    font-weight: 400;
    color: #023e96 !important;
}

#gdpiImg {
      transition: opacity 1s ease-in-out;
    }
</style>
<!-- 18-03-2024 below button hide -->
<!-- <button data-toggle="modal" class="btn-admition" data-target="#myModalR4"><img src="img/gdpi-kolkata-v2.webp?v=1" id="gdpiImg" alt="GDPI Session"></button> -->
<div id="myModalR4" class="modal fade" role="dialog">
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

<script>
  // Array of image sources
  var imageSources = ["img/gdpi-kolkata-v2.webp?v=1", "img/gdpi-kolkata-v2.webp?v=1"];

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
</script>




<!-- <div class="bottomnotification" id="notification">
	<span class="closetab">X</span>
	<p class="notitext">Admissions closed for PGDM 2023-25 Batch. For more information please contact - <a class="calllink" href="tel:18002746969"><svg width="25px" height="25px" viewBox="0 0 48 48" id="a" xmlns="http://www.w3.org/2000/svg">
				<defs>
					<style>
						.b {
							fill: none;
							stroke: #000;
							stroke-linecap: round;
							stroke-linejoin: round;
						}
					</style>
				</defs>
				<path class="b" d="m23.5947,15.0005c.548-1.0177,1.1956-1.996,1.9428-2.9205.7344-.9086.6287-2.236-.1974-3.0621l-3.832-3.832c-.9854-.9854-2.5956-.8934-3.4904.1749-9.0143,10.7619-9.0143,26.515,0,37.2768.8948,1.0683,2.5022,1.163,3.4876.1777l3.4162-3.4162c1.2472-1.2472,1.3503-2.5721.616-3.4807-.7472-.9245-1.3948-1.9027-1.9428-2.9205-.6703-1.2448-1.9774-2.0111-3.3913-2.0111h-3.2796c-1.3552-4.5526-1.3552-9.4226,0-13.9752h3.2796c1.4138,0,2.7209-.7663,3.3913-2.0111Z" />
				<g>
					<g>
						<polyline class="b" points="26.3775 24.6979 23.498 27.5607 26.3775 30.4236" />
						<line class="b" x1="23.498" y1="27.5607" x2="36.7429" y2="27.5607" />
					</g>
					<g>
						<polyline class="b" points="33.8634 22.528 36.7429 19.6652 33.8634 16.8024" />
						<line class="b" x1="36.7429" y1="19.6652" x2="23.498" y2="19.6652" />
					</g>
				</g>
			</svg>Toll Free: 18000-274-6969</a></p>
</div> -->
<script>
	// Wait for the page to load
	window.addEventListener('load', function() {
		// Get the notification element
		var notification = document.getElementById('notification');
		// Wait for 4 seconds (4000 milliseconds) and then add the 'opennot' class
		setTimeout(function() {
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
	.right0{
	right: 0;
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
<!--<div class="msc">
	<div>
		<marquee style="margin-left: 130px;" width="80%" onmouseover="this.stop();" onmouseout="this.start();"  direction="right" scrollamount="5" loop="infinite" ><a href="https://forms.gle/ENRGsCYtA3BgAEYa7" target="_blank" >Admission Open for Fee Waiver Quota for Session 2022-24</a><span style="margin-left: 350px">Admission Open for PGDM (Post Graduation Diploma in Management) Session 2023-25</span></marquee>
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

<!-- <a href="https://www.gims.net.in/pdf/refresher-course-brochure.pdf" target="_blank" class="btn-new-m"><span class="blink_me"><i class="fa fa-phone-square"></i> Call for FDP Registration</span></a> -->
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

<div id="myModal3" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close close-new" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="contact-form2">
					<style>
						.popt {
							text-align: center;
							color: #000;
							margin-bottom: 5px !important;
						}
					</style>
					<style>
						.popt {
							text-align: center;
							color: #000;
							margin-bottom: 5px !important;
						}
					</style>
					<p class="popt"><strong>For Admission of West Bengal/North East/Odisha</strong></p>
					<p class="popt">Mr.Pradeep Dey</p>
					<p class="popt">Regional Head</p>
					<p class="popt">West Bengal/North East/Odisha</p>
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
					<style>
						.popt {
							text-align: center;
							color: #000;
							margin-bottom: 5px !important;
						}
					</style>
					<p class="popt"><strong>Query / Suggestions /Grievance</strong></p>
					<p class="popt"><strong>Mail Us at</strong></p>
					<p class="popt"><a href="mailto:feedback@gniot.net.in">Feedback@gniot.net.in</a><br /><br /></p>

				</div>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
<div class="top_menubar">
	
	<ul class="container-fluid">
		<li class="hovernew"><a href="https://www.gims.net.in/examination.php">Examination</a></li>
		<li class="life_links hovernew"><a href="javascript:void(0);">Campus Life <span class="icon icon-chevron-down"></span></a>
			<div class="top_megamenu life_box">
				<div class="container life_menu">
					<a class="close_btn2" href="javascript:void(0);"></a>
					<div class="row">
						<div class="mega_menu col-lg-9">
							<div class="last_date">
								<div class="row">
									<div class="col-lg-6 apply_at">
										<h4><br /><span class="lnr lnr-briefcase"></span> Life @ GIMS (PGDM Institute)<br /><br /></h4>
										<div class="last_date2 last_date22">
											<div class="event-inner-area">
												<ul class="event-wrapper">
													<?php
													global $conn;
													$sql = mysqli_query($conn, "select * from tbl_lifegniot ORDER BY STR_TO_DATE(date, '%m/%d/%Y') DESC LIMIT 0,4");
													while ($row = mysqli_fetch_array($sql)) {
													?>
														<li>
															<div class="event-calender-wrapper">
																<?php $imgex = explode(",", $row['image']); ?>
																<img src="lifegniotimg/<?php echo $imgex[0]; ?>" alt="Life at GIMS">
															</div>
															<div class="event-content-holder">
																<h3><a href="life-at-gims/<?php echo $row['lifeurl']; ?>.html" target="_blank"><?php echo $row['title']; ?></a></h3>
																<?php
																$datades = $row['description'];
																$str2 = strip_tags($datades);
																?>
																<p><?php echo substr($str2, 0, 73); ?>...</p>
																<a href="life-at-gims/<?php echo $row['lifeurl']; ?>.html" class="readmore">Read More <span class="lnr lnr-chevron-right"></span></a>
															</div>
														</li>
													<?php } ?>
												</ul>
												<a class="main-read-button" href="life-at-gims-pgdm-college.php">View More <i class="icon icon-chevron-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-6 side_border apply_at">
										<h4><br /><span class="lnr lnr-book"></span> Latest News<br /><br /></h4>
										<div class="last_date2 last_date22">
											<div class="event-inner-area">
												<ul class="event-wrapper">
													<?php
													global $conn;
													$sql = mysqli_query($conn, "select * from tbl_latest_news ORDER BY STR_TO_DATE(date, '%m/%d/%Y') DESC limit 0,4");
													while ($row = mysqli_fetch_array($sql)) {

													?>
														<li>
															<div class="event-calender-wrapper">
																<div class="event-calender-holder">
																	<?php $dateex = explode(",", date("j F, Y, g:i a", strtotime($row["date"]))); ?>
																	<h3><?php $dm = explode(" ", $dateex[0]);
																		echo $dm[0]; ?></h3>
																	<p><?php echo $dm[1]; ?></p>
																	<span> <?php echo $dateex[1]; ?></span>
																</div>
															</div>
															<div class="event-content-holder">
																<h3><a href="<?php echo $row['newsurl']; ?>.html" target="_blank"><?php echo $row['title']; ?> <span class="lnr lnr-chevron-right"></span></a></h3>
																<?php
																$datades2 = $row['sdescription'];
																$str3 = strip_tags($datades2);
																?>
																<p><?php echo $datades2; ?></p>
															</div>
														</li>
													<?php } ?>
												</ul>
												<a class="main-read-button" href="latest-news.php">View More <i class="icon icon-chevron-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mega_menu_left col-lg-3">
							<span class="mega_menu_brand">
								<a href="index.php" class="site-logo"><img src="img/gims-new-logo.jpg" alt="GIMS (PGDM Institute)" /></a>
							</span>
							<ul class="mega_menu_nav_campus">
								<li><a href="lecture-hall.php">Lecture Halls</a></li>
								<li><a href="library.php">Library</a></li>
								<li><a href="computer-centre.php">Computer Lab</a></li>
								<li><a href="hostel-facility.php	">Hostel</a></li>
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
		<li class="hovernew"><a href="https://aicte-india.org/feedback/" target="_blank">AICTE Feedback</a></li>
		<li class="hovernew"><a href="https://apply.gniotgroup.edu.in/" target="_blank">Register Here</a></li>
		<li class="hovernew nav-item-top"><a href="#" target="_blank">E-Brochure</a>
		    <div class="shortmenu" style="width:250px;">
				<ul>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/gims-pgdm-brochure-batch-2024-2026-computer.pdf">Prospectus</a></li>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/gims-pgdm-2024.pdf">Leaflet</a></li>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/gims-pgdm-coffee-table-book.pdf">GIMS PGDM Coffee Table Book</a></li>
				</ul>
			</div>
	    </li>
		<li class="hovernew nav-item-top"><a href="https://www.gims.net.in/pdf/national-conference-brochure.pdf" target="_blank">Research</a>
			<div class="shortmenu">
				<ul>
					<li><a target="_blank" href="https://www.gims.net.in/research.php">Journal of Global Management Perspectives</a></li>
    				<li><a target="_blank" href="../first-international-conference.php">International Conference </a></li>
    				<li><a target="_blank" href="https://www.gims.net.in/pdf/national-conference-brochure.pdf">National Conference </a></li>
    				<li><a target="_blank" href="https://www.gims.net.in/research-advisory-council.php">Research Advisory Council</a></li>
				</ul>
			</div>
		</li>

		<li class="hovernew"><a href="https://gims.net.in/blog/" target="_blank">Blogs</a></li>
		<li class="hovernew"><a href="media.php">Media</a></li>
		<!--<li class="hovernew"><a href="career.php">Career</a></li>-->
		<li class="hovernew nav-item-top"><a href="iqac.php">IQAC</a>
			<div class="shortmenu">
				<ul>
					<li><a target="_blank" href="pdf/iqac/about-iqac.pdf">About IQAC</a></li>
					<li><a target="_blank" href="pdf/iqac/objective-of-iqac.pdf">IQAC Objective</a></li>
					<li><a target="_blank" href="pdf/iqac/vision-and-mission.pdf">Vision & Mission</a></li>
					<li><a target="_blank" href="pdf/iqac/role-of-the-iqac-coordinator.pdf">Role of IQAC Coordinator</a></li>
					<li><a target="_blank" href="pdf/iqac/iqac-flow-chart1.pdf">IQAC Flow Chart</a></li>
					<li><a target="_blank" href="pdf/iqac/revised-composition-29th-april-23.pdf">IQAC-Revised Composition(April-2023)</a></li>
					<li><a target="_blank" href="pdf/iqac/revised-composition-6th-dec-23.pdf">IQAC-Revised Composition(Dec-2023)</a></li>
					<li><a target="_blank" href="https://www.gims.net.in/pdf/iqac/revised-composition-14th-sept-2023.pdf">IQAC-Revised Composition(September-2023)</a>
					<!-- <li><a target="_blank" href="#">IQAC-Revised Composition(May-2023)</a></li>
					<li><a target="_blank" href="#">Composition IQAC(January-2023)</a></li> -->
					<li><a target="_blank" href="pdf/iqac/mom-2nd-june.pdf">MOM 2nd June-2023</a></li>
					<li><a target="_blank" href="pdf/iqac/mom-1st-may.pdf">MOM IST MAY-2023</a></li>
					<li><a target="_blank" href="pdf/iqac/mom-28th-january.pdf">MOM 28th Jan-2023</a></li>
					<li><a target="_blank" href="pdf/iqac/mom-15th-dec.pdf">MOM 15th Dec-2022</a></li>
				</ul>
			</div>
		</li>

		<li class="hovernew"><a href="https://www.gims.net.in/virtual-tour/" target="_blank">Virtual Tour</a></li>
		<li class="hovernew nav-item-top bgyellow">
			<a href="javascript:void(0);" target="_blank">International Immersion Program</a>
			<div class="shortmenu right0">
				<ul>
					<li><a href="https://www.gims.net.in/pdf/de-montfort-university-dubai-mous.pdf" target="_blank">MOU signed</a></li>
					<li><a href="https://www.gims.net.in/international-immersion-programmes-2023.php" target="_blank">IIP Batch (2021-2023)</a></li>
					<li><a href="https://www.gims.net.in/gims-international-immersion-programmes.php" target="_blank">IIP Batch (2022-2024)</a></li>
				</ul>
			</div>
		</li>
		<li class="hovernew"><a href="https://axisbpayments.razorpay.com/PGDM-GIMS" target="_blank">Pay Fee Online</a></li>
		<li class="no-padding PopupFixed"><a class="right_bar_search" href="" data-toggle="modal" data-target="#myModalR"><i class="icon icon-line2-graduation" style="color: #323232;"></i></a></li>
	</ul>
</div>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
	<div class="container-fluid">
		<div class="logo">
			<a href="index.php"><img src="img/gims-new-logo.jpg" alt="GIMS (PGDM Institute)" /></a>
		</div>
		<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse main-menu" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<!--<li class="nav-item"><a class="nav-link c-black" href="index.php">Home</a></li>-->
				<li class="nav-item"><a class="nav-link c-black" href="about-gims.php">About GIMS <span class="span_icon"></span></a>
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
								<div class="right_mega_menu paddingleftmenu">
									<ul>
									<li><a href="https://www.gims.net.in/about-gims.php"><i class="icon-users"></i> About GIMS</a></li>
										<li><a href="https://www.gims.net.in/history.php"><i class="icon-line2-notebook"></i> History</a></li>
										<li><a href="https://www.gims.net.in/mission-vision.php"><i class="icon-line2-target"></i> Vision & Mission</a></li>
										<li><a href="https://www.gims.net.in/blessings-of-founder.php"><i class="icon-line-speech-bubble"></i> Founder Chairman's Message</a></li>
										<li><a href="https://www.gims.net.in/chairmans-message.php"><i class="icon-line-speech-bubble"></i> Chairman's Message</a></li>

										<!-- <li><a href="about-gims.php"><i class="icon-key"></i> About GIMS</a></li>
										<li><a href="mission-vision.php"><i class="icon-key"></i> Vision & Mission</a></li>
										<li><a href="blessings-of-founder.php"><i class="icon-key"></i> Founder Chairman's Message</a></li>
										<li><a href="chairmans-message.php"><i class="icon-user2"></i> Chairman's Message</a></li> -->
									</ul>
								</div>
							</div>
							<div class="col-md-6 pr-3">
								<div class="right_mega_menu">
									<ul>
									<li><a href="ceo-message.php"><i class="icon-line-speech-bubble"></i> CEO Message</a></li>
									<li><a href="director.php"><i class="icon-line-speech-bubble"></i> Director's Message</a></li>
									<li><a href="head-pgp.php"><i class="icon-line-speech-bubble"></i> Deputy Director</a></li>
									<li><a href="dean-academic.php"><i class="icon-line-speech-bubble"></i> Dean Academics</a></li>
									<li><a href="dean-academics.php"><i class="icon-line-speech-bubble"></i> Dean-Outreach & Student Welfare</a></li>
									<li><a href="#"><i class="icon-line-speech-bubble"></i> Accreditation</a></li>
										<!-- <li><a href="head-pgp.php"><i class="icon-user2"></i> Dean PGP</a></li> -->
										<!-- <li><a href="dean-academics.php"><i class="icon-user2"></i> Dean-Outreach & Student Welfare</a></li> -->
										<!-- <li><a href="approval-letter.php"><i class="icon-line2-envelope-letter"></i> Approval Letter</a></li> -->
										<!-- <li><a href="dean-global-outreach-and-research.php"><i class="icon-user2"></i> Dean - Global Outreach and Research</a></li> -->
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link c-black" href="">Program <span class="span_icon"></span></a>
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
												<li><a href="https://www.gims.net.in/head-pgp.php"><i class="icon-user2"></i> Deputy Director</a></li>
												<li><a href="https://www.gims.net.in/pgdm.php#programhighlight">About PGDM@GIMS</a></li>
												<li><a href="https://www.gims.net.in/pgdm.php#programhighlight" >Program Highlights</a></li>
												<!-- <li><a href="https://www.gims.net.in/curriculum.php">Curriculum</a></li> -->
												<li><a href="https://www.gims.net.in/pgdm.php#specialization" >PGDM Specializations</a></li>
												<li><a href="https://www.gims.net.in/self-directed-learning.php">Self Directed Learning</a></li>
												<li><a href="https://www.gims.net.in/pedagogy.php">Pedagogy</a></li>
												<!-- <li class="nav-item"><a href="pedagogy.php">FAQs</a></li> -->
												<li><a href="https://www.gims.net.in/electives.php">Electives</a></li>
												<li><a href="https://www.gims.net.in/pgdm.php#certification" >Certifications</a></li>
												<li><a href="https://www.gims.net.in/course-structure-2023-25.php">Course structure and curriculum 23-25</a></li>
											</ul>
										</div>
									</div>
									<div class="col-md-6">
										<h4 class="cn-text"><i class="icon-location"></i> Address: Plot No. 7, Chanakya Block, Knowledge Park-II, Greater Noida, (U.P.), Bharat</h4>
										<h4 class="cn-text"><i class="icon-microphone"></i> Toll Free No.: 18002746969</h4>
										<h4 class="cn-text"><i class="icon-microphone2"></i> Outreach Help Line No.: 8860606606/63</h4>
										<h4 class="cn-text"><i class="icon-envelope"></i> Email: admission@gims.net.in</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link c-black" href="">Campus <span class="span_icon"></span></a>
					<div class="mega_menu pt-5 hidden-xs">
						<div class="row no-gutters">
							<div class="col-md-12 pr-3">
								<div class="row no-gutters menu_col4 ">
									<div class="col-md-12">

									</div>
									<div class="col-md-3">
										<a href="lecture-hall.php"><img src="img/menu/new/lecture-hall.jpg" alt="Lecture Halls" class="img-fluid" />
											<div class="menu_boxx"><i class="icon-microphone2"></i> Lecture Halls</div>
										</a>
									</div>
									<div class="col-md-3">
										<a href="library.php"><img src="img/menu/new/library.jpg" alt="Library" class="img-fluid" />
											<div class="menu_boxx"><i class="icon-book2"></i> Library</div>
										</a>
									</div>
									<div class="col-md-3">
										<a href="computer-centre.php"><img src="img/menu/new/computer-lab.jpg" alt="Computer Lab" class="img-fluid" />
											<div class="menu_boxx"><i class="icon-desktop"></i> Computer Lab</div>
										</a>
									</div>
									<div class="col-md-3">
										<a href="hostel-facility.php"><img src="img/menu/new/hostel.jpg" alt="Computer Lab" class="img-fluid" />
											<div class="menu_boxx"><i class="icon-building"></i> Hostel</div>
										</a>
									</div>
									<!-- <div class="col-md-3">
										<a href=""><img src="img/menu/cafeteria.jpg" alt="Cafeteria" class="img-fluid"/>
											<div class="menu_boxx"><i class="icon-coffee2"></i> Cafeteria</div>
										</a>
									</div> -->
									<div class="col-md-3">
										<a href="sports.php"><img src="img/menu/new/sports.jpg" alt="Sports" class="img-fluid" />
											<div class="menu_boxx"><i class="icon-t-shirt"></i> Sports</div>
										</a>
									</div>
									<!-- <div class="col-md-3">
										<a href=""><img src="img/menu/transport.jpg" alt="Transport" class="img-fluid"/>
											<div class="menu_boxx"><i class="icon-dashboard"></i> Transport</div>
										</a>
									</div>	 -->
									<!-- <div class="col-md-3">
										<a href=""><img src="img/menu/ambulance.jpg" alt="Medical" class="img-fluid"/>
											<div class="menu_boxx"><i class="icon-medkit"></i> Medical</div>
										</a>
									</div>	 -->
									<div class="col-md-3">
										<a href="auditorium.php"><img src="img/menu/new/auditorium.jpg" alt="Auditorium" class="img-fluid" />
											<div class="menu_boxx"><i class="icon-building"></i> Auditorium</div>
										</a>
									</div>
									<div class="col-md-3">
										<a href="conference-hall.php"><img src="img/menu/conference-hall.jpg" alt="Conference Hall" class="img-fluid" />
											<div class="menu_boxx"><i class="icon-building"></i>Conference Hall</div>
										</a>
									</div>
									<div class="col-md-3">
										<a href="recreational-area.php"><img src="img/menu/new/recreational-area.jpg" alt="Recreational Area" class="img-fluid" />
											<div class="menu_boxx"><i class="icon-medkit"></i> Recreational Area</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link c-black" href="">Admission <span class="span_icon"></span></a>
					<div class="mega_menu pt-5 hidden-xs">
						<div class="row no-gutters">
							<div class="col-md-4 pr-3 pl-3 admission">
								<h4>Admission @ GIMS</h4>
								<div class="right_mega_menu">
									<ul>
										<li><a href="dean-academics.php"><i class="icon-user2"></i> Message of the Dean- Outreach and Student Welfare(OSW)</a></li>
										<li><a href="admissions-at-gims.php"><i class="icon-line2-graduation"></i> Selection Process</a></li>
										<li><a href="fee-structure.php"><i class="icon-fast-forward"></i> Fee Structure</a></li>
										<li><a href="pgdm-in-delhi-ncr.php"><i class="icon-rupee"></i> Education Loan</a></li>
										<li><a href="pdf/gims-Eform.pdf" target="_blank"><i class="icon-download-alt"></i> GIMS Admission Form</a></li>
										<li><a href="https://www.gims.net.in/admissions-at-gims.php"><i class="icon-line2-feed"></i> Eligibility Criteria</a></li>
										<li><a href="https://www.gims.net.in/admissions-at-gims.php#scholarship"><i class="icon-line2-feed"></i> Scholarship</a></li>
										<li><a href="intellectual-capital-at-gims.php"><i class="icon-fast-forward"></i> Intellectual Capital @ GIMS</a></li>
										<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="icon-line2-graduation"></i> Outreach</a></li>

									</ul>
								</div>
							</div>
							<div class="col-md-8 pr-3 admission">
								<h4>Life @ GIMS</h4>
								<div class="right_mega_menu">
									<div class="row">
										<ul class="col-lg-6">
											<li><a href="gallery.php"><i class="icon-line2-graduation"></i> Gallery</a></li>
											<li><a href="campus.php"><i class="icon-line2-feed"></i> Campus</a></li>
											<li><a href="academics.php"><i class="icon-building"></i> Academics</a></li>
											<li><a href="mentorship.php"><i class="icon-building"></i> Mentorship</a></li>
											<li><a href="sports.php"><i class="icon-building"></i> Sports</a></li>
										</ul>
										<ul class="col-lg-6">
											<li><a href="it-infrastructure.php"><i class="icon-building"></i> IT Infrastructure</a></li>
											<li><a href="clubs-at-gims.php"><i class="icon-building"></i> Clubs @ GIMS</a></li>
											<li><a href="anti-ragging.php"><i class="icon-building"></i> Anti Ragging</a></li>
											<li><a href="hostel-life.php"><i class="icon-building"></i> Hostel Life</a></li>
											<li><a href="life-at-gims.php"><i class="icon-building"></i> Life at GIMS</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-md-12" style="margin-top:15px;">
								<style>
									.admissionproc {
										width: 100%;
										padding: 50px;
										display: flex;
										gap: 50px;
										box-sizing: border-box;
									}
									.processdiv {
										background: #fcc225;
										border-radius: 5px;
										padding: 15px;
										margin: 9px 0;
										box-shadow: 5px 5px 0 #fcc22561;
										width: 100%;
									}
									.procestitle {
										margin: 0 !important;
										padding: 0 !important;
										font-size: 14px !important;
										font-weight: 800;
										font-family: inherit;
										color: #3a3a3a;
									}
									.processdiv p {
										margin: 0;
										padding: 0;
										font-size: 14px;
										font-family: 'Inter';
										font-weight: 500;
										color: #3a3a3a;
										margin-top: 10px;
									}
								</style>
								<div class="admissionproc">
									<div class="processdiv">
										<h2 class="procestitle">Toll Free Helpline</h2>
										<p>+91 1800-274-6969</p>
									</div>
									<div class="processdiv">
										<h2 class="procestitle">For Admission</h2>
										<p>
											<b>Contact No:</b> 8860606606/63
											<br />
											<b>Email id:</b> admission@gims.net.in
										</p>
									</div>
									<div class="processdiv">
										<h2 class="procestitle">For admission of West Bengal/North East/Odisha</h2>
										<p>
											<b>Mr.Pradeep Dey</b> <br /> Regional Head <br /> West Bengal/North East/Odisha <br /> 069012 21139, 081308 23386 <br /> pradee.dey@gniot.net.in
										</p>
									</div>
								</div>

								<!-- <h4>For admission of West Bengal/North East/Odisha</h4>
								<div  class="right_mega_menu">
									<p class="popt"><strong>For Admission of West Bengal/North East/Odisha</strong></p>
									<div class="contact-form2">
                                        <p class="popt">Mr.Pradeep Dey</p>	
                                        <p class="popt">Regional Head</p>
                                        <p class="popt">West Bengal/North East/Odisha</p>
                                        <p class="popt">069012 21139, 081308 23386</p>
                                        <p class="popt">pradee.dey@gniot.net.in</p>
                                    </div>
								</div> -->
							</div>

							<div class="col-md-12">
								<p></p>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item"><a href="faculty.php" class="nav-link">Faculty</a></li>
				<li class="nav-item"><a class="nav-link c-black" href="">CRC <span class="span_icon"></span></a>
					<div class="mega_menu pt-5 hidden-xs">
						<div class="row no-gutters">
							<div class="col-md-12 pr-2">
								<div class="row no-gutters menu_col4 ">
									<div class="col-md-12">
										<h1 class="mainh1"><i class="icon-line2-graduation"></i>Corporate Resource Centre</h1>
										<p class="subt">Admission Open for Best PGDM College/Institute in Greater Noida Uttar Pradesh & Delhi/NCR.</p>
									</div>
									<div class="col-md-6">
										<div class="bullet_menu2">
											<ul>
												<li><a href="about-crc-department.php">About CRC</a></li>
												<li><a href="our-recruiters.php">Our Recruiters</a></li>
												<li class="expandlin">
													<a href="placement-2022-24.php?v=1" class="halfmenu ">Placements</a><span class="halfmenu hlfmenuopen"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus"><path d="M5 12h14"/><path d="M12 5v14"/></svg></span>
													<div class="expandmenu">
														<div class="listul">
															<a href="placements.php#pp"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Placement Process</a>
															<a href="placement-2022-24.php?v=1"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Placement Records</a>
															<a href="placements.php#wrfg"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Why Recruit from GIMS</a>
															<a href="sip.php"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> SIP</a>
														</div>
													</div>
												</li>
												<li class="expandlin">
													<a href="#" class="halfmenu">Industry Interface</a><span class="halfmenu hlfmenuopen"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus"><path d="M5 12h14"/><path d="M12 5v14"/></svg></span>
													<div class="expandmenu">
														<div class="listul">
															<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> CTS</a>
															<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> PTS</a>
															<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> STS</a>
															<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Industrial Visit</a>
															<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Stride Series</a>
															<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Guest Session</a>
															<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Corporate Interaction</a>
															<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Learning & Development </a>
														</div>
													</div>
												</li>
												<li><a href="team-crc.php">Team- CRC</a></li>
												<!-- <li><a href="pdf/placement-brochure.pdf" target="_blank">Placement Brochure</a></li> -->

												<li class="expandlin">
													<a href="#" class="halfmenu">Placement Brochure</a><span class="halfmenu hlfmenuopen"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus"><path d="M5 12h14"/><path d="M12 5v14"/></svg></span>
													
													<div class="expandmenu">
														<div class="listul">
															<a href="https://www.gims.net.in/pdf/placement-brochure-2022-24.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Batch 2022-24</a>

															<a href="https://www.gims.net.in/pdf/placement-brochure.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Batch 2021-23</a>

															<a href="https://www.gims.net.in/pdf/placement-brochure.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Batch 2020-22</a>
															<!-- <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Industrial Visit</a>
															<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Stride Series</a>
															<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Guest Session</a>
															<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Corporate Interaction</a>
															<a href="../learning-and-development.php"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg> Learning & Development </a> -->
														</div>
													</div>
												</li>
												<!-- <li><a target="_blank" href="internship-2021-23.php">Summer Internship</a></li> -->
												<!--<li><a target="_blank" href="pdf/placement-gims.pdf">Placement Brochure</a></li>-->
												<!-- <li><a href="learning-and-development.php" target="_blank">Learning and Development</a></li> -->
											</ul>
										</div>
									</div>
									<div class="col-md-6">
										<h4 class="cn-text"><i class="icon-location"></i> Address: Plot No. 7, Chanakya Block, Knowledge Park-II, Greater Noida, (U.P.), Bharat</h4>
										<h4 class="cn-text"><i class="icon-microphone"></i> Toll Free No.: 18002746969</h4>
										<h4 class="cn-text"><i class="icon-microphone2"></i> Outreach Help Line No.: 8860606606/63</h4>
										<h4 class="cn-text"><i class="icon-envelope"></i> Email: admission@gims.net.in</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>



				<li class="nav-item"><a class="nav-link c-black" href="">Councils <span class="span_icon"></span></a>
					<div class="mega_menu pt-5 hidden-xs" style="width: 50%;">
						<div class="row no-gutters">
							<div class="col-md-12 pr-2">
								<div class="row no-gutters menu_col4 ">
									<!-- <div class="col-md-12">
										<h1 class="mainh1"><i class="icon-line2-graduation"></i>Corporate Resource Centre</h1>
										<p class="subt">Admission Open for Best PGDM College/Institute in Greater Noida Uttar Pradesh & Delhi/NCR.</p>
									</div> -->
									<div class="col">
										<div class="bullet_menu" style="column-count: unset;">
											<ul>
												<!-- <li><a href="academic-council.php">Academic Council</a></li>
												<li><a href="research-council.php">Research Council </a></li> -->
												<li><a href="https://www.gims.net.in/board-of-governors.php">Board of Governors</a></li>
												<li><a href="https://www.gims.net.in/corporate-and-academic-advisory-board.php">Corporate & Academic Advisory Board</a></li>
												
												<li><a href="crc-council.php">CRC Council </a></li>
												<!-- <li><a href="placement-process.php">Placement Process</a></li>
												<li><a href="why-recruit-from-gims.php">Why Recruit from GIMS</a></li>
												<li><a href="team-crc.php">Team- CRC</a></li>
												<li><a target="_blank" href="pdf/placement-gims.pdf">Placement Brochure</a></li>
												<li><a target="_blank" href="internship-2021-23.php">Summer Internship</a></li> -->
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>

            <li class="nav-item"><a class="nav-link c-black" href="accreditation.php">Accreditation</a>
			</li>
            <!-- <li class="nav-item"><a class="nav-link c-black" href="mandatory-disclosure.php">Mandatory Disclosure </a> -->
            <li class="nav-item"><a class="nav-link c-black" href="pdf/gims-mandatory-dis.pdf">Mandatory Disclosure </a>

				</li>



				<li class="nav-item"><a class="blink_me nav-link apply_btn" href="https://apply.gniotgroup.edu.in/" target="_blank"> Apply Now</a></li>
			</ul>
		</div>

	</div>
</nav>






<header class="header_area_one p_absoulte m_p" style="display:none;">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-sm-9 col-7">
				<div class="menu_left">

					<div class="h_contact_info">

					</div>
				</div>
			</div>
			<div class="col-sm-3 col-5">
				<div class="menu_right">
					<div class="burger_menu">
						<span class="text bawhite" data-text="menu"></span>
						<div class="dot_icon">
							<span class="dot one"></span>
							<span class="dot two"></span>
							<span class="dot three"></span>
							<span class="dot four"></span>
							<span class="dot five"></span>
							<span class="dot six"></span>
							<span class="dot seven"></span>
							<span class="dot eight"></span>
							<span class="dot nine"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--    header   -->

<style>
	.NewMobMenu .nav-item a {
    color: white !important;
    font-size: 14px !important;
}
.NewMobMenu .nav-item a:hover{
	color: white !important;
}
.dropdown-menu li a:focus, .dropdown-menu>li>a:hover{
	background: none !important;
}
</style>
<!--    hamburger_menu   -->
<div class="hamburger_menu_wrepper" id="menu">
	<div class="animation-box">
		<div class="top_menu">
			<div class="burger_menu close_icon">
				<span class="text" data-text="Close"></span>
				<i class="icon_close" style="color:#fff;"></i>
			</div>
		</div>
		<div class="menu-box navbar">
		<ul class="navbar-nav justify-content-end menu offcanfas_menu NewMobMenu">

				<li class="nav-item"><a href="#" style="font-weight: 600;color: #323232; background-color: #ffc300;padding-left: 5px;padding-right: 5px;" data-toggle="modal" data-target="#myModal4">Grievance Cell</a></li>
				<li class="nav-item"><a href="https://aicte-india.org/feedback/" target="_blank">AICTE Feedback</a></li>
				<li class="hovernew"><a href="https://apply.gniotgroup.edu.in/" target="_blank">Register Here</a></li>
				<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item dropdown submenu active">
					<a class="nav-link dropdown-toggle" href="about-gims.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						About Us
					</a>
					<ul class="dropdown-menu">
						<li class="nav-item"><a href="about-gims.php" class="nav-link">About GIMS</a></li>
						<li class="nav-item"><a href="history.php" class="nav-link">History</a></li>
						<li class="nav-item"><a href="mission-vision.php" class="nav-link">Vision & Mission</a></li>
						<li class="nav-item"><a href="blessings-of-founder.php" class="nav-link">Founder Chairman's Message</a></li>
						<li class="nav-item"><a href="chairmans-message.php" class="nav-link">Chairman Message</a></li>
						<li class="nav-item"><a href="ceo-message.php" class="nav-link">CEO Message</a></li>
						<li class="nav-item"><a href="director.php" class="nav-link">Director Message</a></li>
						<!-- <li class="nav-item"><a href="approval-letter.php" class="nav-link">Approval Letter</a></li> -->
						<li class="nav-item"><a href="head-pgp.php" class="nav-link">Deputy Director</a></li>
						<li class="nav-item"><a href="dean-academic.php"><i class="nav-link"></i> Dean Academics</a></li>
						<li class="nav-item"><a href="dean-academics.php" class="nav-link">Dean-Outreach & Student Welfare</a></li>
						<li><a href="#"><i class="icon-line-speech-bubble"></i> Accreditation</a></li>
						<!-- <li><a href="dean-global-outreach-and-research.php"><i class="icon-user2"></i> Dean - Global Outreach and Research</a></li> -->
					</ul>
				</li>
				<li class="nav-item dropdown submenu">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						PGDM Program at GIMS
					</a>
					<ul class="dropdown-menu">
					<li class="nav-item"><a href="https://www.gims.net.in/head-pgp.php"><i class="icon-user2"></i> Deputy Director</a></li>
					<li class="nav-item"><a href="https://www.gims.net.in/pgdm.php#programhighlight">About PGDM@GIMS</a></li>
					<li class="nav-item"><a href="https://www.gims.net.in/pgdm.php#programhighlight" >Program Highlights</a></li>
					<li class="nav-item"><a href="https://www.gims.net.in/pgdm.php#specialization" >PGDM Specializations</a></li>
					<li class="nav-item"><a href="https://www.gims.net.in/self-directed-learning.php">Self Directed Learning</a></li>
					<li class="nav-item"><a href="https://www.gims.net.in/pedagogy.php">Pedagogy</a></li>
					<li class="nav-item"><a href="https://www.gims.net.in/electives.php">Electives</a></li>
					<li class="nav-item"><a href="https://www.gims.net.in/pgdm.php#certification" >Certifications</a></li>
					<li class="nav-item"><a href="https://www.gims.net.in/course-structure-2023-25.php">Course structure and curriculum 23-25</a></li>
					<!-- <li class="nav-item"><a href="pedagogy.php">FAQs</a></li> -->
					<!-- <li><a href="https://www.gims.net.in/curriculum.php">Curriculum</a></li> -->
					</ul>
				</li>
				<li class="nav-item dropdown submenu">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Campus
					</a>
					<ul class="dropdown-menu">
					<li class="nav-item"><a href="https://www.gims.net.in/lecture-hall.php" class="nav-link"><i class="icon-microphone2"></i> Lecture Halls</a></li>
							<li class="nav-item"><a href="https://www.gims.net.in/library.php" class="nav-link"><i class="icon-book2"></i> Library</a></li>
							<li class="nav-item"><a href="https://www.gims.net.in/computer-centre.php" class="nav-link"><i class="icon-desktop"></i> Computer Lab</a></li>
							<li class="nav-item"><a href="https://www.gims.net.in/hostel-facility.php" class="nav-link"><i class="icon-building"></i> Hostel</a></li>
							<!-- <li class="nav-item"><a href="#" class="nav-link"><i class="icon-coffee2"></i> Cafeteria</a></li> -->
							<li class="nav-item"><a href="https://www.gims.net.in/sports.php" class="nav-link"><i class="icon-t-shirt"></i> Sports</a></li>
							<!-- <li class="nav-item"><a href="../clubs-at-gims.php" class="nav-link"><i class="icon-dashboard"></i> Transport</a></li> -->
							<!-- <li class="nav-item"><a href="../anti-ragging.php" class="nav-link"><i class="icon-medkit"></i> Medical</a></li> -->
							<li class="nav-item"><a href="https://www.gims.net.in/auditorium.php" class="nav-link"><i class="icon-building"></i> Auditorium</a></li>
							<li class="nav-item"><a href="https://www.gims.net.in/conference-hall.php" class="nav-link"><i class="icon-building"></i> Conference Hall</a></li>
							<li class="nav-item"><a href="https://www.gims.net.in/recreational-area.php" class="nav-link"><i class="icon-building"></i> Recreational Area</a></li>
							<!-- <li class="nav-item"><a href="../it-infrastructure.php" class="nav-link"><i class="icon-building"></i> IT Infrastructure</a></li>
							<li class="nav-item"><a href="../campus.php" class="nav-link"><i class="icon-line2-feed"></i> Campus</a></li> -->
					</ul>
				</li>
				<li class="nav-item dropdown submenu">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Life @ GIMS</a>
					<ul class="dropdown-menu">
						<li class="nav-item"><a href="https://www.gims.net.in/gallery.php"><i class="icon-line2-graduation"></i> Gallery</a></li>
						<li class="nav-item"><a href="https://www.gims.net.in/campus.php"><i class="icon-line2-feed"></i> Campus</a></li>
						<li class="nav-item"><a href="https://www.gims.net.in/academics.php"><i class="icon-building"></i> Academics</a></li>
						<li class="nav-item"><a href="https://www.gims.net.in/mentorship.php"><i class="icon-building"></i> Mentorship</a></li>
						<li class="nav-item"><a href="https://www.gims.net.in/sports.php"><i class="icon-building"></i> Sports</a></li>
						<li class="nav-item"><a href="https://www.gims.net.in/it-infrastructure.php"><i class="icon-building"></i> IT Infrastructure</a></li>
						<li class="nav-item"><a href="https://www.gims.net.in/clubs-at-gims.php"><i class="icon-building"></i> Clubs @ GIMS</a></li>
						<li class="nav-item"><a href="https://www.gims.net.in/anti-ragging.php"><i class="icon-building"></i> Anti Ragging</a></li>
						<li class="nav-item"><a href="https://www.gims.net.in/hostel-life.php"><i class="icon-building"></i> Hostel Life</a></li>
						<li class="nav-item"><a href="https://www.gims.net.in/life-at-gims.php"><i class="icon-building"></i> Life at GIMS</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown submenu">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admission</a>
					<ul class="dropdown-menu">
						<li class="nav-item" ><a href="https://www.gims.net.in/dean-academics.php"><i class="icon-user2"></i>Message of the Dean- Outreach and Student Welfare(OSW)</a></li>
						<li class="nav-item" ><a href="https://www.gims.net.in/admissions-at-gims.php"><i class="icon-line2-graduation"></i>Selection Process</a></li>
						<li class="nav-item" ><a href="https://www.gims.net.in/fee-structure.php"><i class="icon-fast-forward"></i> Fee Structure</a></li>
						<li class="nav-item" ><a href="https://www.gims.net.in/pgdm-in-delhi-ncr.php"><i class="icon-rupee"></i> Education Loan</a></li>
						<li class="nav-item" ><a href="https://www.gims.net.in//pdf/gims-Eform.pdf" target="_blank"><i class="icon-download-alt"></i> GIMS Admission Form</a></li>
						<li class="nav-item" ><a href="https://www.gims.net.in/admissions-at-gims.php"><i class="icon-line2-feed"></i> Eligibility Criteria</a></li>
						<li class="nav-item" ><a href="https://www.gims.net.in/admissions-at-gims.php#scholarship"><i class="icon-line2-feed"></i> Scholarship</a></li>
						<li class="nav-item" ><a href="https://www.gims.net.in/intellectual-capital-at-gims.php"><i class="icon-fast-forward"></i> Intellectual Capital @ GIMS</a></li>
						<li class="nav-item" ><a href="#" data-toggle="modal" data-target="#myModal3"><i class="icon-line2-graduation"></i> Outreach</a></li>
					</ul>
				</li>
				<li class="nav-item"><a href="faculty.php" class="nav-link">Faculty</a></li>
				<li class="nav-item dropdown submenu">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CRC</a>
					<!-- <ul class="dropdown-menu">
						<li class="nav-item"><a class="nav-link" href="about-crc-department.php">About CRC Department</a></li>
						<li class="nav-item"><a class="nav-link" href="our-recruiters.php">Our Recruiters</a></li>
						<li class="nav-item"><a class="nav-link" href="placement-2022-24.php?v=1">Placement</a></li>
						<li class="nav-item"><a class="nav-link" href="placement-process.php">Placement Process</a></li>
						<li class="nav-item"><a class="nav-link" href="why-recruit-from-gims.php">Why Recruit from GIMS</a></li>
						<li class="nav-item"><a class="nav-link" href="team-crc.php">Team- CRC</a></li>
						<li class="nav-item"><a class="nav-link" target="_blank" href="pdf/placement-gims.pdf">Placement Brochure</a></li>
						<li class="nav-item"><a class="nav-link" target="_blank" href="internship-2021-23.php">Summer Internship</a></li>
						<li class="nav-item"><a class="nav-link" href="learning-and-development.php" target="_blank">Learning and Development</a></li>
					</ul> -->
					<ul class="dropdown-menu">
						<li class="nav-item"><a class="nav-link" href="about-crc-department.php">About CRC</a></li>
						<li class="nav-item"><a class="nav-link" href="our-recruiters.php">Our Recruiters</a></li>
						<li class="nav-item"><a class="nav-link" href="placement-2022-24.php?v=1">Placement</a></li>
						<li class="nav-item"><a class="nav-link" href="placements.php#pp">Placement Process</a></li>
						<li class="nav-item"><a class="nav-link" href="placement-2022-24.php?v=1"> Placement Records</a></li>
						<li class="nav-item"><a class="nav-link" href="placements.php#wrfg">Why Recruit from GIMS</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Industry Interface</a></li>
						<li class="nav-item"><a class="nav-link" href="#">CTS</a></li>
						<li class="nav-item"><a class="nav-link" href="#">PTS</a></li>
						<li class="nav-item"><a class="nav-link" href="#">STS</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Industrial Visit</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Stride Series</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Guest Session</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Corporate Interaction</a></li>
						<li class="nav-item"><a class="nav-link" href="learning-and-development.php" target="_blank">Learning and Development</a></li>
						<li class="nav-item"><a class="nav-link" href="team-crc.php">Team- CRC</a></li>
						<!-- <li class="nav-item"><a class="nav-link" target="_blank" href="pdf/placement-gims.pdf">Placement Brochure</a></li> -->
						<!-- <li class="nav-item"><a class="nav-link" target="_blank" href="internship-2021-23.php">Summer Internship</a></li> -->
						<li class="nav-item"><a class="nav-link" target="_blank" href="https://www.gims.net.in/pdf/placement-brochure-2022-24.pdf">Placement Brochure Batch 2022-24</a></li>
						<li class="nav-item"><a class="nav-link" target="_blank" href="https://www.gims.net.in/pdf/placement-brochure.pdf">Placement Brochure Batch 2021-23</a></li>
						<li class="nav-item"><a class="nav-link" target="_blank" href="https://www.gims.net.in/pdf/placement-brochure.pdf">Placement Brochure Batch 2020-22</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown submenu">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Councils</a>
					<ul class="dropdown-menu">
						<!-- <li><a href="academic-council.php">Academic Council</a></li>
						<li><a href="research-council.php">Research Council </a></li> -->
						<li class="nav-item"><a class="nav-link" href="https://www.gims.net.in/board-of-governors.php">Board of Governors</a></li>
						<li class="nav-item"><a class="nav-link" href="https://www.gims.net.in/corporate-and-academic-advisory-board.php">Corporate & Academic Advisory Board</a></li>
						<li class="nav-item"><a class="nav-link" href="crc-council.php">CRC Council </a></li>
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
				<li class="nav-item dropdown submenu">
					<a class="nav-link dropdown-toggle" href="life-at-gims.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Other</a>
					<ul class="dropdown-menu">
						<li class="nav-item"><a href="" class="nav-link">T & P Program</a></li>
						<li class="nav-item"><a href="associations.php" class="nav-link">Associations</a></li>
						<li class="nav-item"><a target="_blank" class="nav-link" href="https://www.gims.net.in/pdf/gims-pgdm-brochure-batch-2024-2026-mobile.pdf">Prospectus</a></li>
						<li class="nav-item"><a target="_blank" class="nav-link" href="https://www.gims.net.in/pdf/gims-pgdm-2024.pdf">Leaflet</a></li>
						<li class="nav-item"><a target="_blank" class="nav-link" href="https://www.gims.net.in/pdf/gims-pgdm-coffee-table-book.pdf">GIMS PGDM Coffee Table Book</a></li>
						<!-- <li class="nav-item"><a href="https://www.gims.net.in/pdf/national-conference-brochure.pdf" target="_blank" class="nav-link">Research</a></li> -->
						<li class="nav-item"><a target="_blank" class="nav-link" href="https://www.gims.net.in/research.php">Journal of Global Management Perspectives</a></li>
						<li class="nav-item"><a target="_blank" class="nav-link" href="../first-international-conference.php">International Conference </a></li>
						<li class="nav-item"><a target="_blank" class="nav-link" href="https://www.gims.net.in/pdf/national-conference-brochure.pdf">National Conference </a></li>
						<li class="nav-item"><a target="_blank" class="nav-link" href="https://www.gims.net.in/research-advisory-council.php">Research Advisory Council</a></li>
						<li class="nav-item"><a href="https://gims.net.in/blog/" class="nav-link" target="_blank">Blogs</a></li>
						<li class="nav-item"><a href="media.php" class="nav-link">Media</a></li>
						<!--<li class="nav-item"><a href="career.php" class="nav-link">Career</a></li>-->
						
						<li class="nav-item"><a href="https://apply.gniotgroup.edu.in/" target="_blank" class="nav-link">Apply Online</a></li>
						<li class="nav-item"><a href="https://www.gims.net.in/virtual-tour/" target="_blank" class="nav-link">Virtual Tour</a></li>
						<li class="nav-item"><a href="https://www.gims.net.in/pdf/de-montfort-university-dubai-mous.pdf" class="nav-link" target="_blank">MOU signed</a></li>
						<li class="nav-item"><a href="https://www.gims.net.in/international-immersion-programmes-2023.php" class="nav-link" target="_blank">IIP Batch (2021-2023)</a></li>
						<li class="nav-item"><a href="https://www.gims.net.in/gims-international-immersion-programmes.php" class="nav-link" target="_blank">IIP Batch (2022-2024)</a></li>
						<li class="nav-item"><a href="https://axisbpayments.razorpay.com/PGDM-GIMS" target="_blank" class="nav-link">Pay Fee Online</a></li>
						<li class="nav-item"><a href="https://gniotims.edugrievance.com/" target="_blank" class="nav-link">Grievance Cell</a></li>
						<li class="nav-item"><a href="https://aicte-india.org/feedback/" target="_blank" class="nav-link">AICTE Feedback</a></li>
						<li class="nav-item"><a href="https://apply.gniotgroup.edu.in/" target="_blank" class="nav-link">Register Here</a></li>
						<li class="nav-item"><a href="pdf/placement-brochure.pdf" target="_blank" class="nav-link">Placement Brochure</a></li>
						<li class="nav-item"><a href="https://www.gims.net.in/examination.php" class="nav-link">Examination</a></li>
					</ul>
				</li>
				<li class="nav-item ">
					<a class="nav-link dropdown-toggle" href="accreditation.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accreditation</a>
				</li>
				<li class="nav-item">
					<!-- <a class="nav-link dropdown-toggle" href="mandatory-disclosure.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mandatory Disclosure</a> -->
					<a class="nav-link dropdown-toggle" href="pdf/gims-mandatory-dis.pdf" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mandatory Disclosure</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<script>
	const expandItems = document.querySelectorAll('.expandlin');
	expandItems.forEach(item => {
		const expandText = item.querySelector('.hlfmenuopen');
		expandText.addEventListener('click', () => {
			expandItems.forEach(otherItem => {
				if (otherItem !== item) {
					otherItem.classList.remove('active');
				}
			});
			item.classList.toggle('active');
		});
	});
</script>