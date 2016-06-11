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
                      <div class="col-md-3"><br>
                      <!-----This View Will Load account Menu---->
                      <?php $this->load->view('includes/account-menu');?>

<br><br></div>
  <div class="col-md-3">
	  <div class="panel panel-info">
           s
              </div>
       </div>
       <div class="col-md-3">
			  <div class="panel panel-info">
				   s
				 </div>
        </div>
        <div class="col-md-3">
	  <div class="panel panel-info">
           s
              </div>
            </div>           
            
          </div></div>
                     
                  </div>
              </div>
            </div>
            </div>
      </div>
      <!-- Login wrapper End-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
