<?php

class ceshowmodel extends ci_model {

function getall()
	{
		$q1=$this->db->query("select * from complain where processed='0'");
		
		if($q1->num_rows()>0)
		{
		 foreach($q1->result() as $row)
		 {
		 $data[]=$row;
		 }
		return $data;
		
		}
		
	}

	

}


