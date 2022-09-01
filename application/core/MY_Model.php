<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// -----------------------------------------------------------------------------

class MY_Model extends CI_Model
{


		public function create($data){
			
			return $this->db->insert($this->table,$data);
		}
		
		
		public function read(){
			$query=$this->db->get($this->table);
			return $query->result();

		}
		
		public function update($record_id,$data){
			return	$this->db->where('id',$record_id)
			->update($this->table,$data);


		}	
		public function select($record_id){
			$query=$this->db->get_where($this->table,array('id'=>$record_id));
			if($query->num_rows()>0)
			{
				return $query->row();
			}
		}
		 public function delete($where)
		{
	    if(is_integer($where))
	    {
	        $where = array('id' => $where);
	    }
	    
	    return (bool) $this->db->where($where)
	                               ->delete($this->table);
	}
		

}
?>

