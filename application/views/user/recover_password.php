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
  <body>
    <div class="container">
        <header class="plain-header">
            <a href="index.html"><img src="<?php echo base_url();?>images/logo.png" alt=""></a>
        </header>
        <section class="basic-content">
            <h2>Forgot your password?</h2>
            <p>To recover your password, enter the email address  you use  for signing in to your account. We’ll send you an email with your password. If you don’t see it in your inbox, please check your spam folder.</p>
            <form action="" method="post" id="forgot-password" class="forgot-password">
               <div class="form-group">
                  <label for="emailId">Email Address:</label>
                   <input type="email" id="emailId" name="email_address" class="form-control" placeholder="example@emaple.com">
               </div>
               <div class="form-group">
                  <label for="emailId">Enter Code:</label>
                  <div class="g-recaptcha"><img src="<?php echo base_url();?>images/reCaptcha.jpg" alt=""></div>
               </div>
               <button class="btn territory-btn">Recover Password</button>
            </form>
        </section>
        <!--end plain-header-->
    </div>
    <!--end container-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>javascripts/jquery.min.js"></script>
    <script src="<?php echo base_url();?>javascripts/bootstrap.min.js"></script>
	 <script type="text/javascript" src="<?php echo base_url();?>javascripts/formValidation.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>stylesheets/bootstrap.js"></script>
  </body>
  <script type="text/javascript">
$(document).ready(function() {
	
    $('#forgot-password').formValidation({
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
            }
        }
    });
});
</script>
</html>
