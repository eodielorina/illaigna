<?php
class User extends MY_Model{

	protected $table = 'utilisateur';
	public function idservice($id_serv){
		return $this->db->get_where('utilisateur',['ID_UTILISATEUR'=>$id_serv])->row_array();
	}
	public function deleteuser($record_id){

	return $this->db->delete('utilisateur',array('ID_UTILISATEUR'=>$record_id));

	}
	public function select($record_id){
		$query=$this->db->get_where('utilisateur',array('ID_UTILISATEUR'=>$record_id));
			if($query->num_rows()> 0)
			{
			return $query->row();
			}
	}

	public function updateuser($record_id,$data){
		return $this->db->where('ID_UTILISATEUR',$record_id)
						->update('utilisateur',$data);
	}
}
		

?>