<!DOCTYPE HTML>
<html>
<head>
<title>Admin Dashboard Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url();?>administrator/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url();?>administrator/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>administrator/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo base_url();?>administrator/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>administrator/js/jquery.js"></script>
<script src="<?php echo base_url();?>administrator/js/jquery.validate.js"></script>
<!----webfonts--->
<link href='<?php echo base_url();?>administrator///fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->    
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>administrator/js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><img src="<?php echo base_url();?>administrator/images/admin.png" alt=""/></a>
  </div>
  <div class="row">
	  <?php
	  $email_error=form_error('email');
	  $password_error=form_error('password');
	  ?>
  <div class="col-md-6 error-margin">
	  <?php if(!empty($email_error)):?>
    <div class="alert alert-danger fade in ">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
         <?php echo form_error('email'); ?>
    </div>
    <?php endif;?>
      <?php if(!empty($password_error)):?>
	<div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
       <?php echo form_error('password'); ?>
    </div> 
    <?php endif;?> 
  </div>
  <div class="col-md-6 box"></div>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  
<?php  $attributes=array('id'=>'signupForm'); echo form_open('admin',$attributes);?>
	<p>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" value="<?php echo set_value('email'); ?>">
			</p>	
	<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" value="<?php echo set_value('password'); ?>">
			</p>
		<div class="submit"><input type="submit" value="Login"></div>
		<ul class="new">
			<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
   <div class="copy_layout login">
      <p>Copyright &copy; 2015 Modern. All Rights Reserved</p>
   </div>
</body>
</html>
<script>
	$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});
	$().ready(function() {
		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				firstname: "required",
				lastname: "required",
				username: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 5
				},
				
				email: {
					required: true,
					email: true
				},
				topic: {
					required: "#newsletter:checked",
					minlength: 2
				},
				agree: "required"
			},
			messages: {				
				password: "Please enter your lastname",
				
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				email: "Please enter a valid email address"
				
			}
		});

		// propose username by combining first- and lastname
		

		
	});
	</script>
	
