<?php
include('admin/dbc.php');
include('admin/function.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Alumni Newsletter | GIMS</title>
        <meta
            name="description"
            content="Discover what’s new at GIMS with our Alumni Newsletter, featuring success stories, event updates, and the latest campus news."
        />
        <meta
            name="keywords"
            content="PGDM College, Alumni Newsletter, Educational Leadership, Visionary Leaders, Academic Excellence, Higher Education, College Governance, Institutional Leadership, College Trustees, Decision-Making Body"
        />
        <meta name="author" content="BrandShow" />
        <meta name="Robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="copyright" content="Copyright © GNIOT Institute of Management Studies. All Rights Reserved." />
        <!-- Favicon -->
        <link rel="alternate" href="https://www.gims.net.in/alumni-newsletter.php" hreflang="es-us" />
        <link rel="canonical" href="https://www.gims.net.in/alumni-newsletter.php" />
        <!-- Search Engine -->
        <meta name="image" content="https://www.gims.net.in/img/gims-logo.jpg" />
        <!-- Facebook Open Graph -->
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Alumni Newsletter" />
        <meta
            property="og:description"
            content="Discover what’s new at GIMS with our Alumni Newsletter, featuring success stories, event updates, and the latest campus news."
        />
        <meta property="og:url" content="https://www.gims.net.in/alumni-newsletter.php" />
        <meta property="fb:app_id" content="573928583391257" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@GNIOTCollege" />
        <meta name="twitter:title" content="Alumni Newsletter" />
        <meta
            name="twitter:description"
            content="Discover what’s new at GIMS with our Alumni Newsletter, featuring success stories, event updates, and the latest campus news."
        />
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="og:title" content="Alumni Newsletter" />
        <meta name="og:url" content="https://www.gims.net.in/alumni-newsletter.php" />
        <meta name="og:site_name" content="GNIOT Institute of Management Studies" />
        <meta name="fb:admins" content="573928583391257" />
        <meta name="og:type" content="website" />

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
                "url": "https://www.gims.net.in/alumni-newsletter.php",

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
        <link rel="apple-touch-icon" sizes="57x57" href="img/fevicon/apple-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="60x60" href="img/fevicon/apple-icon-60x60.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="img/fevicon/apple-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="img/fevicon/apple-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="img/fevicon/apple-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="img/fevicon/apple-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="img/fevicon/apple-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="img/fevicon/apple-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="img/fevicon/apple-icon-180x180.png" />
        <link rel="icon" type="image/png" sizes="192x192" href="img/fevicon/android-icon-192x192.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="img/fevicon/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="96x96" href="img/fevicon/favicon-96x96.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="img/fevicon/favicon-16x16.png" />
        <link rel="manifest" href="img/fevicon//manifest.json" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
        <meta name="theme-color" content="#ffffff" />
        <link rel="shortcut icon" type="image/x-icon" href="img/fevicon/favicon.ico" />
        <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="vendors/fullpage/fullpage.css" />
        <link rel="stylesheet" href="vendors/elagent-icon/style.css" />
        <link rel="stylesheet" href="vendors/animation/animate.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/responsive.css" />
        <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/base.css" />
        <link rel="stylesheet" href="popup/lightbox.css" />
        <?php include "header.php"; ?>

        <style>
            .bdgcontdge {
                background: #2356ba;
                padding: 10px;
                margin: -7px 0 30px 0;
                min-height: 90px;
            }

            .bdgcontdge p {
                color: white;
                text-align: center;
                font-size: 16px;
            }

            .bdgcontdge p span {
                display: block;
                font-size: 16px;
                font-weight: 300;
                color: #ffc300;
            }

            .bdgcontdge p span svg {
                margin-right: 7px;
            }

            @media (min-width: 992px) {
                .col-lg-3 {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
            }

            .col-lg-3 {
                position: relative;
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
            }

            .card {
                position: relative;
                display: flex;
                margin-bottom: 20px;
                flex-direction: column;
                background-color: #fff;
                border: 1px solid rgba(0, 0, 0, 0.125);
                border-radius: 0.25rem;
                box-shadow:
                    0 2px 5px 0 rgba(0, 0, 0, 0.16),
                    0 2px 10px 0 rgba(0, 0, 0, 0.12);
            }

            .card-img-top {
                width: 100%;
                border-top-left-radius: calc(0.25rem - 1px);
                border-top-right-radius: calc(0.25rem - 1px);
            }

            .view {
                position: relative;
                overflow: hidden;
                cursor: default;
            }

            .mask {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(40deg, rgba(69, 202, 252, 0.9), rgba(48, 63, 159, 0.9)) !important;
                opacity: 0;
                transition: all 0.4s ease-in-out;
            }

            .mask:hover {
                opacity: 1;
            }

            .zoom img {
                transition: all 0.2s linear;
            }

            .zoom:hover img {
                transform: scale(1.1);
            }

            .flex-center {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
            }

            .btn {
                display: inline-block;
                font-weight: 400;
                color: #212529;
                background-color: transparent;
                border: 1px solid transparent;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                border-radius: 0.25rem;
                transition:
                    color 0.15s ease-in-out,
                    background-color 0.15s ease-in-out,
                    border-color 0.15s ease-in-out,
                    box-shadow 0.15s ease-in-out;
            }

            .btn-white {
                background-color: #fff !important;

                color: #000;
            }

            .fa {
                font: normal normal normal 14px/1 FontAwesome;

                font-size: inherit;
            }

            .fa-eye:before {
                content: "\f06e";
            }

            div.col-lg-12.new-pd9.awardbg2 {
                background: #ffffff !important;
            }
        </style>
    </head>

    <body class="home_four">
        <?php include "top-menu.php"; ?>

        <div id="wavescroll">
            <section class="section wave_two_section_two">
                <div id="particles-js" class="p_absoulte"></div>
                <img class="t_two p_absoulte" src="img/home_one/triangle_shap_two.png" alt="" />
                <img class="t_shap p_absoulte" src="img/home_three/shap.png" alt="" />
                <img class="b_shap p_absoulte" src="img/home_three/shap_two.png" alt="" />
                <img class="dot_one p_absoulte" src="img/home_three/dot.png" alt="" />
                <img class="dot_two p_absoulte" src="img/home_three/dot-1.png" alt="" />
                <div class="text" style="font-size: 34px">Alumni Newsletter</div>
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

                                    <li>Alumni Newsletter</li>
                                </ul>
                            </div>

                            <div class="col-lg-12">
                                <h1 class="page-t">Alumni Newsletter</h1>

                                <h3 class="sub-t">GIMS ALUMNI CONNECT</h3>
                            </div>

                            <div class="col-md-12 no-padding">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="col-lg-12 new-pd9 awardbg2">
                                            <div class="row">
                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/january-newsletter-vol-3-issue-2.webp"
                                                            />
                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/feb-newsletter-vol-3-issue-2-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">
                                                            February 2025 , Volume-03 | Issue-2
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/jan-2025-vol-3-issue-1.webp"
                                                            />
                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/january-newsletter-curve-file-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">Jan 2025 , Volume-03 | Issue-1</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/nov-dec-2024.webp"
                                                            />
                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/Aluminai-meet-volume-2-newsletter-nov-dec-2025-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">Nov-Dec 2024 Volume-02 | Issue-11</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/october-2024.webp"
                                                            />
                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/newsletter-October-2024-volume-2-issue-10-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">October 2024 Volume-2 | Issue-10</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/september-2024.webp"
                                                            />

                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/gims-alumni-connect-2-0-September-vol-2-tssue-9-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">September 2024 Volume-2 | Issue-9</div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/august-2024.webp"
                                                            />

                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/gims-alumni-connect-20-august-2024-vol-2-issue-8-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">August 2024 Volume-2 | Issue-8</div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/july-2024.webp"
                                                            />

                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/gims-alumni-connect-20-july-2024-vol-2-issue-7-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">July, 2024 Volume-2 | Issue-7</div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/june-2024.jpg"
                                                            />

                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/e-newsletter-june-vol-2-isse-6-2024-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">June, 2024 Volume-2 | Issue-6</div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/may-2024.jpg"
                                                            />

                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/gims-alumni-connect-2-0-may-vol-2-isse-5-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">May, 2024 Volume-2 | Issue-5</div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/april-2024.jpg"
                                                            />

                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/gims-alumni-connect-2-0-april-vol-2-isse-4-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">April, 2024 Volume-2 | Issue-4</div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/march-2024.jpg"
                                                            />

                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/gims-alumni-connect-2-0-march-vol-1-isse-3-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">March, 2024 Volume-2 | Issue-3</div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/fabruary-2024.jpg"
                                                            />

                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/gims-alumni-connect-2-0-february-vol-2-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">February, 2024 Volume-2 | Issue-2</div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/january-2024.jpg"
                                                            />

                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/gims-alumni-connect-jan-3-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">January, 2024 Volume-2 | Issue-1</div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/december-2023.jpg"
                                                            />

                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/gims-alumni-connect-december-2023-volume-1-issue-3-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">December, 2023 Volume-1 | Issue-3</div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/november-2023.jpg"
                                                            />

                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/gims-alumni-connect-2-november-volume-1-issue-2-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">November, 2023 Volume-1 | Issue-2</div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-6">
                                                    <div class="card">
                                                        <div class="view zoom z-depth-1">
                                                            <img
                                                                alt=""
                                                                class="card-img-top"
                                                                src="img/news-letter/august-2023.jpg"
                                                            />

                                                            <div class="mask flex-center blue-gradient-rgba">
                                                                <a
                                                                    class="btn btn-sm btn-white waves-effect waves-light"
                                                                    href="pdf/new-letter/august-2023-volume-1-new.pdf"
                                                                    target="_blank"
                                                                >
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-eye"
                                                                    >
                                                                        <path
                                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"
                                                                        />
                                                                        <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer">August 2023 Volume-1 | Issue-2</div>
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
        <script src="popup/lightbox-plus-jquery.js"></script>
        <?php include "scripts.php"; ?>
    </body>
</html>
