<?php
class Error extends CI_Controller
{
	public function error_404()
	{
		$data["heading"] = "404 Page Not Found";
		$data["message"] = "The page you requested was not found ";
			$data['main_content'] = 'errors/error';
					$this->load->view('includes/front_template',$data);       
	}
}
?>
