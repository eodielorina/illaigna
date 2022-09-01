<?php
class Urgence extends MY_Model{

	protected $table = 'urgence';
		public function deleteurg($record_id){

	return $this->db->delete('urgence',array('ID_URGENCE'=>$record_id));

	}	
	public function select($record_id){
		$query=$this->db->get_where('urgence',array('ID_URGENCE'=>$record_id));
			if($query->num_rows()> 0)
			{
				return $query->row();
			}
	}


	public function updateurgence($record_id,$data){
		return $this->db->where('ID_URGENCE',$record_id)
						->update('urgence',$data);
	}
}
?>