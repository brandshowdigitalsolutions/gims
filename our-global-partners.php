<?php
include('admin/dbc.php');
include('admin/function.php');
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Our Global Partners | GIMS Greater Noida</title>
	<meta name="description"
		content="Overview of the Office of Global Engagement at GIMS Greater Noida, facilitating partnerships, exchange programs, and global collaborations." />
	<meta name="keywords"
		content="Global Engagement GIMS, GNIOT Institute of Management Studies, International Relations PGDM, Study Abroad PGDM" />


	<meta name="author" content="BrandShow">
	<meta name="Robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="copyright" content="Copyright © GNIOT Institute of Management Studies. All Rights Reserved." />
	<!-- Favicon -->

	<link rel="alternate" href="https://www.gims.net.in/our-global-partners.php" hreflang="es-us" />
	<link rel="canonical" href="https://www.gims.net.in/our-global-partners.php">

	<!-- Search Engine -->
	<meta name="image" content="https://www.gims.net.in/img/gims-logo.jpg">

	<!-- Facebook Open Graph -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="Our Global Partners | GIMS Greater Noida">
	<meta property="og:description"
		content="Overview of the Office of Global Engagement at GIMS Greater Noida, facilitating partnerships, exchange programs, and global collaborations.">
	<meta property="og:url" content="https://www.gims.net.in/our-global-partners.php">
	<meta property="fb:app_id" content="573928583391257">


	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@gims_net_in">
	<meta name="twitter:title" content="Our Global Partners | GIMS Greater Noida">
	<meta name="twitter:description"
		content="Overview of the Office of Global Engagement at GIMS Greater Noida, facilitating partnerships, exchange programs, and global collaborations.">

	<!-- Open Graph general (Facebook, Pinterest & Google+) -->
	<meta name="og:title" content="Our Global Partners | GIMS Greater Noida" />
	<meta name="og:url" content="https://www.gims.net.in/our-global-partners.php">
	<meta name="og:site_name" content="GNIOT Institute of Management Studies">
	<meta name="fb:admins" content="573928583391257">
	<meta name="og:type" content="website">

	<!-- Geotag Start -->
	<meta name="DC.title" content="GNIOT Institute of Management Studies" />
	<meta name="geo.region" content="IN-UP" />
	<meta name="geo.placename" content="Greater Noida" />
	<meta name="geo.position" content="28.461182;77.495203" />
	<meta name="ICBM" content="28.461182, 77.495203" />
	<!-- Geotag End -->

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Blog",
			"url": "https://gims.net.in/blog/"
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "CollegeOrUniversity",
			"name": "GNIOT Institute of Management Studies",
			"url": "https://www.gims.net.in/our-global-partners.php",
			"sameAs": [
				"https://www.facebook.com/gims.net.in",
				"https://twitter.com/gims_net_in",
				"https://www.instagram.com/gims.net.in/",
				"https://www.linkedin.com/company/gniot-institute-of-management-studies-pgdm-institute-gims/",
				"https://www.youtube.com/channel/UCgakka57xq5deagDmuc6YpQ/videos?view=0&shelf_id=3&sort=dd",
				"https://www.gims.net.in"
			]
		}
	</script>

	<link rel="apple-touch-icon" sizes="57x57" href="img/fevicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/fevicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/fevicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/fevicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/fevicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/fevicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/fevicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/fevicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/fevicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="img/fevicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/fevicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/fevicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/fevicon/favicon-16x16.png">
	<link rel="manifest" href="img/fevicon//manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="shortcut icon" type="image/x-icon" href="img/fevicon/favicon.ico" />
	<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendors/fullpage/fullpage.css">
	<link rel="stylesheet" href="vendors/elagent-icon/style.css">
	<link rel="stylesheet" href="vendors/animation/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/base.css" />
	<?php include "header.php"; ?>

	<style>
		/* Container for the flip cards */
		.flip-card {
			width: 100%;
			height: 300px;
			/* Set height for each card */
			perspective: 1000px;
			/* Gives a 3D effect */

		}

		/* The actual flip card */
		.flip-card-inner {
			position: relative;
			width: 100%;
			height: 100%;
			transform-style: preserve-3d;
			transition: transform 0.6s;
		}

		.flip-card:hover .flip-card-inner {
			transform: rotateY(180deg);
			/* Flip the card when hovered */
		}

		/* Front of the card */
		.flip-card-front,
		.flip-card-back {
			position: absolute;
			width: 100%;
			height: 100%;
			backface-visibility: hidden;
			/* Hides the back side when flipped */
			display: flex;
			align-items: center;
			justify-content: center;
			text-align: center;
		}

		/* Styling the front of the card (with logo and text) */
		.flip-card-front {
			background-color: #f0f0f0;
			color: black;
		}

		/* Styling the back of the card (additional information) */
		.flip-card-back {
			background-color: #00658f;
			color: white;
			transform: rotateY(180deg);
			/* Initially hide the back */
			padding: 20px;
			overflow-y: auto;
		}

		/* Card Content - Logo and Text */
		.club-logo img {
			max-width: 200px;
			margin-bottom: 0px;
		}

		.club-logo h2 {
			font-size: 1.2em;
			margin-bottom: 5px;
			padding: 2px;
		}

		.club-logo p {
			font-size: 0.9em;
			color: #666;
		}
	</style>
</head>

<body class="home_four">

	<?php include "top-menu.php"; ?>

	<div id="wavescroll">

		<section class="section wave_two_section_two">
			<div id="particles-js" class="p_absoulte"></div>
			<img class="t_two p_absoulte" src="img/home_one/triangle_shap_two.png" alt="">
			<img class="t_shap p_absoulte" src="img/home_three/shap.png" alt="">
			<img class="b_shap p_absoulte" src="img/home_three/shap_two.png" alt="">
			<img class="dot_one p_absoulte" src="img/home_three/dot.png" alt="">
			<img class="dot_two p_absoulte" src="img/home_three/dot-1.png" alt="">
			<div class="text" style="font-size:34px;">Our Global Partners</div>
			<div class="s_round r_one p_absoulte"></div>
			<div class="s_round r_two p_absoulte"></div>
			<div class="s_round r_three p_absoulte"></div>
			<div class="s_round r_four p_absoulte"></div>
			<div class="s_round r_five p_absoulte"></div>
			<div class="s_round r_six p_absoulte"></div>
			<div class="s_round r_seven p_absoulte"></div>
			<div class="s_round r_eight p_absoulte"></div>
			<div class="s_round r_nine p_absoulte"></div>
			<div class="s_round r_ten p_absoulte"></div>
			<div class="s_round r_eleven p_absoulte"></div>
			<div class="intro">
				<div class="container custom_container">
					<div class="row align-items-center new-pd4 zoomanimate">
						<div class="col-lg-12">
							<ul class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li><a href="#">Global Engagement</a></li>
								<li>Our Global Partners</li>
							</ul>
						</div>
						<div class="col-lg-12">
							<h1 class="page-t">Our Global Partners</h1>
							<h3 class="sub-t">Office of Global Engagement - GIMS</h3>
						</div>
						<div class="col-md-12 no-padding">
							<div class="row">
								<div class="col-lg-9">
									<div class="container py-5 parabox" style="z-index:0;">
										<h2>Our Global Partners:</h2><br>

										<div class="row">
											<!-- Card 1 -->
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/iip-slider/logo/Mahsa-University.webp"
																	alt="Logo">
																<h2>Mahsa University,<br> Malaysia</h2>
																<!-- <p>THE FINANCE CLUB</p> -->
															</div>
														</div>
														<div class="flip-card-back">
															<p>Mahsa University is renowned for its excellence in health
																sciences, business, and engineering education. Our
																collaboration focuses on fostering academic exchanges,
																research, and development opportunities.</p>
														</div>
													</div>
												</div>
											</div>

											<!-- Card 2 -->
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/iip-slider/logo/Hult-International-Business.webp"
																	alt="Logo">
																<h2>Hult International Business <br>School, London</h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p>A world leader in business education, Hult offers a
																global perspective that enhances the learning
																experience. Our partnership emphasizes cross-border
																learning, joint research, and international internships.
															</p>
														</div>
													</div>
												</div>
											</div>

											<!-- Card 3 -->
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/iip-slider/logo/University-of-Dubai.webp"
																	alt="Logo">
																<h2>University of Dubai, <br>Dubai</h2>
																<!-- <p>THE PHOTOGRAPHY CLUB</p> -->
															</div>
														</div>
														<div class="flip-card-back">
															<p>The University of Dubai is committed to delivering
																quality education with a focus on practical learning and
																industry-oriented programs. Our collaboration
																strengthens our commitment to global educational
																standards.</p>
														</div>
													</div>
												</div>
											</div>

											<!-- Card 4 -->
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/iip-slider/logo/Tribhuvan_University_logo.svg.webp"
																	alt="Logo">
																<h2>Tribhuvan University, <br>Nepal</h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p>As one of Nepal's oldest and most prestigious
																universities, this partnership supports faculty
																exchange, research collaboration, and student mobility,
																enriching the academic experience for both institutions.
															</p>
														</div>
													</div>
												</div>
											</div>

											<!-- Card 5 -->
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/iip-slider/logo/Asian_Institute_of_Technology-Logo.webp"
																	alt="Logo">
																<h2>Asian Institute of Technology,<br> Pathumthani,
																	Thailand</h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p>AIT has been a hub for academic excellence and innovation
																in the field of technology, engineering, and management.
																Our partnership focuses on research collaboration, joint
																programs, and student exchange.</p>
														</div>
													</div>
												</div>
											</div>
											<!-- Card 5 -->
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/iip-slider/logo/dmu.webp" alt="Logo">
																<h2>De Montfort University,<br> Leicester (DMU)</h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p>De Montfort University, Leicester, is a public university
																with 27,000 students, four faculties, and a focus on
																sustainability. It holds a Silver TEF rating and is a UN
																SDG Hub."</p>
														</div>
													</div>
												</div>
											</div>
											<!-- Card 5 -->
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/iip-slider/logo/utar.webp" alt="Logo">
																<h2>UTAR University,<br> Malaysia</h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p>UTAR ranks among Asia’s top 100 (THE 2018) and world’s
																top 600 (THE 2021), placing 2nd in Malaysia. It’s 31st
																in UI GreenMetric 2022 and 3rd for research output.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/iip-slider/logo/farabi.webp" alt="farabi">
																<h2>Al-Farabi Kazakh National University</h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p>Al-Farabi Kazakh National University (KazNU) is a leading
																research university in Almaty, Kazakhstan, named after
																scholar al-Farabi.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/iip-slider/logo/miit.webp" alt="farabi">
																<h2>Russian University of Transport (MIIT) </h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p>MIIT, a leader in transport education for 120+ years,
																combines academics, industry ties, and innovation to
																shape mobility's future.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/iip-slider/logo/uniglobe-college.webp"
																	alt="farabi">
																<h2>Uniglobe College</h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p>Uniglobe College, affiliated with Pokhara University,
																offers MBA, MBA-Finance, BBA, and BBA-BI programs.</p>
														</div>
													</div>
												</div>
											</div>



											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/iip-slider/logo/lsus.webp" alt="Lsus">
																<h2>LSUS Shreveport</h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p>LSUS (Louisiana State University Shreveport) is a public
																university offering undergraduate and graduate programs
																with a focus on academic excellence</p>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/iip-slider/logo/europian-institute.webp"
																	alt="europian-institute">
																<h2>Europian Institute of Management </h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p>The EIM is a Malta-based, accredited online institution
																offering flexible, career-focused master's and doctoral
																programs for professionals worldwide.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/iip-slider/logo/unmas-denpasar.webp"
																	alt="unmas-denpasar">
																<h2>UNMAS DENPASAR</h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p>Universitas Mahasaraswati Denpasar is a private
																university in Bali, Indonesia, recognized as the first
																private institution in the Bali-Nusa Tenggara region</p>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/iip-slider/logo/russian-state-social-university.webp"
																	alt="Russian State">
																<h2>Russian State Social University</h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p>The RSSU established in 1991 in Moscow, is a public
																institution specializing in social sciences, offering a
																wide range of undergraduate and postgraduate programs
															</p>
														</div>
													</div>
												</div>
											</div>

											<!-- one -->
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/int-logo/1.webp" alt="farabi">
																<h2>MDIS Singapore</h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p style=" margin-top:70px;">The Management Development
																Institute of Singapore (MDIS) is a well-established
																private education institution here in Singapore that
																offers Preparatory Courses, Diplomas, Advanced Diplomas,
																Higher Diplomas, globally recognised Bachelor's and
																Master's degree programmes across various disciplines,
																including a Doctorate degree.</p>
														</div>
													</div>
												</div>
											</div>

											<!-- two -->
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/int-logo/2.webp" alt="farabi">
																<h2>Caucasus University ,Georgia</h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p>Caucasus University traces its origins to 1998 with the
																establishment of the Caucasus School of Business. The
																university's guiding principle, "Studium Pretium
																Libertatis," translates to "Knowledge is the Foundation
																of Freedom."</p>
														</div>
													</div>
												</div>
											</div>

											<!-- three -->
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/int-logo/3.webp" alt="farabi">
																<h2>Synergy University</h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p>Synergy University Dubai is an educational institution
																with an innovative approach. We offer internships with
																international partner companies starting from the first
																year, providing students with practical experience and a
																competitive portfolio even during their studies.</p>
														</div>
													</div>
												</div>
											</div>
											<!-- four -->
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/int-logo/4.webp" alt="farabi">
																<h2>Ahliya University, Bahrain</h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p style=" margin-top:70px;">Ahlia University (AU) is a
																private, not-for-profit university in Manama, Bahrain
																and owned by a private holding company, The Arab Academy
																for Research and Studies (AARS).[1] The holding company
																is collectively owned by a group of companies and
																individuals from the Gulf Cooperation Council.</p>
														</div>
													</div>
												</div>
											</div>
											<!-- five -->
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/int-logo/5.webp" alt="farabi">
																<h2>Russian Foreign Trade Academy </h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p style=" margin-top:70px;">The All-Russian Academy of
																Foreign Trade was founded in 1930. Since then, it has
																gone through several key stages of development,
																including renaming and modernization of educational
																programs. Among its notable alumni are prominent
																economists and business people working both in Russia
																and abroad</p>
														</div>
													</div>
												</div>
											</div>
											<!-- six -->
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/int-logo/6.webp" alt="farabi">
																<h2>Limkongwong University Malaysia </h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p style=" margin-top:70px;">The Limkokwing University of
																Creative Technology (referred to as LUCT, LKW or just
																Limkokwing) is a private international university with a
																presence across Africa, Europe, and Asia. With its main
																campus in Malaysia, the university has over 30,000
																students from more than 150 countries.</p>
														</div>
													</div>
												</div>
											</div>
											<!-- seven -->
											<div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
												<div class="flip-card">
													<div class="flip-card-inner">
														<div class="flip-card-front">
															<div class="club-logo">
																<img src="img/int-logo/7.webp" alt="farabi">
																<h2>FPT,Vietnam</h2>

															</div>
														</div>
														<div class="flip-card-back">
															<p>FPT University is a private university in Vietnam. FPT
																University is a member of FPT Group and has campuses in
																Hanoi (main), Ho Chi Minh City, Da Nang, Can Tho and Quy
																Nhon.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-3 sidebar" id="sidebar">
									<?php include "about-sidebar.php"; ?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<?php include "footer.php"; ?>
	</div>

	<?php include "footer-bottom.php"; ?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="vendors/bootstrap/js/popper.min.js"></script>
	<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendors/fullpage/scroll-overflow.js"></script>
	<script src="vendors/fullpage/fullpage.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/main.js"></script>
	<?php include "scripts.php"; ?>
	<script>
		function openModal(id) {
			document.getElementById(id).style.display = "flex";
		}

		function closeModal(id) {
			document.getElementById(id).style.display = "none";
		}
	</script>
</body>

</html>