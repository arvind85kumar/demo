  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '752282618204317',
          status     : true,
          xfbml      : true
        });
      };
 
      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/all.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript">
function fb_share(name,caption,description) {
	
  FB.ui( {
    method: 'feed',
          picture: 'http://fbrell.com/f8.jpg',
          name: name,
          caption: caption,
          description: description
    
  }, function( response ) {
    // do nothing
  } );

}

$(document).ready(function(){
 // $('.share-btn').on('click',fb_share); 
});
</script>
<script type="text/javascript">
	$("document").ready(function(){
	$(".share-btn").click(function(e)
	{
		var title=$("#title").val();
		var caption=$("#caption").val();
		var description=$("#description").val();
		if(title=='')
		{
			$("#error_title").text('Please Enter Title');
		}
		else if(caption=='')
		{
			$("#error_caption").text('Please Enter caption');
		}
		else if(caption=='')
		{
			$("#error_description").text('Please Enter description');
		}
		else if(title!='' && caption!='' && description!='')
		{
			fb_share(name,caption,description);
		}
		else
		{    e.stopPropagation();
			}
		
	});
});

</script>
<div class="container">
                    <div class="block-header">
                        <h2>Form Examples</h2>
                    
                        <ul class="actions">
                            <li>
                                <a href="">
                                    <i class="zmdi zmdi-trending-up"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="zmdi zmdi-check-all"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" href="">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                    
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="">Refresh</a>
                                    </li>
                                    <li>
                                        <a href="">Manage Widgets</a>
                                    </li>
                                    <li>
                                        <a href="">Widgets Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                
                
                    <div class="card">
                       
      <form class="form-horizontal" >
                            <div class="card-header">
                                <h2>Facebook Image Share <small>We want all websites-- and in particular news sites,  blogs, and other media sites-- to easily reach their existing fans and grow their fan base. Follow these best practices to give people the most engaging Facebook experience.Building app experiences that people understand and trust is key to successfully using Facebook Sharing. </small></h2>
                            </div>
                            
                            <div class="card-body card-padding">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="title">Title</label>
                                    <div class="col-sm-10">
                                        <div class="fg-line">
                                            <input type="text" name="title" placeholder="Title" id="title" maxlength="100" class="form-control input-sm">
                                            <label id="error_title"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="caption">Caption</label>
                                    <div class="col-sm-10">
                                        
                                        <div class="fg-line">
                                            <input type="text" name="caption" placeholder="Caption" maxlength="100" id="caption" class="form-control input-sm">
                                            <label id="error_caption"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="inputPassword3">Description</label>
                                    <div class="col-sm-10">
                                        
                                        <div class="fg-line">
                                            <input type="text" name="description" placeholder="Description" maxlength="200" id="description" class="form-control input-sm">
                                                 <label id="error_description"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="inputPassword3">Upload Image</label>
                                    <div class="col-sm-10">
                                        
                                        <div class="fg-line">
                                            <input type="file" name="fb_image" accept="image/*" placeholder="Password" id="inputPassword3" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                           
                              
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button class="btn btn-primary btn-sm waves-effect share-btn ">Share On Facebook</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                   
                </div>
