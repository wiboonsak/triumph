<style type="text/css">
.disabledInput {
color: white;
background:#CCC;
}
</style>
		<section class="signup signup--home2">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<div class="signup__desc">
							<h2 class="title title--main"><span class="fa fa-envelope-o"></span><span class="title__bold">SIGNUP</span>ForNewsletter</h2>
							<p class="text--small">Subscribe to our weekly newsletter to get notified and stay updated with latest Bikes news and sporting </p>
						</div>
					</div>
					<div class="col-lg-7 col-md-6 col-xs-12 wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<div class="sign-form">
                                                    <div class="relative-pos"><div class="input-triangle"></div><input class="sign-input disabledInput" type="text" name="sub" id="sub" placeholder="Enter your email address" onChange="checkEmail(this.value)"/></div>
                                                        <button onclick="Add()" class="btn button button--red button--sign triangle triangle--12">SUBSCRIBE</button>
						</div>
					</div>
				</div>
			</div>
		</section><!--signup-->

		<footer class="home-footer">
			<div class="footer-logo" style="background-color: #484848 !important">
				<div class="container">
					<div class="row">
						<div class="col-xs-4 wow slideInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">														
							<a href="<?php echo base_url('index.php')?>" class="logo logo--home">
								<span class="logo__moto">
									<img src="<?php echo base_url('images/logo.png')?>" alt="logo">
								</span>
								<!--<h2 class="logo__title">
									BIKER<span>Club</span>
								</h2>-->
							</a>
						</div>
						<div class="col-xs-8 wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<div class="social social--footer social--footer-home pull-right clearfix">								
								<a href="https://www.facebook.com/TriumphHatyai/" target="_blank" class="social__one square">
									<span class="fa fa-facebook"></span>
								</a>
								<!--<a href="#" target="_blank" class="social__one square">
									<span class="fa fa-twitter"></span>
								</a>
								<a href="#" class="social__one square">
									<span class="fa fa-google-plus"></span>
								</a>
								<a href="#" class="social__one square">
									<span class="fa fa-pinterest"></span>
								</a>-->
								<a href="https://www.instagram.com/triump_hatyai/" target="_blank" class="social__one square">
									<span class="fa fa-instagram"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div><!--footer-logo-->

			<div class="footer-main-home dark-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-xs-6 wow slideInLeft" data-wow-delay="0.7s" data-wow-duration="2.5s">
							<div class="footer-main-home__block equal-height-item">
								<h2 class="footer-main-home__title">TRIUMPH HATYAI</h2>
								<p class="text text--footer-main-home">WELCOME TO THE TRIUMPH ADVENTURE EXPERIENCE<BR>
								Experience all the thrills of off-road riding with a whole range of immersive and fun riding experiences designed for riders to build or enhance their off-road capability and skills. We cater for all abilities, from absolute beginners to advanced off-roaders.</p>
								<!--<a href="#" class="btn button button--red button--main">Read More</a>-->
							</div>
						</div>
						<div class="col-md-3 col-xs-6 wow slideInRight" data-wow-delay="0.7s" data-wow-duration="2.5s">
							<address class="footer-main-home__block equal-height-item">
								<div class="footer-main-home__title">Contact info</div>
								<div class="phone">(66) 074 464 383</div>
								<div class="footer-main-home__address-title">Office Address</div>
								<p class="text text--footer-main-home">35/12 Rajyindi Rd.,<br />
									Hatyai, Songkhla,<br />
									90110</p>
								<div class="email"><span>Email: </span>info@triumphhatyai.com</div>
							</address>
						</div>
						<div class="col-md-6 col-xs-6 wow slideInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
							<div class="footer-main-home__block equal-height-item footer-main-home__block--margin">
								<h2 class="footer-main-home__title">Follow me</h2>
								<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTriumphHatyai%2F&tabs=timeline&width=500&height=250&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=231446980894866" width="400" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
							</div>
						</div>
						
					</div>
				</div>
			</div><!--footer-main-home-->

			<div class="footer-bottom-home">
				<div  class="container">
					<div class="copyright wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
						<p>&copy; Copyrights 2018. <span>TRIUMPH</span> | <span>HATYAI. </span> All rights reserved. Developed by <a href="http://www.me-fi.com" target="_blank">ME-FI.com</a></p>
					</div>
				</div>
			</div>
			<a id="to-top" href="#header-top"><i class="fa fa-chevron-up"></i></a>
		</footer>
                <script type="text/javascript">
                function Add(){
                    var sub = $('#sub').val();
                    if(sub!=''){
                    $.post('<?php echo base_url('Welcome/subsribe')?>', { sub : sub }, function(data){  
			if(data == '1'){
                            alert('Thank you for subscribe');
                            $('#sub').val('');
                            $('#sub').focus();
                        }
                                    });
                                 
                                }else{
                                   return false; 
                                }
                
            }
             //-----------------------------
        function checkEmail(email){
			$.post('<?php echo base_url('Welcome/checkemail')?>',{ email:email }, function(data){
			if(data >0){
				alert('This email is already a mamber.');
                                $('#sub').val('');
                                $('#sub').focus();
                                return false;
				} ;
			});
		
                    }
                </script>
		