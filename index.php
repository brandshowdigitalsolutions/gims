<?php
include('admin/dbc.php');
include('admin/function.php');
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Best PGDM colleges in Delhi NCR | Top PGDM institute in Greater Noida</title>
	<meta name="description"
		content="GNIOT Institute of Management Studies the provides Best PGDM private Colleges in Delhi, India, Top GBTU Colleges, Top  PGDM  Colleges, Best PGDM Institute Top 10 Rank PGDM College in Delhi NCR" />
	<meta name="keywords"
		content="Best PGDM College in Delhi NCR, GNIOT Institute of Management Studies, Top PGDM Colleges in Greater Noida, Top PGDM Colleges in UPTU, Best Management Colleges in India, UPSEE Best PGDM colleges, Top GBTU Institutes, Top Management institute" />

	<link rel="apple-touch-icon" sizes="57x57" href="img/fevicon/apple-icon-57x57.png?v=1">
	<link rel="apple-touch-icon" sizes="60x60" href="img/fevicon/apple-icon-60x60.png?v=1">
	<link rel="apple-touch-icon" sizes="72x72" href="img/fevicon/apple-icon-72x72.png?v=1">
	<link rel="apple-touch-icon" sizes="76x76" href="img/fevicon/apple-icon-76x76.png?v=1">
	<link rel="apple-touch-icon" sizes="114x114" href="img/fevicon/apple-icon-114x114.png?v=1">
	<link rel="apple-touch-icon" sizes="120x120" href="img/fevicon/apple-icon-120x120.png?v=1">
	<link rel="apple-touch-icon" sizes="144x144" href="img/fevicon/apple-icon-144x144.png?v=1">
	<link rel="apple-touch-icon" sizes="152x152" href="img/fevicon/apple-icon-152x152.png?v=1">
	<link rel="apple-touch-icon" sizes="180x180" href="img/fevicon/apple-icon-180x180.png?v=1">
	<link rel="icon" type="image/png?v=1" sizes="192x192" href="img/fevicon/android-icon-192x192.png?v=1">
	<link rel="icon" type="image/png?v=1" sizes="32x32" href="img/fevicon/favicon-32x32.png?v=1">
	<link rel="icon" type="image/png?v=1" sizes="96x96" href="img/fevicon/favicon-96x96.png?v=1">
	<link rel="icon" type="image/png?v=1" sizes="16x16" href="img/fevicon/favicon-16x16.png?v=1">
	<link rel="manifest" href="img/fevicon//manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png?v=1">
	<meta name="theme-color" content="#ffffff">
	<link rel="shortcut icon" type="image/x-icon" href="img/fevicon/favicon.ico" />
	<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendors/fullpage/fullpage.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="vendors/elagent-icon/style.css">
	<link rel="stylesheet" href="vendors/animation/animate.css">
	<link rel="stylesheet" href="css/style.css?v=1">
	<link rel="stylesheet" href="css/responsive.css?v=1">
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/home.css" />
	<link rel="stylesheet" type="text/css" href="css/settings.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" type="text/css"
		href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
	<style>
		@media (max-width: 767px) {

			ul.tp-revslider-mainul,
			ul.tp-revslider-mainul li,
			ul.tp-revslider-mainul div,
			#slider1,
			.rev_slider_wrapper,
			.forcefullwidth_wrapper_tp_banner {
				height: 30vh !important;
			}

			.notice {
				display: none !important;
			}
		}

		.newsticker {
			background: #d81c2a !important;
		}





		.leader-profile {
			margin-top: 23px;
			/* min-height: 473px; */
			box-shadow: 0 0 12px #00000030;
			padding: 29px 0 10px 0;
			background: #ffc300;
			min-height: 226px;
		}

		.text-center {
			text-align: center !important;
		}

		.leader-dp {
			height: 83px;
			width: 83px;
			border: 5px solid #f1f1f1;
			border-radius: 50%;
			overflow: hidden;
		}

		.mx-auto {
			margin-right: auto !important;
			margin-left: auto !important;
		}

		.leader-dp img {
			width: 100%;
		}

		.stu-slider-name {
			text-align: center;
			position: absolute;
			top: 30%;
			right: 40px;
		}

		.position-static {
			position: static !important;
		}

		.mt-3 {
			margin-top: 1rem !important;
		}

		.g-0,
		.gy-0 {
			--bs-gutter-y: 0;
		}

		.p-2 {
			padding: .5rem !important;
		}

		.stu-slider-name.position-static.mx-auto span {
			font-size: 13px;
			display: block;
			line-height: 17px;
		}

		img.place-compny {
			box-shadow: 0 0 5px #ca0000 !important;
			transform: scale(1.1);
		}

		.compny-logo-box {
			background: #ca0000;
			width: 76px;
			height: 28px;
			position: absolute;
			left: 15px;
			top: 23px;
			border-radius: 0 0 5px 0;
		}

		.compny-logo-box p {
			padding: 0;
			color: white;
			font-size: 20px;
			text-transform: uppercase;
			font-weight: bold;
			line-height: 20px;
			padding-top: 3.5px;
		}

		span.loact {
			background-color: whitesmoke;
			width: max-content;
			margin: 0 auto;
			padding: 0 5px;
		}

		.ffirst {
			top: 0;
		}

		.bg {
			background: linear-gradient(135deg, rgb(34 85 186) 0, rgb(0 36 107) 59%, #002e7d 59%, #2255ba 100%) !important;
		}

		.stu-slider-name.position-static.mx-auto h3 {
			font-size: 15px;
			margin: 0;
		}

		.leader-dp.mx-auto img {
			filter: grayscale(100);
			transform: scale(1.1);
		}

		.compny-logo-box p span {
			font-size: 13px;
			font-weight: 400;
		}

		h2.mainhead {
			color: #003075;
		}

		.st-read-more {
			background: #fcc425;
			padding: 2px 5px;
			font-size: 14px;
			display: block;
			width: max-content;
			margin: 0 auto;
			margin-top: 5px;
			margin-bottom: 5px;
		}

		@media (max-width: 767px) {
			.kl-slideshow.uh_light_gray.kl-revolution-slider {
				margin-top: 0px !important;
			}
		}

		.notificationdiv {
			padding: 5px 10px;
			background: #023e96;
		}

		.notificationnew {
			color: white;
			margin: 0;
			padding: 0;
			margin: 0 40px;
			cursor: pointer;
		}

		.notificationnew a {
			color: white;
		}

		@media (max-width: 767px) {
			.notificationnew {
				font-size: 14px;
			}
		}

		@media (min-width: 768px) {
			.phoneslider {
				display: none;
			}
		}

		@media (max-width: 767px) {
			.forcefullwidth_wrapper_tp_banner {
				display: none !important;
			}

			.topslider {
				display: none !important;
			}

			.btncontrolphone .slick-arrow {
				position: absolute;
				left: 10%;
				top: 96%;
				z-index: 9;
				background: #023e96;
				width: 40px;
				height: 40px;
				border-radius: 7px;
			}

			.btncontrolphone .slick-next {
				left: 21%;
			}
		}

		.btncontrolphone {
			position: relative;
		}


		.custumsickbtn {
			cursor: pointer !important;
			background: #000 !important;
			background: rgba(0, 0, 0, .5) !important;
			width: 40px !important;
			height: 40px !important;
			position: absolute;
			display: block;
			z-index: 1;
			border-radius: 5px;
		}

		.slick-next.custumsickbtn {
			right: 25px;
		}

		.slick-prev.custumsickbtn {
			left: 25px;
		}

		@media (min-width: 767px) and (max-width: 991px) {
			.collapse.navbar-collapse.main-menu {
				display: none !important;
			}
		}
	</style>
	<?php include "header.php"; ?>

</head>

<body class="home_four">

	<?php include "top-menu.php"; ?>
	<div class="topslider">
		<div class="main_slider">
			<div>
				<img class="mobileslideimg" src="img/slider/gims-home-website-slide-1.webp?v=12" alt="meraki"
					width="100%" />
			</div>

			<div>
				<img class="mobileslideimg" src="img/slider/gims-home-website-slide-2.webp?v=12" alt="meraki"
					width="100%" />
			</div>

			<div>
				<img class="mobileslideimg" src="img/slider/gims-home-website-slide-3.webp?v=12" alt="meraki"
					width="100%" />
			</div>
			<div>
				<img class="mobileslideimg" src="img/slider/gims-home-website-slide-4.webp?v=12" alt="meraki"
					width="100%" />
			</div>
			<!-- 06-02-2025 -->

			<!-- <div>
				<img class="mobileslideimg" src="img/slider/ted-x-gims.webp?v=2" alt="ted-x-gims" width="100%" />
			</div> -->
			<!-- <div>
				<img class="mobileslideimg" src="img/slider/gims-home-website-slide.webp?v=1" alt="meraki" width="100%" />
			</div> -->
			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/gims-noida-slider-meraki-2025.webp?v=1" alt="meraki" width="100%" />
			</div> -->
			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/meraki-gims-2025.webp?v=1" alt="meraki" width="100%" />
			</div> -->
			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/convocation-2024-v2.webp?v=1" alt="Convocation Ceremony" width="100%" />
			</div>
			<div>
				<img class="mobileslideimg" src="img/slider/sonu-sharma-slider.webp?v=1" alt="sonu" width="100%" />
			</div>
			<div>
				<img class="mobileslideimg" src="img/slider/mou-gims-2025.webp?v=2" alt="MOU" width="100%" />
			</div>
			<div>
				<img class="mobileslideimg" src="img/slider/iip-gims-2025.webp?v=1" alt="IIP" width="100%" />
			</div> -->
			<!-- <div>
				<img class="mobileslideimg" src="img/slider/gims-slider-sonu.webp?v=1" alt="sonu" width="100%" />
			</div> -->

			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/orientation-day.webp?v=1"alt="orientation" width="100%">
			</div>-->
			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/naac-a.webp" alt="NAAC A+" width="100%" />
			</div> -->
			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/award-naac.webp?v=1"alt="Convocation Ceremony" width="100%">
			</div> -->


			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/convocation-ceremony-3.webp?v=1" alt="Convocation Ceremony" width="100%" />
			</div>
			<div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/convocation-ceremony-1.webp?v=1" alt="Convocation Ceremony" width="100%" />
			</div> -->
			<!--<div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/convocation-ceremony2023.webp?v=1"alt="Convocation Ceremony" width="100%">
			</div>-->
			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/iip-banner.webp?v=1" alt="International Immersion Program" width="100%" />
			</div> -->
			<!--<div>-->
			<!--	<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/iip2023.webp?v=1"alt="International Immersion Program" width="100%">-->
			<!--</div>-->
			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/mou-de.webp?v=1" alt="mou" width="100%" />
			</div> -->
			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/placement-records.webp?v=1" alt="placement at gims" width="100%" />
			</div> -->
			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/student-exchange-program-malaysia-1.webp" alt="student-exchange-program-malaysia" width="100%" />
			</div> -->
			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/student-exchange-program-malaysia-2.webp" alt="student-exchange-program-malaysia" width="100%" />
			</div> -->
			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/student-exchange-program-malaysia-3.webp" alt="student-exchange-program-malaysia" width="100%" />
			</div> -->
			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/student-exchange-program-malaysia-4.webp" alt="student-exchange-program-malaysia" width="100%" />
			</div> -->
			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/iip-pgdm.gif?v=1" alt="International Immersion Program PGDM" width="100%">
			</div> -->
			<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/iimbxa.jpg?v=1" alt="iimb collaboration" width="100%">
			</div> -->
		</div>
	</div>
	<div class="kl-slideshow uh_light_gray kl-revolution-slider">

		<div class="phoneslider">
			<div class="pholesliderslick btncontrolphone">
				<div>
					<img class="mobileslideimg" src="img/slider/mobile/gims-home-website-slide-1.webp?v=121"
						alt="slide 1" width="100%">
				</div>
				<div>
					<img class="mobileslideimg" src="img/slider/mobile/gims-home-website-slide-2.webp?v=121"
						alt="slide 2" width="100%">
				</div>
				<div>
					<img class="mobileslideimg" src="img/slider/mobile/gims-home-website-slide-3.webp?v=121"
						alt="slide 3" width="100%">
				</div>
				<div>
					<img class="mobileslideimg" src="img/slider/mobile/gims-home-website-slide-4.webp?v=121"
						alt="slide 4" width="100%">
				</div>
				<!-- <div>
					<img class="mobileslideimg" src="img/slider/mobile/meraki-mobile.webp?v=1" alt="Meraki 2025"
						width="100%">
				</div>
				<div>
					<img class="mobileslideimg" src="img/slider/mobile/GIMS-Home-Website-Slide-2.webp?v=1"
						alt="orientation" width="100%">
				</div>
				<div>
					<img class="mobileslideimg" src="img/slider/mobile/convocation-2024-v2-phone.webp?v=1"
						alt="Convocation Ceremony" width="100%">
				</div>
				<div>
					<img class="mobileslideimg" src="img/slider/mobile/mou-gims-2025-phone.webp?v=1" alt="MOU"
						width="100%">
				</div>
				<div>
					<img class="mobileslideimg" src="img/slider/mobile/iip-gims-2025-phone.webp?v=1" alt="IIP"
						width="100%">
				</div> -->
				<!-- <div>
					<img class="mobileslideimg" src="img/slider/sonu-sharma-traning-for-mobile.webp?v=1" alt="orientation" width="100%">
				</div> -->
				<!-- <div>
				<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/orientation-day-phone.webp?v=1"alt="orientation" width="100%">
				</div> -->
				<!-- <div>
					<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/naac-a-phone.webp?v=1"
						alt="NAAC A+" width="100%">
				</div> -->
				<!-- <div>
						<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/award-mobile.webp?v=1"alt="Convocation Ceremony">
					</div> -->

				<!-- <div>
					<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/convocation-ceremony-4.webp?v=1" alt="Convocation Ceremony">
				</div>

				<div>
					<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/convocation-ceremony-2.webp?v=1" alt="Convocation Ceremony">
				</div> -->

				<!--<div>
						<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/convocation-ceremony.webp?v=1"alt="Convocation Ceremony">
					</div>-->
				<!-- <div>
					<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/iip-2023.webp?v=1" alt="International Immersion Program">
				</div> -->
				<!-- <div>
						<img class="mobileslideimg" src="img/slider/har-ghar-tiranga-2023-2.jpg?v=1" alt="Har Ghar Tiranga">
					</div> -->
				<!-- <div>
						<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/mobile/iip2023-phone.webp?v=1"alt="International Immersion Program">
					</div> -->

				<!--<div>
						<img class="mobileslideimg" src="img/slider/mobile/ashneer-grover-at-gims-greater-noida.webp?v=1"alt="Ashneer Grover at GIMS Greater Noida">
					</div>-->
				<!--<div>
						<img class="mobileslideimg" src="img/slider/mobile/international-collaboration.webp?v=1"alt="international collaboration">
					</div>-->
				<!-- <div>
					<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/mobile/excellent-placement.webp?v=1" alt="placement at gims">
				</div> -->
				<!-- <div>
						<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/mobile/iip-program-gims-greater-noida.webp?v=1"alt="international immersion program">
					</div> -->
				<!-- <div>
						<img class="mobileslideimg" src="https://www.gims.net.in/img/slider/mobile/iimbx-accredated.webp?v=1"alt="iimb collaboration">
					</div> -->
			</div>
		</div>
	</div>
	<!--<section>
			<div class="notificationdiv">
				<div class="container">
					<div class="carousels">
						<div class="carousel-slides">
							<div>
								<p class="notificationnew"><a target="_blank" href="foundation-course.php">Foundation Course for PGDM Batch 2023-25 begins from June 19- 24, 2023</a></p>
							</div>
							<div>
								<p class="notificationnew"><a target="_blank" href="foundation-course.php">Foundation Course for PGDM Batch 2023-25 begins from June 19- 24, 2023</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>-->
	<section style="display:none;">
		<div class="slider-res"></div>
	</section>



	<!-- <section class="section">
			<div class="container">
				<div class="row no-margin">
					<div class="col-lg-12 no-padding">
						<h2 class="mainhead">Clubs @ GIMS</h2>
						<div class="row sliderup">
							<div class="col-lg-12 no-padding">
								<div class="notice">
									<div class="col-lg-2 no-padding">
										<h2><i class="icon icon-book" aria-hidden="true"></i>Latest Updates</h2>
									</div>
									<div class="col-lg-10 no-padding">
										<div class="newsticker js-newsticker">
											<ul class="js-frame">
												<li class="js-item current" style="display: list-item;"><a href="https://gniotgroup.edu.in/blog/index.php/2021/07/29/bridge-courses-the-beauty-of-bridging-the-education-gap/" target="_blank" style="color:#fff;"><b>GIMS begins with a fortnight long programme-</b> <span class="blink_me"><b>The BRIDGE Course</b></span></a></li>
												<li class="js-item">Faculty Development Program on Cryptography based Security & Applications.<a href="pdf/faculty-development-program.pdf" target="_blank" class="lu-a">Read More <img src="img/icon/arrow.png?v=1" alt="Arrow Icon" width="15px" ></a></li>
												<li class="js-item">Application Form for Teaching / Non Teaching Staff <a href="career.php" class="lu-a">Read More <img src="img/icon/arrow.png?v=1" alt="Arrow Icon" width="15px" ></a></li>
												<li class="js-item" style="display: none;"><a href="https://www.gims.net.in/pdf/national-conference-brochure.pdf" target="_blank" style="color:#fff;"><b>Call for Papers: National Conference Resilience, Reinvention and Rebuilding Towards the New Normal</b></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div id="clubcarousel" class="carousel slide clubscaro" data-ride="carousel">
								<div class="carousel-inner">
									<div class="item active">
										<div class="col-lg-3 withicon col-sm-6 col-xs-6">
											<div class="club-logo-box">
												<div class="club-logo-inner-box">
													<img src="img/club-logo/sanskriti.jpg?v=1" alt="Sanskriti">
												</div>
											</div>
											<h2>Sanskriti</h2>
											<p>The Cultural Club</p>
											<a href="http://gniotgroup.edu.in/blog/index.php/category/sanskriti-club/" target="_blank" class="reambtn">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096" style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve" class="svg readm replaced-svg"><g><g><polygon style="fill:#010002;" points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   "></polygon></g></g></svg></a>
										</div>
										<div class="col-lg-3 withicon col-sm-6 col-xs-6">
											<div class="club-logo-box">
												<div class="club-logo-inner-box">
													<img src="img/club-logo/abhiyude.jpg?v=1" alt="Sanskriti">
												</div>
											</div>
											<h2>Abhyuday</h2>
											<p>The HR Club</p>
											<a href="http://gniotgroup.edu.in/blog/index.php/category/abhayuday-club/" target="_blank" class="reambtn">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096" style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve" class="svg readm replaced-svg"><g><g><polygon style="fill:#010002;" points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   "></polygon></g></g></svg></a>
										</div>
										<div class="col-lg-3 withicon col-sm-6 col-xs-6">
											<div class="club-logo-box">
												<div class="club-logo-inner-box">
													<img src="img/club-logo/i-analytika.jpg?v=1" alt="Sanskriti">
												</div>
											</div>
											<h2>I-Analytika</h2>
											<p>The IT-BA Club</p>
											<a href="http://gniotgroup.edu.in/blog/index.php/category/i-analytika-it-ba-club/" target="_blank" class="reambtn">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096" style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve" class="svg readm replaced-svg"><g><g><polygon style="fill:#010002;" points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   "></polygon></g></g></svg></a>
										</div>
										<div class="col-lg-3 withicon col-sm-6 col-xs-6">
											<div class="club-logo-box">
												<div class="club-logo-inner-box">
													<img src="img/club-logo/vishleshan.jpg?v=1" alt="Sanskriti">
												</div>
											</div>
											<h2>Vishleshan</h2>
											<p>the Research club</p>
											<a href="http://gniotgroup.edu.in/blog/index.php/category/vishleshan-the-research-club/" target="_blank" class="reambtn">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096" style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve" class="svg readm replaced-svg"><g><g><polygon style="fill:#010002;" points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   "></polygon></g></g></svg></a>
										</div>
									</div>
									<div class="item">
										<div class="col-lg-3 withicon col-sm-6 col-xs-6">
											<div class="club-logo-box">
												<div class="club-logo-inner-box">
													<img src="img/club-logo/spardhaa.jpg?v=1" alt="Sanskriti">
												</div>
											</div>
											<h2>Spardhaa</h2>
											<p>The Sports Club</p>
											<a href="http://gniotgroup.edu.in/blog/index.php/category/spardhaa-the-sports-club/" target="_blank" class="reambtn">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096" style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve" class="svg readm replaced-svg"><g><g><polygon style="fill:#010002;" points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   "></polygon></g></g></svg></a>
										</div>
										<div class="col-lg-3 withicon col-sm-6 col-xs-6">
											<div class="club-logo-box">
												<div class="club-logo-inner-box">
													<img src="img/club-logo/ccd-logo.jpg?v=1" alt="Sanskriti">
												</div>
											</div>
											<h2>CCD</h2>
											<p>Center for Career Development</p>
											<a href="" target="_blank" class="reambtn">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096" style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve" class="svg readm replaced-svg"><g><g><polygon style="fill:#010002;" points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   "></polygon></g></g></svg></a>
										</div>
										<div class="col-lg-3 withicon col-sm-6 col-xs-6">
											<div class="club-logo-box">
												<div class="club-logo-inner-box">
													<img src="img/club-logo/pramarsh.jpg?v=1" alt="Sanskriti">
												</div>
											</div>
											<h2>Paramarsh</h2>
											<p>The Counselling Cell</p>
											<a href="" target="_blank" class="reambtn">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096" style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve" class="svg readm replaced-svg"><g><g><polygon style="fill:#010002;" points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   "></polygon></g></g></svg></a>
										</div>
										<div class="col-lg-3 withicon col-sm-6 col-xs-6">
											<div class="club-logo-box">
												<div class="club-logo-inner-box">
													<img src="img/club-logo/arthvitt.jpg?v=1" alt="Sanskriti">
												</div>
											</div>
											<h2>Arthvitta</h2>
											<p>The Finance Club</p>
											<a href="" target="_blank" class="reambtn">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096" style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve" class="svg readm replaced-svg"><g><g><polygon style="fill:#010002;" points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   "></polygon></g></g></svg></a>
										</div>
									</div>
									<div class="item">
										<div class="col-lg-3 withicon col-sm-6 col-xs-6">
											<div class="club-logo-box">
												<div class="club-logo-inner-box">
													<img src="img/club-logo/nutan.jpg?v=1" alt="Sanskriti">
												</div>
											</div>
											<h2>Nutan</h2>
											<p>The E Club</p>
											<a href="http://gniotgroup.edu.in/blog/index.php/category/nutan-e-club/" target="_blank" class="reambtn">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096" style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve" class="svg readm replaced-svg"><g><g><polygon style="fill:#010002;" points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   "></polygon></g></g></svg></a>
										</div>
										<div class="col-lg-3 withicon col-sm-6 col-xs-6">
											<div class="club-logo-box">
												<div class="club-logo-inner-box">
													<img src="img/club-logo/hashtag.jpg?v=1" alt="Sanskriti">
												</div>
											</div>
											<h2>Hashtag</h2>
											<p>The Marketing Club</p>
											<a href="http://gniotgroup.edu.in/blog/index.php/category/hashtag-the-marketing-club/" target="_blank" class="reambtn">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096" style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve" class="svg readm replaced-svg"><g><g><polygon style="fill:#010002;" points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   "></polygon></g></g></svg></a>
										</div>
										<div class="col-lg-3 withicon col-sm-6 col-xs-6">
											<div class="club-logo-box">
												<div class="club-logo-inner-box">
													<img src="img/club-logo/iam-logo.jpg?v=1" alt="Sanskriti">
												</div>
											</div>
											<h2>IAM</h2>
											<p>industry amalgamation module</p>
											<a href="" target="_blank" class="reambtn">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096" style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve" class="svg readm replaced-svg"><g><g><polygon style="fill:#010002;" points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   "></polygon></g></g></svg></a>
										</div>
										<div class="col-lg-3 withicon col-sm-6 col-xs-6">
											<div class="club-logo-box">
												<div class="club-logo-inner-box">
													<img src="img/club-logo/samarpan.jpg?v=1" alt="Sanskriti">
												</div>
											</div>
											<h2>Samarpan</h2>
											<p>The CSR Club</p>
											<a href="http://gniotgroup.edu.in/blog/index.php/category/sanskriti-club/" target="_blank" class="reambtn">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096" style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve" class="svg readm replaced-svg"><g><g><polygon style="fill:#010002;" points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   "></polygon></g></g></svg></a>
										</div>
									</div>
								</div>
								<a class="leftcaro carousel-control" href="#clubcarousel" data-slide="prev">
									<svg viewBox="0 0 256 256"><polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round" stroke-linecap="round" points="184,16 72,128 184,240"></polyline></svg>
								</a>
								<a class="rightcaro carousel-control" href="#clubcarousel" data-slide="next">
									<svg viewBox="0 0 256 256"><polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round" stroke-linecap="round" points="72,16 184,128 72,240"></polyline></svg>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->

	<style>
		.marq {
			background: #ffc300;
			padding: 5px 20px;
		}

		.slidemarq {
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 100px;
			width: max-content;
		}

		.notitext {
			font-size: 16px;
			font-weight: 400;
		}
	</style>
	<!-- <section>
			<div class="marq">
				<marquee attribute_name = "attribute_value">
					<div class="slidemarq">
						<a class="notitext" href="https://gniotgroup.edu.in/blog/index.php/2021/07/29/bridge-courses-the-beauty-of-bridging-the-education-gap/" target="_blank">GIMS begins with a fortnight long programme- The BRIDGE Course</a>
						
						<a class="notitext" href="https://www.gims.net.in/pdf/national-conference-brochure.pdf" target="_blank">Call for Papers: National Conference Resilience, Reinvention and Rebuilding Towards the New Normal</a>
					</div>
				</marquee>
			</div>
		</section> -->
	<style>
		.whytitle {
			margin-top: -141px;
			font-size: 30px;
			font-weight: 800;
			text-align: center;
			color: #323232;
		}

		.why-para {
			text-align: center;
		}

		.why-para {
			text-align: center;
			font-size: 16px;
		}

		.recrulogo {
			display: flex;
			flex-wrap: wrap;
			gap: 10px;
			align-items: center;
			justify-content: center;
			margin-top: 15px;
		}

		.recrulogo img {
			background: white;
			box-shadow: 0 0 10px #023e9626;
			border-radius: 5px;
			padding: 10px;
		}

		.cstmcontainer {
			max-width: 1500px;
			margin: 0 auto;
			padding: 0 25px 50px;
		}

		@media (max-width: 767px) {
			.whytitle {
				margin-top: 0;
			}

			.why-para {
				text-align: center;
				font-size: 14px;
				text-align: justify;
			}

			.leader-profile {
				margin-bottom: 30px;
			}

			.phonebtmmrg {
				margin-bottom: 30px;
			}

		}
	</style>
	<section class="nonedemo">
		<div class="cstmcontainer">
			<div class="row">
				<div class="col-md-12">
					<div class="whyhight">
						<img class="whyimg" src="https://www.gims.net.in/img/building-gims.webp?v=1"
							alt="Top Average Placments">
						<p class="whytitle">Why GIMS</p>
						<p class="why-para">In a short span of time, GIMS has become the most sought after name for
							post-graduation in the management field. Fostering the entrepreneurial intent, focusing on
							delivering a holistic and futuristic education, GIMS is approved by AICTE and accredited by
							HLACT, UK (the first institute in the Northern Part of the country and the only institute in
							NCR). We are proud to have the academic partnership with the IIM, Bangalore for the
							certification courses on contemporary business topics. LSUS and EMI to name a few are our
							foreign collaborations, to inculcate global exposure for the incumbents of the course. An
							distinguished network of advisors, a strong corporate connect, ground breaking experiential
							learning, a flexible and industry-driven curriculum, a faculty cohort that combines academic
							reputation with real-life experience corporate exposure, and above all, a highly
							collaborative community of peers, supporters, and mentors define the philosophy of GIMS,
							Greater Noida- Idea to Execution located in the City of Future, Greater Noida. Be a part of
							the GIMS family and experience the difference in teaching learning system and discover the
							personal and professional benefits of partnering with us. </p>
					</div>
					<!-- <div class="recrulogo">
						<img src="img/accreditation/aibpm.webp?v=1" alt="Accreditation">
						<img src="img/accreditation/aicte.webp?v=1" alt="Accreditation">
						<img src="img/accreditation/aiims.webp?v=1" alt="Accreditation">
						<img src="img/accreditation/atal.webp?v=1" alt="Accreditation">
						<img src="img/accreditation/bfsi.webp?v=1" alt="Accreditation">
						<img src="img/accreditation/dcal.webp?v=1" alt="Accreditation">
						<img src="img/accreditation/eim.webp?v=1" alt="Accreditation">
						<img src="img/accreditation/iimb.webp?v=1" alt="Accreditation">
						<img src="img/accreditation/lsus.webp?v=1" alt="Accreditation">
						<img src="img/accreditation/msme.webp?v=1" alt="Accreditation">
						<img src="img/accreditation/nhrd.webp?v=1" alt="Accreditation">
						<img src="img/accreditation/hlact.webp?v=1" alt="Accreditation">
						<img src="img/accreditation/umesh.webp?v=1" alt="Accreditation">
						<img src="img/accreditation/xlri.webp?v=1" alt="Accreditation">
						<img src="img/accreditation/yiuva.webp?v=1" alt="Accreditation">
						<img src="img/accreditation/phdcci.webp?v=11" alt="Accreditation">

					</div> -->
					<style>
						.logo-carousel-wrapper {
							width: 100%;
							overflow: hidden;
							margin-top: 40px;
						}

						.logo-row {
							overflow: hidden;
							margin-bottom: 20px;
						}

						.logo-track {
							display: flex;
							align-items: center;
							gap: 20px;
							width: max-content;
						}

						.logo-track img {
							width: 170px;
							height: 85px;
							object-fit: contain;
							background: #fff;
							border: 1px solid #eee;
							border-radius: 8px;
							padding: 10px;
							flex-shrink: 0;
							box-shadow: 0 2px 8px rgba(0, 0, 0, .08);
						}

						/* Row 1 - Left to Right */
						.logo-row-right .logo-track {
							animation: scrollRight 60s linear infinite;
						}

						/* Row 2 - Right to Left */
						.logo-row-left .logo-track {
							animation: scrollLeft 60s linear infinite;
						}

						@keyframes scrollRight {
							from {
								transform: translateX(-50%);
							}

							to {
								transform: translateX(0%);
							}
						}

						@keyframes scrollLeft {
							from {
								transform: translateX(0%);
							}

							to {
								transform: translateX(-50%);
							}
						}

						.logo-row:hover .logo-track {
							animation-play-state: paused;
						}

						/* Mobile */
						@media (max-width: 768px) {
							.logo-track img {
								width: 120px;
								height: 70px;
							}

							.logo-row-right .logo-track,
							.logo-row-left .logo-track {
								animation-duration: 20s;
							}
						}

						.logo-row.logo-row-left {
							width: 90%;
							margin-left: 70px;
						}
					</style>

					<div class="logo-carousel-wrapper">

						<!-- Row 1 -->
						<div class="logo-row logo-row-right">
							<div class="logo-track">
								<img src="img/accreditation/national/ram-chameli.webp" alt="Ram Chameli College">

								<img src="img/accreditation/national/iias-siliguri.webp"
									alt="IIAS School of Management">

								<img src="img/accreditation/national/iias-kolkata.webp" alt="IIAS Education Group">

								<img src="img/accreditation/national/ibm-bela.webp"
									alt="Institute of Business Management Bela">

								<img src="img/accreditation/national/lnm-college.webp"
									alt="Lalit Narayan Mishra College">

								<img src="img/accreditation/national/medhavi.webp" alt="Medhavi Skills University">

								<img src="img/accreditation/national/madhyanchal.webp"
									alt="Madhyanchal Professional University">

								<img src="img/accreditation/national/aryakul.webp" alt="Aryakul College of Management">

								<img src="img/accreditation/national/dvvpf.webp" alt="DVVPF Institute">

								<img src="img/accreditation/national/rvim.webp" alt="RV Institute of Management">

								<img src="img/accreditation/national/dbs.webp" alt="DBS Global University">

								<img src="img/accreditation/national/alard.webp" alt="Alard University Pune">

								<img src="img/accreditation/national/sanskriti.webp" alt="Sanskriti University">

								<img src="img/accreditation/national/nims.webp" alt="NIMS University Rajasthan">

								<img src="img/accreditation/national/hrit.webp" alt="HRIT University">

								<img src="img/accreditation/national/asm.webp" alt="ASM Group of Institutions">

								<img src="img/accreditation/national/aaft.webp" alt="AAFT University">

								<img src="img/accreditation/national/ibmr.webp" alt="IBMR Group of Institutions">

								<img src="img/accreditation/national/sankalp.webp" alt="Sankalp Group">

								<img src="img/accreditation/national/aic-bimtech.webp" alt="AIC BIMTECH">

								<img src="img/accreditation/national/shayna.webp" alt="Shayna Ecounified India">

								<img src="img/accreditation/national/tlc.webp" alt="TLC Ramanujan College">

								<img src="img/accreditation/national/igdtuw.webp" alt="IGDTUW Anweshan Foundation">
								<img src="img/accreditation/international/russian-foreign-trade-academy.webp"
									alt="Russian Foreign Trade Academy">

								<img src="img/accreditation/international/abu-dhabi-school.webp"
									alt="Abu Dhabi School of Management">

								<img src="img/accreditation/international/ahlia-university.webp" alt="Ahlia University">

								<img src="img/accreditation/international/al-farabi.webp"
									alt="AL-Farabi Kazakh National University">

								<img src="img/accreditation/international/feb-unmas.webp" alt="FEB UNMAS">

								<!-- Duplicate for smooth loop -->
								<img src="img/accreditation/national/ram-chameli.webp" alt="Ram Chameli College">

								<img src="img/accreditation/national/iias-siliguri.webp"
									alt="IIAS School of Management">

								<img src="img/accreditation/national/iias-kolkata.webp" alt="IIAS Education Group">

								<img src="img/accreditation/national/ibm-bela.webp"
									alt="Institute of Business Management Bela">

								<img src="img/accreditation/national/lnm-college.webp"
									alt="Lalit Narayan Mishra College">

								<img src="img/accreditation/national/medhavi.webp" alt="Medhavi Skills University">

								<img src="img/accreditation/national/madhyanchal.webp"
									alt="Madhyanchal Professional University">

								<img src="img/accreditation/national/aryakul.webp" alt="Aryakul College of Management">

								<img src="img/accreditation/national/dvvpf.webp" alt="DVVPF Institute">

								<img src="img/accreditation/national/rvim.webp" alt="RV Institute of Management">

								<img src="img/accreditation/national/dbs.webp" alt="DBS Global University">

								<img src="img/accreditation/national/alard.webp" alt="Alard University Pune">

								<img src="img/accreditation/national/sanskriti.webp" alt="Sanskriti University">

								<img src="img/accreditation/national/nims.webp" alt="NIMS University Rajasthan">

								<img src="img/accreditation/national/hrit.webp" alt="HRIT University">

								<img src="img/accreditation/national/asm.webp" alt="ASM Group of Institutions">

								<img src="img/accreditation/national/aaft.webp" alt="AAFT University">

								<img src="img/accreditation/national/ibmr.webp" alt="IBMR Group of Institutions">

								<img src="img/accreditation/national/sankalp.webp" alt="Sankalp Group">

								<img src="img/accreditation/national/aic-bimtech.webp" alt="AIC BIMTECH">

								<img src="img/accreditation/national/shayna.webp" alt="Shayna Ecounified India">

								<img src="img/accreditation/national/tlc.webp" alt="TLC Ramanujan College">

								<img src="img/accreditation/national/igdtuw.webp" alt="IGDTUW Anweshan Foundation">

								<img src="img/accreditation/international/russian-foreign-trade-academy.webp"
									alt="Russian Foreign Trade Academy">

								<img src="img/accreditation/international/abu-dhabi-school.webp"
									alt="Abu Dhabi School of Management">

								<img src="img/accreditation/international/ahlia-university.webp" alt="Ahlia University">

								<img src="img/accreditation/international/al-farabi.webp"
									alt="AL-Farabi Kazakh National University">

								<img src="img/accreditation/international/feb-unmas.webp" alt="FEB UNMAS">
							</div>
						</div>

						<!-- Row 2 -->
						<div class="logo-row logo-row-left">
							<div class="logo-track">


								<img src="img/accreditation/international/lsu.webp" alt="Louisiana State University">

								<img src="img/accreditation/international/eim.webp"
									alt="European Institute of Management">

								<img src="img/accreditation/international/dmu-dubai.webp"
									alt="DeMontfort University Dubai">

								<img src="img/accreditation/international/university-dubai.webp"
									alt="University of Dubai">

								<img src="img/accreditation/international/tribhuvan.webp" alt="Tribhuvan University">

								<img src="img/accreditation/international/uniglobe.webp" alt="Uniglobe Nepal">

								<img src="img/accreditation/international/tribhuvan-som.webp"
									alt="Tribhuvan University School of Management">

								<img src="img/accreditation/international/hult.webp"
									alt="HULT International Business School">

								<img src="img/accreditation/international/utar.webp"
									alt="University Tunku Abdul Rahman">

								<img src="img/accreditation/international/synergy.webp" alt="Synergy University">

								<img src="img/accreditation/international/mahsa.webp" alt="Mahsa University">

								<img src="img/accreditation/international/ait.webp" alt="Asian Institute of Technology">

								<img src="img/accreditation/international/eim.webp"
									alt="European Institute of Management">

								<img src="img/accreditation/international/tpcra.webp" alt="TPCRA World">

								<img src="img/accreditation/industry/nhrd.webp" alt="NHRD">

								<img src="img/accreditation/industry/fieo.webp" alt="FIEO">

								<img src="img/accreditation/industry/nptel.webp" alt="NPTEL">

								<img src="img/accreditation/industry/msme.webp" alt="MSME">

								<img src="img/accreditation/industry/nism.webp" alt="NISM">

								<img src="img/accreditation/industry/assocham.webp" alt="ASSOCHAM">

								<img src="img/accreditation/industry/l-&-t.webp" alt="Larsen & Toubro">

								<img src="img/accreditation/industry/grant-thornton.webp" alt="Grant Thornton">

								<img src="img/accreditation/industry/cii.webp" alt="CII">

								<img src="img/accreditation/industry/hbs.webp" alt="Harvard Business School">

								<img src="img/accreditation/industry/phdcci.webp" alt="PHDCCI">

								<img src="img/accreditation/industry/spark-minda.webp" alt="Spark Minda">

								<img src="img/accreditation/industry/ipr.webp" alt="IPR">

								<img src="img/accreditation/industry/campuscliq.webp" alt="CampusCliq">

								<img src="img/accreditation/industry/whiteboard.webp" alt="Whiteboard Education">

								<img src="img/accreditation/industry/skills-ahead.webp" alt="Skills Ahead">

								<img src="img/accreditation/industry/brahma-kumaris.webp" alt="Brahma Kumaris">

								<img src="img/accreditation/industry/nism.webp" alt="NISM">

								<img src="img/accreditation/industry/prtainment.webp" alt="PRtainment">

								<img src="img/accreditation/industry/rfi-care.webp" alt="RFI Care">

								<img src="img/accreditation/industry/intercell.webp" alt="Intercell Technologies">

								<img src="img/accreditation/industry/asset-chain.webp" alt="Asset Chain">

								<img src="img/accreditation/industry/dynamic-india.webp" alt="Dynamic India">

								<img src="img/accreditation/industry/cesim.webp" alt="Cesim India">

								<img src="img/accreditation/industry/acva.webp" alt="ACVA">

								<img src="img/accreditation/industry/veterans-india.webp" alt="Veterans India">

								<img src="img/accreditation/industry/cii.webp" alt="CII">

								<!-- Duplicate for smooth loop -->


								<img src="img/accreditation/international/lsu.webp" alt="Louisiana State University">

								<img src="img/accreditation/international/eim.webp"
									alt="European Institute of Management">

								<img src="img/accreditation/international/dmu-dubai.webp"
									alt="DeMontfort University Dubai">

								<img src="img/accreditation/international/university-dubai.webp"
									alt="University of Dubai">

								<img src="img/accreditation/international/tribhuvan.webp" alt="Tribhuvan University">

								<img src="img/accreditation/international/uniglobe.webp" alt="Uniglobe Nepal">

								<img src="img/accreditation/international/tribhuvan-som.webp"
									alt="Tribhuvan University School of Management">

								<img src="img/accreditation/international/hult.webp"
									alt="HULT International Business School">

								<img src="img/accreditation/international/utar.webp"
									alt="University Tunku Abdul Rahman">

								<img src="img/accreditation/international/synergy.webp" alt="Synergy University">

								<img src="img/accreditation/international/mahsa.webp" alt="Mahsa University">

								<img src="img/accreditation/international/ait.webp" alt="Asian Institute of Technology">

								<img src="img/accreditation/international/eim.webp"
									alt="European Institute of Management">

								<img src="img/accreditation/international/tpcra.webp" alt="TPCRA World">

								<img src="img/accreditation/industry/nhrd.webp" alt="NHRD">

								<img src="img/accreditation/industry/fieo.webp" alt="FIEO">

								<img src="img/accreditation/industry/nptel.webp" alt="NPTEL">

								<img src="img/accreditation/industry/msme.webp" alt="MSME">

								<img src="img/accreditation/industry/nism.webp" alt="NISM">

								<img src="img/accreditation/industry/assocham.webp" alt="ASSOCHAM">

								<img src="img/accreditation/industry/lnt.webp" alt="Larsen & Toubro">

								<img src="img/accreditation/industry/grant-thornton.webp" alt="Grant Thornton">

								<img src="img/accreditation/industry/cii.webp" alt="CII">

								<img src="img/accreditation/industry/hbs.webp" alt="Harvard Business School">

								<img src="img/accreditation/industry/phdcci.webp" alt="PHDCCI">

								<img src="img/accreditation/industry/spark-minda.webp" alt="Spark Minda">

								<img src="img/accreditation/industry/ipr.webp" alt="IPR">

								<img src="img/accreditation/industry/campuscliq.webp" alt="CampusCliq">

								<img src="img/accreditation/industry/whiteboard.webp" alt="Whiteboard Education">

								<img src="img/accreditation/industry/skills-ahead.webp" alt="Skills Ahead">

								<img src="img/accreditation/industry/brahma-kumaris.webp" alt="Brahma Kumaris">

								<img src="img/accreditation/industry/nism.webp" alt="NISM">

								<img src="img/accreditation/industry/prtainment.webp" alt="PRtainment">

								<img src="img/accreditation/industry/rfi-care.webp" alt="RFI Care">

								<img src="img/accreditation/industry/intercell.webp" alt="Intercell Technologies">

								<img src="img/accreditation/industry/asset-chain.webp" alt="Asset Chain">

								<img src="img/accreditation/industry/dynamic-india.webp" alt="Dynamic India">

								<img src="img/accreditation/industry/cesim.webp" alt="Cesim India">

								<img src="img/accreditation/industry/acva.webp" alt="ACVA">

								<img src="img/accreditation/industry/veterans-india.webp" alt="Veterans India">

								<img src="img/accreditation/industry/cii.webp" alt="CII">
							</div>
						</div>

					</div>



				</div>
			</div>

		</div>
	</section>

	<style>
		.recordstat {
			display: flex;
			align-items: center;
			flex-wrap: wrap;
			justify-content: flex-start;
		}

		.rcnumberper {
			font-size: 40px;
			font-weight: 700;
			margin: 0;
			padding: 0;
			color: #023e96;
			line-height: 100%;
		}

		.numberst {
			width: 17%;
			border: 1px solid #0000002b;
			margin: 15px;
			padding: 5px 10px;
			position: relative;
			display: flex;
			flex-direction: column;
			align-items: flex-start;
			justify-content: center;
			border-radius: 10px;
			min-height: 130px;
		}

		.recordstat {
			display: flex;
			align-items: center;
			flex-wrap: wrap;
			justify-content: center;
		}

		.recordpoint .left2 {
			font-weight: 700;
			font-size: 28px;
			color: #323232;
		}

		.recordpoint p {
			padding: 0;
		}

		.recordpoint .left3 {
			font-size: 18px;
		}
	</style>
	<section style="display:none;">
		<div class="record">
			<div class="cstmcontainer" style="padding-bottom: 0;">
				<div class="row">
					<!-- <div class="col-lg-12">
							<h2 class="paget">Indusry Wise Placement</h2>
							<br>
							<br>
						</div>
						<div class="col-lg-12">
							<div class="recordinner">
								<div class="recordstat">
									<div class="numberst">
										<p class="rcnumberper">2 <span>- 3%</span></p>
										<p class="industry">Consulting</p>
									</div>
									<div class="numberst">
										<p class="rcnumberper">1 <span>- 1%</span></p>
										<p class="industry">Asset Management</p>
									</div>
									<div class="numberst">
										<p class="rcnumberper">5 <span>- 7%</span></p>
										<p class="industry">B2B Service</p>
									</div>
									<div class="numberst">
										<p class="rcnumberper">11 <span>- 5%</span></p>
										<p class="industry">Ranking</p>
									</div>
									<div class="numberst">
										<p class="rcnumberper">13 <span>- 8%</span></p>
										<p class="industry">Consumer Durables</p>
									</div>
									<div class="numberst">
										<p class="rcnumberper">2 <span>- 3%</span></p>
										<p class="industry">Ed Tech</p>
									</div>
									<div class="numberst">
										<p class="rcnumberper">6 <span>- 8%</span></p>
										<p class="industry">Financial Service</p>
									</div>
									<div class="numberst">
										<p class="rcnumberper">1 <span>- 1%</span></p>
										<p class="industry">FMGG</p>
									</div>
									<div class="numberst">
										<p class="rcnumberper">1 <span>- 1%</span></p>
										<p class="industry">Health Care</p>
									</div>
									<div class="numberst">
										<p class="rcnumberper">1 <span>- 1%</span></p>
										<p class="industry">IT</p>
									</div>
									<div class="numberst">
										<p class="rcnumberper">3 <span>- 4%</span></p>
										<p class="industry">Logistics & SCM</p>
									</div>
									<div class="numberst">
										<p class="rcnumberper">8 <span>- 11%</span></p>
										<p class="industry">Manufacturing</p>
									</div>
									<div class="numberst">
										<p class="rcnumberper">12 <span>- 6%</span></p>
										<p class="industry">Paint industry</p>
									</div>
									<div class="numberst">
										<p class="rcnumberper">1 <span>- 1%</span></p>
										<p class="industry">Real Estate</p>
									</div>
									<div class="numberst">
										<p class="rcnumberper">6 <span>- 8%</span></p>
										<p class="industry">Retail</p>
									</div>
								</div>
							</div>
						</div> -->
					<div class="col-lg-12 yellowhome phonebtmmrg">
						<h2 class="ymaint"><svg xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px"
								viewBox="0 0 481.072 481.072"
								style="enable-background:new 0 0 481.072 481.072;width: 29px;margin-right: 5px;"
								xml:space="preserve" class="svg replaced-svg">
								<g>
									<g>
										<path
											d="M455.078,0h-208c-13.232,0-24,10.768-24,24v128c0,4.416,3.576,8,8,8s8-3.584,8-8V24c0-4.408,3.584-8,8-8h160v304    c0,4.416,3.576,8,8,8s8-3.584,8-8V16h32c4.416,0,8,3.592,8,8v344c0,4.408-3.584,8-8,8h-80V72c0-4.416-3.576-8-8-8s-8,3.584-8,8    v304h-64c-4.424,0-8,3.584-8,8c0,4.416,3.576,8,8,8h160c13.232,0,24-10.768,24-24V24C479.078,10.768,468.31,0,455.078,0z">
										</path>
									</g>
								</g>
								<g>
									<g>
										<path
											d="M311.078,40c-4.424,0-8,3.584-8,8v64c0,4.416,3.576,8,8,8s8-3.584,8-8V48C319.078,43.584,315.502,40,311.078,40z">
										</path>
									</g>
								</g>
								<g>
									<g>
										<path
											d="M311.078,144c-4.424,0-8,3.584-8,8v24c0,4.416,3.576,8,8,8s8-3.584,8-8v-24C319.078,147.584,315.502,144,311.078,144z">
										</path>
									</g>
								</g>
								<g>
									<g>
										<circle cx="335.078" cy="224" r="8"></circle>
									</g>
								</g>
								<g>
									<g>
										<circle cx="335.078" cy="256" r="8"></circle>
									</g>
								</g>
								<g>
									<g>
										<circle cx="335.078" cy="288" r="8"></circle>
									</g>
								</g>
								<g>
									<g>
										<circle cx="335.078" cy="320" r="8"></circle>
									</g>
								</g>
								<g>
									<g>
										<path
											d="M80.51,48h-1.432h-16V32c0-4.416-3.576-8-8-8s-8,3.584-8,8v16H32.51h-1.432c-4.424,0-8,3.584-8,8s3.576,8,8,8h1.432    h14.568v16c0,4.416,3.576,8,8,8s8-3.584,8-8V64h16h1.432c4.424,0,8-3.584,8-8S84.934,48,80.51,48z">
										</path>
									</g>
								</g>
								<g>
									<g>
										<path
											d="M294.886,202.424l-141.12-49.96c-1.736-0.608-3.608-0.608-5.344,0L7.318,202.416c-3.28,1.168-5.44,4.328-5.32,7.808    c0.088,2.728,2.432,67.52,21.216,133.48c25.6,89.864,69.816,137.368,127.888,137.368c58.744,0,103.168-47.504,128.496-137.384    c18.584-65.976,20.536-130.784,20.616-133.504C300.31,206.712,298.15,203.584,294.886,202.424z M151.102,465.072    c-112.6,0-130.504-211.496-132.816-249.56l132.816-47.024l132.856,47.032C281.894,253.48,265.222,465.072,151.102,465.072z">
										</path>
									</g>
								</g>
								<g>
									<g>
										<path
											d="M262.894,226.816l-108.912-42.088c-1.856-0.72-3.904-0.72-5.768,0L39.31,226.816c-3.168,1.224-5.216,4.32-5.112,7.72    c0.288,8.896,8.248,217.92,116.904,217.92c109.928,0,116.68-209.072,116.912-217.968    C268.102,231.104,266.054,228.032,262.894,226.816z M151.102,436.456c-84.376,0-98.624-164.064-100.616-196.808l100.616-38.88    l100.664,38.896C249.966,272.32,236.638,436.456,151.102,436.456z">
										</path>
									</g>
								</g>
								<g>
									<g>
										<path
											d="M150.638,256.648c-34.016,0-61.688,27.672-61.688,61.68s27.672,61.68,61.688,61.68c34.008,0,61.68-27.672,61.68-61.68    S184.646,256.648,150.638,256.648z M150.638,364c-25.192,0-45.688-20.496-45.688-45.68c0-25.184,20.496-45.68,45.688-45.68    c25.184,0,45.68,20.496,45.68,45.68C196.318,343.504,175.822,364,150.638,364z">
										</path>
									</g>
								</g>
								<g>
									<g>
										<path
											d="M178.39,299.264c-3.336-2.864-8.384-2.544-11.28,0.808l-19.744,22.968l-7.832-8.976c-2.904-3.336-7.976-3.68-11.288-0.76    c-3.328,2.904-3.664,8.152-0.76,11.48l13.904,16.096c1.512,1.736,3.72,3.12,6.024,3.12c0.008,0,0.024,0,0.032,0    c2.328,0,4.52-1.408,6.04-3.168l25.76-30.192C182.118,307.288,181.742,302.144,178.39,299.264z">
										</path>
									</g>
								</g>
								<g>
									<g>
										<circle cx="150.67" cy="230.824" r="7.592"></circle>
									</g>
								</g>
								<g>
									<g>
										<circle cx="150.67" cy="406.824" r="7.592"></circle>
									</g>
								</g>
							</svg>No. of Selection <span>Industry Wise</span></h2>
						<div class="row no-margin recordpoint">
							<div class="col-lg-2 col-xs-4 innerdiv1st">
								<p class="left2">13</p>
								<p class="left3">Consumer Durables</p>
							</div>
							<div class="col-lg-2 col-xs-4 innerdiv1st">
								<p class="left2">12</p>
								<p class="left3">Paint industry</p>
							</div>
							<div class="col-lg-2 col-xs-4 innerdiv1st">
								<p class="left2">11</p>
								<p class="left3">Ranking</p>
							</div>
							<div class="col-lg-2 col-xs-4 innerdiv1st">
								<p class="left2">8</p>
								<p class="left3">Manufacturing</p>
							</div>
							<div class="col-lg-2 col-xs-4 innerdiv1st">
								<p class="left2">6</p>
								<p class="left3">Retail</p>
							</div>
							<div class="col-lg-2 col-xs-4 innerdiv1st">
								<p class="left2">6</p>
								<p class="left3">Financial Service</p>
							</div>
							<div class="col-lg-2 col-xs-4 innerdiv1st">
								<p class="left2">5</p>
								<p class="left3">B2B Service</p>
							</div>
							<div class="col-lg-2 col-xs-4 innerdiv1st">
								<p class="left2">3</p>
								<p class="left3">Logistics & SCM</p>
							</div>
							<div class="col-lg-2 col-xs-4 innerdiv1st">
								<p class="left2">2</p>
								<p class="left3">Ed Tech</p>
							</div>
							<div class="col-lg-2 col-xs-4 innerdiv1st">
								<p class="left2">2</p>
								<p class="left3">Consulting</p>
							</div>
							<div class="col-lg-2 col-xs-4 innerdiv1st">
								<p class="left2">1</p>
								<p class="left3">Asset Management</p>
							</div>
							<div class="col-lg-2 col-xs-4 innerdiv1st">
								<p class="left2">1</p>
								<p class="left3">FMGG</p>
							</div>
							<div class="col-lg-2 col-xs-4 innerdiv1st">
								<p class="left2">1</p>
								<p class="left3">Health Care</p>
							</div>
							<div class="col-lg-2 col-xs-4 innerdiv1st">
								<p class="left2">1</p>
								<p class="left3">IT</p>
							</div>

							<div class="col-lg-2 col-xs-4 innerdiv1st">
								<p class="left2">1</p>
								<p class="left3">Real Estate</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<style>
		@keyframes rotateMain {
			from {
				transform: rotate(0deg);
			}

			to {
				transform: rotate(360deg);
			}
		}

		@keyframes rotateInner {
			from {
				transform: rotate(0deg);
			}

			to {
				transform: rotate(-360deg);
			}
		}

		body {
			font-family: "Roboto";
		}

		.centralized {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.main-container {
			margin: 0 auto;
			padding-top: 120px;
			width: 100%;
			position: relative;
		}

		.main-container .main-circle {
			border: 6px solid #bcbcbc;
			border-radius: 100%;
			box-sizing: border-box;
			padding: 24px;
			height: 300px;
			width: 300px;
			position: relative;
		}

		.main-container .main-circle .inner {
			background: #ededed;
			border: 4px solid #e3e3e3;
			border-radius: 100%;
			box-shadow: 4px 5px 5px 0px rgba(0, 0, 0, 0.2);
			box-sizing: border-box;
			color: #616161;
			font-size: 24px;
			height: 100%;
			line-height: 1.5;
			text-align: center;
			width: 100%;
		}

		.main-container .bubble-container {
			border: 6px;
			box-sizing: border-box;
			height: 300px;
			position: absolute;
			width: 300px;
			opacity: 0;
			transform: rotate(0deg);
			transition: transform ease-in 0.7s, opacity ease 1s;
		}

		.main-container .bubble-container .pointer {
			background: #fff;
			border: 4px solid #bcbcbc;
			border-radius: 100%;
			box-sizing: border-box;
			position: absolute;
			left: calc(-17px + 3px);
			height: 34px;
			top: calc(50% - 17px);
			width: 34px;
		}

		.main-container .bubble-container .pointer .arrow {
			width: 0;
			height: 0;
			border-style: solid;
			border-width: 7px 14px 7px 0;
			border-color: transparent #bcbcbc transparent transparent;
			position: absolute;
			left: -15px;
			top: 5.52px;
		}

		.main-container .bubble-container .pointer .inner {
			background: #000;
			border-radius: 100%;
			box-sizing: border-box;
			height: 14px;
			width: 14px;
		}

		.main-container .bubble-container .bubble {
			border-radius: 100%;
			box-sizing: border-box;
			position: absolute;
			height: 100px;
			top: calc(50% - 55px);
			left: -145px;
			width: 100px;
			transform: rotate(0deg);
			transition: all ease 0.8s;
		}

		.main-container .bubble-container .bubble .inner {
			background: #fff;
			border-radius: 100%;
			box-shadow: 4px 5px 5px 0px rgba(0, 0, 0, 0.2);
			box-sizing: border-box;
			height: 90px;
			width: 90px;
			overflow: hidden;
			font-size: 14px;
			text-align: center;
			padding: 10px;
		}

		.main-container .bubble-container.black .bubble,
		.main-container .bubble-container.black .pointer .inner {
			background: #505269;
		}

		.main-container .bubble-container.blue-dark .bubble,
		.main-container .bubble-container.blue-dark .pointer .inner {
			background: #4c67aa;
		}

		.main-container .bubble-container.blue-light .bubble,
		.main-container .bubble-container.blue-light .pointer .inner {
			background: #25ade1;
		}

		.main-container .bubble-container.green .bubble,
		.main-container .bubble-container.green .pointer .inner {
			background: #8dc03f;
		}

		.main-container .bubble-container.orange .bubble {
			background: #fa9128;
		}

		.main-container .bubble-container.orange .pointer .inner {
			background: #fa9128;
		}

		.main-container .bubble-container.red .bubble,
		.main-container .bubble-container.red .pointer .inner {
			background: #e46020;
		}

		.numberhr {
			display: none;
		}

		.alinfotext span {
			font-weight: 800;
			font-size: 20px;
			color: #002f77;
		}

		.infogrphdiv {
			padding-bottom: 150px;
		}

		.alinfotext {
			font-size: 12px;
			line-height: 15px;
			font-weight: 600;
		}

		@media (max-width: 767px) {
			.main-circle {
				display: none;
			}

			.pointer.centralized {
				display: none;
			}

			.bubble-container.centralized {
				width: auto;
				height: auto;
				position: static;
			}

			.main-container .bubble-container .bubble {
				position: static;
			}

			.centralized {
				display: flex;
				align-items: center;
				justify-content: center;
				flex-wrap: wrap;
				gap: 10px;
			}
		}
	</style>
	<section class="section infogrphdiv" style="display:none;">
		<div class="container">
			<div class="main-container centralized">
				<div class="main-circle">
					<div class="inner centralized">Placement <br> Stats
					</div>
				</div>
				<div class="bubble-container centralized blue-dark">
					<div class="pointer centralized">
						<div class="arrow"></div>
						<div class="inner">
						</div>
					</div>
					<div class="bubble centralized">
						<div class="inner centralized">
							<p class="alinfotext"><span>3%</span> Consulting</p>
						</div>
					</div>
				</div>
				<div class="bubble-container centralized green">
					<div class="pointer centralized">
						<div class="arrow"></div>
						<div class="inner">
						</div>
					</div>
					<div class="bubble centralized">
						<div class="inner centralized">
							<p class="alinfotext"><span>1%</span> Asset Management</p>
						</div>
					</div>
				</div>
				<div class="bubble-container centralized orange">
					<div class="pointer centralized">
						<div class="arrow"></div>
						<div class="inner">
						</div>
					</div>
					<div class="bubble centralized">
						<div class="inner centralized">
							<p class="alinfotext"><span>7%</span> B2B Service</p>
						</div>
					</div>
				</div>
				<div class="bubble-container centralized red">
					<div class="pointer centralized">
						<div class="arrow"></div>
						<div class="inner">
						</div>
					</div>
					<div class="bubble centralized">
						<div class="inner centralized">
							<p class="alinfotext"><span>15%</span> Ranking</p>
						</div>
					</div>
				</div>
				<div class="bubble-container centralized black">
					<div class="pointer centralized">
						<div class="arrow"></div>
						<div class="inner">
						</div>
					</div>
					<div class="bubble centralized">
						<div class="inner centralized">
							<p class="alinfotext"><span>18%</span> Consumer Durables</p>
						</div>
					</div>
				</div>
				<div class="bubble-container centralized blue-light">
					<div class="pointer centralized">
						<div class="arrow"></div>
						<div class="inner">
						</div>
					</div>
					<div class="bubble centralized">
						<div class="inner centralized">
							<p class="alinfotext"><span>3%</span> Ed Tech </p>
						</div>
					</div>
				</div>
				<div class="bubble-container centralized blue-dark">
					<div class="pointer centralized">
						<div class="arrow"></div>
						<div class="inner">
						</div>
					</div>
					<div class="bubble centralized">
						<div class="inner centralized">
							<p class="alinfotext"><span>8%</span> Financial Service</p>
						</div>
					</div>
				</div>
				<div class="bubble-container centralized green">
					<div class="pointer centralized">
						<div class="arrow"></div>
						<div class="inner">
						</div>
					</div>
					<div class="bubble centralized">
						<div class="inner centralized">
							<p class="alinfotext"><span>1%</span> FMGG</p>
						</div>
					</div>
				</div>
				<div class="bubble-container centralized orange">
					<div class="pointer centralized">
						<div class="arrow"></div>
						<div class="inner">
						</div>
					</div>
					<div class="bubble centralized">
						<div class="inner centralized">
							<p class="alinfotext"><span>1%</span> Health Care</p>
						</div>
					</div>
				</div>
				<div class="bubble-container centralized red">
					<div class="pointer centralized">
						<div class="arrow"></div>
						<div class="inner">
						</div>
					</div>
					<div class="bubble centralized">
						<div class="inner centralized">
							<p class="alinfotext"><span>1%</span> IT</p>
						</div>
					</div>
				</div>
				<div class="bubble-container centralized black">
					<div class="pointer centralized">
						<div class="arrow"></div>
						<div class="inner">
						</div>
					</div>
					<div class="bubble centralized">
						<div class="inner centralized">
							<p class="alinfotext"><span>4%</span> Logistics & SCM</p>
						</div>
					</div>
				</div>
				<div class="bubble-container centralized blue-light">
					<div class="pointer centralized">
						<div class="arrow"></div>
						<div class="inner">
						</div>
					</div>
					<div class="bubble centralized">
						<div class="inner centralized">
							<p class="alinfotext"><span>11%</span> Manufacturing</p>
						</div>
					</div>
				</div>
				<div class="bubble-container centralized red">
					<div class="pointer centralized">
						<div class="arrow"></div>
						<div class="inner">
						</div>
					</div>
					<div class="bubble centralized">
						<div class="inner centralized">
							<p class="alinfotext"><span>6%</span> Paint industry</p>
						</div>
					</div>
				</div>
				<div class="bubble-container centralized black">
					<div class="pointer centralized">
						<div class="arrow"></div>
						<div class="inner">
						</div>
					</div>
					<div class="bubble centralized">
						<div class="inner centralized">
							<p class="alinfotext"><span>1%</span> Real Estate</p>
						</div>
					</div>
				</div>
				<div class="bubble-container centralized blue-light">
					<div class="pointer centralized">
						<div class="arrow"></div>
						<div class="inner">
						</div>
					</div>
					<div class="bubble centralized">
						<div class="inner centralized">
							<p class="alinfotext"><span>8%</span> Retail</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- <section class="section newgrey-bg">
			<div class="container">
				<div class="row wow fadeInUp animated no-margin">
					<div class="col-lg-5 pd30">
						<img src="img/gims-iimbx.gif" class="fancyimg" alt="GIMS & IIMBx" />
					</div>
					<div class="col-lg-7">
						<h1 class="titlem txtl pt-40">GIMS Gr. Noida & <span>IIMBx</span></h1>
						<h2 class="titlesm txtl">Indian Institute of Management, Bangalore (IIMBx)</h2>
						<p class="textp txtl">
							"Coming together is a beginning; keeping together is progress; working together is success" We are happy to announce that <span>GNIOT Institute of Management Studies, Greater Noida has signed up for the MoU with IIMBx</span> regarding Academic Partnership to offer three-month online certificate programme as part of the "IIMBX School Partnership Programme.
						</p>
					</div>
				</div>
			</div>
		</section> -->
	<!-- <section class="section pattern-bg">
			<div class="container">
				<div class="row wow fadeInUp animated no-margin">
					<div class="col-lg-8">
						<h1 class="titlem pt-40">HLACT  <span>Accreditation</span></h1>
						<h2 class="titlesm">Higher Learning Accreditation Consulting and Training (HLACT), UK</h2>
						<p class="textp">
						GNIOT Institute of Management Studies (GIMS), Greater Noida is now accredited to Higher Learning Accreditation Consulting and Training (HLACT), UK. GIMS, Greater Noida. Accreditation is an official acknowledgement of an organization’s competency at performing specific tasks. 
						</p>
						<a href="hlact-accreditation.php" target="_blank" class="reambtn homebtn fl-right no-margin">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096" style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve" class="svg readm replaced-svg">
							<g>
								<g>
									<polygon style="fill:#010002;" points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   "></polygon>
								</g>
							</g>
							</svg>
						</a>
					</div>
					<div class="col-lg-4 pd30">
						<img src="img/hlact1.jpg?v=1" class="fancyimg" alt="PGDM Admission" />
					</div>
				</div>
			</div>
		</section> -->
	<style>
		.news-card {
			background: #e8eaf1;
			padding: 10px;
			margin: 2px;
			border-radius: 11px;
		}

		.news-para {
			display: -webkit-box;
			-webkit-line-clamp: 2;
			-webkit-box-orient: vertical;
			overflow: hidden;
			font-size: 14px;
			line-height: 19px;
			color: black;
		}

		.news-title {
			font-size: 16px;
			color: black;
			font-weight: 400;
		}

		.card-img-top {
			width: 100%;
			height: 150px;
			object-fit: cover;
			border-radius: 8px;
		}

		.newsdate {
			margin: 6px 0;
			display: block;
			font-size: 14px;
		}

		.newsmaintitle {
			font-size: 30px;
			font-weight: 700;
			color: #323232;
			padding: 0;
		}

		.newstitlediv {
			display: flex;
			align-items: center;
			justify-content: space-between;
			border-bottom: 1px solid black;
			margin-bottom: 10px;
			padding-bottom: 10px;
		}

		.seeallbtn {
			font-size: 16px;
			background: #fac426;
			height: 41px;
			display: flex;
			width: 167px;
			align-items: center;
			justify-content: center;
			border-radius: 50px;
		}
	</style>
	<section style="display:none;">
		<div class="container">
			<div class="newstitlediv">
				<p class="newsmaintitle">Latest Happiness</p>
				<a href="pgdm.php" target="_blank" class="seeallbtn">Read All News</a>
			</div>
			<div class="responsive">
				<div>
					<div class="news-card">
						<div class="news-card-body">
							<h5 class="news-title">CThe Orientation Program Meraki</h5>
							<p class="news-para">You listen to him and you soak in his enigma and beauty of
								expressions... Meraki - 2023, Th..</p>
							<span class="newsdate">30-06-2023</span>
						</div>
						<img src="img/5645.jpg?v=1" class="card-img-top" alt="...">
					</div>
				</div>
				<div>
					<div class="news-card">
						<div class="news-card-body">
							<h5 class="news-title">CThe Orientation Program Meraki</h5>
							<p class="news-para">You listen to him and you soak in his enigma and beauty of
								expressions... Meraki - 2023, Th..</p>
							<span class="newsdate">30-06-2023</span>
						</div>
						<img src="img/5645.jpg?v=1" class="card-img-top" alt="...">
					</div>
				</div>
				<div>
					<div class="news-card">
						<div class="news-card-body">
							<h5 class="news-title">CThe Orientation Program Meraki</h5>
							<p class="news-para">You listen to him and you soak in his enigma and beauty of
								expressions... Meraki - 2023, Th..</p>
							<span class="newsdate">30-06-2023</span>
						</div>
						<img src="img/5645.jpg?v=1" class="card-img-top" alt="...">
					</div>
				</div>
				<div>
					<div class="news-card">
						<div class="news-card-body">
							<h5 class="news-title">CThe Orientation Program Meraki</h5>
							<p class="news-para">You listen to him and you soak in his enigma and beauty of
								expressions... Meraki - 2023, Th..</p>
							<span class="newsdate">30-06-2023</span>
						</div>
						<img src="img/5645.jpg?v=1" class="card-img-top" alt="...">
					</div>
				</div>
				<div>
					<div class="news-card">
						<div class="news-card-body">
							<h5 class="news-title">CThe Orientation Program Meraki</h5>
							<p class="news-para">You listen to him and you soak in his enigma and beauty of
								expressions... Meraki - 2023, Th..</p>
							<span class="newsdate">30-06-2023</span>
						</div>
						<img src="img/5645.jpg?v=1" class="card-img-top" alt="...">
					</div>
				</div>
				<div>
					<div class="news-card">
						<div class="news-card-body">
							<h5 class="news-title">CThe Orientation Program Meraki</h5>
							<p class="news-para">You listen to him and you soak in his enigma and beauty of
								expressions... Meraki - 2023, Th..</p>
							<span class="newsdate">30-06-2023</span>
						</div>
						<img src="img/5645.jpg?v=1" class="card-img-top" alt="...">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section newgrey-bg">
		<div class="container">
			<div class="row wow fadeInUp animated no-margin">
				<div class="col-lg-4 wow fadeInDown shadowdiv" style="visibility: visible; animation-name: fadeInDown;">
					<h2 class="new-font titlenews"><i class="icon-news icon-position"></i> <span>Latest</span> News</h2>
					<div class="">
						<ul class="event-wrapper bodynews">
							<?php
							global $conn;
							$sql = mysqli_query($conn, "select * from tbl_latest_news ORDER BY STR_TO_DATE(date, '%m/%d/%Y') DESC limit 0,6");
							while ($row = mysqli_fetch_array($sql)) {

								?>
								<li>
									<div class="event-calender-wrapper">
										<div class="event-calender-holder">
											<?php $dateex = explode(",", date("j F, Y, g:i a", strtotime($row["date"]))); ?>
											<h3>
												<?php $dm = explode(" ", $dateex[0]);
												echo $dm[0]; ?>
											</h3>
											<p>
												<?php echo $dm[1]; ?>
											</p>
											<span>
												<?php echo $dateex[1]; ?>
											</span>
										</div>
									</div>
									<div class="event-content-holder">
										<h3><a href="<?php echo page_link(); ?>latest-news-detailed.php?slug=<?php echo $row['newsurl']; ?>"
												target="_blank">
												<?php echo $row['title']; ?> <span class="lnr lnr-chevron-right"></span>
											</a></h3>
										<p>
											<?php $str = strip_tags($row['description']);
											echo substr($str, 0, 100); ?>...
										</p>
									</div>
								</li>
								<?php
							} ?>
						</ul>
						<a class="main-read-button" href="latest-news.php">View More <i
								class="icon icon-chevron-right"></i></a>
					</div>
				</div>
				<div class="col-lg-4 wow fadeInDown shadowdiv"
					style="visibility: visible; animation-name: fadeInDown;background-color: #fdfdfd;">
					<h2 class="new-font titlenews"><i class="icon-picture icon-position"></i> <span>Latest</span> @ GIMS
					</h2>
					<div class="">
						<ul class="event-wrapper bodylife">
							<?php
							$sql2 = mysqli_query($conn, "select * from tbl_lifegniot ORDER BY STR_TO_DATE(date, '%m/%d/%Y') DESC LIMIT 0,6");
							while ($row2 = mysqli_fetch_array($sql2)) {
								?>
								<li>
									<div class="event-calender-wrapper">
										<?php $imgex2 = explode(",", $row2['image']); ?>
										<img src="lifegniotimg/<?php echo $imgex2[0]; ?>?v=1" alt="Life at GIMS">
									</div>
									<div class="event-content-holder">
										<h3><a href="life-at-gims/<?php echo $row2['lifeurl']; ?>.html" target="_blank">
												<?php echo $row2['title']; ?>
											</a></h3>
										<p>
											<?php $str = strip_tags($row2['description']);
											echo substr($str, 0, 73); ?>...
										</p>
									</div>
								</li>
								<?php
							} ?>
						</ul>
						<a class="main-read-button" href="life-at-gims-pgdm-college.php">View More <i
								class="icon icon-chevron-right"></i></a>
					</div>
				</div>
				<div class="col-lg-4 wow fadeInDown shadowdiv"
					style="visibility: visible; animation-name: fadeInDown;background-color: #fcfcfc;">
					<h2 class="new-font titlenews"><i class="icon-calendar icon-position"></i> <span>Placement</span>
						Updates</h2>
					<div class="">
						<ul class="placement-u">
							<?php
							$sql3 = mysqli_query($conn, "select * from tbl_placement_updates ORDER BY id DESC LIMIT 0, 6");
							while ($row3 = mysqli_fetch_array($sql3)) {
								?>
								<li>
									<?php echo $row3['description']; ?>
								</li>
								<?php
							} ?>
						</ul>
						<a class="main-read-button" href="placement-updates.php">View More <i
								class="icon icon-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<style>
		.celebrity img {

			width: 336px;
			height: 496px;
		}

		@media (max-width: 1200px) and (max-width: 782px) {

			.celebrity img {

				width: 336px;
				height: 496px;
			}


		}
	</style>
	<section>
		<div class="container">
			<div class="celebtitlediv">
				<p class="celebtitlepara">CELEBRITIES @ GIMS</p>
			</div>
			<div class="celebslider celebrity">

				<div>
					<div class="celebitem">
						<img src="img/new-celebrity/aman-gupta.webp?v=1" alt="MR.SHUBHANKAR MISHRA">
						<div class="viewPart">
							<!-- <a href="https://www.youtube.com/shorts/r4ir1RUvXIA?feature=share" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></a> -->
							<!-- <a href="https://www.gniotgroup.edu.in/life@gniot/new-academic-year-with-star-studded-orientation-program.html" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></a> -->
						</div>
						<div class="evntinfo">
							<p class="celebName">Aman Gupta</p>
							<!-- <p class="eventName">The Freshers Party</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>14 DEC 2024</p> -->
						</div>
					</div>
				</div>

				<div>
					<div class="celebitem">
						<img src="img/new-celebrity/dr-ujjwal-patni.webp?v=1" alt="MR.SHUBHANKAR MISHRA">
						<div class="viewPart">
							<!-- <a href="https://www.youtube.com/shorts/r4ir1RUvXIA?feature=share" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></a> -->
							<!-- <a href="https://www.gniotgroup.edu.in/life@gniot/new-academic-year-with-star-studded-orientation-program.html" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></a> -->
						</div>
						<div class="evntinfo">
							<p class="celebName">Dr.Ujjwal Patni</p>
							<!-- <p class="eventName">The Freshers Party</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>14 DEC 2024</p> -->
						</div>
					</div>
				</div>

				<div>
					<div class="celebitem">
						<img src="img/new-celebrity/khan-sir.webp?v=1" alt="MR.SHUBHANKAR MISHRA">
						<div class="viewPart">
							<!-- <a href="https://www.youtube.com/shorts/r4ir1RUvXIA?feature=share" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></a> -->
							<!-- <a href="https://www.gniotgroup.edu.in/life@gniot/new-academic-year-with-star-studded-orientation-program.html" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></a> -->
						</div>
						<div class="evntinfo">
							<p class="celebName">Khan Sir</p>
							<!-- <p class="eventName">The Freshers Party</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>14 DEC 2024</p> -->
						</div>
					</div>
				</div>

				<div>
					<div class="celebitem">
						<img src="img/new-celebrity/manoj-tiwari.webp?v=1" alt="MR.SHUBHANKAR MISHRA">
						<div class="viewPart">
							<!-- <a href="https://www.youtube.com/shorts/r4ir1RUvXIA?feature=share" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></a> -->
							<!-- <a href="https://www.gniotgroup.edu.in/life@gniot/new-academic-year-with-star-studded-orientation-program.html" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></a> -->
						</div>
						<div class="evntinfo">
							<p class="celebName">Manoj Tiwari</p>
							<!-- <p class="eventName">The Freshers Party</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>14 DEC 2024</p> -->
						</div>
					</div>
				</div>

				<div>
					<div class="celebitem">
						<img src="img/new-celebrity/pawan-singh.webp?v=1" alt="MR.SHUBHANKAR MISHRA">
						<div class="viewPart">
							<!-- <a href="https://www.youtube.com/shorts/r4ir1RUvXIA?feature=share" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></a> -->
							<!-- <a href="https://www.gniotgroup.edu.in/life@gniot/new-academic-year-with-star-studded-orientation-program.html" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></a> -->
						</div>
						<div class="evntinfo">
							<p class="celebName">Pawan Singh</p>
							<!-- <p class="eventName">The Freshers Party</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>14 DEC 2024</p> -->
						</div>
					</div>
				</div>

				<div>
					<div class="celebitem">
						<img src="img/new-celebrity/saurabh-dwivedi.webp?v=1" alt="MR.SHUBHANKAR MISHRA">
						<div class="viewPart">
							<!-- <a href="https://www.youtube.com/shorts/r4ir1RUvXIA?feature=share" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></a> -->
							<!-- <a href="https://www.gniotgroup.edu.in/life@gniot/new-academic-year-with-star-studded-orientation-program.html" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></a> -->
						</div>
						<div class="evntinfo">
							<p class="celebName">Saurabh Dwivedi</p>
							<!-- <p class="eventName">The Freshers Party</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>14 DEC 2024</p> -->
						</div>
					</div>
				</div>

				<div>
					<div class="celebitem">
						<img src="img/celebrity/mr-shubhankar-mishra.webp?v=1" alt="MR.SHUBHANKAR MISHRA">
						<div class="viewPart">
							<!-- <a href="https://www.youtube.com/shorts/r4ir1RUvXIA?feature=share" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></a> -->
							<!-- <a href="https://www.gniotgroup.edu.in/life@gniot/new-academic-year-with-star-studded-orientation-program.html" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></a> -->
						</div>
						<div class="evntinfo">
							<p class="celebName">Shubhankar Mishra</p>
							<!-- <p class="eventName">The Freshers Party</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>14 DEC 2024</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/new-celebrity/gaurav-taneja.webp?v=1" alt="MR.ANUBHAV DUBEY">
						<div class="viewPart">
							<!-- <a href="https://www.youtube.com/shorts/r4ir1RUvXIA?feature=share" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></a> -->
							<!-- <a href="https://www.gniotgroup.edu.in/life@gniot/new-academic-year-with-star-studded-orientation-program.html" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></a> -->
						</div>
						<div class="evntinfo">
							<p class="celebName">Gaurav Taneja</p>
							<!-- <p class="eventName">The Freshers Party</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>14 DEC 2024</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/new-celebrity/mr-akash-gupta.webp" alt="MR.AKASH GUPTA">
						<div class="viewPart">
							<!-- <a href="https://www.youtube.com/shorts/r4ir1RUvXIA?feature=share" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></a> -->
							<!-- <a href="https://www.gniotgroup.edu.in/life@gniot/new-academic-year-with-star-studded-orientation-program.html" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></a> -->
						</div>
						<div class="evntinfo">
							<p class="celebName">Akash Gupta</p>
							<!-- <p class="eventName">The Freshers Party</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>14 DEC 2024</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/new-celebrity/mr-anubhav-dubey.webp?v=1" alt="MR.ANUBHAV DUBEY">
						<div class="viewPart">
							<!-- <a href="https://www.youtube.com/shorts/r4ir1RUvXIA?feature=share" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></a> -->
							<!-- <a href="https://www.gniotgroup.edu.in/life@gniot/new-academic-year-with-star-studded-orientation-program.html" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></a> -->
						</div>
						<div class="evntinfo">
							<p class="celebName">Anubhav Dubey</p>
							<!-- <p class="eventName">The Freshers Party</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>14 DEC 2024</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/celebrity/manoj-muntashir.webp?v=1" alt="Manoj Muntashir">
						<div class="viewPart">
							<a href="https://www.youtube.com/shorts/r4ir1RUvXIA?feature=share" target="_blank"
								class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube">
									<path
										d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
									<path d="m10 15 5-3-5-3z" />
								</svg></a>
							<a href="https://www.gniotgroup.edu.in/life@gniot/new-academic-year-with-star-studded-orientation-program.html"
								target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18"
									height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
									<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
									<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
								</svg></a>
						</div>
						<div class="evntinfo">
							<p class="celebName">Manoj Muntashir</p>
							<!-- <p class="eventName">Orientation Program Of B-TECH 2024</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>6 SEPT 2024</p> -->
						</div>
					</div>
				</div>

				<div>
					<div class="celebitem">
						<img src="https://www.gniotgroup.edu.in/img/celebrity/dr-sudhanshu-trivedi.webp?v=1"
							alt="dr-sudhanshu-trivedi">
						<div class="viewPart">
							<a href="https://www.youtube.com/live/HennrCazpS8?si=XLp10l-0g0sxSu-t" target="_blank"
								class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube">
									<path
										d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
									<path d="m10 15 5-3-5-3z" />
								</svg></a>
							<a href="https://www.gniotgroup.edu.in/life@gniot/ai-conclave-2025-gniot-and-dainik-jagran-unite-minds-on-ai-and-cyber-law.html"
								target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18"
									height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
									<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
									<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
								</svg></a>
						</div>
						<div class="evntinfo">
							<p class="celebName">Dr. Sudhanshu Trivedi</p>
							<!-- <p class="eventName">The Freshers Party</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>14 DEC 2024</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/celebrity/rashmeet-kaur.webp?v=1" alt="Rashmeet Kaur">
						<div class="viewPart">
							<!-- <a href="https://www.youtube.com/shorts/r4ir1RUvXIA?feature=share" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></a> -->
							<!-- <a href="https://www.gniotgroup.edu.in/life@gniot/new-academic-year-with-star-studded-orientation-program.html" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></a> -->
						</div>
						<div class="evntinfo">
							<p class="celebName">Rashmeet Kaur</p>
							<!-- <p class="eventName">The Freshers Party</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>14 DEC 2024</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/celebrity/rubika-liyaquat.webp?v=1" alt="Rubika Liyaquat">
						<div class="viewPart">
							<a href="https://youtu.be/G4P5Isptxjo" target="_blank" class="viewPartlink"><svg
									xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" class="lucide lucide-youtube">
									<path
										d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
									<path d="m10 15 5-3-5-3z" />
								</svg></a>
							<a href="https://www.gniotgroup.edu.in/life@gniot/new-academic-year-with-star-studded-orientation-program.html"
								target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18"
									height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
									<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
									<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
								</svg></a>
						</div>
						<div class="evntinfo">
							<p class="celebName">Rubika Liyaquat</p>
							<!-- <p class="eventName">Orientation Program Of B-TECH 2024</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>6 SEPT 2024</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/celebrity/rupali-jagga.webp?v=1" alt="RUPALI JAGGA">
						<div class="viewPart">
							<a href="https://youtube.com/shorts/3ciUNVaJHSc?feature=share" target="_blank"
								class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube">
									<path
										d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
									<path d="m10 15 5-3-5-3z" />
								</svg></a>
							<a href="https://www.gims.net.in/fresher-party-2024-with-rupali-jagga-live.html"
								target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18"
									height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
									<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
									<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
								</svg></a>
						</div>
						<div class="evntinfo">
							<p class="celebName">Rupali Jagga</p>
							<!-- <p class="eventName">FRESHERS PARTY PGDM 2024 </p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>16 OCT 2024</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/celebrity/jaya-kishori.webp?v=1" alt="Gaurav Arya">
						<div class="viewPart">
							<a href="https://www.youtube.com/@gniotinstituteofmanagement9121" target="_blank"
								class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube">
									<path
										d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
									<path d="m10 15 5-3-5-3z" />
								</svg></a>
							<a href="https://www.gims.net.in/life-at-gims/hosted-meraki-2024.html" target="_blank"
								class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
									<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
									<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
								</svg></a>
						</div>
						<div class="evntinfo">
							<p class="celebName">Jaya Kishori</p>
							<!-- <p class="eventName">Spiritual & Motivational Speaker</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>June 27, 2024</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/new-celebrity/gaurav-arya.webp?v=1" alt="Gaurav Arya">
						<div class="viewPart">
							<a href="https://www.youtube.com/@gniotinstituteofmanagement9121" target="_blank"
								class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube">
									<path
										d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
									<path d="m10 15 5-3-5-3z" />
								</svg></a>
							<a href="https://www.gims.net.in/life-at-gims/hosted-meraki-2024.html" target="_blank"
								class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
									<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
									<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
								</svg></a>
						</div>
						<div class="evntinfo">
							<p class="celebName">Major Gaurav Arya</p>
							<!-- <p class="eventName">Indian Army Veteran & Public Speaker</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>June 27, 2024</p> -->
						</div>
					</div>
				</div>


				<div>
					<div class="celebitem">
						<img src="img/celebrity/ashish-vidyarthi.webp?v=1" alt="Ashish Vidyarthi">
						<div class="viewPart">
							<a href="https://youtu.be/63F3BerExDY?t=123" target="_blank" class="viewPartlink"><svg
									xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" class="lucide lucide-youtube">
									<path
										d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
									<path d="m10 15 5-3-5-3z" />
								</svg></a>
							<!-- <a href="#" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></a> -->
						</div>
						<div class="evntinfo">
							<p class="celebName">Ashish Vidyarthi</p>
							<!-- <p class="eventName">The Induction Programme</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>August 19, 2023</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/celebrity/ashneer.webp?v=1" alt="Ashneer Grover">
						<div class="viewPart">
							<a href="https://youtu.be/r7lGpMcrl5w?t=252" target="_blank" class="viewPartlink"><svg
									xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" class="lucide lucide-youtube">
									<path
										d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
									<path d="m10 15 5-3-5-3z" />
								</svg></a>
							<a href="https://www.gims.net.in/life-at-gims/the-orientation-program-meraki-2023.html"
								target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18"
									height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
									<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
									<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
								</svg></a>
						</div>
						<div class="evntinfo">
							<p class="celebName">Ashneer Grover</p>
							<!-- <p class="eventName">The Orientation Program</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>June 30, 2023</p> -->
						</div>
					</div>
				</div>
				<!-- <div>
						<div class="celebitem">
							<img src="img/celebrity/panther.webp?v=1"alt="Panther">
							<div class="viewPart">
								<a href="https://youtu.be/TcCLASni_Jo?t=312" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></a>
								<a href="https://www.gims.net.in/life-at-gims/the-farewell-party-organized-by-gims-pgdm-batch-2022-24-.html" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></a>
							</div>
							<div class="evntinfo">
								<p class="celebName">Anubhav Shukla (Panther)</p>
								<p class="eventName">The Farewell Party</p>
								<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg>April 15, 2023</p>
							</div>
						</div>
					</div> -->
				<div>
					<div class="celebitem">
						<img src="img/celebrity/madhavas-band.jpg?v=1" alt="Panther">
						<div class="viewPart">
							<a href="https://youtu.be/dAdGeV88-9Y?t=103" target="_blank" class="viewPartlink"><svg
									xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" class="lucide lucide-youtube">
									<path
										d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
									<path d="m10 15 5-3-5-3z" />
								</svg></a>
							<a href="https://www.gniotgroup.edu.in/life%40gniot/founder-s-day.html" target="_blank"
								class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
									<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
									<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
								</svg></a>
						</div>
						<div class="evntinfo">
							<p class="celebName">Madhavas Rock Band</p>
							<!-- <p class="eventName">Founder's Day</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>18 February, 2021</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/celebrity/pranjal-dahiya.webp?v=1" alt="Pranjal Dahiya">
						<div class="viewPart">
							<a href="https://youtu.be/63F3BerExDY?t=270" target="_blank" class="viewPartlink"><svg
									xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" class="lucide lucide-youtube">
									<path
										d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
									<path d="m10 15 5-3-5-3z" />
								</svg></a>
							<a href="https://www.gims.net.in/life-at-gims/freshers-party-pranjal-dahiya.html"
								target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18"
									height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
									<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
									<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
								</svg></a>
						</div>
						<div class="evntinfo">
							<p class="celebName">Pranjal Dahiya</p>
							<!-- <p class="eventName">The Fresher's Party</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>August 19, 2023</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/celebrity/amit-mishra.jpg?v=1" alt="Amit Mishra">
						<div class="viewPart">
							<a href="https://www.youtube.com/watch?v=eSl02bo65cU" target="_blank"
								class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube">
									<path
										d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
									<path d="m10 15 5-3-5-3z" />
								</svg></a>
							<a href="https://www.gniotgroup.edu.in/life@gniot/gniot-fresher-party-2023-unforgettable-night-of-music-and-celebrations.html"
								target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18"
									height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
									<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
									<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
								</svg></a>
						</div>
						<div class="evntinfo">
							<p class="celebName">Amit Mishra</p>
							<!-- <p class="eventName">The Fresher's Party</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>22 December, 2023</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/celebrity/sanjay-mishra.jpg?v=1" alt="Sanjay Mishra">
						<div class="viewPart">
							<a href="https://youtu.be/9cG_ZyWJBNk?t=11689" target="_blank" class="viewPartlink"><svg
									xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" class="lucide lucide-youtube">
									<path
										d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
									<path d="m10 15 5-3-5-3z" />
								</svg></a>
							<a href="https://www.gniotgroup.edu.in/life@gniot/abhyudaya-2023-orientation-program-2023.html"
								target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18"
									height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
									<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
									<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
								</svg></a>
						</div>
						<div class="evntinfo">
							<p class="celebName">Sanjay Mishra</p>
							<!-- <p class="eventName">Abhyudaya</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>6 October, 2023</p> -->
						</div>
					</div>
				</div>
				<!-- <div>
						<div class="celebitem">
							<img src="img/celebrity/veronica-rajput.jpg?v=1" alt="Veronica Rajput">
							<div class="viewPart">
								<a href="https://youtu.be/Ci9k5AsKIBM?t=231" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></a>
								<a href="https://www.gniotgroup.edu.in/freshers-party-2022.html" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></a>
							</div>
							<div class="evntinfo">
								<p class="celebName">DJ Veronica Rajput</p>
								<p class="eventName">The Fresher's Party</p>
								<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg>30 December, 2022</p>
							</div>
						</div>
					</div> -->
				<div>
					<div class="celebitem">
						<img src="img/celebrity/harshvardhan-jain.jpg?v=1" alt="Harshvardhan Jain">
						<div class="viewPart">
							<!-- <a href="#" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></a> -->
							<a href="https://www.gims.net.in/mr-harshvardhan-jain-to-meraki.html" target="_blank"
								class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
									<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
									<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
								</svg></a>
						</div>
						<div class="evntinfo">
							<p class="celebName">Harshvardhan Jain</p>
							<!-- <p class="eventName">MERAKI</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>6 July, 2022</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/new-celebrity/awadh-ojaha.webp?v=1" alt="Avadh Ojha">
						<div class="viewPart">
							<a href="https://youtu.be/KzD4k1EiFUw?t=4855" target="_blank" class="viewPartlink"><svg
									xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" class="lucide lucide-youtube">
									<path
										d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
									<path d="m10 15 5-3-5-3z" />
								</svg></a>
							<a href="https://www.gniotgroup.edu.in/avadh-pratap-ojha-empezar-2023.html" target="_blank"
								class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
									<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
									<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
								</svg></a>
						</div>
						<div class="evntinfo">
							<p class="celebName">Avadh Pratap Ojha</p>
							<!-- <p class="eventName">The Orientation Program EMPEZAR</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>11 September, 2023</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/celebrity/himeesh-madaan.webp?v=1" alt="Himeesh Madaan">
						<div class="viewPart">
							<a href="https://youtu.be/iovNwlmkldo?t=150" target="_blank" class="viewPartlink"><svg
									xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" class="lucide lucide-youtube">
									<path
										d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
									<path d="m10 15 5-3-5-3z" />
								</svg></a>
							<a href="https://www.gniotgroup.edu.in/gips-orientation-program-2023.html" target="_blank"
								class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
									<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
									<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
								</svg></a>
						</div>
						<div class="evntinfo">
							<p class="celebName">Himeesh Madaan</p>
							<!-- <p class="eventName">GIPS Orientation Program -ARABDHA</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>12 September, 2023</p> -->
						</div>
					</div>
				</div>
				<div>
					<div class="celebitem">
						<img src="img/new-celebrity/sonu-sharma.webp?v=1" alt="Sonu Sharma">
						<div class="viewPart">
							<a href="https://youtu.be/ffS2Wh82q1s?t=5029" target="_blank" class="viewPartlink"><svg
									xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" class="lucide lucide-youtube">
									<path
										d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
									<path d="m10 15 5-3-5-3z" />
								</svg></a>
							<a href="https://www.gniotgroup.edu.in/abhyuday-2022.html" target="_blank"
								class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
									<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
									<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
								</svg></a>
						</div>
						<div class="evntinfo">
							<p class="celebName">Sonu Sharma</p>
							<!-- <p class="eventName">ABHYUDAY 2022</p>
							<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
									<rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
									<line x1="16" x2="16" y1="2" y2="6" />
									<line x1="8" x2="8" y1="2" y2="6" />
									<line x1="3" x2="21" y1="10" y2="10" />
									<path d="M8 14h.01" />
									<path d="M12 14h.01" />
									<path d="M16 14h.01" />
									<path d="M8 18h.01" />
									<path d="M12 18h.01" />
									<path d="M16 18h.01" />
								</svg>10 October, 2022</p> -->
						</div>
					</div>
				</div>
				<!-- <div>
						<div class="celebitem">
							<img src="img/celebrity/anuraag-muskaan.webp?v=1"alt="Anuraag Muskaan">
							<div class="viewPart">
								<a href="https://youtu.be/iovNwlmkldo?t=115" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></a>
								<a href="https://www.gniotgroup.edu.in/gips-orientation-program-2023.html" target="_blank" class="viewPartlink"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></a>
							</div>
							<div class="evntinfo">
								<p class="celebName"> Anuraag Muskaan</p>
								<p class="eventName">GIPS Orientation Program -ARABDHA</p>
								<p class="eventDate"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg>12 September, 2023</p>
							</div>
						</div>
					</div> -->
			</div>

		</div>
	</section>





	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- <span class="shadowtext">What Our Student Say</span> -->
					<h2 class="paget">Mentorship with Corporate Groups</h2>
					<h3 class="subpaget">Mentorship with Corporate Groups About - GIMS, Greater Noida</h3>
				</div>
				<div id="studentcarousel" class="carousel slide clubscaro" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<div class="row no-margin pd10">
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/student-review/ashish-kumar.jpg" alt="Ashish Kumar"
											class="professorpic">
										<div class="stu-slider-name position-static">
											<h3>Mr. Ashish Kumar</h3>
											<p>Service Delivery Manager, TCS <br>Mentor of Change- ATL(NITI Aayog)</p>


										</div>
										<a href="mr-ashish-kumar.php" class="st-read-more">Read More <svg
												xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px"
												y="0px" viewBox="0 0 227.096 227.096"
												style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve"
												class="svg readm replaced-svg">
												<g>
													<g>
														<polygon style="fill:#010002;"
															points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723 146.933,181.902 152.835,187.811 227.096,113.55">
														</polygon>
													</g>
												</g>
											</svg></a>
									</div>
								</div>
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/student-review/harsh-raghuvanshi.jpg" alt="Mr. Harsh Raghuvanshi"
											class="professorpic">
										<div class="stu-slider-name position-static">
											<h3>Mr. Harsh <br>Raghubanshi</h3>
											<p>EX- Assistant Manager, <br>Aditya Birla Group</p>


										</div>
										<a href="harsh-raghuvanshi.php" class="st-read-more">Read More <svg
												xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px"
												y="0px" viewBox="0 0 227.096 227.096"
												style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve"
												class="svg readm replaced-svg">
												<g>
													<g>
														<polygon style="fill:#010002;"
															points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723 146.933,181.902 152.835,187.811 227.096,113.55">
														</polygon>
													</g>
												</g>
											</svg></a>
									</div>
								</div>


								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/student-review/shivani-sharma-singh.jpg"
											alt="Ms. Shivani Sharma Singh" class="professorpic">
										<div class="stu-slider-name position-static">
											<h3>Ms. Shivani Sharma Singh</h3>
											<p>National Head Govt Project, <br>LG Electronics</p>


										</div>
										<a href="shivani-sharma-singh.php" class="st-read-more">Read More <svg
												xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px"
												y="0px" viewBox="0 0 227.096 227.096"
												style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve"
												class="svg readm replaced-svg">
												<g>
													<g>
														<polygon style="fill:#010002;"
															points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723 146.933,181.902 152.835,187.811 227.096,113.55">
														</polygon>
													</g>
												</g>
											</svg></a>
									</div>

								</div>
							</div>

						</div>

						<div class="item">
							<div class="row no-margin pd10">
								<!-- Card 1 -->
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/student-review/harsh-raj-jain.jpg" alt="Mr. Harsh Raj Jain"
											class="professorpic">
										<div class="stu-slider-name position-static">
											<h3>Mr. Harsh Raj Jain</h3>
											<p>Talent Acquisition Head <br>APAC & India Campus Lead, <br>Ebixcash</p>
										</div>
										<a href="harsh-raj-jain.php" class="st-read-more">Read More
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 227.096 227.096"
												class="svg readm replaced-svg">
												<g>
													<polygon style="fill:#010002;"
														points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723 146.933,181.902 152.835,187.811 227.096,113.55">
													</polygon>
												</g>
											</svg>
										</a>
									</div>
								</div>

								<!-- Card 2 -->
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/banner/priti-goel.webp" alt="Ms. Priti Goel" class="professorpic">
										<div class="stu-slider-name position-static">
											<h3>Ms. Priti Goel</h3>
											<p>Founder, CEO and MD, <br>Prisha Wealth Management Private Limited</p>
										</div>
										<a href="ms-priti-goel.php" class="st-read-more">Read More
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 227.096 227.096"
												class="svg readm replaced-svg">
												<g>
													<polygon style="fill:#010002;"
														points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723 146.933,181.902 152.835,187.811 227.096,113.55">
													</polygon>
												</g>
											</svg>
										</a>
									</div>
								</div>

								<!-- Card 3 -->
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/banner/mr-sandeep-kumar-rastogi.webp"
											alt="Mr. Sandeep Kumar Rastogi" class="professorpic">
										<div class="stu-slider-name position-static">
											<h3>Mr. Sandeep Kumar Rastogi</h3>
											<p>Senior VP Growth Financing, <br>GoKwik Commerce Solutions Pvt. Ltd.</p>
										</div>
										<a href="mr-sandeep-kumar-rastogi.php" class="st-read-more">Read More
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 227.096 227.096"
												class="svg readm replaced-svg">
												<g>
													<polygon style="fill:#010002;"
														points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723 146.933,181.902 152.835,187.811 227.096,113.55">
													</polygon>
												</g>
											</svg>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item ">
							<div class="row no-margin pd10">
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/banner/himanshu-jessie-wadia.webp" alt="Himanshu Jessie Wadia"
											class="professorpic">
										<div class="stu-slider-name position-static">
											<h3>Mr. Himanshu Jessie Wadia</h3>
											<p>Director IT Infrastructure & BSS, <br>Amdocs</p>


										</div>
										<a href="himanshu-jessie-wadia.php" class="st-read-more">Read More <svg
												xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px"
												y="0px" viewBox="0 0 227.096 227.096"
												style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve"
												class="svg readm replaced-svg">
												<g>
													<g>
														<polygon style="fill:#010002;"
															points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723 146.933,181.902 152.835,187.811 227.096,113.55">
														</polygon>
													</g>
												</g>
											</svg></a>
									</div>
								</div>
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/banner/nitin-kalra-pc.webp" alt="Mr. Harsh Raghuvanshi"
											class="professorpic">
										<div class="stu-slider-name position-static">
											<h3>Mr. Nitin Kalra</h3>
											<p>AGM-HR, North Zone FM India Supply Chain Private Limited</p>


										</div>
										<a href="nitin-kalra.php" class="st-read-more">Read More <svg
												xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px"
												y="0px" viewBox="0 0 227.096 227.096"
												style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve"
												class="svg readm replaced-svg">
												<g>
													<g>
														<polygon style="fill:#010002;"
															points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723 146.933,181.902 152.835,187.811 227.096,113.55">
														</polygon>
													</g>
												</g>
											</svg></a>
									</div>
								</div>


								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/banner/ramit-passport-snap.webp" alt="Ms. Shivani Sharma Singh"
											class="professorpic">
										<div class="stu-slider-name position-static">
											<h3>Mr. Ramit Tyagi</h3>
											<p>Director, Talent Acquisition <br>India, UKG(Ultimate Kronos Group)</p>


										</div>
										<a href="ramit-tyagi.php" class="st-read-more">Read More <svg
												xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px"
												y="0px" viewBox="0 0 227.096 227.096"
												style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve"
												class="svg readm replaced-svg">
												<g>
													<g>
														<polygon style="fill:#010002;"
															points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723 146.933,181.902 152.835,187.811 227.096,113.55">
														</polygon>
													</g>
												</g>
											</svg></a>
									</div>

								</div>

							</div>

						</div>
						<div class="item">
							<div class="row no-margin pd10">
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/banner/rishika.webp" alt="Rishika Verma Vohra"
											class="professorpic">
										<div class="stu-slider-name position-static">
											<h3>Ms. Rishika Verma Vohra</h3>
											<p>Manager - Talent Acquisition (Campus Recruitment),
												BluSmart</p>
										</div>
										<a href="rishika-verma-vohra.php" class="st-read-more">Read More
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 227.096 227.096"
												class="svg readm replaced-svg">
												<g>
													<polygon style="fill:#010002;"
														points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723 146.933,181.902 152.835,187.811 227.096,113.55">
													</polygon>
												</g>
											</svg>
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/banner/himanshu-shuklaa.webp" alt="Himanshu Shuklaa"
											class="professorpic">
										<div class="stu-slider-name position-static">
											<h3>Mr. Himanshu Shuklaa</h3>
											<p>General Manager, JIO <br>Platforms Limited</p>


										</div>
										<a href="himanshu-shuklaa.php" class="st-read-more">Read More <svg
												xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px"
												y="0px" viewBox="0 0 227.096 227.096"
												style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve"
												class="svg readm replaced-svg">
												<g>
													<g>
														<polygon style="fill:#010002;"
															points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723 146.933,181.902 152.835,187.811 227.096,113.55">
														</polygon>
													</g>
												</g>
											</svg></a>
									</div>

								</div>
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/banner/shweta.webp" alt="Shaweta Berry" class="professorpic">
										<div class="stu-slider-name position-static">
											<h3>Ms. Shaweta Berry</h3>
											<p>VP of Marketing, Mahanadaya Universal Consultancy Private Limited</p>


										</div>
										<a href="shaweta-berry.php" class="st-read-more">Read More <svg
												xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px"
												y="0px" viewBox="0 0 227.096 227.096"
												style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve"
												class="svg readm replaced-svg">
												<g>
													<g>
														<polygon style="fill:#010002;"
															points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723 146.933,181.902 152.835,187.811 227.096,113.55">
														</polygon>
													</g>
												</g>
											</svg></a>
									</div>

								</div>

							</div>
						</div>
					</div>


					<div class="controller">
						<a class="leftcontrol" href="#studentcarousel" data-slide="prev">
							<svg viewBox="0 0 256 256">
								<polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round"
									stroke-linecap="round" points="184,16 72,128 184,240"></polyline>
							</svg>
						</a>
						<a class="rightcontrol" href="#studentcarousel" data-slide="next">
							<svg viewBox="0 0 256 256">
								<polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round"
									stroke-linecap="round" points="72,16 184,128 72,240"></polyline>
							</svg>
						</a>
					</div>
					<div style="display: flex; justify-content: center; align-items: center;">
						<a href="mentorship-corporate-groups.php" target="_blank" class="reambtn homebtn">View More <svg
								xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096"
								style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve"
								class="svg readm replaced-svg">
								<g>
									<g>
										<polygon style="fill:#010002;"
											points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   ">
										</polygon>
									</g>
								</g>
							</svg>
						</a>
					</div>




				</div>

			</div>
		</div>
		</div>
	</section>






	<section class="section pattern-bg">
		<div class="container">
			<div class="row no-margin">
				<div class="col-lg-12">
					<!-- <span class="shadowtext">Corporate Resource Centre</span> -->
					<h2 class="paget">Corporate Resource Centre</h2>
					<h3 class="subpaget">Corporate Resource Centre of GIMS, Greater Noida</h3>
				</div>
				<div class="col-lg-4 yellowhome phonebtmmrg">
					<h2 class="ymaint"><svg xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px"
							viewBox="0 0 481.072 481.072"
							style="enable-background:new 0 0 481.072 481.072;width: 29px;margin-right: 5px;"
							xml:space="preserve" class="svg replaced-svg">
							<g>
								<g>
									<path
										d="M455.078,0h-208c-13.232,0-24,10.768-24,24v128c0,4.416,3.576,8,8,8s8-3.584,8-8V24c0-4.408,3.584-8,8-8h160v304    c0,4.416,3.576,8,8,8s8-3.584,8-8V16h32c4.416,0,8,3.592,8,8v344c0,4.408-3.584,8-8,8h-80V72c0-4.416-3.576-8-8-8s-8,3.584-8,8    v304h-64c-4.424,0-8,3.584-8,8c0,4.416,3.576,8,8,8h160c13.232,0,24-10.768,24-24V24C479.078,10.768,468.31,0,455.078,0z">
									</path>
								</g>
							</g>
							<g>
								<g>
									<path
										d="M311.078,40c-4.424,0-8,3.584-8,8v64c0,4.416,3.576,8,8,8s8-3.584,8-8V48C319.078,43.584,315.502,40,311.078,40z">
									</path>
								</g>
							</g>
							<g>
								<g>
									<path
										d="M311.078,144c-4.424,0-8,3.584-8,8v24c0,4.416,3.576,8,8,8s8-3.584,8-8v-24C319.078,147.584,315.502,144,311.078,144z">
									</path>
								</g>
							</g>
							<g>
								<g>
									<circle cx="335.078" cy="224" r="8"></circle>
								</g>
							</g>
							<g>
								<g>
									<circle cx="335.078" cy="256" r="8"></circle>
								</g>
							</g>
							<g>
								<g>
									<circle cx="335.078" cy="288" r="8"></circle>
								</g>
							</g>
							<g>
								<g>
									<circle cx="335.078" cy="320" r="8"></circle>
								</g>
							</g>
							<g>
								<g>
									<path
										d="M80.51,48h-1.432h-16V32c0-4.416-3.576-8-8-8s-8,3.584-8,8v16H32.51h-1.432c-4.424,0-8,3.584-8,8s3.576,8,8,8h1.432    h14.568v16c0,4.416,3.576,8,8,8s8-3.584,8-8V64h16h1.432c4.424,0,8-3.584,8-8S84.934,48,80.51,48z">
									</path>
								</g>
							</g>
							<g>
								<g>
									<path
										d="M294.886,202.424l-141.12-49.96c-1.736-0.608-3.608-0.608-5.344,0L7.318,202.416c-3.28,1.168-5.44,4.328-5.32,7.808    c0.088,2.728,2.432,67.52,21.216,133.48c25.6,89.864,69.816,137.368,127.888,137.368c58.744,0,103.168-47.504,128.496-137.384    c18.584-65.976,20.536-130.784,20.616-133.504C300.31,206.712,298.15,203.584,294.886,202.424z M151.102,465.072    c-112.6,0-130.504-211.496-132.816-249.56l132.816-47.024l132.856,47.032C281.894,253.48,265.222,465.072,151.102,465.072z">
									</path>
								</g>
							</g>
							<g>
								<g>
									<path
										d="M262.894,226.816l-108.912-42.088c-1.856-0.72-3.904-0.72-5.768,0L39.31,226.816c-3.168,1.224-5.216,4.32-5.112,7.72    c0.288,8.896,8.248,217.92,116.904,217.92c109.928,0,116.68-209.072,116.912-217.968    C268.102,231.104,266.054,228.032,262.894,226.816z M151.102,436.456c-84.376,0-98.624-164.064-100.616-196.808l100.616-38.88    l100.664,38.896C249.966,272.32,236.638,436.456,151.102,436.456z">
									</path>
								</g>
							</g>
							<g>
								<g>
									<path
										d="M150.638,256.648c-34.016,0-61.688,27.672-61.688,61.68s27.672,61.68,61.688,61.68c34.008,0,61.68-27.672,61.68-61.68    S184.646,256.648,150.638,256.648z M150.638,364c-25.192,0-45.688-20.496-45.688-45.68c0-25.184,20.496-45.68,45.688-45.68    c25.184,0,45.68,20.496,45.68,45.68C196.318,343.504,175.822,364,150.638,364z">
									</path>
								</g>
							</g>
							<g>
								<g>
									<path
										d="M178.39,299.264c-3.336-2.864-8.384-2.544-11.28,0.808l-19.744,22.968l-7.832-8.976c-2.904-3.336-7.976-3.68-11.288-0.76    c-3.328,2.904-3.664,8.152-0.76,11.48l13.904,16.096c1.512,1.736,3.72,3.12,6.024,3.12c0.008,0,0.024,0,0.032,0    c2.328,0,4.52-1.408,6.04-3.168l25.76-30.192C182.118,307.288,181.742,302.144,178.39,299.264z">
									</path>
								</g>
							</g>
							<g>
								<g>
									<circle cx="150.67" cy="230.824" r="7.592"></circle>
								</g>
							</g>
							<g>
								<g>
									<circle cx="150.67" cy="406.824" r="7.592"></circle>
								</g>
							</g>
						</svg>Placement <span>Stats</span></h2>

					<div class="row no-margin">
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">WIPRO</h2>
							<h3 class="left3">01 Students Placed</h3>
						</div>
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">RADISSON BLU</h2>
							<h3 class="left3">03 Students Placed</h3>
						</div>

					</div>

					<div class="row no-margin">
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">INFOEDGE</h2>
							<h3 class="left3">01 Students Placed</h3>
						</div>
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">DELOITTE</h2>
							<h3 class="left3">02 Students Placed</h3>
						</div>
					</div>

					<div class="row no-margin">

						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">ACCENTURE</h2>
							<h3 class="left3">01 Students Placed</h3>
						</div>
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">JLL INDIA</h2>
							<h3 class="left3">02 Students Placed</h3>
						</div>
					</div>

					<div class="row no-margin">
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">Decathlon</h2>
							<h3 class="left3">08 Students Placed</h3>
						</div>
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">CROMA</h2>
							<h3 class="left3">05 Students Placed</h3>
						</div>
					</div>

					<div class="row no-margin">
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">HCL</h2>
							<h3 class="left3">01 Students Placed</h3>
						</div>
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">KOTAK</h2>
							<h3 class="left3">02 Students Placed</h3>
						</div>
					</div>

					<div class="row no-margin">
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">NAB</h2>
							<h3 class="left3">02 Students Placed</h3>
						</div>
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">IDFC First Bank</h2>
							<h3 class="left3">37 Students Placed</h3>
						</div>
					</div>

					<div class="row no-margin">
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">Archer & Bull</h2>
							<h3 class="left3">04 Students Placed</h3>
						</div>
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">Barclays</h2>
							<h3 class="left3">06 Students Placed</h3>
						</div>
					</div>



					<div class="row no-margin">
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">UnoMinda</h2>
							<h3 class="left3">02 Students Placed</h3>
						</div>
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">Urban Company</h2>
							<h3 class="left3">02 Students Placed</h3>
						</div>
					</div>

					<div class="row no-margin">
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">ASIAN PAINTS</h2>
							<h3 class="left3">05 Students Placed</h3>
						</div>
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">NEROLAC</h2>
							<h3 class="left3">12 Students Placed</h3>
						</div>
					</div>

					<div class="row no-margin">
						<div class="col-lg-6 col-xs-6 col-sm-6 innerdiv1st">
							<h2 class="left2">KENT MINERAL RO</h2>
							<h3 class="left3">17 Students Placed</h3>
						</div>

					</div>
				</div>

				<!-- placement section in carousel -->
				<div class="col-lg-8 placediv">
					<div class="sliderdiv">
						<div id="facultycarousel3" class="carousel slide clubscaro" data-ride="carousel">
							<div class="carousel-inner">
								<!-- Added on 09-03-2026 -->
								<div class="item active">
									<div class="row">
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-62.webp"
													alt="" />
											</div>
										</div>

										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-133.webp"
													alt="" />
											</div>
										</div>

										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-90.webp"
													alt="" />
											</div>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="row">
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-70.webp"
													alt="" />
											</div>
										</div>

										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-118.webp"
													alt="" />
											</div>
										</div>

										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-130.webp"
													alt="" />
											</div>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="row">
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-162.webp"
													alt="" />
											</div>
										</div>

										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-113.webp"
													alt="" />
											</div>
										</div>

										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-128.webp"
													alt="" />
											</div>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="row">
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-137.webp"
													alt="" />
											</div>
										</div>

										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-116.webp"
													alt="" />
											</div>
										</div>

										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-154.webp"
													alt="" />
											</div>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="row">
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-77.webp"
													alt="" />
											</div>
										</div>
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-76.webp"
													alt="" />
											</div>
										</div>
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-123.webp"
													alt="" />
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="row">
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-115.webp"
													alt="" />
											</div>
										</div>
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-159.webp"
													alt="" />
											</div>
										</div>
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-139.webp"
													alt="" />
											</div>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="row">
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-67.webp"
													alt="" />
											</div>
										</div>
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-112.webp"
													alt="" />
											</div>
										</div>
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-209.webp"
													alt="" />
											</div>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="row">
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-134.webp"
													alt="" />
											</div>
										</div>
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-239.webp"
													alt="" />
											</div>
										</div>
										<div class="col-md-4">
											<div class="mt-0 text-center">
												<img src="img/student-img-2024/placement-2024-26/placement-2024-26-242.webp"
													alt="" />
											</div>
										</div>
									</div>
								</div>
							</div>


							<br />
							<div class="controller">
								<a class="leftcontrol" href="#facultycarousel3" data-slide="prev">
									<svg viewBox="0 0 256 256">
										<polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round"
											stroke-linecap="round" points="184,16 72,128 184,240"></polyline>
									</svg>
								</a>
								<a class="rightcontrol" href="#facultycarousel3" data-slide="next">
									<svg viewBox="0 0 256 256">
										<polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round"
											stroke-linecap="round" points="72,16 184,128 72,240"></polyline>
									</svg>
								</a>
							</div>
						</div>
					</div>

					<div class="row recruitinfo no-margin">
						<div class="no-padding col-sm-12">
							<a href="placement-record-2024-26.php" target="_blank" class="reambtn homebtn">View More
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
									version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096"
									style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve"
									class="svg readm replaced-svg">
									<g>
										<g>
											<polygon style="fill:#010002;"
												points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   ">
											</polygon>
										</g>
									</g>
								</svg>
							</a>
						</div>
					</div>

					<div class="placement-image text-center mt-4">
						<img src="img/placement-stat.webp" alt="Top Average Placements" class="img-fluid placementimg">
					</div>

					<!-- <div class="recruitinfo">
							<div id="facultycarousel4" class="carousel slide clubscaro" data-ride="carousel">
								<div class="carousel-inner">
									<div class="item active">
										<div class="col-xs-6 col-md-3">
											<img src="img/recruiters/property-pistol.jpg?v=1" alt="Property Pistol" class="logor byjus">
											<h4 class="lpa">23.31 LPA</h4>
											<h5 class="package">Package Offered</h5>
											<p class="comp"><strong>Property Pistol</strong></p>
										</div>
										<div class="col-xs-6 col-md-3">
											<img src="img/recruiters/khimji.jpg?v=1" alt="Khimji Ramdas Logo" class="logor byjus">
											<h4 class="lpa">17.55 LPA</h4>
											<h5 class="package">Package Offered</h5>
											<p class="comp"><strong>Khimji Ramdas</strong></p>
										</div>
										<div class="col-xs-6 col-md-3">
											<img src="img/recruiters/luminous-battery.jpg?v=1" alt="Luminous Battery Logo" class="logor byjus">
											<h4 class="lpa">15.00 LPA</h4>
											<h5 class="package">Package Offered</h5>
											<p class="comp"><strong>Luminous</strong></p>
										</div>
										<div class="col-xs-6 col-md-3">
											<img src="img/recruiters/federal-bank.jpg?v=1" alt="Federal Bank Logo" class="logor moca">
											<h4 class="lpa">12.56 LPA</h4>
											<h5 class="package">Package Offered</h5>
											<p class="comp"><strong>Federal Bank</strong></p>
										</div>
									</div>
									<div class="item">
										<div class="col-xs-6 col-md-3">
											<img src="img/recruiters/khimji.jpg?v=1" alt="Khimji Ramdas Logo" class="logor byjus">
											<h4 class="lpa">17.55 LPA</h4>
											<h5 class="package">Package Offered</h5>
											<p class="comp"><strong>Khimji Ramdas</strong></p>
										</div>
										<div class="col-xs-6 col-md-3">
											<img src="img/recruiters/luminous-battery.jpg?v=1" alt="Luminous Battery Logo" class="logor byjus">
											<h4 class="lpa">15.00 LPA</h4>
											<h5 class="package">Package Offered</h5>
											<p class="comp"><strong>Luminous</strong></p>
										</div>
										<div class="col-xs-6 col-md-3">
											<img src="img/recruiters/federal-bank.jpg?v=1" alt="Federal Bank Logo" class="logor moca">
											<h4 class="lpa">12.56 LPA</h4>
											<h5 class="package">Package Offered</h5>
											<p class="comp"><strong>Federal Bank</strong></p>
										</div> -->
					<!--<div class="col-xs-6 col-md-3">
											<img src="img/recruiters/byjus-logo.jpg?v=1" alt="Byjus Logo" class="logor byjus">
											<h4 class="lpa">10.00 LPA</h4>
											<h5 class="package">Package Offered</h5>
											<p class="comp"><strong>Byjus</strong></p>
										</div>-->
					<!-- <div class="col-xs-6 col-md-3">
											<img src="img/recruiters/satguru-travel.jpg?v=1" alt="Satguru Travel Logo" class="logor planetspark">
											<h4 class="lpa">8.49 LPA</h4>
											<h5 class="package">Package Offered</h5>
											<p class="comp"><strong>Satguru Travel</strong></p>
										</div>
									</div>
								</div>
								<br>
								<div class="controller">
									<a class="leftcontrol" href="#facultycarousel4" data-slide="prev">
										<svg viewBox="0 0 256 256"><polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round" stroke-linecap="round" points="184,16 72,128 184,240"></polyline></svg>
									</a>
									<a class="rightcontrol" href="#facultycarousel4" data-slide="next">
										<svg viewBox="0 0 256 256"><polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round" stroke-linecap="round" points="72,16 184,128 72,240"></polyline></svg>
									</a>
								</div>
							</div>
						</div>
						<div class="row recruitinfo no-margin">
							<div class="no-padding col-sm-12">
								<a href="placement.php" target="_blank" class="reambtn homebtn">View More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px" viewBox="0 0 227.096 227.096" style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve" class="svg readm replaced-svg">
									<g>
										<g>
											<polygon style="fill:#010002;" points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   "></polygon>
										</g>
									</g>
									</svg>
								</a>
							</div>
						</div> -->
					<style>
						.placementimg {
							box-shadow: 0px 0px 35px #00000015;
						}

						.placementimg {
							box-shadow: 0px 0px 35px #00000015;
							max-width: 100%;
							height: 525px;
						}
					</style>
					<!-- <img class="placementimg" src="https://www.gims.net.in/img/top-average-placments.webp?v=1" alt="Top Average Placments"> -->
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- <span class="shadowtext">What Our Student Say</span> -->
					<h2 class="paget">What Our Alumni Say</h2>
					<h3 class="subpaget">Alumni Reviews About - GIMS, Greater Noida</h3>
				</div>
				<div id="studentcarousel" class="carousel slide clubscaro" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<div class="row no-margin pd10">
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/student-review/sneha-suman.webp?v=1" alt="Sneha Suman"
											class="professorpic">
										<p class="stuname">
											Sneha Suman
										</p>
										<p class="designation">
											My experience in GIMS was like a roller coaster ride, full of twists and
											turns, ups and downs. GIMS has been a great contributor in upskilling my
											personality by inculcating leadership, time management...
										</p>
										<a href="students-review.php" class="st-read-more">Read More <svg
												xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px"
												y="0px" viewBox="0 0 227.096 227.096"
												style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve"
												class="svg readm replaced-svg">
												<g>
													<g>
														<polygon style="fill:#010002;"
															points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723 146.933,181.902 152.835,187.811 227.096,113.55">
														</polygon>
													</g>
												</g>
											</svg></a>
									</div>
								</div>
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/student-review/divya-goel.webp?v=1" alt="Divya Goel"
											class="professorpic">
										<p class="stuname">
											Divya Goel
										</p>
										<p class="designation">
											I am very thankful to my parents, my faculty, my friends, and my college, “
											Institute of Management Studies”, Greater Noida for where I am today. It has
											been a crucial milestone in my journey...
										</p>
										<a href="students-review.php" class="st-read-more">Read More <svg
												xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px"
												y="0px" viewBox="0 0 227.096 227.096"
												style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve"
												class="svg readm replaced-svg">
												<g>
													<g>
														<polygon style="fill:#010002;"
															points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723 146.933,181.902 152.835,187.811 227.096,113.55">
														</polygon>
													</g>
												</g>
											</svg></a>
									</div>
								</div>
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/placement/siddhart.jpg?v=1" alt="Siddharth Singh"
											class="professorpic">
										<p class="stuname">
											Siddharth Singh
										</p>
										<p class="designation">
											GNIOT Institute of Management Studies has a zero tolerance policy towards
											ragging. Ragging is strictly prohibited inside and outside the Institute
											campus. The Institute strictly follows the guidelines on ragging issue...
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="row no-margin pd10">
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/placement/sachin.jpg?v=1" alt="Sachin Sharma"
											class="professorpic">
										<p class="stuname">
											Sachin Sharma
										</p>
										<p class="designation">
											GNIOT Institute of Management Studies has been a great contributor to the
											overall development of my proficiency. I am establishing my management and
											leadership skills. GIMS is not only a great place for academic activities...
										</p>
									</div>
								</div>
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/placement/shreya.jpg?v=1" alt="Priyanka Srivastava"
											class="professorpic">
										<p class="stuname">Priyanka Srivastava</p>
										<p class="designation">
											GIMS maintains a perfect balance between excellent academics and exposure to
											reality being one step ahead in career. I'm grateful to GIMS for making me
											future ready.The Institute is a perfect blend of opportunities...
										</p>
									</div>
								</div>
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/placement/siddhart.jpg?v=1" alt="Siddharth Singh"
											class="professorpic">
										<p class="stuname">
											Siddharth Singh
										</p>
										<p class="designation">
											GNIOT Institute of Management Studies has a zero tolerance policy towards
											ragging. Ragging is strictly prohibited inside and outside the Institute
											campus. The Institute strictly follows the guidelines on ragging issued...
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row no-margin pd10">
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/placement/ansh.jpg?v=1" alt="Ansh Sharma" class="professorpic">
										<p class="stuname">
											Ansh Sharma
										</p>
										<p class="designation">
											It's been a great experience being part of GIMS. The exposure that we get at
											GIMS is really appreciable. The management, faculty and especially the CRC
											team helped me at each stage and showed me a great career path...
										</p>
									</div>
								</div>
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/placement/mojahid.jpg?v=1" alt="Mojahid Ahmad Siddiqui"
											class="professorpic">
										<p class="stuname">
											Mojahid Ahmad Siddiqui
										</p>
										<p class="designation">
											The faculties are exquisite. The campus itself is clean and well maintained.
											Everyone in the Department is very helpful in terms of projects and whatnot.
											No limitations on imagination. No boundaries to what you can achieve...
										</p>
									</div>
								</div>
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/placement/khushboo.jpg?v=1" alt="Khushboo Kumari"
											class="professorpic">
										<p class="stuname">
											Khushboo Kumari
										</p>
										<p class="designation">
											The quality of teaching is appreciable. Faculties are highly qualified and
											experienced. Individual attention is given to each student. The campus is
											well maintained and is located in a picturesque place filled with trees and
											birds...
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row no-margin pd10">
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/placement/sumedha.jpg?v=1" alt="Sumedha Srivastava"
											class="professorpic">
										<p class="stuname">
											Sumedha Srivastava
										</p>
										<p class="designation">
											GIMS is a good institution offering a lot of opportunities for students in
											co-curricular areas and with proper infrastructure. Workshops and PIP
											sessions are conducted on regular basis to provide you the skill set that
											makes you industry ready...
										</p>
									</div>
								</div>
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/placement/rahul.jpg?v=1" alt="Rahul Kumar" class="professorpic">
										<p class="stuname">
											Rahul Kumar
										</p>
										<p class="designation">
											College has excellent infrastructure and facilities across the city. Labs
											are equipped with up to date amenities and is maintained well. The entire
											campus has uninterrupted Wi-Fi in the hostel. Food provided in the
											mess/canteen is good and hygienic...
										</p>
									</div>
								</div>
								<div class="col-lg-4 col-xs-12 col-sm-6 mt-onmob ds-flex">
									<div class="col-lg-12 placestudiv bg1">
										<img src="img/placement/madhuri.jpg?v=1" alt="Madhuri Verma"
											class="professorpic">
										<p class="stuname">
											Madhuri Verma
										</p>
										<p class="designation">
											I would like to thank GNIOT Institute of Management Studies for the
											opportunity that has been given to me to expand my skills and knowledge.
											During my studies, I have gained textual knowledge as well as practical...
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="controller">
						<a class="leftcontrol" href="#studentcarousel" data-slide="prev">
							<svg viewBox="0 0 256 256">
								<polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round"
									stroke-linecap="round" points="184,16 72,128 184,240"></polyline>
							</svg>
						</a>
						<a class="rightcontrol" href="#studentcarousel" data-slide="next">
							<svg viewBox="0 0 256 256">
								<polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round"
									stroke-linecap="round" points="72,16 184,128 72,240"></polyline>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section pattern-bg">
		<div class="container">
			<div class="row wow fadeInUp animated no-margin">
				<div class="col-lg-8">
					<h1 class="titlem pt-40">Life @ <span>GIMS</span></h1>
					<h2 class="titlesm">Life @ GNIOT Institute of Management Studies (GIMS)</h2>
					<p class="textp">
						GNIOT Institute of Management Studies (GIMS) is not just an educational institution where the
						students only study, give exams and get a degree. <span>It is a platform where students come as
							raw material and pass out as finished products</span> who have acquired the skill set to
						face the industry challenges.
					</p>
					<a href="life-at-gims.php" target="_blank" class="reambtn homebtn fl-right no-margin">Read More <svg
							xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
							id="" x="0px" y="0px" viewBox="0 0 227.096 227.096"
							style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve"
							class="svg readm replaced-svg">
							<g>
								<g>
									<polygon style="fill:#010002;"
										points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   ">
									</polygon>
								</g>
							</g>
						</svg>
					</a>
				</div>
				<div class="col-lg-4 pd30">
					<img src="img/newhome/life-at-gims-1.webp?v=1" class="fancyimg" alt="PGDM Admission" />
				</div>
			</div>
		</div>
	</section>
	<section class="section newgrey-bg">
		<div class="container">
			<div class="row wow fadeInUp animated no-margin">
				<div class="col-lg-5 pd30">
					<img src="img/news1.jpg?v=1" class="fancyimg" alt="College Fest" />
					<img src="img/news2.jpg?v=1" class="fancyimg newimgs" alt="PGDM Admission" style="right: 0;" />
				</div>
				<div class="col-lg-7">
					<h1 class="titlem txtl pt-40">News & <span>Events</span></h1>
					<h2 class="titlesm txtl">News & Events @ GIMS</h2>
					<p class="textp txtl">
						Placement season @ GIMS has just caught full swing now. Placement season @ GIMS spans from
						October to April for the recruitment of our PGDM students. Last year more than 200 recruiters
						participated in the placement process and made more than 214 offers. Key recruiters were from
						Consulting, BFSI, FMCG, Paint and retail domain. This year we have already seen our key metrics
						improving in terms of Package being offered & profile choice and it is bound to become better.
						Looking forward to a great placement season!
					</p>
					<a href="latest-news.php" target="_blank" class="reambtn homebtn fl-left no-margin">Read More <svg
							xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
							id="" x="0px" y="0px" viewBox="0 0 227.096 227.096"
							style="enable-background:new 0 0 227.096 227.096;" xml:space="preserve"
							class="svg readm replaced-svg">
							<g>
								<g>
									<polygon style="fill:#010002;"
										points="152.835,39.285 146.933,45.183 211.113,109.373 0,109.373 0,117.723 211.124,117.723     146.933,181.902 152.835,187.811 227.096,113.55   ">
									</polygon>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section space-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- <span class="shadowtext">Placements @ GIMS</span> -->
					<h2 class="paget">VIDEOVISTA @GIMS</h2>
				</div>
				<div class="col-lg-12 mt-25">
					<div id="placementcarousel" class="carousel slide clubscaro" data-ride="carousel">
						<div class="carousel-inner">
							<div class="item active">
								<div class="row no-margin pd10">

									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Thumbnail -->
											<img src="https://img.youtube.com/vi/GhQBDoPZKwk/maxresdefault.jpg"
												alt="YouTube Video Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtu.be/GhQBDoPZKwk" target="_blank" class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Thumbnail -->
											<img src="https://img.youtube.com/vi/UE3Kn6cGRys/hqdefault.jpg"
												alt="YouTube Video Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtu.be/UE3Kn6cGRys" target="_blank" class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row no-margin pd10">
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Thumbnail -->
											<img src="https://img.youtube.com/vi/_ZwTO2Q99Us/maxresdefault.jpg"
												alt="YouTube Video Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtu.be/_ZwTO2Q99Us" target="_blank" class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Thumbnail -->
											<img src="https://img.youtube.com/vi/9bEkXw0Lhz0/maxresdefault.jpg"
												alt="YouTube Video Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtu.be/9bEkXw0Lhz0" target="_blank" class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row no-margin pd10">
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/d1ojtBsu_kQ/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/d1ojtBsu_kQ" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/dexf4gJIrLQ/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/dexf4gJIrLQ" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row no-margin pd10">
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/2SSjFkxWYIY/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/2SSjFkxWYIY" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/dDO_60rkfHU/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/dDO_60rkfHU" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="row no-margin pd10">
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/VFpp-4yx4o4/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/VFpp-4yx4o4" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Thumbnail -->
											<img src="https://img.youtube.com/vi/vcIZEuk_AU4/maxresdefault.jpg"
												alt="YouTube Video Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtu.be/vcIZEuk_AU4" target="_blank" class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="row no-margin pd10">
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/i7BgknIvLUY/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/i7BgknIvLUY" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/un4OZKCDSdA/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/un4OZKCDSdA" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="row no-margin pd10">
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/2G21YTSqvDQ/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/2G21YTSqvDQ" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/3A4MiCkKjDc/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/3A4MiCkKjDc" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="row no-margin pd10">
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/vgZoWC0Pe9Q/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/vgZoWC0Pe9Q" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/YHiVnaVwhH4/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/YHiVnaVwhH4" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="row no-margin pd10">
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/2fl0GLH2uVs/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/2fl0GLH2uVs" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>

									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/fAaUwVUsoT4/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/fAaUwVUsoT4" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="row no-margin pd10">
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/0VNy7s7cjEI/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/0VNy7s7cjEI" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>

									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/3ciUNVaJHSc/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/3ciUNVaJHSc" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="row no-margin pd10">
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">

											<!-- YouTube Shorts Thumbnail -->
											<img src="https://img.youtube.com/vi/2fl0GLH2uVs/maxresdefault.jpg"
												alt="YouTube Shorts Thumbnail">

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtube.com/shorts/2fl0GLH2uVs" target="_blank"
												class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon">
											</a>

										</div>
									</div>
								</div>
							</div>


							<div class="controller">
								<a class="leftcontrol" href="#placementcarousel" data-slide="prev">
									<svg viewBox="0 0 256 256">
										<polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round"
											stroke-linecap="round" points="184,16 72,128 184,240"></polyline>
									</svg>
								</a>
								<a class="rightcontrol" href="#placementcarousel" data-slide="next">
									<svg viewBox="0 0 256 256">
										<polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round"
											stroke-linecap="round" points="72,16 184,128 72,240"></polyline>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- Broad Cast Section -->
	<section class="section space-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="paget">GIMS Illuminates</h2>
				</div>
				<div class="col-lg-12 mt-25">
					<div id="broatCastcarousel" class="carousel slide clubscaro" data-ride="carousel">
						<div class="carousel-inner">
							<div class="item active">
								<div class="row no-margin pd10">
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">
											<!-- YouTube Thumbnail -->
											<img src="https://img.youtube.com/vi/9TzGByDDD78/maxresdefault.jpg"
												alt="YouTube Video Thumbnail" />

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtu.be/9TzGByDDD78" target="_blank" class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon" />
											</a>
										</div>
									</div>
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">
											<!-- YouTube Thumbnail -->
											<img src="https://img.youtube.com/vi/jYdfAKPWx4U/maxresdefault.jpg"
												alt="YouTube Video Thumbnail" />

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtu.be/jYdfAKPWx4U" target="_blank" class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon" />
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="row no-margin pd10">
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">
											<!-- YouTube Thumbnail -->
											<img src="https://img.youtube.com/vi/Ab-3pOakAgY/maxresdefault.jpg"
												alt="YouTube Video Thumbnail" />

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtu.be/Ab-3pOakAgY" target="_blank" class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon" />
											</a>
										</div>
									</div>

									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">
											<!-- YouTube Thumbnail -->
											<img src="https://img.youtube.com/vi/hsjsvNePFoA/maxresdefault.jpg"
												alt="YouTube Video Thumbnail" />

											<div class="overlay-div"></div>

											<!-- Play Button -->
											<a href="https://youtu.be/hsjsvNePFoA" target="_blank" class="vieoplaybtn">
												<img src="img/home/video-icon.png?v=1" alt="YouTube Icon"
													class="youtube-icon" />
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="row no-margin pd10">
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">
											<img src="img/home/video-1.webp?v=1" alt="GIMS Illuminates Podcast 1"
												class="" />

											<div class="overlay-div"></div>
											<a href="https://www.youtube.com/watch?v=AmjBcbJruFA" target="_blank"><img
													src="img/home/video-icon.png?v=1" alt="" class="youtube-icon" />
											</a>
										</div>
									</div>

									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">
											<img src="img/home/video-2.webp?v=1" alt="GIMS Illuminates Podcast 2"
												class="" />
											<div class="overlay-div"></div>
											<a href="https://www.youtube.com/watch?v=nuk38W7rgTI" target="_blank"><img
													src="img/home/video-icon.png?v=1" alt="" class="youtube-icon" /></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row no-margin pd10">
									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">
											<img src="img/home/video-3.webp?v=1" alt="GIMS Illuminates Podcast 3"
												class="" />

											<div class="overlay-div"></div>
											<a href="https://www.youtube.com/watch?v=oTjl3NhfJiI" target="_blank"><img
													src="img/home/video-icon.png?v=1" alt="" class="youtube-icon" />
											</a>
										</div>
									</div>

									<div class="col-lg-6 col-xs-6 col-sm-6 mt-onmob ds-flex">
										<div class="col-lg-12 placedstudiv">
											<img src="img/home/video-4.webp?v=1" alt="GIMS Illuminates Podcast 4"
												class="" />
											<div class="overlay-div"></div>
											<a href="https://www.youtube.com/watch?v=nfujqtrxQSM&t=256s"
												target="_blank"><img src="img/home/video-icon.png?v=1" alt=""
													class="youtube-icon" /></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="controller">
							<a class="leftcontrol" href="#broatCastcarousel" data-slide="prev">
								<svg viewBox="0 0 256 256">
									<polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round"
										stroke-linecap="round" points="184,16 72,128 184,240"></polyline>
								</svg>
							</a>
							<a class="rightcontrol" href="#broatCastcarousel" data-slide="next">
								<svg viewBox="0 0 256 256">
									<polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round"
										stroke-linecap="round" points="72,16 184,128 72,240"></polyline>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<br>
	<br>
	<?php include "footer.php"; ?>
	<?php include "footer-bottom.php"; ?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="vendors/slick/slick.min.js" type="text/javascript"></script>
	<script src="js/custom.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
	<script src="js/wow.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
		async></script>

	<script>
		$('#facultyslide').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 0,
			speed: 8000,
			pauseOnHover: false,
			cssEase: 'linear'
		});
	</script>
	<script type="text/javascript" src="js/slider/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="js/slider/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function () {
			jQuery("#slider1").revolution({
				sliderType: "standard",
				sliderLayout: "fullwidth",
				delay: 9000,
				navigation: {
					keyboardNavigation: "off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation: "off",
					onHoverStop: "on",
					touch: {
						touchenabled: "on",
						swipe_threshold: 75,
						swipe_min_touches: 50,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					},
					arrows: {
						style: "kallyas-default",
						enable: true,
						hide_onmobile: true,
						hide_under: 600,
						hide_onleave: false,
						tmp: '<div class="tp-arr-allwrapper">    <div class="tp-arr-iwrapper">               <div class="tp-arr-titleholder"></div>      <div class="tp-arr-subtitleholder"></div>   </div></div>',
						left: {
							h_align: "left",
							v_align: "center",
							h_offset: 30,
							v_offset: 0
						},
						right: {
							h_align: "right",
							v_align: "center",
							h_offset: 30,
							v_offset: 0
						}
					},
					bullets: {
						enable: true,
						hide_onmobile: true,
						hide_under: 600,
						style: "kallyas-default",
						hide_onleave: false,
						direction: "vertical",
						h_align: "right",
						v_align: "bottom",
						h_offset: 50,
						v_offset: 65,
						space: 0,
						tmp: ''
					}
				},
				responsiveLevels: [1240, 1024, 778, 320],
				gridwidth: [1200, 1024, 778, 320],
				gridheight: [600, 700, 900, 300],
				lazyType: "none",
				minHeight: 250,
				parallax: {
					type: "mouse",
					origo: "slidercenter",
					speed: 2000,
					levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
				},
				shadow: 0,
				spinner: false,
				stopLoop: "off",
				stopAfterLoops: -1,
				stopAtSlide: -1,
				shuffle: "off",
				autoHeight: "off",
				hideThumbsOnMobile: "off",
				hideSliderAtLimit: 0,
				hideCaptionAtLimit: 0,
				hideAllCaptionAtLilmit: 0,
				startWithSlide: 0,
				debugMode: false,
				fallbacks: {
					simplifyAll: "off",
					nextSlideOnWindowFocus: "off",
					disableFocusListener: false,
				}
			});
		});
	</script>
	<script type="text/javascript">
		(document.querySelectorAll('img.svg').forEach(function (img) {
			var imgID = img.id;
			var imgClass = img.className;
			var imgURL = img.src;

			fetch(imgURL).then(function (response) {
				return response.text();
			}).then(function (text) {

				var parser = new DOMParser();
				var xmlDoc = parser.parseFromString(text, "text/xml");

				// Get the SVG tag, ignore the rest
				var svg = xmlDoc.getElementsByTagName('svg')[0];

				// Add replaced image's ID to the new SVG
				if (typeof imgID !== 'undefined') {
					svg.setAttribute('id', imgID);
				}
				// Add replaced image's classes to the new SVG
				if (typeof imgClass !== 'undefined') {
					svg.setAttribute('class', imgClass + ' replaced-svg');
				}

				// Remove any invalid XML tags as per http://validator.w3.org
				svg.removeAttribute('xmlns:a');

				// Check if the viewport is set, if the viewport is not set the SVG wont't scale.
				if (!svg.getAttribute('viewBox') && svg.getAttribute('height') && svg.getAttribute('width')) {
					svg.setAttribute('viewBox', '0 0 ' + svg.getAttribute('height') + ' ' + svg.getAttribute('width'))
				}

				// Replace image with new SVG
				img.parentNode.replaceChild(svg, img);

			});
		}));
	</script>
	<script type="text/javascript">
		(function ($) {
			$.fn.dropdown = function (opts) {
				// default configuration
				var config = $.extend({}, {
					fadeInTime: 800,
					fadeOutTime: 800,
					interval: 5600
				}, opts);
				// main function
				function init(obj) {
					var dNewsticker = obj;
					var dFrame = dNewsticker.find('.js-frame');
					var dItem = dFrame.find('.js-item');
					var dCurrent;
					var stop = false;

					dItem.eq(0).addClass('current');
					dItem.eq(0).show();

					var move = setInterval(function () {
						if (!stop) {
							dCurrent = dFrame.find('.current');
							dCurrent.fadeOut(config.fadeOutTime, function () {
								if (dCurrent.next().length !== 0) {
									dCurrent.removeClass('current');
									dCurrent.next().addClass('current');
									dCurrent.next().fadeIn(config.fadeInTime);
								} else {
									dCurrent.removeClass('current');
									dItem.eq(0).addClass('current');
									dItem.eq(0).fadeIn(config.fadeInTime);
								}
							});
						}
					}, config.interval);

					dNewsticker.on('mouseover mouseout', function (e) {
						if (e.type == 'mouseover') {
							stop = true;
						} else {
							stop = false;
						}
					});
				}
				// initialize every element
				this.each(function () {
					init($(this));
				});
				return this;
			};
			// start
			$(function () {
				$('.js-newsticker').dropdown();
			});
		})(jQuery);
	</script>

	<script>
		$('.multiple-items').slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3
		});
	</script>

	<?php include "scripts.php"; ?>

	<!-- <script>
		function setBackgroundImage() {
			var slider1 = document.getElementById('sliders1');
			var desktopImageUrlslider1 = 'img/slider/international-collaboration.webp';
			var mobileImageUrlslider1 = 'img/slider/international-collaboration.jpg';
			
			var slider2 = document.getElementById('sliders2');
			var desktopImageUrlslider2 = 'img/slider/placement-records.webp';
			var mobileImageUrlslider2 = 'img/slider/placement-at-gims.jpg';
			
			var slider3 = document.getElementById('sliders3');
			var desktopImageUrlslider3 = 'img/slider/iip-pgdm.gif';
			var mobileImageUrlslider3 = 'img/slider/international-immersion-program.gif';
			
			var slider4 = document.getElementById('sliders4');
			var desktopImageUrlslider4 = 'img/slider/iimbxa.jpg';
			var mobileImageUrlslider4 = 'img/slider/iimb-collaboration.jpg';
			
			if (window.matchMedia("(min-width: 768px)").matches) {
				slider1.style.backgroundImage = "url('"+desktopImageUrlslider1+"')";
				slider2.style.backgroundImage = "url('"+desktopImageUrlslider2+"')";
				slider3.style.backgroundImage = "url('"+desktopImageUrlslider3+"')";
				slider4.style.backgroundImage = "url('"+desktopImageUrlslider4+"')";
			} else {
				slider1.style.backgroundImage = "url('"+mobileImageUrlslider1+"')";
				slider2.style.backgroundImage = "url('"+mobileImageUrlslider2+"')";
				slider3.style.backgroundImage = "url('"+mobileImageUrlslider3+"')";
				slider4.style.backgroundImage = "url('"+mobileImageUrlslider4+"')";
			}
		}
	
		setBackgroundImage(); 
	
		
		window.addEventListener('resize', setBackgroundImage);
	</script> -->

	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			if ($('.carousels .carousel-slides').length) {
				$('.carousels .carousel-slides').slick({
					arrows: false,
					dots: false,
					infinite: true,
					autoplaySpeed: 0,
					cssEase: 'linear',
					speed: 8000,
					// centerMode: true,
					autoplay: true,
					variableWidth: true,
					touchMove: false,
					draggable: false,
					focusOnSelect: false,
					accessibility: false,
					pauseOnHover: false,
					pauseOnFocus: false,
					swipe: false,
					loop: true,
				});

			}
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.pholesliderslick').slick({
				autoplay: true,
				autoplaySpeed: 5000,
				dots: false,
				arrows: true
			});
		});
	</script>
	<script type="text/javascript">
		$('.responsive').slick({
			dots: true,
			infinite: false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 5,
			responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}
			]
		});
	</script>
	<script>
		$(document).ready(function () {
			var bubbleList = $('.bubble-container');
			const bubbleCount = bubbleList.length;
			const degStep = 335 / (bubbleCount - 1);

			$('.bubble-container').each((index) => {
				const deg = index * degStep;
				const invertDeg = deg * -1;

				$(bubbleList[index]).css('transform', `rotate(${deg}deg)`);
				$(bubbleList[index]).css('opacity', `1`);
				$(bubbleList[index]).find('.bubble').css('transform', `rotate(${invertDeg}deg)`);
			})
		})
	</script>

	<script>
		$(document).ready(function () {
			$('.main_slider').slick({
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true, // Show arrows
				prevArrow: '<button class="slick-prev custumsickbtn" aria-label="Previous" type="button">Previous</button>',
				nextArrow: '<button class="slick-next custumsickbtn" aria-label="Next" type="button">Next</button>'
			});
		});
	</script>



	<script>
		$('.celebslider').slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			speed: 5000,
			autoplay: true,
			autoplaySpeed: 0,
			cssEase: 'linear',
			arrows: false,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 995,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
					}
				}
			],
			centerMode: false,
			centerPadding: '50px',
		});

		$('.celebslider .celebitem').css('margin-left', '5px');
	</script>


</body>

</html>