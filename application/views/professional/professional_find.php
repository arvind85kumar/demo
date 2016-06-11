    <!--start banner-section-->
    <section class="ideas-category-search professional-category pro-dream-home">
    	<div class="container">
    		 <div class="ideas-banner-content">
    		     <form action="" name="search_prof" id="search-prof"method="post">
    		         <button class="btn-ideas-dh"><i class="icon-search-white"></i></button>
    		         <div class="search-panel">
    		             <div class="search-by">Search by</div>
    		                <div class="custom-radio">
                               <input type="radio" name="needIt" checked id="ProsCategory" value="2015-04-14">
                               <label class="checked" for="ProsCategory"><span></span>Pros Category</label>
                            </div>
    		                <div class="custom-radio">
                               <input type="radio" name="needIt" id="CompanyName" value="2015-04-14">
                               <label for="CompanyName"><span></span>Company Name</label>
                            </div>
    		         </div>
    		         <div class="search-filter">
                          <aside class="filter-category">
                            <div name="" id="" class="custom-select">
                                <div class="active-list">Renovation Contractors</div>
                                <input type="text" class="list-field"/>
                                <ul class="drop-down-list">
								<?php foreach($list_companies as $companyName):?>
                                    <li><?php echo $companyName->industry_name?></li>
                                    <?php endforeach;?>                                   
                                </ul>
                            </div>
                         </aside>
    		         </div>
    		         <div class="search-keyword" style="display:none;">
                          <input type="text" name="company_name" placeholder="Company Name" class="form-control">
    		         </div>
    		         <input type="hidden" name="sort_by_field" id="sort_by_field" value="">
    		    
    		 </div>
    	</div>
    </section>
    <!--end banner-section-->
    <!--search content-->
    <section class="search-wrapper-outer">
        <div class="container">
            <div class="right-panel-search">
               <!--Banner 300x390-->
                <article class="recieve-banner">
                    <div class="banner"><!--<img src="" alt="" />--></div>
                    <p>Receive non-obligatory<br> quotes from the <br>recommended professionals</p>
                    <button class="pink-btn">Get FREE Multiple Quotes</button>
                </article>
                <!--Banner 300x250-->
                <div class="banner-sm"><img src="<?php echo base_url();?>images/professional/ads-300x250.jpg" alt=""/></div>
                <!--Banner 300x250-->
                <div class="banner-sm"><img src="<?php echo base_url();?>images/professional/ads-300x250.jpg" alt=""/></div>
                <!--Banner 300x250-->
                <div class="banner-sm"><img src="<?php echo base_url();?>images/professional/ads-300x250.jpg" alt=""/></div>
            </div>
            <div class="left-search-panel">
                <header>
                    <h1>Renovation Contractors in Singapore</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend 
tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis 
pretium sit... <a href="#detailed_para" class="read-more-content scroll-bottom">Read more</a></p>
                   <aside class="sort-by">
                       <span class="sort-by-label">Sort by</span>
                       <div name="" id="" class="custom-select">
                            <div class="active-list">Verified</div>
                            <input type="text" class="list-field"/>
                            <ul class="drop-down-list sort_order">
                                <li id="1">Verified</li>
                                <li id="2">Most Popular</li>
                                <li id="3">Recently Added</li>
                            </ul>
                        </div>
                   </aside>
                </header>
                 </form>
                <ul class="search-result-list">
					<?php foreach($Users as $user) :?>
                    <li>
                        <figure class="result-pic">
                            <a href="professional-profile.html"><img src="<?php echo base_url();?>images/professional/search-results/search-01.jpg" alt=""/></a>
                        </figure>
                        <aside class="result-content">
                            <div class="result-top">
                                <div class="professional-dp">
                                    <figure>
                                        <img src="<?php echo base_url();?>images/professional/user-pic.jpg" alt=""/>
                                        <span class="verified-badge"></span>
                                    </figure>
                                </div>
                                <div class="right-top-sec">
                                    <a class="result-title" href="professional-profile.html"><?php echo $user->company_name;?> <i class="verified"></i></a>
                                    <div class="reviews-search">
                                        <a href="professional-reviews.html" class="rating">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        </a>
                                        <a href="professional-reviews.html" class="top-reviews"><b>22</b> Reviews</a>
                                        <a href="professional-ideas.html" class="top-ideas"><b>168</b> Ideas</a>
                                    </div>
                                </div>
                            </div>
                            <p><?php echo substr($user->about_business,0,150);?> ...  <a href="professional-profile.html" class="read-more-content">Read more</a></p>
                        </aside>
                    </li>
                    <?php endforeach;?>
                   
                </ul>
              
               <?php echo $links; ?>
                <div id="detailed_para">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis
    ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend 
    tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis 
    pretium sit amet quis magna. Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque 
    rhoncus aliquam mattis. Ut vulputate eros sed felis sodales nec vulputate justo hendrerit. </p>

     <p>Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci 
    ullamcorper at ultricies metus viverra. Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit 
    sed diam. Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet 
    orci ullamcorper at ultricies metus viverra. Pellentesque arcu mauris, malesuada quis ornare accumsan, 
    blandit sed diam.</p>
                </div>
            </div>
        </div>
    </section>

    
    
      
    <!--Back to Top-->
    <div id="backTop"></div>
    <!--Back to Top end here-->   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>javascripts/jquery.min.js"></script>
    <script src="<?php echo base_url();?>javascripts/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript">
    	$(document).ready(function(){
    		$(".sort_order li").click(function()
    		{
				var sortv=$(this).attr("id");
				var sort_by_option=$(this).text();
				//alert(sort_by_option);
				//alert(sort_by_val);
			   $("#sort_by_field").val(sortv);
			   $(".active-list").html(sort_by_option);
			 
			search_prof.submit();
			  $(".active-list").text('sss');
			 
				//alert($(this).text());
			});
            //search-keyword
            $('.custom-radio label').click(function(){
                setTimeout(function(){
                if( $('#ProsCategory').is(':checked') ){
                    $('.search-filter').show();
                    $('.search-keyword').hide();
                    console.log('one');
                }else if( $('#CompanyName').is(':checked') ){
                    $('.search-filter').hide();
                    $('.search-keyword').show();
                    console.log('two');
                }
                },10);
            });
            
            //dropdown list
            $('body').click(function(){
                  $('.custom-select .drop-down-list:visible').slideUp();
            });
            $('.custom-select .active-list').click(function(){
                $(this).parent().find('.drop-down-list').stop( true, true ).delay(10).slideToggle();
            });
            $('.custom-select .drop-down-list li').click(function(){
                $(this).parent().parent().find('.active-list').trigger("click");
                $(this).parent().parent().find('.active-list').text( $(this).text() ).removeClass('opened');
                $(this).parent().parent().find('input.list-field').attr('val', $(this).index() );
                //show text field when user select create new ideabook
                if(  $(this).index() == 0 )  {
                    $('.createIdeaBook').show();
                }else{
                    $('.createIdeaBook').hide();
                }
                
            });  
            
            //for radio button
            $('.custom-radio').click(function(){
                if($(this).find('input').is(":checked")){
                    $(this).parent('.search-panel').find('label').removeClass('checked');
                    $(this).find('label').addClass('checked');
                } 
            });  
           
            
            //for fixed category searchbar
            var num = 80; //number of pixels before modifying styles
            $(window).bind('scroll', function () {
                if ($(window).scrollTop() > num) {
                    $('.ideas-category-search').addClass('fixed');
                } else {
                    $('.ideas-category-search').removeClass('fixed');
                }
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
            
            //readmore scroll to bottom content
            $('.scroll-bottom').click(function(){
                var hHeigh = $('.ideas-category-search').height() +  $('header').height();
                $('html, body').animate({
                    scrollTop: ( $( $(this).attr('href') ).offset().top - hHeigh  )
                }, 500);
                return false;
            });
        }); 
    </script>
 
