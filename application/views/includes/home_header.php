<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>images/favicon.png"/>
    <!--<title>Big plans</title>-->
    <title><?php echo (isset($title) ? $title: 'My Business Plan');?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>stylesheets/screen.css" rel="stylesheet">
    <link href="<?php echo base_url();?>stylesheets/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>stylesheets/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url();?>stylesheets/custom-style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!--start header-->
	<header>
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="logo" href="#"><img src="<?php echo base_url();?>images/logo.png" alt=""></a>
          </div>
          <a href="<?php echo base_url()?>business_signup" class="reg-business">REGISTER YOUR BUSINESS</a>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">I'M PLANNING FOR <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="perfect-wedding.html">Perfect Wedding</a></li>
                  <li><a href="<?php echo base_url()?>login">Dream Home</a></li>
                </ul>
              </li>
              <li><a href="<?php echo base_url()?>login">LOGIN</a></li>
              <li><a href="<?php echo base_url()?>coustomer-signup">SIGN UP</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container -->
      </nav>
	</header>
    <!--end header-->
