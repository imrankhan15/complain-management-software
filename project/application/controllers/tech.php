<?php 

class tech extends ci_Controller{
public function __construct()
        {
			parent::__construct();
			 $this->unit->active(FALSE);
        }
    function index()
	{
	//$this->load->view('sup_engv');
		if($tmp = $this->session->userdata('password')){
			$this->load->model('techm');
			$tmp = $this->session->userdata('password');
			$this->unit->run($tmp,'is_numeric');
			$data3['row1']=$this->techm->getall($tmp);
			$this->unit->run($data3,'is_array');
			echo $this->unit->report();
			$this->load->view('techv',$data3);
		}
		else {
			redirect("http://localhost/project/index.php/login");
		}
	} 

	
	function validate()
	{ 
	        $this->load->model('techm');
	        if($query1 = $this->techm->make())
			{
                        if($query = $this->techm->update())
                            if($query=$this->techm->increment()){
                               $this->load->view('val'); 
                            }
			   
                         }
			else
			{   $data='not';
				$this->load->view('loginview');		
			}
	}
}