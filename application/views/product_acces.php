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
        <meta property="og:url" content="<?php echo base_url('http://www.triumphhatyai.com/') ?>"/>


        <link rel="icon" type="image/x-icon" href="<?php echo base_url('images/media/favicon.png') ?>" />
        <link href="<?php echo base_url('css/master.css') ?>" rel="stylesheet">


        <!-- SWITCHER -->
        <link rel="stylesheet" id="switcher-css" type="text/css" href="<?php echo base_url('assets/switcher/css/switcher.css') ?>" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('assets/switcher/css/color1.css') ?>" title="color1" media="all" data-default-color="true"  />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('assets/switcher/css/color2.css') ?>" title="color2" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('assets/switcher/css/color3.css') ?>" title="color3" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('assets/switcher/css/color4.css') ?>" title="color4" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('assets/switcher/css/color5.css') ?>" title="color5" media="all" />

        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Loader -->
        <div id="page-preloader"><span class="spinner"></span></div>
        <!-- Loader end -->	
        <section class="status status--shop dark-bg dark-bg--shop">
            <div class="container wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
                <div class="breadcumb">
                    <a href="<?php echo base_url('Welcome/index') ?>" class="breadcumb__page no-decoration">Home</a>
                    <span class="breadcumb__del no-decoration">&raquo;</span>
                    <a href="<?php echo base_url('accessories_list/category/') ?>" class="breadcumb__page no-decoration">Shop Categories</a>
                </div>
                <!--<h2 class="title title--page"><span class="title__bold">Products</span> Shop</h2>-->
            </div>
        </section><!--status-->

        <section class="shop">
            <div class="container">
                <!--<div class="row">
                        <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                                <div class="about-us about-us--shop wow zoomInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                        <h1>Our online store offers wide range of
                                                <span>Bikes and Motorcycles</span> products at cheap rates!</h1>
                                </div>
                        </div>
                </div>-->
               
                <div class="row row--main-shop">
                    <div class="col-md-3 col-sm-4 col-xs-5">
                        <aside class="blog-aside">
                            <div class="blog-aside__block wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                <h3 class="blog-title">SEARCH<span class="line line--title line--blog-title"><span class="line__first"></span><span class="line__second"></span></span></h3>
                                <form action="/" method="post">
                                    <div class="relative-pos"><input placeholder="Type your keyword" class="search-input" type="text" name="search" /><button type="submit"><span class="fa fa-search"></span></button></div>
                                </form>
                            </div>
                            <div class="blog-aside__block wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                <h3 class="blog-title">SHOP ACCESSORIES<span class="line line--title line--blog-title"><span class="line__first"></span><span class="line__second"></span></span></h3>
                                <div class="categories">
<?php include('menu_acces.php')?>
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
                       </div>
                            </div>
                        </aside>
                    

                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-6">
                        
                        <div class="shop-main">
                                <header class="shop-main__head clearfix wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                  
                                    <h4 class="pull-left" ><?php echo $cateGoryName?>  Showing <span id="result"><?php echo $productList_acces->num_rows();?></span> results</h4>
                                </header>
                                        
                          <div class="items">
                                <div class="row">
<?php
$cateGoryID = $this->uri->segment(3);  $limit =''; $notUse ='';
$countAll=$this->Control_model->productList($cateGoryID,$limit,$notUse,'-100','-100');

        $countRow = $countAll->num_rows(); 
        $totalRow = ceil($countRow/$perpage);
foreach ($productList_acces->result() AS $data) {
    $firsImg = $this->Control_model->getFirstImg1($data->id);
    ?>
                                        <div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                            <div class="item-cell js-cell equal-height-item">
                                                <div class="item-cell__top">
                                                    <div class="sale triangle-sale"><span>New</span></div>
                                                    <div class="item-cell__img">
                                                        <img src="<?php echo base_url('uploadfile/product/') . $firsImg ?>" class="img-responsive center-block" alt="item"/>
                                                    </div>
                                                    <div class="item-cell__actions">
                                                        <a href="<?php echo base_url('accessories_list/product_detail/') .$data->accessories_category .'/'.$data->id ?>"  class="add-to-cart" >
                                                           <span class="fa fa-search-plus"> Details</span></a>
                                                        <!--<a href="#" class="see-detail"><span class="fa fa-search-plus">  </span></a>-->
                                                    </div>
                                                </div>
                                                <div class="item-cell__bottom">
                                                    <h1 class="item-title"><a class="no-decoration" ><?php echo $data->accessories_name ?></a></h1>
                                                    <div class="item-cell__info clearfix">
                                                        <div class="item-price pull-left">เริ่มต้น <?php echo $data->accessories_price ?> บาท</div>
                                                        <!--<div class="stars pull-right">
                                                                <span class="star star--none"></span>
                                                                <span class="star"></span>
                                                                <span class="star"></span>
                                                                <span class="star"></span>
                                                                <span class="star"></span>
                                                        </div>-->
                                                    </div>

                                            </div>
                                                 </div>
                                              </div>
                                    <?php }
?>
                                       </div>
                                </div>
                                            <div class="pagination wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                                <span class="pagination__text">Page <?php echo $page?> of <?php echo $totalRow?></span>
                                                <span class="pagination__row">
                                                    <?php 
                                                    $page2 =$page-1; 
                                                    $page3 =$page+1; 
                                                    ?>
                                                    <a href="<?php echo base_url('Accessories_list/category/').$cateGoryID.'/'.$page2?> " class="pagination__cell pagination__cell--nav no-decoration">&laquo;</a>
                                                    <?php for($i=1;$i<=$totalRow;$i++){ ?>  
                                                    <a href="<?php echo base_url('Motocycle_list/category/').$cateGoryID.'/'.$i?> " class="pagination__cell no-decoration <?php if($page == $i){ echo 'pagination__cell--active'; }?>"><?php echo $i?></a>
                                    <?php }?>         
                                                    
                                                    <a href="<?php echo base_url('Accessories_list/category/').$cateGoryID.'/'.$page2?>" class="pagination__cell pagination__cell--nav no-decoration">&raquo;</a>
                                                </span>
                                            </div>
                            
             
                           </div>       
                             
                            </div>
                        </div>
                        </section><!--shop-->
                        <!--Main-->   
                        <script src="<?php echo base_url('js/jquery-1.11.3.min.js') ?>"></script>
                        <script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
                        <script src="<?php echo base_url('js/modernizr.custom.js') ?>"></script>
                        <!--Counter-->
                        <script src="<?php echo base_url('assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js') ?>"></script>
                        <script src="<?php echo base_url('js/waypoints.min.js') ?>"></script>
                        <script src="<?php echo base_url('js/jquery.easypiechart.min.js') ?>"></script>
                        <script src="<?php echo base_url('js/classie.js') ?>"></script>
                        <!--Switcher-->
                        <script src="<?php echo base_url('assets/switcher/js/switcher.js') ?>"></script>		
                        <!--Owl Carousel-->
                        <script src="<?php echo base_url('assets/owl-carousel/owl.carousel.min.js') ?>"></script>		
                        <!--bxSlider-->
                        <script src="<?php echo base_url('assets/bxslider/jquery.bxslider.min.js') ?>"></script>		
                        <!-- jQuery UI Slider -->
                        <script src="<?php echo base_url('assets/slider/jquery.ui-slider.js') ?>"></script>		
                        <!--Isotope-->
                        <script src="<?php echo base_url('assets/isotope/isotope.js') ?>"></script>
                        <!--Slider-->
                        <script src="<?php echo base_url('assets/slider/jquery.ui-slider.js') ?>"></script>		
                        <!--Fancybox-->
                        <script src="<?php echo base_url('assets/fancybox/jquery.fancybox.pack.js') ?>"></script>
                        <!--Theme-->
                        <script src="<?php echo base_url('js/jquery.smooth-scroll.js') ?>"></script>
                        <script src="<?php echo base_url('js/wow.min.js') ?>"></script>
                        <script src="<?php echo base_url('js/jquery.placeholder.min.js') ?>"></script>
                        <script src="<?php echo base_url('js/theme.js') ?>"></script>
                        </body>
                        </html>