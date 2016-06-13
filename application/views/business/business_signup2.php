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
      <div class="business-signup-container">
          <section class="login-content business">
            <header>
                Create Your Company Profile
                <div>A complete business profile will greatly strengthen your credibility with potential customers</div>
            </header>
            <!-- Login form start-->
            <form action="" method="post" id="business_step2" class="form-business" role="form">
               <div class="form-group">
                  <label for="name">Your Company Name<sup>*</sup></label>
                  <input type="text" class="form-control" name="company_name" value="<?php echo set_value('company_name'); ?>" placeholder="E.g. Acme Pte Ltd">
				  <?php echo form_error('company_name', '<div class="error">', '</div>'); ?>
               </div> 
               <div class="row">
                  <div class="col-sm-6">                                    
                       <div class="form-group">
                           <label for="name">List My Business In<sup>*</sup></label> 
                           <select class="form-control" id="industry_type"name="industry_type">
                                <option value="">Select Business In</option> 
                                <?php foreach($industry as $key=>$industryname){?>
									<option value="<?php echo $key;?>"><?php echo $industryname;?></option>
									<?php } ?>
                           </select>
						   <?php echo form_error('industry_type', '<div class="error">', '</div>'); ?>
                       </div>   
                  </div>
                  <div class="col-sm-6">                                    
                       <div class="form-group">
                           <label for="name">Your Business Type<sup>*</sup></label> 
                           <select class="form-control" name="business_type" id="business_type">
                                <option value="">Select Business Type</option> 
                           </select>
						   <?php echo form_error('business_type', '<div class="error">', '</div>'); ?>
                       </div>   
                  </div>
               </div> 
<div class="row">
                  <div class="col-sm-6">                                    
                       <div class="form-group has-feedback">
                           <label for="name">Follow Us on Facebook<sup>*</sup></label> 
                            <input type="text" class="form-control" value="<?php echo set_value('company_name'); ?>" name="Telephone" placeholder="http://facebook.com/companyname">								                           </div>   
                  </div>
                  <div class="col-sm-6">                                    
                       <div class="form-group has-feedback">
                           <label for="name">Follow Us on Twitter<sup>*</sup></label> 
                           <input type="text" class="form-control" value="<?php echo set_value('company_name'); ?>" name="Telephone" placeholder="http://twitter.com/companyname"> </div>   
                  </div>
               </div>			   
               <div class="form-group">
                   <label for="name">Busines Email<sup>*</sup></label>
                  <input type="text" class="form-control" name="business_email" value="<?php echo set_value('business_email'); ?>" placeholder="Customers will contact you with this email">
				  <?php echo form_error('business_email', '<div class="error">', '</div>'); ?>
               </div>                         
               <div class="form-group">
                   <label for="name">Telephone No.<sup>*</sup></label>
                  <input type="text" class="form-control" value="<?php echo set_value('company_name'); ?>" name="Telephone" placeholder="+65 0000 0000">
               </div>                                               
               <div class="form-group">
                  <label for="name">Street Address<sup>*</sup> </label>
                   <textarea class="form-control" name="Street_Address" rows="1" placeholder="Enter your address here"><?php echo set_value('Street_Address'); ?></textarea>
				   <?php echo form_error('Street_Address', '<div class="error">', '</div>'); ?>
               </div> 
                              <div class="form-group">
                  <label for="name">About Buisness<sup>*</sup> </label>
                   <textarea class="form-control" name="about_business" rows="1" placeholder="Enter your business details">
				   <?php echo set_value('about_business'); ?></textarea>
<?php echo form_error('about_business', '<div class="error">', '</div>'); ?>
               </div> 

               <div class="row">
                  <div class="col-sm-6">                                    
                       <div class="form-group">
                           <label for="name">State<sup>*</sup></label> 
                           <select name="state" id="state" class="form-control">
						   <option value="">--Select State---</option>
							   <?php foreach($state as $state_name){?>
                                <option value="<?php echo $state_name;?>"><?php echo $state_name;?> </option> 
                                <?php }?>
                           </select>
						   <?php echo form_error('state', '<div class="error">', '</div>'); ?>
                       </div>   
                  </div>
                  <div class="col-sm-6">                                    
                       <div class="form-group">
                           <label for="name">City<sup>*</sup></label> 
                          <select name="city" id="city" class="form-control">
						  <option vlaue="">--Slect City Name--</option>							   
                           </select>
						   <?php echo form_error('city', '<div class="error">', '</div>'); ?>
                       </div>   
                  </div>
               </div> 
               <div class="form-group">
                  <label for="name">Pincode</label> 
                  <input type="text" name="pincode" class="form-control" value="<?php echo set_value('pincode'); ?>"  placeholder="http://www.yourwebsite.com">
               </div>                                    
               <div class="form-group">
                  <label for="name">Company Website</label> 
                  <input type="text" value="<?php echo set_value('company_website'); ?>" class="form-control" name="company_website" placeholder="http://www.yourwebsite.com">
               </div>
                <div class="form-group">
                  <label for="name">Operating Hours</label> 
                  <input type="text" value="<?php echo set_value('operating_Hours'); ?>" class="form-control" name="operating_Hours" placeholder="Mon-Sat 09:00 AM to 06:00 PM">
               </div>     
               <button type="submit" class="btn signin-btn">One More Step and It's Done</button>
            </form>
            
      <!-- Login wrapper End-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="<?php echo base_url();?>javascripts/jquery.min.js"></script>
    <script src="<?php echo base_url();?>javascripts/bootstrap.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>javascripts/formValidation.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>stylesheets/bootstrap.js"></script>
  <script type="text/javascript">
$(document).ready(function() {
$("#industry_type").change(function() {
	var business_id=$("#industry_type").val();
  $.ajax({ url: "<?php echo base_url()?>Business/business_list", 
	  data: {business_id: business_id}, 
	  success : function(response) {
          $("#business_type").html(response);
        }
  });
});

$("#state").change(function() {
	var state=$("#state").val();	
  $.ajax({ url: "<?php echo base_url()?>Business/city_list", 
	  data: {state:state}, 
	  success : function(response) {		  
          $("#city").html(response);
        }
  });
});
    $('#business_step2').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            company_name: {
                validators: {
                    notEmpty: {
                        message: 'The Company name is required'
                    }
                }
            },
            Street_Address: {
                validators: {
                    notEmpty: {
                        message: 'The Street Address is required'
                    }
                }
            }
			,
            about_business: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter about your business'
                    }
                }
            }
			,
            operating_Hours: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter Operating Hours'
                    }
                }
            }
			,
            industry_type: {
                validators: {
                    notEmpty: {
                        message: 'The Industry Type is required'
                    }
                }
            },
            business_type: {
                validators: {
                    notEmpty: {
                        message: 'The Business Type is required'
                    }
                }
            },
			state: {
                validators: {
                    notEmpty: {
                        message: 'Please Select State'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'Please Select your City'
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
            }
        }
    });
});
</script>
