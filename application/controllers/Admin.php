<?php
class Admin extends CI_Controller {

    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	 public function __construct()
    {
		
        parent::__construct();
               
    }
	
	public function login()
	{
		  $this->load->library('form_validation');
			if ($this->input->server('REQUEST_METHOD') == 'POST')
	{		
	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	$this->form_validation->set_rules('password', 'Password', 'trim|required');
	if ($this->form_validation->run())
		{
			$email=$this->session->userdata('email');
			 $password=$this->input->post('password');
			
			if($update_status==1)
			{
			
			 $this->session->set_userdata('update_password','your password has been updated successfully');
			 redirect('home');
			}
		}
	}
		$data = array(
		   'title' => 'Admin Dashboard',
		   'heading' => 'Admin Dashboard'
	  );
$this->load->view('admin/login',$data);
		
	}
			public function dashboard()
		{
				$data = array(
               'title' => 'Admin Dash-Board',
               'heading' => 'Admin Dash-Board'             
						);
				$data['main_content'] = 'admin/dashboard';
				$this->load->view('includes/admin_template', $data);  
		}
		public function add_newUser()
		{
			$this->load->model('Admin_model');		
			$data['industry_type'] =$this->Admin_model->industry_type(); 			
			$data['states'] =$this->Admin_model->stateList(); 			
			$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|is_unique[users.username]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[confirmPassword]');
			$this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required'); 
			$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.email_address]');
			$this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|numeric|required|numeric|min_length[10]');
			$this->form_validation->set_rules('city', 'City','trim|required');
			$this->form_validation->set_rules('state', 'State','trim|required');
			$this->form_validation->set_rules('country', 'Country','trim|required');
			$this->form_validation->set_rules('industry_id', 'Industry Type','trim|required');
			$this->form_validation->set_rules('business_id', 'Business Type','trim|required');
	 
		if ($this->form_validation->run() === FALSE)
		{
			$data['main_content'] = 'admin/add_user';
			$this->load->view('includes/admin_template', $data); 
		}
				else
				{ 
					 $user_data=array('first_name'=>$this->input->post('first_name',TRUE),'last_name'=>$this->input->post('last_name',TRUE),'email_address'=>$this->input->post('email',TRUE),'mobile' => $this->input->post('mobile',TRUE),
				'city'=>$this->input->post('city',TRUE),'state'=>$this->input->post('state',TRUE),'country'=>$this->input->post('country',TRUE),'pincode'=>$this->input->post('pincode',TRUE),'industry_id'=>$this->input->post('industry_id',TRUE),'business_id'=>$this->input->post('business_id',TRUE),'username'=>$this->input->post('username',TRUE),'address'=>$this->input->post('address',TRUE),			                   
										'created_on' =>date('Y-m-d H:i:s'),								
										'updated_on' =>date('Y-m-d H:i:s'),
										'status'=>0);
					$this->db->insert('users', $user_data); 
					echo "record hasbeen saved";
					die;
					
				}	
			}
			
		public function cityList()
		{
			$state=$this->input->get('state');
			$cities=$this->db->query("SELECT city_id,city_name FROM statelist WHERE state='".$state."'")->result_array();
				echo "<option value=''>--Select City Name--</option>";
			foreach($cities as $city){
			echo "<option value='".$city['city_id']."'>".$city['city_name']."</option>";
				}
			die;
		}	
			
		
			public function business_type()
		{
			$industry_id=$this->input->get('industry_id');
			$result=$this->db->query("SELECT business_id,business_type FROM business where  industry_id='".$industry_id."' ORDER BY business_type")->result_array();
			echo "<option>--Select Business Type--</option>";
			foreach($result as $business){
			echo "<option value='".$business['business_id']."'>".$business['business_type']."</option>";
				}
			die;
			 
		}
		
		
		
		public function check_emailUnique()
		{
			header('Content-type: application/json');
			$email_id=$this->input->get('email');
			 $query=$this->db->query("SELECT * FROM users where  email_address='".$email_id."'");
			
				if ($query->num_rows() > 0)
					{
					  
					$isAvailable = false;	
					} 
			else
					{
						$isAvailable = true;	
					}		
			
			echo json_encode(array(
				'valid' => $isAvailable,
			));
		}
		
		public function check_mobileUnique()
		{
			header('Content-type: application/json');
			$mobile=$this->input->get('mobile');
			 $query=$this->db->query("SELECT * FROM users where  mobile='".$mobile."'");
			
				if ($query->num_rows() > 0)
					{
					  
					$isAvailable = false;	
					} 
			else
					{
						$isAvailable = true;	
					}		
			
			echo json_encode(array(
				'valid' => $isAvailable,
			));
		}
		public function check_userNameUnique()
		{
			header('Content-type: application/json');
			$username=$this->input->get('username');
			 $query=$this->db->query("SELECT * FROM users where  username='".$username."'");
			
				if ($query->num_rows() > 0)
					{
					  
					$isAvailable = false;	
					} 
			else
					{
						$isAvailable = true;	
					}		
			
			echo json_encode(array(
				'valid' => $isAvailable,
			));
		}
		
		
	
		public function viewProfile()
		{
		$userid=base64_decode($this->input->get('id'));
		$data['userdata']=$this->db->query("SELECT * FROM users WHERE userid='".$userid."' ")->result_array();
		$data['main_content'] = 'admin/viewProfile';
		$this->load->view('includes/admin_template', $data); 
		}
		
		public function editProfile()
		{
			$this->load->model('Admin_model');	
		 $userid=base64_decode($this->input->get('id'));
		$data['states'] =$this->Admin_model->stateList(); 
		$data['industry_type'] =$this->Admin_model->industry_type(); 
		$data['userdata']=$this->db->query("SELECT * FROM users WHERE userid='".$userid."' ")->result_array();		
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|numeric|required|numeric|min_length[10]');
		$this->form_validation->set_rules('city', 'City','trim|required');
		$this->form_validation->set_rules('state', 'State','trim|required');
		$this->form_validation->set_rules('country', 'Country','trim|required');
		$this->form_validation->set_rules('industry_id', 'Industry Type','trim|required');
		$this->form_validation->set_rules('business_id', 'Business Type','trim|required');
	 
		if ($this->form_validation->run() === FALSE)
		{
		$data['main_content'] = 'admin/editProfile';
		$this->load->view('includes/admin_template', $data);  
		}
				else
				{  $userid=base64_decode($this->input->get('id'));
					 $user_data=array('first_name'=>$this->input->post('first_name',TRUE),'last_name'=>$this->input->post('last_name',TRUE),'mobile' => $this->input->post('mobile',TRUE),
				'city'=>$this->input->post('city',TRUE),'state'=>$this->input->post('state',TRUE),'pincode'=>$this->input->post('pincode',TRUE),'industry_id'=>$this->input->post('industry_id',TRUE),'business_id'=>$this->input->post('business_id',TRUE),'address'=>$this->input->post('address',TRUE),'updated_on' =>date('Y-m-d H:i:s'));
					$this->db->where('userid',$userid);
					$this->db->update('users', $user_data); 
					  redirect('/allusers', 'refresh');
					
				}	
		
		}
		
		public function deleteUser()
		{
			$userid=base64_decode($this->input->get('userid'));
			$this->db->delete('users', array('userid' => $userid)); 
		}	
		public function business_thankyou()
		{
				$data = array(
               'title' => 'Business-signup2',
               'heading' => 'Business-signup2'             
						);
			$this->load->view('user/business_thankyou',$data);
		}
		
	
}
