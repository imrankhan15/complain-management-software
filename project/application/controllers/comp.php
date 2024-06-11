<?php 

class comp extends ci_Controller{
public function __construct()
        {
		
			 
             parent::__construct();
			  $this->unit->active(FALSE);
			  $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            
        }
    function index()
	{
	
	$this->load->view('comp_view');
	$this->load->model('comp_model');
	
	} 

	
	function validate()
	{ 		
		
		$this->form_validation->set_rules('des', 'Description', 'required');
		$this->form_validation->set_rules('addr', 'address', 'required');
		$this->form_validation->set_rules('madeby', 'Makername', 'required');
		$this->form_validation->set_rules('phone', 'Phoneno', 'required');
	      $this->load->model('comp_model');
		  if ($this->form_validation->run() == FALSE)
		  {
					$this->load->view('comp_view');
		  }
	      else{
				if($query = $this->comp_model->make())
				{$data='success';
				$this->load->view('val');
					
				}
				else
				{   $data='not';
					$this->load->view('sada');		
				}
			}
		
	}
	function view_status()
	{ 
	        $this->load->model('comp_model');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	        $this->form_validation->set_rules('mak', 'Makername', 'required');
			if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('comp_view');
				}
			else{
					if($data['rows']=$this->comp_model->getall()){
					 $this->unit->run($data,'is_array');
					 echo $this->unit->report();
					 $this->load->view('statusv',$data);
					 }
					 else{
					 $this->load->view('nodataview');
					 }
				}
					
					
			}
}
