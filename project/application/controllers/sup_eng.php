<?php 

class sup_eng extends ci_Controller{
	 public function __construct()
        {
		
			 
             parent::__construct();
             $this->unit->active(FALSE);
        }
	
    function index()
	{
	//$this->load->view('sup_engv');
	
	
	if($tmp = $this->session->userdata('password')){
		$this->load->model('sup_engm');
		$this->unit->run($tmp,'is_numeric');
		$data3['row1']=$this->sup_engm->getAll($tmp);
		$data3['row2']=$this->sup_engm->getAllE();
		$this->unit->run($data3,'is_array');
			echo $this->unit->report();
		$this->load->view('sup_engv',$data3);
	}
	else {
	redirect("http://localhost/project/index.php/login");
	}
	
	} 

	
	function validate()
	{ 
	        $this->load->model('sup_engm');
	        if($query1 = $this->sup_engm->make())
			{
                        if($query = $this->sup_engm->update())
                            if($query=$this->sup_engm->increment()){
                               $this->load->view('val'); 
                            }
			   
                         }
			else
			{   $data='not';
				$this->load->view('loginview');		
			}
	}
}
