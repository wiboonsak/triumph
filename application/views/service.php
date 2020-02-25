<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Triumph Motorcycles Triumph รถจักรยานยนต์ | For the Ride</title>  	
    	<meta name="description" content="The official Triumph site. Motorcycles that deliver the complete riding experience. View our range of bikes, find a dealer and test ride a Triumph icon today."/>
    	<meta name="author" content="ME-FI.COM"/>
    	<meta name="robots" content="INDEX,FOLLOW" />
    	<!-- Google+ -->
		<meta itemprop="name" content="For the Ride"/>
		<!-- Twitter -->
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:title" content="For the Ride" />
		<!-- OpenGraph -->
		<meta property="og:title" content="For the Ride"/>
		<meta property="og:type" content="website"/>
		<meta property="og:site_name" content="Triumph Motorcycles"/>
		<meta property="og:url" content="http://www.triumphhatyai.com/"/>


		<link rel="icon" type="image/x-icon" href="<?php echo base_url('images/media/favicon.png')?>" />
		<link href="<?php echo base_url('css/master.css')?>" rel="stylesheet">
		

		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="<?php echo base_url('assets/switcher/css/switcher.css')?>" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('assets/switcher/css/color1.css')?>" title="color1" media="all" data-default-color="true"  />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('assets/switcher/css/color2.css')?>" title="color2" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('assets/switcher/css/color3.css')?>" title="color3" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('assets/switcher/css/color4.css')?>" title="color4" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('assets/switcher/css/color5.css')?>" title="color5" media="all" />

		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Loader -->
		<div id="page-preloader"><span class="spinner"></span></div>
		<!-- Loader end -->	
		<section class="status status--dark dark-bg dark-bg--about">
			<div class="container wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
				<div class="breadcumb">
					<a href="<?php echo base_url('Welcome/index')?>" class="breadcumb__page no-decoration">Home</a>
					<span class="breadcumb__del no-decoration">&raquo;</span>
					<a href="<?php echo base_url('Service')?>" class="breadcumb__page no-decoration">SERVICE&SUPPORT</a>
				</div>
				<h2 class="title title--page"><span class="title__bold">SERVICE & </span>SUPPORT</h2>
			</div>
		</section><!--status-->
		

		<section class="about-us">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 col-xs-12">
						<h1 class=" wow slideInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">Service & <span>Support</span></h1>
						<div class="about-us__mission wow slideInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<div><span class="fa  fa-quote-right"></span></div>
							<h2>การให้บริการของ TRIUMPH<span class="line line--title line--center"><span class="line__first"></span><span class="line__second"></span></span></h2>
						</div>
						<p class="about-us__text wow slideInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">เราทุ่มเทเพื่อช่วยให้คุณสามารถบำรุงรักษารถเพื่อการขับขี่ที่สมบูรณ์แบบที่สุด</p>
					</div>
				</div>
			</div>
		</section><!--about-us-->

		<section class="about-info" style="padding-top: 1px !important">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-xs-12 wow slideInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                            
						<div class="services__info">
                                                    <?php foreach ($serviceDetail->result() AS $data){?>
							<div class="services__info-block">
								<h5 class="clearfix services__title"><a class="pull-left no-decoration js-toggle" href="#"><?php echo $data->service_name ?></a><a class="square square--toggle pull-right js-toggle"><span class="fa fa-plus"></span></a></h5>
								<div class="services__text triangle triangle--services">
							<?php echo $data->service_desc ?>		
								</div>
							</div>
                                                    <?php } ?>
                                                </div>
                                         </div>  
					<div class="col-md-5 col-xs-12 wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<img src="<?php echo base_url('images/media/about/about-3.jpg')?>" class="img-responsive">
					</div>
                                             
				
			</div>
		</section><!--about-info-->
		<!--Main-->   
		<script src="<?php echo base_url('js/jquery-1.11.3.min.js')?>"></script>
		<script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
		<script src="<?php echo base_url('js/modernizr.custom.js')?>"></script>
		<!--Counter-->
		<script src="<?php echo base_url('assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js')?>"></script>
		<script src="<?php echo base_url('js/waypoints.min.js')?>"></script>
		<script src="<?php echo base_url('js/jquery.easypiechart.min.js')?>"></script>
		<script src="<?php echo base_url('js/classie.js')?>"></script>
		<!--Switcher-->
		<script src="<?php echo base_url('assets/switcher/js/switcher.js')?>"></script>		
		<!--Owl Carousel-->
		<script src="<?php echo base_url('assets/owl-carousel/owl.carousel.min.js')?>"></script>		
		<!--bxSlider-->
		<script src="<?php echo base_url('assets/bxslider/jquery.bxslider.min.js')?>"></script>		
		<!-- jQuery UI Slider -->
		<script src="<?php echo base_url('assets/slider/jquery.ui-slider.js')?>"></script>		
		<!--Isotope-->
		<script src="<?php echo base_url('assets/isotope/isotope.js')?>"></script>
		<!--Slider-->
		<script src="<?php echo base_url('assets/slider/jquery.ui-slider.js')?>"></script>		
		<!--Fancybox-->
		<script src="<?php echo base_url('assets/fancybox/jquery.fancybox.pack.js')?>"></script>
		<!--Theme-->
		<script src="<?php echo base_url('js/jquery.smooth-scroll.js')?>"></script>
		<script src="<?php echo base_url('js/wow.min.js')?>"></script>
		<script src="<?php echo base_url('js/jquery.placeholder.min.js')?>"></script>
		<script src="<?php echo base_url('js/theme.js')?>"></script>
	</body>
</html>