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
              <?php foreach($productDetail->result() AS $product2){}?>
		<section class="status status--shop dark-bg dark-bg--shop">
			<div class="container wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
				<div class="breadcumb">
					<a href="<?php echo base_url('Welcome/index')?>" class="breadcumb__page no-decoration">Home</a>
					<span class="breadcumb__del no-decoration">&raquo;</span>
					<a href="<?php echo base_url('Motocycle_list/category')?>" class="breadcumb__page no-decoration">Shop Categories</a>
				</div>
                        
                           <h2 class="title title--page"><span class="title__bold"><?php echo $product2->category_title?></span>  <?php echo $product2->motorcycle_name?> </h2>

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
                                <div class="categories">
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
									<div class="blog-date triangle triangle--big wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s" style="width: 200px !important">
										<div class="blog-date__num">
											<?php echo $product2->motorcycle_price?>
										</div>
										<div class="blog-date__month-year">
											บาท
										</div>
<!--
										<div class="blog-date__month-year">
											*inc vat
										</div>
              -->
									</div>
									<div class="article__img wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
										<ul class="js-blog-slider enable-bx-slider" data-auto="true" data-auto-hover="true" data-mode="fade" data-pager="false" data-pager-custom="null" data-prev-selector="null" data-next-selector="null">
                                                                                   <?php $n=1; foreach($imagesList->result() AS $img){
										if($n==1){
											$txtAct = "item active";
										}else{
											$txtAct = "item";
										}
										?>
                                                                                    
											<li><a href="javascript:void(0)" data-image="<?php echo base_url('uploadfile/product/').$img->imge_name?>" data-zoom-image="<?php echo base_url('uploadfile/product/').$img->imge_name?>"><img src="<?php echo base_url('uploadfile/product/').$img->imge_name?>" alt="" /></a></li>
                                                                                    <?php }?>	
										</ul>
									</div>
									<!--<div class="article__comments-author wow slideInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
										<span class="article__author"><span class="fa fa-user"></span>Posted By: Club Admin</span>
										<span class="article__comments"><span class="fa fa-comment-o"></span>20 Comments</span>
									</div>-->
									<h3 class="article-title wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s"><?php echo $product2->motorcycle_name?></h3>
									<p class="blog-text blog-text--article wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s"><?php echo $product2->motorcycle_desc?></p>
									<!--<a href="article.html" class="btn button button--main button--grey transparent wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">Read More</a>-->
									<span class="line line--title line--blog-title line--article wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s"><span class="line__first"></span><!--<span class="line__second"></span>--></span>									
								</div>

							</div>
							
						</div>
					
						<div class="share clearfix wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<h6 style="padding-top: 18px">Share This Product</h6>
							<div class="share__social"><a class="no-decoration" href="#"><i class="fa fa-facebook-square fa-3x" style="color:#8A0000"></i></a></div>
							<div class="share__social"><a class="no-decoration" href="#"><i class="fa fa-twitter-square fa-3x" style="color:#8A0000"></i></a></div>
							<div class="share__social"><a class="no-decoration" href="#"><i class="fa fa-google-plus-square fa-3x" style="color:#8A0000"></i></a></div>
						</div>
						<div class="aside-tabs aside-tabs--about aside-tabs--item wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<div class="aside-tabs__links">
								<a href="#" class="no-decoration aside-tabs__active-link js-tab-link" data-for="#engine">เครื่องยนต์และระบบส่งกำลัง</a>
                                                                
							<a href="#" class="no-decoration js-tab-link" data-for="#chassis">โครงรถ</a>
								<a href="#" class="no-decoration js-tab-link" data-for="#dimension">DIMENSIONS AND WEIGHTS</a>
								<a href="#" class="no-decoration js-tab-link" data-for="#wastage">อัตราการสิ้นเปลืองน้ำมันเชื้อเพลิง</a>-->
								<a href="#" class="no-decoration js-tab-link" data-for="#rev">โบรชัวร์</a>
							</div>
                                                    <div class="tabscontent">
						<div class="aside-tabs__blocks about-tab js-tab-block" id="engine">
                                                          
                                                            <ul>	
                                                                <li> ประเภท : <?php echo $product2->engine_Type?></li> 
                                                                <br>
                                                                <li> ความจุ : <?php echo $product2->engine_Capacity?></li>
                                                                <br>
										<li>Bore Stroke : <?php echo $product2->engine_BoreStroke?></li>
                                                                                <br>
										<li>Compression : <?php echo $product2->engine_Compression?></li>
                                                                                <br>
										<li>กำลัง ec สูงสุด : <?php echo $product2->engine_MaxPowerEC?></li>
                                                                                <br>
										<li>แรงบิด ec สูงสุด : <?php echo $product2->engine_MaxTorqueEC?></li>
                                                                                <br>
										<li>ระบบ : <?php echo $product2->engine_System?></li>
                                                                                <br>
										<li>ท่อไอเสีย : <?php echo $product2->engine_Exhaust?></li>
                                                                                <br>
										<li>ไฟนอลไดรฟ์ : <?php echo $product2->engine_FinalDrive?></li>
                                                                                <br>
										<li>คลัตช์ : <?php echo $product2->engine_Clutch?></li>
                                                                                <br>
										<li>กระปุกเกียร์ : <?php echo $product2->engine_Gearbox?></li>
                                                                                
									</ul>
                                                          
							</div>
                                                    <div class="aside-tabs__blocks about-tab js-tab-block" id="chassis">
                                           
								<ul>
                                                                    <li>เฟรม : <?php echo $product2->chassis_Frame?></li>
                                                                    <br>
                                                                    <li>สวิงอาร์ม : <?php echo $product2->chassis_Swingarm?></li>
                                                                    <br>
                                                                    <li>ล้อหน้า : <?php echo $product2->chassis_FrontWheel?></li>
                                                                    <br>
                                                                    <li>ล้อหลัง : <?php echo $product2->chassis_RearWheel?></li>
                                                                    <br>
                                                                    <li>ยางหน้า : <?php echo $product2->chassis_FrontTyre?></li>
                                                                    <br>
                                                                    <li>ยางหลัง : <?php echo $product2->chassis_RearTyre?></li>
                                                                    <br>
                                                                    <li>ระบบกันสะเทือนหน้า : <?php echo $product2->chassis_FrontSuspension?></li>
                                                                    <br>
                                                                    <li>ระบบกันสะเทือนหลัง : <?php echo $product2->chassis_RearSuspension?></li>
                                                                    <br>
                                                                    <li>เบรกหน้า : <?php echo $product2->chassis_FrontBrakes?></li>
                                                                    <br>
                                                                    <li>เบรกหลัง : <?php echo $product2->chassis_RearBrakes?></li>
                                                                    <br>
                                                                    <li>แผงหน้าปัดและฟังก์ชัน : <?php echo $product2->chassis_Display?></li>
                                                                    
										
									</ul>
                                                    </div>
                           <div class="aside-tabs__blocks about-tab js-tab-block" id="dimension">
                                                   
								<ul>
                                                                    <li>ความยาว : <?php echo $product2->dimension_WidthHandlebars?></li>
                                                                    <br>
                                                                    <li>ความกว้างของแฮนด์รถ : <?php echo $product2->dimension_HeightWithoutMirror?></li>
                                                                    <br>
                                                                    <li>ความสูงโดยไม่รวมกระจก : <?php echo $product2->dimension_SeatHeight?></li>
                                                                    <br>
                                                                    <li>ความสูงของเบาะนั่ง : <?php echo $product2->dimension_Wheelbase?></li>
                                                                    <br>
                                                                    <li>ระยะระหว่างล้อหน้ากับล้อหลัง : <?php echo $product2->dimension_Rake?></li>
                                                                    <br>
                                                                    <li>เรค : <?php echo $product2->dimension_Trail?></li>
                                                                    <br>
                                                                    <li>เทรล : <?php echo $product2->dimension_DryWeight?></li>
                                                                    <br>
                                                                    <li>น้ำหนักแห้ง : <?php echo $product2->dimension_TankCapacity?></li>
                                                                    <br>
                                                                    <li>น้ำหนักของตัวรถรวมอุปกรณ์มาตรฐานต่างๆ ของตัวรถ : <?php echo $product2->dimension_Length?></li>
                                                                    <br>
                                                                    <li>ความจุถัง : <?php echo $product2->dimension_TotalWeight?></li>
                                                                    

									</ul>
                                              
							</div><!--
-->                                                    <div class="aside-tabs__blocks about-tab js-tab-block" id="wastage">
                                                        <p>
								<ul>
                                                                    <li>เขตเมือง : <?php echo $product2->wastage_Area?></li>
                                                                    <br>
                                                                    <li>Constant Speed 56mph 90kph : <?php echo $product2->wastage_Constant56mph?></li>
                                                                    <br>
                                                                    <li>ความเร็วคงที่ 120 กิโลเมตรต่อชั่วโมง (75 mph) : <?php echo $product2->wastage_Constant75mph?></li>
                                                                    <br>
                                                                    <li>อัตราการสิ้นเปลืองน้ำมันเชื้อเพลิง : <?php echo $product2->wastage_FuelConsumption?></li>
                                                                    <br>
                                                                    <li>CO2 figures : <?php echo $product2->wastage_CO2Figures?></li>
                                                                    

									</ul>
                                                    </p>
								
							</div><!--
-->							<div class="aside-tabs__blocks about-tab js-tab-block" id="rev">
							<?php foreach($catalogueList->result() AS $catlogue){?>
												
													<td class="text-right"  ><a  href="<?php echo base_url('uploadfile/catalogue/').$catlogue->imge_name?>" target="_blank"><span class="color"><i class="fa fa-download"></i></span></a></td>
													<td><?php echo $catlogue->txtTitle?></td>
												
												<?php }?>
									
							
							</div>
								
							</div>
                                                   
							
						</div>
						<div>
							<h2 class="shop-title wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">RELATED PRODUCTS<span class="line line--title line--shop"><span class="line__first"></span><span class="line__second"></span></span></h2>
                                                         
							<div class="row row--items">
                                                          <?php 
                                                         

foreach ($product->result() AS $data) {
   $firstImg = $this->Control_model->getFirstImg($data->id);
    ?>
								<div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
									<div class="item-cell js-cell equal-height-item">

										<div class="item-cell__top">

											<div class="item-cell__img">
                                                        <img src="<?php echo base_url('uploadfile/product/') . $firstImg ?>" class="img-responsive center-block" alt="item"/>
                                                    </div>
                                                    <div class="item-cell__actions">
                                                        <a href="<?php echo base_url('Motocycle_list/product_detail/').$data->motorcycle_category .'/'.$data->id?>" class="add-to-cart"><span class="fa fa-search-plus"> Details </span></a>
											</div>
										</div>
										<div class="item-cell__bottom">
                                                    <h1 class="item-title"><a class="no-decoration" href="<?php echo base_url('Motocycle_list/product_detail') ?>"><?php echo $data->motorcycle_name ?></a></h1>
                                                    <div class="item-cell__info clearfix">
                                                        <div class="item-price pull-left">เริ่มต้น <?php echo $data->motorcycle_price ?> บาท</div>
										</div>
									</div>
                                                                           
								</div>
                                                                    
								
										</div>
                                                             <?php }
?>
									</div>
								</div>
								
							
						</div>
					
					
					</div>
				</div>
			</div>
		<!--blog-page-->
 
		<!--Main-->   
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
                
   
    <script src="<?php echo base_url('js/tabbedcontent.js')?>"></script>
    <script src="<?php echo base_url('js/analytics.js')?>"></script>
    <script>
        var tabs;
        jQuery(function($) {
            tabs = $('.tabscontent').tabbedContent({loop: true}).data('api');

            // switch to tab...
            $("a[href='#click-to-switch']").on('click', function(e) {
                var tab = prompt('Tab to switch to (number or id)?');
                if (!tabs.switchTab(tab)) {
                    alert('That tab does not exist :\\');
                }
                e.preventDefault();
            });

            // Next and prev actions
            $('.controls a').on('click', function(e) {
                var action = $(this).attr('href').replace('#', '');
                tabs[action]();
                e.preventDefault();
            });
        });
    </script>
	</body>
</html>