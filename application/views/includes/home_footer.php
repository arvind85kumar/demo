 <!--start footer-section-->
    <footer class="footer-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-3">
    				<figure>
    					<img src="<?php echo base_url();?>images/logo-footer.png" class="img-responsive" alt="">
    				
    				</figure>
    			</div>
    			<div class="col-sm-9">
    				<div class="row">
						<div class="col-sm-3">
							<h3>Explore TheBigPlans</h3>
							<ul class="list-unstyled">
								<li><a href="#">Perfect Wedding Planning</a></li>
								<li><a href="#">Dream Home Planning</a></li>
								<li><a href="#">Ideas</a></li>
								<li><a href="<?php echo base_url()?>professioanl_category">Find Professionals</a></li>
								<li><a href="#">Blog</a></li>
							</ul>
						</div>
						<div class="col-sm-3">
							<h3>For Professionals</h3>
							<ul class="list-unstyled">
								<li><a href="#">Plans &amp; Pricing</a></li>
								<li><a href="<?php echo base_url()?>business_signup">Join as Professional for Free</a></li>
								<li><a href="<?php echo base_url()?>login">Login As Professional</a></li>
							</ul>
						</div>
						<div class="col-sm-3">
							<h3>Company</h3>
							<ul class="list-unstyled">
								<li><a href="#">About</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Listings &amp; Review Policy</a></li>
								<li><a href="#">Disclamer</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
						<div class="col-sm-3">
							<h3>Social Media</h3>
							<ul class="list-unstyled listing-socialmedia">
								<li><a href="#"><i class="icon-facebook"></i>Facebook</a></li>
								<li><a href="#"><i class="icon-twitter"></i>Twitter</a></li>
								<li><a href="#"><i class="icon-pintrest"></i>Pintrest</a></li>
								<li><a href="#"><i class="icon-instagram"></i>Instagram</a></li>
								<li><a href="#"><i class="icon-gplus"></i>Google Plus</a></li>
							</ul>
						</div>
    				</div>
    			</div>
    		</div>
    		<p  class="copy-right">2015 &copy; Big Plans.com <span>All Rights Reserved</span> </p>
    		<!--<p  class="copy-right">2015 &copy; TheBigPlans.com <span>All Rights Reserved</span> </p>--->
    	</div>
    </footer>
    <!--end footer-section-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>javascripts/jquery.min.js"></script>
       <script src="<?php echo base_url();?>javascripts/jquery.validate.min.js">
       </script>
    <script src="<?php echo base_url();?>javascripts/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>javascripts/owl.carousel.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript">
    	$(document).ready(function(){
    		$(window).on("resize", function () {
    			$('.banner-section').height( $(window).height() - $('header').height() );
				var bnrHeight     = $('.banner-section').height();
				var bnrCntnHeight = $('.banner-content').height();
				var cntnPos = ($('.banner-section').height() /2) - $('.banner-content').height()/2
				$('.banner-content')
				.css('padding-top', cntnPos );
				$('.banner-content').show();
			}).resize();
			// testimonials slider 
			var owl = $(".testi-item-wrap"); 		
			$(".testi-item-wrap").owlCarousel({
				pagination: false,
				items : 3,
				itemsDesktop : [1199,3],
				itemsDesktopSmall : [979,3]
			});
			$('.icon-arrow-right').click(function(){
				owl.trigger('owl.next');
			});
			$('.icon-arrow-left').click(function(){
				owl.trigger('owl.prev');
			});
			// scrollTop move on mouse click
			$('.icon-mouse').click(function(){
			  $("html, body").animate({ scrollTop: $('.banner-section').height() + $('header').height() });
			});
    		
    		//paralax
    		ofSt = $('.paralax-panel').offset().top 
			$(window).scroll(function(){
			var wSv = $(window).scrollTop();
			var bgpos = $('.paralax-panel').css('backgroundPosition').split(' ');
			if( wSv > (ofSt - $(window).height()) ){
			// console.log(nPs);
			nPs =   (wSv  - $(window).height() ) - (ofSt - $(window).height())
			if( nPs < 0 ){
				if( nPs > (-500) ){
				$('.paralax-panel')
				.css('backgroundPosition', bgpos[0] + ' ' + nPs + 'px');
				}
			}
			}
			});
    	});
    </script>
  </body>
</html>
