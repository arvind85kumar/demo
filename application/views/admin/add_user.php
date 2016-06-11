<script type="text/javascript" src="<?php echo base_url();?>administrator/js/formValidation.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>administrator/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>administrator/js/add_user.js"></script>
 <div class="graphs">
	     <div class="xs">
  	       <h3>Add New User</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							  <?php 
  if(validation_errors())
  {?>
	  
<div class="alert alert-danger fade in">
   <!--<a href="#" class="close" data-dismiss="alert">&times;</a>--->
    <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php echo validation_errors();?>
        
        </div>
   <?php }
  else {?>
        
        <?php } 
 echo form_open('newuser', array('class' => 'form-horizontal','id'=>'defaultForm'));?>	
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">First Name *</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="first_name" placeholder="First Name" value="<?php echo set_value('first_name'); ?>">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Last Name </label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="last_name" placeholder="Last Name" value="<?php echo set_value('last_name'); ?>">
									</div>
									
								</div>
								<div class="form-group">
                                <label class="col-sm-2 control-label">Username *</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="username" placeholder="User Name" value="<?php echo set_value('username'); ?>" />
                                </div>
                            </div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Password *</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" name="password"  placeholder="Password" value="<?php echo set_value('password'); ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Confirm Password *</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" name="confirmPassword" value="<?php echo set_value('confirmPassword'); ?>" placeholder="Confirm Password">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Email Address *</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email Address">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Mobile Number</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" value="<?php echo set_value('mobile'); ?>" maxlength="12" name="mobile" placeholder="Mobile Number">
									</div>
									
								</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Country *</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="country" value="<?php echo set_value('country'); ?>" placeholder="Country">
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">State *</label>
									<div class="col-sm-8">
										<select  url="<?php echo base_url();?>admin" id="state" name="state" class="form-control1">
										<option value="">--Select State--</option>
										<?php foreach($states as $state) {?>
										<option value="<?php echo $state['state'];?>"><?php echo $state['state'];?></option>
										<?php } ?>										
									</select>
									</div>
									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">City *</label>
									<div class="col-sm-8">
										<select  url="<?php echo base_url();?>admin" id="city" name="city" class="form-control1">
										<option value="">--Select City--</option>
										<?php foreach($cities as $city) {?>
										<option value="<?php echo $city['city_id'];?>"><?php echo $city['city_name'];?></option>
										<?php } ?>										
									</select>
									</div>
									
								</div>
							
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Pincode *</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1"  value="<?php echo set_value('pincode'); ?>" name="pincode" maxlength="8" placeholder="Pincode">
									</div>
									
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Address</label>
									<div class="col-sm-8"><textarea  name="address" placeholder="Address" cols="50" rows="8" class="form-control1"><?php echo set_value('address'); ?></textarea></div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Industry Type *</label>
									<div class="col-sm-8"><select  url="<?php echo base_url();?>admin" id="industry" name="industry_id" class="form-control1">
										<option value="">--Select Industry Type--</option>
										<?php foreach($industry_type as $industry) {?>
										<option value="<?php echo $industry['id'];?>"><?php echo $industry['industry_name'];?></option>
										<?php } ?>										
									</select>									
									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Business Type *</label>
									<div class="col-sm-8"><select  name="business_id" id="business_id" class="form-control1">
										<option value="">--Select Business Type--</option>
										<?php foreach($industry_type as $industry) {?>
										<option value="<?php echo $industry['id'];?>"><?php echo $industry['industry_name'];?></option>
										<?php } ?>										
									</select>								
									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label"></label>								
									<div class="col-sm-8 "><button class="btn btn-default" type="submit">Submit</button>
									<button class="btn btn-default" type="resetReset">Reset</button>
									</div>
								</div>
							</form>
						</div>
					</div>
  
  </div>
 
