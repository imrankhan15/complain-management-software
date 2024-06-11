<?php 

class preloginSE extends ci_Controller{

	
    function index()
	{
	
	$this->load->model('preloginSEM');
	$this->load->view('preloginSEv');
	$this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');
	} 

	
	function validate()
	{   $this->load->model('preloginSEM');
	    
		$pw=$this->input->post('password');
		if($query=$this->preloginSEM->validate()){
			$newdata['password']=$pw;

			$this->session->set_userdata($newdata);
			redirect("http://localhost/project/index.php/sup_eng");
		
		}
		else {
			$this->load->view('loginview');
		}
    }
	
	
	
}