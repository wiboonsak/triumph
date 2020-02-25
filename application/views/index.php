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
		<meta property="og:url" content="<?php echo base_url('http://www.triumphhatyai.com/')?>"/>


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

		<!-- Start Switcher 
		<div class="switcher-wrapper">	
			<div class="demo_changer">
				<div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
				<div class="form_holder">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="predefined_styles">
								<div class="skin-theme-switcher">
									<h4>Follow us</h4>
									<a href="https://www.facebook.com/search/top/?q=triumph%20hatyai" target="_blank"> <i class="fa fa-facebook-square" style="color:#4267b2; font-size: 40px;"></i> </a>
									<a href="#" target="_blank"> <i class="fa fa-twitter-square" style="color:#4267b2; font-size: 40px;"></i> </a>
									<a href="#" target="_blank"> <i class="fa fa-instagram" style="color:#4267b2; font-size: 40px;"></i> </a>
									<a href="#" target="_blank"> <i class="fa fa-wechat" style="color:#4267b2; font-size: 36px;"></i> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Switcher -->
		
		
		

		<section id="header-top" class="sliders sliders--home">
			<ul class="sliders__main js-slider-main slider enable-bx-slider" data-auto="true" data-auto-hover="true" data-mode="fade" data-pager="false" data-pager-custom="null" data-prev-selector="null" data-next-selector="null">
                            <?php foreach ($SlideDetail->result() AS $data) {
                                $firstImg = $this->Control_model->getSlideImg($data->id);
                            
?>
				<li>
					<img src="<?php echo base_url('uploadfile/banner/') . $firstImg ?>" alt="bxSlider" />
					<div class="sliders__text">
						<h2><?php echo $data->slide_title ?></h2>
						<h3><?php echo $data->slide_detail ?><span class="line line--slider"><span class="line__first"></span><span class="line__second"></span></span></h3>
						<p><?php echo $data->slide_desc?></p>
						<a href="<?php echo base_url('Motocycle_list/category/1')?>" class="btn button button--transparent">LEARN MORE</a>
					</div>
				</li>
				<?php } ?>
			</ul>
		</section><!--sliders-->

		<section class="anons">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-xs-12 wow zoomInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<div class="anons__block triangle triangle--block line-down">
							<div class="anons__img anons__img--bike">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="90px" viewBox="0 0 486.293 486.292" style="enable-background:new 0 0 486.293 486.292;" xml:space="preserve">
									<g>
										<g>
											<path d="M80.128,219.934C35.874,219.934,0,255.809,0,300.063s35.875,80.129,80.128,80.129c44.255,0,80.13-35.875,80.13-80.129
												S124.383,219.934,80.128,219.934z M80.128,344.58c-24.546,0-44.516-19.97-44.516-44.517s19.97-44.517,44.516-44.517
												c24.547,0,44.517,19.97,44.517,44.517S104.675,344.58,80.128,344.58z"/>
											<path d="M406.162,219.934c-9.043,0-17.725,1.52-25.834,4.281l-22.039-34.332c4.744-3.493,9.6-6.639,14.439-9.18v-39.416
												l-35.395,15.954l-32.83-51.138l-64.153-0.002l-11.788,9.813l53.814,17.525l24.184,37.672l-63.847,29.902l-62.425-41.176
												L80.128,143.885v25.598l73.591,56.386l45.561,94.606h88.359l22.822-82.911c0,0,9.184-11.88,22.484-25.354l18.709,29.142
												c-15.754,14.631-25.621,35.514-25.621,58.711c0,44.254,35.875,80.129,80.129,80.129c44.256,0,80.131-35.875,80.131-80.129
												S450.418,219.934,406.162,219.934z M406.162,344.58c-24.545,0-44.516-19.97-44.516-44.517c0-10.533,3.684-20.217,9.822-27.847
												l23.666,36.863l28.096-18.035l-22.562-35.147c1.803-0.224,3.633-0.351,5.494-0.351c24.547,0,44.518,19.97,44.518,44.517
												S430.709,344.58,406.162,344.58z"/>
										</g>
									</g>
								</svg>
							</div>
                                                    <?php 
                                                    $cate= '';
                                                    $catd = $this->Control_model->list_cateData($cate,'1');
                                                   foreach ($catd->result() AS $Catedata){}?>
							<h2><a href="<?php echo base_url('Motocycle_list/category/'.$Catedata->id)?>" class="title no-decoration"><span class="title__bold">Motercycles</span>Offer</a></h2>
							<p class="text">Experience all the thrills of off-road riding with a whole range of immersive and fun riding experiences.</p>
						</div>
					</div>
					<div class="col-md-4 col-xs-12 wow zoomInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<div class="anons__block anons__block--center triangle triangle--block-center">
							<div class="anons__photo"><img class="img-responsive" src="<?php echo base_url('images/media/370x180/news.jpg')?>" alt="news"/></div>
							<div class="anons__color-block">
								<h2><a href="#" class="title no-decoration"><span class="title__bold">News</span> & Promotions</a></h2>
								<p class="text">Triumph Motorcycles</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-xs-12 wow zoomInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<div class="anons__block triangle triangle--block line-down">
							<div class="anons__img">
								<svg version="1.1" id="svg-icon-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" viewBox="0 0 462.792 462.792" style="enable-background:new 0 0 462.792 462.792;" xml:space="preserve">
									<g>
										<g>
											<path d="M112.893,259.1c28.362,4.584,51.671,6.906,69.276,6.907c0.004,0,0.006,0,0.007,0c21.373,0,29.601-3.364,32.737-6.187
												c0.886-0.795,1.477-1.865,1.679-3.038l9.962-57.646c0.21-1.22-0.014-2.476-0.631-3.549c-1.264-2.193-4.223-7.329-34.466-12.53
												c-18.021-3.099-40.844-5.383-64.265-6.431c-2.101-0.087-4.042,1.052-4.978,2.923c-6.441,12.87-16.791,39.698-13.757,74.775
												C108.667,256.747,110.495,258.713,112.893,259.1z"/>
											<path d="M448.068,271.461c5.13-20.027,46.247-191.09-36.521-222.229c-32.525-11.736-69.728-17.687-110.57-17.687
												c-76.192,0-152.922,20.852-203.873,38.345C41.98,88.816,4.186,108.053,3.81,108.245c-2.518,1.288-4.012,3.966-3.788,6.784
												c0.224,2.819,2.121,5.228,4.811,6.104l99.698,32.464c0.603,0.196,1.229,0.31,1.863,0.337
												c77.142,3.354,132.381,13.574,144.16,26.672c2.132,2.372,3.128,4.927,2.964,7.597l-0.059,0.465l-14.412,83.431
												c-0.027,0.166-0.052,0.334-0.067,0.5c-0.107,1.086-0.679,3.258-3.293,5.603c-4.915,4.407-17.377,9.663-48.85,9.663
												c-24.93,0-58.25-3.344-99.035-9.938c-3.078-0.495-6.118,1.103-7.448,3.925L48.552,349.3c-0.508,1.075-0.732,2.263-0.653,3.449
												c0.287,4.321,5.952,40.587,9.938,50.083c0.567,1.352,1.545,2.49,2.795,3.258l39.337,24.125c1.114,0.684,2.383,1.031,3.66,1.031
												c0.794,0,1.592-0.135,2.358-0.408l343.757-123.035c3.312-1.186,5.229-4.644,4.48-8.08L448.068,271.461z"/>
										</g>
									</g>
								</svg>
							</div>
							<?php 
                                                    $Acces= '';
                                                    $Acces_cate = $this->Control_model->list_cateDataAcces($Acces,'1');
                                                   foreach ($Acces_cate->result() AS $Cateacces){}?>
							<h2><a href="<?php echo base_url('Accessories_list/category/'.$Cateacces->id)?>" class="title no-decoration"><span class="title__bold">ACCESSORIES</span>Offer</a></h2>
							<p class="text">We are obsessed with creating the best motorcycles in the world.</p>
						</div>
					</div>

				</div>
			</div>
		</section><!--anons-->

		<section class="we-are ">
			<div class="container">
				<h2 class="title title--main wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">We Are The<span class="title__bold">triumph</span>Club<span class="line line--title"><span class="line__first"></span><span class="line__second"></span></span></h2>
				<p class="text text--anons wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">WELCOME TO THE TRIUMPH ADVENTURE EXPERIENCE<br>
				Experience all the thrills of off-road riding with a whole range of immersive and fun riding experiences designed for riders to build or enhance their off-road capability and skills. We cater for all abilities, from absolute beginners to advanced off-roaders.  </p>
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<div class="we-are__img wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s" style="margin-bottom:0px !important">
						<img class="img-responsive" src="<?php echo base_url('images/media/570x325/moto.jpg')?>" alt="moto"/></div>
						<div class="we-are__block triangle triangle--big wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="2.5s">
							<p style="font-size: 8pt; color:#A20002"><i class="fa fa-calendar"></i> 16/03/2018</p>
							<h3 class="title title--block"><span class="title__bold" style="font-size: 20px !important">TRIUMPH JOIN BANGKOK INTERNATIONAL MOTOR SHOW 2018</h3>
							<p class="text">บริษัท ไทรอัมพ์ มอเตอร์ไซเคิลส์ (ไทยแลนด์) จำกัด เตรียมยกทัพบุกงานมหกรรมยานยนต์</p>
							<a href="#" class="btn button button--red button--main">Read More</a>
						</div>
					</div>
					<div class="col-sm-6 col-xs-12">
						<div class="we-are__img wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s" style="margin-top:0px !important">
						<img class="img-responsive" src="<?php echo base_url('images/media/570x325/moto2.jpg')?>" alt="moto"></div>
						<div class="we-are__block triangle triangle--big wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="2.5s">
							<p style="font-size: 8pt; color:#A20002"><i class="fa fa-calendar"></i> 10/03/2018</p>
							<h3 class="title title--block"><span class="title__bold" style="font-size: 20px !important">TRIUMPH JOIN BANGKOK INTERNATIONAL MOTOR SHOW 2018</h3>
							<p class="text">บริษัท ไทรอัมพ์ มอเตอร์ไซเคิลส์ (ไทยแลนด์) จำกัด เตรียมยกทัพบุกงานมหกรรมยานยนต์</p>
							<a href="#" class="btn button button--red button--main">Read More</a>
						</div>
					</div>
					
				</div>
			</div>
		</section><!--we-are-->


		<div class="images">
			<div class="row row--no-padding">
				<div class="col-xs-4 wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
					<div class="images__one">
						<img src="<?php echo base_url('images/media/530x360/bike1.jpg')?>" class="img-responsive" alt="bike"/>
					</div>
				</div>
				<div class="col-xs-4 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
					<div class="images__one">
						<img src="<?php echo base_url('images/media/530x360/bike2.jpg')?>" class="img-responsive" alt="bike"/>
					</div>
				</div>
				<div class="col-xs-4 wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
					<div class="images__one">
						<img src="<?php echo base_url('images/media/530x360/bike3.jpg')?>" class="img-responsive" alt="bike"/>
					</div>
				</div>
			</div>
		</div><!--images-->

		<section class='info-blocks info-blocks--home2'>
			<div class="container">
				<div class="row">
					<div class="col-xs-6 wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<div class="info-block">
							<h3 class="title title--block"><span class="title__bold">TRIUMPH FACTORY</span> VISITOR EXPERIENCE</h3>
							<p class="text">เปิดแล้ววันนี้: คอลเลกชั่นรถจักรยานยนต์ที่ประเมินค่าไม่ได้ ของที่ระลึก, ร้านกาแฟตกแต่งแบบเฉพาะตัว, ร้านขายของที่ระลึก และทัวร์ชมโรงงานแบบมีผู้บรรยายซึ่งสามารถจองล่วงหน้าได้</p>
							<a href="#" class="btn button  button--transparent button--main">Read More</a>
						</div>
					</div>
					<div class="col-xs-6 wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<div class="info-block">
							<h3 class="title title--block"><span class="title__bold">กลุ่มเสื้อผ้า</span> และผลิตภัณฑ์พิเศษ</h3>
							<p class="text">เสื้อผ้าและอุปกรณ์เสริมที่ออกแบบมาเพื่อแบรนด์ Triumph นับร้อยรายการ เปี่ยมไปด้วยสไตล์ในคุณภาพระดับสูง ทั้งขณะอยู่บนถนนและในชีวิตประจำวัน</p>
							<a href="#" class="btn button button--transparent button--main">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</section><!--info-blocks-->


		<section class="listings listings--home2 dark-bg">
			<div class="container">
				<header class="tab-header clearfix wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
					<h2 class="title title--main pull-left"><span class="title__bold">TRIUMPH</span>MOTORCYCLES<span class="line line--small"><span class="line__first"></span><span class="line__second"></span></span></h2>
					<div class="tab-toggles pull-right js-isotope-btns">
						<a href="#" class="button button--transparent button--main btn js-isotope-btn" data-sort-by="name" id="motor">MOTORCYCLES</a>
						<a href="#" class="button button--transparent button--main btn button--active js-isotope-btn" data-sort-by="original-order" id="access">ACCESSORIES</a>
					</div>
				</header>
				<p class="text text--anons wow slideInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">ความงามอย่างดุดัน นวัตกรรม ความเร้าใจ และความงดงาม คุณจะต้องหลงใหลตั้งแต่ครั้งแรกที่ได้เห็น ต้นแบบรถคัสตอมสุดคลาสสิกสัญชาติอังกฤษTriumph bonneville speedmaster logo DNA ตระกูล Bonneville ที่เหนือกาลเวลา พร้อมแต่งคัสตอมสไตล์สบายๆ</p>
				<div class="row isotope">
					<div class="col-md-4 col-xs-6 isotope-item wow zoomInUp" data-wow-delay="0.7s" data-wow-duration="1.5s" id="motor">
						<a href="#" class="listing-anons equal-height-item listing-anons--home triangle triangle--big line-down no-decoration">
							<div class="listing-anons__img">
								<img src="<?php echo base_url('images/media/products/product-1.jpg')?>" class="img-responsive" alt="bike" />
							</div>
							<div class="listing-anons__title">
								<h4 class="name">BONNEVILLE SPEEDMASTER</h4>
							</div>
							<div class="listing-anons__hidden">
								<h3>BONNEVILLE SPEEDMASTER </h3>
								<p>ต้นแบบรถคัสตอมสุดคลาสสิกสัญชาติอังกฤษ</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-xs-6 isotope-item wow zoomInUp" data-wow-delay="0.7s" data-wow-duration="1.5s" id="motor">
						<a href="#" class="listing-anons equal-height-item listing-anons--home triangle triangle--big line-down no-decoration">
							<div class="listing-anons__img">
								<img src="<?php echo base_url('images/media/products/product-1.jpg')?>" class="img-responsive" alt="bike" />
							</div>
							<div class="listing-anons__title">
								<h4 class="name">BONNEVILLE SPEEDMASTER</h4>
							</div>
							<div class="listing-anons__hidden">
								<h3>BONNEVILLE SPEEDMASTER </h3>
								<p>ต้นแบบรถคัสตอมสุดคลาสสิกสัญชาติอังกฤษ</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-xs-6 isotope-item wow zoomInUp" data-wow-delay="0.7s" data-wow-duration="1.5s" id="motor">
						<a href="#" class="listing-anons equal-height-item listing-anons--home triangle triangle--big line-down no-decoration">
							<div class="listing-anons__img">
								<img src="<?php echo base_url('images/media/products/product-1.jpg')?>" class="img-responsive" alt="bike" />
							</div>
							<div class="listing-anons__title">
								<h4 class="name">BONNEVILLE SPEEDMASTER</h4>
							</div>
							<div class="listing-anons__hidden">
								<h3>BONNEVILLE SPEEDMASTER </h3>
								<p>ต้นแบบรถคัสตอมสุดคลาสสิกสัญชาติอังกฤษ</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-xs-6 isotope-item wow zoomInUp" data-wow-delay="0.7s" data-wow-duration="1.5s" id="access">
						<a href="#" class="listing-anons equal-height-item listing-anons--home triangle triangle--big line-down no-decoration">
							<div class="listing-anons__img">
								<img src="<?php echo base_url('images/media/products/product-1.jpg')?>" class="img-responsive" alt="bike" />
							</div>
							<div class="listing-anons__title">
								<h4 class="name">BONNEVILLE SPEEDMASTER</h4>
							</div>
							<div class="listing-anons__hidden">
								<h3>BONNEVILLE SPEEDMASTER </h3>
								<p>ต้นแบบรถคัสตอมสุดคลาสสิกสัญชาติอังกฤษ</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-xs-6 isotope-item wow zoomInUp" data-wow-delay="0.7s" data-wow-duration="1.5s" id="access">
						<a href="#" class="listing-anons equal-height-item listing-anons--home triangle triangle--big line-down no-decoration">
							<div class="listing-anons__img">
								<img src="<?php echo base_url('images/media/products/product-1.jpg')?>" class="img-responsive" alt="bike" />
							</div>
							<div class="listing-anons__title">
								<h4 class="name">BONNEVILLE SPEEDMASTER</h4>
							</div>
							<div class="listing-anons__hidden">
								<h3>BONNEVILLE SPEEDMASTER </h3>
								<p>ต้นแบบรถคัสตอมสุดคลาสสิกสัญชาติอังกฤษ</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-xs-6 isotope-item wow zoomInUp" data-wow-delay="0.7s" data-wow-duration="1.5s" id="access">
						<a href="#" class="listing-anons equal-height-item listing-anons--home triangle triangle--big line-down no-decoration">
							<div class="listing-anons__img">
								<img src="<?php echo base_url('images/media/products/product-1.jpg')?>" class="img-responsive" alt="bike" />
							</div>
							<div class="listing-anons__title">
								<h4 class="name">BONNEVILLE SPEEDMASTER</h4>
							</div>
							<div class="listing-anons__hidden">
								<h3>BONNEVILLE SPEEDMASTER </h3>
								<p>ต้นแบบรถคัสตอมสุดคลาสสิกสัญชาติอังกฤษ</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section><!--listings-->

		
		<!--home-footer-->
	
		<!--home-footer-->
		
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