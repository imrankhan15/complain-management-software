<?php

class techm extends ci_model {

function getall($tmp)
	{
		$q=$this->db->query("select * from complain where processed='-20' and eid='$tmp'");
		
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
                $id=$this->input->post('supreqtype1');
                $qr=$this->input->post('supreqtype');
               $q=$this->db->query("update complain set processed='-1' , eid='1300' where ref='$qr'");
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


