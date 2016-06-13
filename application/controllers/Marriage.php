<?php

class Marriage extends CI_Controller {
	  public function __construct()
    {
        parent::__construct();
	  
    }
    public function marriage_demo()
    {
	$this->load->view('marriage/demo');
	}
    
    public function sendNewsLetterToUser($to){
		date_default_timezone_set('EST');
		$email_config = Array(
         'protocol'  => 'smtp',
        'smtp_host' => '172.16.0.115',
		'smtp_timeout'=>'60',
        'smtp_port' => '25',
       /* 'smtp_user' => 'svfastads@gmail.com',
        'smtp_pass' => 'svfastads@123',*/       
        'mailtype'  => 'html',
     
        'newline'   => "\r\n"
    );
 
	$this->load->library('email',$email_config);
    $this->email->from('support@svfastads.com','support@svfastads.com');
    $this->email->to($to);
 
    $this->email->subject('SVfastads Confirmation');
    $this->email->message("<html>
<head>
<title>SVfastads Confirmation</title>
</head>
<body>

<table>
<tr>
  <td height=39 colspan=2>Thank you for submitting a new user request.</td>
  </tr>
  <tr>
  <td height=39 colspan=2>The SVfastads System has received your registration information for activation.</td>
  </tr>
  <tr>
  <td height=39 colspan=2>You will receive a confirmation email once your new account has been approved. If you do not receive an email within 48 hours, please contact your SUPERVALU representative for details.</td>
  </tr>
  <tr>
  <td height=39 colspan=2>Thank You</td>
  </tr>
</table>
<br/><br/><br/>
<table>
<tr>
  <td height=28 colspan=2>Notice:	This	email,	along	with	any	attachments,	is	intended	solely	for	the	use	of	the	individual	named	in	the	message	and	may	contain<br/>confidential	or	privileged	information.If you are not the	intended recipient of this	message,	please	return	and	delete	it	immediately.<br/><br/>
If	you	need	further	assistance,	please	e-mail	support@svfastads.com.<br/><br/>
SVfastads is a product of PureRED, Copyright 2006, All Rights Reserved.</td>
  </tr></table>
</body>
</html>");
    $this->email->send();
  }
  
  public function create_email_template()
  {
	  $data['main_content'] = 'newsletter/create_email_template';
				$this->load->view('template/admin_template', $data);  	
  }
  public function upload_file()
  {
	   $path ='./images/email_csv/';
		 $name=$_FILES['csv_email']['name'];
		 $newName=mt_rand().$name.'.csv';
		 $temp=$_FILES['csv_email']['tmp_name'];		
		 move_uploaded_file($temp, "$path/$newName");
		 $file=fopen("$path/$newName","r");
		 $csv = array_map('str_getcsv', file("$path/$newName"));
		 
		 foreach($csv as $k => $csva)
		 {
			 foreach($csva as $k1 =>$v1)
			 {
			 $array[]=$v1;
			 $this->db->query("INSERT INTO newsletter (email) VALUES('".$v1."')");
		     }
		     redirect('/upload_csv');
			 
		}
		
		
		
	
  }
  public function upload_csv()
  {
	 
				  if ($this->input->server('REQUEST_METHOD') == 'POST')
        { 
			$this->load->library('form_validation');
			$this->form_validation->set_rules('csv_email', 'Csv File', 'required');
			
			   if($this->form_validation->run() == FALSE)
				{
			
					$this->upload_file();
				}
		}
				$data['main_content'] = 'newsletter/upload_csv';
				$this->load->view('template/admin_template', $data);  	
  }

}
?>
