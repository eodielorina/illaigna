<?php
class Pharmacie extends MY_Model{

	protected $table = 'pharmacie_de_garde';
	public function deletepharm($record_id){

	return $this->db->delete('pharmacie_de_garde',array('ID_PHARMACIE'=>$record_id));

	}	
	public function select($record_id){
		$query=$this->db->get_where('pharmacie_de_garde',array('ID_PHARMACIE'=>$record_id));
			if($query->num_rows()> 0)
			{
				return $query->row();
			}
		
}

	public function updatepharm($record_id,$data){
		return $this->db->where('ID_PHARMACIE',$record_id)
						->update('pharmacie_de_garde',$data);
	}
}
?>