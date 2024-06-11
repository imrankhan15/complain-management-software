<?php 

class supervisor extends ci_Controller{
public function __construct()
        {
		
			 
             parent::__construct();
             $this->unit->active(FALSE);
        }
    function index()
	{
			if($tmp = $this->session->userdata('password')){
            $this->load->model('supervisorm');
			$this->unit->run($tmp,'is_numeric');
			$type= $this->session->userdata('type');
			$tmp = $this->session->userdata('password');
            
            
            $data3['row1']=$this->supervisorm->getall($type,$tmp);
			$this->unit->run($data3,'is_array');
			echo $this->unit->report();
            $this->load->view('supervisorv',$data3);
			}
			else {
				redirect("http://localhost/project/index.php/login");
			}
	
	} 

	
	function validate()
	{ 
	       $this->load->model('supervisorm');
                //print('sdf');
	        if($query1 = $this->supervisorm->make())
			{
                        //print('sdf');
                            if($query = $this->supervisorm->update()){
                                if($query=$this->supervisorm->increment()){
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
