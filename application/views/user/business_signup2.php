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
            <form action="" method="post" class="form-business" role="form">
               <div class="form-group">
                  <label for="name">Your Company Name<sup>*</sup></label>
                  <input type="text" class="form-control" name="company-name" placeholder="E.g. Acme Pte Ltd">
               </div> 
               <div class="row">
                  <div class="col-sm-6">                                    
                       <div class="form-group">
                           <label for="name">List My Business In<sup>*</sup></label> 
                           <select class="form-control">
                                <option>Select One Only</option> 
                           </select>
                       </div>   
                  </div>
                  <div class="col-sm-6">                                    
                       <div class="form-group">
                           <label for="name">Your Business Type<sup>*</sup></label> 
                           <select class="form-control">
                                <option>Select One Only</option> 
                           </select>
                       </div>   
                  </div>
               </div>    
               <div class="form-group">
                   <label for="name">Busines Email<sup>*</sup></label>
                  <input type="text" class="form-control" name="Busines-email" placeholder="Customers will contact you with this email">
               </div>                         
               <div class="form-group">
                   <label for="name">Telephone No.<sup>*</sup></label>
                  <input type="text" class="form-control" name="Telephone" placeholder="+65 0000 0000">
               </div>                                               
               <div class="form-group">
                  <label for="name">Street Address</label>
                   <textarea class="form-control" name="Street-Address" rows="1" placeholder="Enter your address here"></textarea>
               </div> 
               <div class="row">
                  <div class="col-sm-6">                                    
                       <div class="form-group">
                           <label for="name">Country<sup>*</sup></label> 
                           <select class="form-control">
                                <option>Singapore</option> 
                           </select>
                       </div>   
                  </div>
                  <div class="col-sm-6">                                    
                       <div class="form-group">
                           <label for="name">Postal Code<sup>*</sup></label> 
                          <input type="text" class="form-control" name="Postal-Code" placeholder="">
                       </div>   
                  </div>
               </div>                                    
               <div class="form-group">
                  <label for="name">Company Website</label> 
                  <input type="text" class="form-control" name="Postal-Code" placeholder="http://www.yourwebsite.com">
               </div>       
               <button type="submit" class="btn signin-btn">One More Step and It's Done</button>
            </form>
            <!-- Login form end-->
        </section>
      </div>
      <!-- Login wrapper End-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </body>
</html>
