<?php
include('admin/dbc.php');
include('admin/function.php');
include('include/config.php');
$slug = $_GET['slug'] ?? '';

$news_sql = mysqli_query($conn, "SELECT * FROM tbl_latest_news WHERE newsurl='$slug'");
$news_row = mysqli_fetch_array($news_sql);

if(!$news_row){
    die("No data found");
}
?>
<head>




    <!-- Custom Vanilla CSS -->
    <style>
        :root {
            --primary-blue: #103BE8;
            --accent-yellow: #ffb400;
            --bg-gray: #f8fafc;
            --white: #ffffff;
            --text-dark: #1e293b;
            --text-muted: #64748b;
            --shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg-gray);
            color: var(--text-dark);
            margin: 0;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 25px;
        }

        /* Hero Banner */
        .hero-banner {
            background-color: var(--primary-blue);
            background-size: cover;
            background-position: center;
            padding: 160px 0 120px;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .hero-banner::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(16, 60, 232, 0.75) 0%, rgba(16, 60, 232, 0.4) 100%);
            z-index: 1;
        }

        .hero-banner .container {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            margin-bottom: 2rem;
            line-height: 1.1;
            letter-spacing: -0.02em;
            text-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        .breadcrumbs {
            display: flex;
            gap: 0.75rem;
            list-style: none;
            padding: 0;
            margin-bottom: 2.5rem;
            font-size: 0.9rem;
            font-weight: 500;
            opacity: 0.8;
        }

        .breadcrumbs a {
            color: inherit;
            text-decoration: none;
            transition: var(--transition);
        }

        .breadcrumbs a:hover {
            color: var(--accent-yellow);
        }

        .breadcrumbs li:not(:last-child)::after {
            content: '/';
            margin-left: 0.75rem;
            opacity: 0.4;
        }

        /* Layout Grid */
        .main-section {
            padding: 60px 0 80px;
            margin-top: 20px;
            position: relative;
            z-index: 10;
        }

        .news-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 60px;
        }

        @media (min-width: 1024px) {
            .news-grid {
                grid-template-columns: 8fr 4fr;
            }
        }

        /* Content Card */
        .content-card {
            background: var(--white);
            border-radius: 40px;
            padding: 40px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(0,0,0,0.05);
        }

        @media (min-width: 768px) {
            .content-card {
                padding: 60px;
            }
        }

        .meta-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 2.5rem;
            padding-bottom: 2.5rem;
            border-bottom: 1px solid #f1f5f9;
        }

        .meta-badge {
            background: #f1f5f9;
            padding: 10px 20px;
            border-radius: 100px;
            font-size: 0.85rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .meta-badge i {
            color: var(--primary-blue);
        }

        .news-description {
            font-size: 1.1rem;
            color: #475569;
            line-height: 1.8;
            text-align: justify;
        }

        /* Gallery */
        .gallery-title {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin: 4rem 0 2rem;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .gallery-title::before {
            content: '';
            width: 8px;
            height: 32px;
            background: var(--accent-yellow);
            border-radius: 4px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px;
        }

        @media (min-width: 640px) {
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .gallery-item {
            position: relative;
            aspect-ratio: 4/3;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
            border: 4px solid var(--white);
            transition: var(--transition);
        }

        .gallery-item:hover {
            transform: scale(1.03);
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.2);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(16, 60, 232, 0.8), transparent);
            opacity: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .zoom-btn {
            background: var(--accent-yellow);
            color: var(--white);
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translateY(20px);
            transition: var(--transition);
            text-decoration: none;
        }

        .gallery-item:hover .zoom-btn {
            transform: translateY(0);
        }

        /* Sidebar */
        .sidebar-item {
            background: var(--white);
            border-radius: 40px;
            /* padding: 35px; */
            box-shadow: var(--shadow);
            margin-bottom: 30px;
            border: 1px solid rgba(0,0,0,0.05);
        }

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--white);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <title>Latest News | Best PGDM College | GIMS</title> -->
	<meta name="description"
		content="Latest News - GNIOT Institute of Management Studies One of The Best PGDM Campus and Top College for PGDM provides Best PGDM private Colleges in Delhi, India." />
	<meta name="keywords"
		content="Best PGDM College in Delhi NCR, GNIOT Institute of Management Studies,  Top PGDM Colleges in Greater Noida, Top PGDM Colleges in UPTU, Best Management Colleges in India, UPSEE Best PGDM colleges ,Top  GBTU Institutes,Top Management institute" />
	<Meta name="Robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>

<body>
    <div id="wrapper">
        <?php include "top-menu.php"; ?>

        <div class="hero-banner" style="background-image: url('<?php echo $mainurl; ?>img/banner/college.jpg');">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="<?php echo $mainurl; ?>index.php">Home</a></li>
                    <li><a href="<?php echo $mainurl; ?>latest-news.php">Latest News</a></li>
                    <li>Detailed News</li>
                </ul>
                <h1 class="hero-title"><?php echo $news_row['title']; ?></h1>
            </div>
        </div>

        <section class="main-section">
            <div class="container">
                <div class="news-grid">
                    
                    <div class="news-content-col">
                        <article class="content-card">
                            <div class="meta-container">
                                <div class="meta-badge">
                                    <i class="fa fa-calendar"></i>
                                    <span><?php $datex=explode(",",date("j F, Y", strtotime($news_row["date"])));echo $datex[0]."".$datex[1]?></span>
                                </div>
                                <div class="meta-badge">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <span><?php echo $news_row['location'];?></span>
                                </div>
                            </div>

                            <div class="news-description">
                                <?php echo $news_row['description'];?>
                            </div>

                            <h3 class="gallery-title">Event Gallery</h3>
                            <div class="gallery-grid">
                                <?php 
                                    $img=explode(',',$news_row['images']);
                                    for($i=0;count($img)-1>$i;$i++){
                                ?>
                                <div class="gallery-item">
                                    <img src="<?php echo $mainurl; ?>latestnews/<?php echo $img[$i]; ?>" alt="News Image">
                                    <div class="gallery-overlay">
                                        <a href="<?php echo $mainurl; ?>latestnews/<?php echo $img[$i]; ?>" class="zoom zoom-btn">
                                            <i class="fa fa-expand-alt"></i>
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </article>
                    </div>

                    <aside class="sidebar-col">
                        <div class="sidebar-item">
                            <?php include "about-sidebar.php"; ?>
                        </div>
                        <!-- <div class="sidebar-item">
                            <?php include('sidebar-gniot.php'); ?>
                        </div> -->
                    </aside>

                </div>
            </div>
        </section>

        <?php include "footer.php"; ?>
    </div>
	<?php include "footer-bottom.php"; ?>

    <!-- Scripts -->
    <script src="<?php echo $mainurl; ?>javascript/jquery-2.2.4.min.js"></script>
    <script src="<?php echo $mainurl; ?>javascript/plugins.js"></script>
    <script src="<?php echo $mainurl; ?>javascript/bootstrap.min.js"></script>
    <script src="<?php echo $mainurl; ?>javascript/wow.min.js"></script>
    <script src="<?php echo $mainurl; ?>javascript/jquery.meanmenu.min.js"></script>
    <script src="<?php echo $mainurl; ?>javascript/jquery.scrollUp.min.js"></script>
    <script src="<?php echo $mainurl; ?>javascript/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $mainurl; ?>javascript/main.js"></script>
    
    <script>
        $(window).on('load', function() {
            $('#preloader').fadeOut('slow', function() {
                $(this).remove();
            });
        });

        $(document).ready(function() {
            $('.gallery-grid').magnificPopup({
                delegate: '.zoom',
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-with-zoom',
                zoom: {
                    enabled: true,
                    duration: 300,
                    easing: 'ease-in-out'
                }
            });
        });
    </script>
</body>

</html>