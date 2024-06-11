<?php 

class preloginEE extends ci_Controller{

    function index()
	{
	$this->load->model('preloginEEM');
	$this->load->view('preloginEEv');
	$this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');
	} 

	
	function validate()
	{   $this->load->model('preloginEEM');
	    $pw=$this->input->post('password');
		
		if($query=$this->preloginEEM->validate()){
			$newdata['password']=$pw;

			$this->session->set_userdata($newdata);
			redirect("http://localhost/project/index.php/exe_eng");
		
		}
		else {
			$this->load->view('loginview');
		}
    }
	
	
	
}
