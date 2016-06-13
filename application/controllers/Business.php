<?php
class Business extends CI_Controller {

    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	 public function __construct()
    {
		
        parent::__construct();
               
    }
    
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
		
		
		
		public function business_signup()
		{	
				if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
		$this->form_validation->set_rules('firstName', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|numeric|required|min_length[10]');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|is_unique[users.email_address]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		if ($this->form_validation->run())
            {
			$userdata=array('first_name'=>$this->input->post('firstName',TRUE),'last_name'=>$this->input->post('last_name',TRUE),
			 'mobile'=>$this->input->post('mobile',TRUE),'email_address'=>$this->input->post('email',TRUE),'username'=>$this->input->post('username',TRUE),
			 'password'=>$this->encrypt_decrypt('encrypt',$this->input->post('password',TRUE)));
			$this->session->set_userdata('step1_data',$userdata);
			redirect("/business_signup2");
			}
		}
		$data['title']='Customer Sign Up step2';
		$this->load->view('business/business_signup',$data); 
		}
		
	
		public function business_signup2()
		{
			if(empty($this->session->userdata('step1_data')))
			{
				$this->session->set_flashdata('unauthorize_access',"Please fill step 1 register form");
			}
			
				if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
		$this->form_validation->set_rules('company_name', 'Comapny Name', 'trim|required');
		$this->form_validation->set_rules('industry_type', 'Industry Type', 'trim|required');
		$this->form_validation->set_rules('state', 'State', 'trim|required');
		$this->form_validation->set_rules('business_email', 'Business Email Address', 'trim|required|is_unique[users.business_email]');
		if ($this->form_validation->run())
            {
			$step2data=array('company_name'=>$this->input->post('company_name',TRUE),'industry_id'=>$this->input->post('industry_type',TRUE),'business_id'=>$this->input->post('business_type',TRUE),
			 'state'=>$this->input->post('state',TRUE),'business_email'=>$this->input->post('business_email',TRUE),'address'=>$this->input->post('Street_Address',TRUE),'city'=>$this->input->post('city',TRUE),'pincode'=>$this->input->post('pincode',TRUE),
			 'company_website'=>$this->input->post('company_website',TRUE), 'about_business'=>$this->input->post('about_business',TRUE),'operating_Hours'=>$this->input->post('operating_Hours',TRUE));
			 $step1data=$this->session->userdata('step1_data');
			$data=array_merge($step1data,$step2data);		
			$this->db->insert('users', $data);
			redirect("/business_thank_you");
			}
		}
				$data['state']=$this->state_list();
				$data['title']='Customer Sign Up step2';
				$data['industry']=$this->industry_list();
				$this->load->view('business/business_signup2',$data); 	
			
		}
		
		public function business_thank_you()
		{
				
				$this->load->view('business/business_thank_you');  	
			
		}
		public function state_list()
		{
				$query=$this->db->query('SELECT DISTINCT(state) FROM statelist');
				foreach ($query->result() as $row)
				{
					$state[]= $row->state;
				}
				return $state;
			
		}
		
		public function industry_list()
		{
				$query=$this->db->query('SELECT id,industry_name FROM industry');
				foreach ($query->result() as $row)
				{
					$industry[$row->id]= $row->industry_name;
				}
				return $industry;
			
		}
		
		public function business_list()
		{
			$business_id=$_REQUEST['business_id'];
				$query=$this->db->query("SELECT business_id,business_type FROM business where industry_id='".$business_id."'");
				foreach ($query->result() as $row)
				{
					$industry[$row->business_id]=$row->business_type;
				}
				$option="<option value=''>--Select Business Type---</option>";
				foreach ($industry as $key=>$value)
				{
					$option.="<option value='".$key."'>".$value."</option>";
				}
				echo $option;die;
			
		}
		
		public function city_list()
		{
			$state_name=$_REQUEST['state'];
			$query=$this->db->query("SELECT city_name FROM statelist WHERE	state='".$state_name."'");
				foreach ($query->result() as $row)
				{
					$state[]=$row->city_name;
				}
				$option="<option value=''>--Select City Name---</option>";
				foreach ($state as $key=>$value)
				{
					$option.="<option value='".$value."'>".$value."</option>";
				}
				echo $option;die;
			
		}
		
		public function fb_share()
		{
			
			if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('caption', 'Caption', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');
		if ($this->form_validation->run())
            {
		
				echo $title=$this->input->post('title',TRUE);
				echo $caption=$this->input->post('caption',TRUE);
				echo  $description=$this->input->post('description',TRUE);
	        	
			}
		}
		
		
				$data['main_content'] = 'social/fb_share';
				$this->load->view('template/admin_template', $data);  
			
		}
		
		
	
}
