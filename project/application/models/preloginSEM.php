<?php

class preloginSEM extends ci_model{
	function validate(){

		$un=$this->input->post('username');
		$pw=$this->input->post('password');
		$desig='superintending engineer';
		$q1=$this->db->query("select * from engg where usname='$un' and id='$pw' and designation='$desig'");
			
			if($q1->num_rows()>0)
			{
			 
			return 1;
			
			}
			else return 0;
	}
}