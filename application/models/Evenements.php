<?php
class Evenements extends MY_Model{

	protected $table = 'evenement';
		
	public function deletevenement($record_id){

	return $this->db->delete('evenement',array('ID_EVENEMENT'=>$record_id));

	}
	public function select($record_id){
		$query=$this->db->get_where('evenement',['ID_EVENEMENT'=>$record_id]);
			if($query->num_rows()> 0)
			{
				return $query->row();
			}
	}
  	public function events($first_date,$second_date){
      $this->db->where('DATE_EVENEMENT_FIN >=',$first_date);
       $this->db->where('DATE_EVENEMENT_FIN <=',$second_date);
      $this->db->order_by('DATE_EVENEMENT','ASC');
        return $this->db->get('evenement')->num_rows();   
  	}
  	public function eventsemaine($first_date,$second_date,$lim,$of){
  	
         $this->db->where('DATE_EVENEMENT_FIN >=',$first_date);
        $this->db->where('DATE_EVENEMENT_FIN <=',$second_date);
       $this->db->order_by('DATE_EVENEMENT','ASC');
        $this->db->limit($lim,$of);
        $query= $this->db->get('evenement')->result(); 
        return $query;
  	}
	public function updateevenement($record_id,$data){
		return $this->db->where('ID_EVENEMENT',$record_id)
						->update('evenement',$data);
	}
	public function eventrech($lettre){
		$this->db->select('*');
		
		$this->db->like('NOM_EVENEMENT',$lettre);
		$this->db->or_like('TYPE_EVENEMENT',$lettre);
		$this->db->or_like('DESCRIPTION',$lettre);
		$this->db->or_like('DESCRIPTION',$lettre);
		$this->db->or_like('Lieu',$lettre);
		$this->db->or_like('Tarif',$lettre);


		$query=$this->db->get('evenement');
		return $query->result();
	}
	function recheredate($date)
    	{
    		$this->db->select('*');
         /*$this->db->like('DATE_EVENEMENT',$date);
          $this->db->or_like('DATE_EVENEMENT_FIN',$date);*/
          $this->db->where('DATE_EVENEMENT_FIN >=',$date);
          $this->db->where('DATE_EVENEMENT <=',$date); 
      	 $this->db->order_by('DATE_EVENEMENT','ASC');

          $query = $this->db->get('evenement');
          return $query->result();
      	}
}

?>
