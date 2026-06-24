<?php
include('admin/dbc.php');
include('admin/function.php');

// Disable caching by setting various headers
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

?>

<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Faculty | Top Management Colleges in Greater Noida</title>
    <meta name="description" content="Faculty - GNIOT Institute of Management Studies One of The Best PGDM Campus and Top College for PGDM provides Best PGDM private Colleges in Delhi, India." />
    <meta name="keywords" content="Best PGDM College in Delhi NCR, GNIOT Institute of Management Studies,  Top PGDM Colleges in Greater Noida, Top PGDM Colleges in UPTU, Best Management Colleges in India, UPSEE Best PGDM colleges ,Top  GBTU Institutes,Top Management institute" />
    <meta name="author" content="BrandShow">
    <meta name="Robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="Copyright © GNIOT Institute of Management Studies. All Rights Reserved." />

    <!-- Favicon -->
    <link rel="alternate" href="https://www.gims.net.in/faculty.php" hreflang="es-us" />
    <link rel="canonical" href="https://www.gims.net.in/faculty.php">

    <!-- Search Engine -->
    <meta name="image" content="https://www.gims.net.in/img/gims-logo.jpg">
    <!-- Facebook Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Faculty | Top Management Colleges in Greater Noida">
    <meta property="og:description" content="Faculty - GNIOT Institute of Management Studies One of The Best PGDM Campus and Top College for PGDM provides Best PGDM private Colleges in Delhi, India.">
    <meta property="og:url" content="https://www.gims.net.in/faculty.php">
    <meta property="fb:app_id" content="573928583391257">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@GNIOTCollege">
    <meta name="twitter:title" content="Faculty | Top Management Colleges in Greater Noida">
    <meta name="twitter:description" content="Faculty - GNIOT Institute of Management Studies One of The Best PGDM Campus and Top College for PGDM provides Best PGDM private Colleges in Delhi, India.">

    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Faculty | Top Management Colleges in Greater Noida" />
    <meta name="og:url" content="https://www.gims.net.in/faculty.php">
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

            "url": "https://www.gims.net.in/faculty.php",

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

    <link rel="stylesheet" href="popup/lightbox.css">

    <script src="https://cdn.tailwindcss.com"></script>

    <?php
    include "header.php"; ?>
    <style>
        h2.new-font.titlenews.black-color i {
            background-color: #023e96;
        }

        .placestudiv {
            background-color: #023e96;
            box-shadow: none;
        }

        p.stuname {
            font-size: 16px;
            font-weight: 400;
            color: #fff;
        }

        .designation span {
            background-color: #ffffff;
            font-weight: 400;
            font-size: 14px;
            color: #323232;
        }

        .designation {
            font-size: 14px;
            color: #fff;
        }

        .bsnewfacbtn {
            background: none;
            border: 1px solid white;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 300;
            padding: 1px 10px;
            font-size: 14px;
            width: 100%;
        }

        .bsnewfacbtn:hover {
            color: #fff;
        }

        .placestudiv {
            background-color: #023e96;
            box-shadow: none;
            display: flex;
            flex-direction: column;
            min-height: 300px;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .professorpic {
            border: 1px dashed white;
        }

        .faclistdegtitlte {
            font-size: 20px;
            font-weight: 700;
            color: #023e96;
        }

        .fcard-title {
            font-size: 16px;
            font-weight: 600;
            color: #323232;
            padding: 0;
        }

        .fcard-deg {
            font-size: 16px;
            padding: 0;
        }

        .catfacdiv {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid black;
        }

        .faclistdegtitlte {
            font-size: 20px;
            font-weight: 700;
            color: #023e96;
            margin-bottom: 15px;
        }

        .fcard {
            margin-bottom: 15px;
        }

        @media (max-width:500px) {
            .facmainlist {
                padding: 25px;
            }
        }

        .fcard-title span {
            display: block;
        }

        .fcard-body p {
            text-align: center;
        }

        .catfacdiv {
            margin-left: 18px;
        }

        .facmainlist {
            background: #fac426;
            padding: 30px;
        }
    </style>
 <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="home_four">

    <?php
    include "top-menu.php";
    ?>



    <div id="wavescroll">



        <section class="section wave_two_section_two">
            <div id="particles-js" class="p_absoulte"></div>
            <img class="t_two p_absoulte" src="img/home_one/triangle_shap_two.png" alt="">
            <img class="t_shap p_absoulte" src="img/home_three/shap.png" alt="">
            <img class="b_shap p_absoulte" src="img/home_three/shap_two.png" alt="">
            <img class="dot_one p_absoulte" src="img/home_three/dot.png" alt="">
            <img class="dot_two p_absoulte" src="img/home_three/dot-1.png" alt="">
            <div class="text" style="font-size:34px;">Faculty - GIMS</div>
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
                                <li><a href="javascript:void(0)">Home</a></li>
                                <li>Academics</li>
                                <li>faculty</li>
                            </ul>
                        </div>
                        <div class="col-lg-12">
                            <h1 class="page-t">Faculty</h1>
                            <h3 class="sub-t">Faculty - GIMS</h3>
                        </div>
                        <div class="col-md-12 no-padding">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="facmainlist">
                                        <div class="catfacdiv">
                                            <h3 class="faclistdegtitlte">Marketing </h3>


                                            <div class="max-w-7xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
                                                <!-- Card -->
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center" 
                                                    style="background-image: url('img/faculty/new/nishant-kr-singh.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Dr. Nishant <span>Kr. Singh</span>
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">
                                                        <!-- <span class="text-gray-400 text-xl">👤</span> -->
                                                        <span class="text-sm">Associate Professor/Dean Examination & PGP</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/dr-nishant.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                    
                                                </div>
                                                <!-- Card -->
                                                <div class="relative bg-white  shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem] ">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center"
                                                    style="background-image: url('img/faculty/new/prof-mudit.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Prof. Mudit <span>Tomar</span>
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Dean Outreach Engagement</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/mudit-tomar.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>
                                        
                                                <!-- Card -->
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center" 
                                                    style="background-image: url('img/faculty/new/dr-silky.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Dr. Silky <span>Gaur</span>
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Adjunct Assistant Professor</span>
                                                    </p>
                                                    <a href="http://gims.net.in/silki-gaur.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>
                                                
                                        
                                                <!-- Card -->
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center" 
                                                    style="background-image: url('img/faculty/new/shirly-rex.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Prof. Shirly Rex
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Assistant Professor, Marketing</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/prof-shirly-rex.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>
                                                
                                        
                                                
                                            </div>



                                            

                                            <!-- <h4><br>Marketing</h4>
                                            <p>Area Advisory Board</p>

                                            <table class="tablegims" style="width: 100%; border-collapse: collapse; ">
                                                <tbody>
                                                    <tr>
                                                        <th style="padding: 8px; text-align: left;">Name</th>
                                                        <th style="padding: 8px; text-align: left;">Associated Organization</th>
                                                        <th style="padding: 8px; text-align: left;">Name</th>
                                                        <th style="padding: 8px; text-align: left;">Associated Organization</th>
                                                    </tr>
                                                    <tr>
                                                        <td style=" padding: 8px;">1.Dr. Jaspreet Kaur</td>
                                                        <td style=" padding: 8px;"> Professor, Delhi School of Business</td>
                                                        <td style=" padding: 8px;">2.Dr. Amit Shankar</td>
                                                        <td style=" padding: 8px;">Associate Professor IIM-Visakhapatnam</td>
                                                    </tr>
                                                    <tr>
                                                        <td style=" padding: 8px;">3.Dr. Kirti Dutta</td>
                                                        <td style=" padding: 8px;">Dean & Professor, Faculty of Commerce & Management, SGT University</td>
                                                        <td style=" padding: 8px;">4. Mr. Devendra</td>
                                                        <td style=" padding: 8px;">Founder & Business Head-Digital Mantra, Noida</td>
                                                    </tr>
                                                    <tr>
                                                        <td style=" padding: 8px;">5.Mr. Priyaranjan Kumar</td>
                                                        <td style=" padding: 8px;">Marketing expert & Founder Groundup Consulting</td>
                                                        <td style=" padding: 8px;">6.Ms. Shaweta Berry</td>
                                                        <td style=" padding: 8px;">Vice President of Marketing, Mahanadaya Universal Consultancy Private Limited</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 8px;">7.Ms.Navda Tyagi</td>
                                                        <td style="padding: 8px;">(GIMS-Alumni),Sales officer - Institutional Delhi Head,ITC Ltd.</td>

                                                    </tr>
                                                </tbody>
                                            </table> -->

                                        </div>
                                        <div class="catfacdiv">
                                            <h3 class="faclistdegtitlte">Finance and Economics</h3>

                                            <div class="max-w-7xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center" 
                                                    style="background-image: url('img/faculty/new/deepak.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Dr. Deepak Bansal
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Professor & Dean - Finance</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/dr-deepak-bansal.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center" 
     style="background-image: url('img/faculty/new/prof-satyendra.webp');">
</div>
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Prof. Satyendra <span>Kumar Srivastav</span>
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Assistant Professor</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/prof-satyendra-kumar-srivastav.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center" 
     style="background-image: url('img/faculty/new/priyank-kulshrestha.jpg');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Dr. Priyank Kulshrestha
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Assistant Professor</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/prof-priyank-kulshreshtha.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>
                                                


                                            </div>

                                        </div>
                                        






                                           
                                        <!-- <div class="catfacdiv">
                                            <h3 class="faclistdegtitlte">Operations, Statistics and Business Analytics</h3>
                                            <div class="row row-border"> -->
                                        <!-- <div class="col-md-2 col-6">
                                                    <a href="bhupendra-kumar.php">
                                                        <div class="fcard">
                                                            <img src="img/faculty/bhupender-som-directer.webp" class="fcard-img-top" alt="fcard Image 1" />
                                                            <div class="fcard-body">
                                                                <p class="fcard-title">Dr. Bhupender<span>Kr. Som</span></p>
                                                                <p class="fcard-deg">Professor/ Director</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div> -->
                                        <!-- <div class="col-md-2 col-6">
                                                    <a href="imad-ali.php">
                                                        <div class="fcard">
                                                            <img src="img/faculty/new/imad-ali-1.webp" class="fcard-img-top" alt="fcard Image 1" />
                                                            <div class="fcard-body">
                                                                <p class="fcard-title">Dr. Imad <span>Ali</span></p>
                                                                <p class="fcard-deg">Professor</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div> -->
                                        <!-- <div class="col-md-2 col-6">
                                                    <a href="pooja-kapoor.php">
                                                        <div class="fcard">
                                                            <img src="img/faculty/pooja-kapoor.jpg" class="fcard-img-top" alt="fcard Image 1" />
                                                            <div class="fcard-body">
                                                                <p class="fcard-title">Dr. Pooja A. Kapoor</p>
                                                                <p class="fcard-deg">Assistant Professor</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div> -->
                                        <!-- <div class="col-md-2 col-6">
                                                    <a href="prof-meenakshi-chandgothia.php">
                                                        <div class="fcard">
                                                            <img src="img/faculty/prof-meenkashi.jpg" class="fcard-img-top" alt="fcard Image 1" />
                                                            <div class="fcard-body">
                                                                <p class="fcard-title">Prof. Meenakshi Chandgothia</p>
                                                                <p class="fcard-deg">Assistant Professor</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div> -->
                                        <!-- <div class="col-md-2 col-6">
                                                    <a href="dr-sadhana-tiwari.php">
                                                        <div class="fcard">
                                                            <img src="img/faculty/sadhana-tiwari.webp" class="fcard-img-top" alt="Dr.Sadhana Tiwari" />
                                                            <div class="fcard-body">
                                                                <p class="fcard-title">Dr. Sadhana Tiwari</p>
                                                                <p class="fcard-deg">Associate Professor/Dean- Research</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div> -->
                                        <!-- <div class="col-md-2 col-6">
                                                    <a href="https://www.gims.net.in/prof-sudhanshu-kumar.php">
                                                        <div class="fcard">
                                                            <img src="img/faculty/Sudhanshu.webp" class="fcard-img-top" alt="Prof.Sudhanshu" />
                                                            <div class="fcard-body">
                                                                <p class="fcard-title">Prof. Sudhanshu kumar</p>
                                                                <p class="fcard-deg">Assistant Professor</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div> -->
                                        <!-- <div class="col-md-2 col-6">
                                                    <a href="bhupender-singh.php">
                                                        <div class="fcard">
                                                            <img src="img/faculty/dr-bhupender-singh.webp" class="fcard-img-top" alt="Dr. Bhupender Singh" />
                                                            <div class="fcard-body">
                                                                <p class="fcard-title">Dr. Bhupender Singh</p>
                                                                <p class="fcard-deg"> Dean - Business Analytics, HOD (IT)</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div> -->
                                        <!-- </div>
                                        </div> -->

                                        <!--new tab-->

                                        <div class="catfacdiv">
                                            <h3 class="faclistdegtitlte">Business Analytics & IT</h3>
 
                                            <div class="max-w-7xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">


                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center"
     style="background-image: url('img/faculty/new/bhupender-som-directer.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Dr. Bhupender <span>Kr. Som</span>
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Professor/ Director</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/bhupendra-kumar.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center"
     style="background-image: url('img/faculty/dr-bhupender-singh.webp');">
</div>
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Dr. Bhupender Singh
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Professor/ Dean - Business Analytics, HOD (IT)</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/bhupender-singh.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center"
                                                    style="background-image: url('img/faculty/new/dr-pooja-a-kapoor.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Dr. Pooja A. Kapoor
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Assistant Professor</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/pooja-kapoor.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center"
     style="background-image: url('img/faculty/prof-meenkashi.jpg');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Prof. Meenakshi Chandgothia
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Assistant Professor</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/prof-meenakshi-chandgothia.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>
                                                
                                                
                                                 </div>






                                            
                                            <!-- <h4><br>BA & IT</h4>
                                        <p>Area Advisory Board</p>

                                        <table class="tablegims" style="width: 100%; border-collapse: collapse; ">
                                            <tbody>
                                                <tr>
                                                    <th style="padding: 8px; text-align: left;">Name</th>
                                                    <th style="padding: 8px; text-align: left;">Associated Organization</th>
                                                    <th style="padding: 8px; text-align: left;">Name</th>
                                                    <th style="padding: 8px; text-align: left;">Associated Organization</th>
                                                </tr>
                                                <tr>
                                                    <td style=" padding: 8px;">1. Dr. Hema Banati</td>
                                                    <td style=" padding: 8px;">Professor, Dyal Singh College, Dept of CS, University of Delhi</td>
                                                    <td style=" padding: 8px;">2. Dr. Vinay Kumar</td>
                                                    <td style=" padding: 8px;">Ex. (Professor & Dean), VIPS, GGSIPU</td>
                                                </tr>
                                                <tr>
                                                    <td style=" padding: 8px;">3. Dr. Surinder Singh Khullar</td>
                                                    <td style=" padding: 8px;">Professor, Dept of Data Science, NDIM Delhi</td>
                                                    <td style=" padding: 8px;">4. Dr. Sandhya Rai</td>
                                                    <td style=" padding: 8px;">Associate Professor, Bennett University</td>
                                                </tr>
                                                <tr>
                                                    <td style=" padding: 8px;">5. Dr. Krishna Chandra Tripathi</td>
                                                    <td style=" padding: 8px;">Associate Professor, MAIT, GGSIPU</td>
                                                    <td style=" padding: 8px;">6. Dr. Abhishek Srivastava</td>
                                                    <td style=" padding: 8px;">Assistant Professor, IIM Visakhapatnam</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 8px;">7. Mr. Ankur Agarwal</td>
                                                    <td style="padding: 8px;">Associate Director, Nagarro</td>
                                                    <td style="padding: 8px;">8. Ms. Ritika Saxena</td>
                                                    <td style="padding: 8px;">Senior Analyst – Risk Advisory, Deloitte</td>
                                                </tr>
                                            </tbody>
                                        </table> -->
                                        </div>

                                        <div class="catfacdiv">
                                            <h3 class="faclistdegtitlte">SCM, Operations & IB</h3>

                                            <div class="max-w-7xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
 
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center"
     style="background-image: url('img/faculty/new/imad-ali-1.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Dr. Imad <span>Ali</span>
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Professor</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/imad-ali.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center"
     style="background-image: url('img/faculty/new/dr-sadhana-tiwari.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Dr. Sadhana Tiwari
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Associate Professor / Dean - Research</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/dr-sadhana-tiwari.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>

                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center"
     style="background-image: url('img/faculty/Sudhanshu.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Prof. Sudhanshu Kumar
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Professor of Practice, IB</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/prof-sudhanshu-kumar.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>
                                                


                                            </div>



                                           
                                        </div>
                                        <!--new table-->
                                        <!-- <h4><br>Marketing</h4> -->
                                        


                                        <div class="catfacdiv">
                                            <h3 class="faclistdegtitlte">HR, OB and Entrepreneurship</h3>

                                            <div class="max-w-7xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center"
     style="background-image: url('img/faculty/new/dr-ruchi-rayat.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Dr. Ruchi Rayat
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Professor / Executive Director</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/ruchi-rayat.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center"
                                                    style="background-image: url('img/faculty/new/dr-yamini-pandey.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Dr. Yamini Pandey
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Professor / Dean - Academics</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/dr-yamini-pandey.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center"
     style="background-image: url('img/faculty/new/dr-jitendra-kumar-singh.webp');">
</div>
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Dr. Jitendra Kumar Singh
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Associate Professor</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/dr-jitendra-kumar-singh.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center"
                                                    style="background-image: url('img/faculty/new/prof-vibhanshu.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Prof. Vibhanshu
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Assistant Professor</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/prof-vibhanshu.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center"
                                                    style="background-image: url('img/faculty/new/charul-sharma.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Prof. Charul Sharma
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2">

                                                        <span class="text-sm">Assistant Professor</span>
                                                    </p>
                                                    <a href="https://www.gims.net.in/prof-charul-sharma.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>
                                                    
                                            </div>

                                            
                                        </div>
                                        <div class="catfacdiv">
                                            <h3 class="faclistdegtitlte">Business communication /Learning and Development</h3>

                                            <div class="max-w-7xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-2xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-blue-200 p-2 bg-cover bg-center"
                                                    style="background-image: url('img/faculty/new/dr-shalini.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-blue-500">
                                                        Dr. Shalini Sharma
                                                    </h2>
                                                    <p class=" text-gray-500 flex items-center justify-center gap-2 text-sm">

                                                        Professor / Dean OSW / Area Chair
                                                    </p>
                                                    <a href="https://www.gims.net.in/shalini-sharma.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/new/dr-zia-zehra.jpg');">
</div>

                                                    
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Dr. Zia Zehra Zaidi
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="https://www.gims.net.in/prof-zia-zehra.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>


                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
                                                    style="background-image: url('img/faculty/Tanishq.webp');">
                                               </div>
                                               
                                                    
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Prof. Tanishq Maheshwari
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="https://www.gims.net.in/prof-tanishq-maheshwari.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/new/krithik-nayyar.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Prof. Krithik Nayyar
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="https://www.gims.net.in/prof-krithik-nayyar.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/new/poonam-mahtolia.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Prof. Poonam Mahtolia
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="https://www.gims.net.in/prof-poonam-mahtolia.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/new/meenakshi-dabas-1.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Prof. Meenakshi Dabas
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="https://www.gims.net.in/meenakshi-dabas.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500  hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/new/priti-bhat.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Prof. Priti Bhat
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="https://www.gims.net.in/prof-priti-bhat.php">
                                                        <button class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-300 text-blue-500 hover:bg-indigo-500 hover:text-white hover:border-indigo-500">
                                                            ➜
                                                        </button>
                                                    </a>
                                                </div>
                                                
                                                

                                                

                                                
                                            </div>


                                            
                                                    
                                                </div>

                                                
                                                <!-- <div class="col-md-2 col-6">
                                                    <a href="prof-shibani-ann-missal.php">
                                                        <div class="fcard">
                                                            <img src="img/faculty/shibani-ann-missal.webp" class="fcard-img-top" alt="Prof.Shibani Ann Missal" />
                                                            <div class="fcard-body">
                                                                <p class="fcard-title">Prof.Shibani Ann Missal</p>
                                                                <p class="fcard-deg">Assistant Professor</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div> -->
                                                <!-- <div class="col-md-2 col-6">
                                                    <a href="javascript:void(0)">
                                                        <div class="fcard">
                                                            <img src="img/faculty/priyam-gupta.webp" class="fcard-img-top" alt="Prof.Priyam Gupta" />
                                                            <div class="fcard-body">
                                                                <p class="fcard-title">Prof.Priyam Gupta</p>
                                                                <p class="fcard-deg">Assistant Professor</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div> -->
                                                <!-- <div class="col-md-2 col-6">
                                                    <a href="prof-sowmya-ramkumar.php">
                                                        <div class="fcard">
                                                            <img src="img/faculty/new/prof-sowmya-ramkumar.webp" class="fcard-img-top" alt="Prof. Sowmya Ramkumar" />
                                                            <div class="fcard-body">
                                                                <p class="fcard-title">Prof. Sowmya Ramkumar</p>
                                                                <p class="fcard-deg">Director L&D</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div> -->
                                                
                                        

                                        <div class="catfacdiv">
                                            <h3 class="faclistdegtitlte">General Management</h3>


                                            <div class="max-w-7xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/new/ms-aastha-singh.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Ms. Aastha Singh
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/new/ms-moumita-chakraborty.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Ms. Moumita Chakraborty
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/new/ankit-kumar-mishra.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Mr. Ankit Kumar Mishra
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
                                                    style="background-image: url('img/faculty/new/meenu-choudhary.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Ms. Meenu Choudhary
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/new/sonam-malik.jpg');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Ms. Sonam Malik
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
                                                    style="background-image: url('img/faculty/new/ranjan-abhishek.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Mr. Ranjan Abhishek
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/new/hrishav-ravi.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Mr. Hrishav Ravi
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Marketing
                                                    </p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
                                                    style="background-image: url('img/faculty/new/shankar-babu-jaiswal.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Shankar Babu Jaiswal
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/new/azim-ahmed-barbhuiya.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Azim Ahmed Barbhuiya
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
                                                    style="background-image: url('img/faculty/new/chandan-tripathi.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Chandan Tripathi
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center" 
                                                    style="background-image: url('img/faculty/new/himanshu-singh.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Himanshu Singh
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[22rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center" 
     style="background-image: url('img/faculty/new/munendra-pal.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Munendra Pal
                                                    </h2>
                                                    <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
Assistant Professor
                                                    </p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                

                                            </div>


                                            
                                        </div>




                                        <div class="catfacdiv">
                                            <h3 class="faclistdegtitlte">Visiting Faculty</h3>

                                            <div class="max-w-7xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[26rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center" 
     style="background-image: url('img/faculty/visiting-faculty/sushil-pasricha.jpg');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Prof. Sushil Pasricha
                                                    </h2>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Specialization:</b> Operations, Statistics and Business Analytics</p>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Education:</b> MBA, B. Tech</p>
                                                    <p class="text-gray-500 text-sm"><b>Total Exp.:</b> 42 Years</p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[26rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center" 
     style="background-image: url('img/faculty/visiting-faculty/vinod-jangid.jpg');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Dr. Vinod Jangid
                                                    </h2>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Specialization:</b> Marketing</p>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Education:</b> PhD, MBA, M.Sc., B.Sc.</p>
                                                    <p class="text-gray-500 text-sm"><b>Total Exp.:</b> 25 Years</p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[26rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/visiting-faculty/birendra-prasad.jpg');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Prof. (Dr.) Birendra Prasad
                                                    </h2>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Specialization:</b> Finance & Economics</p>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Education:</b> PhD, MBA, B.Sc.</p>
                                                    <p class="text-gray-500 text-sm"><b>Total Exp.:</b> 26+ Years</p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[26rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
                                                    style="background-image: url('img/faculty/visiting-faculty/manisha-seth.jpg');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Dr. Manisha <span>Seth</span>
                                                    </h2>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Specialization:</b> Operations, Statistics, and Business Analytics</p>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Education:</b> PhD, MBA, B. Tech</p>
                                                    <p class="text-gray-500 text-sm"><b>Total Exp.:</b> 22 Years</p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[26rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty//visiting-faculty/ompal.webp?b=1');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Prof. Ompal <span>Singh</span>
                                                    </h2>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Specialization:</b> Operations, Statistics, and Business Analytics</p>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Education:</b> MBA, MCA, BCA</p>
                                                    <p class="text-gray-500 text-sm"><b>Total Exp.:</b> 18+ Years</p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[26rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/visiting-faculty/ajay-chaturvedi.jpg');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Prof. Ajay <span>Chaturvedi</span>
                                                    </h2>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Specialization:</b> Finance & Economics</p>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Education:</b> CA Intermediate, B.Com</p>
                                                    <p class="text-gray-500 text-sm"><b>Total Exp.:</b> 30 Years</p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[26rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/visiting-faculty/vijeta-singh.jpg');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Prof. Vijeta <span>Singh</span>
                                                    </h2>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Specialization:</b> Corporate Law & Business Law</p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[26rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
                                                    style="background-image: url('img/faculty/visiting-faculty/susmita-paul.jpg');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Dr. Susmita <span>Paul</span>
                                                    </h2>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Specialization:</b> Supply Chain Management</p>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Education:</b> PhD, PGDM, B.E. (Electrical)</p>
                                                    <p class="text-gray-500 text-sm"><b>Total Exp.:</b> 24 Years</p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[26rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/visiting-faculty/dr-raman-sachdeva.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Dr. Raman <span>Sachdeva</span>
                                                    </h2>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Specialization:</b> Finance</p>
                                                    <p class="text-gray-500 text-sm"><b>Total Exp.:</b> 24 Years</p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[26rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
                                                    style="background-image: url('img/faculty/visiting-faculty/dr-deepika-arora.webp');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Dr. Deepika <span>Arora</span>
                                                    </h2>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Specialization:</b> Strategic Management, Marketing</p>
                                                    <p class="text-gray-500 text-sm"><b>Total Exp.:</b> 26 Years</p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[26rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/visiting-faculty/prerna-sehra.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Ms. Prerna <span>Sehra</span>
                                                    </h2>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Specialization:</b> Communicative and Written French</p>
                                                    <p class="text-gray-500 text-sm"><b>Total Exp.:</b> 5.5 Years</p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[26rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/new/amar-kanti.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Amar Kanti
                                                    </h2>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Specialization:</b> Marketing</p>
                                                    <p class="text-gray-500 text-sm"><b>Total Exp.:</b> 12 Years</p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[26rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
                                                    style="background-image: url('img/faculty/new/man.jpg');">
                                               </div>
                                               
                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Surinder Singh Khullar
                                                    </h2>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Specialization:</b> Data Analytics and Decision Science</p>
                                                    <p class="text-gray-500 text-sm"><b>Total Exp.:</b> 25 Years</p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                

                                                <div class="relative bg-white shadow-md p-6 text-center hover:shadow-xl transition group h-[26rem]">
                                                    <div class="w-40 h-40 mx-auto rounded-full border-4 border-indigo-200 bg-cover bg-center"
     style="background-image: url('img/faculty/new/vivekananda-chaudhuri.webp');">
</div>

                                                    <h2 class="text-xl font-semibold mt-4 mb-3 transition-all duration-300 group-hover:text-indigo-600">
                                                        Vivekananda Chaudhuri
                                                    </h2>
                                                    <p class="text-gray-500 text-sm mb-1"><b>Specialization:</b> Basics of Python for Managers</p>
                                                    <p class="text-gray-500 text-sm"><b>Total Exp.:</b> 5 Years</p>
                                                    <a href="javascript:void(0)" class="absolute bottom-2 right-2 w-10 h-10 flex items-center justify-center rounded-full border-2 border-indigo-300 text-indigo-500 transition hover:bg-indigo-500 hover:text-white">
                                                        ➜
                                                    </a>
                                                </div>
                                                
                                                
                                            </div>


                                           
                                        </div>



                                    </div>
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