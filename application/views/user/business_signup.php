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
                                <div>Already have an account?  <a href="login.html">Login Here</a></div>
                            </header>
                            <!-- Login form start-->
                            <form action="" method="post" class="form-business" role="form">
                               <div class="row">
                                  <div class="col-sm-6">                                    
                                       <div class="form-group">
                                          <label for="name">Your Name</label>
                                          <input type="text" class="form-control" name="username" placeholder="First Name">
                                       </div>   
                                  </div>
                                  <div class="col-sm-6">                                    
                                       <div class="form-group">
                                          <label for="name"></label>
                                          <input type="text" class="form-control" name="username" placeholder="Last Name">
                                       </div>   
                                  </div>
                               </div>
                               <div class="form-group">
                                  <label for="name">Your Mobile Number</label>
                                  <input type="text" class="form-control" name="username" placeholder="+65 0000 0000">
                               </div>     
                               <div class="form-group">
                                  <label for="name">Email</label>
                                  <input type="text" class="form-control" name="username" placeholder="example@mail.com">
                               </div>                         
                               <div class="form-group">
                                  <label for="name">Username</label>
                                  <input type="text" class="form-control" name="username" placeholder="oneuser123">
                                  <span class="error-message">Someone already has that username.Try another?</span>
                               </div>                                               
                               <div class="form-group">
                                  <label for="name">Password</label>
                                  <input type="password" class="form-control" name="password" placeholder="Minimum 6 characters"  data-toggle="popover" data-placement="bottom" data-html="true" title="Password Strength:"  data-content="<div class='meter'><span class='inner-meter' style='width:50%;background-color: red;'></span></div> Use at least 6 characters with alpha 
        numeric.">
                               </div> 
                               <p>
                                   <label><input type="checkbox">By signing up with us, you agree with our <a href="#">Terms of Use</a>, <a href="#">Pro Agreement</a> and <a href="#">Privacy Policy</a>.</label></p>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
            $(function () {
              $('[data-toggle="popover"]').popover()
            })
        });
   </script>
  </body>
</html>
