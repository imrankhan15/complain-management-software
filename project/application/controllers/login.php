<?php 

class login extends ci_Controller{
public function __construct()
        {
		
			 
             parent::__construct();
			 $this->unit->active(FALSE);
            
        }
    function index()
	{
	
	$this->load->view('loginview');
	$this->load->model('cemodel');
	} 

	
	function navigate()
	{ $this->load->model('cemodel');
	    $type=$this->input->post('usertype');
		$this->unit->run($type,'is_string');
		$this->unit->run($type,'is_numeric');
		echo $this->unit->report();
	    if($type=='Office'||$type=='Hall'||$type=='Personal')
        {$this->load->view('comp_view');}
         
        elseif($type==0)
        {
		redirect("http://localhost/project/index.php/preloginCE");
        }		
         
        elseif($type==1)
        {//$this->load->view('sup_eng');
		redirect("http://localhost/project/index.php/preloginSE");

		}				 
	    
		elseif($type==2)
        {
		//$this->load->view('exe_eng');
		redirect("http://localhost/project/index.php/preloginEE");
		}		
	
	    elseif($type==3)
        {//$this->load->view('sub_div_eng');
		redirect("http://localhost/project/index.php/preloginSDE");
		}		

	   
	   elseif($type==4)
        {//$this->load->view('sub_ass_eng');
		redirect("http://localhost/project/index.php/preloginSAE");
		}	
 
       elseif($type==5) 
	   {//$this->load->view('supervisor');
		redirect("http://localhost/project/index.php/preloginSV");

		}
		else {
		redirect("http://localhost/project/index.php/preloginT");
		}

	}
	
	
	
}


