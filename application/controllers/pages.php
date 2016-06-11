<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller
{
public function view($page = 'home')
{


	if ( ! file_exists('application/views/pages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}
	
	$data['title'] = ucfirst($page); // Capitalize the first letter

	$this->load->view('includes/front_header', $data);
	$this->load->view('pages/'.$page, $data);
	$this->load->view('includes/front_footer', $data);

}
public function template()
{
	$this->load->view('pages/theme-1');
}
public function master_template($page = 'master_template')
{

	
if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
}
	
			
	if ( ! file_exists('application/views/pages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}

	$data['title'] = ucfirst($page); // Capitalize the first letter

	
	$this->load->view('pages/'.$page, $data);
	
}
public function contact_us_email($name,$email,$comment)
{
	
	date_default_timezone_set('EST');
	$email_config = Array(
         'protocol'  => 'smtp',
        $config['smtp_host'] = "ssl://smtp.gmail.com";
$config['smtp_port'] = "465";
$config['smtp_user'] = "arvind124gangwar@gmail.com"; 
$config['smtp_pass'] = "welcome@123";     
        'mailtype'  => 'html',
     
        'newline'   => "\r\n"
    );
	$this->load->library('email',$email_config);
    $this->email->from('support@mybusinessplan.com');
    $this->email->to('support@mybusinessplan.com');
 
    $this->email->subject("New Contact Request from ".$name." at ".$email." ");
    $this->email->message("<html>
<head>
<title>My Business Plan Confirmation</title>
</head>
<body>
<table width=100%>
<tr>
  <td height=39 colspan=2>".$comment."</td>
  </tr>
  <tr>
  <td height=39 colspan=2>My Business Plan is a product of PureRED, Copyright 2006, All Rights Reserved.</td>
  </tr>
 
</table>

</body>
</html>");

    $this->email->send();
	
	}


public function contact_us()
{
	if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email Id', 'trim|email|required|xss_clean');
			$this->form_validation->set_rules('comment', 'Comment', 'trim|email|required|xss_clean');
		if ($this->form_validation->run())
            {
		
				 $name=$this->input->post('first_name',TRUE);
				 $email=$this->input->post('email',TRUE);
				  $comment=$this->input->post('comment',TRUE);
				$this->contact_us_email($name,$email,$comment);
	        	//$this->form_validation->set_rules('thanks', 'Your request has been submitted', 'trim');
			}
		}
		
		$data['main_content'] = 'pages/contact_us';
	 	 $this->load->view('includes/front_template', $data);
}
public function flyers_home()
{ 
 $data['main_content'] = 'pages/flyers_home';	
 $this->load->view('includes/popup_template_exmple', $data); 	
}
public function posters_home()
{ 
 $data['main_content'] = 'pages/posters_home';	
 $this->load->view('includes/popup_template_exmple', $data); 	
}
public function shelf_home()
{ 
 $data['main_content'] = 'pages/shelf_home';	
 $this->load->view('includes/popup_template_exmple', $data); 	
}
}
