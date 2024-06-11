<?php

class preloginTM extends ci_model{
	function validate(){

		$un=$this->input->post('username');
		$pw=$this->input->post('password');
		
		$q1=$this->db->query("select * from technician where usname='$un' and id='$pw'");
			
			if($q1->num_rows()>0)
			{
			 
			return 1;
			
			}
			else return 0;
	}
}