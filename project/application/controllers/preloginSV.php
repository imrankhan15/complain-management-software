<?php 

class preloginSV extends ci_Controller{

    function index()
	{
	$this->load->model('preloginSVM');
	$this->load->view('preloginSVv');
	$this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');
	} 

	
	function validate()
	{   $this->load->model('preloginSVM');
	    $pw=$this->input->post('password');
		$type=$this->input->post('type');
		if($query=$this->preloginSVM->validate()){
			$newdata['password']=$pw;
			$newdata['type']=$type;
			$this->session->set_userdata($newdata);
			redirect("http://localhost/project/index.php/supervisor");
		
		}
		else {
			$this->load->view('loginview');
		}
    }
	
	
	
}