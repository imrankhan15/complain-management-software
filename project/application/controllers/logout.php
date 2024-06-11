<?php 

class logout extends ci_Controller{

    function index()
	{
	$this->session->unset_userdata('password');
	redirect("http://localhost/project/index.php/login");
	} 

	


}