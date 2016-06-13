<script type="text/javascript" src="<?php echo base_url();?>administrator/js/jquery.dataTables.min.js"></script>
<link href="<?php echo base_url();?>administrator/css/jquery.dataTables.min.css" rel="stylesheet"/>
<div class="graphs">
	   <div class="xs">
  	 <h2>All Users</h2>
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
            <td><a  target="_blank" href="<?php echo base_url();?>viewProfile?id=<?php echo base64_encode($user['userid']);?>" title="View Profile"><i class="glyphicon glyphicon-eye-open"></i></a>&nbsp;&nbsp;<a  target="_blank" href="<?php echo base_url();?>editProfile?id=<?php echo base64_encode($user['userid']);?>" title="Edit Profile"class="edit"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;<a  url="<?php echo base_url();?>admin" href="javascript:void(0)" id=<?php echo base64_encode($user['userid']);?> title="Delete Profile" class="glyphicon glyphicon-remove deleteUser "></a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
  </div>
  </div>
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
  
