<section class="ideas-category-search professional-category pro-dream-home">
    	<div class="container">
    		 <div class="ideas-banner-content">
    		   <form action="" method="post">
    		         <button id="search-btn" class="btn-ideas-dh sortby search-text"><i class="icon-search-white"></i></button>
    		         <div class="search-panel">
    		             <div class="search-by">Search by</div>
    		                <div class="custom-radio">
                               <input type="radio" name="needIt" checked id="ProsCategory" value="">
                               <label class="checked" for="ProsCategory"><span></span>Pros Category</label>
                            </div>
    		                <div class="custom-radio">
                               <input type="radio" name="needIt" id="CompanyName" value="">
                               <label for="CompanyName"><span></span>Company Name</label>
                            </div>
    		         </div>
    		         <div class="search-filter">
                          <aside class="filter-category">
                            <div name="" id="" class="custom-select">
                                <div class="active-list">All</div>
                                <input type="text" name="search_textbox" class="list-field"/>
                                <ul class="drop-down-list">
                                    <li>All</li>
                                    <?php foreach($pro_category as $pro) :?>
                                    <li value="<?php echo $pro->id;?>"><?php echo $pro->industry_name;?></li>
                                    <?php endforeach;?>
                                    
                                    
                                </ul>
                            </div>
                         </aside>
    		         </div>
    		         <div class="search-keyword" style="display:none;">
                          <input type="text" id ="search-company" name="search-text" value="" placeholder="Renovation Contractors" class="form-control sortby">
    		         </div>
    		    </form>
    		 </div>
    	</div>
    </section>
    <!--end banner-section-->
    <!--search content-->
    <section class="search-wrapper-outer search-panel">
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
                       <select class="active-list sortby ">
                           <option value="Verified">Verified</option>
                           <option value="Most Popular">Most Popular</option>
                           <option value="Recently Added">Recently Added</option>
                       </select>
                    
                   </aside>
                </header>
                <div class="loading-div">
                    <!--<img src="<?php  base_url();?>images/ajax-loader.gif" >-->
                    </div>
<div id="results">
	<!-- content will be loaded here -->
      </div>
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
    <!--start footer-section-->
	<script src="<?php echo base_url();?>javascripts/jquery.min.js"></script>
    <script src="<?php echo base_url();?>javascripts/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript">
    	$(document).ready(function(){
			$("#search-btn").on('click', function (event) {
				 event.preventDefault();
				var search_text=$("#search-company").val();
			$.ajax({
			url: 'Professional/ajax_pagination',
			type: 'POST',			
			data: {search_text:search_text},
			beforeSend: function() {
				// setting a timeout
				$(".overlay").css('display','block');
			},
			success: function(data) {	
				if(data.length >100)
				{
			$("#results").html(data);	
				}
				else
				{
					$(".left-search-panel").html("");
					$("#results").html("<h1>No Records Found</h1>");
				}
			},
			error: function(e) {
				//console.log(e.message);
			}
		});	
			});
			
		

			
			
			
			
			
			
			 var sort_by=$(".sortby option:selected").val();
			 var search_text=$(".search-text").val();
			 
    	$("#results" ).load( "<?php echo base_url();?>Professional/ajax_pagination",{"sort_by":sort_by}); //load initial records
	
	//executes code below when user click on pagination links
	$(".search-panel").on( "click", ".pagination a,.sortby,#search-btn", function (e){
		e.preventDefault();              
         var sort_by=$(".sortby option:selected").val();
		$(".loading-div").show(); //show loading element
		var page = $(this).attr("data-page"); //get page number from link
		$("#results").load("<?php echo base_url();?>Professional/ajax_pagination",{"page":page,"sort_by":sort_by}, function(){ 
                    //get content from PHP page
		$(".loading-div").hide(); //once done, hide loading element
		});
		
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
