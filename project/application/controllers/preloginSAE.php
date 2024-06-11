<?php 

class preloginSAE extends ci_Controller{

    function index()
	{
	$this->load->model('preloginSAEM');
	$this->load->view('preloginSAEv');
	$this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');
	} 

	
	function validate()
	{   $this->load->model('preloginSAEM');
	    $pw=$this->input->post('password');
		if($query=$this->preloginSAEM->validate()){
			$newdata['password']=$pw;

			$this->session->set_userdata($newdata);
			redirect("http://localhost/project/index.php/sub_ass_eng");
		
		}
		else {
			$this->load->view('loginview');
		}
    }
	
	
	
}
