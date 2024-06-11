<?php 

class preloginT extends ci_Controller{

    function index()
	{
	$this->load->model('preloginTM');
	$this->load->view('preloginTv');
	$this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');
	} 

	
	function validate()
	{   $this->load->model('preloginTM');
	    $pw=$this->input->post('password');
		if($query=$this->preloginTM->validate()){
			$newdata['password']=$pw;

			$this->session->set_userdata($newdata);
			redirect("http://localhost/project/index.php/tech");
		
		}
		else {
			$this->load->view('loginview');
		}
    }
	
	
	
}
