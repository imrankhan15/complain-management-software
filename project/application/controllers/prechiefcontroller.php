<?php 

class prechiefcontroller extends ci_Controller{
	 public function __construct()
        {
		
			 
             parent::__construct();
			 $this->unit->active(FALSE);
            
        }
    function index()
	{
	$this->load->model('cemodel');
	$data3['row1']=$this->cemodel->getall();
	$this->load->view('prechiefview',$data3);
	} 
}
