<?php

class exe_engm extends ci_model {

function getall($tmp)
	{
		$q=$this->db->query("select * from complain where processed='2' and eid='$tmp'");
		
		if($q->num_rows()>0)
		{
		 foreach($q->result() as $row)
		 {
		 $data[]=$row;
		 }
		return $data;
		
		}
		
	}

	function make()
	{
		$usname1=$this->input->post('supreqtype1');
                $assign=$this->input->post('supreqtype');
                $q=$this->db->query("update engg set assigned='$assign' where id='$usname1'");
               
		return $this->input->post('supreqtype');
		
	}

function update()
	{
		$date=date("Y/m/d");
		$ustatus=array(
                'status'=>'forwarded to sub-divisional engineer',
                'date'=>$date,
			'ref'=> $this->input->post('supreqtype')
			//'location' => $this->input->post('location'),
			//'description'=>$this->input->post('des'),
			
            //'maker' => $this->input->post('madeby')			
		);
		
		$ins = $this->db->insert('complain_status',$ustatus);
		return $ins;
	}
        function increment(){
				$id=$this->input->post('supreqtype1');
                $qr=$this->input->post('supreqtype');
               $q=$this->db->query("update complain set processed='3' , eid='$id' where ref='$qr'");
               return $q;
        }
        function getAllSd(){
            $q=$this->db->query("SELECT * FROM `engg` WHERE `designation` like 'subdivisional%'");
		
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


