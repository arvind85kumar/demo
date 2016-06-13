<section id="content">
                <div class="container">

                    <!-- Colored Headers -->
                    <div class="block-header bgm-orange brd-4 p-15">
                        <h2 style="color:#FFF;">Grow your business with email marketing
						<small style="color:#FFF;">Grow your business with marketing automation</small></h2>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-8">
                        <section id="content">
                <div class="container">
                    <div class="card">
					<?php $attributes=array('id'=>'frmAdd'); echo form_open_multipart('professional_aboutus',$attributes);?>
                      	<div class="card-header ch-alt">
                                <h2>About Us Form <small>Please Fill about your business.</small></h2>
                            </div>
                    
                        <div class="card-body card-padding">
                            <div class="form-group">
                                <div class="fg-line">
                      <i class="zmdi zmdi-comment zmdi-hc-fw"></i><textarea style=  height: 80px;" name="about_us" data-autosize-on="true" class="form-control auto-size" placeholder="Please Say in Details about your Business..."><?php echo set_value('about_us'); ?></textarea>
					  
					  <?php echo form_error('about_us', '<div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                                </div>
                            </div>
							
						 <div class="form-group">
                                <div class="fg-line">
                                    <i class="zmdi zmdi-phone zmdi-hc-fw"></i><input title="Contact Number" class="form-control input-sm " placeholder="Contact Number" name="mobile" value="<?php echo set_value('mobile'); ?>" type="text">
									<?php echo form_error('mobile', '<div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                                </div>
                            </div>
							  <div class="form-group">
                                <div class="fg-line">
                                    <i class="zmdi zmdi-globe-alt zmdi-hc-fw"></i><input class="form-control input-sm" name="company_website" value="<?php echo set_value('company_website'); ?>" placeholder="Website" type="text">
                                </div>
                            </div>
							 <div class="form-group">
                                <div class="fg-line">
                                    <i class="zmdi zmdi-time zmdi-hc-fw"></i><input class="form-control input-sm" value="<?php echo set_value('operating_hours'); ?>" name="operating_hours" placeholder="Operating Hours" type="text">
									<?php echo form_error('operating_hours', '<div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                                </div>
                            </div>
								 <div class="form-group">
                               <div class="fg-line fileinput fileinput-new " data-provides="fileinput">

                                        <span class="btn btn-primary btn-file m-r-10 waves-effect">
                                            <i class="zmdi zmdi-upload zmdi-hc-fw"></i><span class="fileinput-new">Upload Profile Picture</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="hidden"><input name="user_profile_picture" type="file">
                                        </span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">×</a>
                                  
                                    </div>
                            </div>
							 <div class="form-group">
                               <div class="fg-line fileinput fileinput-new " data-provides="fileinput">

                                        <span class="btn btn-primary btn-file m-r-10 waves-effect">
                                            <i class="zmdi zmdi-upload zmdi-hc-fw"></i><span class="fileinput-new">Upload Business Logo</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="hidden"><input name="business_logo" type="file">
                                        </span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">×</a>
                                  
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            <i class="zmdi zmdi-facebook zmdi-hc-fw"></i><input class="form-control" placeholder="Follow Us on Facebook" value="<?php echo set_value('facebook_page'); ?>"  name="facebook_page" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            <i class="zmdi zmdi-twitter zmdi-hc-fw"></i><input class="form-control" placeholder="Follow Us on Twitter" value="<?php echo set_value('twitter_page'); ?>" name="twitter_page" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            <i class="zmdi zmdi-google-plus zmdi-hc-fw"></i><input class="form-control" placeholder="Follow Us on Google +" value="<?php echo set_value('google_plus_page'); ?>" name="google_plus_page" type="text">
                                        </div>
                                    </div>
                                </div>
								 <div class="col-sm-8">
                                    <div class="form-group">
                                        <div class="fg-line">
                                          <div class="col-sm-3"> <button type="submit" class="btn btn-info">Submit</button></div>
										  <div class="col-sm-3">
										<button class="btn btn-link">Cancel</button>
									</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</form>
                    </div>
                
                   
                        </div>
               

                    
                    <!-- Extra -->
                </div>
            </section>
			<script type="text/javascript">
			jQuery(document).ready(function(e){
			jQuery("#frmAdd").validate({   
            rules: {
                mobile: {
                    required: true                                                    
                },
                last_name: {
                    required: true                                 
                },
                address1: {
                    required: true                                 
                },
                cell_phone: {
                    required: true,                               
                    cellPhoneError: true                                  
                },
                city: {
                    required: true                                 
                },
                state: {
                    required: true                                 
                },
                zipcode: {
                    required: true                                 
                },
                dob: {
                    required: true                                 
                },
                submission_date: {
                    required: true                                 
                },
                event_type: {
                    required: true,                                
                    eventType: true                                 
                },
                age_group: {
                    required: true ,                               
                    ageGroup: true                                 
                }
                          
            },           
            messages: {              
                mobile: {
                    required: "Please enter Mobile Number."
                },
                last_name: {
                    required: "Please enter last name."
                },
               address1: {
                    required: "Please enter address1."
                },
                cell_phone: {
                    required: "Please enter cell phone.",
                    cellPhoneError: "This player already exists in our record."
                },
                city: {
                    required: "Please enter city."
                },
                state: {
                    required: "Please enter state."
                },
                zipcode: {
                    required: "Please enter zip code."
                },
                dob: {
                    required: "Please enter junior birth day."
                },
                submission_date: {
                    required: "Please enter submission date."
                },
                event_type: {
                    required: "Please select event type.",
                    eventType: "Please enter partner phone."
                },
                age_group: {
                    required: "Please select age group.",
                    ageGroup: "Please select above age group."
                }
                           
            },
            submitHandler: function (form) {      
               
                form.submit();
               
            }           
        });

});
			</script>
