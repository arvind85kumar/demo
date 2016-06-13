<?php
class Social extends CI_Controller {

    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	 public function __construct()
    {
		
        parent::__construct();
               
    }
		
		public function admin_login_success()
		{
				$data['main_content'] = 'social/admin_success';
				$this->load->view('template/admin_template', $data);  	
			
		}
		public function share()
		{
			
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
