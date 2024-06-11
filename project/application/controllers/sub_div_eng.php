<?php 

class sub_div_eng extends ci_Controller{
public function __construct()
        {
		
			 
             parent::__construct();
             $this->unit->active(FALSE);
        }
    function index()
	{
		if($tmp = $this->session->userdata('password')){
			$this->load->model('sub_div_engm');
			$tmp = $this->session->userdata('password');
			$this->unit->run($tmp,'is_numeric');
			$data3['row1']=$this->sub_div_engm->getall($tmp);
				$data3['row2']=$this->sub_div_engm->getAllSd();
				$this->unit->run($data3,'is_array');
			echo $this->unit->report();
			$this->load->view('sub_div_engv',$data3);
		}
		else {
			redirect("http://localhost/project/index.php/login");
		}
	
	} 

	
	function validate()
	{ 
	       $this->load->model('sub_div_engm');
                //print('sdf');
	        if($query1 = $this->sub_div_engm->make())
			{
                        //print('sdf');
                            if($query = $this->sub_div_engm->update()){
                                if($query=$this->sub_div_engm->increment()){
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
