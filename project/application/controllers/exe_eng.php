<?php 

class exe_eng extends ci_Controller{
public function __construct()
        {
		
			 
             parent::__construct();
			 $this->unit->active(FALSE);
            
        }
    function index()
	{
	//$this->load->view('exe_engv');
	$this->load->model('exe_engm');
	$tmp=$this->session->userdata('password');
	$data3['row1']=$this->exe_engm->getall($tmp);
	$this->unit->run($data3['row1'], 'is_array');
        $data3['row2']=$this->exe_engm->getAllSd();
		$this->unit->run($data3['row2'], 'is_array');
	$this->load->view('exe_engv',$data3);
	echo $this->unit->report();
	
	} 

	
	function validate()
	{ 
	        $this->load->model('exe_engm');
                //print('sdf');
	        if($query1 = $this->exe_engm->make())
			{
                        //print('sdf');
                            if($query = $this->exe_engm->update()){
                                if($query=$this->exe_engm->increment()){
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
