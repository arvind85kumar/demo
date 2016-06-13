<?php
$userdata=$this->session->userdata('logged_user');
?>
<style type="text/css">
.nav-stacked a{ color: #333333;
	font-weight:300;	
}
.signin-btn
{
  width:100%;
  height: 30px;
}
#password_change
{
  margin:10px 50px 10px 50px;

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
	  
          <form role="form" class="form-business fv-form fv-form-bootstrap" id="password_change" method="post" action="" novalidate="novalidate"><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                               <div class="row">
							  <h1>Change Password</h1>
                                  
                                  
                               </div>
                               <br>                    
                               <div class="form-group has-feedback">
                                  <label for="name">Current Password</label>
                                  <input type="password" placeholder="Current Password" value="<?php echo set_value('current_password'); ?>" name="current_password" class="form-control" >						 <?php echo form_error('current_password', '<div class="error">', '</div>'); ?>											  
                              </div>
                                                                          
                               <div class="form-group has-feedback">
                                 <label for="name">New Password</label>
                                  <input type="password" placeholder="New password" value="<?php echo set_value('newpassword'); ?>" name="newpassword" class="form-control"></div> 
 <?php echo form_error('newpassword', '<div class="error">', '</div>'); ?>
                                   <div class="form-group has-feedback">
                                 <label for="name">Confirm Password</label>
                                  <input type="password" placeholder="Confirm Password" value="<?php echo set_value('confirmpassword'); ?>" name="confirmpassword" class="form-control" ></div>
                                <?php echo form_error('confirmpassword', '<div class="error">', '</div>'); ?>
                               <button class="btn-primary signin-btn" type="submit">Change Password</button>
                            </form>
       </div>
      
                
            
          </div></div>
                     
                  </div>
              </div>
            </div>
            </div>
      </div>
    <script src="<?php echo base_url();?>javascripts/jquery.min.js"></script>
    <script src="<?php echo base_url();?>javascripts/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>javascripts/formValidation.js"></script>
    <script src="<?php echo base_url();?>javascripts/loginf.js"></script>
