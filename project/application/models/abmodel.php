<?php

class abmodel extends ci_model {

function create()
	{
		
		$create_data = array(
			'type' => $this->input->post('page1usertype'),
			'uname' => $this->input->post('page1uname'),
			'passw' => $this->input->post('page1pass') 							
		);
		
		$insert = $this->db->insert('ciuse',$create_data);
		return $insert;
	}


}
