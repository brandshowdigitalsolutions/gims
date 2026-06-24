<?php

include('admin/dbc.php');

include('admin/function.php');

?>

<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Global Engagement Gallery | Top Management Colleges in Greater Noida</title>

    <meta name="description"
        content="Global Engagement Gallery - GNIOT Institute of Management Studies One of The Best PGDM Campus and Top College for PGDM provides Best PGDM private Colleges in Delhi, India." />

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

    <link rel="stylesheet" href="popup/lightbox.css">

    <?php include "header.php"; ?>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", sans-serif;
            background: #f4f1ef;
            color: #111;
        }

        .container {
            max-width: 1480px;
            margin: auto;
            padding: 24px;
        }

        /* TOP BAR */

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .topbar h1 {
            font-size: 42px;
            font-weight: 700;
        }

        .top-right {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .chip {
            background: white;
            padding: 12px 18px;
            border-radius: 18px;
            font-size: 14px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .refresh-btn {
            background: #111;
            color: white;
            padding: 16px 26px;
            border-radius: 40px;
            border: none;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
        }

        /* GRID */

        .grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 20px;
        }

        /* CARD */

        .card {
            background: white;
            border-radius: 6px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .hero-card {
            height: 350px;
            position: relative;
        }

        .small-card {
            height: 350px;
        }

        .bottom-card {
            height: 360px;
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.75),
                    rgba(0, 0, 0, 0.15));
        }

        .content {
            position: absolute;
            bottom: 24px;
            left: 24px;
            right: 24px;
            color: white;
            z-index: 2;
        }

        .content p {
            font-size: 14px;
            margin-bottom: 10px;
            opacity: 0.9;
        }

        .content h2 {
            font-size: 36px;
            line-height: 1.2;
            font-weight: 700;
        }

        .content h3 {
            font-size: 20px;
            line-height: 1.4;
            font-weight: 700;
        }

        /* BREAKING */

        .tag {
            position: absolute;
            top: 18px;
            left: 18px;
            background: red;
            color: white;
            font-size: 13px;
            padding: 7px 12px;
            border-radius: 12px;
            font-weight: 600;
            z-index: 5;
        }

        /* ARTICLE CARD */

        .article {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .article-image {
            height: 190px;
        }

        .article-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .article-content {
            padding: 20px;
        }

        .article-content span {
            font-size: 13px;
            color: #666;
            display: block;
            margin-bottom: 10px;
        }

        .article-content h4 {
            font-size: 20px;
            line-height: 1.5;
            font-weight: 700;
        }

        /* VIDEO CARD */

        .video-card {
            position: relative;
            overflow: hidden;
            border-radius: 28px;
            height: 360px;
        }

        .video-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.7),
                    rgba(0, 0, 0, 0.1));
        }

        .video-controls {
            position: absolute;
            top: 18px;
            right: 18px;
            display: flex;
            gap: 10px;
            z-index: 3;
        }

        .control-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            cursor: pointer;
        }

        .video-content {
            position: absolute;
            bottom: 22px;
            left: 22px;
            right: 22px;
            color: white;
            z-index: 3;
        }

        .video-content h3 {
            font-size: 30px;
            line-height: 1.3;
            margin-top: 10px;
        }

        .video-content p {
            font-size: 14px;
            opacity: 0.9;
        }

        .bottom-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 2fr;
            gap: 20px;
            margin-top: 20px;
        }

        .last-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 20px;
            margin-top: 20px;
        }

        @media (max-width: 1100px) {

            .grid,
            .bottom-grid {
                grid-template-columns: 1fr;
            }

            .hero-card,
            .small-card,
            .bottom-card,
            .video-card {
                height: auto;
            }

            .hero-card img,
            .small-card img,
            .video-card img {
                height: 350px;
            }

            .topbar h1 {
                font-size: 30px;
            }
        }

        /* HERO CAROUSEL */

        .hero-card {
            position: relative;
            height: 380px;
            overflow: hidden;
        }

        .carousel {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .carousel-slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity 0.5s ease;
            pointer-events: none;
        }

        .carousel-slide.active {
            opacity: 1;
            pointer-events: auto;
        }

        .carousel-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* BUTTONS */

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 46px;
            height: 46px;
            border: none;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.45);
            color: white;
            font-size: 22px;
            cursor: pointer;
            z-index: 10;
            transition: 0.3s;
        }

        .carousel-btn:hover {
            background: rgba(0, 0, 0, 0.7);
        }

        .carousel-btn.prev {
            left: 18px;
        }

        .carousel-btn.next {
            right: 18px;
        }

        /* DOTS */

        .carousel-dots {
            position: absolute;
            bottom: 18px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 12;
        }

        .dot {
            width: 11px;
            height: 11px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: 0.3s;
        }

        .dot.active-dot {
            background: white;
            width: 28px;
            border-radius: 20px;
        }

        .hero-card {
            position: relative;
            overflow: hidden;
        }

        .carousel {
            position: relative;
            width: 100%;
            height: 500px;
        }

        .carousel-slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .carousel-slide.active {
            opacity: 1;
            z-index: 1;
        }

        .carousel-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.35);
            z-index: 1;
        }

        .content {
            position: absolute;
            left: 40px;
            bottom: 40px;
            color: #fff;
            z-index: 2;
            max-width: 70%;
        }

        .content p {
            margin: 0 0 10px;
            font-size: 14px;
        }

        .content h2 {
            margin: 0;
            font-size: 32px;
            line-height: 1.3;
            font-weight: 700;
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 5;
            background: rgba(0, 0, 0, 0.5);
            border: none;
            color: #fff;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
        }

        .carousel-btn.prev {
            left: 20px;
        }

        .carousel-btn.next {
            right: 20px;
        }

        .carousel-dots {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 5;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            display: inline-block;
            margin: 0 5px;
            cursor: pointer;
        }

        .active-dot {
            background: #fff;
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

            <div class="text" style="font-size:34px;">Gallery</div>

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

                                <li><a href="#">Campus</a></li>

                                <li>Gallery</li>

                            </ul>

                        </div>

                        <div class="col-lg-12">

                            <h1 class="page-t">Global Engagement Gallery</h1>

                            <h3 class="sub-t">GIMS - Greater Noida</h3>

                        </div>

                        <div class="col-md-12 no-padding">

                            <div class="row">

                                <div class="col-lg-12 new-pd9 ">
                                    <div class="container">



                                        <!-- TOP GRID -->

                                        <div class="grid">

                                            <!-- HERO CARD -->

                                            <!-- HERO CAROUSEL -->

                                            <div class="card hero-card">

                                                <div class="carousel" id="heroCarousel"></div>

                                                <!-- ARROWS -->
                                                <button class="carousel-btn prev" onclick="changeSlide(-1)">
                                                    ❮
                                                </button>

                                                <button class="carousel-btn next" onclick="changeSlide(1)">
                                                    ❯
                                                </button>

                                                <!-- DOTS -->
                                                <div class="carousel-dots" id="carouselDots"></div>

                                            </div>

                                            <script>

                                                /* JSON DATA */

                                                const carouselData = [
                                                    {
                                                        image:
                                                            "https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1400&auto=format&fit=crop",
                                                        source: "makemytrip.com • Sponsored",
                                                        title:
                                                            "Sanwer Hotel Rooms - Sanwer Five Star Hotel - Best Bank Offers & Discounts"
                                                    },

                                                    {
                                                        image:
                                                            "https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=1400&auto=format&fit=crop",
                                                        source: "Travel India • 2h",
                                                        title:
                                                            "Explore beautiful lakes and mountains this summer with luxury stays"
                                                    },

                                                    {
                                                        image:
                                                            "https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=1400&auto=format&fit=crop",
                                                        source: "Luxury Homes • Featured",
                                                        title:
                                                            "Inside modern dream homes with premium interiors and ocean views"
                                                    },

                                                    {
                                                        image:
                                                            "https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1400&auto=format&fit=crop",
                                                        source: "Nature Today • Trending",
                                                        title:
                                                            "Top destinations for peaceful vacations surrounded by nature"
                                                    }
                                                ];


                                                /* ELEMENTS */

                                                const carousel = document.getElementById("heroCarousel");
                                                const dotsContainer = document.getElementById("carouselDots");

                                                let currentSlide = 0;


                                                /* CREATE SLIDES */

                                                carouselData.forEach((item, index) => {

                                                    const slide = document.createElement("div");
                                                    slide.classList.add("carousel-slide");

                                                    if (index === 0) {
                                                        slide.classList.add("active");
                                                    }

                                                    slide.innerHTML = `
                                                    <img src="${item.image}" alt="">
                                                
                                                    <div class="overlay"></div>
                                                
                                                    <div class="content">
                                                        <p>${item.source}</p>
                                                        <h2>${item.title}</h2>
                                                    </div>
                                                    `;

                                                    carousel.appendChild(slide);


                                                    /* DOTS */

                                                    const dot = document.createElement("span");
                                                    dot.classList.add("dot");

                                                    if (index === 0) {
                                                        dot.classList.add("active-dot");
                                                    }

                                                    dot.addEventListener("click", () => {
                                                        showSlide(index);
                                                    });

                                                    dotsContainer.appendChild(dot);

                                                });


                                                /* SHOW SLIDE */

                                                function showSlide(index) {

                                                    const slides = document.querySelectorAll(".carousel-slide");
                                                    const dots = document.querySelectorAll(".dot");

                                                    if (index >= slides.length) {
                                                        currentSlide = 0;
                                                    } else if (index < 0) {
                                                        currentSlide = slides.length - 1;
                                                    } else {
                                                        currentSlide = index;
                                                    }

                                                    slides.forEach((slide) => {
                                                        slide.classList.remove("active");
                                                    });

                                                    dots.forEach((dot) => {
                                                        dot.classList.remove("active-dot");
                                                    });

                                                    slides[currentSlide].classList.add("active");
                                                    dots[currentSlide].classList.add("active-dot");
                                                }


                                                /* CHANGE SLIDE */

                                                function changeSlide(direction) {
                                                    showSlide(currentSlide + direction);
                                                }


                                                /* AUTO PLAY */

                                                setInterval(() => {
                                                    changeSlide(1);
                                                }, 5000);

                                            </script>

                                            <!-- BREAKING NEWS -->

                                            <div class="card small-card">

                                                <!-- <span class="tag">Breaking news</span> -->

                                                <img src="https://images.unsplash.com/photo-1495020689067-958852a7765e?q=80&amp;w=1000&amp;auto=format&amp;fit=crop"
                                                    alt="">

                                                <div class="overlay"></div>

                                                <div class="content">
                                                    <p>Curated by Copilot • 54m</p>

                                                    <h3>
                                                        Patna court halts Khan Sir’s arrest in firing case
                                                    </h3>
                                                </div>

                                            </div>

                                            <!-- SIDE ARTICLE -->

                                            <div class="article small-card">

                                                <div class="article-image">
                                                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?q=80&amp;w=1000&amp;auto=format&amp;fit=crop"
                                                        alt="">
                                                </div>

                                                <div class="article-content">
                                                    <span>Filmfare • 17h</span>

                                                    <h4>
                                                        I am that darkskinned middle-class man - R Madhavan
                                                        on remaining grounded
                                                    </h4>
                                                </div>

                                            </div>

                                        </div>

                                        <!-- BOTTOM GRID -->

                                        <div class="bottom-grid">

                                            <!-- ARTICLE 1 -->

                                            <div class="article bottom-card">

                                                <div class="article-image">
                                                    <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?q=80&amp;w=1000&amp;auto=format&amp;fit=crop"
                                                        alt="">
                                                </div>

                                                <div class="article-content">
                                                    <span>Hindustan Times • 1w</span>

                                                    <h4>
                                                        Why young adult romances never go out of style
                                                    </h4>
                                                </div>

                                            </div>

                                            <!-- ARTICLE 2 -->

                                            <div class="article bottom-card">

                                                <div class="article-image">
                                                    <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?q=80&amp;w=1000&amp;auto=format&amp;fit=crop"
                                                        alt="">
                                                </div>

                                                <div class="article-content">
                                                    <span>The Times of India</span>

                                                    <h4>
                                                        Why archaeologists don’t want to open China’s
                                                        2,200-year-old emperor Qin Shi Huang’s tomb
                                                    </h4>
                                                </div>

                                            </div>

                                            <!-- VIDEO CARD -->

                                            <div class="video-card">

                                                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&amp;w=1400&amp;auto=format&amp;fit=crop"
                                                    alt="">

                                                <div class="video-overlay"></div>


                                                <div class="video-content">

                                                    <p>Gorillo • Follow • 6d</p>

                                                    <h3>
                                                        Minecraft farming tips to help you gather
                                                        resources faster
                                                    </h3>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="last-grid">

                                            <!-- ARTICLE 1 -->

                                            <div class="article bottom-card">

                                                <div class="article-image">
                                                    <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?q=80&amp;w=1000&amp;auto=format&amp;fit=crop"
                                                        alt="">
                                                </div>

                                                <div class="article-content">
                                                    <span>Hindustan Times • 1w</span>

                                                    <h4>
                                                        Why young adult romances never go out of style
                                                    </h4>
                                                </div>

                                            </div>

                                            <!-- ARTICLE 2 -->

                                            <div class="article bottom-card">

                                                <div class="article-image">
                                                    <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?q=80&amp;w=1000&amp;auto=format&amp;fit=crop"
                                                        alt="">
                                                </div>

                                                <div class="article-content">
                                                    <span>The Times of India</span>

                                                    <h4>
                                                        Why archaeologists don’t want to open China’s
                                                        2,200-year-old emperor Qin Shi Huang’s tomb
                                                    </h4>
                                                </div>

                                            </div>
                                            <div class="article bottom-card">

                                                <div class="article-image">
                                                    <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?q=80&amp;w=1000&amp;auto=format&amp;fit=crop"
                                                        alt="">
                                                </div>

                                                <div class="article-content">
                                                    <span>The Times of India</span>

                                                    <h4>
                                                        Why archaeologists don’t want to open China’s
                                                        2,200-year-old emperor Qin Shi Huang’s tomb
                                                    </h4>
                                                </div>

                                            </div>
                                            <div class="article bottom-card">

                                                <div class="article-image">
                                                    <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?q=80&amp;w=1000&amp;auto=format&amp;fit=crop"
                                                        alt="">
                                                </div>

                                                <div class="article-content">
                                                    <span>The Times of India</span>

                                                    <h4>
                                                        Why archaeologists don’t want to open China’s
                                                        2,200-year-old emperor Qin Shi Huang’s tomb
                                                    </h4>
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