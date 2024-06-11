<?php 

class ab extends ci_Controller{

    function index()
	{
	//$data['data1']="working";
	//$this->load->model('sa');
	$this->load->view('sada');
	//$this->load->model('abmodel');
	} 

	
	function validate()
	{ 
	        $this->load->model('abmodel');
	        if($query = $this->abmodel->create())
			{$data='success';
			$this->load->view('val');
				
			}
			else
			{   $data='not';
				$this->load->view('sada');		
			}
	}
	
	function r_complain()
	{ 
	    
	
	
	}
}


