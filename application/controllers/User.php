<?php
class User extends CI_Controller {

    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	public function __construct()
    {
	
        parent::__construct();
               
    }
    //Admin
    public function allusers()
		{
        $result=$this->db->query("SELECT * FROM users ")->result_array();
        $data['users']=$result;
        $data['main_content'] = 'admin/all_user';
        $this->load->view('template/admin_template', $data);  
		}
		
		public function login()
		{	
			$this->load->model('User_model');
			$username=$this->input->post('username',TRUE);
			$password=$this->encrypt_decrypt('encrypt',$this->input->post('password',TRUE));			
			
			$data = array(
				'title' => 'Login',
				'heading' => 'My Heading',
				'message' => 'My Message'
			);
					if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
			$this->form_validation->set_rules('username', 'User Name', 'trim|required');	
			$this->form_validation->set_rules('password', 'Password', 'trim|required');	
				if ($this->form_validation->run())
				{
					$rows=$this->User_model->login($username,$password);
					if(count($rows) >0)
					{
					$this->session->set_userdata('logged_user',$rows);
					redirect("/myaccount");
					}
					else
					{
						$this->session->set_flashdata('login_faild',"You are not authorised user, Please check your username and password again.");
					}
				}
		}
			
			$this->load->view('user/login',$data);
		}
		
			public function coustomer_signup()
		{
			$data = array(
               'title' => 'My Title',
               'heading' => 'My Heading',
               'message' => 'My Message'
          );
		  
		  
				if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
		$this->form_validation->set_rules('firstName', 'First Name', 'trim|required');	
		$this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|numeric|required|min_length[10]');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|is_unique[users.email_address]');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		if ($this->form_validation->run())
            {
			
			$path ='./images/profile_pictures/';	
			$name=$_FILES['profile_picture']['name'];
			$temp=$_FILES['profile_picture']['tmp_name'];
			
			$ext = pathinfo($name,PATHINFO_EXTENSION);			
			$name=str_replace(' ', '_', $name);
			if($name!='')
			{
				$newFile=mt_rand();
			$newname=$newFile.'_'.$name;
			}
			else
			{
			$newname='user-pic.jpg';
			}
			move_uploaded_file($temp, "$path/$newname");
		$userdata=array('first_name'=>$this->input->post('firstName',TRUE),'last_name'=>$this->input->post('last_name',TRUE),
			 'mobile'=>$this->input->post('mobile',TRUE),'email_address'=>$this->input->post('email',TRUE),
			 'password'=>$this->encrypt_decrypt('encrypt',$this->input->post('password',TRUE)),'profile_picture'=>$newname,'status'=>1,'role'=>1,'created_on'=>date('d-m-y H:i:s'),'updated_on'=>date('d-m-y H:i:s'));
		$this->db->insert('users', $userdata);
			unset($userdata);		
			redirect("/coustomer-signup-thankyou");
			}
		}
			$this->load->view('user/customer-signup',$data);
		}
		
			public function coustomer_signup_thankyou()
		{
				$data = array(
               'title' => 'My Title',
               'heading' => 'My Heading',
               'message' => 'My Message'
          );
			$this->load->view('user/coustomer_signup_thankyou',$data);
		}
		
		
			public function login_business_user()
		{
				$data = array(
               'title' => 'Login Business User',
               'heading' => 'Login Business User',
               'message' => 'My Message'
          );
			$this->load->view('user/login-business-user',$data);
		}
		
		
		
		public function username_available()
		{
			$uername=$this->input->post('username');
			$this->db->select('userid');
			$this->db->where('username', $uername);
			$query = $this->db->get('users');
			$isAvailable='';
				if ($query->num_rows() > 0) {
					$isAvailable='false';				
			} else {
				$isAvailable='true';
			}
						echo json_encode(array(
				'valid' => $isAvailable,
			));
				
		}	
		
	   public function email_available()
		{
			$uername=$this->input->post('username');
			$this->db->select('userid');
			$this->db->where('email_address', $uername);
			$query = $this->db->get('users');
			$isAvailable='';
				if ($query->num_rows() > 0) {
					$isAvailable='false';				
			} else {
				$isAvailable='true';
			}
						echo json_encode(array(
				'valid' => $isAvailable,
			));
				
		}
		
				/*Function for generate password*/
		public function encrypt_decrypt($action, $string) {
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

	public function login_email_validate()
		{
			$emailAddress=$this->input->post('email_address');
			$this->db->select('*');
			$this->db->where('email_address', $emailAddress);
			$query = $this->db->get('users');
			$isAvailable='';
				if ($query->num_rows() > 0) {
					$isAvailable='true';				
			} else {
				$isAvailable='false';
			}
						echo json_encode(array(
				'valid' => $isAvailable,
			));
				
		}	
		
		public function recover_password()
		{
				$data = array(
               'title' => 'Forgot Password',
               'heading' => 'My Heading',
               'message' => 'My Message'
          );
			$this->load->view('user/recover_password',$data);
		}
		
		
		public function change_password()
		{
				$data = array(
               'title' => 'recover_password',
               'heading' => 'My Heading',
               'message' => 'My Message'
          );
			$this->load->view('user/recover_password',$data);
		}
		public function plans_price()
		{
				$data = array(
               'title' => 'Plans & Pricing'
          );
		
			$data['main_content'] = 'user/plans-pricing';
				$this->load->view('includes/front_template', $data);  	
		}
		
		
		public function myaccount()
		{
			if(empty($this->session->userdata('logged_user')))
			{
				redirect('/login');
			}
				$data = array(
               'title' => 'My Account'
              
          );		
				$data['main_content'] = 'user/myaccount';
				$this->load->view('includes/front_template', $data);  	
		}
			
			
		
	
}
