<?php 

class ce extends ci_Controller{
	 public function __construct()
        {
		
			 
             parent::__construct();
			 $this->unit->active(FALSE);
            
        }
    function index()
	{
		if($tmp = $this->session->userdata('password')){
			$this->load->model('cemodel');
				$g=$this->input->post('reqtype');
				$expected_result='No';
				$this->unit->run($g, 'No');
			$data3['row1']=$this->cemodel->getall();
				if($g=='No')$data3['row2']=$this->cemodel->getAllE();
				else $data3['row2']=$this->cemodel->getAllTech();
				$this->unit->run($data3, 'is_array');
				
			if($g=='No')$this->load->view('ceview',$data3);
			else $this->load->view('ceTview',$data3);
			echo $this->unit->report();
		}
		else {
		redirect("http://localhost/project/index.php/login");
		}
	} 

	
	function validate()
	{ 
	       $this->load->model('cemodel');
               
	        if($query1 = $this->cemodel->makeS())
			{
                        if($query = $this->cemodel->updateS()){
								$id=$this->input->post('supreqtype1');
								$this->unit->run($id, 'is_string');
								echo $this->unit->report();
								if($query=$this->cemodel->incrementS()){
								   $this->load->view('val'); 
								}
							}
			   
                         }
			else
			{   $data='not';
				$this->load->view('loginview');		
			}
	}
	function validateT()
	{ 
	       $this->load->model('cemodel');
               
	        if($query1 = $this->cemodel->makeT())
			{
                        if($query = $this->cemodel->updateT()){
								$id=$this->input->post('supreqtype1');
								if($query=$this->cemodel->incrementT()){
								   $this->load->view('val'); 
								}
							}
			   
                         }
			else
			{   $data='not';
				$this->load->view('loginview');		
			}
	}



}
