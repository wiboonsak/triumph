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
		<section class="status status--shop dark-bg dark-bg--shop">
			<div class="container wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
				<div class="breadcumb">
					<a href="<?php echo base_url('Welcome/index')?>" class="breadcumb__page no-decoration">Home</a>
					<span class="breadcumb__del no-decoration">&raquo;</span>
					<a href="<?php echo base_url('News')?>" class="breadcumb__page no-decoration">News & Promotions</a>
				</div>
				<h2 class="title title--page"><span class="title__bold">News &</span> Promotions</h2>
			</div>
		</section><!--status-->
		
		
		
		<div class="blog-page">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-5">
						<aside class="blog-aside">
							<div class="blog-aside__block wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
								<h3 class="blog-title">SEARCH<span class="line line--title line--blog-title"><span class="line__first"></span><span class="line__second"></span></span></h3>
								<form action="/" method="post">
									<div class="relative-pos"><input placeholder="Type your keyword" class="search-input" type="text" name="search" /><button type="submit"><span class="fa fa-search"></span></button></div>
								</form>
							</div>
							<div class="blog-aside__block wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
								<h3 class="blog-title">SHOP CATEGORIES<span class="line line--title line--blog-title"><span class="line__first"></span><span class="line__second"></span></span></h3>
								<?php include('menu.php')?>
							</div>
							<div class="blog-aside__block wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
								<h3 class="blog-title">Tags<span class="line line--title line--blog-title"><span class="line__first"></span><span class="line__second"></span></span></h3>
								<div class="blog-aside__tags">
									<a href="#" class="btn button button--grey button--tag triangle">Latest Bikes</a>
									<a href="#" class="btn button button--grey button--tag triangle">Motorcycles</a>
									<a href="#" class="btn button button--grey button--tag triangle">SEO</a>
									<a href="#" class="btn button button--grey button--tag triangle">Races</a>
									<a href="#" class="btn button button--grey button--tag triangle">Club Membership</a>
									<a href="#" class="btn button button--grey button--tag triangle">Event</a>
									<a href="#" class="btn button button--grey button--tag triangle">Upcoming Events</a>
									<a href="#" class="btn button button--grey button--tag triangle">2019 Bikes</a>
								</div>
							</div>
						</aside>
					</div>
					<div class="col-md-9 col-sm-8 col-xs-7">
						<div class="blog-main">
							<div class="articles">
								<div class="article">
<?php
foreach ($newsDetail->result() AS $data) {
    $firstImg = $this->Control_model->getNewsImg($data->id);
    ?>
									<div class="blog-date triangle triangle--big wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
										<div class="blog-date__num">
											<?php echo $this->Control_model->getDay($data->news_date_add); ?>
										</div>
                                                                            <div class="blog-date__month-year">
											<?php echo $this->Control_model->getMonth($data->news_date_add); ?>
										</div>
                                                                            <div class="blog-date__month-year">
											<?php echo $this->Control_model->getYear($data->news_date_add); ?>
										</div>
									</div>
									<div class="article__img wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
										<ul class="js-blog-slider enable-bx-slider" data-auto="true" data-auto-hover="true" data-mode="fade" data-pager="false" data-pager-custom="null" data-prev-selector="null" data-next-selector="null">
											<li><img src="<?php echo base_url('uploadfile/news/') . $firstImg ?>" alt="blog" class="img-responsive" /></li>
										</ul>
									</div>
									<div class="article__comments-author wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
										<span class="article__author"><span class="fa fa-user"></span>Posted By: Admin</span>
										<!--<span class="article__comments"><span class="fa fa-comment-o"></span>20 Comments</span>-->
									</div>
									<h3 class="article-title"><?php echo $data->news_title ?></h3>
									<p class="blog-text blog-text--article" ><?php echo $data->news_detail?></p>
									<div class="share clearfix wow slideInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
										<h6>Share This Article</h6>
										<div class="share__social"><a class="no-decoration" href="#"><i class="fa fa-facebook-square fa-3x" style="color:#8A0000"></i></a></div>
										<div class="share__social"><a class="no-decoration" href="#"><i class="fa fa-twitter-square fa-3x" style="color:#8A0000"></i></a></div>
										<div class="share__social"><a class="no-decoration" href="#"><i class="fa fa-google-plus-square fa-3x" style="color:#8A0000"></i></a></div>
									</div>
<?php } ?>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div><!--blog-page-->
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