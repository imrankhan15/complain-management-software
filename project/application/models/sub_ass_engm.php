<?php

class sub_ass_engm extends ci_model {

function getall($tmp)
	{
		$q=$this->db->query("select * from complain where processed='4' and eid='$tmp'");
		
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
                'status'=>'forwarded to supervisor',
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
				
                $qr=$this->input->post('supreqtype');
                $a=$this->input->post('sdiv');
                $b=$this->input->post('sarea');
                if($a=='electric'&&$b=='eme')$n=5;
                    elseif ($a=='plumbing'&&$b=='eme')$n=6;
                    elseif ($a=='hardware'&&$b=='eme')$n=7;
                    elseif ($a=='electric'&&$b=='ece')$n=8;
                    elseif ($a=='plumbing'&&$b=='ece')$n=9;
                    elseif ($a=='hardware'&&$b=='ece')$n=10;
                $q=$this->db->query("update complain set processed='$n' , eid='1280' where ref='$qr'");
               return $q;;
        }
       


}


