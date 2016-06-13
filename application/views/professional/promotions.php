<link href="<?php echo base_url();?>stylesheets/style.css" rel="stylesheet">
<section id="content">
                <div class="container">

                    <!-- Colored Headers -->
                    <div class="block-header bgm-orange brd-4 p-15">
                        <h2 style="color:#FFF;">Grow your business by giving promotioal offers.
						<small style="color:#FFF;">Give offers to your coustomers.....</small></h2>
                    </div>
                    
                    <div class="row">
					
                        <div class="col-sm-6">
                        <section id="content">
                <div class="container">
                    <div class="card">
     <?php echo form_open_multipart('promotions');?>
					<!--<form method="post" action="" enctype="multipart/form-data">-->
                      	<div class="card-header ch-alt">
                                <h2>Promotional Offers <small>You can offer exiting promotional offers to your customers.</small></h2>
                        </div>
                    
                        <div class="card-body card-padding">
						 <div class="form-group">
                                <div class="fg-line">
                                   <i class="zmdi zmdi-local-offer zmdi-hc-fw"></i><input title="Promotion Title" required class="form-control input-sm " placeholder="Promotion Title" name="promotion_title" value="<?php echo set_value('promotion_title'); ?>" type="text">
								     <?php echo form_error('promotion_title', '<div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                                </div>
                            </div>
                        <div class="form-group">
                                <div class="fg-line">
                      <i class="zmdi zmdi-comment zmdi-hc-fw"></i><textarea style="  height: 64px;" name="promotion_detail" class="form-control auto-size" placeholder="Promotion Details"><?php echo set_value('promotion_detail'); ?></textarea>
					    <?php echo form_error('promotion_detail', '<div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                                </div>
                        </div>
							 <div class="form-group">
                                <div class="fg-line">
                                    <i class="zmdi zmdi-time zmdi-hc-fw"></i><input class="form-control input-sm" name="promotion_period" placeholder="Promotion Period" value="<?php echo set_value('promotion_period'); ?>" type="text"> 
									  <?php echo form_error('promotion_period', '<div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                                </div>
                            </div>
							     <div class="form-group">
                                <div class="fg-line">
                      <i class="zmdi zmdi-comment zmdi-hc-fw"></i><textarea style=" word-wrap: height: 44px;" name="terms" class="form-control auto-size" placeholder="Terms & Conditions"><?php echo set_value('terms'); ?></textarea>
					    <?php echo form_error('terms', '<div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                                </div>
                            </div>
							 <div class="form-group">
                               <div class="fg-line fileinput fileinput-new " data-provides="fileinput">

                                        <span class="btn btn-primary btn-file m-r-10 waves-effect">
                                            <i class="zmdi zmdi-upload zmdi-hc-fw"></i><span class="fileinput-new">Upload Phooto</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="hidden"><input name="promotion_pic1" type="file">
                                        </span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">×</a>
                                  
                                    </div>
                            </div>
							
								 <div class="form-group">
                               <div class="fg-line fileinput fileinput-new " data-provides="fileinput">

                                        <span class="btn btn-primary btn-file m-r-10 waves-effect">
                                            <i class="zmdi zmdi-upload zmdi-hc-fw"></i><span class="fileinput-new">Upload Phooto</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="hidden"><input name="promotion_pic2" type="file">
                                        </span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">×</a>
                                  
                                    </div>
                            </div>
								 <div class="form-group">
                               <div class="fg-line fileinput fileinput-new " data-provides="fileinput">

                                        <span class="btn btn-primary btn-file m-r-10 waves-effect">
                                            <i class="zmdi zmdi-upload zmdi-hc-fw"></i><span class="fileinput-new">Upload Phooto</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="hidden"><input name="promotion_pic3" type="file">
                                        </span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">×</a>
                                  
                                    </div>
                            </div>
							    <div class="form-group">
                                        <div class="fg-line">
                                          <div class="col-sm-3"> <button type="submit" class="btn btn-info">Submit</button></div>
										  <div class="col-sm-3">
										<button class="btn btn-link">Cancel</button>
									</div>
                                        </div>
                                    </div>
                        </div>						
						</form>
                    </div>
                        </div>
		             </section>
               
					</div>
					<!----Promotional Offer Listing-->
					<?php  ADMIN_THEME; $admin_base_url=base_url().'admin-theme-2/';?>
					<script src="<?php echo $admin_base_url;?>vendors/bower_components/jquery/dist/jquery.min.js"></script>
					
        <script src="<?php echo $admin_base_url;?>vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo $admin_base_url;?>vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
					 
        <script src="<?php echo $admin_base_url;?>vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php echo $admin_base_url;?>vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="<?php echo $admin_base_url;?>vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="<?php echo $admin_base_url;?>vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script> 
					<div class="col-md-6">
					<div class="card">
                        
                    </div>
					
					</div>
					<!----End Promotional Offer Listing-->
                    <!-- Extra -->
               
				</div>
				</div>
            </section>
			<script type="text/javascript">
            $(document).ready(function(){
                //Basic Example
                $("#example").datatable();
                });
                
              
        </script>