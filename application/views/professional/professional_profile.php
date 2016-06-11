<?php //echo "<pre>";print_r($profile);?>
    <!--start banner-section-->
    <div id="fb-root"></div>
    <section id="professional-banner" class="professional-banner">
        <button class="reposition-btn"><i></i></button>
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
                        <a class="active" href="professional-profile.html">
                            <figure><img src="<?php echo base_url();?>images/professional/about-icon-active.png" alt=""/></figure>
                            <span>About</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>professioanl_awards">
                            <figure><img src="<?php echo base_url();?>images/professional/awards-icon.png" alt=""/></figure>
                            <span>Awards</span>
                        </a>
                    </li>                   
                    <li>
                        <a href="<?php echo base_url()?>professional_promotions">
                            <figure><img src="<?php echo base_url();?>images/professional/promotions-icon.png" alt=""/></figure>
                            <span>Promotions</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>professioanl_reviews">
                            <figure><img src="<?php echo base_url();?>images/professional/reviews-icon.png" alt=""/></figure>
                            <span>Reviews</span>
                        </a>
                    </li>
                </ul>
                <button class="btn-share"><i class="icon-share-xs"></i>Share</button>
                <button class="btn-shortlist">
                    <span>Click to shortlist this professional</span>
                    <i class="icon-tick-xs"></i>Shortlist</button>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="professional-widget-box about-wrapper">
                        <h3>About</h3>
                        <div class="para-article">
                            <div class="text short"></div>
                            <div class="text full"><?php echo $profile[0]->about_business;?>
                            </div>
                        </div>

                    </div>
                    <div class="professional-widget-box contact-information">
                        <h3>Contact Information</h3>
                        <div class="contact-info-tab">
                            <ul>
                                <li> <a class="active" href="#boonlay">Boon Lay</a></li>
                                <li> <a href="#admiralty">Promotions</a></li>
                                <li> <a href="#macperson">Reviews</a></li>
                            </ul>
                            <div class="contact-tab-container-outer">
                                <div id="boonlay" class="contact-tab-container">
                                    <iframe class="maps-frame" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3988.7878364066005!2d103.851827!3d1.30224!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19bbe9e5a78f%3A0xe587952be1fa399e!2sSingapore+Life+Church!5e0!3m2!1sen!2s!4v1432706784595"></iframe>
                                    <address>
                                        <div class="adrs-cvr">
                                            <div class="adr-label">Address<i>:</i></div>
                                            <aside class="adrs-data"><?php echo $profile[0]->address;?>
</aside>
                                        </div>
                                        <div class="adrs-cvr">
                                            <div class="adr-label">Contact<i>:</i></div>
                                            <aside class="adrs-data"><?php echo $profile[0]->mobile;?></aside>
                                        </div>
                                        <div class="adrs-cvr">
                                            <div class="adr-label">Website<i>:</i></div>
                                            <aside class="adrs-data"><?php echo $profile[0]->company_website;?></aside>
                                        </div>
                                        <div class="adrs-cvr">
                                            <div class="adr-label">Operating Hours<i>:</i></div>
                                            <aside class="adrs-data"><?php echo $profile[0]->operating_Hours;?>
Sun from 09:00 AM - 08:00 PM</aside>
                                        </div>
                                        <div class="adrs-cvr">
                                            <div class="adr-label">Follow us on<i>:</i></div>
                                            <aside class="adrs-data">
                                                <a href="#" class="icon-fb-gray"></a>
                                                <a href="#" class="icon-twitter-gray"></a>
                                                <a href="#" class="icon-plus-gray"></a>
                                                <a href="#" class="icon-pinterest-gray"></a>
                                            </aside>                                          
                                        </div>
                                    </address>
                                </div>
                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56fc1513c2615037"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_sharing_toolbox"></div>

                                <div id="admiralty" class="contact-tab-container">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur vitae nemo quia, ex sequi veritatis quibusdam accusamus excepturi fuga velit veniam cum ipsa. Illum sunt aliquid minus, sit esse consequuntur nostrum magnam excepturi odit eveniet! Natus, ducimus inventore. Laudantium cum dolores soluta, accusantium, nisi exercitationem. Hic, itaque, numquam minus consequatur quam accusantium est autem? Nostrum incidunt non aliquam optio totam?</p>
                                </div>
                                <div id="macperson" class="contact-tab-container">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione suscipit minima hic unde enim facilis perspiciatis, nesciunt modi eligendi fugit quae laudantium, quia labore ex qui cum nobis vero autem at ab deserunt possimus! Tempora id est, officia qui nihil accusantium, magni possimus? Corporis libero dolorum aspernatur ex esse necessitatibus quaerat reiciendis minima expedita aperiam amet vel fugiat placeat est accusamus, autem commodi sed hic maiores quidem totam architecto velit provident. Fuga voluptatum repudiandae dolores sapiente odio cum porro reprehenderit placeat voluptates magnam tempore rem, assumenda necessitatibus quibusdam. Enim distinctio ut debitis nemo, nam voluptas quod. Perspiciatis velit, sapiente reiciendis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione suscipit minima hic unde enim facilis perspiciatis, nesciunt modi eligendi fugit quae laudantium, quia labore ex qui cum nobis vero autem at ab deserunt possimus! Tempora id est, officia qui nihil accusantium, magni possimus? Corporis libero dolorum aspernatur ex esse necessitatibus quaerat reiciendis minima expedita aperiam amet vel fugiat placeat est accusamus, autem commodi sed hic maiores quidem totam architecto velit provident. Fuga voluptatum repudiandae dolores sapiente odio cum porro reprehenderit placeat voluptates magnam tempore rem, assumenda necessitatibus quibusdam. Enim distinctio ut debitis nemo, nam voluptas quod. Perspiciatis velit, sapiente reiciendis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione suscipit minima hic unde enim facilis perspiciatis, nesciunt modi eligendi fugit quae laudantium, quia labore ex qui cum nobis vero autem at ab deserunt possimus! Tempora id est, officia qui nihil accusantium, magni possimus? Corporis libero dolorum aspernatur ex esse necessitatibus quaerat reiciendis minima expedita aperiam amet vel fugiat placeat est accusamus, autem commodi sed hic maiores quidem totam architecto velit provident. Fuga voluptatum repudiandae dolores sapiente odio cum porro reprehenderit placeat voluptates magnam tempore rem, assumenda necessitatibus quibusdam. Enim distinctio ut debitis nemo, nam voluptas quod. Perspiciatis velit, sapiente reiciendis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <!--tab start-->
                    <div class="tab">                       
                        <div class="tab_container_wrpr">                            
                            <div id="tab22" class="tab_containe2">
			<form name="contact professional" id="contact_professional" method="post" action="">
                                <div class="contact-ideas" action="" method="post">
                                    <b class="center">Contact This Professional</b>
                                    <div class="form-group">
                                        <input type="text" name="fullName" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="mobile" placeholder="Contact Number">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" name="review_message" placeholder="Write your message"></textarea>
                                    </div>
                                    <button id="getQuote" class="pink-btn full">Submit</button>
                                </div>
								</form>
                            </div>
                        </div>
                    </div>
                    <!--tab close-->
                </div>
            </div>
        </div>
    </section>
  <!--Back to Top-->
    <div id="backTop"></div>
    <!--Back to Top end here-->


    <!-- for popup-->
    <span id="overlay"></span><!--transparent bg color-->
    <!--Send Message popup-->
      <div class="popup-box" id="sent-msg-pp">
        <div class="popup-header">
            Message Sent <span class="close-popup"></span>
        </div>
        <div class="popup-content align-center">
            <p>Your message has been sent to the professional successfully and they will keep in touch with you shortly.</p>
        </div>
    </div>
    <!--End Send Message section-->
    <!--end popup section-->

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

            //contact information tabs
            var currentTab2 = $('.contact-info-tab ul li a:first').attr("href");
            $(".contact-tab-container").hide();
            $('.contact-tab-container:first').show();
            $('.contact-info-tab ul li a').click(function () {
                var tab2 = $(this).attr("href");
                $('.contact-info-tab ul li a').removeClass('active');
                $(".contact-tab-container").hide();
                $(this).addClass('active');
                if(currentTab2==$(this).attr("href"))
                {
                    $(tab2).show();
                }
                else
                {
                     $(tab2).fadeIn();
                    currentTab2=$(this).attr("href");
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

            // Animate the scroll to top
            $('#backTop').click(function(event) {
                event.preventDefault();
                $('html, body').animate({scrollTop: 0}, 300);
            });

            //popup
            //send message popup show
            $('#getQuote').click(function(){
                
                $('#overlay').fadeIn(100);
               // $('#sent-msg-pp').delay(100).fadeIn(500);
                $('html, body').animate({scrollTop: 0}, 500);
            });
            //close all popup
            $('.close-popup,#overlay').click(function(){
                $('.popup-box').fadeOut(100);
                $('#overlay').delay(100).fadeOut(500);
            });

            //expand paragraph
            var maxChars = 350;
            var readMore = "Read more";
            $(".para-article").each(function() {
                var text = $(this).find(".text.full").text();
                var html = $(this).find(".text.full").html();
                if(text.length > maxChars)
                {
                    var shortHtml = html.substring(0, maxChars - 3) + "..." + " <span class='read-more'>" + readMore + "</span>";
                    $(this).find(".text.short").html(shortHtml);
                }
            });
            $(".read-more").click(function(){
                var $shortElem = $(this).parent().parent('.para-article').find(".text.short");
                var $fullElem = $(this).parent().parent('.para-article').find(".text.full");

                if($shortElem.is(":visible"))
                {
                    $shortElem.hide();
                    $fullElem.show();
                }
                else
                {
                    $shortElem.show();
                    $fullElem.hide();
                }
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
