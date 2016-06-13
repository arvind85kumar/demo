<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="()?>images/favicon.png"/>
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
  <body class="user-login">
       <!--start signup-login-->
       <div class="user-login-wrapper">
           <!--start header-->
           <header>
               <img src="<?php echo base_url();?>images/logo.png" alt="">
               <p>Because Life’s Biggest Moments Is Easy With Us</p>
           </header>
           <!--end header-->
           <!--start login-signup-content-->
           <section class="login-signup-content">
               <aside class="signup-title">
                   <h2>Login To My Account</h2>
                   <p><a href="<?php echo base_url()?>recover_password">Forget username or password?</a></p>
               </aside>
               <form action="" id="login-business-user" method="post" class="login-signup-form">
                   <div class="form-group">
                       <input type="email" name="email_address" class="form-control email" placeholder="Email">
                   </div>
                   <div class="form-group">
                       <input type="password" name="password" class="form-control password" placeholder="Password">
                   </div> 
                    <div class="form-group">                            
                      <div class="checkbox">
                        <label><input type="checkbox"> Remember me next time</label>
                      </div>
                    </div>
                   <button class="btn territory-btn">
                       Sign In Now
                   </button>   
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
    <script>
        $(document).ready(function(){
            //checkbox
            $('.checkbox input').prop("checked", false);
            $('.checkbox label').click(function () {
                if ($(this).find('input').is(":checked")) {
                    $(this).parent().addClass('checked');
                }else{
                    $(this).parent().removeClass('checked');
                }
            });
        });
    </script>
	<script type="text/javascript">
$(document).ready(function() {
	
    $('#login-business-user').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			email_address: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    email: {
                        message: 'The input is not a valid email address'
                    },
                     remote: {
						threshold: 5,
                        message: 'This email address is not registered',
                        url: '<?php echo base_url();?>User/login_email_validate',
                        type: 'POST',
                        delay: 1000
                        
                    }
                    
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            }
        }
    });
});
</script>
  </body>
</html>