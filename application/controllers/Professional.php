<?php
class Professional extends CI_Controller {

    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	 public function __construct()
    {
		
        parent::__construct();
        $this->load->model('professional_model');
               
    }
   
	  public function count_professional($company_name)
        {
			
			if($company_name!='')
			{
				$this->db->like('company_name', $company_name);
			}
			if($email!='')
			{
				$this->db->like('email',$this->input->post('email')); 
			}
			if($this->input->post('sort_by_field')=='1')
			{
				$this->db->where('account_status', 1); 				
			}
			$data = $this->db->get('users')->num_rows(); 
			echo $this->db->last_query();
			return $data;
		}
    
    public function professional_find_pros_category()
    {
		print_r($_REQUEST);
			$this->load->helper('form');
			$this->load->model('professional_model');
			$this->load->library('pagination');	
			$config['base_url'] =  base_url()."/Professional/professional_find_pros_category";
			$config['uri_segment'] = 3;
			$company_name='';
			if($this->input->post('company_name')!='')
			{
				$company_name=$this->input->post('company_name');
			}
			
			$config['total_rows'] = $this->count_professional($company_name);
			$config['per_page'] = 10;	

			$config['full_tag_open'] = '<nav class="ideas-listing-pagination"><ul class="pagination">';
			$config['full_tag_close'] = '</ul></nav><!--pagination-->';

			$config['first_link'] = '&laquo; First';
			$config['first_tag_open'] = '<li class="prev page">';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = 'Last &raquo;';
			$config['last_tag_open'] = '<li class="next page">';
			$config['last_tag_close'] = '</li>';

			$config['next_link'] = 'Next &raquo;';
			$config['next_tag_open'] = '<li class="next page">';
			$config['next_tag_close'] = '</li>';

			$config['prev_link'] = '&laquo; Previous';
			$config['prev_tag_open'] = '<li class="prev page">';
			$config['prev_tag_close'] = '</li>';

			$config['cur_tag_open'] = '<li class="active"><a href="">';
			$config['cur_tag_close'] = '</a></li>';

			$config['num_tag_open'] = '<li class="page">';
			$config['num_tag_close'] = '</li>';		
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['list_companies']=$this->professional_model->list_professional();
			$data["Users"] = $this->professional_profiles($config['per_page'],$page,$company_name,$searchEmail);
			$data["links"] = $this->pagination->create_links();
			$data['main_content'] = 'professional/professional_find';
			$this->load->view('includes/front_template', $data);  	
		
	}
		
    public function professional_profiles($limit, $start,$searchByCompanyName,$email) {
			if($searchByCompanyName!='')
			{
				$this->db->like('company_name', $searchByCompanyName);
				
			}
			if($email!='')
			{
				$this->db->like('email',$this->input->post('email')); 
			}
			if($this->input->post('sort_by_field')=='1')
			{
				$this->db->where('account_status', 1); 				
			}
			    $this->db->limit($limit,$start);
			$query = $this->db->get('users'); 
			echo $this->db->last_query();
			return $query->result();
      
		}
    
    


		public function write_reviews()
		{
                    		 
					if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
			$this->form_validation->set_rules('review_text', 'Review Message', 'trim|required|min_length[20]');
		$this->form_validation->set_rules('conditions', 'Term & Conditions', 'required');   
		if ($this->form_validation->run())
            {
		$data=array('review_text'=>ucfirst($this->input->post('review_text',TRUE)),'coustomer_user_Id'=>'5','coustomer_ip_address'=>'192.168.1.68',
'created_on'=>date('d-m-y H:i:s'));
		$this->db->insert('coustomer_reviews', $data);
			redirect("/professioanl_reviews");
			}
		}
                }
              

		public function professioanl_profile()
		{
			
                   $userid=5;
                    $this->load->model("Professional_model");
		$data['profile']=$this->Professional_model->professioanl_profile($userid);
				
				$data['main_content'] = 'professional/professional_profile';
				$this->load->view('includes/front_template', $data);  	
			
		}
		
		public function professional_promotions()
		{
				$this->load->model("Professional_model");
				$data['coustmoer_promotions']=$this->Professional_model->get_promotions();
				$data['main_content'] = 'professional/professional-promotions';
				$this->load->view('includes/front_template', $data);  	
			
		}
		public function upload_picture()
		{	$path ="./images/promotion/";					
			$name=$_FILES['promotion_pic1']['name'];
			$temp=$_FILES['promotion_pic1']['tmp_name'];
			
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
			return $newname;
					
		}
		
		public function upload_profile_pic()
		{
			$path ="./images/user_picture/";					
			$name=$_FILES['user_profile_picture']['name'];
			$temp=$_FILES['user_profile_picture']['tmp_name'];
			
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
			return $newname;
		}
		
		public function upload_logo()
		{
			$path ="./images/business_logo/";					
			$name=$_FILES['business_logo']['name'];
			$temp=$_FILES['business_logo']['tmp_name'];
			
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
			return $newname;
		}
		
		public function professional_aboutus()
		{
				 
					if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
			$this->form_validation->set_rules('about_us', 'About Us', 'trim|required|min_length[50]');
		$this->form_validation->set_rules('mobile', 'Contact Number', 'trim|required|min_length[10]');
		$this->form_validation->set_rules('operating_hours', 'operating Hours', 'trim|required');	   
		if ($this->form_validation->run())
            {
			$profile_pic=$this->upload_profile_pic();
			$business_logo=$this->upload_logo();
		$data=array('about_us'=>ucfirst($this->input->post('about_us',TRUE)),' 	business_logo'=>$business_logo,
			 'facebook_page'=>$this->input->post('facebook_page',TRUE),'twitter_page'=>$this->input->post('twitter_page',TRUE),
			'google_plus_page'=>$this->input->post('google_plus_page',TRUE),'added_date_on'=>date('d-m-y H:i:s'),'updated_on'=>date('d-m-y H:i:s'));
		$this->db->insert('prof_user_business_details', $data);
		$userdata=array('profile_picture'=>$profile_pic,'mobile'=>$this->input->post('mobile',TRUE));
			unset($data);		
			//redirect("/promotions");
			}
		}
				 
				 
				 $data['main_content'] = 'professional/about_us';
				$this->load->view('template/admin_template', $data);  	
		}
		
		 public function promotions()
		{
					if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
		$this->form_validation->set_rules('promotion_title', 'Promotion Title', 'trim|required');	
		$this->form_validation->set_rules('promotion_detail', 'Promotion Detail', 'trim|required|min_length[50]');
		$this->form_validation->set_rules('promotion_period', 'Promotion Period', 'trim|required');	   
		if ($this->form_validation->run())
            {
			
			$fileuploaded=$this->upload_picture();
		$data=array('promotian_title'=>ucfirst($this->input->post('promotion_title',TRUE)),'promotional_details'=>$this->input->post('promotion_detail',TRUE),
			 'promotion_period'=>$this->input->post('promotion_period',TRUE),'term_conditions'=>$this->input->post('terms',TRUE),
			'promotial_pictures'=>$fileuploaded,'status'=>1,'added_on'=>date('d-m-y H:i:s'),'updated_on'=>date('d-m-y H:i:s'));
			
		$this->db->insert('promotional_offers', $data);
			unset($data);		
			redirect("/promotions");
			}
		}
			
				$data['main_content'] = 'professional/promotions';
				$this->load->view('template/admin_template', $data);  	
		}
		
		 
		
		
		
		public function professioanl_find()
		{
				print_r($_REQUEST);
				$this->load->model("Professional_model");
				$data['list_profession']=$this->Professional_model->professioanl_find();
				$data['main_content'] = 'professional/find_professional';
				$this->load->view('includes/front_template',$data);  	
			
		}
		public function professioanl_awards()
		{
			
				$data['main_content'] = 'professional/professioanl_awards';
				$this->load->view('includes/front_template', $data);  	
			
		}
		
		public function professioanl_reviews()
		{
				$data['main_content'] = 'professional/professioanl_reviews';
				$this->load->view('includes/front_template',$data);  	
			
		}
		public function professional_ideas()
		{
				$data['main_content'] = 'professional/professional_ideas';
				$this->load->view('includes/front_template',$data);  	
			
		}
		
		public function business_signup2()
		{
				
				$this->load->view('business/business_signup2'); 	
			
		}
		
		public function business_thank_you()
		{
				
				$this->load->view('business/business_thank_you');  	
			
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
