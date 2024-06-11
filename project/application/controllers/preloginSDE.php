<?php 

class preloginSDE extends ci_Controller{

    function index()
	{
	$this->load->model('preloginSDEM');
	$this->load->view('preloginSDEv');
	$this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');
	} 

	
	function validate()
	{   $this->load->model('preloginSDEM');
	    $pw=$this->input->post('password');
		if($query=$this->preloginSDEM->validate()){
			$newdata['password']=$pw;

			$this->session->set_userdata($newdata);
			redirect("http://localhost/project/index.php/sub_div_eng");
		
		}
		else {
			$this->load->view('loginview');
		}
    }
	
	
	
}
