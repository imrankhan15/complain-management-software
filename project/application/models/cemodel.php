<?php

class cemodel extends ci_model {

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

	function makeS()
	{
                
                $usname1=$this->input->post('supreqtype1');
                $assign=$this->input->post('supreqtype');
                $q=$this->db->query("update engg set assigned='$assign' where id='$usname1'");
                return $this->input->post('supreqtype');
		
		
	}
	function makeT(){
				$usname1=$this->input->post('supreqtype1');
                $assign=$this->input->post('supreqtype');
				$q=$this->db->query("update technician set assigned='$assign' where id='$usname1'");
				return $this->input->post('supreqtype');
	}


       function incrementS(){
			   $id=$this->input->post('supreqtype1');
                $qr=$this->input->post('supreqtype');
               $q=$this->db->query("update complain set processed='1' , eid='$id' where ref='$qr'");
               return $q;
        }
		function incrementT(){
				$id=$this->input->post('supreqtype1');
                $qr=$this->input->post('supreqtype');
                 $q=$this->db->query("update complain set processed='-20' , eid='$id' where ref='$qr'");

                 return $q;
        }
		
        function updateS()
	{
             
		$date=date("Y/m/d");
		$ustatus=array(
                'status'=>'forwarded to superintending Engineer',
                'date'=>$date,
			    'ref'=> $this->input->post('supreqtype')
			//'location' => $this->input->post('location'),
			//'description'=>$this->input->post('des'),
			
            //'maker' => $this->input->post('madeby')			
		);
		$ins = $this->db->insert('complain_status',$ustatus);
		return $ins;
	}
	function updateT(){
	$date=date("Y/m/d");
	  $ustatus=array(
                'status'=>'forwarded to technician',
                'date'=>$date,
			    'ref'=> $this->input->post('supreqtype')
			//'location' => $this->input->post('location'),
			//'description'=>$this->input->post('des'),
			
            //'maker' => $this->input->post('madeby')			
		);
		
		$ins = $this->db->insert('complain_status',$ustatus);
		return $ins;
	
	}
        function getAllE(){
            $q=$this->db->query("SELECT * FROM `engg` WHERE `designation` like 'superintending%'");
		
		if($q->num_rows()>0)
		{
		 foreach($q->result() as $row)
		 {
		 $data[]=$row;
		 }
		return $data;
		
		}
        }
        function getAllTech(){
            $q=$this->db->query("SELECT * FROM `technician`");
		
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


