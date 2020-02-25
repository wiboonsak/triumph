<!-- Code Chat Messenger Facebook --- Load Facebook SDK for JavaScript -->
<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->
<?php 
         $value1=$this->uri->segment(1);
         $valueA=$this->uri->segment(3);
         $valueB=$this->uri->segment(4);
       
        //print_r($productDetail); 
        if($value1=='Motocycle_list'){
            if(isset($productDetail)){
                $a='product';
                $b='product_detail';
         foreach($productDetail->result() AS $product2){}
          $accesDesc = $product2->motorcycle_desc;
          $accesName = $product2->motorcycle_name;
        }else{
           $productDetail=''; 
        }  
         if(isset($imagesList)){   
             foreach($imagesList->result() AS $img){}
          $bb = $img->imge_name;
         }else{
             $imagesList='';
        } 
        }else if($value1=='accessories_list'){
        if(isset($productDetail)){
            $a='product';
            $b='product_detail';
         foreach($productDetail->result() AS $product2){}
          $accesDesc = $product2->accessories_desc;
          $accesName = $product2->accessories_name;
        }else{
           $productDetail=''; 
        }  
         if(isset($imagesList)){   
             foreach($imagesList->result() AS $img){}
          $bb = $img->imge_name;
         }else{
             $imagesList='';
        } 
         }else{
              if(isset($newsDetail)){
                $a='News';
                $b='news_detail';
         foreach($newsDetail->result() AS $product2){}
          $accesDesc = $product2->news_detail;
          $accesName = $product2->news_title;
        }else{
           $newsDetail=''; 
        }  
         if(isset($imagesList)){   
             foreach($imagesList->result() AS $img){}
          $bb = $img->images_name;
         }else{
             $imagesList='';
        } 
         }
          
if(!isset($accesName)){ $accesName='';}else{$accesName=$accesName;}
if(!isset($value1)){ $value1='';}else{$value1=$value1;}
if(!isset($valueA)){ $valueA='';}else{$valueA=$valueA;}
if(!isset($valueB)){ $valueB='';}else{$valueB=$valueB;}
if(!isset($accesDesc)){ $accesDesc='';}else{$accesDesc=$accesDesc;}
if(!isset($bb)){ $bb='';}else{$bb=$bb;}
if(!isset($a)){ $a='';}else{$a=$a;}
if(!isset($b)){ $b='';}else{$b=$b;}



?>
<html>
    <head>
        <title>Triumph Motorcycles Triumph รถจักรยานยนต์ | For the Ride</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    	<!-- Google+ -->
        <meta property="fb:app_id"        content="355179808591281"/>
         <meta property="og:url"           content="<?php echo base_url(''.$value1.'/'.$b.'/').$valueA.'/'.$valueB?>"/>
         <meta property="og:type"          content="website"/>
        <meta property="og:title"         content="<?php echo $accesName?>"/>
        <meta property="og:description"   content="<?php echo strip_tags($accesDesc)?>"/>
        <meta property="og:image"         content="<?php echo base_url('uploadfile/'.$a.'/').$bb?>"/>
 </head>      

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="154872655373443"
  theme_color="#0f5fff"
  logged_in_greeting="Hi! How can we help you?"
  logged_out_greeting="Hi! How can we help you?">
</div>
<!-- Code Chat Messenger Facebook --- Load Facebook SDK for JavaScript -->



<header id="header-top" class="top-header"  style="background-color: #484848 !important">
			<div class="container">
				<div class="top-header__main wow slideInDown" data-wow-delay="0.7s" data-wow-duration="1.5s">
					<div class="row">
						<div class="col-xs-4">
							<div class="social social--top clearfix">								
								<a href="https://www.facebook.com/TriumphHatyai/" target="_blank" class="social__one square">
									<span class="fa fa-facebook"></span>
								</a>
								
								<!--
								<a href="#" class="social__one square">
									<span class="fa fa-google-plus"></span>
								</a>
								-->
								<a href="https://www.instagram.com/triump_hatyai/" target="_blank" class="social__one square">
									<span class="fa fa-instagram"></span>
								</a>
							</div>
						</div>
						<div class="col-xs-8">
                                                    
							<div class="header-contacts clearfix">
                                                            <div class="header-contacts__one" >
									<a href="<?php echo base_url('')?>" class="header-contacts__phone square" >
										<span class="fa fa-phone"></span>
									</a>
									<a href="<?php echo base_url('')?>" class="header-contacts__link" style="color:#E9E9E9 !important">(66) 074 464 383</a>
								</div>
								<div class="header-contacts__one">
									<a href="" class="header-contacts__email square">
										<span class="fa fa-envelope"></span>
									</a>
									<a href="" class="header-contacts__link" style="color:#E9E9E9 !important">info@triumphhatyai.com</a>
								</div>
								<div class="header-contacts__one">
									<a href="" class="header-contacts__email square">
										<span class="fa fa-comments"></span>
									</a>
									<a href="https://www.facebook.com/messages/t/TriumphHatyai" target="_blank" class="header-contacts__link" style="color:#E9E9E9 !important">ติดต่อสอบถาม</a>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</header><!--top-header-->

		
		<nav class="top-nav" style="background-color: #484848 !important">
			<div class="container" style="background-color: #484848 !important">
				<div class="top-nav__main" style="background-color: #1d1d1d00 !important">
					<div class="row">
						<div class="col-md-3 col-xs-12">
							<a href="<?php echo base_url('welcome')?>" class="logo">
                                                            <span class="logo__moto" >
									<img src="<?php echo base_url('images/svg/logo.svg')?>" alt="logo">
								</span>
								<!--<h2 class="logo__title">
									BIKER<span>Club</span>
								</h2>-->
							</a>
						</div>
						<div class="col-md-9 col-xs-12">
							<div class="main-nav main-nav--home navbar-main-slide">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<ul class="collapse navbar-collapse navbar-nav-menu" id="nav">
									<li class="dropdown">
                                                                           
										<a class="no-decoration dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('Motocycle_list/category')?>">MOTORCYCLES  <i class="fa fa-angle-down"></i></a>
		<span class="main-nav__separator"><span></span><span></span><span></span></span>
                                                                               
										<ul class="dropdown-menu" style="background-color: #484848; border: 0px !important">
                                                                                    <?php 
                                                                                     $cateID = '';
                                                                                    foreach($cateGoryList->result() AS $category){ ?>
											<?php if($cateID !=$category->category_title){?><li><a href="<?php echo base_url('Motocycle_list/category/').$category->id?>"><?php echo $category->category_title?></a></li>
                                                                                         <?php }?>
                                                                                        <?php $cateID=$category->category_title ;}?>
                                                        </ul>
               	
									</li>
									<li class="dropdown">
										<a class="no-decoration dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('accessories_list/category')?>">ACCESSORIES  <i class="fa fa-angle-down"></i></a>
										<span class="main-nav__separator"><span></span><span></span><span></span></span>
										<ul class="dropdown-menu" style="background-color: #484848; border: 0px !important">
											 <?php 
                                                                                     $cateID1 = '';
                                                                                    foreach($categoryList_acces->result() AS $category){ ?>
											<?php if($cateID1 !=$category->category_title){?><li><a href="<?php echo base_url('accessories_list/category/').$category->id?>"><?php echo $category->category_title?></a></li>
                                                                                         <?php }?>
                                                                                        <?php $cateID1=$category->category_title ;}?>
										</ul>
									</li>
									<li><a class="no-decoration" href="<?php echo base_url('Service')?>">SERVICE & SUPPORT</a><span class="main-nav__separator"><span></span><span></span><span></span></span></li>
									<li><a class="no-decoration" href="<?php echo base_url('News')?>">NEWS & PROMOTIONS</a><span class="main-nav__separator"><span></span><span></span><span></span></span></li>
									<li><a class="no-decoration" href="<?php echo base_url('Aboutus')?>">ABOUT TRIUMPH</a><span class="main-nav__separator"><span></span><span></span><span></span></span></li>									
									<li><a class="no-decoration" href="<?php echo base_url('Contact')?>">CONTACT US</a><span class="main-nav__separator"><span></span><span></span><span></span></span></li>
								</ul>
								
							</div>
						</div>
                                            
					</div>
				</div>
			</div>
		</nav><!--top-nav-->
