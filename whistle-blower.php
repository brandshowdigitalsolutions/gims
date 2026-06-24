<?php
include('admin/dbc.php');
include('admin/function.php');

$health_msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['health_issue'])) {
    $name = isset($_POST['reporter_name']) ? htmlspecialchars($_POST['reporter_name']) : 'Not Provided';
    $email = isset($_POST['reporter_email']) ? htmlspecialchars($_POST['reporter_email']) : 'Not Provided';
    $issue = htmlspecialchars($_POST['health_issue']);

    $to = "campushealth@gims.net.in";
    $subject = "New Campus Health Issue Reported";
    $message = "A new campus health issue has been reported:\n\n";
    $message .= "Name: " . $name . "\n";
    $message .= "Email ID: " . $email . "\n\n";
    $message .= "Issue Description:\n" . $issue;

    $headers = "From: noreply@gims.net.in\r\n";
    $headers .= "Reply-To: noreply@gims.net.in\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        $health_msg = "<script>alert('Your campus health issue has been reported successfully. The administration has been notified.');</script>";
    } else {
        $health_msg = "<script>alert('There was an error submitting your report. Please try again later.');</script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Whistle Blower</title>
    <meta name="description"
        content="Dr. Shalini Sharma, an accomplished Associate Professor and Dean at GIMS, specializes in entrepreneurial success. With a PhD in management from Amity University, her research focuses on entrepreneurial psychology, algorithmic management, and neurodiversity. A prolific author, her publications are indexed in Scopus, ABDC, and ABS. Certified in NLP and TTT by the British Council, she brings a diverse background in academia, sales, and HR & administration. Discover Dr. Sharma's expertise in driving entrepreneurial excellence and skill development. Benefit from her profound insights and extensive experience in this captivating field. " />
    <meta name="keywords"
        content="Dr. Shalini Sharma, GIMS faculty members,GIMS faculty profiles,GIMS faculty directory,GIMS faculty qualifications,GIMS faculty expertise,GIMS faculty research areas,GIMS faculty publications,GIMS faculty contact information,GIMS faculty achievements,GIMS faculty experience,GIMS faculty specializations,GIMS faculty academic background,GIMS faculty professional affiliations,GIMS faculty teaching philosophy." />


    <meta name="author" content="BrandShow">
    <meta name="Robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="Copyright © GNIOT Institute of Management Studies. All Rights Reserved." />
    <!-- Favicon -->

    <link rel="alternate" href="https://www.gims.net.in/shalini-sharma.php" hreflang="es-us" />
    <link rel="canonical" href="https://www.gims.net.in/shalini-sharma.php">

    <!-- Search Engine -->
    <meta name="image" content="https://www.gims.net.in/img/gims-logo.jpg">

    <!-- Facebook Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Dr. Shalini Sharma: Renowned of  Professor-Dean ">
    <meta property="og:description"
        content="Dr. Shalini Sharma, an accomplished Associate Professor and Dean at GIMS, specializes in entrepreneurial success. With a PhD in management from Amity University, her research focuses on entrepreneurial psychology, algorithmic management, and neurodiversity. A prolific author, her publications are indexed in Scopus, ABDC, and ABS. Certified in NLP and TTT by the British Council, she brings a diverse background in academia, sales, and HR & administration. Discover Dr. Sharma's expertise in driving entrepreneurial excellence and skill development. Benefit from her profound insights and extensive experience in this captivating field.">
    <meta property="og:url" content="https://www.gims.net.in/shalini-sharma.php">
    <meta property="fb:app_id" content="573928583391257">


    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@GNIOTCollege">
    <meta name="twitter:title" content="Dr. Shalini Sharma: Renowned of  Professor-Dean ">
    <meta name="twitter:description"
        content="Dr. Shalini Sharma, an accomplished Associate Professor and Dean at GIMS, specializes in entrepreneurial success. With a PhD in management from Amity University, her research focuses on entrepreneurial psychology, algorithmic management, and neurodiversity. A prolific author, her publications are indexed in Scopus, ABDC, and ABS. Certified in NLP and TTT by the British Council, she brings a diverse background in academia, sales, and HR & administration. Discover Dr. Sharma's expertise in driving entrepreneurial excellence and skill development. Benefit from her profound insights and extensive experience in this captivating field.">

    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Dr. Shalini Sharma: Renowned of  Professor-Dean " />
    <meta name="og:url" content="https://www.gims.net.in/shalini-sharma.php">
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
            "url": "https://www.gims.net.in/shalini-sharma.php",
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
    <?php include "header.php"; ?>

</head>

<body class="home_four">
    <?php echo $health_msg; ?>
    <?php include "top-menu.php"; ?>

    <div id="wavescroll">

        <section class="section wave_two_section_two">
            <div id="particles-js" class="p_absoulte"></div>
            <img class="t_two p_absoulte" src="img/home_one/triangle_shap_two.png" alt="">
            <img class="t_shap p_absoulte" src="img/home_three/shap.png" alt="">
            <img class="b_shap p_absoulte" src="img/home_three/shap_two.png" alt="">
            <img class="dot_one p_absoulte" src="img/home_three/dot.png" alt="">
            <img class="dot_two p_absoulte" src="img/home_three/dot-1.png" alt="">
            <div class="text" style="font-size:34px;">Prof.(Dr.) Shalini Sharma</div>
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
                                <li>Whistle Blower</li>

                            </ul>
                        </div>
                        <div class="col-lg-12">
                            <h1 class="page-t">Whistle Blower Policy</h1>
                            <h3 class="sub-t">Campus Health</h3>
                        </div>
                        <div class="col-md-12 no-padding">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="col-lg-12 new-pd9 awardbg2">
                                        <div class="health-option-container"
                                            style="padding: 30px; background: #fff; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-left: 5px solid #0b2b4e; border-radius: 8px; margin-bottom: 30px;">
                                            <h4 style="color: #0b2b4e; margin-bottom: 15px; font-weight: 600;">Campus
                                                Health Reporting</h4>
                                            <p style="margin-bottom: 20px; font-size: 16px; color: #555;">Use the option
                                                below to provide detailed information regarding any campus health
                                                concern. Your report will be securely sent to the designated
                                                authorities.</p>
                                            <button type="button" class="btn btn-primary" id="campusHealthBtn"
                                                data-toggle="modal" data-target="#campusHealthModal"
                                                style="background-color: #0b2b4e; border-color: #0b2b4e; padding: 10px 30px; font-size: 16px; border-radius: 5px; transition: all 0.3s ease;">
                                                Campus Health
                                            </button>
                                        </div>
                                        <!-- Campus Health Modal -->
                                        <div class="modal fade" id="campusHealthModal" tabindex="-1" role="dialog"
                                            aria-labelledby="campusHealthModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content"
                                                    style="border-radius: 8px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
                                                    <form method="POST" action="">
                                                        <div class="modal-header"
                                                            style="background-color: #0b2b4e; color: white; border-radius: 8px 8px 0 0;">
                                                            <h5 class="modal-title" id="campusHealthModalLabel"
                                                                style="color: white; font-weight: 600;">
                                                                Report Campus
                                                                Health Issue</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close" style="color: white; opacity: 0.8;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="padding: 25px;">
                                                            <div class="form-group">
                                                                <label for="reporterName"
                                                                    style="font-weight: 600; color: #333; margin-bottom: 10px; font-size: 16px;">Your
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="reporterName" name="reporter_name" required
                                                                    placeholder="Enter your full name"
                                                                    style="border-radius: 5px; border: 1px solid #ccc; padding: 10px; margin-bottom: 15px;">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="reporterEmail"
                                                                    style="font-weight: 600; color: #333; margin-bottom: 10px; font-size: 16px;">Your
                                                                    Email ID</label>
                                                                <input type="email" class="form-control"
                                                                    id="reporterEmail" name="reporter_email" required
                                                                    placeholder="Enter your email address"
                                                                    style="border-radius: 5px; border: 1px solid #ccc; padding: 10px; margin-bottom: 15px;">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="healthIssue"
                                                                    style="font-weight: 600; color: #333; margin-bottom: 10px; font-size: 16px;">Describe
                                                                    the campus health issue here.</label>
                                                                <textarea class="form-control" id="healthIssue"
                                                                    name="health_issue" rows="6" required
                                                                    placeholder="Please provide detailed information regarding the concern..."
                                                                    style="border-radius: 5px; border: 1px solid #ccc; padding: 15px;"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer"
                                                            style="border-top: 1px solid #eee; padding: 15px 25px;">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal"
                                                                style="border-radius: 5px; padding: 8px 20px;">Cancel</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                style="background-color: #0b2b4e; border-color: #0b2b4e; border-radius: 5px; padding: 8px 25px;">Submit
                                                                Report</button>
                                                        </div>
                                                    </form>
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

    <style>
        /* Prevent scrollbar from hiding and shifting page content when modal opens */
        body.modal-open {
            overflow: auto !important;
            padding-right: 0 !important;
        }
    </style>

    <script>
        $(document).ready(function () {
            var $modal = $('#campusHealthModal');
            if ($modal.length) {
                $modal.appendTo('body');
            }
        });
    </script>
</body>

</html>