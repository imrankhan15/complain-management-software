<?php

class comp_model extends ci_model {

function make()
	{
		$date=date("Y/m/d");

		$make_req = array(
			'type' => $this->input->post('reqtype'),
			'location' => $this->input->post('location'),
			'description'=>$this->input->post('des'),
			'date'=>$date,
            'maker' => $this->input->post('madeby')			
		);
		
		$insert = $this->db->insert('complain',$make_req);
		return $insert;
	}
	
	function getall()
	{
	    $maker=$this->input->post('mak');
		$q=$this->db->query("select * from complain_status,complain where complain_status.ref=complain.ref and complain.maker like '%$maker%'");
		
		if($q->num_rows()>0)
		{
		 foreach($q->result() as $row)
		 {
		 $data[]=$row;
		 }
		return $data;
		
		}
		
	}
	


}
