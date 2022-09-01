<?php
class Service extends MY_Model{

	protected $table = 'services';
	public function idservice($id_serv){
		return $this->db->get_where('services',['id_service'=>$id_serv])->row_array();
	}
	public function deleteservice($record_id){

	return $this->db->delete('services',array('ID_SERVICE'=>$record_id));

	}
	public function select($record_id){
		$query=$this->db->get_where('services',array('ID_SERVICE'=>$record_id));
			if($query->num_rows()> 0)
			{
			return $query->row();
			}
	}

		


	public function updateservice($record_id,$data){
		return $this->db->where('ID_SERVICE',$record_id)
						->update('services',$data);
	}
}
		

?>