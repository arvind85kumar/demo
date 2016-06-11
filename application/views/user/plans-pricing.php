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
  <div class="col-md-8">
	  <div class="panel panel-info">
           
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
            $(function () {
              $('[data-toggle="popover"]').popover()
            })
        });
   </script>
  
