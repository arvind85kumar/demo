   <!--start banner-section-->
    <section id="professional-banner" class="professional-banner">
        <div class="banner-content-outer">
            <div class="container">
                <div class="profile-pic">
                    <figure id="dp"></figure>
                    <span class="verifed-badge">verified</span>
                </div>
                <aside class="right-banner-content">
                    <h1 class="profile-title">Rezt &amp; Relax Interior <i class="verified"></i></h1>
                    <a href="professional-find-pros-category.html" class="category-name">Renovation Contractor</a>
                    <div class="bottom-details">
                        <div class="rating">
                            <span class="icon-star-yellow"></span>
                            <span class="icon-star-yellow"></span>
                            <span class="icon-star-yellow"></span>
                            <span class="icon-star-empty-dark"></span>
                            <span class="icon-star-empty-dark"></span>
                        </div>
                        <span class="review-label">22 Reviews</span>
                        <a href="#" class="review-prof"><i class="icon-edit"></i>Review this Professional</a>
                        <div class="right-label">
                            <i class="icon-eye-white"></i>1560 Views
                            <span>No. of people who viewed this pro</span>
                        </div>
                        <div class="right-label">
                            <i class="icon-checkbox-white"></i>34 Shortlisted
                            <span>No. of people who shortlisted this pro</span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <section class="professional-container">
        <div class="container">
            <div class="navigation-outer">
                <ul>
                    <li>
                        <a href="<?php echo base_url()?>professioanl_profile">
                            <figure><img src="<?php echo base_url()?>images/professional/about-icon.png" alt=""/></figure>
                            <span>About</span>
                        </a>
                    </li>
                    <li>
                        <a class="active" href="<?php echo base_url()?>professioanl_awards">
                            <figure><img src="<?php echo base_url()?>images/professional/awards-icon-active.png" alt=""/></figure>
                            <span>Awards</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>professional_ideas">
                            <figure><img src="<?php echo base_url()?>images/professional/ideas-icon.png" alt=""/></figure>
                            <span>Ideas</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>professional_promotions">
                            <figure><img src="<?php echo base_url()?>images/professional/promotions-icon.png" alt=""/></figure>
                            <span>Promotions</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>professioanl_reviews">
                            <figure><img src="<?php echo base_url()?>images/professional/reviews-icon.png" alt=""/></figure>
                            <span>Reviews</span>
                        </a>
                    </li>
                </ul>
                <button class="btn-share"><i class="icon-share-xs"></i>Share</button>
                <button class="btn-shortlist btn-shortlisted"><span>Click to remove shortlisted professional</span><i class="icon-tick-xs"></i>Shortlisted</button>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="professional-widget-box awards-wrapper">
                        <h3>Awards</h3>     
                        <ul class="awards-list">
                            <li>BCA Licensed General Builder (GB2)</li>
                            <li>BCA Licensed Contractor For Interior Decoration &amp; Finishing Works (CR06)</li>
                            <li>HDB Licensed Renovation Contractor</li>
                            <li>CaseTrust Accredited Renovation Contractor</li>
                            <li>BizSafe 3 Certified</li>
                            <li>Singapore Brands Award</li>
                            <li>Member of Singapore Furniture Association</li>
                            <li>Nippon Paint Designers of Choice</li>
                            <li>RADAC Accredited Contractor</li>
                        </ul>                   
                    </div>
                </div>
                <div class="col-sm-4">
                    <!--tab start-->
                    <div class="tab">
                        <ul>
                            <li> <a class="quote active" href="#tab1">Get Quote</a></li>
                            <li> <a class="contact" href="#tab2">Contact</a></li>
                        </ul>
                        <div class="tab_container_wrpr">
                            <div id="tab1" class="tab_container">
                                <h3>Request &amp; Get FREE </h3>
                                <p>non-obligatory quote from this <br>professional now</p>
                                <button class="pink-btn">Get FREE Quote</button>
                            </div>
                            <div id="tab2" class="tab_container">
                                <div class="contact-ideas" action="" method="post">
                                    <b>Contact This Professional</b>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Contact Number">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="Write your message"></textarea>
                                    </div>
                                    <button id="getQuote" class="pink-btn full">Submit</button>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!--tab close-->
                </div>
            </div>
        </div>
    </section>
  
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>javascripts/jquery.min.js"></script>
    <script src="<?php echo base_url();?>javascripts/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript">
    	$(document).ready(function(){              
            //right panel tabs                
            var currentTab = $('.tab ul li a:first').attr("href");
            $(".tab_container").hide();
            $('.tab_container:first').show();
            $('.tab ul li a').click(function () {
                var tab = $(this).attr("href");
                $('.tab ul li a').removeClass('active');
                $(".tab_container").hide();
                $(this).addClass('active');
                if(currentTab==$(this).attr("href"))
                {
                    $(tab).show();
                }
                else
                {
                     $(tab).fadeIn();
                    currentTab=$(this).attr("href");
                }
                return false;
            });  
            //Back to Top            
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) {
                    $('#backTop').fadeIn(200);
                } else {
                    $('#backTop').fadeOut(200);
                }
            });
            
            //popup
            //send message popup show
            $('#getQuote').click(function(){
                $('#overlay').fadeIn(100);
                $('#sent-msg-pp').delay(100).fadeIn(500);  
                $('html, body').animate({scrollTop: 0}, 500);
            });            
            //close all popup
            $('.close-popup,#overlay').click(function(){
                $('.popup-box').fadeOut(100);   
                $('#overlay').delay(100).fadeOut(500);         
            });

            // Animate the scroll to top
            $('#backTop').click(function(event) {
                event.preventDefault();
                $('html, body').animate({scrollTop: 0}, 300);
            }); 
            
            //for fixed sidebar
            num = $('.tab').offset().top  
            function fixed(){
                var currentWidth = $('.tab').width();
                if ($(window).scrollTop() > num ) {
                    $('.tab').addClass('fixed');
                    $('.tab').width(currentWidth);
                } else {
                    $('.tab').removeClass('fixed');
                }
            }
            $(window).on("load resize scroll",function(e){
                fixed()
            });
            
            // btn shortlist
            $('.btn-shortlist').click(function(){
                $(this).toggleClass('btn-shortlisted');
                if( $(this).hasClass('btn-shortlisted') ){
                  $(this).contents().last()[0].textContent="Shortlisted"
                  $(this).find('span').text('Click to remove shortlisted professional');
                }else{
                  $(this).contents().last()[0].textContent="Shortlist"
                  $(this).find('span').text('Click to shortlist this professional'); 
                }
            });
        }); 
    </script>
 
