<?php
include('admin/dbc.php');
include('admin/function.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Team-CRC | Top Management Colleges in Greater Noida | GIMS</title>
    <meta name="description"
        content="Meet Team-CRC at GNIOT Institute of Management Studies, one of the best PGDM campuses in Greater Noida. Explore top management talent and leadership initiatives.">
    <meta name="keywords"
        content="Team CRC, PGDM Students, GNIOT Institute of Management Studies, Top Management College Greater Noida, Best PGDM College Delhi NCR, Management Leadership Team">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://www.gims.net.in/team-crc.php">

    <!-- Favicon -->
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
    <link rel="manifest" href="img/fevicon/manifest.json">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS (Bootstrap & Custom) -->
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fullpage/fullpage.css">
    <link rel="stylesheet" href="vendors/elagent-icon/style.css">
    <link rel="stylesheet" href="vendors/animation/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/base.css" />

    <!-- Schema.org structured data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CollegeOrUniversity",
      "name": "GNIOT Institute of Management Studies",
      "url": "https://www.gims.net.in/",
      "logo": "https://www.gims.net.in/img/college-gims.jpg",
      "sameAs": [
        "https://www.facebook.com/gims.net.in",
        "https://twitter.com/gims_net_in",
        "https://www.instagram.com/gims.net.in/",
        "https://www.linkedin.com/company/gniot-institute-of-management-studies-pgdm-institute-gims/",
        "https://www.youtube.com/channel/UCgakka57xq5deagDmuc6YpQ/videos"
      ]
    }
    </script>

    <?php include "header.php"; ?>

    <style>
        .detailcercont {
            display: none;
            background-color: #f0f0f0;
            padding: 10px;
            margin-top: 10px;
        }

        .active-detail {
            display: block;
        }

        .crc-name h4 {
            margin-top: 15px;
        }

        .detailcercont {
            position: fixed;
            top: -10px;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 999999989999999999999;
            background: rgba(0, 0, 0, .41);
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
        }

        .innercontentpop {
            background: white;
            padding: 45px;
        }

        .poptitle {
            font-size: 25px;
            font-weight: 700;
        }

        .close-btn {
            cursor: pointer;
            color: #323232;
            margin-left: 10px;
            background: #ffc300;
            width: 50px;
            height: 50px;
            display: block;
            float: right;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .opendet {
            cursor: pointer;
            display: flex;
            color: white;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            background: #082c91;
            width: 100%;
            padding: 2px 0;
            gap: 10px;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .close-btn {
                float: none;
                margin-bottom: 18px;
            }

            .crc-name {
                position: static;
                margin-top: -6px;
            }
        }

        @media (max-width: 577px) {
            .crc-name {
                position: static;
                margin-top: - 7px;
                width: 243px;
            }
        }

        @media (min-width: 581px) and (max-width: 1193px) {
            .crc-name p {
                font-size: 11px;
            }

            .crc-name h4 {
                font-size: 10px;
            }

            .opendet {
                font-size: 11px;
            }

            .opendet svg {
                width: 15px;
                height: 15px;
            }
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
            <div class="text" style="font-size:34px;">Team-CRC</div>
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
                                <li><a href="#">Corporate Resource Centre</a></li>
                                <li>Team-CRC</li>
                            </ul>
                        </div>
                        <div class="col-lg-12">
                            <h1 class="page-t">Team-CRC</h1>
                            <h3 class="sub-t">GIMS - Greater Noida</h3>
                        </div>
                        <div class="col-md-12 no-padding">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="col-lg-12 new-pd9 awardbg2">
                                        <div class="placement-process">
                                            <div class="row">

                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img
                                                                src="img/team-crc/new/mr-chandrakant-singh-dean-crc-1.webp"
                                                                alt="Team CRC" /></div>
                                                        <div class="crc-name">
                                                            <p>Mr. Chandrakant Singh</p>
                                                            <h4>Additional Director<br> CRC, L&D, Academics</h4>
                                                            <span class="opendet" data-target="ChandrakantSingh">Know
                                                                more <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-move-right">
                                                                    <path d="M18 8L22 12L18 16" />
                                                                    <path d="M2 12H22" />
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img
                                                                src="img/team-crc/jitendra-vasishtha.webp?v=2"
                                                                alt="Team CRC" /></div>
                                                        <div class="crc-name">
                                                            <p>Mr. Jitendra Vashishtha</p>
                                                            <h4>Assistant Professor / Head-CRC</h4>
                                                            <span class="opendet" data-target="jitendra-vasishtha">Know
                                                                more <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-move-right">
                                                                    <path d="M18 8L22 12L18 16" />
                                                                    <path d="M2 12H22" />
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img
                                                                src="img/team-crc/ms-preetha-kumari.webp?v=20"
                                                                alt="Team CRC" /></div>
                                                        <div class="crc-name">
                                                            <p>Ms Preetha Kumari</p>
                                                            <h4>Lead - Corporate Relations and Engagement</h4>
                                                            <span class="opendet" data-target="ms-preetha-kumari">Know
                                                                more <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-move-right">
                                                                    <path d="M18 8L22 12L18 16" />
                                                                    <path d="M2 12H22" />
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img
                                                                src="img/team-crc/new/Ankita-Chauhan.webp"
                                                                alt="Team CRC" /></div>
                                                        <div class="crc-name">
                                                            <p>Ms. Ankita Chauhan </p>
                                                            <h4>Assistant Professor / Faculty Coordinator-CRC</h4>
                                                            <!-- <span class="opendet" data-target="vijayshukla">Know more <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg></span> -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="col-sm-4 col-xs-6">
                                                <div class="crc-team">
                                                    <div class="crc-img"><img src="img/team-crc/new/mr-himanshu-gaur-senior-manager.webp" alt="Team CRC"/></div>
                                                    <div class="crc-name">
                                                        <p>Mr. Himanshu Gaur</p>
                                                        <h4>Senior Manager <br>Corporate Relations</h4>   
                                                    </div>
                                                </div>
                                            </div> -->
                                                <!-- <div class="col-sm-4 col-xs-6">
                                                <div class="crc-team">
                                                    <div class="crc-img"><img src="img/team-crc/new/mr-akash-baidhya-manager-corporate-relations.webp" alt="Team CRC"/></div>
                                                    <div class="crc-name">
                                                        <p>Mr. Akash Baidhya</p>
                                                        <h4>Manager <br>Corporate Relations</h4>   
                                                    </div>
                                                </div>
                                            </div> -->

                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img
                                                                src="img/team-crc/new/ms-aastha-singh-assistant-manager-corporate-relations.webp"
                                                                alt="Team CRC" /></div>
                                                        <div class="crc-name">
                                                            <p>Ms. Aastha Singh</p>
                                                            <h4>Assistant Professor / Faculty Coordinator-CRC</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="col-sm-4 col-xs-6">
                                                <div class="crc-team">
                                                    <div class="crc-img"><img src="img/team-crc/new/ms-sakshi-parihar-placement-coordinator-corporate-relations.webp" alt="Team CRC"/></div>
                                                    <div class="crc-name">
                                                        <p>Ms. Sakshi Parihar</p>
                                                        <h4>Assistant Manager <br>Corporate Relations</h4>   
                                                    </div>
                                                </div>
                                            </div> -->
                                                <!-- <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img
                                                                src="img/team-crc/new/sonika-pal-crc.webp"
                                                                alt="Sonika Pal" /></div>
                                                        <div class="crc-name">
                                                            <p>Ms. Sangeeta Bisht</p>
                                                            <h4>Assistant Manager</h4>
                                                        </div>
                                                    </div>
                                                </div> -->

                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img
                                                                src="img/team-crc/new/sonika-pal-crc.webp"
                                                                alt="Sonika Pal" /></div>
                                                        <div class="crc-name">
                                                            <p>Ms. Sonika Pal</p>
                                                            <h4>Manager</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img
                                                                src="img/team-crc/new/ms-moumita-chakraborty-placement-coordinator.webp"
                                                                alt="Team CRC" /></div>
                                                        <div class="crc-name">
                                                            <p>Ms. Moumita Chakraborty</p>
                                                            <h4>Assistant Professor / Faculty Coordinator-CRC</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-sm-4 col-xs-6">
                                                <div class="crc-team">
                                                    <div class="crc-img"><img src="img/team-crc/new/chittaranjan-sangram-singh-crc.webp" alt="Chittaranjan Sangram Singh"/></div>
                                                    <div class="crc-name">
                                                        <p>Mr.Chittaranjan Sangram Singh</p>
                                                        <h4>Placement Coordinator</h4>   
                                                    </div>
                                                </div>
                                            </div> -->
                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img
                                                                src="img/team-crc/new/damini-singh-crc.webp"
                                                                alt="Chittaranjan Sangram Singh" /></div>
                                                        <div class="crc-name">
                                                            <p>Ms. Damini Singh</p>
                                                            <h4>Manager</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-sm-4 col-xs-6">
                                                <div class="crc-team">
                                                    <div class="crc-img"><img src="img/faculty/new/girl.webp" alt="Ms. Soumya Srivastava"/></div>
                                                    <div class="crc-name">
                                                        <p>Ms. Soumya Srivastava</p>
                                                        <h4>Manager</h4>   
                                                    </div>
                                                </div>
                                            </div> -->

                                                <!-- <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img src="img/iips/lakshay-vohra.webp"
                                                                alt="Mr. Lakshay Vohra" /></div>
                                                        <div class="crc-name">
                                                            <p>Mr. Lakshay Vohra</p>
                                                            <h4>Assistant Manager</h4>
                                                        </div>
                                                    </div>
                                                </div> -->

                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img
                                                                src="img/faculty/new/mr-ujjwal-kunwar.webp"
                                                                alt="Mr. Ujjwal Kunwar" /></div>
                                                        <div class="crc-name">
                                                            <p>Mr. Ujjwal Kunwar</p>
                                                            <h4>MIS Executive</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img
                                                                src="img/faculty/new/ms-sangeeta-bisht.webp"
                                                                alt="Ms. Sangeeta Bisht" /></div>
                                                        <div class="crc-name">
                                                            <p>Ms. Sangeeta Bisht</p>
                                                            <h4>Assistant Manager</h4>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img src="img/faculty/new/ms-muskan.webp"
                                                                alt="Ms. Muskan" /></div>
                                                        <div class="crc-name">
                                                            <p>Ms. Muskan</p>
                                                            <h4>Assistant Manager</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img
                                                                src="img/faculty/new/ms-pinky-razdan.webp"
                                                                alt="Ms. Pinky Razdan" /></div>
                                                        <div class="crc-name">
                                                            <p>Ms. Pinky Razdan</p>
                                                            <h4>MIS Executive</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- new profile added on 23 - june- 2026 -->
                                                <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img src="img/faculty/new/mr-nivash-kumar.webp"
                                                                alt="Mr. Nivas Kumar" /></div>
                                                        <div class="crc-name">
                                                            <p>Mr. Nivas Kumar</p>
                                                            <h4>Senior Manager- CRC</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-sm-4 col-xs-6">
                                                    <div class="crc-team">
                                                        <div class="crc-img"><img
                                                                src="img/faculty/new/ms-neha-gupta.webp"
                                                                alt="Ms. Neha Gupta" /></div>
                                                        <div class="crc-name">
                                                            <p>Ms. Neha Gupta</p>
                                                            <h4>Manager</h4>
                                                        </div>
                                                    </div>
                                                </div> -->

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


    <div class="detailcercont" id="ChandrakantSingh">
        <span class="close-btn"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-x">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
            </svg></span>
        <div class="container">
            <div class="innercontentpop">
                <p class="poptitle">Mr. Chandrakant Singh</p>
                <p class="parapop">Chandrakant Singh is a dynamic academic leader and industry professional with close
                    to 14 years of diverse experience spanning Education and IT/ITES. Known for building strong
                    industry-academia bridges, he brings deep expertise in talent development, corporate engagement, and
                    student career acceleration.<br>

                    In his current role, he leads Academics, Learning & Development, and Corporate Relations & Career
                    Services (CRC), driving initiatives that enhance employability, strengthen industry partnerships,
                    and align academic delivery with evolving corporate expectations. His work focuses on creating
                    “day-zero professionals” equipped to thrive in competitive business environments.<br>

                    Chandrakant began his career with INFINITE Computer Solutions, Bangalore (a CMM Level 5
                    organization), where he quickly emerged as a top performer, earning a promotion within his first
                    year. He later moved to AXA Business Services (a Fortune 500 company), where he played a key role in
                    Talent Acquisition, leading campus hiring strategies across multiple verticals.<br>

                    A defining turning point in his journey came in 2017, when a recruitment assignment to a B-School in
                    Pune led him to transition into the education sector. Starting in Training & Placements, he rapidly
                    rose through the ranks to Head of Department and later Director, leading Corporate Connect and
                    Student Acquisition functions.<br>

                    Prior to his current role, he served as Country Head at MULTIFIT Wellness Private Limited, Pune,
                    managing operations across 33 centres in India, UAE, and the UK—demonstrating his ability to lead
                    large, multi-geography teams and drive business growth.<br>

                    A passionate mentor and lifelong learner, Chandrakant is known for his practical insights, engaging
                    speaking style, and strong belief in values-driven leadership. His sessions often focus on career
                    readiness, industry alignment, and making informed choices in an ever-evolving professional
                    landscape.<br>

                    Beyond his professional pursuits, he is a complete family man, and his bio on Facebook reads—“A
                    father’s son and a son’s father.” He enjoys staying updated, has a passion for reading, and loves
                    watching Bollywood movies, ensuring he catches new releases over the weekends. He is also passionate
                    about cars and bikes and enjoys road trips with friends and family.<br>

                    He is a man of principles and places a strong emphasis on ethics and values…!!
                </p>
            </div>
        </div>
    </div>
    <div class="detailcercont" id="jitendra-vasishtha">
        <span class="close-btn"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-x">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
            </svg></span>
        <div class="container">
            <div class="innercontentpop">
                <p class="poptitle">Mr. Jitendra Vasishtha</p>
                <p class="parapop">At GNIOT Institute of Management Studies, we are more than educators; we are
                    catalysts for transformation. Our mission is to cultivate future business leaders who thrive on
                    disruption and excel in digital innovation. Here, we nurture divergent thinkers and tech-savvy
                    strategists, ready to tackle the dynamic demands of modern enterprises. Immerse yourself in
                    cutting-edge coursework designed to challenge conventions and ignite your creative spark. Gain
                    insights from leading industry experts through captivating talks, mentorship, and interactive
                    workshops. Dive into live projects and internships that offer a taste of real-world challenges and
                    solutions. Develop forward-thinking strategies with guidance from seasoned professionals, preparing
                    you to lead in a digital-first world. Join us at GNIOT IMS, where you will not only learn but lead,
                    innovate, and shape the future of business. Your journey towards becoming a trailblazer in digital
                    transformation starts here!</p>
            </div>
        </div>
    </div>
    <div class="detailcercont" id="ms-preetha-kumari">
        <span class="close-btn"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-x">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
            </svg></span>
        <div class="container">
            <div class="innercontentpop">
                <p class="poptitle">Ms. Preetha Kumari</p>
                <p class="parapop">A Senior Management Professional with more than 26 years of broad in-depth experience
                    across lines covering the full range of Corporate and Management Capabilities in the IT/ITES Sector
                    (including 20 years at Wipro Ltd.).

                    Strong Transformation experience in leading and facilitating change across multi-disciplinary teams
                    and locations with a tangible impact on Company Objectives. Proven competence in Business support
                    operations, Supply chain management, Project Management, IT Quality & Service Excellence ,
                    IT/QMS/RMAC and OHSAS Audits (DNV Certified Auditor), Vendor Management & Sales Co-ordination, IT
                    Procurement, Centre of Excellence Roles in various IT Functions, Facilities and EHS Head role,
                    Sustainability initiatives like Car Pool and Electric Vehicle implementation for Carbon Footprint
                    reduction Projects, Learning and Development initiatives for shaping Industry-ready leaders and
                    bridging the gap between Academia and Industry , Driving Corporate Readiness Program to ensure that
                    all students develop Professional Skills required to compete in the Global job market, conducting
                    specialized sessions for students to enhance their Communication Skills, Soft Skills and Technical
                    Skills and refining their Corporate Etiquettes enabling smooth Campus to Corporate transition,
                    through Corporate Resource Centre harnessing the opportunities available in the Industry for the
                    placements and Summer internships of the students , acting as an interface between the industry and
                    the Institute.

                    Transitioned and implemented 80+ high end IT Projects for Wipro Ltd. (UAL, Bloomberg, Verizon, HP,
                    Dell, Telstra to name a few), Deployed Transport Management System Move-In-Sync SaaS Solution that
                    automates employee transportation and workplace management across PAN India locations at Wipro Ltd.,
                    Headed many Sustainability initiatives in IT Sector , member of industry bodies/ forums like CII,
                    NASSCOM(IT) ,GACS, iNFHRA, CAPSI, IIA etc.

                    Education : Electronics & Electrical Communication Engineering from BTE, C-PGDBA from Symbiosis
                    Centre for Distance Learning-Pune, ITIL Certified, Six Sigma (GB) Certified, DNV Certified Auditor
                    for ISO20000 and OHSAS 18001/45001 (Occupational Health and Safety Management Systems).</p>
            </div>
        </div>
    </div>


    <?php include "footer-bottom.php"; ?>

    <!-- JS (defer for performance) -->
    <script src="js/jquery-3.2.1.min.js" defer></script>
    <script src="vendors/bootstrap/js/popper.min.js" defer></script>
    <script src="vendors/bootstrap/js/bootstrap.min.js" defer></script>
    <script src="vendors/fullpage/scroll-overflow.js" defer></script>
    <script src="vendors/fullpage/fullpage.js" defer></script>
    <script src="js/parallax.js" defer></script>
    <script src="js/custom.js" defer></script>
    <script src="js/main.js" defer></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const opendetElements = document.querySelectorAll('.opendet');
            const closeButtons = document.querySelectorAll('.close-btn');

            opendetElements.forEach(opendet => {
                opendet.addEventListener('click', () => {
                    const targetId = opendet.getAttribute('data-target');
                    const targetDetail = document.getElementById(targetId);
                    document.querySelectorAll('.detailcercont').forEach(detail => {
                        detail.classList.remove('active-detail');
                    });
                    if (targetDetail) {
                        targetDetail.classList.add('active-detail');
                    }
                });
            });

            closeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const parentDetail = button.closest('.detailcercont');
                    if (parentDetail) {
                        parentDetail.classList.remove('active-detail');
                    }
                });
            });
        });
    </script>

    <?php include "scripts.php"; ?>
</body>

</html>