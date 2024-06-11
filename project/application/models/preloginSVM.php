<?php

class preloginSVM extends ci_model{
	function validate(){

		$un=$this->input->post('username');
		$pw=$this->input->post('password');
		$tp=$this->input->post('type');
		
		$q1=$this->db->query("select * from supervisor where usname='$un' and id='$pw' and type='$tp'");
			
			if($q1->num_rows()>0)
			{
			 
			return 1;
			
			}
			else return 0;
	}
}