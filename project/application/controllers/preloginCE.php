<?php 

class preloginCE extends ci_Controller{

    function index()
	{
	$this->load->model('preloginCEM');
	$this->load->view('preloginCEv');
	
	
	} 

	
	function validate()
	{   $this->load->model('preloginCEM');
	    $pw=$this->input->post('password');
		if($query=$this->preloginCEM->validate()){
			$newdata['password']=$pw;

			$this->session->set_userdata($newdata);
			redirect("http://localhost/project/index.php/prechiefcontroller");
		
		}
		else {
			$this->load->view('loginview');
		}
    }
	
	
	
}
