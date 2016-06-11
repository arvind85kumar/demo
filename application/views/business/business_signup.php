<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>images/favicon.png"/>
    <title>Big plans</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>stylesheets/screen.css" rel="stylesheet">
    <link href="<?php echo base_url();?>stylesheets/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="business-signup">
      <!-- Login wrapper start-->
      <div class="container">
          <div class="outer-nw-wrpr"><!-- for non-responsive view only in >768px-->
          <div class="row">
              <div class="col-sm-12 col-md-10 col-md-offset-1">
                  <div class="row">
                      <div class="col-sm-5">
                        <div class="why-join-us-wrapper">
                            <div class="img-box"><img src="<?php echo base_url();?>images/business/why-join-us.jpg" alt="" class="img-responsive"/></div>  
                            <h2>Why Join Us?</h2>
                            <ul>
                                <li>
                                    <span class="icon icon-past"></span>
                                    <div class="list-item">
                                        Showcase your past work to drive new business.
                                    </div>
                                </li>
                                <li>
                                    <span class="icon icon-process"></span>
                                    <div class="list-item">
                                        Build credibility with a simple endorsement process.

                                    </div>
                                </li>
                                <li>
                                    <span class="icon icon-mouth"></span>
                                    <div class="list-item">
                                        Bring your word-of-mouth online.
                                    </div>
                                </li>
                                <li>
                                    <span class="icon icon-growth"></span>
                                    <div class="list-item">
                                        We send you clients so you can rapidly grow  your business.
                                    </div>
                                </li>
                                <li>
                                    <span class="icon icon-showcase"></span>
                                    <div class="list-item">
                                        Showcase unlimited number of your projects to  potential clients
                                    </div>
                                </li>
                            </ul>
                        </div>
                      </div>
                      <div class="col-sm-7">
                        <section class="login-content business">
                            <header>
                                Create Your FREE Business Account
                                <div>Already have an account?  <a href="<?php echo base_url();?>login-business-user">Login Here</a></div>
                            </header>
                            <?php if(!empty($this->session->flashdata('unauthorize_access'))):?>
							<div class="alert alert-info" role="alert">
					<strong>Warning!</strong> <?php echo $this->session->flashdata('unauthorize_access');?>
						</div>
						<?php endif;?>
                            <!-- Login form start-->
                            <form action="" method="post" id="business_step1" class="form-business" role="form">
                               <div class="row">
							  
                                  <div class="col-sm-6">                                    
                                       <div class="form-group">
                                          <label for="name">Your Name</label>
                                          <input type="text" class="form-control" name="firstName" value="<?php echo set_value('first_name'); ?>" placeholder="First Name">
										  <?php echo form_error('firstName', '<div class="error">', '</div>'); ?>
                                       </div>   
                                  </div>
                                  <div class="col-sm-6">                                    
                                       <div class="form-group">
                                          <label for="name"></label>
                                          <input type="text" class="form-control" name="last_name" value="<?php echo set_value('last_name'); ?>" placeholder="Last Name">
										   <?php echo form_error('last_name', '<div class="error">', '</div>'); ?>
                                       </div>   
                                  </div>
                               </div>
                               <div class="form-group">
                                  <label for="name">Your Mobile Number</label>
                                  <input type="text" class="form-control" name="mobile" value="<?php echo set_value('mobile'); ?>" maxlength="12" placeholder="+91 0000 000000">
								  <?php echo form_error('mobile', '<div class="error">', '</div>'); ?>
                               </div>     
                               <div class="form-group">
                                  <label for="name">Email</label>
                                  <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="example@mail.com">
								   <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                               </div>                         
                               <div class="form-group">
                                  <label for="name">Username</label>
                                  <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" placeholder="oneuser123">
									<?php echo form_error('username', '<div class="error">', '</div>'); ?>								  
                               </div>                                               
                               <div class="form-group">
                                  <label for="name">Password</label>
                                  <input type="password" class="form-control" name="password"  value="<?php echo set_value('password'); ?>" placeholder="Minimum 6 characters"  data-toggle="popover" data-placement="bottom" data-html="true" title="Password Strength:"  data-content="<div class='meter'><span class='inner-meter' style='width:50%;background-color: red;'></span></div> Use at least 6 characters with alpha 
        numeric.">
								<?php echo form_error('password', '<div class="error">', '</div>'); ?>
                               </div> 
                               <p>
                                   <label><input  name="acceptTerms" type="checkbox">By signing up with us, you agree with our <a href="#">Terms of Use</a>, <a href="#">Pro Agreement</a> and <a href="#">Privacy Policy</a>.</label></p>
                               <button type="submit" class="btn signin-btn">Sign Up</button>
                            </form>
                            <!-- Login form end-->
                        </section>
                      </div>
                  </div>
              </div>
            </div>
            </div>
      </div>
      <!-- Login wrapper End-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>javascripts/jquery.min.js"></script>
    <script src="<?php echo base_url();?>javascripts/bootstrap.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>javascripts/formValidation.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>stylesheets/bootstrap.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
            $(function () {
              $('[data-toggle="popover"]').popover()
            })
        });
   </script>
      
<script type="text/javascript">
$(document).ready(function() {
	
    $('#business_step1').formValidation({
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
            last_name: {
                validators: {
                    notEmpty: {
                        message: 'The Last name is required'
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
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    },
                     remote: {
						threshold: 5,
                        message: 'This username is not available',
                        url: '<?php echo base_url();?>User/username_available',
                        type: 'POST',
                        delay: 1000
                        
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

