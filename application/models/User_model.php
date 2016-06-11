<?php
ini_set("error_reporting",1);
class user_model extends CI_Model {

    /**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
    */
	/*login script start*/
	
	function encrypt_decrypt($action, $string) {
   $output = false;

   $key = 'My strong random secret key';

   // initialization vector 
   $iv = md5(md5($key));

   if( $action == 'encrypt' ) {
       $output = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, $iv);
       $output = base64_encode($output);
   }
   else if( $action == 'decrypt' ){
       $output = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, $iv);
       $output = rtrim($output, "");
   }
   return $output;
}
	
	
	
	public function login($username,$password)
 	{
	
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username',$username);
		$this->db->where('password', $password);
		//$this->db->where('status',1);
		$query=$this->db->get();		
		return $query->result_array();		
  

	}

	function validate($user_name, $password)
	{
		$sql = "SELECT * FROM user INNER JOIN user_division_role ON user.userid=user_division_role.userid WHERE user.storeid=".$user_name." AND user.password='".$password."' AND user_division_role.roleid=(SELECT roleid FROM role WHERE name='Division Administrator')";
		 $res = $this->db->query($sql);
		 $rows=$res->num_rows();
		return $rows;
	}
	/*Check existence of email id while update password in forgot password*/
	public function check_email($email)
	{
		$query=$this->db->query("SELECT * FROM users WHERE emailid='".$email."'");
	foreach ($query->result() as $row)
		{
		$storeid=$row->storeid;
		}
		$rows=$query->num_rows();
		$result=array('afftected_rows'=>$rows,'storeid'=>$storeid);
		return $result;
	}
	/*Update password of user in forgot password*/
	
	public function update_password($email,$password)
	{
	$data=array('password'=>$this->encrypt_decrypt('encrypt', $password));
	$this->db->where('emailid', $email);
	$result=$this->db->update('user', $data);
		return $result;
	
    }
	/*Check store id*/
	
	public function check_exit_password($storeid)
	{
		$query=$this->db->query("SELECT * FROM user WHERE storeid='".$storeid."' ");
		$result=$query->row();
		$old_password=$result->password;
		return $old_password;
	}
	
	/*Update password using storeid*/
	
	public function change_user_password($storeid,$password)
	{
		$this->db->where('storeid', $storeid);
		$pass=$this->encrypt_decrypt('encrypt', $password);
		$data=array('password'=>$pass);
		$result=$this->db->update('user', $data);
		return $result;
	}
	
	public function set_users($table,$data)
{
 $this->load->helper('url');
 return $this->db->insert($table, $data);

}

	



	function __encrip_password($password) {
        return md5($password);
    }

    /**
    * Serialize the session data stored in the database, 
    * store it in a new array and return it to the controller 
    * @return array
    */
	function get_db_session_data()
	{
		$query = $this->db->select('user_data')->get('ci_sessions');
		$user = array(); /* array to store the user data we fetch */
		foreach ($query->result() as $row)
		{
		    $udata = unserialize($row->user_data);
		    /* put data in array using username as key */
		    $user['user_name'] = $udata['user_name']; 
		    $user['is_logged_in'] = $udata['is_logged_in']; 
		}
		return $user;
	}
	
    /**
    * Store the new user's data into the database
    * @return boolean - check the insert
    */	
	function create_member()
	{

		$this->db->where('username', $this->input->post('store_id'));
		$query = $this->db->get('division');

        if($query->num_rows > 0){
        	echo '<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>';
			  echo "Username already taken";	
			echo '</strong></div>';
		}else{
    			$new_member_insert_data = array(
				'username' => $this->input->post('store_id'),
				'password' => md5($this->input->post('password')),
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'region' => $this->input->post('region'),
				'store_name' => $this->input->post('store_name'),
				'phone_no' => $this->input->post('phone_no'),
				'fax_no' => $this->input->post('fax_no'),
				'user_role'=>'Member',
				'user_status'=>'Active'
				
			);
		
			$insert = $this->db->insert('users', $new_member_insert_data);
		    return $insert;
		}
	      
	}//create_member
	
	 function update_users($id, $data)
    {
		$this->db->where('userid', $id);
		$result=$this->db->update('user', $data);
		return $result;
	}
	/*Update Division Data of User  in Profile edit*/
	 function update_division($storeid, $data)
    {
		$this->db->where('storeid', $storeid);
		$result=$this->db->update('division', $data);
		return $result;
	}
	

	
	function get_search_user($storeid,$status,$first_name,$last_name,$division,$limit)
    {

  
  $str='';
   if($storeid != '' && $storeid != 0) 
   {  
   $str=' and user.storeid="'.$storeid.'"';
   }
  
   $sta='';
   if($status!='') 
   {  
   $sta=' and user.isactive="'.$status.'"';;
   }
  $first='';
  if($first_name!=''){
      $first=' and user.first_name="'.$first_name.'"';
  }
  
  $last='';
  if($last_name!=''){
     $last=' and user.last_name="'.$last_name.'"';
  }
  
  
  
  
  $div='';
  
   if($division==1) 
   {  
   $div=' and division.regionid=1';
   }
   if($division==2)
   {   
   $div=' and division.regionid=2';
   }
   if($division!=1 && $division!=2 && $division!=0) 
   {  
   $div=' and user.storeid="'.$division.'"';
   }

   $query=$this->db->query("SELECT * FROM user inner join user_division on(user.userid=user_division.userid) inner join division on(user_division.divisionid=division.divisionid) where  user.storeid !='' $str $sta $first  $last  $div and division.division_type !='M'  order by user.first_name $limit");

    //print_r($query->result_array());
  
  return $query->result_array();   
 }
	
	function get_inactive_user($limit){
		
			
		
		 $query=$this->db->query("SELECT * FROM user inner join user_division on(user.userid=user_division.userid) inner join division on(user_division.divisionid=division.divisionid) where user_division.isdefault=1 and user.isactive=0 order by user.first_name $limit");
		
		
		return $query->result_array(); 
	}
	
	 function get_userid()
    {
		
		$query=$this->db->query("SELECT userid FROM division ");

		return $query->result_array(); 
		
	}
	
   
   	
		function record_count()
	{
		$this->db->select('*');
			$this->db->from('division');
			
			$query = $this->db->get();
			return count($query->result_array()); 
	
	}
	
    function get_division()
    {
		
		$query=$this->db->query("SELECT store_name,storeid FROM division");

		return $query->result_array(); 
		
	}
	
	
	 function get_department()
    {
		
		$query=$this->db->query("SELECT department FROM product ");

		return $query->result_array(); 
		
	}
	
	
	 function get_category()
    {
		
		$query=$this->db->query("SELECT category FROM product ");

		return $query->result_array(); 
		
	}
	
	/********************* user controller functions start here ****************/
	
	
function get_user($limit)
    {
 //$query=$this->db->query("SELECT  *FROM user INNER JOIN division ON user.storeid=division.storeid WHERE ");
/*$this->db->select('user.first_name,user.last_name,user.emailid,user.phone,user.fax,user.userid,user.storeid,user.isactive,
division.store_name,division.division_type,division.divisionid');
  $this->db->from('user,division,user_division');
  $this->db->where('(user.userid=user_division.userid)');
  $this->db->where('(user.storeid=division.storeid)');
  $this->db->WHERE ('(user.storeid !=123456)');
  $this->db->group_by('user_division.userid');
  //$this->db->limit($limit);
  
  $query = $this->db->get();
echo  $this->db->last_query();*/
$query=$this->db->query("SELECT *FROM user INNER join division ON user.storeid=division.storeid $limit");

  return $query->result_array(); 
 }
	
	
	function user_profile()
    {
		$this->db->select('user.first_name,user.last_name,user.email,user.phone,user.notify,user.fax,division.*');
		$this->db->from('user,division');
		$this->db->where('(user.userid=division.userid)');
		$query = $this->db->get();
		return $query->result_array(); 
	}	
	
	public function user_detail($userid)
    {  
	//$query=$this->db->query("SELECT * FROM user INNER JOIN division ON  user.storeid=division.storeid WHERE user.userid='".$userid."'");
	$this->db->select('user.first_name,user.last_name,user.emailid,user.phone,user.fax,user.userid,user.storeid,user.isactive,user.notify,user.updated_on,division.store_name,division.division_type,user.ismanage_product,division.divisionid,user.password,division.regionid');
		$this->db->from('user,division,user_division');
		$this->db->where('(user.userid=user_division.userid)');
		$this->db->where('(user.storeid=division.storeid)');
		$this->db->where('(division.divisionid=user_division.divisionid)');	
	    $this->db->where('user.userid', $userid);
		//$this->db->where('user_division.isdefault', 1);		
        $query = $this->db->get();
		//echo $str = $this->db->last_query();
		return $query->result_array();	
		
    }
	
	public function get_division_id($division_list2,$userid){
		//padam koli done
		
		/*$this->db->select('divisionid');
		$this->db->from('user_division');
		$this->db->where('userid',$userid);
		$query1 = $this->db->get();
		$result1 = $query1->result_array();
		$div_res1 = "";
		foreach($result1 as $res){
			$div_res1 .= $res['divisionid'].",";
		}
		$divid = "";
		foreach($division_list2 as $divisionids){
			$divid .= $divisionids.",";
		}
		$divisionid = trim($divid,",");
		$division_name = str_replace(',',"','",$divisionid);
		
		$query2 = $this->db->query("Select divisionid from division where division_type = 'S' and store_name in('".$division_name."')");
		$division_id = "";
		$result2 = $query2->result_array();
		$div_res2 = "";
		foreach($result2 as $res1){
			$div_res2 .= $res1['divisionid'].",";
		}
		$division1 = trim($div_res1,",");
		$division1 = explode(",",$division1);
		$division2 = trim($div_res2,",");
		$division2 = explode(",",$division2);
		$new_div_id = array_diff($division2,$division1);
		
		
		foreach($new_div_id as $division_id){
		$data = array(
			 'userid' => $userid,
			 'divisionid' => $division_id,
			 'isdefault'=>0
		);
		$this->db->insert('user_division',$data);
		*/
		
				$query2 = $this->db->query("Select store_name,divisionid from division");
		$result2 = $query2->result_array();
		
		$alldivision=array();
		foreach($result2 as $res1){
			$alldivision[$res1['store_name']] = $res1['divisionid'];
		}
		

		$this->db->query("delete from user_division where userid = ".$userid);
		
		foreach($division_list2 as $division_list2){
		

		$data = array(
			 'userid' => $userid,
			 'divisionid' => $alldivision[$division_list2],
			 'isdefault'=>0
		);

		$this->db->insert('user_division',$data);
		}
	/*	$this->db->select('role.name,role.roleid');
		$this->db->from('role');
		$this->db->join('division_role','division_role.roleid=role.roleid');
		$this->db->where('divisionid',$division_id);
		$query2 = $this->db->get();
		foreach($query2->result_array() as $row1){
		$roleid = $row1['roleid'];
		$data1 = array(
			 'userid' => $userid,
			 'user_divisionid' => $division_id,
			 'roleid' => $roleid,
		);
		$this->db->insert('user_division_role',$data1);
		}
		
		*/
		
	}	
	
	
	public function record_assign_division($userid){
		$query=$this->db->query('select division.divisionid,division.store_name,user_division.userdivisionid,user_division.userid,user_division.divisionid,user_division.isdefault  from division inner join user_division on(division.divisionid=user_division.divisionid) where user_division.userid='.$userid);
		//echo $str = $this->db->last_query();
		return $query->result_array();
	}
	
	public function assign_division_id($userid){
		$this->db->select('user_division.divisionid,division_role.roleid,division.division,role.name');
		$this->db->from('user_division,division');
		$this->db->join('division_role','user_division.divisionid=division_role.divisionid','left');
		$this->db->join('role','division_role.roleid=role.roleid','left');
		$this->db->where('division.userid',$userid);
		$this->db->group_by('division_role.divisionid');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
	
	public function user_region(){
		$this->db->select('division.*');
		$this->db->from('division');
		$this->db->where('division_type','M');
		$query = $this->db->get();
		//echo $str = $this->db->last_query();
		return $query->result_array();
	}
	
		
	public function user_region_selected($userid){
		
			$this->db->select('user.userid, division.regionid');
		$this->db->from('user,division');
		$this->db->where('(user.storeid=division.storeid)');
	    $this->db->where('user.userid', $userid);
		$query = $this->db->get();
		return $query->result_array();

	}
	function delete_division($id){
		$this->db->where('divisionid', $id);
		$this->db->delete('division'); 
	}
	
}

