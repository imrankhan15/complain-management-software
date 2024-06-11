<?php 

class supervisorlogout extends ci_Controller{

    function index()
	{
	$this->session->unset_userdata('password');
	$this->session->unset_userdata('type');
	redirect("http://localhost/project/index.php/login");
	} 

	


}