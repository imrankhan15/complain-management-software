<?php 

class sub_ass_eng extends ci_Controller{
public function __construct()
        {
		
			 
             parent::__construct();
             $this->unit->active(FALSE);
        }
    function index()
	{
	if($tmp = $this->session->userdata('password')){
		$this->load->model('sub_ass_engm');
		$tmp = $this->session->userdata('password');
		$this->unit->run($tmp,'is_numeric');
		$data3['row1']=$this->sub_ass_engm->getall($tmp);
		$this->unit->run($data3,'is_array');
			echo $this->unit->report();
			
		$this->load->view('sub_ass_engv',$data3);
	}
	else {
		redirect("http://localhost/project/index.php/login");
	}
	
	} 

	
	function validate()
	{ 
              $this->load->model('sub_ass_engm');
                //print('sdf');
	        if($query1 = $this->sub_ass_engm->make())
			{
                        //print('sdf');
                            if($query = $this->sub_ass_engm->update()){
                                if($query=$this->sub_ass_engm->increment()){
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
