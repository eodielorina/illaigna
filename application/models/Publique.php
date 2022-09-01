<?php
class Publique extends MY_Model{

	protected $table = 'public';
		public function deletepub($record_id){

	return $this->db->delete('public',array('ID_PUBLIC'=>$record_id));
	}	
	public function deletepubq($record_id){

	return $this->db->delete('public',array('ID_PUBLIC'=>$record_id));

	}
	public function select($record_id){
		$query=$this->db->get_where('public',array('ID_PUBLIC'=>$record_id));
			if($query->num_rows()> 0)
			{
				return $query->row();

			}
	}
public function updatepublique($record_id,$data){
		return $this->db->where('ID_PUBLIC',$record_id)
						->update('public',$data);
	}
}
?>