<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url()?>images/favicon.png"/>
	<link href="<?php echo base_url();?>stylesheets/style.css" rel="stylesheet">
    <title>Big plans</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>stylesheets/screen.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="perfect-wedding-signup login-signup">
       <!--start signup-login-->
       <div class="login-signup-wrap">
           <!--start header-->
           <header>
               <img src="<?php echo base_url()?>images/logo.png" alt="">
               <p>Because Life’s Biggest Moments Is Easy With Us</p>
           </header>
           <!--end header-->
           <!--start login-signup-content-->
           <section class="login-signup-content">
               <aside class="signup-title">
                   <h2>
                       Create My FREE Account
                   </h2>
                   <p>Are you a local business? <a href="<?php echo base_url();?>business_signup">FREE sign up here</a></p>
                   <button class="btn btn-signup-facebook">
                       <i class="icon-facebook2"></i> Sign Up with Facebook
                   </button>
               </aside>
			    <?php
$attributes=array('class'=>'login-signup-form','id'=>'coustomer-signup');
				echo form_open_multipart('coustomer-signup',$attributes);?>
                   <h3 class="split-block"><span>Sign Up with your Email</span></h3>
                   <div class="form-group">
                       <input type="text" class="form-control" name="firstName" value="<?php echo set_value('firstName'); ?>" placeholder="First Name">
					   <?php echo form_error('firstName', '<div class="error">', '</div>'); ?>
                   </div>
                   <div class="form-group">
                       <input type="text" class="form-control" name="last_name" value="<?php echo set_value('last_name'); ?>" placeholder="Last Name">					  
                   </div>
                     <div class="form-group">
                       <input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="example@example.com">
					    <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                   </div>
				       <div class="form-group">
                       <input type="text" name="mobile" value="" class="form-control" value="<?php echo set_value('mobile'); ?>" placeholder="+9198XXXXXXXX">
					   <?php echo form_error('mobile', '<div class="error">', '</div>'); ?>
                   </div>
                   <div class="form-group">
                       <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Password">
					   <?php echo form_error('password', '<div class="error">', '</div>'); ?>
                   </div>
					<div class="form-group">
                       <input type="text" class="form-control" name="city" value="<?php echo set_value('city'); ?>" placeholder="City Name">
                   </div>
					<div class="form-group">
                       <input type="text" class="form-control" name="address" value="<?php echo set_value('address'); ?>" placeholder="Address">
                   </div>					   
                   <div class="form-group">
                       <div class="custom-file-upload">
                                <div class="upload-btn" >Picture</div>
                                <input  type="file" name="profile_picture" accept=".jpg">
                            </div>
							
                   </div>  
                   <div class="form-progress-bar">
                       <span class="filled"></span>
                       <span class="error"></span>
                       <span></span>
                       <span></span>
                       <span></span>
                   </div>
				   
                   <p class="policy-accept"><input data-fv-field="acceptTerms" name="acceptTerms" type="checkbox">&nbsp;&nbsp;By clicking on the Sign Up button, you acknowledge and agree 
to our  <a href="#">Terms of Use and Privacy Policy.</a></p> 
                   <button class="btn territory-btn">
                       Sign Up Now
                   </button>      
                   <div class="form-bottom">
                       Already have an account?  <a href="<?php echo base_url();?>login">Log in here</a>
                   </div>   
               </form>
           </section>
           <!--end login-signup-content-->
       </div>
       <!--end signup-login-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo base_url();?>javascripts/jquery.min.js"></script>
    <script src="<?php echo base_url();?>javascripts/bootstrap.min.js"></script>
	 <script type="text/javascript" src="<?php echo base_url();?>javascripts/formValidation.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>stylesheets/bootstrap.js"></script>
  </body>
  <script type="text/javascript">
$(document).ready(function() {	
    $('#coustomer-signup').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstName: {
                validators: {
                    notEmpty: {
                        message: 'The First name is required'
                    }
                }
            },
            mobile: {
                validators: {
                    notEmpty: {
                        message: 'The mobile number is required'
                    },
                    stringLength: {
                        min: 10,
                        max: 12,
                        message: 'The mobile number must be atleast 10 digit and less than 12 digits long'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    },
                     remote: {
						threshold: 5,
                        message: 'This email address is already registered',
                        url: '<?php echo base_url();?>User/email_available',
                        type: 'POST',
                        delay: 1000
                        
                    }
                    
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
                    stringLength: {
                        min: 6,
                        message: 'The password must be more than 6 characters long'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            acceptTerms: {
                validators: {
                    notEmpty: {
                        message: 'Please accept term & conditions'
                    }
                }
            }
        }
    });
});
</script>
</html>