<link href="<?php echo base_url();?>admin-theme-2/vendors/summernote/dist/summernote.css" rel="stylesheet">
<link href="<?php echo base_url();?>stylesheets/jquery.dataTables.min.css" rel="stylesheet">
<section id="content">
                <div class="container">

                    <!-- Colored Headers -->
                    <div class="block-header">
                        <h2>Grow your business with email marketing<small>Grow your business with marketing automation</small></h2>
                    </div>
                    
                    <div class="row">
						 <div class="col-sm-12">
                            <div class="card">
                        <div class="card-header">
                            <h2>All Users <small>Super Simple WYSIWYG Editor on Bootstrap</small></h2>
                        </div>
                        
                        <div class="card-body card-padding">
                            <div class="table-responsive">
      <table id="example" class="table table-bordered display" width="100%">
        <thead>
          <tr>            
            <th>Name</th>         
            <th>Username</th>
            <th>Email Address</th>            
            <th>City</th>
            <th>Created On</th>
            <th>Tasks</th>
          </tr>
        </thead>
        <tbody class="table-hover">
			<?php foreach($users as $user):?>
          <tr>            
            <td><?php echo ucfirst($user['first_name'].' '.$user['last_name']);?></td>          
            <td><?php echo $user['username'];?></td>
            <td><?php echo $user['email_address'];?></td>           
            <td><?php echo $user['city'];?></td>
            <td><?php echo $user['created_on'];?></td>
            <td><a  target="_blank" href="<?php echo base_url();?>viewProfile?id=<?php echo base64_encode($user['userid']);?>" title="View Profile">
                    <i class="glyphicon glyphicon-eye-open"></i></a>
                   <a  target="_blank" href="<?php echo base_url();?>editProfile?id=<?php echo base64_encode($user['userid']);?>" title="Edit Profile"class="edit"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a><a  url="<?php echo base_url();?>admin" href="javascript:void(0)" id=<?php echo base64_encode($user['userid']);?> title="Delete Profile" class="glyphicon glyphicon-remove deleteUser "></a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
                        </div>
                    </div>
                    <br>
                    <br>

                    
                    <!-- Extra -->
                </div>
            </section>
		<script src="<?php echo base_url();?>javascripts/jquery.min.js"></script>
		<script src="<?php echo base_url();?>javascripts/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>javascripts/bootstrap.min.js"></script>
          <script src="//cdn.ckeditor.com/4.5.6/full/ckeditor.js"></script>

      

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
    $('.deleteUser').on('click',function(){
	var userid=$(this).attr('id');
	var url="<?php echo base_url();?>admin/deleteUser";	
	 var r = confirm("Are you sure want to delete this user");
    if (r == true) {
	$.ajax({
				 type: "GET",
				 url:url,
				 data: ({userid: userid}),
				 success: function(data){
					 window.location.reload(true);
				 }
			});
   
   
    } else {
        
    }
    document.getElementById("demo").innerHTML = txt;
});
} );
  </script>