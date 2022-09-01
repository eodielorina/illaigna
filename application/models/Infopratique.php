<?php
class Infopratique extends MY_Model{

	protected $table = 'infopratique';

	
	public function deleteinfos($record_id){

	return $this->db->delete('infopratique',array('ID_INFOP'=>$record_id));

	}
	public function select($record_id){
		$query=$this->db->get_where('infopratique',array('ID_INFOP'=>$record_id));
			if($query->num_rows() > 0)
			{
				return $query->row();		
			}
	}
	public function updateinfos($record_id,$data){
		return $this->db->where('ID_INFOP',$record_id)
						->update('infopratique',$data);
	}
}
?>