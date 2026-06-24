<?php 
include('admin/dbc.php');
include('admin/function.php');
$actual_link = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$url=$_SERVER['REQUEST_URI'];
$exurl=explode('/', $url);

$exdburl=explode('.',$exurl[2]);

$sql=mysqli_query($conn,"select * from tbl_lifegniot Where lifeurl='$exdburl[0]'");
$row=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $row['title'];?> | Best PGDM College | GIMS</title>
	<meta name="description" content="<?php $str=$row['description']; echo substr($str,0,160);?>"/>
	<meta name="keywords" content="Best PGDM College in Delhi NCR, GNIOT Institute of Management Studies, Top PGDM Colleges in Greater Noida, Top PGDM Colleges in UPTU, Best Management Colleges in India, UPSEE Best PGDM colleges ,Top  GBTU Institutes,Top Management institute"/>
	<Meta name="Robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo page_link();?>img/fevicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo page_link();?>img/fevicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo page_link();?>img/fevicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo page_link();?>img/fevicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo page_link();?>img/fevicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo page_link();?>img/fevicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo page_link();?>img/fevicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo page_link();?>img/fevicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo page_link();?>img/fevicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo page_link();?>img/fevicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo page_link();?>img/fevicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo page_link();?>img/fevicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo page_link();?>img/fevicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo page_link();?>img/fevicon//manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo page_link();?>img/fevicon/favicon.ico" />
    <link rel="stylesheet" href="<?php echo page_link();?>vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo page_link();?>vendors/fullpage/fullpage.css">
    <link rel="stylesheet" href="<?php echo page_link();?>vendors/elagent-icon/style.css">
    <link rel="stylesheet" href="<?php echo page_link();?>vendors/animation/animate.css">
    <link rel="stylesheet" href="<?php echo page_link();?>css/style.css">
    <link rel="stylesheet" href="<?php echo page_link();?>css/responsive.css">
    <link rel="stylesheet" href="<?php echo page_link();?>css/home.css">
    <link rel="stylesheet" href="<?php echo page_link();?>css/settings.css">
	<link rel="stylesheet" href="<?php echo page_link();?>css/font-icons.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo page_link();?>css/base.css" />
	<link rel="stylesheet" href="<?php echo page_link();?>css/lightbox.min.css">
	<script src="<?php echo page_link();?>js/lightbox-plus-jquery.min.js"></script>
	<?php include "header.php"; ?>
	<style>
	    .new-pd4 {
    padding: 50px 0px !important;
}
	</style>

<style>
    /* *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    } */

        /* .container{
         width: 100%;
         height: auto;
         display: flex;
         justify-content: center;
         align-items: center;
         padding: 50px 8%;
        } */
        .gallery{
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
         grid-gap: 30px;
        }
        .gallery img{
            width: 100%;
            height: auto;
            object-fit: cover;
            aspect-ratio: 1;
            border-radius: 10px 0  10px 0;
            position: relative;
        }
        .gallery a{
            position: relative;
        }
        .svg-icon-link{
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #364C88;
            font-size: 40px;
            color: white;
            border-radius: 50%;
            line-height: 60px; 
            padding: 10px;
            z-index: 13;
            box-shadow: 10px 10px 20px 0px rgba(255, 255, 255, 0.733);
        }

        .gallery-box:hover .svg-icon-link,.gallery-box:hover  .img-gallery::before {
            opacity: 1;
        }
   

             .gallery-box::before {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 0;
                background-color: rgba(253, 200, 0, 0.7);
                transition: height 0.3s ease-out; 
                z-index: 10;
            }

            .gallery-box:hover::before {
                height: 100%;
            }
        .gallery-box:hover::before {
                opacity: 1;
            }
       


  </style>
</head>
<body class="home_four">
	<?php include "top-inside.php"; ?>
	
    <div id="wavescroll">
		
		<section class="section wave_two_section_two">
            <div id="particles-js" class="p_absoulte"></div>
            <img class="t_two p_absoulte" src="<?php echo page_link();?>img/home_one/triangle_shap_two.png" alt="">
            <img class="t_shap p_absoulte" src="<?php echo page_link();?>img/home_three/shap.png" alt="">
            <img class="b_shap p_absoulte" src="<?php echo page_link();?>img/home_three/shap_two.png" alt="">
            <img class="dot_one p_absoulte" src="<?php echo page_link();?>img/home_three/dot.png" alt="">
            <img class="dot_two p_absoulte" src="<?php echo page_link();?>img/home_three/dot-1.png" alt="">
            <div class="text" style="font-size:34px;">Latest News</div>
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
							  <li><a href="../life-at-gims-pgdm-college.php">Life @ GIMS</a></li>
							  <li>News Detail</li>
							</ul>
						</div>
						<div class="col-lg-12">
							<h1 class="page-t"><?php echo $row['title'];?></h1>
							<h3 class="sub-t">Top Management Campus in Greater Noida</h3>
						</div>
                        <div class="col-md-12 no-padding">
							<div class="row">
								<div class="col-lg-9">
									<div class="col-lg-12 new-pd9 awardbg2">
										<p>
											<span>
												<i class="icon-calendar" aria-hidden="true"></i> <?php $datex=explode(",",date("j F, Y, g:i a", strtotime($row["date"])));echo $datex[0]."".$datex[1]?> <br/>
												<i class="icon-map-marker" aria-hidden="true"></i> <?php echo $row['location'];?> <br/>
											</span>
										</p>
										<p class="">
										   <br/>
											<?php echo $row['description'];?>
											<br/>
											<br/>
										</p>
										<p class="no-padding">&nbsp;</p>										
										<div class="row">
											<?php
											    $img=explode(',',$row['image']);
										        count($img);
										        for($i=0;count($img)-1>$i;$i++){
											?>
												
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														<div class="gallery-box"><a
													href="<?php echo page_link(); ?>lifegniotimg/<?php echo $img[$i]; ?>"
													data-lightbox="mygallery"
													data-title="<?php echo $row['title']; ?>"
													class="gallery-box"
												>
															<img src="<?php echo page_link(); ?>lifegniotimg/<?php echo $img[$i]; ?>" class="img-gallery" alt="gallery">
															<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-link-45deg svg-icon-link" viewBox="0 0 16 16">
																<path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
																<path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
															</svg> 
														
												</a>
														 </div>
													</div>
											<?php } ?>
										</div>
										<p>&nbsp;</p>
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
    <script src="<?php echo page_link();?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo page_link();?>vendors/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo page_link();?>vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo page_link();?>vendors/fullpage/scroll-overflow.js"></script>
    <script src="<?php echo page_link();?>vendors/fullpage/fullpage.js"></script>
    <script src="<?php echo page_link();?>js/parallax.js"></script>
    <script src="<?php echo page_link();?>js/custom.js"></script>
    <script src="<?php echo page_link();?>js/main.js"></script>
	<?php include "scripts.php"; ?>
</body>
</html>