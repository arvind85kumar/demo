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
  <div class="col-md-8"><div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">
				  <?php echo ucfirst($userdata[0]['first_name']).' '.$userdata[0]['last_name']; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div align="center" class="col-md-3 col-lg-3 ">
                <?php
if($userdata[0]['profile_picture']=='')
{
$picture='user-pic.jpg';
}else
{
  $picture=$userdata[0]['profile_picture'];
}
                ?> 
					<img width="120px" height="100px" class="img-circle img-responsive" src="<?php echo base_url()."images/profile_pictures/".$picture;?>" alt="User Pic"> </div>
                
         
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td><?php echo $userdata[0]['first_name'].' '.$userdata[0]['last_name'];?></td>
                      </tr>
                      <tr>
                        <td>Email address:</td>
                        <td><?php echo $userdata[0]['email_address'];?></td>
                      </tr>
                      <tr>
                        <td>Company Name</td>
                        <td><?php echo $userdata[0]['company_name'];?></td>
                      </tr>
                   
                         <tr>
                            
                        <td>City</td>
                        <td><?php echo $userdata[0]['city'];?></td>
                      </tr>
                      <tr>  
                        <td>State</td>
                        <td><?php echo $userdata[0]['state'];?></td>
                      </tr>
                       <tr>  
                        <td>Country</td>
                        <td><?php echo $userdata[0]['country'];?></td>
                      </tr>
                      <tr>  
                        <td>Pincode</td>
                        <td><?php echo $userdata[0]['pincode'];?></td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td><?php echo $userdata[0]['address'];?></td>
                      </tr>
                      <tr>
                        <td>Account Type</td>
                        <td>Paid</td>
                      </tr>
                    </tbody>
                  </table>                 
                
                </div>
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
  
