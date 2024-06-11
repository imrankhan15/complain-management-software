<?php

class supervisorm extends ci_model {

function getall($a,$tmp)
	{
		$q=$this->db->query("select * from complain where processed='$a'");
		
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
		return $this->input->post('supreqtype');
	}

	function increment(){
                
                $qr=$this->input->post('supreqtype');
               $q=$this->db->query("update complain set processed='-1' , eid='1200' where ref='$qr'");
               return $q;
                
        }

function update()
	{
		$date=date("Y/m/d");
		$ustatus=array(
                'status'=>'task accomplished',
               'date'=>$date,
			    'ref'=> $this->input->post('supreqtype')
			//'location' => $this->input->post('location'),
			//'description'=>$this->input->post('des'),
			
            //'maker' => $this->input->post('madeby')			
		);
		
		$ins = $this->db->insert('complain_status',$ustatus);
		return $ins;
	}
        
        


}


