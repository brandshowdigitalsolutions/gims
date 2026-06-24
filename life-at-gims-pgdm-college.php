<?php 
include('admin/dbc.php');
include('admin/function.php');
$limit = 10;  // Number of entries to show in a page. 
    // Look for a GET variable page if not found default is 1.      
    if (isset($_GET["page"])) {  
      $pn  = $_GET["page"];  
    }  
    else {  
      $pn=1;  
    };   
  
    $start_from = ($pn-1) * $limit;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Life @ GIMS | Best PGDM College | GIMS</title>
	<meta name="description" content="Life @ GIMS - GNIOT Institute of Management Studies One of The Best PGDM Campus and Top College for PGDM provides Best PGDM private Colleges in Delhi, India."/>
	<meta name="keywords" content="Best PGDM College in Delhi NCR, GNIOT Institute of Management Studies,  Top PGDM Colleges in Greater Noida, Top PGDM Colleges in UPTU, Best Management Colleges in India, UPSEE Best PGDM colleges ,Top  GBTU Institutes,Top Management institute"/>
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
	<link rel="icon" type="image/png" sizes="192x192"  href="img/fevicon/android-icon-192x192.png">
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
		.lifcont{
			display: -webkit-box;
			-webkit-line-clamp: 2;
			-webkit-box-orient: vertical;
			overflow: hidden;
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
            <div class="text" style="font-size:34px;">Life @ GIMS</div>
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
							  <li>Life @ GIMS</li>
							</ul>
						</div>
						<div class="col-lg-12">
							<h1 class="page-t">Life @ GIMS</h1>
							<h3 class="sub-t">PGDM Campus - Greater Noida</h3>
						</div>
                        <div class="col-md-12 no-padding">
							<div class="row">
								<div class="col-lg-9">
									<div class="col-lg-12 new-pd9 awardbg2">
										<?php 
											global $conn;
											$sql=mysqli_query($conn,"select * from tbl_lifegniot ORDER BY STR_TO_DATE(date, '%m/%d/%Y') DESC LIMIT $start_from, $limit");
											while($row=mysqli_fetch_array($sql)){
										?>
										<div class="single-item line-b">
											<div class="item-img">
												<?php $imgex=explode(",",$row['image']);?>
												<a href="<?php echo page_link();?>life-at-gims/<?php echo $row['lifeurl'];?>.html"><img src="<?php echo page_link();?>lifegniotimg/<?php echo $imgex[1];?>" alt="event" class="img-responsive"></a>
											</div>
											<div class="item-content">
												<h3 class="sidebar-title"><a href="<?php echo page_link();?>life-at-gims/<?php echo $row['lifeurl'];?>.html"><?php echo $row['title'];?></a></h3>
												<ul class="event-info-block">
													<li><i class="icon-calendar" aria-hidden="true"></i> <?php $datex=explode(",",date("j F, Y, g:i a", strtotime($row["date"])));echo $datex[0]."".$datex[1]?></li>
													<li><i class="icon-map-marker" aria-hidden="true"></i> <?php echo $row['location'];?></li>
												</ul>
												<div class="lifcont">
													<p class="no-padding"><?php echo $row['description'];?></p>
												</div>
												<a href="<?php echo page_link();?>life-at-gims/<?php echo $row['lifeurl'];?>.html" class="newsbutton">Read More <i class="icon-long-arrow-right"></i></a>
											</div>
										</div>
										<?php } ?>
										<ul class="pagination-center">
											<?php   
												$sql = "SELECT COUNT(*) FROM tbl_lifegniot";   
												$rs_result = mysqli_query($conn,$sql);   
												$row = mysqli_fetch_row($rs_result);   
												$total_records = $row[0];   
												  
												// Number of pages required. 
												$total_pages = ceil($total_records / $limit);   
												$pagLink = "";                         
												for ($i=1; $i<=$total_pages; $i++) { 
												  if ($i==$pn) { 
													  $pagLink .= "<li class='active'><a href='life-at-gims-pgdm-college.php?page="
																						.$i."'>".$i."</a></li>"; 
												  }             
												  else  { 
													  $pagLink .= "<li><a href='life-at-gims-pgdm-college.php?page=".$i."'> 
																						".$i."</a></li>";   
												  } 
												};   
												echo $pagLink;   
											  ?> 
										</ul>
										<p class="no-padding">&nbsp;</p>
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
</body>
</html>