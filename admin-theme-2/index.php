<?php
include('fetchHtml.php');
$template=new Fetchhtml();
if($_POST['submit']=='Submit')
{
$template->getTemplate($_POST['pageurl'],$_POST['basepath']);
$template->getSoureCodehtml($_POST['pageurl']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registration form Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="javascript/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Get Online Template Html <small>This code is used for fetch html template</small></h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form role="form" method="post" action="">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">Enter Page Url</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="pageurl" id="InputName" placeholder="Enter Page Url" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Base Path</label>
                    <div class="input-group">
                        <input type="text" class="form-control"  name="basepath" placeholder="Enter Base Path" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
        
</div>
<!-- Registration form - END -->

</div>

</body>
</html>
