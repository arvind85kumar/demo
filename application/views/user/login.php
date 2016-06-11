<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="<?php echo base_url();?>image/png" href="<?php echo base_url();?>images/favicon.png"/>
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
  <body class="login">
      <!-- Login wrapper start-->
      <div class="login-wrapper">
        <header>Login To TheBigPlans.com</header>
        <section class="login-content">
            <div class="row">
                <div class="col-sm-6 form-login">
                    <!-- Login form start-->
                    <form action="<?php echo base_url() .'login'; ?>" method="post" id="login" role="form">                        
                       <div class="form-group">
                          <label for="name">Username or Email</label>
                          <input type="text" class="form-control username" name="username" value="<?php echo set_value('username'); ?>">
                          <?php echo form_error('username', '<div class="error">', '</div>'); ?>
                       </div>                        
                       <div class="form-group">
                          <label for="name">Password</label>
                          <input type="password" class="form-control password" name="password" value="<?php echo set_value('password'); ?>">
                          <?php echo form_error('password', '<div class="error">', '</div>'); ?>
                       </div>                        
                       <div class="checkbox">
                          <label>
                          <input type="checkbox"> Keep me signed in
                          </label>
                       </div>
                       <button type="submit" class="btn signin-btn">Sign in</button>
                       <a href="<?php echo base_url();?>recover_password" class="forgot-link">Forgot your username or password? </a>
                    </form>
                    <!-- Login form end-->
                </div>  
                <div class="col-sm-6">
                    <div class="fb-login-wrapper">
                        <span class="fb-avatar"><img src="<?php echo base_url();?>images/login/fb-avatar.png" alt=""/></span>
                        <button type="submit" class="btn fb-signin-btn"><i></i>Sign in with Facebook</button>
                    </div>
                </div> 
            </div>
        </section>
        <div class="form-footer">Don't have an account yet?  <a href="<?php echo base_url();?>business_signup">Sign Up Now</a></div>
      </div>
      <!-- Login wrapper End-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>javascripts/jquery.min.js"></script>
    <script src="<?php echo base_url();?>javascripts/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>javascripts/formValidation.js"></script>
    <script src="<?php echo base_url();?>javascripts/login.js"></script>
    <script src="<?php echo base_url();?>javascripts/bootstrap.min.js"></script>
    </body>
</html>
