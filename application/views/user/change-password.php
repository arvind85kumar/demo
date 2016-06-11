<?php
$userdata=$this->session->userdata('logged_user');
?>
<style type="text/css">
.nav-stacked a{ color: #333333;
	font-weight:300;	
}
</style>
      <!-- Login wrapper start-->
      <div class="container">
          <div class="outer-nw-wrpr"><!-- for non-responsive view only in >768px-->
          <div class="row">
              <div class="col-md-12 col-md-10 ">
                  <div class="row">
                      <div class="col-md-3 "><br>
                      <!-----This View Will Load account Menu---->
                      <?php $this->load->view('includes/account-menu');?>

<br><br></div>
  <div class="col-md-6">
	  
          <form role="form" class="form-business fv-form fv-form-bootstrap" id="business_step1" method="post" action="" novalidate="novalidate"><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                               <div class="row">
							  <h1>Change Password</h1>
                                  
                                  
                               </div>
                                                       
                               <div class="form-group has-feedback">
                                  <label for="name">Current Password</label>
                                  <input type="text" placeholder="oneuser123" value="" name="username" class="form-control" data-fv-field="username">																	  
                              </div>                                               
                               <div class="form-group has-feedback">
                                 <label for="name">Current Password</label>
                                  <input type="text" placeholder="oneuser123" value="" name="username" class="form-control" data-fv-field="username"></div> 
                               <p>
                                   <label><input type="checkbox" name="acceptTerms" data-fv-field="acceptTerms"><i style="display: none;" class="form-control-feedback fv-icon-no-label" data-fv-icon-for="acceptTerms"></i>By signing up with us, you agree with our <a href="#">Terms of Use</a>, <a href="#">Pro Agreement</a> and <a href="#">Privacy Policy</a>.</label></p>
                               <button class="btn signin-btn" type="submit">Sign Up</button>
                            </form>
       </div>
      
                
            
          </div></div>
                     
                  </div>
              </div>
            </div>
            </div>
      </div>
      <!-- Login wrapper End-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
